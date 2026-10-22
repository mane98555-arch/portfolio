<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suraj Mane | Web Developer</title>
    
    <!-- Google Search Console Verification -->
    <meta name="google-site-verification" content="ARxkTXOv4WlFofTiRw_Aa-gwrrOEw2vmYn0sJAxXMfM" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-S6M6G5FPB2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-S6M6G5FPB2');
    </script>
    
    <!-- Google Fonts: Public Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600&display=swap" rel="stylesheet">
    
    <!-- Stylesheet with Cache-Buster -->
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
</head>
<body>

    <!-- STICKY FLOATING HEADER & NAVBAR -->
    <header class="header-wrapper">

        <!-- Desktop: Pill Menu -->
        <div class="header-nav-container desktop-nav">
            <ul class="nav-pill-menu" id="navMenu">
                <li class="nav-item"><a href="#home" class="nav-link active">Home</a></li>
                <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#stack" class="nav-link">Stack</a></li>
                <li class="nav-item"><a href="#expertise" class="nav-link">Expertise</a></li>
                <li class="nav-item"><a href="#experience" class="nav-link">Experience</a></li>
                <li class="nav-item"><a href="#projects" class="nav-link">Projects</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
            <a href="SM%20RESUME.pdf" target="_blank" class="header-cta-btn">Resume</a>
        </div>

        <!-- Mobile: Top Bar with Hamburger -->
        <div class="mob-header-bar">
            <span class="mob-brand">Suraj Mane</span>
            <button class="hamburger-btn" id="hamburgerBtn" aria-label="Open menu" aria-expanded="false">
                <span class="ham-line"></span>
                <span class="ham-line"></span>
                <span class="ham-line"></span>
            </button>
        </div>

    </header>

    <!-- Mobile Full-Screen Nav Drawer -->
    <div class="mob-nav-overlay" id="mobNavOverlay">
        <nav class="mob-nav-drawer" id="mobNavDrawer">
            <div class="mob-nav-header">
                <span class="mob-nav-brand">Suraj Mane</span>
                <button class="mob-nav-close" id="mobNavClose" aria-label="Close menu">
                    <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                </button>
            </div>
            <ul class="mob-nav-links">
                <li><a href="#home" class="mob-nav-link active">Home</a></li>
                <li><a href="#about" class="mob-nav-link">About</a></li>
                <li><a href="#stack" class="mob-nav-link">Stack</a></li>
                <li><a href="#expertise" class="mob-nav-link">Expertise</a></li>
                <li><a href="#experience" class="mob-nav-link">Experience</a></li>
                <li><a href="#projects" class="mob-nav-link">Projects</a></li>
                <li><a href="#contact" class="mob-nav-link">Contact</a></li>
            </ul>
            <div class="mob-nav-footer">
                <a href="SM%20RESUME.pdf" target="_blank" class="mob-resume-btn">
                    <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                    Download Resume
                </a>
            </div>
        </nav>
    </div>

    <main>
        <!-- HERO SECTION -->
        <section id="home" class="hero-section">
            <h1 class="hero-bg-title">DEVELOPER</h1>
            <div class="hero-3d">
                <div class="left-3d">
                    <img src="assets/images/Glossy WordPress Logo (1).png" alt="Orange triangle 3D shape" style="width:140px;">
                    <img src="assets/images/Glossy 3D SEO Browser Icon (1).png" alt="Purple sphere 3D shape" style="width:140px;margin-left:-70px;">
                    <img src="assets/images/Glossy Responsive Web Design Devices (1).png" alt="Blue cylinder 3D shape" style="width:140px;">
                </div>
                <div class="middle-3d">
                    <h3 class="title">Hi, I'm Suraj!</h3>
                    <div class="role-rotator" style="height: 32px; overflow: hidden;" aria-label="Specialization">
                        <div class="role-rotator-track">
                            <span class="role-text">Fast-Loading Websites</span>
                            <span class="role-text">HTML / CSS</span>
                            <span class="role-text">Custom Themes & Plugins</span>
                            <span class="role-text">SEO-Optimized Sites</span>
                            <span class="role-text">Tracking & Analytics</span>
                            <span class="role-text">Fast-Loading Websites</span>
                        </div>
                    </div>
                    <div class="flip-card" tabIndex="0">
                      <div class="flip-card-inner">
                        <div class="flip-card-front">
                          <img src="assets/images/Poster.webp" alt="Suraj Mane - Profile Picture" class="flip-card-profile-img">
                        </div>
                        <div class="flip-card-back">
                          <div class="flip-back-badge">
                            <svg class="flip-back-svg" viewBox="0 0 200 200" aria-hidden="true">
                              <defs>
                                <path id="flipCirclePath" d="M 100,100 m -72,0 a 72,72 0 1,1 144,0 a 72,72 0 1,1 -144,0"/>
                              </defs>
                              <circle cx="100" cy="100" r="50" stroke="#cccccc" stroke-width="1" fill="none"/>
                              <text fill="#111111" font-size="12" font-family="Public Sans, sans-serif" font-weight="600" letter-spacing="5.3">
                                <textPath href="#flipCirclePath">✦ SCROLL DOWN ✦ AND KNOW ME BETTER&nbsp;&nbsp;</textPath>
                              </text>
                            </svg>
                            <span class="flip-back-arrow">↓</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a href="SM%20RESUME.pdf" download="SM_RESUME.pdf">
                      <button class="btn-90">
                        <div class="blobs"></div>
                        <span>Download CV</span>
                      </button>
                    </a>
                    
                    <svg width="0" height="0">
                      <defs>
                        <filter id="goo">
                          <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                          <feColorMatrix
                            in="blur"
                            type="matrix"
                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7"
                            result="goo"
                          />
                          <feBlend in="SourceGraphic" in2="goo" />
                        </filter>
                      </defs>
                    </svg>

                </div>
                <div class="right-3d">
                    <img src="assets/images/Glossy Orange Coding Badge (1).png" alt="Orange triangle 3D shape" style="width:140px;">
                    <img src="assets/images/Glossy 3D Dashboard with 95+ Badge (1).png" alt="Lime green 3D shape" style="width:140px;margin-left:70px;">
                    <img src="assets/images/Glossy 3D Browser Search Icon (1).png" alt="Blue cylinder 3D shape" style="width:140px;">
                </div>
            </div>

        </section>

        
        <!-- ABOUT SECTION -->
        <section id="about" class="about-section">
            <div class="container">
                
                <!-- Section Header -->
                <div class="about-header">
                    <div class="about-badge">
                        <span class="badge-icon">✦</span>
                        <span>About Me</span>
                    </div>
                    <div class="about-intro-wrap">
                        <h2 class="about-headline">
                            Crafting high-performance digital experiences that rank higher, load faster, and convert better.
                        </h2>
                        <a href="#contact" class="about-cta-btn">
                            <span>Get In Touch</span>
                            <span class="cta-arrow">→</span>
                        </a>
                    </div>
                </div>

                <!-- Bento Grid Content -->
                <div class="about-bento-grid">
                    
                    <!-- Left: Portrait Photo Card -->
                    <div class="about-portrait-card">
                        <img src="assets/images/profile image.webp" alt="Suraj Mane - Web Developer" class="about-portrait-img">
                        <div class="portrait-overlay"></div>
                    </div>

                    <!-- Right: Bento Cards (2x2) -->
                    <div class="about-cards-wrapper">
                        
                        <!-- Card 1: Experience -->
                        <div class="bento-card card-experience">
                            <div class="card-stat-header">
                                <span class="bento-label">Years Crafting<br>Web Experiences</span>
                                <span class="bento-big-num">3+</span>
                            </div>
                            <p class="bento-subtext">Hands-on development since Dec 2022</p>
                        </div>

                        <!-- Card 2: Projects -->
                        <div class="bento-card card-projects">
                            <div class="card-stat-header">
                                <span class="bento-label">Delivered &<br>Live Work</span>
                                <span class="bento-big-num">30+</span>
                            </div>
                            <p class="bento-subtext">Projects successfully completed</p>
                        </div>

                        <!-- Card 3: SEO & Analytics Score -->
                        <div class="bento-card card-seo">
                            <div class="card-stat-header">
                                <span class="bento-label">Search & Speed<br>Optimization</span>
                                <span class="bento-big-num highlight">100%</span>
                            </div>
                            <div class="seo-feature-tags">
                                <span class="seo-tag">✓ On-Page & Technical SEO</span>
                                <span class="seo-tag">✓ GTM & GA4 Tracking</span>
                                <span class="seo-tag">✓ Page Speed & Core Vitals</span>
                            </div>
                        </div>

                        <!-- Card 4: Core Execution Pillars (Clean Alternative to Pills) -->
                        <div class="bento-card card-pillars">
                            <h4 class="pillars-title">Clean Code, Strategic Execution</h4>
                            <div class="pillars-list">
                                <div class="pillar-item">
                                    <span class="pillar-bullet">⚡</span>
                                    <div>
                                        <strong>Custom Themes & Plugins</strong>
                                        <p>Tailored from scratch without heavy page builders</p>
                                    </div>
                                </div>
                                <div class="pillar-item">
                                    <span class="pillar-bullet">🚀</span>
                                    <div>
                                        <strong>Fast & Lightweight Core</strong>
                                        <p>Clean HTML/CSS & PHP structured for performance</p>
                                    </div>
                                </div>
                                <div class="pillar-item">
                                    <span class="pillar-bullet">📈</span>
                                    <div>
                                        <strong>Rank & Convert Ready</strong>
                                        <p>Google Search Console and Analytics calibrated</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <!-- TECH STACK SECTION -->
        <section id="stack" class="stack-section">
            <div class="container">
                <div class="stack-layout">
                    
                    <!-- Left: Content & Intro -->
                    <div class="stack-content">
                        <div class="stack-badge">
                            <span class="badge-icon">✦</span>
                            <span>Our Tech Stack</span>
                        </div>
                        <h2 class="stack-headline">
                            Key Technologies & AI-Powered Platforms
                        </h2>
                        <p class="stack-desc">
                            I leverage modern frontend standards, custom WordPress engineering, cloud hosting, and cutting-edge AI platforms to build fast, scalable, and high-converting digital solutions.
                        </p>
                        <div class="stack-cta-wrap">
                            <a href="#contact" class="stack-cta-btn">
                                <span>Explore Tech Stack</span>
                                <span class="cta-arrow">→</span>
                            </a>
                        </div>
                    </div>

                    <!-- Right: 2-Column Infinite Railway Marquee -->
                    <div class="stack-marquee-wrapper">
                        <!-- Top & Bottom smooth fade gradients -->
                        <div class="marquee-fade-top"></div>
                        <div class="marquee-fade-bottom"></div>

                        <div class="stack-marquee-container">
                            
                            <!-- Column 1: Railway Scrolling UP -->
                            <div class="marquee-column marquee-col-up">
                                <div class="marquee-track track-up">
                                    <!-- Set 1 -->
                                    <div class="stack-icon-card" title="WordPress"><img src="assets/images/wordpress.png" alt="WordPress"></div>
                                    <div class="stack-icon-card" title="Claude AI"><img src="assets/images/claude.png" alt="Claude AI"></div>
                                    <div class="stack-icon-card" title="HTML5"><img src="assets/images/html.png" alt="HTML5"></div>
                                    <div class="stack-icon-card" title="Figma"><img src="assets/images/figma.png" alt="Figma"></div>
                                    <div class="stack-icon-card" title="Bolt.new AI"><img src="assets/images/bolt%20ai.png" alt="Bolt.new AI"></div>
                                    <div class="stack-icon-card" title="AWS"><img src="assets/images/aws.png" alt="AWS"></div>
                                    <div class="stack-icon-card" title="Google Antigravity"><img src="assets/images/antigravity.png" alt="Google Antigravity"></div>
                                    <!-- Set 2 (Infinite duplicate) -->
                                    <div class="stack-icon-card" title="WordPress"><img src="assets/images/wordpress.png" alt="WordPress"></div>
                                    <div class="stack-icon-card" title="Claude AI"><img src="assets/images/claude.png" alt="Claude AI"></div>
                                    <div class="stack-icon-card" title="HTML5"><img src="assets/images/html.png" alt="HTML5"></div>
                                    <div class="stack-icon-card" title="Figma"><img src="assets/images/figma.png" alt="Figma"></div>
                                    <div class="stack-icon-card" title="Bolt.new AI"><img src="assets/images/bolt%20ai.png" alt="Bolt.new AI"></div>
                                    <div class="stack-icon-card" title="AWS"><img src="assets/images/aws.png" alt="AWS"></div>
                                    <div class="stack-icon-card" title="Google Antigravity"><img src="assets/images/antigravity.png" alt="Google Antigravity"></div>
                                </div>
                            </div>

                            <!-- Column 2: Railway Scrolling DOWN -->
                            <div class="marquee-column marquee-col-down">
                                <div class="marquee-track track-down">
                                    <!-- Set 1 -->
                                    <div class="stack-icon-card" title="Webflow"><img src="assets/images/webflow.png" alt="Webflow"></div>
                                    <div class="stack-icon-card" title="ChatGPT"><img src="assets/images/chatgpt.png" alt="ChatGPT"></div>
                                    <div class="stack-icon-card" title="CSS3"><img src="assets/images/css.png" alt="CSS3"></div>
                                    <div class="stack-icon-card" title="Lovable AI"><img src="assets/images/lovable.png" alt="Lovable AI"></div>
                                    <div class="stack-icon-card" title="JavaScript"><img src="assets/images/js.png" alt="JavaScript"></div>
                                    <div class="stack-icon-card" title="Hostinger"><img src="assets/images/hostinger.png" alt="Hostinger"></div>
                                    <div class="stack-icon-card" title="Grok xAI"><img src="assets/images/grok.png" alt="Grok xAI"></div>
                                    <!-- Set 2 (Infinite duplicate) -->
                                    <div class="stack-icon-card" title="Webflow"><img src="assets/images/webflow.png" alt="Webflow"></div>
                                    <div class="stack-icon-card" title="ChatGPT"><img src="assets/images/chatgpt.png" alt="ChatGPT"></div>
                                    <div class="stack-icon-card" title="CSS3"><img src="assets/images/css.png" alt="CSS3"></div>
                                    <div class="stack-icon-card" title="Lovable AI"><img src="assets/images/lovable.png" alt="Lovable AI"></div>
                                    <div class="stack-icon-card" title="JavaScript"><img src="assets/images/js.png" alt="JavaScript"></div>
                                    <div class="stack-icon-card" title="Hostinger"><img src="assets/images/hostinger.png" alt="Hostinger"></div>
                                    <div class="stack-icon-card" title="Grok xAI"><img src="assets/images/grok.png" alt="Grok xAI"></div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- EXPERTISE SECTION (EXACT REFERENCE DESIGN: CLEAN WHITE, STICKY NUMBER + TITLE, SCROLLING CONTENT & 3D) -->
        <section id="expertise" class="expertise-section">
            <div class="container">

                <!-- Two-Column Layout -->
                <div class="expertise-layout">
                    
                    <!-- Left: Sticky Number & Title (No Box, Pure Clean Text) -->
                    <div class="expertise-sticky-col">
                        <div class="expertise-sticky-content">
                            <span class="expertise-watermark-num" id="stickyNum">01</span>
                            <h3 class="expertise-sticky-title" id="stickyTitle">Modern Web Development</h3>
                        </div>
                    </div>

                    <!-- Right: Scrolling Content Items with 3D Objects -->
                    <div class="expertise-scroll-col">
                        
                        <!-- Step 01 -->
                        <div class="expertise-item" data-step="01" data-title="Modern Web Development">
                            <div class="expertise-item-header">
                                <span class="expertise-item-step">01</span>
                                <h3 class="expertise-item-title">Modern Web Development</h3>
                            </div>
                            <p class="expertise-desc">
                                Building responsive, accessible, and pixel-perfect web experiences from the ground up. I write clean, semantic HTML5, modern CSS, and performant JavaScript structured for long-term scalability and effortless maintenance.
                            </p>
                            <div class="expertise-3d-box">
                                <img src="assets/images/hero orange triangle.avif" alt="Orange Triangle" class="expertise-3d-shape float-obj-1">
                            </div>
                        </div>

                        <!-- Step 02 -->
                        <div class="expertise-item" data-step="02" data-title="Custom WordPress & CMS">
                            <div class="expertise-item-header">
                                <span class="expertise-item-step">02</span>
                                <h3 class="expertise-item-title">Custom WordPress & CMS</h3>
                            </div>
                            <p class="expertise-desc">
                                Engineering tailored WordPress themes and custom plugins from scratch without relying on heavy page builders. Delivering fast, clean, and bloat-free websites with complete backend flexibility, custom fields, and security.
                            </p>
                            <div class="expertise-3d-box">
                                <img src="assets/images/Hero Lime Green Object.avif" alt="Lime Green Object" class="expertise-3d-shape float-obj-2">
                            </div>
                        </div>

                        <!-- Step 03 -->
                        <div class="expertise-item" data-step="03" data-title="High-Converting Landing Pages">
                            <div class="expertise-item-header">
                                <span class="expertise-item-step">03</span>
                                <h3 class="expertise-item-title">High-Converting Landing Pages</h3>
                            </div>
                            <p class="expertise-desc">
                                Crafting laser-focused landing pages engineered for maximum clarity, speed, and conversion. Designed to deliver strong first impressions, intuitive call-to-actions, and seamless user journeys across all screen sizes.
                            </p>
                            <div class="expertise-3d-box">
                                <img src="assets/images/Hero Blue Cylinder.avif" alt="Blue Cylinder" class="expertise-3d-shape float-obj-3">
                            </div>
                        </div>

                        <!-- Step 04 -->
                        <div class="expertise-item" data-step="04" data-title="SEO & Speed Optimization">
                            <div class="expertise-item-header">
                                <span class="expertise-item-step">04</span>
                                <h3 class="expertise-item-title">SEO & Speed Optimization</h3>
                            </div>
                            <p class="expertise-desc">
                                Fine-tuning websites for 90+ Google PageSpeed scores, clean Core Web Vitals, and search visibility. From on-page structure, schema markup, and metadata to asset compression and caching — ensuring your site ranks higher and loads instantly.
                            </p>
                            <div class="expertise-3d-box">
                                <img src="assets/images/Yellow Cube.avif" alt="Yellow Cube" class="expertise-3d-shape float-obj-4">
                            </div>
                        </div>

                        <!-- Step 05 -->
                        <div class="expertise-item" data-step="05" data-title="Hosting & Server Management">
                            <div class="expertise-item-header">
                                <span class="expertise-item-step">05</span>
                                <h3 class="expertise-item-title">Hosting & Server Management</h3>
                            </div>
                            <p class="expertise-desc">
                                Deploying and maintaining reliable web environments across Hostinger, cPanel, and AWS. Managing domain DNS records, SSL certificates, database migrations, backups, and server-level caching to guarantee 99.9% uptime and rock-solid security.
                            </p>
                            <div class="expertise-3d-box">
                                <img src="assets/images/Hero Purple Sphere.avif" alt="Purple Sphere" class="expertise-3d-shape float-obj-5">
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>

        <!-- EXPERIENCE & EDUCATION SECTION (REDESIGNED: LEFT HEADER, COMPANY HIGHLIGHT, ROLE BADGES & TECH PILLS) -->
        <section id="experience" class="experience-section">
            <div class="container">
                
                <!-- Section Header (Left-aligned matching site theme) -->
                <div class="timeline-header-wrap">
                    <div class="timeline-header-left">
                        <div class="timeline-badge">
                            <span class="badge-icon">✦</span>
                            <span>Career & Milestones</span>
                        </div>
                        <h2 class="timeline-headline">Experience & Education</h2>
                        <p class="timeline-desc">
                            A track record of high-performance web development, custom client deliverables, and academic achievements.
                        </p>
                    </div>

                    <!-- Filter Tabs -->
                    <div class="timeline-filter-tabs">
                        <button class="t-filter-btn active" data-filter="all">All (6)</button>
                        <button class="t-filter-btn" data-filter="work">Work Experience (4)</button>
                        <button class="t-filter-btn" data-filter="education">Education (2)</button>
                    </div>
                </div>

                <!-- Vertical Glowing Timeline -->
                <div class="timeline-wrapper">
                    
                    <!-- Vertical Laser Spine Line -->
                    <div class="timeline-spine-line">
                        <div class="timeline-spine-glow"></div>
                    </div>

                    <div class="timeline-list">
                        
                        <!-- Milestone 1 -->
                        <div class="timeline-item" data-type="work">
                            <div class="timeline-date-col">
                                <div class="t-date-box">
                                    <span class="t-date-text">Apr 2026 – Present</span>
                                    <span class="t-live-badge"><span class="pulse-dot"></span> Active</span>
                                </div>
                            </div>
                            <div class="timeline-node">
                                <span class="node-dot"></span>
                            </div>
                            <div class="timeline-card-col">
                                <div class="milestone-card">
                                    <div class="milestone-top">
                                        <div>
                                            <h3 class="m-company-title">Triple S Production</h3>
                                            <span class="m-location-tag"><img src="assets/images/address-icon.svg" alt="Location" class="m-loc-icon"> Satara</span>
                                        </div>
                                        <span class="m-role-badge role-work">Website Developer</span>
                                    </div>
                                    <p class="m-summary">
                                        Developing responsive WordPress websites, managing technical SEO, cloud hosting infrastructure, and AI-assisted web application development.
                                    </p>
                                    <div class="m-tech-tags">
                                        <span>WordPress</span>
                                        <span>Custom Web Solutions</span>
                                        <span>Technical SEO</span>
                                        <span>Cloud Hosting</span>
                                        <span>AI Tools</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Milestone 2 -->
                        <div class="timeline-item" data-type="work">
                            <div class="timeline-date-col">
                                <div class="t-date-box">
                                    <span class="t-date-text">Apr 2025 – Mar 2026</span>
                                </div>
                            </div>
                            <div class="timeline-node">
                                <span class="node-dot"></span>
                            </div>
                            <div class="timeline-card-col">
                                <div class="milestone-card">
                                    <div class="milestone-top">
                                        <div>
                                            <h3 class="m-company-title">Latent Software Development</h3>
                                            <span class="m-location-tag"><img src="assets/images/address-icon.svg" alt="Location" class="m-loc-icon"> Baner, Pune</span>
                                        </div>
                                        <span class="m-role-badge role-work">Website Developer</span>
                                    </div>
                                    <p class="m-summary">
                                        Engineered frontend experiences with clean HTML, CSS, JavaScript, and custom WordPress architecture while optimizing Core Web Vitals and site speed.
                                    </p>
                                    <div class="m-tech-tags">
                                        <span>HTML5 / CSS3</span>
                                        <span>JavaScript</span>
                                        <span>WordPress</span>
                                        <span>PageSpeed 90+</span>
                                        <span>SEO</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Milestone 3 -->
                        <div class="timeline-item" data-type="education">
                            <div class="timeline-date-col">
                                <div class="t-date-box">
                                    <span class="t-date-text">2023 – 2025</span>
                                    <span class="t-degree-status">Graduated</span>
                                </div>
                            </div>
                            <div class="timeline-node">
                                <span class="node-dot edu-node"></span>
                            </div>
                            <div class="timeline-card-col">
                                <div class="milestone-card card-edu">
                                    <div class="milestone-top">
                                        <div>
                                            <h3 class="m-company-title">Punyashlok Ahilyadevi Holkar Solapur University</h3>
                                            <span class="m-location-tag"><img src="assets/images/address-icon.svg" alt="Location" class="m-loc-icon"> Solapur, Maharashtra</span>
                                        </div>
                                        <span class="m-role-badge role-edu">M.Sc Computer Science</span>
                                    </div>
                                    <p class="m-summary">
                                        Master of Computer Science with an in-depth curriculum in software engineering, advanced algorithms, database architecture, and scalable web technologies.
                                    </p>
                                    <div class="m-tech-tags">
                                        <span>Software Engineering</span>
                                        <span>Data Structures</span>
                                        <span>Web Systems</span>
                                        <span>Database Design</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Milestone 4 -->
                        <div class="timeline-item" data-type="work">
                            <div class="timeline-date-col">
                                <div class="t-date-box">
                                    <span class="t-date-text">Oct 2023 – Mar 2025</span>
                                </div>
                            </div>
                            <div class="timeline-node">
                                <span class="node-dot"></span>
                            </div>
                            <div class="timeline-card-col">
                                <div class="milestone-card">
                                    <div class="milestone-top">
                                        <div>
                                            <h3 class="m-company-title">Alpha OBS LLP</h3>
                                            <span class="m-location-tag"><img src="assets/images/address-icon.svg" alt="Location" class="m-loc-icon"> Moze Colony, Pune</span>
                                        </div>
                                        <span class="m-role-badge role-work">Website Developer</span>
                                    </div>
                                    <p class="m-summary">
                                        Developed and deployed SEO-optimized, responsive websites. Handled custom WordPress and Webflow client builds, domain routing, and server performance caching.
                                    </p>
                                    <div class="m-tech-tags">
                                        <span>WordPress</span>
                                        <span>Webflow</span>
                                        <span>Hosting & DNS</span>
                                        <span>Responsive Design</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Milestone 5 -->
                        <div class="timeline-item" data-type="work">
                            <div class="timeline-date-col">
                                <div class="t-date-box">
                                    <span class="t-date-text">Dec 2022 – Sep 2023</span>
                                </div>
                            </div>
                            <div class="timeline-node">
                                <span class="node-dot"></span>
                            </div>
                            <div class="timeline-card-col">
                                <div class="milestone-card">
                                    <div class="milestone-top">
                                        <div>
                                            <h3 class="m-company-title">Mastertej Website Development</h3>
                                            <span class="m-location-tag"><img src="assets/images/address-icon.svg" alt="Location" class="m-loc-icon"> Akluj, Maharashtra</span>
                                        </div>
                                        <span class="m-role-badge role-work">Intern → Website Developer</span>
                                    </div>
                                    <p class="m-summary">
                                        Completed a 6-month hands-on web development internship followed by 3 months of full-time contribution — building responsive WordPress and Webflow websites from design layouts.
                                    </p>
                                    <div class="m-tech-tags">
                                        <span>WordPress</span>
                                        <span>Webflow</span>
                                        <span>Frontend Coding</span>
                                        <span>Responsive Design</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Milestone 6 -->
                        <div class="timeline-item" data-type="education">
                            <div class="timeline-date-col">
                                <div class="t-date-box">
                                    <span class="t-date-text">2020 – 2023</span>
                                    <span class="t-degree-status">Graduated</span>
                                </div>
                            </div>
                            <div class="timeline-node">
                                <span class="node-dot edu-node"></span>
                            </div>
                            <div class="timeline-card-col">
                                <div class="milestone-card card-edu">
                                    <div class="milestone-top">
                                        <div>
                                            <h3 class="m-company-title">Punyashlok Ahilyadevi Holkar Solapur University</h3>
                                            <span class="m-location-tag"><img src="assets/images/address-icon.svg" alt="Location" class="m-loc-icon"> Solapur, Maharashtra</span>
                                        </div>
                                        <span class="m-role-badge role-edu">B.Sc Computer Science</span>
                                    </div>
                                    <p class="m-summary">
                                        Bachelor of Computer Science building strong foundations in object-oriented programming, data structures, relational databases, and computer networking.
                                    </p>
                                    <div class="m-tech-tags">
                                        <span>C / C++</span>
                                        <span>Java</span>
                                        <span>PHP & MySQL</span>
                                        <span>HTML / CSS</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>

        <!-- ============================================================
             PROJECTS SECTION
        ============================================================ -->
        <section id="projects" class="projects-section">
            <div class="container">

                <!-- Section Header (Left-aligned matching site theme) -->
                <div class="timeline-header-wrap proj-header-wrap">
                    <div class="timeline-header-left">
                        <div class="timeline-badge">
                            <span class="badge-icon">✦</span>
                            <span>Work Portfolio</span>
                        </div>
                        <h2 class="timeline-headline">Featured <span class="highlight-text">Projects</span> &amp; Builds</h2>
                        <p class="timeline-desc">
                            Real-world websites, custom themes, and tools built during professional agency roles. Credits and live links included for each project.
                        </p>
                    </div>

                    <!-- Filter Tabs -->
                    <div class="timeline-filter-tabs proj-filter-tabs">
                        <button class="proj-filter-btn active" data-filter="all">All (11)</button>
                        <button class="proj-filter-btn" data-filter="featured">⭐ Featured</button>
                        <button class="proj-filter-btn" data-filter="triple-s">Triple S Production</button>
                        <button class="proj-filter-btn" data-filter="latent">Latent Software</button>
                    </div>
                </div>

                <!-- Projects Grid -->
                <div class="projects-grid">

                    <!-- BuySaleIndia (Featured + Triple S) -->
                    <div class="proj-card" data-category="triple-s featured">
                        <div class="proj-card-top">
                            <span class="proj-eyebrow">Classified Platform</span>
                            <a href="https://triplesproduction.com/" target="_blank" rel="noopener" class="proj-agency-pill">Triple S Production ↗</a>
                        </div>
                        <h3 class="proj-name">BuySale India</h3>
                        <p class="proj-desc">JustDial-style classified listing platform built entirely from scratch. Custom WordPress theme with heavy advanced functionality, user listings, and category-based browsing.</p>
                        <div class="proj-tags">
                            <span>Custom WP Theme</span>
                            <span>PHP Development</span>
                            <span>Classified Platform</span>
                            <span>Advanced Functionality</span>
                        </div>
                        <div class="proj-card-footer">
                            <a href="https://buysaleindia.com/" target="_blank" rel="noopener" class="proj-live-link">Live Preview ↗</a>
                            <span class="proj-featured-badge">⭐ Featured</span>
                        </div>
                    </div>

                    <!-- Custom Hiring Plugin (Featured + Triple S) -->
                    <div class="proj-card proj-card--plugin" data-category="triple-s featured">
                        <div class="proj-card-top">
                            <span class="proj-eyebrow">WordPress Plugin</span>
                            <a href="https://triplesproduction.com/" target="_blank" rel="noopener" class="proj-agency-pill">Triple S Production ↗</a>
                        </div>
                        <h3 class="proj-name">Custom Hiring Plugin</h3>
                        <p class="proj-desc">Built a custom WordPress hiring plugin for Triple S Production's career page. Backend job management, application form submission, and automatic status emails (Received / Selected / Rejected) triggered by admin actions.</p>
                        <div class="proj-tags">
                            <span>WordPress Plugin</span>
                            <span>PHP Backend</span>
                            <span>Auto Email System</span>
                            <span>Admin Dashboard</span>
                        </div>
                        <div class="proj-card-footer">
                            <span class="proj-internal-tag">⚙️ Internal Tool</span>
                            <span class="proj-featured-badge">⭐ Featured</span>
                        </div>
                    </div>

                    <!-- SkinFix -->
                    <div class="proj-card" data-category="triple-s">
                        <div class="proj-card-top">
                            <span class="proj-eyebrow">Healthcare Website</span>
                            <a href="https://triplesproduction.com/" target="_blank" rel="noopener" class="proj-agency-pill">Triple S Production ↗</a>
                        </div>
                        <h3 class="proj-name">SkinFix</h3>
                        <p class="proj-desc">Healthcare and skincare website built using custom PHP template files. Modular, maintainable design architecture with clean code structure and fast load times.</p>
                        <div class="proj-tags">
                            <span>PHP Templates</span>
                            <span>Custom Theme</span>
                            <span>WordPress</span>
                        </div>
                        <div class="proj-card-footer">
                            <a href="https://skinfix.in/" target="_blank" rel="noopener" class="proj-live-link">Live Preview ↗</a>
                        </div>
                    </div>

                    <!-- ManMilan -->
                    <div class="proj-card" data-category="triple-s">
                        <div class="proj-card-top">
                            <span class="proj-eyebrow">Matrimonial Platform</span>
                            <a href="https://triplesproduction.com/" target="_blank" rel="noopener" class="proj-agency-pill">Triple S Production ↗</a>
                        </div>
                        <h3 class="proj-name">ManMilan</h3>
                        <p class="proj-desc">Matrimonial website developed as a full-stack developer. Focused on performance, clean UI, and smooth profile-browsing experience for users.</p>
                        <div class="proj-tags">
                            <span>WordPress</span>
                            <span>Custom Development</span>
                            <span>Full-Stack</span>
                        </div>
                        <div class="proj-card-footer">
                            <a href="https://manmilan.in/" target="_blank" rel="noopener" class="proj-live-link">Live Preview ↗</a>
                        </div>
                    </div>

                    <!-- JeevanPriti -->
                    <div class="proj-card" data-category="triple-s">
                        <div class="proj-card-top">
                            <span class="proj-eyebrow">Matrimonial Platform</span>
                            <a href="https://triplesproduction.com/" target="_blank" rel="noopener" class="proj-agency-pill">Triple S Production ↗</a>
                        </div>
                        <h3 class="proj-name">JeevanPriti</h3>
                        <p class="proj-desc">Matrimonial website with a trust-building design built for user-friendly navigation and fast page loading. Clean, readable layout with smooth UX.</p>
                        <div class="proj-tags">
                            <span>WordPress</span>
                            <span>Custom Development</span>
                            <span>UI/UX Design</span>
                        </div>
                        <div class="proj-card-footer">
                            <a href="https://jeevanpriti.com/" target="_blank" rel="noopener" class="proj-live-link">Live Preview ↗</a>
                        </div>
                    </div>

                    <!-- Indian Academy (Latent) -->
                    <div class="proj-card proj-card--latent" data-category="latent">
                        <div class="proj-card-top">
                            <span class="proj-eyebrow">Education Website</span>
                            <a href="https://www.latenthq.com/" target="_blank" rel="noopener" class="proj-agency-pill proj-agency-pill--latent">Latent Software ↗</a>
                        </div>
                        <h3 class="proj-name">Indian Academy</h3>
                        <p class="proj-desc">Educational institution website built with a professional and credibility-focused design. Smooth enrollment flow and structured course information layout.</p>
                        <div class="proj-tags">
                            <span>WordPress</span>
                            <span>Education Platform</span>
                            <span>Custom Theme</span>
                        </div>
                        <div class="proj-card-footer">
                            <a href="https://indianacademy.edu.in/" target="_blank" rel="noopener" class="proj-live-link proj-live-link--latent">Live Preview ↗</a>
                        </div>
                    </div>

                    <!-- Adevo (Latent) -->
                    <div class="proj-card proj-card--latent" data-category="latent">
                        <div class="proj-card-top">
                            <span class="proj-eyebrow">Business / Agency</span>
                            <a href="https://www.latenthq.com/" target="_blank" rel="noopener" class="proj-agency-pill proj-agency-pill--latent">Latent Software ↗</a>
                        </div>
                        <h3 class="proj-name">Adevo</h3>
                        <p class="proj-desc">Business and agency website developed with modern design principles. Conversion-focused page layout with strong service presentation and lead-gen structure.</p>
                        <div class="proj-tags">
                            <span>WordPress</span>
                            <span>Business Website</span>
                            <span>Landing Page</span>
                        </div>
                        <div class="proj-card-footer">
                            <a href="https://adevo.in/" target="_blank" rel="noopener" class="proj-live-link proj-live-link--latent">Live Preview ↗</a>
                        </div>
                    </div>

                    <!-- VBTek (Latent) -->
                    <div class="proj-card proj-card--latent" data-category="latent">
                        <div class="proj-card-top">
                            <span class="proj-eyebrow">Tech Company</span>
                            <a href="https://www.latenthq.com/" target="_blank" rel="noopener" class="proj-agency-pill proj-agency-pill--latent">Latent Software ↗</a>
                        </div>
                        <h3 class="proj-name">VBTek</h3>
                        <p class="proj-desc">Tech company website with bold, professional layout built to establish brand authority. Strong service positioning and qualified lead generation structure.</p>
                        <div class="proj-tags">
                            <span>WordPress</span>
                            <span>Tech Company</span>
                            <span>Lead Generation</span>
                        </div>
                        <div class="proj-card-footer">
                            <a href="https://vbtek.in/" target="_blank" rel="noopener" class="proj-live-link proj-live-link--latent">Live Preview ↗</a>
                        </div>
                    </div>

                    <!-- Hyperlychee Labs (Latent) -->
                    <div class="proj-card proj-card--latent" data-category="latent">
                        <div class="proj-card-top">
                            <span class="proj-eyebrow">Startup / Innovation</span>
                            <a href="https://www.latenthq.com/" target="_blank" rel="noopener" class="proj-agency-pill proj-agency-pill--latent">Latent Software ↗</a>
                        </div>
                        <h3 class="proj-name">Hyperlychee Labs</h3>
                        <p class="proj-desc">Innovation lab website with creative design approach to convey a strong brand identity and cutting-edge work culture. Startup aesthetic with enterprise-grade layout.</p>
                        <div class="proj-tags">
                            <span>WordPress</span>
                            <span>Startup</span>
                            <span>Brand Identity</span>
                        </div>
                        <div class="proj-card-footer">
                            <a href="https://hyperlycheelabs.com/" target="_blank" rel="noopener" class="proj-live-link proj-live-link--latent">Live Preview ↗</a>
                        </div>
                    </div>

                    <!-- HTG Bharat (Latent) -->
                    <div class="proj-card proj-card--latent" data-category="latent">
                        <div class="proj-card-top">
                            <span class="proj-eyebrow">Corporate Website</span>
                            <a href="https://www.latenthq.com/" target="_blank" rel="noopener" class="proj-agency-pill proj-agency-pill--latent">Latent Software ↗</a>
                        </div>
                        <h3 class="proj-name">HTG Bharat</h3>
                        <p class="proj-desc">Corporate website developed with a focus on professional presentation, structured content hierarchy, and strong conversion pathways for business goals.</p>
                        <div class="proj-tags">
                            <span>WordPress</span>
                            <span>Corporate</span>
                            <span>Custom Design</span>
                        </div>
                        <div class="proj-card-footer">
                            <a href="https://htgbharat.com/" target="_blank" rel="noopener" class="proj-live-link proj-live-link--latent">Live Preview ↗</a>
                        </div>
                    </div>

                    <!-- Project 8P (Latent) -->
                    <div class="proj-card proj-card--latent" data-category="latent">
                        <div class="proj-card-top">
                            <span class="proj-eyebrow">Non-Profit / Org</span>
                            <a href="https://www.latenthq.com/" target="_blank" rel="noopener" class="proj-agency-pill proj-agency-pill--latent">Latent Software ↗</a>
                        </div>
                        <h3 class="proj-name">Project 8P</h3>
                        <p class="proj-desc">Mission-driven organization website built with an impactful, content-first design to communicate vision, values, and drive strong audience engagement.</p>
                        <div class="proj-tags">
                            <span>WordPress</span>
                            <span>Non-Profit</span>
                            <span>Content-Focused</span>
                        </div>
                        <div class="proj-card-footer">
                            <a href="https://project8p.org/" target="_blank" rel="noopener" class="proj-live-link proj-live-link--latent">Live Preview ↗</a>
                        </div>
                    </div>

                </div><!-- /projects-grid -->

                <!-- Bottom Disclaimer -->
                <p class="proj-bottom-note">
                    All projects were built during professional agency roles at
                    <a href="https://triplesproduction.com/" target="_blank" rel="noopener">Triple S Production</a> &amp;
                    <a href="https://www.latenthq.com/" target="_blank" rel="noopener">Latent Software</a>.
                    Client ownership and branding belong to respective agencies and their clients.
                </p>

            </div>
        </section>

    
        <!-- ============================================================
             CONTACT SECTION (30% INFO & PROGRESS BARS + 70% FORM)
        ============================================================ -->
        <section id="contact" class="contact-section">
            <div class="container">

                <!-- Section Header (Left-aligned matching site theme) -->
                <div class="timeline-header-wrap contact-header-wrap">
                    <div class="timeline-header-left">
                        <div class="timeline-badge">
                            <span class="badge-icon">✦</span>
                            <span>Get In Touch</span>
                        </div>
                        <h2 class="timeline-headline">Let's Build Something <span class="highlight-text">Great</span> Together</h2>
                        <p class="timeline-desc">
                            Have an upcoming project, website redesign, or custom development requirement? Reach out directly or fill out the form below.
                        </p>
                    </div>
                </div>

                <!-- Contact Grid: Left 30% Info & Stats + Right 70% Form -->
                <div class="contact-grid">

                    <!-- Left Column (30%): Direct Channels & Progress Bars -->
                    <div class="contact-info-col">

                        <!-- Direct Connect Card -->
                        <div class="c-info-card">
                            <div class="c-info-header">
                                <h3 class="c-info-title">Connect Instantly</h3>
                            </div>

                            <div class="c-channels-list">
                                <!-- Phone / Call -->
                                <a href="tel:+918530398941" class="c-channel-item">
                                    <div class="c-channel-icon c-icon-call">
                                        <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                        </svg>
                                    </div>
                                    <div class="c-channel-text">
                                        <span class="c-channel-label">Call Directly</span>
                                        <span class="c-channel-val">+91 85303 98941</span>
                                    </div>
                                    <span class="c-channel-arrow">↗</span>
                                </a>

                                <!-- WhatsApp -->
                                <a href="https://wa.me/918530398941?text=Hi%20Suraj,%20I%20would%20like%20to%20discuss%20a%20website%20project" target="_blank" rel="noopener" class="c-channel-item">
                                    <div class="c-channel-icon c-icon-wa">
                                        <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                                            <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0 0 12.04 2zm.01 1.67c2.2 0 4.26.86 5.82 2.41 1.56 1.56 2.41 3.63 2.41 5.83 0 4.54-3.7 8.24-8.24 8.24-1.48 0-2.93-.4-4.2-1.15l-.3-.18-3.12.82.83-3.04-.2-.31a8.18 8.18 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24z"/>
                                            <path d="M8.78 7.37c-.2-.45-.42-.46-.62-.47-.16-.01-.35-.01-.53-.01-.19 0-.49.07-.75.35-.26.28-1 1-1 2.43 0 1.43 1.03 2.82 1.18 3.01.14.2 2 3.14 4.93 4.35 2.43 1 2.92.8 3.45.75.53-.05 1.7-.7 1.94-1.37.24-.67.24-1.25.17-1.37-.07-.12-.26-.2-.55-.34s-1.7-.84-1.96-.94c-.26-.09-.45-.14-.64.14s-.73.94-.9 1.13c-.17.2-.33.22-.62.08-.29-.14-1.23-.45-2.35-1.44-.87-.77-1.46-1.73-1.63-2.02-.17-.29-.02-.45.13-.59.13-.13.29-.34.43-.51.14-.17.19-.29.29-.48.09-.2.05-.37-.02-.51-.08-.14-.62-1.55-.87-2.12z"/>
                                        </svg>
                                    </div>
                                    <div class="c-channel-text">
                                        <span class="c-channel-label">WhatsApp Chat</span>
                                        <span class="c-channel-val">Quick Chat ↗</span>
                                    </div>
                                    <span class="c-channel-arrow">↗</span>
                                </a>

                                <!-- Email -->
                                <a href="mailto:surajrmane45@gmail.com" class="c-channel-item">
                                    <div class="c-channel-icon c-icon-mail">
                                        <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
                                    </div>
                                    <div class="c-channel-text">
                                        <span class="c-channel-label">Email Address</span>
                                        <span class="c-channel-val">surajrmane45@gmail.com</span>
                                    </div>
                                    <span class="c-channel-arrow">↗</span>
                                </a>

                                <!-- LinkedIn -->
                                <a href="https://www.linkedin.com/in/suraj-mane-8a5b26399" target="_blank" rel="noopener" class="c-channel-item">
                                    <div class="c-channel-icon c-icon-li">
                                        <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                                            <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/>
                                        </svg>
                                    </div>
                                    <div class="c-channel-text">
                                        <span class="c-channel-label">LinkedIn</span>
                                        <span class="c-channel-val">suraj-mane ↗</span>
                                    </div>
                                    <span class="c-channel-arrow">↗</span>
                                </a>

                                <!-- Instagram -->
                                <a href="https://www.instagram.com/manesuraj4943?cplk=MTdlZ3c2aDh4dDgxcA==" target="_blank" rel="noopener" class="c-channel-item">
                                    <div class="c-channel-icon c-icon-ig">
                                        <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                        </svg>
                                    </div>
                                    <div class="c-channel-text">
                                        <span class="c-channel-label">Instagram</span>
                                        <span class="c-channel-val">@manesuraj4943 ↗</span>
                                    </div>
                                    <span class="c-channel-arrow">↗</span>
                                </a>
                            </div>
                        </div>

                        <!-- Performance & Reliability Progress Bars Card -->
                        <div class="c-info-card">
                            <div class="c-info-header">
                                <h3 class="c-info-title">Reliability &amp; Delivery</h3>
                            </div>

                            <div class="c-progress-list">
                                <!-- Progress Item 1 (Emerald Green) -->
                                <div class="c-progress-item c-prog-green">
                                    <div class="c-progress-meta">
                                        <span class="c-progress-name">Response Rate (< 2 hrs)</span>
                                        <span class="c-progress-pct">100%</span>
                                    </div>
                                    <div class="c-progress-track">
                                        <div class="c-progress-fill" style="width: 100%;"></div>
                                    </div>
                                </div>

                                <!-- Progress Item 2 (Royal Blue) -->
                                <div class="c-progress-item c-prog-blue">
                                    <div class="c-progress-meta">
                                        <span class="c-progress-name">On-Time Project Delivery</span>
                                        <span class="c-progress-pct">98%</span>
                                    </div>
                                    <div class="c-progress-track">
                                        <div class="c-progress-fill" style="width: 98%;"></div>
                                    </div>
                                </div>

                                <!-- Progress Item 3 (Signature Orange) -->
                                <div class="c-progress-item c-prog-orange">
                                    <div class="c-progress-meta">
                                        <span class="c-progress-name">PageSpeed &amp; SEO Target</span>
                                        <span class="c-progress-pct">95%+</span>
                                    </div>
                                    <div class="c-progress-track">
                                        <div class="c-progress-fill" style="width: 95%;"></div>
                                    </div>
                                </div>

                                <!-- Progress Item 4 (Purple) -->
                                <div class="c-progress-item c-prog-purple">
                                    <div class="c-progress-meta">
                                        <span class="c-progress-name">Client Satisfaction</span>
                                        <span class="c-progress-pct">100%</span>
                                    </div>
                                    <div class="c-progress-track">
                                        <div class="c-progress-fill" style="width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- /contact-info-col -->

                    <!-- Right Column (70%): Interactive Contact Form -->
                    <div class="contact-form-col">
                        <div class="c-form-card">
                            <div class="c-form-header">
                                <h3 class="c-form-title">Send a Message</h3>
                                <p class="c-form-subtitle">Fill in the details below and I will get back to you promptly.</p>
                            </div>
                            <?php if (isset($_GET['sent'])): ?>
                                <div class="c-status-msg c-status-success" style="display: block; margin-bottom: 20px;">
                                    Thank you! Your message has been sent successfully. I will get back to you shortly.
                                </div>
                            <?php endif; ?>

                            <form id="portfolioContactForm" class="c-form" action="send-mail.php" method="POST">
                                
                                <!-- Row 1: Name & Email -->
                                <div class="c-form-row">
                                    <div class="c-form-group">
                                        <label for="formName" class="c-label">Your Name <span class="c-req">*</span></label>
                                        <input type="text" id="formName" name="name" class="c-input" placeholder="e.g. Rahul Sharma" required>
                                    </div>
                                    <div class="c-form-group">
                                        <label for="formEmail" class="c-label">Email Address <span class="c-req">*</span></label>
                                        <input type="email" id="formEmail" name="email" class="c-input" placeholder="name@company.com" required>
                                    </div>
                                </div>

                                <!-- Row 2: Phone & Subject -->
                                <div class="c-form-row">
                                    <div class="c-form-group">
                                        <label for="formPhone" class="c-label">Phone / WhatsApp</label>
                                        <input type="tel" id="formPhone" name="phone" class="c-input" placeholder="+91 98765 43210">
                                    </div>
                                    <div class="c-form-group">
                                        <label for="formSubject" class="c-label">Subject</label>
                                        <input type="text" id="formSubject" name="subject" class="c-input" placeholder="e.g. New Website Development">
                                    </div>
                                </div>

                                <!-- Row 3: Service Selection Pills -->
                                <div class="c-form-group">
                                    <label class="c-label">Service Needed</label>
                                    <div class="c-service-pills">
                                        <label class="c-service-pill">
                                            <input type="radio" name="service" value="Custom WordPress" checked>
                                            <span>Custom WordPress</span>
                                        </label>
                                        <label class="c-service-pill">
                                            <input type="radio" name="service" value="Business Website">
                                            <span>Business Website</span>
                                        </label>
                                        <label class="c-service-pill">
                                            <input type="radio" name="service" value="SEO & Speed Optimization">
                                            <span>SEO &amp; Speed</span>
                                        </label>
                                        <label class="c-service-pill">
                                            <input type="radio" name="service" value="Custom Plugin Development">
                                            <span>Custom Plugin</span>
                                        </label>
                                        <label class="c-service-pill">
                                            <input type="radio" name="service" value="Website Redesign / Fixes">
                                            <span>Redesign / Fixes</span>
                                        </label>
                                        <label class="c-service-pill">
                                            <input type="radio" name="service" value="Other Inquiry">
                                            <span>Other</span>
                                        </label>
                                    </div>
                                </div>

                                <!-- Row 4: Message -->
                                <div class="c-form-group">
                                    <label for="formMessage" class="c-label">Project Details / Message <span class="c-req">*</span></label>
                                    <textarea id="formMessage" name="message" class="c-textarea" rows="5" placeholder="Tell me about your project, timeline, goals, or requirements..." required></textarea>
                                </div>

                                <!-- Submit & Status Message -->
                                <div class="c-form-footer">
                                    <button type="submit" id="formSubmitBtn" class="c-submit-btn">
                                        <span class="btn-text">Send Message</span>
                                        <span class="btn-arrow">→</span>
                                    </button>
                                    <div id="formStatusMsg" class="c-status-msg" style="display: none;"></div>
                                </div>

                            </form>
                        </div>
                    </div><!-- /contact-form-col -->

                </div><!-- /contact-grid -->

            </div>
        </section>
    </main>

    <!-- ============================================================
         FOOTER
    ============================================================ -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-inner">
                <div class="footer-left">
                    <span class="footer-brand">Suraj Mane</span>
                    <span class="footer-role">Website Developer</span>
                </div>
                <div class="footer-center">
                    <p class="footer-copyright">&copy; <?php echo date('Y'); ?> Suraj Mane. Built with clean code &amp; high performance.</p>
                </div>
                <div class="footer-right">
                    <a href="#home" class="footer-back-top">
                        <span>Back to Top</span>
                        <span>↑</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/js/main.js?v=<?php echo time(); ?>"></script>
</body>
</html>
