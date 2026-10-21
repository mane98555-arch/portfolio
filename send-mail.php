<?php
/**
 * Contact Form Email Handler for Suraj Mane Portfolio
 * Sends incoming inquiry emails to surajrmane45@gmail.com
 * Engine 1: FormSubmit API (Reliable Delivery directly to Gmail)
 * Engine 2: PHP mail() fallback (runs ONLY if FormSubmit fails)
 */

// Detect AJAX request
$is_ajax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')
        || (isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false)
        || isset($_POST['is_ajax']);

if ($is_ajax) {
    header('Content-Type: application/json; charset=UTF-8');
}

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    if ($is_ajax) {
        http_response_code(405);
        echo json_encode(['status' => 'error', 'message' => 'Method not allowed.']);
        exit;
    } else {
        header('Location: index.php#contact');
        exit;
    }
}

// Target email
$to = 'surajrmane45@gmail.com';

// Helper to sanitize & enforce valid UTF-8
function safe_post($key, $default = '') {
    if (!isset($_POST[$key])) return $default;
    $val = trim((string)$_POST[$key]);
    if (function_exists('mb_convert_encoding')) {
        $val = mb_convert_encoding($val, 'UTF-8', 'UTF-8');
    }
    return strip_tags($val);
}

// Sanitize inputs
$name    = safe_post('name');
$email   = filter_var(safe_post('email'), FILTER_SANITIZE_EMAIL);
$phone   = safe_post('phone', 'Not provided');
$service = safe_post('service', 'General Inquiry');
$subject = safe_post('subject', 'New Website Inquiry');
$message = safe_post('message');

// Validation
if (empty($name)) {
    if ($is_ajax) {
        echo json_encode(['status' => 'error', 'message' => 'Please enter your name.']);
        exit;
    } else {
        header('Location: index.php?error=name#contact');
        exit;
    }
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    if ($is_ajax) {
        echo json_encode(['status' => 'error', 'message' => 'Please enter a valid email address.']);
        exit;
    } else {
        header('Location: index.php?error=email#contact');
        exit;
    }
}

if (empty($message)) {
    if ($is_ajax) {
        echo json_encode(['status' => 'error', 'message' => 'Please enter your message.']);
        exit;
    } else {
        header('Location: index.php?error=message#contact');
        exit;
    }
}

$email_subject = "New Inquiry from " . $name . " [" . $service . "]";

// ============================================================
// ENGINE 1: FormSubmit API (Primary Delivery)
// Uses x-www-form-urlencoded to prevent UTF-8 / JSON drops
// ============================================================
$formsubmit_payload = [
    'Name'             => $name,
    'Email'            => $email,
    'Phone / WhatsApp' => $phone,
    'Service Needed'   => $service,
    'Subject'          => $subject,
    'Message'          => $message,
    '_subject'         => $email_subject,
    '_replyto'         => $email,
    '_template'        => 'table',
    '_captcha'         => 'false'
];

$post_fields = http_build_query($formsubmit_payload);

$ch = curl_init('https://formsubmit.co/ajax/surajrmane45@gmail.com');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/x-www-form-urlencoded',
    'Accept: application/json',
    'Referer: ' . ($_SERVER['HTTP_REFERER'] ?? 'https://steelblue-dotterel-672156.hostingersite.com/'),
    'Origin: https://steelblue-dotterel-672156.hostingersite.com'
]);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
$fs_response = curl_exec($ch);
curl_close($ch);

$fs_data = json_decode((string)$fs_response, true);
$fs_sent = (isset($fs_data['success']) && ($fs_data['success'] === 'true' || $fs_data['success'] === true));

// ============================================================
// ENGINE 2: PHP mail() Fallback
// Runs ONLY if FormSubmit failed, so Google never receives duplicates!
// ============================================================
if (!$fs_sent) {
    $server_host = $_SERVER['SERVER_NAME'] ?? 'steelblue-dotterel-672156.hostingersite.com';
    $from_email  = 'no-reply@' . $server_host;

    $email_body = '
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Inquiry</title>
</head>
<body style="font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Arial, sans-serif; background-color: #f7f9fc; padding: 30px; margin: 0;">
    <div style="max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 16px; overflow: hidden; border: 1px solid #e5e7eb; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
        
        <div style="background: #000000; padding: 24px 30px; color: #ffffff;">
            <div style="color: #f94706; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 4px;">Portfolio Contact Form</div>
            <h2 style="margin: 0; font-size: 22px; font-weight: 700; color: #ffffff;">New Message Received</h2>
        </div>

        <div style="padding: 30px;">
            <table style="width: 100%; border-collapse: collapse; margin-bottom: 24px;">
                <tr>
                    <td style="padding: 10px 0; border-bottom: 1px solid #f0f0f0; width: 140px; color: #6b7280; font-weight: 600; font-size: 14px;">Sender Name:</td>
                    <td style="padding: 10px 0; border-bottom: 1px solid #f0f0f0; color: #111111; font-weight: 700; font-size: 14px;">' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '</td>
                </tr>
                <tr>
                    <td style="padding: 10px 0; border-bottom: 1px solid #f0f0f0; color: #6b7280; font-weight: 600; font-size: 14px;">Email:</td>
                    <td style="padding: 10px 0; border-bottom: 1px solid #f0f0f0; color: #111111; font-size: 14px;"><a href="mailto:' . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . '" style="color: #f94706; text-decoration: none; font-weight: 600;">' . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . '</a></td>
                </tr>
                <tr>
                    <td style="padding: 10px 0; border-bottom: 1px solid #f0f0f0; color: #6b7280; font-weight: 600; font-size: 14px;">Phone / WhatsApp:</td>
                    <td style="padding: 10px 0; border-bottom: 1px solid #f0f0f0; color: #111111; font-size: 14px;">' . htmlspecialchars($phone, ENT_QUOTES, 'UTF-8') . '</td>
                </tr>
                <tr>
                    <td style="padding: 10px 0; border-bottom: 1px solid #f0f0f0; color: #6b7280; font-weight: 600; font-size: 14px;">Service Needed:</td>
                    <td style="padding: 10px 0; border-bottom: 1px solid #f0f0f0; color: #111111; font-weight: 600; font-size: 14px;">' . htmlspecialchars($service, ENT_QUOTES, 'UTF-8') . '</td>
                </tr>
                <tr>
                    <td style="padding: 10px 0; border-bottom: 1px solid #f0f0f0; color: #6b7280; font-weight: 600; font-size: 14px;">Subject:</td>
                    <td style="padding: 10px 0; border-bottom: 1px solid #f0f0f0; color: #111111; font-size: 14px;">' . htmlspecialchars($subject, ENT_QUOTES, 'UTF-8') . '</td>
                </tr>
            </table>

            <div style="background: #f9fafb; border-left: 4px solid #f94706; padding: 18px 20px; border-radius: 8px; margin-bottom: 20px;">
                <div style="font-size: 12px; font-weight: 700; text-transform: uppercase; color: #6b7280; letter-spacing: 0.5px; margin-bottom: 8px;">Message Details:</div>
                <div style="color: #374151; font-size: 15px; line-height: 1.6; white-space: pre-wrap;">' . nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8')) . '</div>
            </div>

            <div style="text-align: center; margin-top: 30px;">
                <a href="mailto:' . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . '?subject=Re: ' . urlencode($email_subject) . '" style="display: inline-block; background: #f94706; color: #ffffff; padding: 12px 28px; border-radius: 999px; text-decoration: none; font-weight: 700; font-size: 14px;">Reply Directly to ' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . ' →</a>
            </div>
        </div>

        <div style="background: #f9fafb; padding: 16px 30px; text-align: center; border-top: 1px solid #e5e7eb; font-size: 12px; color: #9ca3af;">
            Sent from Suraj Mane Portfolio Website • ' . date('d M Y, h:i A') . '
        </div>
    </div>
</body>
</html>';

    $encoded_subject = '=?UTF-8?B?' . base64_encode($email_subject) . '?=';

    $headers   = [];
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=UTF-8';
    $headers[] = 'From: Suraj Mane Portfolio <' . $from_email . '>';
    $headers[] = 'Reply-To: ' . $email;
    $headers[] = 'X-Mailer: PHP/' . phpversion();

    // Use server from address to pass SPF
    @mail($to, $encoded_subject, $email_body, implode("\r\n", $headers), "-f" . $from_email);
}

// Return response
if ($is_ajax) {
    echo json_encode([
        'status'  => 'success',
        'message' => 'Thank you, ' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '! Your message has been sent successfully. I will get back to you shortly.'
    ], JSON_UNESCAPED_UNICODE);
} else {
    header('Location: index.php?sent=1#contact');
    exit;
}
