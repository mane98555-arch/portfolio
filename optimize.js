const fs = require('fs');
const path = require('path');

function updateHTML(file) {
  let html = fs.readFileSync(file, 'utf8');

  // 1. Preload Google Font (swap)
  const preloadLink = `<link rel="preload" href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600&display=swap" as="style" onload="this.rel='stylesheet'">`;
  // Insert after the existing preconnect links (if not already present)
  if (!html.includes('rel="preload" href="https://fonts.googleapis.com/css2?family=Public+Sans')) {
    html = html.replace(/(<link rel="preconnect" href="https:\/\/fonts\.googleapis\.com"\s*\/?>\s*<link rel="preconnect" href="https:\/\/fonts\.gstatic\.com"[^>]*>)/, `$1\n    ${preloadLink}`);
  }

  // 2. Add defer to main.js script
  html = html.replace(/<script src="assets\/js\/main\.js\?v=\d+\.\d+"(\s*)><\/script>/, '<script src="assets/js/main.js?v=2.1" defer></script>');

  // 3. Add width, height, loading=lazy to all img tags (except poster with fetchpriority)
  html = html.replace(/<img([^>]*?)src="([^"]+)"([^>]*?)>/g, (match, before, src, after) => {
    // Determine if this is the poster image (flip-card-profile-img class) or hero images
    const isPoster = /class=["'][^"']*flip-card-profile-img[^"']*["']/.test(match);
    const widthHeight = /width\s*=/.test(match) && /height\s*=/.test(match);
    let attrs = '';
    if (!widthHeight) {
      // guess size based on filename patterns (140px for icons, 300 for poster)
      let size = 140;
      if (/Poster/.test(src)) size = 300;
      attrs = ` width="${size}" height="${size}"`;
    }
    // Add loading lazy for non‑poster
    if (!isPoster && !/loading=/.test(match)) {
      attrs += ' loading="lazy"';
    }
    // Add fetchpriority high for poster
    if (isPoster && !/fetchpriority=/.test(match)) {
      attrs += ' fetchpriority="high"';
    }
    // Return rebuilt tag
    return `<img${before} src="${src}"${after.replace(/\s*$/, '')}${attrs}>`;
  });

  // 4. Ensure style.css cache‑buster is v=2.5 (already done, but verify)
  html = html.replace(/href="assets\/css\/style\.css\?v=\d+\.\d+"/, 'href="assets/css/style.css?v=2.5"');

  fs.writeFileSync(file, html, 'utf8');
  console.log(`✅ ${path.basename(file)} optimized`);
}

// Process both HTML and PHP files
['index.html', 'index.php'].forEach(updateHTML);

// 5. Minify CSS – simple removal of comments & whitespace (basic)
let css = fs.readFileSync('assets/css/style.css', 'utf8');
// Remove comments
css = css.replace(/\/\*[^*]*\*+(?:[^/*][^*]*\*+)*\//g, '');
// Collapse whitespace
css = css.replace(/\s+/g, ' ');
fs.writeFileSync('assets/css/style.min.css', css.trim(), 'utf8');
console.log('✅ CSS minified to style.min.css');

// Replace link to minified CSS in both HTML/PHP
function replaceCSSLink(file) {
  let content = fs.readFileSync(file, 'utf8');
  content = content.replace(/href="assets\/css\/style\.css\?v=\d+\.\d+"/, 'href="assets/css/style.min.css?v=2.5"');
  fs.writeFileSync(file, content, 'utf8');
  console.log(`✅ CSS link updated in ${path.basename(file)}`);
}
['index.html', 'index.php'].forEach(replaceCSSLink);
