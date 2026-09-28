<?php
/**
 * Syed Shayan - Insights Page
 * Full-Stack PHP Implementation
 * 
 * Replicated for PHP Evaluation Test
 */

$pageTitle = "Syed Shayan Insights | Urban Development & Natural Resources";
$metaDescription = "Explore independent research on urban and regional development, natural resources, governance and consumer policy for better communities in Pakistan.";
$currentYear = date('Y');
$activePage = 'insights';
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Global Image Fallback & PHP dynamic configuration -->
  <script>
    document.addEventListener('error', function (e) {
      if (e.target && e.target.tagName === 'IMG' && !e.target.dataset.fallbackApplied) {
        e.target.dataset.fallbackApplied = 'true';
        var src = e.target.getAttribute('src');
        if (src && !src.startsWith('http') && !src.startsWith('//') && !src.startsWith('data:')) {
          e.target.src = 'https://syedshayan.com/' + src.replace(/^\.\//, '').replace(/^\/+/, '');
        }
      }
    }, true);
  </script>

  <link rel="canonical" href="https://syedshayan.com/insights">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
  <title>Syed Shayan Insights | Urban Development & Natural Resources</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://unpkg.com/lucide-static/font/lucide.css" rel="stylesheet">

  <meta name="keywords"
    content="urban development Pakistan, regional development Pakistan, natural resources Pakistan, consumer policy Pakistan, governance research Pakistan, resource management Pakistan, public policy Pakistan, urban policy Pakistan, regional planning Pakistan, Syed Shayan research">

  <meta name="publisher" content="SyedShayan.com">
  <meta name="author" content="SyedShayan.com">

  <!-- Open Graph Tags (For Social Media Sharing) -->
  <meta name="description"
    content="Explore independent research on urban and regional development, natural resources, governance and consumer policy for better communities in Pakistan.">
  <meta property="og:title" content="Syed Shayan Insights | Urban Development & Natural Resources">
  <meta property="og:description"
    content="Independent research on urban and regional development, natural resources, governance and consumer policy.">
  <meta property="og:image" content="https://syedshayan.com/Images/ss-main-logo.png" />
  <meta property="og:url" content="https://syedshayan.com/insights">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="SyedShayan.com">

  <!-- Twitter Card Tags (For Twitter Sharing) -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Syed Shayan Insights | Urban Development & Natural Resources">
  <meta name="twitter:description"
    content="Independent research on urban and regional development, natural resources, governance and consumer policy.">
  <meta name="twitter:image" content="https://syedshayan.com/Images/ss-main-logo.png">

  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

  <link rel="icon" type="image/png" href="https://syedshayan.com/Images/ss-main-logo.png">


  <!-- ✅ Icon Libraries for Footer -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <meta name="theme-color" content="#284571">
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400&display=swap" rel="stylesheet">
  <style>
    /* Custom font size for "ON THIS DATE" to better match the image */
    .on-this-date-text {
      font-size: 1.5rem;
      /* Equivalent to text-4xl, but fine-tuned */
      line-height: 1;
    }

    /* ===============================
   HOME PAGE MOBILE MENU CENTER
   =============================== */

    @media (max-width: 768px) {

      /* sirf HOME page */
      .home-page #mobileMenu .px-0 {
        display: flex;
        flex-direction: column;
        align-items: center;
        height: calc(100vh - 80px);
        /* header ke neeche */
        text-align: center;
      }

      .home-page #mobileMenu a {
        justify-content: center !important;
        width: 100%;
      }
    }

    @media (max-width: 1300px) and (min-width:639px) {
      .laptop-size {
        width: 500px !important;
        margin: 40px auto 0px !important;
      }
    }

    .gradient-line {
      margin-top: 32px;
      width: 100%;
      height: 2px;
      /* line thickness */
      background: linear-gradient(90deg,
          rgba(255, 255, 255, 1) 0%,
          rgba(223, 191, 114, 1) 50%,
          rgba(255, 255, 255, 1) 100%);
    }

    @media(max-width: 450px) {
      .mobile-view-p {
        padding-left: 0px !important;
        max-width: 90vw !important;
      }
    }

    @keyframes fadeUpOnce {
      from {
        opacity: 0;
        transform: translateY(40px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .animate-fade-up-onload {
      animation: fadeUpOnce 0.8s ease-out both;
    }

    @media (max-width: 1023px) {

      /* Default for Android & Other Browsers */
      .animate-fade-up-onload {
        /* margin-top: -154px !important;*/
        display: block;
        position: relative;
      }

      /* Target Safari/iOS Specifically */
      /* Is selector ko sirf WebKit (Safari) engine samajhta hai */
      @supports (-webkit-hyphens:none) {
        .animate-fade-up-onload {
          margin-top: -500px !important;
        }
      }
    }

    @media (max-width: 768px) {
      .mbladsgvdbgdafbvdcbv {
        display: none;
      }
    }

    .side-decor {
      position: fixed;
      top: 0;
      height: 100%;
      pointer-events: none;
      z-index: 10;
      background-image: url('Images/home-bg-icons.png');
      background-repeat: repeat-y;
      background-position: top;
      background-size: 400px;
      opacity: 0.12;

      /* 🔥 MAGIC PART */
      -webkit-mask-image: linear-gradient(to bottom,
          transparent 0%,
          black 12%,
          black 88%,
          transparent 100%);
      mask-image: linear-gradient(to bottom,
          transparent 0%,
          black 12%,
          black 88%,
          transparent 100%);
    }

    @media (min-width: 533px) and (max-width: 633px) {
      .mbs1 {
        margin-top: -217px !important;
      }
    }
  </style>

  <script type="application/ld+json">
[
  {
    "@context": "https://schema.org",
    "@type": "WebSite",
    "@id": "https://syedshayan.com/#website",
    "name": "SyedShayan.com",
    "url": "https://syedshayan.com/",
    "description": "Independent research for better communities, responsible resource management and fairer consumer policy.",
    "publisher": {
      "@id": "https://syedshayan.com/#organization"
    }
  },
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "@id": "https://syedshayan.com/#organization",
    "name": "SyedShayan.com",
    "url": "https://syedshayan.com/",
    "description": "Think tank for urban and regional development, natural resources and consumer policy.",
    "logo": {
      "@type": "ImageObject",
      "url": "https://syedshayan.com/Images/ss-main-logo.png"
    }
  },
  {
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "Syed Shayan",
    "url": "https://syedshayan.com/",
    "image": "https://syedshayan.com/Images/syedshayan.jpeg",
    "jobTitle": "CEO & Founder",
    "worksFor": {
      "@id": "https://syedshayan.com/#organization"
    },
    "sameAs": [
      "https://www.facebook.com/syed.shayan.100",
      "https://www.linkedin.com/in/shayan-pakistan-b6060a38b/",
      "https://www.instagram.com/syedshayancom/",
      "https://www.youtube.com/@syedshayan."
    ]
  }
]
</script>


  <!-- Fonts required by Pakistan Administrative Future coded card -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800&family=Poppins:wght@400;500;600&family=Roboto+Condensed:wght@400;500;600;700&family=Noto+Naskh+Arabic:wght@400;500;600;700&display=swap"
    rel="stylesheet">


  <style>
    /* FINAL MOBILE RESPONSIVE HARDENING — keeps the PDF-style composition without horizontal page movement */
    html, body { max-width: 100%; overflow-x: hidden !important; }
    img, video, iframe, svg { max-width: 100%; }
    @media (max-width: 700px) {
      body { width: 100%; min-width: 0; }
      section, .pdfmatch, .pdfmatch .wrap, .pdf-housing-mobile, #trigger-section {
        max-width: 100% !important; min-width: 0 !important; box-sizing: border-box !important;
      }
      .pdfmatch .wrap { width: 100% !important; padding-left: 14px !important; padding-right: 14px !important; }
      #digital-library-pdfmatch { padding-top: 38px !important; padding-bottom: 34px !important; }
      .pdfmatch .library-grid {
        display: grid !important; grid-template-columns: 40% 60% !important; gap: 4px !important;
        align-items: center !important; width: 100% !important;
      }
      .pdfmatch .library-grid > * { min-width: 0 !important; }
      .pdfmatch .lib-label { font-size: 12px !important; }
      .pdfmatch .lib-title { font-size: clamp(18px, 5.8vw, 24px) !important; line-height: .98 !important; }
      .pdfmatch .lib-copy { font-size: clamp(11px, 3.2vw, 13px) !important; line-height: 1.12 !important; }
      .pdfmatch .library .cta { font-size: 11px !important; padding: 7px 6px !important; white-space: nowrap !important; }
      .pdfmatch .digital-library-art { width: 100% !important; min-width: 0 !important; overflow: visible !important; }
      .pdfmatch .digital-library-books-image { width: 100% !important; height: auto !important; display: block !important; object-fit: contain !important; }
      .pdfmatch .libcats {
        display: grid !important; grid-template-columns: repeat(4,minmax(0,1fr)) !important;
        gap: 3px !important; width: 100% !important; margin-top: 14px !important;
      }
      .pdfmatch .libcat {
        min-width: 0 !important; min-height: 40px !important; padding: 4px 2px !important;
        gap: 2px !important; font-size: clamp(11px,2vw,11px) !important; line-height: 1 !important;
        white-space: normal !important; overflow: visible !important;
      }
      .pdfmatch .libcat img, .pdfmatch .libcat .pdf-lib-symbol {
        width: 24px !important; height: 24px !important; min-width: 24px !important; min-height: 24px !important; flex: 0 0 24px !important;
      }
    }
    @media (max-width: 390px) {
      .pdfmatch .wrap { padding-left: 10px !important; padding-right: 10px !important; }
      .pdfmatch .library-grid { grid-template-columns: 41% 59% !important; }
      .pdfmatch .libcats { gap: 2px !important; }
      .pdfmatch .libcat img, .pdfmatch .libcat .pdf-lib-symbol {
        width: 21px !important; height: 21px !important; min-width: 21px !important; min-height: 21px !important; flex-basis: 21px !important;
      }
    }
  </style>


  <style>
    /* FINAL DIGITAL LIBRARY PDF MATCH */
    #digital-library-pdfmatch { position: relative; }
    #digital-library-pdfmatch .digital-library-heading-icon {
      position:absolute; top:56px; right:22px; width:38px; height:38px; object-fit:contain; z-index:3;
    }
    #digital-library-pdfmatch .lib-label { font-family:Arial,sans-serif; font-size:18px; font-weight:700; line-height:1.1; }
    #digital-library-pdfmatch .lib-title { font-family:Georgia,'Times New Roman',serif; font-size:36px !important; font-weight:700; line-height:.98; letter-spacing:-.5px; margin:18px 0 8px; }
    #digital-library-pdfmatch .lib-copy { font-family:Arial,sans-serif; font-size:22px; font-weight:400; line-height:1.08; }
    #digital-library-pdfmatch .libcat img,
    #digital-library-pdfmatch .libcat .pdf-lib-symbol { width:24px !important; height:24px !important; min-width:24px !important; min-height:24px !important; object-fit:contain; }
    @media (max-width:700px) {
      #digital-library-pdfmatch { padding-top:48px !important; padding-bottom:42px !important; }
      #digital-library-pdfmatch .digital-library-heading-icon { top:46px; right:18px; width:31px; height:31px; }
      #digital-library-pdfmatch .lib-label { font-size:15px !important; font-weight:700 !important; line-height:1.05 !important; }
      #digital-library-pdfmatch .lib-label:after { width:40px !important; height:2px !important; margin-top:6px !important; }
      #digital-library-pdfmatch .lib-title { font-size:27px !important; font-weight:700 !important; line-height:.96 !important; letter-spacing:-.45px !important; margin:17px 0 8px !important; }
      #digital-library-pdfmatch .lib-copy { font-size:16px !important; font-weight:400 !important; line-height:1.08 !important; margin-bottom:10px !important; }
      #digital-library-pdfmatch .library .cta, #digital-library-pdfmatch .cta { font-size:11px !important; font-weight:700 !important; padding:8px 10px !important; }
      #digital-library-pdfmatch .libcat { font-size:11px !important; font-weight:400 !important; min-height:43px !important; }
      #digital-library-pdfmatch .libcat img,
      #digital-library-pdfmatch .libcat .pdf-lib-symbol { width:33px !important; height:33px !important; min-width:33px !important; min-height:33px !important; flex:0 0 33px !important; }
    }
    @media (max-width:420px) {
      #digital-library-pdfmatch .digital-library-heading-icon { top:45px; right:14px; width:29px; height:29px; }
      #digital-library-pdfmatch .lib-title { font-size:25px !important; }
      #digital-library-pdfmatch .lib-copy { font-size:14px !important; }
      #digital-library-pdfmatch .libcat img,
      #digital-library-pdfmatch .libcat .pdf-lib-symbol { width:30px !important; height:30px !important; min-width:30px !important; min-height:30px !important; flex-basis:30px !important; }
    }
  </style>


  <style>
    /* FINAL PDF VISUAL MATCH — requested adjustments */
    .pdfmatch .survey-all a {
      color:#043E6B !important;
      font-weight:800 !important;
      letter-spacing:.1px !important;
    }
    #digital-library-pdfmatch .digital-library-heading-icon {
      top:54px !important;
      right:24px !important;
      width:58px !important;
      height:58px !important;
      object-fit:contain !important;
    }
    #digital-library-pdfmatch .libcat {
      color:#1f2937 !important;
      font-weight:600 !important;
    }
    #digital-library-pdfmatch .libcat img,
    #digital-library-pdfmatch .libcat .pdf-lib-symbol {
      width:28px !important;
      height:28px !important;
      min-width:28px !important;
      min-height:28px !important;
      flex:0 0 28px !important;
    }
    @media (max-width:700px) {
      .pdfmatch .survey-all a::before { font-weight:800 !important; color:#043E6B !important; }
      #digital-library-pdfmatch .digital-library-heading-icon {
        top:52px !important; right:18px !important; width:48px !important; height:48px !important;
      }
      #digital-library-pdfmatch .libcat {
        color:#1f2937 !important; font-weight:600 !important;
      }
      #digital-library-pdfmatch .libcat img,
      #digital-library-pdfmatch .libcat .pdf-lib-symbol {
        width:24px !important; height:24px !important; min-width:24px !important; min-height:24px !important; flex:0 0 24px !important;
      }
    }
  </style>

  <style>
    /* ===== RESEARCH AND POLICY — PDF EXACT STYLE ===== */
    .rp-section{width:100%;font-family:Arial,Helvetica,sans-serif;padding:12px 0 20px;}
    .rp-heading{text-align:center;margin:0 auto 25px;color:#111 ;}
    .rp-kicker{display:flex;align-items:center;justify-content:center;gap:13px;color:#D6A839;font-size:15px;font-weight:700;margin-bottom:7px}
    .rp-kicker span{display:block;width:40px;height:1.5px;background:#D6A839}
    .rp-heading h2{font-family:Georgia,'Times New Roman',serif;color:#043E6B;font-size:20px;line-height:1.03;font-weight:700;margin:0}
    .rp-heading p{font-size:14px;line-height:1.22;font-weight:600;margin:10px 0 0;color:#222}
    .rp-cards{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:12px}
    .rp-card{display:flex;flex-direction:column;min-height:300px;background:#fff;border:1px solid #e5e5e5;border-radius:13px;padding:17px 14px 12px;box-shadow:0 8px 10px rgba(0,0,0,.14);overflow:hidden}
    .rp-card-label{display:flex;align-items:center;gap:10px;min-height:50px;color:#D6A839;font-size:12px;line-height:1.35;font-weight:500}
    .rp-icon{width:45px;height:45px;min-width:45px;border-radius:50%;display:flex;align-items:center;justify-content:center;background:#fbf6e9;color:#D6A839}
    .rp-icon svg{width:29px;height:29px}
    .rp-card h3{font-size:19px;line-height:.98;color:#043E6B;font-weight:800;margin:9px 0 4px}
    .rp-card>p{font-size:14px;line-height:1.27;color:#222;margin:0 0 13px}
    .rp-tags{display:flex;gap:6px;flex-wrap:wrap;margin-top:auto;margin-bottom:11px}
    .rp-tags span{background:#d9ebff;color:#145183;border-radius:999px;padding:6px 10px;font-size:11px;line-height:1;font-weight:700;white-space:nowrap}
    .rp-btn{align-self:flex-start;display:inline-flex;align-items:center;gap:4px;background:#043E6B;color:#fff!important;text-decoration:none;border-radius:999px;padding:7px 9px;font-size:11px;line-height:1;font-weight:500;box-shadow:0 3px 7px rgba(0,0,0,.25);white-space:nowrap}
    .rp-btn b{font-size:22px;line-height:8px;font-weight:300}
    .rp-dots{display:none}
    @media(min-width:1024px){
      .rp-section{padding:4px 0 24px}
      .rp-heading h2{font-size:34px}
      .rp-heading p{font-size:15px}
      .rp-card{min-height:315px;padding:18px 17px 13px}
      .rp-card h3{font-size:22px}
      .rp-card>p{font-size:15px}
    }
    @media(max-width:700px){
      .rp-mobile{padding:20px 0 4px}
      .rp-heading{margin-bottom:24px}
      .rp-kicker{font-size:15px;gap:11px}
      .rp-kicker span{width:40px}
      .rp-heading h2{font-size:27px;line-height:1.04}
      .rp-heading p{font-size:14px;line-height:1.25;padding:0 8px}
      .rp-cards{gap:5px;grid-template-columns:repeat(2,minmax(0,1fr))}
      .rp-card{min-width:0;min-height:301px;border-radius:13px;padding:14px 10px 10px}
      .rp-card-label{gap:7px;min-height:49px;font-size:11px}
      .rp-icon{width:42px;height:42px;min-width:42px}
      .rp-icon svg{width:27px;height:27px}
      .rp-card h3{font-size:18px;line-height:.98;margin-top:8px}
      .rp-card>p{font-size:13.5px;line-height:1.27;margin-bottom:11px}
      .rp-tags{gap:4px;margin-bottom:10px;flex-wrap:nowrap}
      .rp-tags span{padding:6px 7px;font-size:11px}
      .rp-btn{font-size:11px;padding:7px 7px;gap:2px}
      .rp-btn b{font-size:19px}
      .rp-dots{display:flex;justify-content:center;gap:4px;margin-top:14px}
      .rp-dots i{display:block;width:8px;height:8px;border-radius:50%;background:#d2d2d2}
      .rp-dots i:first-child{background:#075683}
    }
    @media(max-width:390px){
      .rp-heading h2{font-size:24px}
      .rp-heading p{font-size:12px}
      .rp-card{padding-left:8px;padding-right:8px}
      .rp-card h3{font-size:16px}
      .rp-card>p{font-size:12px}
      .rp-card-label{font-size:11px}
      .rp-icon{width:38px;height:38px;min-width:38px}
      .rp-tags span{font-size:11px;padding:5px 5px}
      .rp-btn{font-size:11px;padding:7px 5px}
    }
  </style>


  <style>
    /* ===== RESEARCH & POLICY: FINAL POSITION / MOBILE VISIBILITY / PDF TYPOGRAPHY ===== */
    .rp-section, .rp-section * { box-sizing: border-box; }
    .rp-section { width:100%; max-width:100%; overflow:visible; font-family:Arial,Helvetica,sans-serif; }
    .rp-heading { text-align:center !important; }
    .rp-kicker { font-size:15px !important; line-height:1.2 !important; text-align:center !important; }
    .rp-heading h2 {
      font-family:Georgia,'Times New Roman',serif !important;
      text-align:center !important; color:#043E6B !important;
    }
    .rp-heading p { font-size:14px !important; line-height:1.28 !important; text-align:center !important; }
    .rp-card { text-align:left !important; }
    .rp-card-label { font-size:12px !important; line-height:1.3 !important; text-align:left !important; }
    .rp-card h3 { text-align:left !important; }
    .rp-card > p { font-size:14px !important; line-height:1.3 !important; text-align:left !important; }
    .rp-tags span { font-size:11px !important; line-height:1 !important; }
    .rp-btn { font-size:11px !important; line-height:1 !important; }

    @media (max-width:1023px) {
      .rp-mobile {
        display:block !important;
        visibility:visible !important;
        opacity:1 !important;
        position:relative !important;
        z-index:20 !important;
        margin:2px auto 26px !important;
        padding:18px 0 4px !important;
      }
      .rp-mobile .rp-heading { margin-bottom:22px !important; padding:0 4px !important; }
      .rp-mobile .rp-kicker { font-size:14px !important; gap:10px !important; }
      .rp-mobile .rp-kicker span { width:38px !important; }
      .rp-mobile .rp-heading h2 {
        font-size:26px !important; line-height:1.04 !important;
        letter-spacing:-.35px !important; margin:0 !important;
      }
      .rp-mobile .rp-heading p {
        font-size:13px !important; line-height:1.28 !important;
        margin-top:10px !important; padding:0 !important;
      }
      .rp-mobile .rp-cards {
        display:grid !important; grid-template-columns:repeat(2,minmax(0,1fr)) !important;
        gap:7px !important; width:100% !important;
      }
      .rp-mobile .rp-card {
        display:flex !important; min-width:0 !important; min-height:320px !important;
        padding:14px 10px 11px !important; border-radius:13px !important;
      }
      .rp-mobile .rp-card-label {
        min-height:48px !important; gap:7px !important;
        font-size:11px !important; line-height:1.22 !important;
      }
      .rp-mobile .rp-icon { width:40px !important; height:40px !important; min-width:40px !important; }
      .rp-mobile .rp-icon svg { width:26px !important; height:26px !important; }
      .rp-mobile .rp-card h3 {
        font-size:18px !important; line-height:1.02 !important;
        margin:8px 0 5px !important;
      }
      .rp-mobile .rp-card > p {
        font-size:12px !important; line-height:1.3 !important;
        margin:0 0 11px !important;
      }
      .rp-mobile .rp-tags {
        display:flex !important; flex-wrap:wrap !important; gap:5px !important;
        margin-top:auto !important; margin-bottom:10px !important;
      }
      .rp-mobile .rp-tags span {
        font-size:11px !important; padding:6px 7px !important;
        white-space:normal !important; text-align:center !important;
      }
      .rp-mobile .rp-btn {
        font-size:11px !important; padding:8px 7px !important;
        white-space:normal !important; line-height:1.15 !important;
      }
      .rp-mobile .rp-dots { display:flex !important; margin-top:14px !important; }
    }

    @media (max-width:390px) {
      .rp-mobile .rp-heading h2 { font-size:23px !important; }
      .rp-mobile .rp-heading p { font-size:12px !important; }
      .rp-mobile .rp-card { padding-left:8px !important; padding-right:8px !important; }
      .rp-mobile .rp-card h3 { font-size:16px !important; }
      .rp-mobile .rp-card > p,
      .rp-mobile .rp-card-label,
      .rp-mobile .rp-tags span,
      .rp-mobile .rp-btn { font-size:11px !important; }
    }
  </style>


<style>
/* Research & Policy — reference-card finishing */
.rp-icon svg{display:block;width:31px!important;height:31px!important;color:#D6A839}
@media(max-width:1023px){
  .rp-mobile .rp-tags{
    display:grid!important;
    grid-template-columns:max-content max-content!important;
    justify-content:start!important;
    align-items:center!important;
    column-gap:5px!important;
    row-gap:5px!important;
    flex-wrap:nowrap!important;
  }
  .rp-mobile .rp-tags span{
    font-size:11px!important;
    line-height:1!important;
    padding:6px 7px!important;
    white-space:nowrap!important;
  }
  .rp-mobile .rp-btn{
    width:max-content!important;
    max-width:100%!important;
    font-size:11px!important;
    line-height:1!important;
    padding:8px 7px!important;
    gap:3px!important;
    white-space:nowrap!important;
  }
  .rp-mobile .rp-btn b{
    flex:0 0 auto!important;
    font-size:19px!important;
  }
  .rp-mobile .rp-icon svg{width:27px!important;height:27px!important}
}
@media(max-width:390px){
  .rp-mobile .rp-tags{column-gap:3px!important}
  .rp-mobile .rp-tags span{font-size:11px!important;padding:6px 5px!important}
  .rp-mobile .rp-btn{font-size:11px!important;padding:8px 5px!important}
}
</style>


<style>
/* ===== RESEARCH & POLICY — FINAL REFERENCE MATCH ===== */
.rp-section{
  width:100%;
  font-family:Arial,Helvetica,sans-serif!important;
  padding:18px 0 28px!important;
}
.rp-heading{max-width:650px;margin:0 auto 34px!important;text-align:center!important}
.rp-kicker{
  display:flex!important;align-items:center!important;justify-content:center!important;
  gap:14px!important;color:#D6A839!important;font-size:20px!important;
  line-height:1!important;font-weight:700!important;margin-bottom:12px!important;
}
.rp-kicker span{width:55px!important;height:2px!important;background:#D6A839!important}
.rp-heading h2{
  font-family:Georgia,'Times New Roman',serif!important;color:#043E6B!important;
  font-size:37px!important;line-height:1.04!important;font-weight:700!important;
  letter-spacing:-.6px!important;margin:0!important;
}
.rp-heading p{
  color:#262626!important;font-size:18px!important;line-height:1.35!important;
  font-weight:600!important;margin:14px auto 0!important;
}
.rp-cards{display:grid!important;grid-template-columns:repeat(2,minmax(0,1fr))!important;gap:12px!important}
.rp-card{
  min-height:402px!important;padding:25px 16px 15px!important;border:1px solid #dedede!important;
  border-radius:15px!important;background:#fff!important;
  box-shadow:0 9px 12px rgba(0,0,0,.14)!important;
  display:flex!important;flex-direction:column!important;text-align:left!important;
}
.rp-card-label{
  min-height:62px!important;display:flex!important;align-items:center!important;gap:10px!important;
  color:#D6A839!important;font-size:16px!important;line-height:1.45!important;font-weight:500!important;
}
.rp-icon{
  width:62px!important;height:62px!important;min-width:62px!important;border-radius:50%!important;
  background:#fbf5e9!important;display:flex!important;align-items:center!important;justify-content:center!important;
}
.rp-icon img{
  width:42px!important;height:42px!important;max-width:42px!important;
  object-fit:contain!important;display:block!important;
}
.rp-card h3{
  color:#043E6B!important;font-size:27px!important;line-height:.96!important;
  font-weight:800!important;letter-spacing:-.5px!important;margin:17px 0 7px!important;
}
.rp-card>p{
  color:#282828!important;font-size:18px!important;line-height:1.32!important;
  font-weight:400!important;margin:0 0 18px!important;
}
.rp-tags{display:flex!important;flex-wrap:wrap!important;gap:8px!important;margin-top:auto!important;margin-bottom:14px!important}
.rp-tags span{
  background:#dcecff!important;color:#0a4b7c!important;border-radius:999px!important;
  padding:8px 12px!important;font-size:14px!important;line-height:1!important;font-weight:700!important;white-space:nowrap!important;
}
.rp-btn{
  width:max-content!important;max-width:100%!important;display:inline-flex!important;align-items:center!important;
  gap:5px!important;background:#043E6B!important;color:#fff!important;border-radius:999px!important;
  padding:9px 12px!important;font-size:15px!important;line-height:1!important;font-weight:600!important;
  text-decoration:none!important;white-space:nowrap!important;box-shadow:0 4px 9px rgba(0,0,0,.25)!important;
}
.rp-btn b{font-size:26px!important;line-height:10px!important;font-weight:300!important}

/* Reference image: two cards remain side-by-side on mobile */
@media(max-width:1023px){
  .rp-mobile{padding:20px 0 5px!important;margin:0 auto 25px!important}
  .rp-mobile .rp-heading{max-width:100%!important;margin-bottom:34px!important;padding:0 5px!important}
  .rp-mobile .rp-kicker{font-size:18px!important;gap:13px!important;margin-bottom:12px!important}
  .rp-mobile .rp-kicker span{width:54px!important;height:2px!important}
  .rp-mobile .rp-heading h2{
    font-size:35px!important;line-height:1.08!important;letter-spacing:-.55px!important;
  }
  .rp-mobile .rp-heading p{
    font-size:17px!important;line-height:1.35!important;font-weight:600!important;
    margin-top:14px!important;padding:0 12px!important;
  }
  .rp-mobile .rp-cards{grid-template-columns:repeat(2,minmax(0,1fr))!important;gap:7px!important}
  .rp-mobile .rp-card{
    min-width:0!important;min-height:402px!important;padding:24px 13px 15px!important;border-radius:15px!important;
  }
  .rp-mobile .rp-card-label{
    min-height:62px!important;gap:8px!important;font-size:14px!important;line-height:1.45!important;
  }
  .rp-mobile .rp-icon{width:60px!important;height:60px!important;min-width:60px!important}
  .rp-mobile .rp-icon img{width:40px!important;height:40px!important;max-width:40px!important}
  .rp-mobile .rp-card h3{
    font-size:25px!important;line-height:.96!important;margin:17px 0 7px!important;
  }
  .rp-mobile .rp-card>p{
    font-size:17px!important;line-height:1.36!important;font-weight:400!important;margin-bottom:17px!important;
  }
  .rp-mobile .rp-tags{
    display:flex!important;flex-wrap:nowrap!important;gap:7px!important;margin-top:auto!important;margin-bottom:14px!important;
  }
  .rp-mobile .rp-tags span{font-size:12px!important;padding:8px 10px!important;white-space:nowrap!important}
  .rp-mobile .rp-btn{font-size:13px!important;padding:9px 10px!important;white-space:nowrap!important}
  .rp-mobile .rp-dots{display:flex!important;justify-content:center!important;gap:6px!important;margin-top:18px!important}
  .rp-mobile .rp-dots i{width:10px!important;height:10px!important;border-radius:50%!important;background:#d2d2d2!important}
  .rp-mobile .rp-dots i:first-child{background:#075683!important}
}

@media(max-width:520px){
  .rp-mobile .rp-heading h2{font-size:clamp(27px,7.5vw,35px)!important}
  .rp-mobile .rp-heading p{font-size:clamp(13px,3.7vw,17px)!important}
  .rp-mobile .rp-kicker{font-size:clamp(14px,4vw,18px)!important}
  .rp-mobile .rp-kicker span{width:clamp(34px,10vw,54px)!important}
  .rp-mobile .rp-card{min-height:370px!important;padding:17px 10px 12px!important}
  .rp-mobile .rp-card-label{font-size:clamp(11px,2.8vw,14px)!important}
  .rp-mobile .rp-icon{width:48px!important;height:48px!important;min-width:48px!important}
  .rp-mobile .rp-icon img{width:33px!important;height:33px!important;max-width:33px!important}
  .rp-mobile .rp-card h3{font-size:clamp(18px,5vw,25px)!important}
  .rp-mobile .rp-card>p{font-size:clamp(13px,3.5vw,17px)!important}
  .rp-mobile .rp-tags{gap:4px!important}
  .rp-mobile .rp-tags span{font-size:clamp(11px,2.45vw,12px)!important;padding:7px 6px!important}
  .rp-mobile .rp-btn{font-size:clamp(11px,2.65vw,13px)!important;padding:8px 7px!important}
}
</style>


<style>
/* ===== RESEARCH & POLICY — MOBILE CONTAINMENT FIX ===== */
.rp-section,
.rp-section * { box-sizing:border-box!important; }

.rp-card { overflow:hidden!important; }
.rp-card > * { min-width:0!important; max-width:100%!important; }

.rp-icon img{
  object-fit:contain!important;
  display:block!important;
}

@media(max-width:520px){
  .rp-mobile{
    width:100%!important;
    max-width:100%!important;
    overflow:hidden!important;
    padding-left:8px!important;
    padding-right:8px!important;
  }

  .rp-mobile .rp-cards{
    width:100%!important;
    max-width:100%!important;
    grid-template-columns:minmax(0,1fr) minmax(0,1fr)!important;
    gap:7px!important;
  }

  .rp-mobile .rp-card{
    width:100%!important;
    min-width:0!important;
    max-width:100%!important;
    min-height:370px!important;
    padding:16px 9px 12px!important;
    overflow:hidden!important;
  }

  .rp-mobile .rp-card-label{
    width:100%!important;
    min-width:0!important;
    gap:6px!important;
    font-size:11px!important;
    line-height:1.25!important;
    overflow-wrap:anywhere!important;
  }

  .rp-mobile .rp-icon{
    width:44px!important;
    height:44px!important;
    min-width:44px!important;
    flex:0 0 44px!important;
  }

  .rp-mobile .rp-icon img{
    width:31px!important;
    height:31px!important;
    max-width:31px!important;
  }

  .rp-mobile .rp-card h3{
    width:100%!important;
    max-width:100%!important;
    font-size:18px!important;
    line-height:1.02!important;
    letter-spacing:-.25px!important;
    overflow-wrap:anywhere!important;
    word-break:normal!important;
  }

  .rp-mobile .rp-card>p{
    width:100%!important;
    max-width:100%!important;
    font-size:13px!important;
    line-height:1.32!important;
    overflow-wrap:anywhere!important;
  }

  /* Pills stay inside each half-width card */
  .rp-mobile .rp-tags{
    width:100%!important;
    max-width:100%!important;
    display:flex!important;
    flex-wrap:wrap!important;
    gap:4px!important;
    overflow:hidden!important;
  }

  .rp-mobile .rp-tags span{
    max-width:100%!important;
    min-width:0!important;
    font-size:11px!important;
    line-height:1!important;
    padding:6px 6px!important;
    white-space:nowrap!important;
  }

  /* CTA must never extend outside the card */
  .rp-mobile .rp-btn{
    width:100%!important;
    max-width:100%!important;
    min-width:0!important;
    justify-content:center!important;
    font-size:11px!important;
    line-height:1.1!important;
    padding:8px 5px!important;
    white-space:nowrap!important;
    overflow:hidden!important;
  }

  .rp-mobile .rp-btn b{
    flex:0 0 auto!important;
    font-size:18px!important;
  }
}

@media(max-width:390px){
  .rp-mobile{padding-left:6px!important;padding-right:6px!important}
  .rp-mobile .rp-cards{gap:5px!important}
  .rp-mobile .rp-card{padding-left:7px!important;padding-right:7px!important}
  .rp-mobile .rp-card-label{font-size:11px!important}
  .rp-mobile .rp-icon{width:40px!important;height:40px!important;min-width:40px!important;flex-basis:40px!important}
  .rp-mobile .rp-icon img{width:28px!important;height:28px!important;max-width:28px!important}
  .rp-mobile .rp-card h3{font-size:16px!important}
  .rp-mobile .rp-card>p{font-size:12px!important}
  .rp-mobile .rp-tags span{font-size:11px!important;padding:6px 4px!important}
  .rp-mobile .rp-btn{font-size:11px!important;padding:8px 4px!important}
}
</style>


<style>
/* ===== PDF 21-09 UPDATE: RESEARCH & POLICY MOBILE SLIDER ===== */
@media (max-width:1023px){
  .rp-slider{overflow:hidden!important;}
  .rp-slider .rp-cards{
    display:flex!important;
    width:100%!important;
    gap:7px!important;
    overflow-x:auto!important;
    overflow-y:hidden!important;
    scroll-snap-type:x mandatory!important;
    scroll-behavior:smooth!important;
    -webkit-overflow-scrolling:touch!important;
    scrollbar-width:none!important;
    padding:2px 0 8px!important;
  }
  .rp-slider .rp-cards::-webkit-scrollbar{display:none!important;}
  .rp-slider .rp-card{
    flex:0 0 calc((100% - 7px)/2)!important;
    width:calc((100% - 7px)/2)!important;
    scroll-snap-align:start!important;
  }
  .rp-slider .rp-dots{
    display:flex!important;
    align-items:center!important;
    justify-content:center!important;
    gap:6px!important;
    margin-top:7px!important;
  }
  .rp-slider .rp-dots button{
    appearance:none!important;
    border:0!important;
    padding:0!important;
    width:7px!important;
    height:7px!important;
    border-radius:50%!important;
    background:#d2d2d2!important;
    cursor:pointer!important;
  }
  .rp-slider .rp-dots button.active{background:#075683!important;}
}
</style>


<style>
/* =========================================================
   RESEARCH & POLICY — FINAL REFERENCE IMAGE FIX
   This block intentionally overrides all older .rp-* rules.
   ========================================================= */
.rp-section,
.rp-section *{box-sizing:border-box!important}

.rp-section{
  width:100%!important;
  max-width:100%!important;
  overflow:visible!important;
  font-family:Arial,Helvetica,sans-serif!important;
}

.rp-heading{
  width:100%!important;
  max-width:680px!important;
  margin:0 auto 34px!important;
  padding:0!important;
  text-align:center!important;
}

.rp-kicker{
  display:flex!important;
  align-items:center!important;
  justify-content:center!important;
  gap:15px!important;
  margin:0 0 11px!important;
  color:#D6A839!important;
  font-size:20px!important;
  line-height:1!important;
  font-weight:700!important;
  white-space:nowrap!important;
}

.rp-kicker span{
  display:block!important;
  width:55px!important;
  height:2px!important;
  flex:0 0 55px!important;
  background:#D6A839!important;
}

.rp-heading h2{
  margin:0!important;
  color:#043E6B!important;
  font-family:Georgia,'Times New Roman',serif!important;
  font-size:37px!important;
  line-height:1.04!important;
  font-weight:700!important;
  letter-spacing:-.55px!important;
  text-align:center!important;
}

.rp-heading p{
  max-width:620px!important;
  margin:14px auto 0!important;
  padding:0!important;
  color:#262626!important;
  font-size:18px!important;
  line-height:1.34!important;
  font-weight:600!important;
  text-align:center!important;
}

.rp-cards{
  width:100%!important;
  display:grid!important;
  grid-template-columns:repeat(2,minmax(0,1fr))!important;
  gap:8px!important;
  overflow:visible!important;
  padding:0!important;
}

.rp-card{
  width:100%!important;
  min-width:0!important;
  min-height:400px!important;
  display:flex!important;
  flex-direction:column!important;
  overflow:hidden!important;
  padding:22px 15px 14px!important;
  border:1px solid #dedede!important;
  border-radius:15px!important;
  background:#fff!important;
  box-shadow:0 8px 11px rgba(0,0,0,.14)!important;
  text-align:left!important;
}

.rp-card-label{
  width:100%!important;
  min-height:62px!important;
  display:flex!important;
  align-items:center!important;
  gap:10px!important;
  color:#D6A839!important;
  font-size:16px!important;
  line-height:1.35!important;
  font-weight:500!important;
  text-align:left!important;
}

.rp-icon{
  width:62px!important;
  height:62px!important;
  min-width:62px!important;
  flex:0 0 62px!important;
  display:flex!important;
  align-items:center!important;
  justify-content:center!important;
  overflow:visible!important;
  border-radius:50%!important;
  background:#fbf5e9!important;
}

.rp-icon img{
  display:block!important;
  width:44px!important;
  height:44px!important;
  min-width:44px!important;
  max-width:44px!important;
  max-height:44px!important;
  opacity:1!important;
  visibility:visible!important;
  object-fit:contain!important;
}

.rp-card h3{
  width:100%!important;
  margin:16px 0 7px!important;
  color:#043E6B!important;
  font-size:26px!important;
  line-height:.98!important;
  font-weight:800!important;
  letter-spacing:-.45px!important;
  text-align:left!important;
}

.rp-card>p{
  width:100%!important;
  margin:0 0 18px!important;
  color:#282828!important;
  font-size:18px!important;
  line-height:1.31!important;
  font-weight:400!important;
  text-align:left!important;
}

.rp-tags{
  width:100%!important;
  display:flex!important;
  flex-wrap:nowrap!important;
  align-items:center!important;
  gap:8px!important;
  margin:auto 0 14px!important;
  overflow:visible!important;
}

.rp-tags span{
  display:inline-flex!important;
  align-items:center!important;
  justify-content:center!important;
  min-width:0!important;
  padding:8px 11px!important;
  border-radius:999px!important;
  background:#dcecff!important;
  color:#0a4b7c!important;
  font-size:14px!important;
  line-height:1!important;
  font-weight:700!important;
  white-space:nowrap!important;
}

.rp-btn{
  width:max-content!important;
  max-width:100%!important;
  min-width:0!important;
  display:inline-flex!important;
  align-items:center!important;
  justify-content:center!important;
  gap:5px!important;
  padding:9px 11px!important;
  overflow:hidden!important;
  border-radius:999px!important;
  background:#043E6B!important;
  color:#fff!important;
  box-shadow:0 4px 9px rgba(0,0,0,.25)!important;
  font-size:15px!important;
  line-height:1!important;
  font-weight:600!important;
  text-decoration:none!important;
  white-space:nowrap!important;
}

.rp-btn b{
  flex:0 0 auto!important;
  font-size:25px!important;
  line-height:10px!important;
  font-weight:300!important;
}

.rp-dots{
  display:flex!important;
  align-items:center!important;
  justify-content:center!important;
  gap:6px!important;
  margin-top:18px!important;
}

.rp-dots button{
  appearance:none!important;
  width:10px!important;
  height:10px!important;
  min-width:10px!important;
  padding:0!important;
  border:0!important;
  border-radius:50%!important;
  background:#d4d4d4!important;
  cursor:pointer!important;
  transition:background .2s ease,transform .2s ease!important;
}

.rp-dots button.active{
  background:#075683!important;
  transform:scale(1.04)!important;
}

/* Mobile: same two-card composition as the supplied reference image. */
@media(max-width:1023px){
  .rp-mobile{
    width:100%!important;
    max-width:660px!important;
    margin:0 auto 25px!important;
    padding:20px 0 5px!important;
    overflow:hidden!important;
  }

  .rp-mobile .rp-heading{
    max-width:640px!important;
    margin-bottom:34px!important;
    padding:0 6px!important;
  }

  .rp-mobile .rp-kicker{
    gap:12px!important;
    margin-bottom:11px!important;
    font-size:clamp(14px,3.4vw,20px)!important;
  }

  .rp-mobile .rp-kicker span{
    width:clamp(35px,8vw,55px)!important;
    flex-basis:clamp(35px,8vw,55px)!important;
  }

  .rp-mobile .rp-heading h2{
    font-size:clamp(28px,6.1vw,37px)!important;
    line-height:1.04!important;
  }

  .rp-mobile .rp-heading p{
    max-width:590px!important;
    margin-top:13px!important;
    padding:0 12px!important;
    font-size:clamp(14px,3.15vw,18px)!important;
    line-height:1.34!important;
  }

  /* IMPORTANT: no flex slider here; that was stretching/breaking the cards.
     Keep the reference's exact 2-column layout. */
  .rp-slider .rp-cards,
  .rp-mobile .rp-cards{
    display:grid!important;
    grid-template-columns:repeat(2,minmax(0,1fr))!important;
    gap:7px!important;
    width:100%!important;
    overflow:visible!important;
    scroll-snap-type:none!important;
    padding:0!important;
  }

  .rp-slider .rp-card,
  .rp-mobile .rp-card{
    flex:none!important;
    width:100%!important;
    min-width:0!important;
    min-height:400px!important;
    padding:21px 13px 14px!important;
    scroll-snap-align:none!important;
  }

  .rp-mobile .rp-card-label{
    min-height:58px!important;
    gap:8px!important;
    font-size:clamp(11px,2.5vw,15px)!important;
    line-height:1.3!important;
  }

  .rp-mobile .rp-icon{
    width:55px!important;
    height:55px!important;
    min-width:55px!important;
    flex-basis:55px!important;
  }

  .rp-mobile .rp-icon img{
    width:39px!important;
    height:39px!important;
    min-width:39px!important;
    max-width:39px!important;
    max-height:39px!important;
  }

  .rp-mobile .rp-card h3{
    margin:15px 0 7px!important;
    font-size:clamp(19px,4.4vw,26px)!important;
    line-height:.98!important;
    overflow-wrap:normal!important;
    word-break:normal!important;
  }

  .rp-mobile .rp-card>p{
    margin-bottom:16px!important;
    font-size:clamp(13px,3vw,18px)!important;
    line-height:1.31!important;
    overflow-wrap:normal!important;
    word-break:normal!important;
  }

  .rp-mobile .rp-tags{
    flex-wrap:nowrap!important;
    gap:5px!important;
    margin-bottom:13px!important;
    overflow:visible!important;
  }

  .rp-mobile .rp-tags span{
    padding:7px 7px!important;
    font-size:clamp(11px,2vw,13px)!important;
  }

  .rp-mobile .rp-btn{
    width:max-content!important;
    max-width:100%!important;
    padding:9px 9px!important;
    font-size:clamp(11px,2.25vw,14px)!important;
  }

  .rp-slider .rp-dots{
    display:flex!important;
    margin-top:18px!important;
  }
}

@media(max-width:520px){
  .rp-mobile{padding-left:0!important;padding-right:0!important}
  .rp-mobile .rp-heading{padding-left:3px!important;padding-right:3px!important}
  .rp-mobile .rp-cards{gap:6px!important}
  .rp-mobile .rp-card{
    min-height:365px!important;
    padding:16px 9px 11px!important;
  }
  .rp-mobile .rp-icon{
    width:44px!important;height:44px!important;min-width:44px!important;flex-basis:44px!important;
  }
  .rp-mobile .rp-icon img{
    width:31px!important;height:31px!important;min-width:31px!important;max-width:31px!important;max-height:31px!important;
  }
  .rp-mobile .rp-card-label{gap:6px!important}
  .rp-mobile .rp-card h3{margin-top:12px!important}
  .rp-mobile .rp-tags{gap:4px!important}
  .rp-mobile .rp-tags span{padding:6px 5px!important}
  .rp-mobile .rp-btn{padding:8px 6px!important}
  .rp-dots button{width:8px!important;height:8px!important;min-width:8px!important}
}

@media(max-width:390px){
  .rp-mobile .rp-cards{gap:5px!important}
  .rp-mobile .rp-card{min-height:350px!important;padding-left:7px!important;padding-right:7px!important}
  .rp-mobile .rp-card-label{font-size:11px!important}
  .rp-mobile .rp-card h3{font-size:16px!important}
  .rp-mobile .rp-card>p{font-size:12px!important}
  .rp-mobile .rp-tags span{font-size:11px!important;padding:6px 4px!important}
  .rp-mobile .rp-btn{font-size:11px!important;padding:8px 5px!important}
}
</style>



<style>
/* =========================================================
   21-09 MOBILE PDF MATCH - FINAL OVERRIDES
   These selectors are intentionally isolated so desktop stays unchanged.
   ========================================================= */
@media (max-width: 767px) {
  #home-entry-cards,
  #home-entry-cards * { box-sizing: border-box; }

  #home-entry-cards {
    display: grid !important;
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
    gap: 12px !important;
    align-items: stretch !important;
    width: 100% !important;
  }

  #home-entry-cards > .home-entry-link {
    min-width: 0 !important;
    width: 100% !important;
    height: 100% !important;
  }

  #home-entry-cards .home-entry-card {
    width: 100% !important;
    min-width: 0 !important;
    min-height: 258px !important;
    height: 100% !important;
    padding: 12px 12px 11px !important;
    border: 1px solid rgba(4,63,108,.05) !important;
    border-radius: 16px !important;
    background: rgba(255,255,255,.96) !important;
    box-shadow: 0 7px 17px rgba(15,23,42,.12) !important;
    overflow: hidden !important;
  }

  #home-entry-cards .home-entry-body {
    min-width: 0 !important;
    display: flex !important;
    flex-direction: column !important;
  }

  #home-entry-cards .home-entry-heading {
    min-width: 0 !important;
    min-height: 48px !important;
    margin-bottom: 9px !important;
    align-items: center !important;
  }

  #home-entry-cards .home-entry-icon {
    width: 47px !important;
    height: 47px !important;
    min-width: 47px !important;
    flex: 0 0 47px !important;
    background: #fff !important;
    box-shadow: 0 7px 12px rgba(15,23,42,.20) !important;
  }

  #home-entry-cards .home-entry-icon img {
    width: 31px !important;
    height: 31px !important;
    object-fit: contain !important;
  }

  #home-entry-cards .home-entry-title {
    min-width: 0 !important;
    margin-left: 10px !important;
    font-family: 'Poppins','Segoe UI',Arial,sans-serif !important;
    font-size: 15px !important;
    line-height: 1.13 !important;
    font-weight: 700 !important;
    letter-spacing: -.25px !important;
    overflow-wrap: normal !important;
    word-break: normal !important;
  }

  #home-entry-cards .home-entry-copy {
    margin: 0 !important;
    color: #3f3f46 !important;
    font-family: 'Poppins',Arial,sans-serif !important;
    font-size: 11px !important;
    line-height: 1.47 !important;
    font-weight: 400 !important;
    letter-spacing: 0 !important;
    overflow-wrap: normal !important;
    word-break: normal !important;
  }

  #home-entry-cards .home-entry-button {
    width: calc(100% - 12px) !important;
    min-height: 32px !important;
    margin: 13px auto 0 !important;
    padding: 8px 8px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    border-radius: 999px !important;
    background: #043E6B !important;
    color: #fff !important;
    font-family: 'Poppins',Arial,sans-serif !important;
    font-size: 11px !important;
    line-height: 1.15 !important;
    font-weight: 500 !important;
    letter-spacing: 0 !important;
    text-transform: none !important;
    white-space: normal !important;
    box-shadow: 0 6px 10px rgba(4,63,108,.18) !important;
  }

  /* Research & Policy: true horizontal two-card slider like the PDF. */
  .rp-mobile.rp-slider {
    overflow: visible !important;
  }

  .rp-mobile.rp-slider .rp-cards {
    display: flex !important;
    grid-template-columns: none !important;
    gap: 8px !important;
    width: 100% !important;
    overflow-x: auto !important;
    overflow-y: visible !important;
    scroll-snap-type: x mandatory !important;
    scroll-behavior: smooth !important;
    -webkit-overflow-scrolling: touch !important;
    scrollbar-width: none !important;
    padding: 2px 1px 12px !important;
  }

  .rp-mobile.rp-slider .rp-cards::-webkit-scrollbar { display: none !important; }

  .rp-mobile.rp-slider .rp-card {
    flex: 0 0 calc((100% - 8px) / 2) !important;
    width: calc((100% - 8px) / 2) !important;
    min-width: calc((100% - 8px) / 2) !important;
    min-height: 365px !important;
    padding: 17px 10px 12px !important;
    scroll-snap-align: start !important;
  }

  .rp-mobile .rp-icon {
    background: transparent !important;
    border-radius: 0 !important;
    box-shadow: none !important;
  }

  .rp-mobile .rp-icon img {
    display: block !important;
    opacity: 1 !important;
    visibility: visible !important;
    object-fit: contain !important;
  }

  .rp-mobile .rp-map-icon img {
    width: 48px !important;
    height: 58px !important;
    max-width: 48px !important;
    max-height: 58px !important;
  }

  .rp-mobile .rp-card-label {
    color: #D6A839 !important;
  }

  .rp-mobile .rp-dots {
    display: flex !important;
    justify-content: center !important;
    gap: 6px !important;
    margin-top: 7px !important;
  }
}

@media (max-width: 390px) {
  #home-entry-cards { gap: 9px !important; }
  #home-entry-cards .home-entry-card { min-height: 250px !important; padding: 10px 9px 10px !important; }
  #home-entry-cards .home-entry-icon { width: 43px !important; height: 43px !important; min-width: 43px !important; flex-basis: 43px !important; }
  #home-entry-cards .home-entry-icon img { width: 28px !important; height: 28px !important; }
  #home-entry-cards .home-entry-title { margin-left: 8px !important; font-size: 14px !important; }
  #home-entry-cards .home-entry-copy { font-size: 11px !important; line-height: 1.43 !important; }
  #home-entry-cards .home-entry-button { width: calc(100% - 8px) !important; font-size: 11px !important; padding: 7px 5px !important; }

  .rp-mobile.rp-slider .rp-card {
    min-height: 350px !important;
    padding-left: 8px !important;
    padding-right: 8px !important;
  }
}
</style>


<style>
/* =========================================================
   RESEARCH & POLICY — FINAL TWO-CARD PAGED SLIDER
   Slide 1: Federal + Water
   Slide 2: Corruption + Minerals
   ========================================================= */
.rp-paged-slider,
.rp-paged-slider * { box-sizing: border-box !important; }

.rp-paged-slider { overflow: hidden !important; }

.rp-paged-slider .rp-pages {
  width: 100% !important;
  display: flex !important;
  gap: 0 !important;
  overflow-x: auto !important;
  overflow-y: hidden !important;
  scroll-snap-type: x mandatory !important;
  scroll-behavior: smooth !important;
  -webkit-overflow-scrolling: touch !important;
  scrollbar-width: none !important;
  overscroll-behavior-x: contain !important;
  touch-action: pan-x pan-y !important;
  padding: 2px 0 12px !important;
}
.rp-paged-slider .rp-pages::-webkit-scrollbar { display: none !important; }

.rp-paged-slider .rp-page {
  flex: 0 0 100% !important;
  width: 100% !important;
  min-width: 100% !important;
  display: grid !important;
  grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
  gap: 10px !important;
  align-items: stretch !important;
  scroll-snap-align: start !important;
  scroll-snap-stop: always !important;
  padding: 0 2px !important;
}

.rp-paged-slider .rp-card {
  width: 100% !important;
  min-width: 0 !important;
  height: 100% !important;
  min-height: 370px !important;
  display: flex !important;
  flex-direction: column !important;
  overflow: hidden !important;
}

.rp-paged-slider .rp-card-label { min-width: 0 !important; }
.rp-paged-slider .rp-card h3,
.rp-paged-slider .rp-card > p { overflow-wrap: normal !important; word-break: normal !important; }

.rp-paged-slider .rp-icon {
  flex: 0 0 auto !important;
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
}
.rp-paged-slider .rp-icon img {
  display: block !important;
  opacity: 1 !important;
  visibility: visible !important;
  object-fit: contain !important;
}
.rp-paged-slider .rp-map-icon img {
  width: 48px !important;
  height: 58px !important;
  max-width: 48px !important;
  max-height: 58px !important;
}

/* Long reference-card pills must stay inside half-width cards. */
.rp-paged-slider .rp-reference-card .rp-tags {
  flex-wrap: wrap !important;
  align-items: flex-start !important;
}

.rp-paged-slider .rp-dots {
  display: flex !important;
  justify-content: center !important;
  align-items: center !important;
  gap: 7px !important;
  margin-top: 8px !important;
}
.rp-paged-slider .rp-dots button {
  width: 8px !important;
  height: 8px !important;
  min-width: 8px !important;
  padding: 0 !important;
  border: 0 !important;
  border-radius: 50% !important;
  background: #d2d2d2 !important;
  cursor: pointer !important;
}
.rp-paged-slider .rp-dots button.active { background: #075683 !important; }

/* Desktop/tablet: still only two cards are visible at once. */
@media (min-width: 768px) {
  .rp-paged-slider .rp-page { gap: 12px !important; }
  .rp-paged-slider .rp-card { min-height: 390px !important; }
}

/* Mobile — match the supplied two-card reference. */
@media (max-width: 767px) {
  .rp-mobile.rp-paged-slider {
    width: 100% !important;
    max-width: 660px !important;
    margin: 0 auto 25px !important;
    padding: 20px 0 5px !important;
    overflow: hidden !important;
  }

  .rp-mobile.rp-paged-slider .rp-heading {
    margin-bottom: 26px !important;
    padding: 0 5px !important;
  }

  .rp-mobile.rp-paged-slider .rp-pages {
    padding: 2px 0 10px !important;
  }

  .rp-mobile.rp-paged-slider .rp-page {
    gap: 7px !important;
    padding: 0 !important;
  }

  .rp-mobile.rp-paged-slider .rp-card {
    min-height: 352px !important;
    padding: 15px 9px 11px !important;
    border-radius: 13px !important;
    border: 1px solid #dedede !important;
    box-shadow: 0 7px 10px rgba(0,0,0,.13) !important;
    background: #fff !important;
  }

  .rp-mobile.rp-paged-slider .rp-card-label {
    min-height: 48px !important;
    gap: 6px !important;
    font-size: 11px !important;
    line-height: 1.2 !important;
  }

  .rp-mobile.rp-paged-slider .rp-icon {
    width: 44px !important;
    height: 44px !important;
    min-width: 44px !important;
    flex-basis: 44px !important;
    background: #fbf5e9 !important;
    border-radius: 50% !important;
  }

  .rp-mobile.rp-paged-slider .rp-icon img {
    width: 31px !important;
    height: 31px !important;
    min-width: 31px !important;
    max-width: 31px !important;
    max-height: 31px !important;
  }

  .rp-mobile.rp-paged-slider .rp-map-icon img {
    width: 38px !important;
    height: 42px !important;
    min-width: 38px !important;
    max-width: 38px !important;
    max-height: 42px !important;
  }

  .rp-mobile.rp-paged-slider .rp-card h3 {
    margin: 10px 0 6px !important;
    font-size: clamp(16px, 4.4vw, 21px) !important;
    line-height: 1.02 !important;
  }

  .rp-mobile.rp-paged-slider .rp-card > p {
    margin: 0 0 12px !important;
    font-size: clamp(11px, 2.85vw, 13px) !important;
    line-height: 1.34 !important;
  }

  .rp-mobile.rp-paged-slider .rp-tags {
    width: 100% !important;
    display: flex !important;
    flex-wrap: wrap !important;
    gap: 4px !important;
    margin: auto 0 10px !important;
    overflow: visible !important;
  }

  .rp-mobile.rp-paged-slider .rp-tags span {
    max-width: 100% !important;
    padding: 6px 6px !important;
    font-size: clamp(11px, 2vw, 11px) !important;
    line-height: 1 !important;
    white-space: nowrap !important;
  }

  .rp-mobile.rp-paged-slider .rp-btn {
    width: max-content !important;
    max-width: 100% !important;
    padding: 8px 7px !important;
    font-size: clamp(11px, 2.2vw, 11px) !important;
    line-height: 1 !important;
    white-space: nowrap !important;
  }

  /* The two reference cards contain longer copy, so size them safely. */
  .rp-mobile.rp-paged-slider .rp-reference-card > p {
    font-size: clamp(11px, 2.6vw, 12px) !important;
    line-height: 1.3 !important;
  }
  .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags span {
    font-size: clamp(11px, 1.85vw, 11px) !important;
    padding: 5px 5px !important;
  }
  .rp-mobile.rp-paged-slider .rp-reference-card .rp-btn {
    font-size: clamp(11px, 2vw, 11px) !important;
    padding-left: 6px !important;
    padding-right: 6px !important;
  }
}

@media (max-width: 390px) {
  .rp-mobile.rp-paged-slider .rp-page { gap: 5px !important; }
  .rp-mobile.rp-paged-slider .rp-card {
    min-height: 345px !important;
    padding-left: 7px !important;
    padding-right: 7px !important;
  }
  .rp-mobile.rp-paged-slider .rp-icon {
    width: 40px !important;
    height: 40px !important;
    min-width: 40px !important;
    flex-basis: 40px !important;
  }
  .rp-mobile.rp-paged-slider .rp-icon img {
    width: 28px !important;
    height: 28px !important;
    min-width: 28px !important;
    max-width: 28px !important;
    max-height: 28px !important;
  }
  .rp-mobile.rp-paged-slider .rp-map-icon img {
    width: 34px !important;
    height: 38px !important;
    min-width: 34px !important;
    max-width: 34px !important;
    max-height: 38px !important;
  }
}
</style>


<style>
/* =========================================================
   RESEARCH & POLICY — FINAL ICON + DESKTOP NAV FIX
   Exact requested icons:
   - Images/pakistan-map.png
   - Images/water-drop .png
   Desktop gets previous/next controls; mobile keeps swipe + dots.
   ========================================================= */
.rp-paged-slider .rp-controls{
  width:100%!important;
  display:flex!important;
  align-items:center!important;
  justify-content:center!important;
  gap:10px!important;
  margin-top:8px!important;
}

.rp-paged-slider .rp-controls .rp-dots{
  display:flex!important;
  align-items:center!important;
  justify-content:center!important;
  gap:7px!important;
  margin:0!important;
}

.rp-paged-slider .rp-nav{
  display:none!important;
  width:34px!important;
  height:34px!important;
  min-width:34px!important;
  padding:0!important;
  border:1px solid rgba(4,63,108,.18)!important;
  border-radius:50%!important;
  background:#ffffff!important;
  color:#043E6B!important;
  box-shadow:0 4px 10px rgba(0,0,0,.10)!important;
  font-family:Arial,sans-serif!important;
  font-size:25px!important;
  line-height:30px!important;
  font-weight:500!important;
  cursor:pointer!important;
  transition:transform .18s ease, box-shadow .18s ease, opacity .18s ease!important;
}

.rp-paged-slider .rp-nav:hover{
  transform:translateY(-1px)!important;
  box-shadow:0 6px 13px rgba(0,0,0,.14)!important;
}

.rp-paged-slider .rp-nav:disabled{
  opacity:.32!important;
  cursor:default!important;
  transform:none!important;
}

/* Make the two requested icons fill their visual boxes cleanly. */
.rp-paged-slider .rp-map-icon img{
  width:48px!important;
  height:48px!important;
  min-width:48px!important;
  max-width:48px!important;
  max-height:48px!important;
  object-fit:contain!important;
}

.rp-paged-slider .rp-water-icon img{
  width:42px!important;
  height:42px!important;
  min-width:42px!important;
  max-width:42px!important;
  max-height:42px!important;
  object-fit:contain!important;
}

@media (min-width:1024px){
  .rp-paged-slider .rp-nav{display:inline-flex!important;align-items:center!important;justify-content:center!important;}
  .rp-paged-slider .rp-controls{margin-top:10px!important;}
}

@media (max-width:1023px){
  .rp-paged-slider .rp-nav{display:none!important;}
  .rp-paged-slider .rp-controls{gap:0!important;margin-top:7px!important;}
}
</style>


<style>
/* =========================================================
   FINAL RESEARCH & POLICY ICON FIX
   - removes beige/circular icon backgrounds
   - keeps all four slider icons larger and clean
   ========================================================= */
.rp-paged-slider .rp-icon,
.rp-section .rp-icon{
  background:transparent!important;
  background-color:transparent!important;
  border-radius:0!important;
  box-shadow:none!important;
  padding:0!important;
  overflow:visible!important;
}

.rp-paged-slider .rp-icon{
  width:60px!important;
  height:60px!important;
  min-width:60px!important;
  flex:0 0 60px!important;
}

.rp-paged-slider .rp-icon img{
  width:46px!important;
  height:46px!important;
  min-width:46px!important;
  max-width:46px!important;
  max-height:46px!important;
  object-fit:contain!important;
  display:block!important;
}

.rp-paged-slider .rp-map-icon img{
  width:54px!important;
  height:54px!important;
  min-width:54px!important;
  max-width:54px!important;
  max-height:54px!important;
}

.rp-paged-slider .rp-water-icon img{
  width:48px!important;
  height:48px!important;
  min-width:48px!important;
  max-width:48px!important;
  max-height:48px!important;
}

@media(max-width:767px){
  .rp-mobile.rp-paged-slider .rp-icon{
    width:52px!important;
    height:52px!important;
    min-width:52px!important;
    flex-basis:52px!important;
    background:transparent!important;
    background-color:transparent!important;
    border-radius:0!important;
    box-shadow:none!important;
    padding:0!important;
  }

  .rp-mobile.rp-paged-slider .rp-icon img{
    width:40px!important;
    height:40px!important;
    min-width:40px!important;
    max-width:40px!important;
    max-height:40px!important;
  }

  .rp-mobile.rp-paged-slider .rp-map-icon img{
    width:48px!important;
    height:48px!important;
    min-width:48px!important;
    max-width:48px!important;
    max-height:48px!important;
  }

  .rp-mobile.rp-paged-slider .rp-water-icon img{
    width:43px!important;
    height:43px!important;
    min-width:43px!important;
    max-width:43px!important;
    max-height:43px!important;
  }
}

@media(max-width:390px){
  .rp-mobile.rp-paged-slider .rp-icon{
    width:48px!important;
    height:48px!important;
    min-width:48px!important;
    flex-basis:48px!important;
  }

  .rp-mobile.rp-paged-slider .rp-icon img{
    width:37px!important;
    height:37px!important;
    min-width:37px!important;
    max-width:37px!important;
    max-height:37px!important;
  }

  .rp-mobile.rp-paged-slider .rp-map-icon img{
    width:44px!important;
    height:44px!important;
    min-width:44px!important;
    max-width:44px!important;
    max-height:44px!important;
  }

  .rp-mobile.rp-paged-slider .rp-water-icon img{
    width:40px!important;
    height:40px!important;
    min-width:40px!important;
    max-width:40px!important;
    max-height:40px!important;
  }
}
</style>



<style>
/* =========================================================
   FINAL 21-09 POLISH
   1) Gives the four hero cards breathing room on mobile/iOS.
   2) Keeps Corruption/Mineral pills in ONE row.
   3) Adds the requested gold icons inside those pills.
   ========================================================= */

/* Reference-slide pill icons */
.rp-paged-slider .rp-feature-tags{
  display:grid!important;
  grid-template-columns:repeat(2,minmax(0,1fr))!important;
  align-items:center!important;
  gap:6px!important;
  width:100%!important;
  flex-wrap:nowrap!important;
  overflow:visible!important;
}

.rp-paged-slider .rp-feature-tags > span{
  min-width:0!important;
  width:100%!important;
  display:flex!important;
  align-items:center!important;
  justify-content:center!important;
  gap:6px!important;
  white-space:nowrap!important;
  overflow:visible!important;
}

.rp-paged-slider .rp-pill-fa,
.rp-paged-slider .rp-pill-plus,
.rp-paged-slider .rp-pill-hex{
  flex:0 0 auto!important;
  display:inline-flex!important;
  align-items:center!important;
  justify-content:center!important;
  color:#D6A839!important;
}

.rp-paged-slider .rp-pill-fa{
  font-size:14px!important;
  line-height:1!important;
}

/* Gold circle with white plus — Mineral Mapping */
.rp-paged-slider .rp-pill-plus{
  width:16px!important;
  height:16px!important;
  border-radius:50%!important;
  background:#D6A839!important;
  position:relative!important;
}
.rp-paged-slider .rp-pill-plus::before{
  content:'+'!important;
  color:#fff!important;
  font-family:Arial,sans-serif!important;
  font-size:13px!important;
  line-height:16px!important;
  font-weight:700!important;
}

/* Gold outlined hexagon — Critical Minerals */
.rp-paged-slider .rp-pill-hex{
  width:17px!important;
  height:17px!important;
  position:relative!important;
  background:#D6A839!important;
  clip-path:polygon(25% 6.7%,75% 6.7%,100% 50%,75% 93.3%,25% 93.3%,0 50%)!important;
}
.rp-paged-slider .rp-pill-hex::after{
  content:''!important;
  position:absolute!important;
  inset:2px!important;
  background:#dcecff!important;
  clip-path:polygon(25% 6.7%,75% 6.7%,100% 50%,75% 93.3%,25% 93.3%,0 50%)!important;
}

@media(max-width:767px){
/* Make the two long feature pills stay on the same row in half-width cards. */
  .rp-mobile.rp-paged-slider .rp-reference-card .rp-feature-tags{
    display:grid!important;
    grid-template-columns:minmax(0,1fr) minmax(0,1fr)!important;
    gap:3px!important;
    margin:auto 0 10px!important;
    flex-wrap:nowrap!important;
    overflow:visible!important;
  }

  .rp-mobile.rp-paged-slider .rp-reference-card .rp-feature-tags > span{
    min-width:0!important;
    width:100%!important;
    padding:5px 3px!important;
    gap:3px!important;
    font-size:clamp(11px,1.55vw,11px)!important;
    line-height:1!important;
    letter-spacing:-.12px!important;
    white-space:nowrap!important;
    overflow:visible!important;
  }

  .rp-mobile.rp-paged-slider .rp-feature-tags .rp-pill-fa{
    font-size:11px!important;
  }

  .rp-mobile.rp-paged-slider .rp-feature-tags .rp-pill-plus{
    width:12px!important;
    height:12px!important;
  }
  .rp-mobile.rp-paged-slider .rp-feature-tags .rp-pill-plus::before{
    font-size:11px!important;
    line-height:12px!important;
  }

  .rp-mobile.rp-paged-slider .rp-feature-tags .rp-pill-hex{
    width:12px!important;
    height:12px!important;
  }
  .rp-mobile.rp-paged-slider .rp-feature-tags .rp-pill-hex::after{
    inset:1.5px!important;
  }
}

@media(max-width:390px){
.rp-mobile.rp-paged-slider .rp-reference-card .rp-feature-tags{
    gap:2px!important;
  }
  .rp-mobile.rp-paged-slider .rp-reference-card .rp-feature-tags > span{
    padding:5px 2px!important;
    gap:2px!important;
    font-size:11px!important;
    letter-spacing:-.18px!important;
  }
  .rp-mobile.rp-paged-slider .rp-feature-tags .rp-pill-fa{
    font-size:11px!important;
  }
  .rp-mobile.rp-paged-slider .rp-feature-tags .rp-pill-plus,
  .rp-mobile.rp-paged-slider .rp-feature-tags .rp-pill-hex{
    width:11px!important;
    height:11px!important;
  }
  .rp-mobile.rp-paged-slider .rp-feature-tags .rp-pill-plus::before{
    font-size:11px!important;
    line-height:11px!important;
  }
}
</style>


  <style>
    /* =========================================================
       PUBLIC OPINION / SURVEY — FINAL REQUESTED OVERRIDES
       ========================================================= */

    /* New survey illustration: larger and clean */
    #public-opinion-pdfmatch .survey-hand {
      display:flex !important;
      align-items:center !important;
      justify-content:center !important;
      overflow:visible !important;
    }

    #public-opinion-pdfmatch .survey-hand img {
      display:block !important;
      width:100% !important;
      max-width:205px !important;
      height:auto !important;
      object-fit:contain !important;
    }

    /* Methodology button — exact reference gradient: dark navy at the start, lighter navy at the end */
    #public-opinion-pdfmatch .survey-button {
      background:linear-gradient(90deg, #042945 0%, #043E6B 100%) !important;
      color:#FFFFFF !important;
      font-weight:700 !important;
      border:0 !important;
      box-shadow:0 4px 8px rgba(0,0,0,.20) !important;
      transition:filter .2s ease, transform .2s ease !important;
    }

    #public-opinion-pdfmatch .survey-button:hover {
      background:linear-gradient(90deg, #042945 0%, #043E6B 100%) !important;
      filter:brightness(1.06);
    }

    /* Exact reference green arrow */
    #public-opinion-pdfmatch .survey-button b {
      color:#0F7A57 !important;
    }

    /* View All Surveys: green + stronger weight */
    #public-opinion-pdfmatch .survey-all,
    #public-opinion-pdfmatch .survey-all a,
    #public-opinion-pdfmatch .survey-all a::before,
    #public-opinion-pdfmatch .survey-all a::after {
      color:#0F7A57 !important;
      font-weight:900 !important;
    }

    /* HOW THE PLATFORM WORKS card typography */
    #public-opinion-pdfmatch .step h3 {
      font-weight:800 !important;
    }

    #public-opinion-pdfmatch .step p {
      font-weight:600 !important;
    }

    /* Mobile: give the new survey image enough room and keep it visibly large */
    @media (max-width:700px) {
      #public-opinion-pdfmatch .survey-top {
        grid-template-columns:minmax(0,1fr) 138px !important;
        gap:8px !important;
        align-items:center !important;
      }

      #public-opinion-pdfmatch .survey-hand img {
        width:138px !important;
        max-width:138px !important;
      }

      #public-opinion-pdfmatch .survey-button {
        font-weight:800 !important;
      }

      #public-opinion-pdfmatch .step h3 {
        font-weight:800 !important;
      }

      #public-opinion-pdfmatch .step p {
        font-weight:600 !important;
      }

      #public-opinion-pdfmatch .survey-all a::before {
        font-weight:900 !important;
      }
    }

    @media (max-width:420px) {
      #public-opinion-pdfmatch .survey-top {
        grid-template-columns:minmax(0,1fr) 122px !important;
        gap:6px !important;
      }

      #public-opinion-pdfmatch .survey-hand img {
        width:122px !important;
        max-width:122px !important;
      }

      #public-opinion-pdfmatch .step h3 {
        font-weight:800 !important;
      }

      #public-opinion-pdfmatch .step p {
        font-weight:600 !important;
      }
    }
  </style>


  <style>
    /* =========================================================
       DIGITAL LIBRARY + HOUSING RESEARCH SERIES — FINAL FIX
       ========================================================= */

    /* DIGITAL LIBRARY label: larger and stronger */
    #digital-library-pdfmatch .lib-label {
      font-size: 22px !important;
      font-weight: 800 !important;
      line-height: 1.05 !important;
      letter-spacing: .1px !important;
    }

    /* Category buttons: keep icon + text comfortably inside each box */
    #digital-library-pdfmatch .libcats {
      width: 100% !important;
    }

    #digital-library-pdfmatch .libcat {
      min-width: 0 !important;
      box-sizing: border-box !important;
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      gap: 5px !important;
      padding-left: 7px !important;
      padding-right: 7px !important;
      text-align: center !important;
      font-weight: 600 !important;
      white-space: nowrap !important;
      overflow: hidden !important;
    }

    #digital-library-pdfmatch .libcat img,
    #digital-library-pdfmatch .libcat .pdf-lib-symbol {
      flex: 0 0 auto !important;
      object-fit: contain !important;
    }

    /* Housing Societies - Research Series label */
    #housing-societies-desktop p:first-of-type {
      font-size: 19px !important;
      font-weight: 700 !important;
    }

    .pdf-housing-mobile #trigger-section .hs-badge span {
      font-size: 15px !important;
      font-weight: 800 !important;
      line-height: 1.1 !important;
      letter-spacing: .08em !important;
    }

    @media (max-width:700px) {
      /* Mobile Digital Library heading closer to supplied reference */
      #digital-library-pdfmatch .lib-label {
        font-size: 17px !important;
        font-weight: 800 !important;
        line-height: 1.05 !important;
      }

      #digital-library-pdfmatch .lib-label:after {
        width: 48px !important;
        margin-top: 6px !important;
      }

      /* Four category boxes stay on one row but no text touches the corners */
      #digital-library-pdfmatch .libcats {
        grid-template-columns: repeat(4, minmax(0,1fr)) !important;
        gap: 4px !important;
      }

      #digital-library-pdfmatch .libcat {
        min-height: 42px !important;
        gap: 3px !important;
        padding: 5px 4px !important;
        font-size: clamp(11px, 1.9vw, 11px) !important;
        line-height: 1 !important;
        font-weight: 600 !important;
        white-space: nowrap !important;
        overflow: hidden !important;
      }

      #digital-library-pdfmatch .libcat img,
      #digital-library-pdfmatch .libcat .pdf-lib-symbol {
        width: clamp(16px, 4.1vw, 21px) !important;
        height: clamp(16px, 4.1vw, 21px) !important;
        min-width: clamp(16px, 4.1vw, 21px) !important;
        min-height: clamp(16px, 4.1vw, 21px) !important;
        flex-basis: clamp(16px, 4.1vw, 21px) !important;
        margin: 0 !important;
      }

      /* Research Series in mobile Housing/Model Town section */
      .pdf-housing-mobile #trigger-section .hs-badge span {
        font-size: 14px !important;
        font-weight: 800 !important;
        line-height: 1.05 !important;
        letter-spacing: .07em !important;
      }
    }

    @media (max-width:420px) {
      #digital-library-pdfmatch .lib-label {
        font-size: 16px !important;
        font-weight: 800 !important;
      }

      #digital-library-pdfmatch .libcat {
        padding-left: 3px !important;
        padding-right: 3px !important;
        gap: 2px !important;
        font-size: clamp(11px, 2vw, 11px) !important;
      }

      #digital-library-pdfmatch .libcat img,
      #digital-library-pdfmatch .libcat .pdf-lib-symbol {
        width: 16px !important;
        height: 16px !important;
        min-width: 16px !important;
        min-height: 16px !important;
        flex-basis: 16px !important;
      }

      .pdf-housing-mobile #trigger-section .hs-badge span {
        font-size: 13px !important;
        font-weight: 800 !important;
      }
    }
  </style>


  <style>
    /* =========================================================
       FINAL BOSS CHANGES
       A) Stable top four cards on phones/tablets
       B) 5-card Research & Policy carousel
       ========================================================= */

    /* ---------- TOP FOUR CARDS: RESPONSIVE ON ALL PHONE WIDTHS ---------- */
    @media (max-width:1023px) {
      /* Remove the old 150px spacer + huge negative-margin combination.
         The cards now overlap the actual hero bottom by one small,
         predictable amount, so different phone heights do not move them. */
      .home-entry-spacer {
        height: 0 !important;
      }

      .home-entry-wrapper {
        margin-top: -58px !important;
        width: 100% !important;
        max-width: 760px !important;
        position: relative !important;
        display: block !important;
      }

      #home-entry-cards,
      #home-entry-cards * {
        box-sizing: border-box !important;
      }

      #home-entry-cards {
        width: 100% !important;
        display: grid !important;
        grid-template-columns: repeat(2, minmax(0,1fr)) !important;
        grid-auto-rows: 1fr !important;
        gap: clamp(8px, 2.4vw, 14px) !important;
        align-items: stretch !important;
      }

      #home-entry-cards > a {
        display: block !important;
        width: 100% !important;
        min-width: 0 !important;
        height: 100% !important;
      }

      #home-entry-cards > a > div {
        width: 100% !important;
        min-width: 0 !important;
        min-height: 0 !important;
        height: 100% !important;
        padding: clamp(9px, 2.7vw, 13px) !important;
        display: flex !important;
        flex-direction: column !important;
        overflow: hidden !important;
        border-radius: 16px !important;
      }

      #home-entry-cards > a > div > .flex-grow {
        min-width: 0 !important;
        display: flex !important;
        flex-direction: column !important;
      }

      #home-entry-cards > a > div > .flex-grow > .flex.items-center {
        min-width: 0 !important;
        min-height: clamp(45px, 12vw, 58px) !important;
        margin-bottom: clamp(7px, 1.8vw, 10px) !important;
        align-items: center !important;
      }

      #home-entry-cards > a > div > .flex-grow > .flex.items-center > div:first-child {
        width: clamp(43px, 11vw, 58px) !important;
        height: clamp(43px, 11vw, 58px) !important;
        min-width: clamp(43px, 11vw, 58px) !important;
        flex: 0 0 clamp(43px, 11vw, 58px) !important;
      }

      #home-entry-cards > a > div > .flex-grow > .flex.items-center img {
        width: clamp(28px, 7.5vw, 38px) !important;
        height: clamp(28px, 7.5vw, 38px) !important;
        object-fit: contain !important;
      }

      #home-entry-cards h3 {
        min-width: 0 !important;
        margin-left: clamp(7px, 2.2vw, 12px) !important;
        font-size: clamp(14px, 3.8vw, 20px) !important;
        line-height: 1.08 !important;
        font-weight: 700 !important;
        overflow-wrap: normal !important;
        word-break: normal !important;
      }

      #home-entry-cards .flex-grow > p {
        margin: 0 !important;
        font-size: clamp(11px, 2.7vw, 14px) !important;
        line-height: 1.42 !important;
        overflow-wrap: normal !important;
        word-break: normal !important;
      }

      /* CTA is always pushed to the bottom of its card. */
      #home-entry-cards > a > div > div:last-child {
        width: 100% !important;
        min-height: 34px !important;
        margin-top: auto !important;
        padding: 8px 5px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        font-size: clamp(11px, 2.2vw, 11px) !important;
        line-height: 1.05 !important;
        white-space: nowrap !important;
        letter-spacing: .08em !important;
      }
    }

    @media (max-width:420px) {
      .home-entry-wrapper {
        margin-top: -54px !important;
      }

      #home-entry-cards {
        gap: 8px !important;
      }

      #home-entry-cards > a > div {
        padding: 9px 8px 10px !important;
      }

      #home-entry-cards h3 {
        margin-left: 7px !important;
        font-size: clamp(13px, 3.7vw, 16px) !important;
      }

      #home-entry-cards .flex-grow > p {
        font-size: clamp(11px, 2.65vw, 11.5px) !important;
      }

      #home-entry-cards > a > div > div:last-child {
        font-size: clamp(11px, 2.1vw, 11px) !important;
        letter-spacing: .05em !important;
      }
    }

    @media (max-width:350px) {
      .home-entry-wrapper {
        margin-top: -50px !important;
      }

      #home-entry-cards {
        gap: 6px !important;
      }

      #home-entry-cards > a > div {
        padding-left: 7px !important;
        padding-right: 7px !important;
      }

      #home-entry-cards h3 {
        font-size: 12.5px !important;
      }

      #home-entry-cards .flex-grow > p {
        font-size: 11px !important;
        line-height: 1.38 !important;
      }

      #home-entry-cards > a > div > div:last-child {
        font-size: 11px !important;
        padding-left: 3px !important;
        padding-right: 3px !important;
      }
    }


    /* ---------- RESEARCH & POLICY: FIVE CARD CAROUSEL ---------- */
    .rp-paged-slider {
      overflow: hidden !important;
    }

    .rp-paged-slider .rp-pages {
      width: 100% !important;
      display: flex !important;
      align-items: stretch !important;
      gap: 10px !important;
      overflow-x: auto !important;
      overflow-y: hidden !important;
      scroll-snap-type: x mandatory !important;
      scroll-behavior: smooth !important;
      -webkit-overflow-scrolling: touch !important;
      scrollbar-width: none !important;
      overscroll-behavior-x: contain !important;
      padding: 2px 0 12px !important;
    }

    .rp-paged-slider .rp-pages::-webkit-scrollbar {
      display: none !important;
    }

    /* Extra half-card at the end lets dot 5 bring Minerals fully to the left. */
    .rp-paged-slider .rp-pages::after {
      content: "" !important;
      display: block !important;
      flex: 0 0 calc((100% - 10px) / 2) !important;
      min-width: calc((100% - 10px) / 2) !important;
    }

    .rp-paged-slider .rp-page {
      flex: 0 0 calc((100% - 10px) / 2) !important;
      width: calc((100% - 10px) / 2) !important;
      min-width: calc((100% - 10px) / 2) !important;
      display: flex !important;
      grid-template-columns: none !important;
      padding: 0 !important;
      scroll-snap-align: start !important;
      scroll-snap-stop: always !important;
    }

    .rp-paged-slider .rp-page .rp-card {
      width: 100% !important;
      min-width: 0 !important;
      height: 100% !important;
      min-height: 390px !important;
      display: flex !important;
      flex-direction: column !important;
    }

    /* Energy tower: transparent background, gold line/shape like reference. */
    .rp-paged-slider .rp-energy-icon {
      background: transparent !important;
      border-radius: 0 !important;
      box-shadow: none !important;
    }

    .rp-paged-slider .rp-energy-icon i {
      color: #D6A839 !important;
      font-size: 45px !important;
      line-height: 1 !important;
    }

    /* Five dots */
    .rp-paged-slider .rp-dots {
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      gap: 6px !important;
    }

    .rp-paged-slider .rp-dots button {
      width: 8px !important;
      height: 8px !important;
      min-width: 8px !important;
      border-radius: 50% !important;
    }

    @media (max-width:767px) {
      .rp-mobile.rp-paged-slider .rp-pages {
        gap: 7px !important;
      }

      .rp-mobile.rp-paged-slider .rp-pages::after {
        flex-basis: calc((100% - 7px) / 2) !important;
        min-width: calc((100% - 7px) / 2) !important;
      }

      .rp-mobile.rp-paged-slider .rp-page {
        flex-basis: calc((100% - 7px) / 2) !important;
        width: calc((100% - 7px) / 2) !important;
        min-width: calc((100% - 7px) / 2) !important;
      }

      .rp-mobile.rp-paged-slider .rp-page .rp-card {
        min-height: 352px !important;
        padding: 15px 9px 11px !important;
      }

      .rp-mobile.rp-paged-slider .rp-energy-icon i {
        font-size: 36px !important;
      }

      .rp-mobile.rp-paged-slider .rp-card h3 {
        overflow-wrap: normal !important;
        word-break: normal !important;
      }

      .rp-mobile.rp-paged-slider .rp-tags {
        margin-top: auto !important;
      }
    }

    @media (max-width:390px) {
      .rp-mobile.rp-paged-slider .rp-pages {
        gap: 5px !important;
      }

      .rp-mobile.rp-paged-slider .rp-pages::after {
        flex-basis: calc((100% - 5px) / 2) !important;
        min-width: calc((100% - 5px) / 2) !important;
      }

      .rp-mobile.rp-paged-slider .rp-page {
        flex-basis: calc((100% - 5px) / 2) !important;
        width: calc((100% - 5px) / 2) !important;
        min-width: calc((100% - 5px) / 2) !important;
      }

      .rp-mobile.rp-paged-slider .rp-page .rp-card {
        min-height: 345px !important;
        padding-left: 7px !important;
        padding-right: 7px !important;
      }

      .rp-mobile.rp-paged-slider .rp-energy-icon i {
        font-size: 32px !important;
      }
    }
  </style>


  <style>
    /* =========================================================
       FINAL SMALL FIXES — ENERGY ICON + PLATFORM STEP CARDS
       ========================================================= */

    /* Use the supplied tower image, not a Font Awesome tower. */
    .rp-paged-slider .rp-energy-icon,
    .rp-section .rp-energy-icon {
      background: transparent !important;
      background-color: transparent !important;
      border-radius: 0 !important;
      box-shadow: none !important;
      padding: 0 !important;
      overflow: visible !important;
    }

    .rp-paged-slider .rp-energy-icon img,
    .rp-section .rp-energy-icon img {
      display: block !important;
      width: 52px !important;
      height: 52px !important;
      min-width: 52px !important;
      max-width: 52px !important;
      max-height: 52px !important;
      object-fit: contain !important;
      opacity: 1 !important;
      visibility: visible !important;
    }

    /* HOW THE PLATFORM WORKS: remove the dark divider/border look. */
    #public-opinion-pdfmatch .steps {
      gap: 5px !important;
    }

    #public-opinion-pdfmatch .step {
      border: 0 !important;
      border-left: 0 !important;
      border-right: 0 !important;
      border-top: 0 !important;
      border-bottom: 0 !important;
      border-radius: 7px !important;
      background: #ffffff !important;
      box-shadow: 0 1px 5px rgba(15, 23, 42, .10) !important;
    }

    #public-opinion-pdfmatch .step:first-child,
    #public-opinion-pdfmatch .step:last-child {
      border-radius: 7px !important;
    }

    @media (max-width: 700px) {
      /* Keep all four cards in one row, but make them much shorter. */
      #public-opinion-pdfmatch .steps {
        grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
        gap: 4px !important;
        align-items: stretch !important;
      }

      #public-opinion-pdfmatch .step {
        min-width: 0 !important;
        min-height: 145px !important;
        height: auto !important;
        padding: 10px 5px 8px !important;
        overflow: hidden !important;
      }

      #public-opinion-pdfmatch .step .num {
        width: 27px !important;
        height: 27px !important;
        min-width: 27px !important;
        min-height: 27px !important;
        font-size: 12px !important;
        line-height: 27px !important;
      }

      #public-opinion-pdfmatch .step img {
        width: 27px !important;
        height: 27px !important;
        min-width: 27px !important;
        min-height: 27px !important;
        margin-left: 4px !important;
        object-fit: contain !important;
      }

      #public-opinion-pdfmatch .step h3 {
        margin-top: 9px !important;
        font-size: clamp(11px, 2.7vw, 12px) !important;
        line-height: 1.06 !important;
        font-weight: 800 !important;
        overflow-wrap: normal !important;
        word-break: normal !important;
      }

      #public-opinion-pdfmatch .step p {
        margin-top: 5px !important;
        font-size: clamp(11px, 2.25vw, 11px) !important;
        line-height: 1.16 !important;
        font-weight: 600 !important;
        overflow-wrap: normal !important;
        word-break: normal !important;
      }

      #public-opinion-pdfmatch .survey-all {
        margin-top: 20px !important;
      }

      .rp-mobile.rp-paged-slider .rp-energy-icon img {
        width: 42px !important;
        height: 42px !important;
        min-width: 42px !important;
        max-width: 42px !important;
        max-height: 42px !important;
      }
    }

    @media (max-width: 420px) {
      #public-opinion-pdfmatch .steps {
        gap: 3px !important;
      }

      #public-opinion-pdfmatch .step {
        min-height: 138px !important;
        padding: 9px 4px 7px !important;
      }

      #public-opinion-pdfmatch .step .num {
        width: 25px !important;
        height: 25px !important;
        min-width: 25px !important;
        min-height: 25px !important;
        font-size: 11px !important;
        line-height: 25px !important;
      }

      #public-opinion-pdfmatch .step img {
        width: 24px !important;
        height: 24px !important;
        min-width: 24px !important;
        min-height: 24px !important;
        margin-left: 3px !important;
      }

      #public-opinion-pdfmatch .step h3 {
        margin-top: 8px !important;
        font-size: clamp(11px, 2.65vw, 11px) !important;
      }

      #public-opinion-pdfmatch .step p {
        margin-top: 4px !important;
        font-size: clamp(11px, 2.15vw, 11px) !important;
        line-height: 1.14 !important;
      }

      #public-opinion-pdfmatch .survey-all {
        margin-top: 17px !important;
      }

      .rp-mobile.rp-paged-slider .rp-energy-icon img {
        width: 38px !important;
        height: 38px !important;
        min-width: 38px !important;
        max-width: 38px !important;
        max-height: 38px !important;
      }
    }
  </style>



  <!-- =========================================================
       ANDROID-ONLY TOP CARDS POSITION FIX
       Keeps iPhone/iOS layout unchanged.
       The Android cards are pulled upward to remove the excessive
       blank gap while still keeping them safely below the hero copy.
       ========================================================= -->
  <script>
    (function () {
      var ua = navigator.userAgent || '';
      var platform = (navigator.userAgentData && navigator.userAgentData.platform) || '';

      if (/Android/i.test(ua) || /Android/i.test(platform)) {
        document.documentElement.classList.add('android-device');
      }
    })();
  </script>

  <style>
    /* Android tablets / wider Android screens */
/* ANDROID HOME CARDS — FINAL POSITION */
@media (max-width: 767px) {

html.android-device .home-entry-position {
    margin-top: -30px !important;
}

  html.android-device .home-entry-wrapper.animate-fade-up-onload.mbs1 {
    margin-top: 0 !important;
  }

}
  </style>


  <style>
    /* =========================================================
       HOME ENTRY CARDS — MOBILE CTA THINNER BUTTONS
       Keeps desktop unchanged; makes the four blue pills
       slimmer on Android/iPhone mobile widths.
       ========================================================= */
    @media (max-width: 767px) {
      #home-entry-cards > a > div > div:last-child {
        min-height: 28px !important;
        height: 28px !important;
        padding: 4px 7px !important;
        margin-top: auto !important;
        border-radius: 999px !important;
        font-size: 11px !important;
        line-height: 1 !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        white-space: nowrap !important;
      }
    }

    @media (max-width: 420px) {
      #home-entry-cards > a > div > div:last-child {
        min-height: 27px !important;
        height: 27px !important;
        padding: 3px 6px !important;
        font-size: 11px !important;
        letter-spacing: .04em !important;
      }
    }

    /* MOBILE: keep a clean gap between card copy and the blue CTA */
    @media (max-width: 767px) {
      #home-entry-cards > a > div > .flex-grow {
        padding-bottom: 9px !important;
      }

      #home-entry-cards > a > div > div:last-child {
        flex-shrink: 0 !important;
      }
    }

    @media (max-width: 420px) {
      #home-entry-cards > a > div > .flex-grow {
        padding-bottom: 8px !important;
      }
    }
  </style>
  
  <script>
document.addEventListener('DOMContentLoaded', function () {
    if (/Android/i.test(navigator.userAgent)) {
        document.documentElement.classList.add('android-device');
    }
});
</script>


<!-- ===== RESEARCH & POLICY CARDS — LIGHTER BACKGROUND/SHADOW ===== -->
<style>
/* Keep cards clean white and make the grey drop-shadow much softer. */
.rp-card,
.rp-reference-card {
  background: #ffffff !important;
  border-color: #eeeeee !important;
  box-shadow: 0 4px 9px rgba(0, 0, 0, 0.055) !important;
}

@media (max-width: 1023px) {
  html body .rp-mobile.rp-paged-slider .rp-page .rp-card,
  html body .rp-mobile.rp-paged-slider .rp-card,
  html body .rp-mobile.rp-paged-slider .rp-reference-card {
    background: #ffffff !important;
    border-color: #eeeeee !important;
    box-shadow: 0 3px 7px rgba(0, 0, 0, 0.05) !important;
  }
}
</style>


<!-- ===== DIGITAL LIBRARY → RESEARCH SERIES GAP REMOVED ===== -->
<style>
@media (max-width: 1023px) {
  html body #digital-library-pdfmatch {
    padding-bottom: 0 !important;
    margin-bottom: 0 !important;
  }

  html body #digital-library-pdfmatch + .pdf-housing-spacer,
  html body .pdf-housing-spacer {
    height: 0 !important;
    min-height: 0 !important;
    margin: 0 !important;
    padding: 0 !important;
  }

  html body .pdf-housing-mobile {
    margin-top: 0 !important;
    padding-top: 0 !important;
  }

  html body .pdf-housing-mobile #trigger-section {
    margin-top: 0 !important;
  }
}
</style>


<!-- ===== RESEARCH & POLICY CARD HOVER EFFECT — ADDED ONLY ===== -->
<style>
@media (hover:hover) and (pointer:fine){

  .rp-card{
    transition:
      transform .3s ease,
      box-shadow .3s ease,
      border-color .3s ease !important;
  }

  .rp-card:hover{
    transform:translateY(-8px) scale(1.015);
    border-color:#D6A839 !important;
    box-shadow:
      0 16px 28px rgba(0,0,0,.18),
      0 0 0 1px rgba(214,168,57,.12) !important;
  }

  .rp-card .rp-icon{
    transition:
      transform .3s ease,
      background .3s ease !important;
  }

  .rp-card:hover .rp-icon{
    transform:scale(1.08) rotate(-3deg);
    background:#fff7df !important;
  }

  .rp-card h3{
    transition:color .3s ease !important;
  }

  .rp-card:hover h3{
    color:#075683 !important;
  }

  .rp-card .rp-btn{
    transition:
      transform .3s ease,
      box-shadow .3s ease,
      background .3s ease !important;
  }

  .rp-card:hover .rp-btn{
    transform:translateY(-2px);
    background:#075683 !important;
    box-shadow:0 7px 15px rgba(4,62,107,.28) !important;
  }

  .rp-card .rp-tags span{
    transition:
      transform .25s ease,
      background .25s ease !important;
  }

  .rp-card:hover .rp-tags span{
    transform:translateY(-1px);
    background:#cfe5ff !important;
  }
}
</style>

</head>



<body class="relative w-full overflow-x-hidden isolate bg-white">


  <!-- LEFT SIDE DECOR (MID LAYER) -->


  <!-- RIGHT SIDE DECOR (MID LAYER) -->


  <head>
    
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Y7YQ26TRWM"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Y7YQ26TRWM');
</script>


<!-- Your other meta tags -->
<meta name="robots" content="index, follow">


    
    
    <meta name="theme-color" content="#043F6C">

    <style>
    
    @media (min-width: 768px) and (max-width: 1023px) {
    #typewriter {
        max-width: 290px;
        font-size: 11px;
        line-height: 12px;
    }

    .typewriter-line {
        min-height: 12px;
    }
}
    
.typewriter-text {
    display: inline-flex;
    flex-direction: column;
    align-items: flex-start;
    max-width: 100%;
    overflow: visible;
    vertical-align: top;
}

.typewriter-line {
    display: block;
    white-space: nowrap;
    min-height: 13px;
}

.typewriter-line.is-typing::after {
    content: none !important;
    display: none !important;
}

@keyframes blink-caret {
    0%,
    100% {
        border-color: transparent;
    }

    50% {
        border-color: #ac7420;
    }
}

/* Mobile: three lines */
#typewriter {
    max-width: calc(100vw - 105px);
    /*min-height: 39px;*/
    font-size: 11px;
    font-weight: 600;
    line-height: 13px;
}

/* Tablet: two lines */
@media (min-width: 640px) and (max-width: 1023px) {
    #typewriter {
        max-width: none;
        min-height: 28px;
        font-size: 11px;
        line-height: 14px;
    }

    .typewriter-line {
        min-height: 14px;
    }
}

/* Computer: two lines */
@media (min-width: 1024px) {
    #typewriter {
        max-width: none;
        min-height: 30px;
        font-size: 0.8rem;
        line-height: 15px;
    }

    .typewriter-line {
        min-height: 15px;
    }
}

.only-header-mobile-h {
    position: fixed !important;
    top: 0 !important;
    left: 0 !important;
    right: 0 !important;
    width: 100% !important;

    height: 100px !important;
    min-height: 100px !important;

    z-index: 9999;

    background-image: url('Images/header.png') !important;
    background-position: right center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;
}

/* MOBILE - fixed header ke neeche page ko space */
@media (max-width: 639px) {
    body {
        padding-top: 108px !important;
    }
}

/* Desktop/tablet background */
@media (min-width: 640px) {
    .only-header-mobile-h {
        background-image: url('Images/header-bg-20.jpeg') !important;
        background-position: center !important;
    }
}


/* =========================
   TABLET
========================= */

@media (min-width: 640px) and (max-width: 767px) {

    .only-header-mobile-h {
        background-image: url('Images/header-bg-20.jpeg') !important;
        background-position: center !important;
        min-height: 115px !important;
        height: 115px !important;
    }

    body {
        padding-top: 123px !important;
    }
}


/* =========================
   TABLET / SMALL LAPTOP
========================= */

@media (min-width: 768px) and (max-width: 1023px) {

    .only-header-mobile-h {
        background-image: url('Images/header-bg-20.jpeg') !important;
        background-position: center !important;
        min-height: 100px !important;
        height: 100px !important;
    }

    body {
        padding-top: 108px !important;
    }
}


/* =========================
   DESKTOP
========================= */

@media (min-width: 1024px) {

    .only-header-mobile-h {
        background-image: url('Images/header-bg-20.jpeg') !important;
        background-position: center !important;
        min-height: 100px !important;
        height: 100px !important;
    }

    body {
        padding-top: 108px !important;
    }
}

        }
    </style>


<!-- Google AdSense -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3581983042363462"
     crossorigin="anonymous"></script>
</head>


<header
    dir="ltr"
    style="z-index: 9999;"
    class="only-header-mobile-h text-white px-1 py-2 pb-0 sm:py-0
           bg-no-repeat bg-cover transition-all duration-500
           min-h-[110px] sm:min-h-[115px]
           md:min-h-[100px]
           sticky top-0 z-50"
>

    <div class="container mx-auto px-2">
        <div class="flex min-h-[80px] items-center justify-between md:min-h-[100px]">
            <div class="flex shrink-0 items-center space-x-3">
                <a href="/" class="flex items-center mt-3 no-underline">
                    <img src="Images/blue-logo.jpg" alt="SyedShayan.com – Think Tank for Urban and Regional Development, Natural Resources and Consumer Policy" class="w-[65px] border border-gray-200 mt-1">
                    <div class="ml-2 leading-tight">
                        <div class="text-lg font-semibold text-white mt-1 ">SyedShayan.com</div>
<span
    id="typewriter"
    class="typewriter-text text-white relative top-[4px]"
    aria-live="polite"
>
    <span id="typeLine1" class="typewriter-line"></span>
    <span id="typeLine2" class="typewriter-line"></span>
    <span id="typeLine3" class="typewriter-line"></span>
</span>
                    </div>
                </a>
            </div>

<nav
    dir="ltr"
    class="hidden md:flex md:min-w-0 md:flex-1
           md:items-center md:justify-end
           md:gap-1 md:ml-3
           lg:gap-3 xl:gap-6"
>
    <a
        href="insights"
        class="nav-link flex shrink-0 items-center justify-center
               py-2 text-center text-[11px] font-semibold leading-3
               text-white hover:text-white
               lg:text-xs xl:text-sm"
    >
        Home
    </a>

    <a
        href="/about"
        class="nav-link flex shrink-0 items-center justify-center
               py-2 text-center text-[11px] font-semibold leading-3
               text-white hover:text-white
               lg:text-xs xl:text-sm"
    >
        About
    </a>

    <a
        href="/mission-statement"
        class="nav-link flex w-[54px] shrink-0 items-center justify-center
               py-2 text-center text-[11px] font-semibold leading-3
               text-white hover:text-white
               lg:w-auto lg:text-xs xl:text-sm"
    >
        Our Mission
    </a>

    <a
        href="/faqs"
        class="nav-link flex shrink-0 items-center justify-center
               py-2 text-center text-[11px] font-semibold leading-3
               text-white hover:text-white
               lg:text-xs xl:text-sm"
    >
        FAQs
    </a>

    <a
        href="/board-of-governors"
        class="nav-link flex w-[72px] shrink-0 items-center justify-center
               py-2 text-center text-[11px] font-semibold leading-3
               text-white hover:text-white
               lg:w-auto lg:text-xs xl:text-sm"
    >
        Board of Governors
    </a>

    <a
        href="/governer-form"
        class="nav-link flex w-[100px] shrink-0 items-center justify-center
               py-2 text-center text-[11px] font-semibold leading-3
               text-white hover:text-white
               lg:w-auto lg:text-xs xl:text-sm"
    >
        Join us as a Thought Leader
    </a>

    <a
        href="/contact"
        class="nav-link flex w-[50px] shrink-0 items-center justify-center
               py-2 text-center text-[11px] font-semibold leading-3
               text-white hover:text-white
               lg:w-auto lg:text-xs xl:text-sm"
    >
        Contact Us
    </a>
</nav>

            <div id="mobileMenuButton" role="button" tabindex="0" aria-label="Open navigation menu" class="md:hidden cursor-pointer mb-8 z-50 text-xl text-[#043F6C]">
                <i id="hamburgerIcon" class="fas fa-bars"></i>
                <i id="closeIcon" class="fas fa-times hidden"></i>
            </div>
        </div>
    </div>

    <div id="mobileMenu" class="md:hidden hidden fixed inset-0 bg-white z-[9998]">
        <div class="absolute top-4 right-4 z-[10000]">
            <button id="mobileMenuCloseBtn" type="button" aria-label="Close navigation menu" class="text-2xl font-bold text-[#D7A93A] focus:outline-none">&times;</button>
        </div>

        <div class="px-0 py-4 space-y-2 h-full overflow-y-auto bg-white">
           <div class="mx-2 border rounded-lg shadow-sm" style="background-color: #FBF6F0; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                <p class="px-3 pt-2 text-[15px] font-bold text-[#052945]">About This Website</p>
                <p class="px-3 pb-3 text-[11px] leading-relaxed text-[#373737]">
SyedShayan.com is a Think Tank and Research-Based Web Portal focused on urban and regional development, natural resources, consumer policy, governance, and public-interest research.<br><br>
                    The website is organised into <span class="text-[#043F6C]"><b> institutional and research sections </b></span> covering research, policy analysis, public-interest information, and knowledge content.
                </p>
            </div>

            <p class="flex items-center gap-2 px-3 py-2 bg-[#FBF6F0] text-[18px] font-semibold text-[#052945] rounded-sm">
                <i class="fa-solid fa-house"></i>
                <span>CENTRAL</span>
                <span class="text-[#D7A93A] font-light mb-1 ">|</span>
                <span class="text-[14px] font-medium opacity-90 -ml-1 ">12 SECTIONS</span>
            </p>

            <div class="mobile-links-wrapper">
                <a href="/insights" class="flex items-center px-3 border-b py-[11px] text-[13px] font-medium text-slate-900 hover:bg-slate-100">Home</a>
                <a href="/about" class="flex items-center px-3 border-b py-[11px] text-[13px] font-medium text-slate-900 hover:bg-slate-100">About</a>
                <a href="/mission-statement" class="flex items-center px-3 py-[11px] border-b text-[13px] font-medium text-slate-900 hover:bg-slate-100">Our Mission</a>
                <a href="/site-map" class="flex items-center px-3 py-[11px] text-[13px] border-b font-medium text-slate-900 hover:bg-slate-100">Site Map</a>
                <a href="/faqs" class="flex items-center px-3 py-[11px] text-[13px] border-b font-medium text-slate-900 hover:bg-slate-100">FAQs</a>
                <a href="/board-of-governors" class="flex items-center px-3 py-[11px] border-b text-[13px] font-medium text-slate-900 hover:bg-slate-100">Board of Governors</a>
                <a href="/governer-form" class="flex items-center px-3 py-[11px] border-b text-[13px] font-medium text-slate-900 hover:bg-slate-100">Join us as a Thought Leader</a>
                <a href="/contact" class="flex items-center px-3 py-[11px] border-b text-[13px] font-medium text-slate-900 hover:bg-slate-100">Contact Us</a>
                <a href="/membership-form" class="flex items-center px-3 py-[11px] border-b text-[13px] font-medium text-slate-900 hover:bg-slate-100">Profile</a>
                <a href="/terms-and-conditions" class="flex items-center px-3 py-[11px] border-b text-[13px] font-medium text-slate-900 hover:bg-slate-100">Terms & Conditions</a>
                
                <a href="/privacy-policy" class="flex items-center px-3 py-[11px] border-b text-[13px] font-medium text-slate-900 hover:bg-slate-100">Privacy Policy</a>
                <a href="/membership-form" class="flex items-center px-3 py-[11px] border-b text-[13px] font-medium text-slate-900 hover:bg-slate-100">Membership Access</a>
            </div>

            <p class="flex items-center gap-2 px-3 py-2 bg-[#FBF6F0] text-[18px] font-semibold text-[#052945] rounded-sm mt-4">
                <img src="Images/3a98515c43ee07dd391938d6953825f97806f224.png" class="w-[20px]" alt="Segments">
                <span>SEGMENTS</span>
                <span class="text-[#D7A93A] font-light mb-1">|</span>
                <span class="text-[14px] -ml-1 font-medium opacity-90">13 SECTIONS</span>
            </p>

            <div class="mobile-links-wrapper">
                <a href="/web-portal" class="flex items-center px-3 py-[11px] border-b text-[13px] font-medium text-slate-900 hover:bg-slate-100">Web Portal</a>
                
                <a href="/think-tank-welcome" class="flex items-center px-3 py-[11px] border-b text-[13px] font-medium text-slate-900 hover:bg-slate-100">Think Tank</a>
                
<a href="/web-portal" class="flex items-center px-3 py-[11px] border-b text-[13px] font-medium text-slate-900 hover:bg-slate-100">Research & Policy Portal</a>
                
                <a href="/under-construction-page" class="flex items-center px-3 py-[11px] border-b text-[13px] font-medium text-slate-900 hover:bg-slate-100">Policy Governance Hub</a>
                
                <!--<a href="/real_estate_today" class="flex items-center px-3 py-[11px] border-b text-[13px] font-medium text-slate-900 hover:bg-slate-100">ReNews</a>-->
                
                <a href="/ipps-in-pakistan" class="flex items-center px-3 py-[11px] border-b text-[13px] font-medium text-slate-900 hover:bg-slate-100">Inquiry Series</a>
                
                
                <a href="/pakistan-new-provinces-survey" class="flex items-center px-3 py-[11px] border-b text-[13px] font-medium text-slate-900 hover:bg-slate-100">Pakistan's New Provinces Proposal</a>
                
                <a href="/real-estate-blogs" class="flex items-center px-3 py-[11px] border-b text-[13px] font-medium text-slate-900 hover:bg-slate-100">A Blog By Syed Shayan</a>
                
                <!--<a href="/history" class="flex items-center px-3 py-[11px] border-b text-[13px] font-medium text-slate-900 hover:bg-slate-100">On This Date</a>-->
                
                <a href="/model-town-lahore-archive" class="flex items-center px-3 py-[11px] border-b text-[13px] font-medium text-slate-900 hover:bg-slate-100">Model Town Lahore</a>
               
                
                
                <!--<a href="/real-estate_index" class="flex items-center px-3 py-[11px] border-b text-[13px] font-medium text-slate-900 hover:bg-slate-100">Real Estate Index</a>-->
                
                
                <a href="/under-construction-page" class="flex items-center px-3 py-[11px] border-b text-[13px] font-medium text-slate-900 hover:bg-slate-100">Research Report</a>
                
                <a href="/tv-documentary" class="flex items-center px-3 py-[11px] border-b text-[13px] font-medium text-slate-900 hover:bg-slate-100">TV & Documentaries</a>
                
                <a href="/podcast-home" class="flex items-center px-3 py-[11px] border-b text-[13px] font-medium text-slate-900 hover:bg-slate-100">Podcast</a>
                
                <a href="/research-educational-series" class="flex items-center px-3 py-[11px] border-b text-[13px] font-medium text-slate-900 hover:bg-slate-100">Research Educational Series</a>
            </div>
            
            <p class="flex items-center gap-2 px-3 py-2 bg-[#FBF6F0] text-[18px] font-semibold text-[#052945] rounded-sm mt-4">
                <i class="fa-regular fa-handshake"></i> 
                <span>Part Of SyedShayan.com</span>
                <span class="text-[#D7A93A] font-light mb-1 ">|</span>
                <span class="text-[14px] font-medium opacity-90 -ml-1 ">3</span>
            </p>

<div class="mobile-links-wrapper pb-10">

    <a href="https://syedshayan.com/on-this-date/"
       target="_blank"
       rel="noopener noreferrer"
       class="flex items-center px-3 py-[11px] border-b text-[13px] font-medium text-slate-900 hover:bg-slate-100">
        On This Date
    </a>

    <a href="https://shehrbeen.com/"
       target="_blank"
       rel="noopener noreferrer"
       class="flex items-center px-3 py-[11px] border-b text-[13px] font-medium text-slate-900 hover:bg-slate-100">
        Shehrbeen
    </a>

    <a href="https://freemedianews.pk/"
       target="_blank"
       rel="noopener noreferrer"
       class="flex items-center px-3 py-[11px] border-b text-[13px] font-medium text-slate-900 hover:bg-slate-100">
        Free Media News
    </a>

</div>
        </div>
    </div>

<div class="flex items-end justify-end md:hidden">
    <a
        href="insights"
        class="mr-2  -mt-4 text-[#043F6C] underline only-header-mobile-home"
    >
        Home
    </a>
</div>
    
</header>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    // Logic updated: Links par click karne se menu band nahi hoga, naya page load hone par khud hi khatam ho jayega.
    (function () {
        const mobileMenuButton = document.getElementById('mobileMenuButton');
        const hamburgerIcon = document.getElementById('hamburgerIcon');
        const closeIcon = document.getElementById('closeIcon');
        const mobileMenu = document.getElementById('mobileMenu');
        const closeBtn = document.getElementById('mobileMenuCloseBtn');
        const body = document.body;

        if (!mobileMenuButton || !mobileMenu) return;

        function openMenu() {
            mobileMenu.classList.remove('hidden');
            hamburgerIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
            body.classList.add('overflow-hidden');
        }

        function closeMenu() {
            mobileMenu.classList.add('hidden');
            hamburgerIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
            body.classList.remove('overflow-hidden');
        }

        mobileMenuButton.addEventListener('click', function (e) {
            e.stopPropagation();
            mobileMenu.classList.contains('hidden') ? openMenu() : closeMenu();
        });

        mobileMenuButton.addEventListener('keydown', function (e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                mobileMenu.classList.contains('hidden') ? openMenu() : closeMenu();
            }
        });

        if (closeBtn) {
            closeBtn.addEventListener('click', closeMenu);
        }

        // Background click par close karne ke liye
        mobileMenu.addEventListener('click', function (e) {
            if (e.target === mobileMenu) closeMenu();
        });
        
        // NOTE: link click listener (closeMenu) has been removed to prevent flicking to home page.
    })();

// Responsive Typewriter Effect
const typewriterLayouts = {
    mobile: [
        "Think Tank for Urban and Regional Development,",
        "Natural Resources and Consumer Policy",
    ],

    tablet: [
        "Think Tank for Urban and Regional Development, Natural",
        "Resources and Consumer Policy"
    ],

    desktop: [
         "Think Tank for Urban and Regional Development, Natural Resources",
        "and Consumer Policy"
    ]
};

const typeLines = [
    document.getElementById('typeLine1'),
    document.getElementById('typeLine2'),
    document.getElementById('typeLine3')
];

let currentLayout = '';
let currentTextParts = [];
let currentPart = 0;
let currentCharacter = 0;

let typingTimer = null;
let restartTimer = null;
let resizeTimer = null;

function getTypewriterLayout() {
    const screenWidth = window.innerWidth;

    if (screenWidth < 640) {
        return 'mobile';
    }

    if (screenWidth < 1024) {
        return 'tablet';
    }

    return 'desktop';
}

function clearTypewriterTimers() {
    clearTimeout(typingTimer);
    clearTimeout(restartTimer);
}

function setActiveTypewriterLine(activeIndex) {
    typeLines.forEach((line, index) => {
        if (!line) {
            return;
        }

        line.classList.toggle(
            'is-typing',
            index === activeIndex
        );
    });
}

function startTypewriter() {
    clearTypewriterTimers();

    currentLayout = getTypewriterLayout();
    currentTextParts =
        typewriterLayouts[currentLayout];

    currentPart = 0;
    currentCharacter = 0;

    typeLines.forEach((line, index) => {
        if (!line) {
            return;
        }

        line.textContent = '';

        line.style.display =
            index < currentTextParts.length
                ? 'block'
                : 'none';

        line.classList.remove('is-typing');
    });

    typeText();
}

function typeText() {
    const activeLine =
        typeLines[currentPart];

    const activeText =
        currentTextParts[currentPart];

    if (!activeLine || activeText === undefined) {
        return;
    }

    setActiveTypewriterLine(currentPart);

    currentCharacter++;

    activeLine.textContent =
        activeText.slice(
            0,
            currentCharacter
        );

    if (currentCharacter < activeText.length) {
        typingTimer = setTimeout(
            typeText,
            70
        );

        return;
    }

    if (
        currentPart <
        currentTextParts.length - 1
    ) {
        currentPart++;
        currentCharacter = 0;

        typingTimer = setTimeout(
            typeText,
            180
        );

        return;
    }

    setActiveTypewriterLine(
        currentTextParts.length - 1
    );

    restartTimer = setTimeout(
        startTypewriter,
        8000
    );
}

window.addEventListener('resize', function () {
    clearTimeout(resizeTimer);

    resizeTimer = setTimeout(function () {
        const newLayout =
            getTypewriterLayout();

        if (newLayout !== currentLayout) {
            startTypewriter();
        }
    }, 150);
});

startTypewriter();

    // Scroll Header Effect
    document.addEventListener("scroll", function() {
        const header = document.querySelector("header");
        if (window.scrollY > 50) { header.classList.add("scrolled"); } 
        else { header.classList.remove("scrolled"); }
    });
</script>


  <!-- Hero -->
  <section class="relative w-full bg-white font-sans -mt-2">

<div class="relative flow-root w-full 
        bg-[url('Images/home-bg-17.jpg')] 
        sm:bg-[url('Images/home-bg-desktop-4.jpeg')] 
        bg-cover bg-no-repeat 
        bg-[position:right_center] 
        min-h-[250px] 
        md:min-h-[315px] 
        xl:min-h-[380px]
        before:hidden sm:before:block
        before:absolute before:inset-0 before:z-10 before:pointer-events-none"
        style="z-index: 99;">

      <div class="container mx-auto px-4 md:px-12 lg:px-20">
        <div class="max-w-2xl mb-12 pt-3 md:pt-2 md:-mt-2">
            
            <!--18px, 5.5vw, 19px-->
            
<h1 class="figma-hero-title font-medium leading-[26px] text-[#043E6B] tracking-tight" 
    style="font-family: 'Lora', serif; font-size: clamp(18px, 5.5vw, 19px) !important;"> 
    Shaping Policy,<br class="sm:hidden"> 
    Resources, Governance <br> 
    and National Direction 
</h1>
          <!-- Right Line -->
          <div class="w-[180px] h-[2px] 
                              bg-gradient-to-l from-transparent via-[#c8a562] to-[#c8a562] opacity-70 mt-2">
          </div>
          <div class="mt-2 items-center">
            <!--<div class="flex-shrink-0 pr-4">-->
            <!--    <img src="Images/home-bulb.png" alt="Lightbulb Icon" class="w-12 h-auto md:w-16">-->
            <!--</div>-->

            <p class="text-sm md:text-[14px] text-[#032d4d] font-normal leading-[16px]">
              Independent research for better communities, responsible resource management <br> and fairer consumer
              policy.
            </p>
            <div class="border-l-2 border-[#c59420] pl-2">
              <p class="figma-hero-tagline text-[#c59420] italic font-normal text-[13px] mt-2 uppercase tracking-widest">
                From research to policy outcomes, <br> defining Pakistan’s national priorities.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="w-full ">

      <div class="home-entry-spacer sm:mx-[80px]" style="height:150px;">
      </div>
    </div>

        <div class="home-entry-position relative z-[99] px-4 md:px-10 pb-4 -mt-24">
             <!--<div class="-mt-20 md:-mt-[250px] max-w-[1115px] mx-auto animate-fade-up-onload"> -->
            <div class="home-entry-wrapper xl:-mt-[355px] lg:-mt-[285px] md:-mt-[280px] -mt-[210px] max-w-[1115px] mx-auto animate-fade-up-onload mbs1">
                <div id="home-entry-cards" class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-5">
        
                    <a href="web-portal" class="block cursor-pointer">
                        <div
                          class="bg-[#fafafa] rounded-2xl px-2 sm:px-4 pb-3 pt-2 flex flex-col h-full border border-gray-50 transition-all duration-300 hover:-translate-y-1 group" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                            <div class="flex-grow">
                                <div class="flex items-center mb-2">
                                    <div
                                    class="w-12 h-12 bg-[#fafafa] rounded-full flex items-center justify-center shadow-md shadow-gray-400">
                                        <img src="Images/web2.png" alt="Web Portal" class="w-8 h-8" />
                                    </div>
                                    <h3 class="font-semibold text-black ml-3 font-semibold" style="font-family:'Segoe UI', sans-serif;">
                                        Web Portal
                                    </h3>
                                </div>
                                <p class="text-gray-700 font-normal text-[11px] md:text-[12px] leading-snug">
                                  An open public research portal providing access to knowledge, archives and analysis, where people can
                                  share views, submit articles and contribute ideas on public issues.
                                </p>
                            </div>
                            <div
                                class="mt-4 w-full text-center bg-[#043E6B] text-white py-2 rounded-full text-[11px] font-medium uppercase tracking-widest group-hover:bg-[#032d4d] relative z-10">
                                Enter the Portal
                            </div>
                        </div>
                    </a>

                      <!-- Card 2 -->
                    <a href="think-tank-welcome" class="block cursor-pointer">
                        <div
                          class="bg-[#fafafa] rounded-2xl px-2 sm:px-4 pb-3 pt-2 flex flex-col h-full border border-gray-50 transition-all duration-300 hover:-translate-y-1 group" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                          <div class="flex-grow">
                            <div class="flex items-center mb-2">
                              <div
                                class="w-12 h-12 bg-[#fafafa] rounded-full flex items-center justify-center shadow-md shadow-gray-400">
                                <img src="Images/think2.png" alt="Think Tank" class="w-7 h-8" />
                              </div>
                              <h3 class="font-semibold text-black ml-3" style="font-family:'Segoe UI', sans-serif;">
                                Think Tank
                              </h3>
                            </div>
                            <p class="text-gray-700 font-normal text-[11px] md:text-[12px] leading-snug">
                              An independent think tank working across seven domains: human settlements, natural resources, overseas Pakistanis,
                              civil and military land, real estate technology, property laws and federal restructuring.
                            </p>
                          </div>
                          <div
                            class="mt-4 w-full text-center bg-[#043E6B] text-white py-2 rounded-full font-medium uppercase group-hover:bg-[#032d4d] relative z-10"
                            style="
                              font-size: 9.5px !important;
                              letter-spacing: 0.02em !important;
                              padding-left: 4px !important;
                              padding-right: 4px !important;
                              white-space: nowrap !important;
                              -webkit-text-size-adjust: none !important;
                              text-size-adjust: none !important;
                            ">
                            Explore The Think Tank
                          </div>
                        </div>
                    </a>
        
        
                    <!-- Card 3 -->
                    <a href="research_institute.php" class="block cursor-pointer">
                        <div
                          class="bg-[#fafafa] rounded-2xl px-2 sm:px-4 pb-3 pt-2 flex flex-col h-full border border-gray-50 transition-all duration-300 hover:-translate-y-1 group" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                            <div class="flex-grow">
                                <div class="flex items-center mb-2">
                                  <div
                                    class="w-11 h-11 bg-[#fafafa] rounded-full flex items-center justify-center flex-shrink-0 shadow-md shadow-gray-400">
                                    <img src="Images/search2.png" alt="Research" class="w-8 h-8" />
                                  </div>
                                  <h3 class="font-semibold text-black ml-3 leading-tight" style="font-family:'Segoe UI', sans-serif;">
                                    Institute for Human Settlements
                                  </h3>
                                </div>
                            <p class="text-gray-700 font-normal text-[11px] md:text-[12px] leading-snug">
                              A research institute examining where people live and what that way of living requires: land, resources, services,
                              laws and the institutions that hold them together.
                            </p>
                           </div>
                           <div
                            class="mt-4 w-full text-center bg-[#043E6B] text-white py-2 rounded-full text-[11px] font-medium uppercase tracking-widest group-hover:bg-[#032d4d] relative z-10">
                            Visit Institute
                           </div>
                        </div>
                     </a>
        
        
                    <!-- Card 4 -->
                    <a href="under-construction-page" class="block cursor-pointer">
                        <div
                          class="bg-[#fafafa] rounded-2xl px-2 sm:px-4 pb-3 pt-2 flex flex-col h-full border border-gray-100 transition-all duration-300 hover:-translate-y-1 group" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                          <div class="flex-grow">
                            <div class="flex items-center mb-2">
                              <div
                                class="w-12 h-12 bg-[#fafafa] rounded-full flex items-center justify-center flex-shrink-0 shadow-md shadow-gray-400">
                                <img src="Images/refinancing2.png" alt="Transactions" class="w-8 h-8" />
                              </div>
                              <h3 class="font-semibold text-black ml-3 leading-tight" style="font-family:'Segoe UI', sans-serif;">
                                Policy & Governance Hub
                              </h3>
                            </div>
                            <p class="text-gray-700 font-normal text-[11px] md:text-[12px] leading-snug">
                              A hub examining the laws, regulators and public institutions that determine how land is held, resources are allocated,
                              settlements are governed and citizens are protected.
                            </p>
                          </div>
                          <div
                            class="mt-4 w-full text-center bg-[#043E6B] text-white py-2 rounded-full text-[11px] font-medium uppercase tracking-widest group-hover:bg-[#032d4d] relative z-10">
                            Start the Search
                          </div>
                        </div>
                    </a>
        
                </div>
            </div>
        </div>
    
  </section>

  <!-- Disktop -->


  <section class="hidden lg:block w-full py-6 sm:py-6 md:py-7">
    <div class="mx-auto max-w-[1180px] px-4 sm:px-6 lg:px-8">

      <!-- Main Grid -->
      <div class="grid grid-cols-1 items-stretch gap-5 lg:grid-cols-12">

        <!-- LEFT MAIN AREA -->
        <div class="flex flex-col gap-5 lg:col-span-9">

          <!-- TOP TWO CARDS REMOVED: Electricity System + New Provinces Proposal -->




          <div class="w-full md:w-[600px] md:ml-auto
                        overflow-hidden rounded-xl
                        bg-cover bg-center bg-no-repeat
                        shadow-[0_8px_25px_rgba(15,23,42,0.14)]">

            <a href="real-estate-blogs.php" class="group relative mx-auto block w-full
                                  overflow-hidden bg-white
                                  transition-all duration-300
                                  hover:-translate-y-1">

              <!-- ================================= -->
              <!-- TOP WHITE SECTION -->
              <!-- ================================= -->
              <div class="relative min-h-[120px] bg-white pl-[40%]">

                <!-- Person Image -->
                <div class="absolute left-4 top-3 z-20
                                            h-[190px] w-[35%]
                                            overflow-hidden rounded-md
                                            shadow-[0_5px_15px_rgba(0,0,0,0.18)]">

                  <img src="Images/sir-shayan.jpeg" alt="Syed Shayan" class="h-full w-full
                                               object-cover object-[center_40%]
                                               transition-transform duration-500
                                               group-hover:scale-105">

                </div>


                <!-- Urdu Heading -->
                <div dir="rtl" class="flex min-h-[120px] flex-col
                                            items-center justify-center
                                            px-3 pb-3 pt-3 text-center">

                  <p class="text-[13px] font-semibold
                                              text-[#043E6B]
                                              sm:text-[17px]" style="font-family:'Noto Nastaliq Urdu',serif;">
                    سید شایان کا کالم
                  </p>

                  <h2 class="mt-1 text-[21px] font-bold
                                               leading-tight text-[#a9852d]
                                               sm:text-[28px]" style="font-family:'Noto Nastaliq Urdu',serif;">
                    زمینی حقائق
                  </h2>

                  <p class="mt-1 text-[11px]
                                              leading-relaxed text-gray-700
                                              sm:text-[11px]" style="font-family:'Noto Nastaliq Urdu',serif;">
                    روزمرہ زندگی کے واقعات پر تحقیق، تبصرہ اور تجزیہ
                  </p>

                </div>

              </div>


              <!-- ================================= -->
              <!-- DARK BLUE INFORMATION BAR -->
              <!-- ================================= -->
              <div class="grid min-h-[110px]
                                        grid-cols-[40%_60%]
                                        bg-[#022846]
                                        text-white">

                <!-- Space for overlapping image -->
                <div></div>


                <!-- RIGHT INFORMATION AREA -->
                <div class="grid grid-cols-[30%_70%]">

                  <!-- National Affairs -->
                  <div class="flex flex-col
                                                justify-center
                                                border-r border-white/20
                                                px-2 sm:px-4">

                    <p class="text-[11px] font-semibold
                                                  leading-[1.25]
                                                  text-[#e4bf4a]
                                                  sm:text-[14px]">

                      Zameeni Haqaiq

                    </p>

                    <p class="mt-1
                                                  text-[11px] font-semibold
                                                  leading-[1.25]
                                                  text-white
                                                  sm:text-[14px]">

                      A Column

                    </p>

                    <p class="mt-1
                                                  text-[11px] font-semibold
                                                  text-white
                                                  sm:text-[11px]">

                      By Syed Shayan

                    </p>

                  </div>


                  <!-- Languages -->
                  <div class="flex flex-col
                                                justify-center
                                                px-2 py-2
                                                sm:px-4">

                    <p class="text-[11px]
                                                  leading-none
                                                  text-white/80
                                                  sm:text-[11px]">

                      Published in

                    </p>

                    <p class="mt-1
                                                  text-[11px] font-semibold
                                                  text-[#e4bf4a]
                                                  sm:text-[13px]">

                      6 Languages

                    </p>


                    <!-- Languages Grid -->
                    <div class="mt-2 grid grid-cols-3 gap-1">

                      <span class="rounded-full bg-white px-1 py-[2px]
                                                         text-center text-[11px] font-medium
                                                         text-[#022846] sm:text-[11px]">
                        العربية
                      </span>

                      <span class="rounded-full bg-white px-1 py-[2px]
                                                         text-center text-[11px] font-medium
                                                         text-[#022846] sm:text-[11px]">
                        English
                      </span>

                      <span class="rounded-full bg-white px-1 py-[2px]
                                                         text-center text-[11px] font-medium
                                                         text-[#022846] sm:text-[11px]">
                        اردو
                      </span>

                      <span class="rounded-full bg-white px-1 py-[2px]
                                                         text-center text-[11px] font-medium
                                                         text-[#022846] sm:text-[11px]">
                        سندھی
                      </span>

                      <span class="rounded-full bg-white px-1 py-[2px]
                                                         text-center text-[11px] font-medium
                                                         text-[#022846] sm:text-[11px]">
                        پشتو
                      </span>

                      <span class="rounded-full bg-white px-1 py-[2px]
                                                         text-center text-[11px] font-medium
                                                         text-[#022846] sm:text-[11px]">
                        پنجابی
                      </span>

                    </div>


                    <p class="mt-2
                                                  text-center
                                                  text-[11px]
                                                  tracking-wide
                                                  text-white/80
                                                  sm:text-[11px]">

                      Connecting Readers Worldwide

                    </p>

                  </div>

                </div>

              </div>


              <!-- ================================= -->
              <!-- BOTTOM ICON NAVIGATION -->
              <!-- ================================= -->
              <div class="grid h-[58px]
                                        grid-cols-6
                                        divide-x divide-gray-200
                                        bg-white">


                <!-- State -->
                <div class="flex flex-col
                                            items-center justify-center
                                            gap-1
                                            text-[#043E6B]
                                            transition-colors duration-300
                                            group-hover:text-[#0b6c9f]">

                  <svg class="h-5 w-5 sm:h-6 sm:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                      d="M3 21h18M5 21V10m14 11V10M4 10h16L12 3 4 10Zm4 2v6m4-6v6m4-6v6" />

                  </svg>

                  <span class="text-[11px]
                                                 font-medium
                                                 sm:text-[11px]">
                    ریاست
                  </span>

                </div>


                <!-- Society -->
                <div class="flex flex-col
                                            items-center justify-center
                                            gap-1
                                            text-[#043E6B]
                                            transition-colors duration-300
                                            group-hover:text-[#0b6c9f]">

                  <svg class="h-5 w-5 sm:h-6 sm:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                      d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2m7-10a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm13 10v-2a4 4 0 0 0-3-3.87m-2-11.96a4 4 0 0 1 0 7.75" />

                  </svg>

                  <span class="text-[11px]
                                                 font-medium
                                                 sm:text-[11px]">
                    سماج
                  </span>

                </div>


                <!-- Economy -->
                <div class="flex flex-col
                                            items-center justify-center
                                            gap-1
                                            text-[#043E6B]
                                            transition-colors duration-300
                                            group-hover:text-[#0b6c9f]">

                  <svg class="h-5 w-5 sm:h-6 sm:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                      d="M4 20V10m5 10V4m6 16v-7m5 7V7M2 20h20" />

                  </svg>

                  <span class="text-[11px]
                                                 font-medium
                                                 sm:text-[11px]">
                    معیشت
                  </span>

                </div>


                <!-- Research -->
                <div class="flex flex-col
                                            items-center justify-center
                                            gap-1
                                            text-[#043E6B]
                                            transition-colors duration-300
                                            group-hover:text-[#0b6c9f]">

                  <svg class="h-5 w-5 sm:h-6 sm:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                    <circle cx="11" cy="11" r="7" stroke-width="1.8" />

                    <path stroke-linecap="round" stroke-width="1.8" d="m20 20-4-4" />

                  </svg>

                  <span class="text-[11px]
                                                 font-medium
                                                 sm:text-[11px]">
                    تحقیق
                  </span>

                </div>


                <!-- Media -->
                <div class="flex flex-col
                                            items-center justify-center
                                            gap-1
                                            text-[#043E6B]
                                            transition-colors duration-300
                                            group-hover:text-[#0b6c9f]">

                  <svg class="h-5 w-5 sm:h-6 sm:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                    <rect x="9" y="2" width="6" height="11" rx="3" stroke-width="1.8" />

                    <path stroke-linecap="round" stroke-width="1.8" d="M5 10a7 7 0 0 0 14 0M12 17v4m-4 0h8" />

                  </svg>

                  <span class="text-[11px]
                                                 font-medium
                                                 sm:text-[11px]">
                    میڈیا
                  </span>

                </div>


                <!-- Public -->
                <div class="flex flex-col
                                            items-center justify-center
                                            gap-1
                                            text-[#043E6B]
                                            transition-colors duration-300
                                            group-hover:text-[#0b6c9f]">

                  <svg class="h-5 w-5 sm:h-6 sm:w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                    <circle cx="12" cy="12" r="9" stroke-width="1.8" />

                    <path stroke-linecap="round" stroke-width="1.8"
                      d="M3 12h18M12 3c3 3 4 6 4 9s-1 6-4 9c-3-3-4-6-4-9s1-6 4-9Z" />

                  </svg>

                  <span class="text-[11px]
                                                 font-medium
                                                 sm:text-[11px]">
                    عوام
                  </span>

                </div>

              </div>

            </a>

          </div>

        </div>


        <div class="relative z-20 h-full lg:col-span-3">
          
              <!--On this date desktop view commented-->

              <!--<a href="/on-this-date/2026-09-27"-->
              <!--   class="group block h-full min-h-[430px] overflow-hidden-->
              <!--          rounded-b-2xl bg-gradient-to-b from-white via-white to-[#f0e2c7]-->
              <!--          shadow-[0_10px_28px_rgba(0,0,0,0.12)]-->
              <!--          transition-all duration-300-->
              <!--          hover:-translate-y-1-->
              <!--         ">-->

              <!--    <div class="flex h-full flex-col p-5">-->

              <!-- Heading and Calendar -->
              <!--        <div class="grid grid-cols-[1fr_82px] items-start gap-3">-->

              <!--            <div>-->
              <!--                <h3 class="text-[20px] font-extrabold uppercase leading-[1.05]-->
              <!--                           text-[#008b72]">-->
              <!--                    On-->
              <!--                    <span class="block">This</span>-->
              <!--                    <span class="block">Date</span>-->
              <!--                </h3>-->

              <!--                <p class="mt-3 text-[15px] font-semibold leading-tight-->
              <!--                          text-[#07548a]">-->
              <!--                    Syed Shayan <br> Real Estate Archive-->
              <!--                </p>-->

              <!--                <p class="mt-1 text-[11px] leading-tight text-gray-600">-->
              <!--                    Tracing the Marks of the Past-->
              <!--                </p>-->
              <!--            </div>-->

              <!--            <div class="relative w-[60px] h-[60px] sm:w-[90px] sm:h-[90px] flex-shrink-0">-->
              <!--                <img src="Images/otd-calender.png" alt="Calendar" class="w-full h-full object-contain">-->
              <!--                <div class="absolute top-[22%] left-0 right-0 text-center">-->
              <!--                  <span class="text-[11px] sm:text-[11px] font-bold text-[#6b4f2a]">Monday</span>-->
              <!--                </div>-->
              <!--                <div class="absolute top-[40%] left-0 right-0 text-center">-->
              <!--                  <span-->
              <!--                    class="text-[14px] sm:text-[18px] font-extrabold text-[#4a2f14] leading-none">28</span>-->
              <!--                </div>-->
              <!--                <div class="absolute bottom-[18%] left-0 right-0 text-center">-->
              <!--                  <span-->
              <!--                    class="text-[11px] sm:text-[11px] font-bold text-[#6b4f2a]">September</span>-->
              <!--                </div>-->
              <!--            </div>-->

              <!--        </div>-->


              <!-- Explore Link -->
              <!--        <div class="mt-3 text-right">-->

              <!--            <span class="text-[11px] italic text-[#d6a937]">-->
              <!--                Explore more-->
              <!--            </span>-->

              <!--            <span class="inline-block text-[11px] text-[#d6a937]-->
              <!--                         transition-transform duration-300-->
              <!--                         group-hover:translate-x-1">-->
              <!--                &gt;&gt;&gt;-->
              <!--            </span>-->

              <!--        </div>-->


              <!-- Website -->
              <!--        <p class="mt-6 text-[11px] font-medium text-[#07548a]">-->
              <!--            www.onthisdate.pk-->
              <!--        </p>-->


              <!-- History Image -->
              <!--        <div class="mt-1 overflow-hidden rounded-sm">-->

              <!--            <img src="Images/on-this-date-2007-1790425655-52b974.jpg" alt="History"-->
              <!--                class="h-[130px] w-full object-cover-->
              <!--                       transition-transform duration-500-->
              <!--                       group-hover:scale-105"-->
              <!--            >-->

              <!--        </div>-->


              <!-- Date and Description -->
              <!--        <div class="mt-2">-->

              <!--            <p class="text-[11px] font-medium text-[#008b72]">-->
              <!--                27 SEPTEMBER 2007-->
              <!--            </p>-->

              <!--            <p class="mt-1 text-[11px] leading-[1.35] text-gray-700 uppercase line-clamp-5">-->
              <!--                SEPTEMBER 27, 2007: THE U.S. HOUSING MARKET SIGNALS A CRISIS THAT WOULD RESHAPE GLOBAL REAL ESTATE-->
              <!--            </p>-->

              <!--        </div>-->

              <!--    </div>-->

              <!--</a>-->
                      </div>

      </div>

    </div>
  </section>

  <!-- RESEARCH AND POLICY — directly below Syed Shayan Column (DESKTOP) -->
  <section class="hidden lg:block w-full px-4 pb-7">
    <div class="mx-auto max-w-[900px]">
<section class="rp-section rp-paged-slider">
            <div class="rp-heading">
              <div class="rp-kicker"><span></span>RESEARCH AND POLICY<span></span></div>
              <h2>Independent Research on<br>Pakistan’s Key National<br>Challenges</h2>
              <p>Evidence based analysis for informed policy, better<br>governance and sustainable development.</p>
            </div>

            <div class="rp-pages" aria-label="Research and policy topics">

              <!-- CARD 1: ENERGY & POWER -->
              <div class="rp-page" data-rp-page="0">
                <article class="rp-card rp-energy-card">
                  <div class="rp-card-label">
                    <div class="rp-icon rp-energy-icon">
                      <img src="Images/tower-new.png" alt="Energy &amp; Power">
                    </div>
                    <span>ENERGY &amp; POWER</span>
                  </div>
                  <h3>Pakistan’s Electricity<br>System</h3>
                  <p>Independent research on power policy, IPPs, tariffs and the transition to a competitive electricity market.</p>
                  <div class="rp-tags">
                    <span>IPPs Research</span>
                    <span>Power Brief</span>
                  </div>
                  <a href="https://syedshayan.com/ipps-in-pakistan" class="rp-btn">Explore Electricity Research <b>→</b></a>
                </article>
              </div>

              <!-- CARD 2: FEDERAL RESTRUCTURING -->
              <div class="rp-page" data-rp-page="1">
                <article class="rp-card">
                  <div class="rp-card-label">
                    <div class="rp-icon rp-map-icon">
                      <img src="Images/pakistan-map.png?v=1789983834"
                           alt="Federal Restructuring">
                    </div>
                    <span>FEDERAL<br>RESTRUCTURING</span>
                  </div>
                  <h3>Pakistan’s New<br>Provinces Proposal</h3>
                  <p>A national research framework for creating viable provinces through evidence, public debate and constitutional process.</p>
                  <div class="rp-tags">
                    <span>23 Provinces Model</span>
                    <span>Public Survey</span>
                  </div>
                  <a href="https://syedshayan.com/pakistan-new-provinces-survey" class="rp-btn">Explore the Proposal <b>→</b></a>
                </article>
              </div>

              <!-- CARD 3: WATER SECURITY -->
              <div class="rp-page" data-rp-page="2">
                <article class="rp-card">
                  <div class="rp-card-label">
                    <div class="rp-icon rp-water-icon">
                      <img src="Images/water-drop .png" alt="Water Security">
                    </div>
                    <span>WATER SECURITY</span>
                  </div>
                  <h3>Pakistan’s Water<br>System</h3>
                  <p>Independent research on the Indus Basin, irrigation, groundwater, storage and the policies shaping Pakistan’s water security.</p>
                  <div class="rp-tags">
                    <span>Indus Basin</span>
                    <span>Water Brief</span>
                  </div>
                  <a href="https://syedshayan.com/under-construction-page" class="rp-btn">Explore Water Research <b>→</b></a>
                </article>
              </div>

              <!-- CARD 4: CORRUPTION & INTEGRITY -->
              <div class="rp-page" data-rp-page="3">
                <article class="rp-card rp-reference-card rp-corruption-card">
                  <div class="rp-card-label">
                    <div class="rp-icon">
                      <img src="Images/corruption and integrity.png" alt="Corruption and Integrity">
                    </div>
                    <span>CORRUPTION &amp;<br>INTEGRITY</span>
                  </div>
                  <h3>The Cost of<br>Corruption</h3>
                  <p>Independent research on bribery, abuse of power, conflicts of interest and institutional decay, and how corruption weakens public trust, services and development.</p>
                  <div class="rp-tags rp-feature-tags">
                    <span>Public Accountability</span>
                    <span>Institutional Integrity</span>
                  </div>
                  <a href="https://syedshayan.com/under-construction-page" class="rp-btn">Explore Corruption Research <b>→</b></a>
                </article>
              </div>

              <!-- CARD 5: MINERAL RESOURCES -->
              <div class="rp-page" data-rp-page="4">
                <article class="rp-card rp-reference-card rp-mineral-card">
                  <div class="rp-card-label">
                    <div class="rp-icon">
                      <img src="Images/minrals.png" alt="Mineral Resources">
                    </div>
                    <span>MINERAL RESOURCES</span>
                  </div>
                  <h3>Pakistan’s Mineral<br>Wealth</h3>
                  <p>National research on mineral mapping, critical minerals, mining policy and how local processing can turn underground wealth into sustainable development.</p>
                  <div class="rp-tags rp-feature-tags">
                    <span>Mineral Mapping</span>
                    <span>Critical Minerals</span>
                  </div>
                  <a href="https://syedshayan.com/under-construction-page" class="rp-btn">Explore Mineral Research <b>→</b></a>
                </article>
              </div>

            </div>

            <div class="rp-controls" aria-label="Research slider controls">
              <button class="rp-nav rp-prev" type="button" aria-label="Previous research card">&#8249;</button>

              <div class="rp-dots" aria-label="Research slider pagination">
                <button class="active" type="button" data-slide="0" aria-label="Energy and Power"></button>
                <button type="button" data-slide="1" aria-label="Federal Restructuring"></button>
                <button type="button" data-slide="2" aria-label="Water Security"></button>
                <button type="button" data-slide="3" aria-label="Corruption and Integrity"></button>
                <button type="button" data-slide="4" aria-label="Mineral Resources"></button>
              </div>

              <button class="rp-nav rp-next" type="button" aria-label="Next research card">&#8250;</button>
            </div>

          </section>
    </div>
  </section>

  <!-- Desktop -->

  <section id="housing-societies-desktop" class="hidden w-full px-4 py-6 lg:block sm:px-6 lg:px-8">
    <div class="mx-auto grid max-w-[1100px] grid-cols-1 gap-7
               rounded-xl bg-cover bg-center bg-no-repeat
               px-4 py-5
               shadow-[0_8px_25px_rgba(15,23,42,0.10)]
               md:grid-cols-12
               sm:px-6
               lg:px-8
               md:py-6" style="background-image: url('Images/modal-bg-1.png');">

      <!-- =========================
             RESEARCH SERIES INTRO
        ========================== -->

      <div class="md:col-span-4">

        <p class="mb-1 text-[17px] font-medium uppercase
                       tracking-wide text-[#D6A839]">
          Research Series
        </p>

        <h2 class="text-[25px] font-bold uppercase
                       leading-[1.08] text-[#043E6B]
                       md:text-[27px]">
          Housing Societies

          <span class="block text-[20px] md:text-[21px]">
            of Pakistan
          </span>
        </h2>

        <div class="mt-3 h-[2px] w-[58px]
                       bg-gradient-to-r
                       from-[#D6A839]
                       to-[#e7c77e]"></div>

        <p class="mt-3 max-w-[310px]
                       text-[14px] leading-[1.55]
                       text-gray-600">
          Researching the planning models shaping Pakistan’s
          modern residential communities.
        </p>

        <div class="mt-4">

          <a href="living-communities" class="inline-flex items-center
                           text-[11px] font-semibold italic uppercase
                           tracking-widest text-[#b78525]
                           transition-all duration-300
                           hover:translate-x-1
                           hover:text-[#043E6B]">
            Explore the study
            <span class="ml-1">
              &gt;&gt;&gt;
            </span>
          </a>

        </div>

      </div>


      <!-- =========================
             RESEARCH LINKS
        ========================== -->

      <div class="md:col-span-8">

        <div class="grid grid-cols-2 gap-x-4 gap-y-3">


          <!-- ITEM 1 -->

          <a href="model-town-lahore" class="group relative block
                           overflow-hidden
                           rounded-lg
                           border border-[#d5b56f]/40
                           bg-transparent
                           px-4 py-3
                           shadow-[0_3px_10px_rgba(4,63,108,0.06)]
                           backdrop-blur-[1px]
                           transition-all duration-300

                           before:absolute
                           before:left-0
                           before:top-0
                           before:h-full
                           before:w-[3px]
                           before:bg-[#D6A839]
                           before:scale-y-0
                           before:origin-bottom
                           before:transition-transform
                           before:duration-300

                           hover:-translate-y-1
                           hover:border-[#D6A839]/70
                           hover:shadow-[0_7px_18px_rgba(4,63,108,0.12)]

                           hover:before:scale-y-100">

            <span class="block text-[11px]
                               leading-tight
                               text-[#c28a1e]">
              Cooperative Housing Model
            </span>

            <span class="mt-1 block text-[12px]
                               font-semibold leading-tight
                               text-[#07548a]
                               transition-colors duration-300
                               group-hover:text-[#043E6B]">
              MODEL TOWN Lahore
            </span>

          </a>


          <!-- ITEM 2 -->

          <a href="under-construction-page" class="group relative block
                           overflow-hidden
                           rounded-lg
                           border border-[#d5b56f]/40
                           bg-transparent
                           px-4 py-3
                           shadow-[0_3px_10px_rgba(4,63,108,0.06)]
                           backdrop-blur-[1px]
                           transition-all duration-300

                           before:absolute
                           before:left-0
                           before:top-0
                           before:h-full
                           before:w-[3px]
                           before:bg-[#D6A839]
                           before:scale-y-0
                           before:origin-bottom
                           before:transition-transform
                           before:duration-300

                           hover:-translate-y-1
                           hover:border-[#D6A839]/70
                           hover:shadow-[0_7px_18px_rgba(4,63,108,0.12)]

                           hover:before:scale-y-100">

            <span class="block text-[11px]
                               leading-tight
                               text-[#c28a1e]">
              Sector Planning Model
            </span>

            <span class="mt-1 block text-[12px]
                               font-semibold leading-tight
                               text-[#07548a]
                               transition-colors duration-300
                               group-hover:text-[#043E6B]">
              ISLAMABAD
            </span>

          </a>


          <!-- ITEM 3 -->

          <a href="under-construction-page" class="group relative block
                           overflow-hidden
                           rounded-lg
                           border border-[#d5b56f]/40
                           bg-transparent
                           px-4 py-3
                           shadow-[0_3px_10px_rgba(4,63,108,0.06)]
                           backdrop-blur-[1px]
                           transition-all duration-300

                           before:absolute
                           before:left-0
                           before:top-0
                           before:h-full
                           before:w-[3px]
                           before:bg-[#D6A839]
                           before:scale-y-0
                           before:origin-bottom
                           before:transition-transform
                           before:duration-300

                           hover:-translate-y-1
                           hover:border-[#D6A839]/70
                           hover:shadow-[0_7px_18px_rgba(4,63,108,0.12)]

                           hover:before:scale-y-100">

            <span class="block text-[11px]
                               leading-tight
                               text-[#c28a1e]">
              Authority Development Model
            </span>

            <span class="mt-1 block text-[12px]
                               font-semibold leading-tight
                               text-[#07548a]
                               transition-colors duration-300
                               group-hover:text-[#043E6B]">
              DHA Pakistan
            </span>

          </a>


          <!-- ITEM 4 -->

          <a href="under-construction-page" class="group relative block
                           overflow-hidden
                           rounded-lg
                           border border-[#d5b56f]/40
                           bg-transparent
                           px-4 py-3
                           shadow-[0_3px_10px_rgba(4,63,108,0.06)]
                           backdrop-blur-[1px]
                           transition-all duration-300

                           before:absolute
                           before:left-0
                           before:top-0
                           before:h-full
                           before:w-[3px]
                           before:bg-[#D6A839]
                           before:scale-y-0
                           before:origin-bottom
                           before:transition-transform
                           before:duration-300

                           hover:-translate-y-1
                           hover:border-[#D6A839]/70
                           hover:shadow-[0_7px_18px_rgba(4,63,108,0.12)]

                           hover:before:scale-y-100">

            <span class="block text-[11px]
                               leading-tight
                               text-[#c28a1e]">
              Private Sector Development Model
            </span>

            <span class="mt-1 block text-[12px]
                               font-semibold leading-tight
                               text-[#07548a]
                               transition-colors duration-300
                               group-hover:text-[#043E6B]">
              BAHRIA TOWN Pakistan
            </span>

          </a>


          <!-- ITEM 5 -->

          <a href="under-construction-page" class="group relative block
                           overflow-hidden
                           rounded-lg
                           border border-[#d5b56f]/40
                           bg-transparent
                           px-4 py-3
                           shadow-[0_3px_10px_rgba(4,63,108,0.06)]
                           backdrop-blur-[1px]
                           transition-all duration-300

                           before:absolute
                           before:left-0
                           before:top-0
                           before:h-full
                           before:w-[3px]
                           before:bg-[#D6A839]
                           before:scale-y-0
                           before:origin-bottom
                           before:transition-transform
                           before:duration-300

                           hover:-translate-y-1
                           hover:border-[#D6A839]/70
                           hover:shadow-[0_7px_18px_rgba(4,63,108,0.12)]

                           hover:before:scale-y-100">

            <span class="block text-[11px]
                               leading-tight
                               text-[#c28a1e]">
              Municipal Planning Model
            </span>

            <span class="mt-1 block text-[12px]
                               font-semibold leading-tight
                               text-[#07548a]
                               transition-colors duration-300
                               group-hover:text-[#043E6B]">
              SATELLITE TOWN Rawalpindi
            </span>

          </a>


          <!-- ITEM 6 -->

          <a href="under-construction-page" class="group relative block
                           overflow-hidden
                           rounded-lg
                           border border-[#d5b56f]/40
                           bg-transparent
                           px-4 py-3
                           shadow-[0_3px_10px_rgba(4,63,108,0.06)]
                           backdrop-blur-[1px]
                           transition-all duration-300

                           before:absolute
                           before:left-0
                           before:top-0
                           before:h-full
                           before:w-[3px]
                           before:bg-[#D6A839]
                           before:scale-y-0
                           before:origin-bottom
                           before:transition-transform
                           before:duration-300

                           hover:-translate-y-1
                           hover:border-[#D6A839]/70
                           hover:shadow-[0_7px_18px_rgba(4,63,108,0.12)]

                           hover:before:scale-y-100">

            <span class="block text-[11px]
                               leading-tight
                               text-[#c28a1e]">
              Urban Growth Model
            </span>

            <span class="mt-1 block text-[12px]
                               font-semibold leading-tight
                               text-[#07548a]
                               transition-colors duration-300
                               group-hover:text-[#043E6B]">
              Community Expansion Patterns
            </span>

          </a>


          <!-- ITEM 7 -->

          <a href="under-construction-page" class="group relative block
                           overflow-hidden
                           rounded-lg
                           border border-[#d5b56f]/40
                           bg-transparent
                           px-4 py-3
                           shadow-[0_3px_10px_rgba(4,63,108,0.06)]
                           backdrop-blur-[1px]
                           transition-all duration-300

                           before:absolute
                           before:left-0
                           before:top-0
                           before:h-full
                           before:w-[3px]
                           before:bg-[#D6A839]
                           before:scale-y-0
                           before:origin-bottom
                           before:transition-transform
                           before:duration-300

                           hover:-translate-y-1
                           hover:border-[#D6A839]/70
                           hover:shadow-[0_7px_18px_rgba(4,63,108,0.12)]

                           hover:before:scale-y-100">

            <span class="block text-[11px]
                               leading-tight
                               text-[#c28a1e]">
              Lahore &amp; Historic Cities
            </span>

            <span class="mt-1 block text-[12px]
                               font-semibold leading-tight
                               text-[#07548a]
                               transition-colors duration-300
                               group-hover:text-[#043E6B]">
              HISTORIC WALLED CITY MODEL
            </span>

          </a>


          <!-- ITEM 8 -->

          <a href="under-construction-page" class="group relative block
                           overflow-hidden
                           rounded-lg
                           border border-[#d5b56f]/40
                           bg-transparent
                           px-4 py-3
                           shadow-[0_3px_10px_rgba(4,63,108,0.06)]
                           backdrop-blur-[1px]
                           transition-all duration-300

                           before:absolute
                           before:left-0
                           before:top-0
                           before:h-full
                           before:w-[3px]
                           before:bg-[#D6A839]
                           before:scale-y-0
                           before:origin-bottom
                           before:transition-transform
                           before:duration-300

                           hover:-translate-y-1
                           hover:border-[#D6A839]/70
                           hover:shadow-[0_7px_18px_rgba(4,63,108,0.12)]

                           hover:before:scale-y-100">

            <span class="block text-[11px]
                               leading-tight
                               text-[#c28a1e]">
              Punjab &amp; Sindh Villages
            </span>

            <span class="mt-1 block text-[12px]
                               font-semibold leading-tight
                               text-[#07548a]
                               transition-colors duration-300
                               group-hover:text-[#043E6B]">
              RURAL SETTLEMENT MODEL
            </span>

          </a>

        </div>

      </div>

    </div>

  </section>
  <!--  <section class="w-full px-4 py-6 sm:px-6 lg:px-8 hidden sm:block">-->

  <!--  <a-->
  <!--    href="real-estate-index"-->
  <!--    class="group mx-auto flex max-w-[1100px] flex-col-->
  <!--           items-center justify-between gap-6-->
  <!--           overflow-hidden rounded-[22px]-->
  <!--           border border-slate-200-->
  <!--           bg-white px-5 py-6-->
  <!--           text-inherit no-underline-->
  <!--           shadow-[0_10px_30px_rgba(15,23,42,0.12)]-->
  <!--           transition-all duration-300-->
  <!--           hover:-translate-y-[2px]-->
  <!--           hover:shadow-[0_18px_40px_rgba(15,23,42,0.16)]-->
  <!--           md:flex-row md:gap-5-->
  <!--           lg:px-8 lg:py-7"-->
  <!--  >-->


  <!-- ========================= -->
  <!-- LEFT CONTENT -->
  <!-- ========================= -->

  <!--    <div-->
  <!--      class="flex shrink-0 flex-col-->
  <!--             items-center text-center-->
  <!--             md:items-start md:text-left"-->
  <!--    >-->

  <!-- Small Label -->
  <!--      <div-->
  <!--        class="mb-3 inline-flex items-center gap-2-->
  <!--               rounded-full bg-slate-50-->
  <!--               px-3 py-1.5"-->
  <!--      >-->

  <!--        <span-->
  <!--          class="flex h-6 w-6 items-center justify-center-->
  <!--                 rounded-full bg-[#1F3566]"-->
  <!--        >-->
  <!--          <svg-->
  <!--            xmlns="http://www.w3.org/2000/svg"-->
  <!--            viewBox="0 0 24 24"-->
  <!--            fill="none"-->
  <!--            class="h-3.5 w-3.5"-->
  <!--          >-->
  <!--            <path-->
  <!--              d="M4 17L9 12L13 15L20 7"-->
  <!--              stroke="#D7A93A"-->
  <!--              stroke-width="2"-->
  <!--              stroke-linecap="round"-->
  <!--              stroke-linejoin="round"-->
  <!--            />-->

  <!--            <path-->
  <!--              d="M15 7H20V12"-->
  <!--              stroke="#D7A93A"-->
  <!--              stroke-width="2"-->
  <!--              stroke-linecap="round"-->
  <!--              stroke-linejoin="round"-->
  <!--            />-->
  <!--          </svg>-->
  <!--        </span>-->

  <!--        <span-->
  <!--          class="text-[11px] font-bold uppercase-->
  <!--                 tracking-[0.12em]-->
  <!--                 text-[#1F3566]-->
  <!--                 sm:text-[11px]"-->
  <!--        >-->
  <!--          Pakistan Property Intelligence-->
  <!--        </span>-->

  <!--      </div>-->


  <!-- Heading -->
  <!--      <h2-->
  <!--        class="whitespace-nowrap-->
  <!--               text-[28px] font-bold-->
  <!--               leading-none tracking-[0.025em]-->
  <!--               sm:text-[34px]-->
  <!--               lg:text-[40px]"-->
  <!--      >-->

  <!--        <span class="text-[#1F3566]">-->
  <!--          REAL ESTATE-->
  <!--        </span>-->

  <!--        <span class="text-[#D7A93A]">-->
  <!--          INDEX-->
  <!--        </span>-->

  <!--      </h2>-->


  <!-- Description -->
  <!--      <p-->
  <!--        class="mt-3 max-w-[430px]-->
  <!--               text-[12px] font-medium-->
  <!--               leading-5 text-slate-600-->
  <!--               sm:text-[14px]-->
  <!--               lg:text-[15px]"-->
  <!--      >-->
  <!--        Explore Pakistan’s most advanced real estate  data platform, offering real-time market  indicators, comprehensive property reports,  district wise analytics, and survey based  insights.-->
  <!--      </p>-->


  <!-- CTA -->
  <!--      <div-->
  <!--        class="mt-4 inline-flex items-center gap-2-->
  <!--               text-[11px] font-bold-->
  <!--               text-[#1F3566]-->
  <!--               sm:text-[12px]"-->
  <!--      >-->

  <!--        Explore Real Estate Index-->

  <!--        <span-->
  <!--          class="flex h-7 w-7 items-center justify-center-->
  <!--                 rounded-full bg-[#1F3566]-->
  <!--                 text-white-->
  <!--                 transition-transform duration-300-->
  <!--                 group-hover:translate-x-1"-->
  <!--        >-->

  <!--          <svg-->
  <!--            xmlns="http://www.w3.org/2000/svg"-->
  <!--            viewBox="0 0 24 24"-->
  <!--            fill="none"-->
  <!--            class="h-3.5 w-3.5"-->
  <!--          >-->
  <!--            <path-->
  <!--              d="M5 12H19M13 6L19 12L13 18"-->
  <!--              stroke="currentColor"-->
  <!--              stroke-width="2"-->
  <!--              stroke-linecap="round"-->
  <!--              stroke-linejoin="round"-->
  <!--            />-->
  <!--          </svg>-->

  <!--        </span>-->

  <!--      </div>-->

  <!--    </div>-->



  <!-- ========================= -->
  <!-- RIGHT FEATURES -->
  <!-- ========================= -->

  <!--    <div-->
  <!--      class="grid w-full grid-cols-2 gap-2.5-->
  <!--             sm:grid-cols-4-->
  <!--             md:w-auto md:flex-1-->
  <!--             md:grid-cols-4"-->
  <!--    >-->


  <!-- ================= -->
  <!-- INDICATORS -->
  <!-- ================= -->

  <!--      <div-->
  <!--        class="flex min-h-[125px] flex-col-->
  <!--               items-center justify-center-->
  <!--               rounded-[16px]-->
  <!--               bg-slate-50/80-->
  <!--               px-2 py-4-->
  <!--               text-center-->
  <!--               transition-all duration-300-->
  <!--               group-hover:bg-[#F7F8FB]"-->
  <!--      >-->

  <!--        <div-->
  <!--          class="flex h-[54px] w-[54px]-->
  <!--                 items-center justify-center-->
  <!--                 rounded-full-->
  <!--                 border border-[#1F3566]/20-->
  <!--                 bg-white-->
  <!--                 shadow-[0_4px_12px_rgba(15,23,42,0.06)]"-->
  <!--        >-->

  <!--          <svg-->
  <!--            xmlns="http://www.w3.org/2000/svg"-->
  <!--            viewBox="0 0 64 64"-->
  <!--            fill="none"-->
  <!--            class="h-[34px] w-[34px]"-->
  <!--          >-->

  <!--            <rect-->
  <!--              x="8"-->
  <!--              y="39"-->
  <!--              width="10"-->
  <!--              height="17"-->
  <!--              rx="2"-->
  <!--              fill="#1F3566"-->
  <!--            />-->

  <!--            <rect-->
  <!--              x="27"-->
  <!--              y="30"-->
  <!--              width="10"-->
  <!--              height="26"-->
  <!--              rx="2"-->
  <!--              fill="#1F3566"-->
  <!--            />-->

  <!--            <rect-->
  <!--              x="46"-->
  <!--              y="20"-->
  <!--              width="10"-->
  <!--              height="36"-->
  <!--              rx="2"-->
  <!--              fill="#1F3566"-->
  <!--            />-->

  <!--            <path-->
  <!--              d="M8 29L21 18L32 25L52 8"-->
  <!--              stroke="#D7A93A"-->
  <!--              stroke-width="4"-->
  <!--              stroke-linecap="round"-->
  <!--              stroke-linejoin="round"-->
  <!--            />-->

  <!--            <path-->
  <!--              d="M44 8H52V16"-->
  <!--              stroke="#D7A93A"-->
  <!--              stroke-width="4"-->
  <!--              stroke-linecap="round"-->
  <!--              stroke-linejoin="round"-->
  <!--            />-->

  <!--          </svg>-->

  <!--        </div>-->


  <!--        <span-->
  <!--          class="mt-2.5 whitespace-nowrap-->
  <!--                 text-[11px] font-bold-->
  <!--                 uppercase tracking-[0.06em]-->
  <!--                 text-[#1F3566]-->
  <!--                 lg:text-[12px]"-->
  <!--        >-->
  <!--          Indicators-->
  <!--        </span>-->

  <!--        <span-->
  <!--          class="mt-1 text-[11px]-->
  <!--                 text-slate-500"-->
  <!--        >-->
  <!--          Key market data-->
  <!--        </span>-->

  <!--      </div>-->



  <!-- ================= -->
  <!-- DASHBOARD -->
  <!-- ================= -->

  <!--      <div-->
  <!--        class="flex min-h-[125px] flex-col-->
  <!--               items-center justify-center-->
  <!--               rounded-[16px]-->
  <!--               bg-slate-50/80-->
  <!--               px-2 py-4-->
  <!--               text-center-->
  <!--               transition-all duration-300-->
  <!--               group-hover:bg-[#F7F8FB]"-->
  <!--      >-->

  <!--        <div-->
  <!--          class="flex h-[54px] w-[54px]-->
  <!--                 items-center justify-center-->
  <!--                 rounded-full-->
  <!--                 border border-[#1F3566]/20-->
  <!--                 bg-white-->
  <!--                 shadow-[0_4px_12px_rgba(15,23,42,0.06)]"-->
  <!--        >-->

  <!--          <svg-->
  <!--            xmlns="http://www.w3.org/2000/svg"-->
  <!--            viewBox="0 0 64 64"-->
  <!--            fill="none"-->
  <!--            class="h-[34px] w-[34px]"-->
  <!--          >-->

  <!--            <path-->
  <!--              d="M30 7C17 7 7 17 7 30C7 43 17 53 30 53C36 53 42 50 46 46L30 30V7Z"-->
  <!--              fill="#1F3566"-->
  <!--            />-->

  <!--            <path-->
  <!--              d="M36 8V26H54C52 17 45 10 36 8Z"-->
  <!--              fill="#D7A93A"-->
  <!--            />-->

  <!--            <path-->
  <!--              d="M36 32L49 45C52 42 54 37 54 32H36Z"-->
  <!--              fill="#E7EBF3"-->
  <!--              stroke="#1F3566"-->
  <!--              stroke-width="2"-->
  <!--            />-->

  <!--          </svg>-->

  <!--        </div>-->


  <!--        <span-->
  <!--          class="mt-2.5 whitespace-nowrap-->
  <!--                 text-[11px] font-bold-->
  <!--                 uppercase tracking-[0.06em]-->
  <!--                 text-[#1F3566]-->
  <!--                 lg:text-[12px]"-->
  <!--        >-->
  <!--          Dashboard-->
  <!--        </span>-->

  <!--        <span-->
  <!--          class="mt-1 text-[11px]-->
  <!--                 text-slate-500"-->
  <!--        >-->
  <!--          Visual insights-->
  <!--        </span>-->

  <!--      </div>-->



  <!-- ================= -->
  <!-- REPORTS -->
  <!-- ================= -->

  <!--      <div-->
  <!--        class="flex min-h-[125px] flex-col-->
  <!--               items-center justify-center-->
  <!--               rounded-[16px]-->
  <!--               bg-slate-50/80-->
  <!--               px-2 py-4-->
  <!--               text-center-->
  <!--               transition-all duration-300-->
  <!--               group-hover:bg-[#F7F8FB]"-->
  <!--      >-->

  <!--        <div-->
  <!--          class="flex h-[54px] w-[54px]-->
  <!--                 items-center justify-center-->
  <!--                 rounded-full-->
  <!--                 border border-[#1F3566]/20-->
  <!--                 bg-white-->
  <!--                 shadow-[0_4px_12px_rgba(15,23,42,0.06)]"-->
  <!--        >-->

  <!--          <svg-->
  <!--            xmlns="http://www.w3.org/2000/svg"-->
  <!--            viewBox="0 0 64 64"-->
  <!--            fill="none"-->
  <!--            class="h-[33px] w-[33px]"-->
  <!--          >-->

  <!--            <path-->
  <!--              d="M15 7H39L51 19V57H15V7Z"-->
  <!--              fill="white"-->
  <!--              stroke="#1F3566"-->
  <!--              stroke-width="3"-->
  <!--              stroke-linejoin="round"-->
  <!--            />-->

  <!--            <path-->
  <!--              d="M39 7V19H51"-->
  <!--              stroke="#1F3566"-->
  <!--              stroke-width="3"-->
  <!--            />-->

  <!--            <path-->
  <!--              d="M23 30H43"-->
  <!--              stroke="#D7A93A"-->
  <!--              stroke-width="3"-->
  <!--              stroke-linecap="round"-->
  <!--            />-->

  <!--            <path-->
  <!--              d="M23 39H43"-->
  <!--              stroke="#1F3566"-->
  <!--              stroke-width="3"-->
  <!--              stroke-linecap="round"-->
  <!--            />-->

  <!--            <path-->
  <!--              d="M23 48H35"-->
  <!--              stroke="#1F3566"-->
  <!--              stroke-width="3"-->
  <!--              stroke-linecap="round"-->
  <!--            />-->

  <!--          </svg>-->

  <!--        </div>-->


  <!--        <span-->
  <!--          class="mt-2.5 whitespace-nowrap-->
  <!--                 text-[11px] font-bold-->
  <!--                 uppercase tracking-[0.06em]-->
  <!--                 text-[#1F3566]-->
  <!--                 lg:text-[12px]"-->
  <!--        >-->
  <!--          Reports-->
  <!--        </span>-->

  <!--        <span-->
  <!--          class="mt-1 text-[11px]-->
  <!--                 text-slate-500"-->
  <!--        >-->
  <!--          Research & analysis-->
  <!--        </span>-->

  <!--      </div>-->



  <!-- ================= -->
  <!-- SURVEYS -->
  <!-- ================= -->

  <!--      <div-->
  <!--        class="flex min-h-[125px] flex-col-->
  <!--               items-center justify-center-->
  <!--               rounded-[16px]-->
  <!--               bg-slate-50/80-->
  <!--               px-2 py-4-->
  <!--               text-center-->
  <!--               transition-all duration-300-->
  <!--               group-hover:bg-[#F7F8FB]"-->
  <!--      >-->

  <!--        <div-->
  <!--          class="flex h-[54px] w-[54px]-->
  <!--                 items-center justify-center-->
  <!--                 rounded-full-->
  <!--                 border border-[#1F3566]/20-->
  <!--                 bg-white-->
  <!--                 shadow-[0_4px_12px_rgba(15,23,42,0.06)]"-->
  <!--        >-->

  <!--          <svg-->
  <!--            xmlns="http://www.w3.org/2000/svg"-->
  <!--            viewBox="0 0 64 64"-->
  <!--            fill="none"-->
  <!--            class="h-[34px] w-[34px]"-->
  <!--          >-->

  <!--            <rect-->
  <!--              x="14"-->
  <!--              y="11"-->
  <!--              width="36"-->
  <!--              height="45"-->
  <!--              rx="4"-->
  <!--              fill="white"-->
  <!--              stroke="#1F3566"-->
  <!--              stroke-width="3"-->
  <!--            />-->

  <!--            <rect-->
  <!--              x="24"-->
  <!--              y="7"-->
  <!--              width="16"-->
  <!--              height="9"-->
  <!--              rx="3"-->
  <!--              fill="#1F3566"-->
  <!--            />-->

  <!--            <path-->
  <!--              d="M21 28L25 32L31 24"-->
  <!--              stroke="#D7A93A"-->
  <!--              stroke-width="3"-->
  <!--              stroke-linecap="round"-->
  <!--              stroke-linejoin="round"-->
  <!--            />-->

  <!--            <path-->
  <!--              d="M35 28H43"-->
  <!--              stroke="#1F3566"-->
  <!--              stroke-width="3"-->
  <!--              stroke-linecap="round"-->
  <!--            />-->

  <!--            <path-->
  <!--              d="M21 43L25 47L31 39"-->
  <!--              stroke="#D7A93A"-->
  <!--              stroke-width="3"-->
  <!--              stroke-linecap="round"-->
  <!--              stroke-linejoin="round"-->
  <!--            />-->

  <!--            <path-->
  <!--              d="M35 43H43"-->
  <!--              stroke="#1F3566"-->
  <!--              stroke-width="3"-->
  <!--              stroke-linecap="round"-->
  <!--            />-->

  <!--          </svg>-->

  <!--        </div>-->


  <!--        <span-->
  <!--          class="mt-2.5 whitespace-nowrap-->
  <!--                 text-[11px] font-bold-->
  <!--                 uppercase tracking-[0.06em]-->
  <!--                 text-[#1F3566]-->
  <!--                 lg:text-[12px]"-->
  <!--        >-->
  <!--          Surveys-->
  <!--        </span>-->

  <!--        <span-->
  <!--          class="mt-1 text-[11px]-->
  <!--                 text-slate-500"-->
  <!--        >-->
  <!--          Market sentiment-->
  <!--        </span>-->

  <!--      </div>-->


  <!--    </div>-->

  <!--  </a>-->

  <!--</section>-->





  <!-- ============================================================
     PDF MATCH SECTIONS — added only; existing PHP/backend untouched
============================================================= -->
  <style>
  
    /* PDF MATCH — responsive, mobile-safe. Backend/PHP untouched. */
    .pdfmatch {
      --navy: #043E6B;
      --gold: #D6A839;
      --green: #0F7A57;
      --ink: #262626;
      width: 100%;
      max-width: 100vw;
      overflow: hidden;
      font-family: 'Poppins', sans-serif;
      color: var(--ink);
      background: #fff
    }

    .pdfmatch,
    .pdfmatch * {
      box-sizing: border-box;
      min-width: 0
    }

    .pdfmatch img {
      max-width: 100%;
      height: auto
    }

    .pdfmatch a {
      text-decoration: none
    }

    .pdfmatch .serif {
      font-family: 'Lora', 'Playfair Display', serif
    }

    .pdfmatch .wrap {
      width: 100%;
      max-width: 720px;
      margin: 0 auto;
      padding: 30px 26px
    }

    .pdfmatch h2 {
      color: var(--navy);
      font-weight: 800;
      margin-top: 0
    }

    .pdfmatch .eyebrow {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 14px;
      color: var(--gold);
      font-weight: 700;
      font-size: 20px;
      white-space: nowrap
    }

    .pdfmatch .eyebrow:before,
    .pdfmatch .eyebrow:after {
      content: "";
      width: 54px;
      height: 2px;
      background: var(--gold);
      flex: 0 0 54px
    }

    .pdfmatch .policy-title {
      font-size: 38px;
      line-height: 1.05;
      text-align: center;
      max-width: 620px;
      margin: 8px auto
    }

    .pdfmatch .policy-sub {
      text-align: center;
      font-weight: 600;
      font-size: 17px;
      line-height: 1.3;
      max-width: 650px;
      margin: 12px auto 32px
    }

    .pdfmatch .policy-grid {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 8px;
      width: 100%
    }

    .pdfmatch .policy-card {
      width: 100%;
      overflow: hidden;
      border: 1px solid #ddd;
      border-radius: 17px;
      padding: 22px 14px 14px;
      box-shadow: 0 9px 15px rgba(0, 0, 0, .12);
      display: flex;
      flex-direction: column;
      min-height: 400px;
      background: #fff
    }

    .pdfmatch .policy-kicker {
      display: flex;
      align-items: center;
      gap: 9px;
      color: var(--gold);
      font-weight: 600;
      font-size: 16px;
      line-height: 1.35
    }

    .pdfmatch .policy-kicker>span:last-child {
      overflow-wrap: anywhere
    }

    .pdfmatch .iconbubble {
      width: 58px;
      height: 58px;
      border-radius: 50%;
      background: #fbf7ee;
      display: grid;
      place-items: center;
      flex: 0 0 58px
    }

    .pdfmatch .iconbubble img {
      width: 40px;
      height: 40px;
      object-fit: contain
    }

    .pdfmatch .cardtitle {
      font-size: 26px;
      line-height: 1.04;
      margin: 16px 0 6px;
      overflow-wrap: anywhere
    }

    .pdfmatch .cardcopy {
      font-size: 18px;
      line-height: 1.28;
      margin: 0;
      overflow-wrap: anywhere
    }

    .pdfmatch .chips {
      display: flex;
      gap: 8px;
      flex-wrap: wrap;
      margin-top: auto;
      padding-top: 18px
    }

    .pdfmatch .chip {
      background: #dcecff;
      color: var(--navy);
      padding: 7px 12px;
      border-radius: 999px;
      font-size: 12px;
      font-weight: 600;
      white-space: nowrap
    }

    .pdfmatch .cta {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 7px;
      max-width: 100%;
      background: var(--navy);
      color: #fff !important;
      padding: 9px 13px;
      border-radius: 12px;
      margin-top: 14px;
      font-weight: 600;
      font-size: 14px;
      line-height: 1.2;
      box-shadow: 0 4px 9px rgba(0, 0, 0, .2);
      width: max-content
    }

    .pdfmatch .dots {
      display: flex;
      justify-content: center;
      gap: 6px;
      margin-top: 18px
    }

    .pdfmatch .dots i {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background: #d4d4d4
    }

    .pdfmatch .dots i:first-child {
      background: #07527d
    }

    .pdfmatch .survey-wrap {
      padding-top: 34px
    }

    .pdfmatch .survey-top {
      display: grid;
      grid-template-columns: minmax(0, 1.5fr) minmax(90px, .65fr);
      gap: 18px;
      align-items: center
    }

    .pdfmatch .survey-label {
      color: var(--green);
      font-size: 21px;
      font-weight: 700;
      display: flex;
      align-items: center;
      gap: 8px;
      white-space: nowrap
    }

    .pdfmatch .survey-label:after {
      content: "";
      height: 2px;
      width: 54px;
      background: var(--gold);
      flex: 0 0 54px
    }

    .pdfmatch .survey-title {
      font-size: 36px !important;
      line-height: 1.08;
      margin: 3px 0
    }

    .pdfmatch .survey-title span {
      color: var(--green)
    }

    .pdfmatch .survey-lead {
      font-weight: 800;
      font-size: 16px;
      line-height: 1.15;
      margin: 14px 0 10px
    }

    .pdfmatch .survey-copy {
      font-size: 16px;
      line-height: 1.25;
      max-width: 560px;
       margin: -12px 0 18px !important;
    }

    .pdfmatch .survey-method {
      font-weight: 600;
      font-size: 16px;
      line-height: 1.25;
      margin-top: 12px
    }

    .pdfmatch .survey-hand {
      display: flex;
      justify-content: center;
      align-items: center
    }

    .pdfmatch .survey-hand img {
      width: 100%;
      max-width: 175px;
      display: block
    }

    .pdfmatch .survey-button {
      margin-top: 14px;
      background: var(--navy);
      color: #fff !important;
      padding: 9px 12px;
      border-radius: 6px;
      display: inline-flex;
      align-items: center;
      gap: 14px;
      font-weight: 600;
      font-size: 14px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, .2);
      max-width: 100%
    }

    .pdfmatch .survey-button b {
      color: var(--green);
      font-size: 24px;
      line-height: 16px
    }

    .pdfmatch .how {
      color: var(--green) !important;
      font-size: 21px !important;
      margin: 34px 0 15px
    }

    .pdfmatch .steps {
      display: grid;
      grid-template-columns: repeat(4, minmax(0, 1fr));
      width: 100%
    }

    .pdfmatch .step {
      border: 1px solid #d7d7d7;
      padding: 10px;
      min-height: 160px;
      overflow: hidden
    }

    .pdfmatch .step:first-child {
      border-radius: 7px 0 0 7px
    }

    .pdfmatch .step:last-child {
      border-radius: 0 7px 7px 0
    }

    .pdfmatch .num {
      display: inline-grid;
      place-items: center;
      background: var(--green);
      color: white;
      width: 25px;
      height: 25px;
      border-radius: 50%;
      font-weight: 700
    }

    .pdfmatch .step img {
      width: 23px;
      height: 23px;
      object-fit: contain;
      margin-left: 7px;
      display: inline-block;
      vertical-align: middle
    }

    .pdfmatch .step h3 {
      color: var(--navy);
      font-size: 17px;
      line-height: 1.05;
      font-weight: 800;
      margin: 10px 0 4px;
      overflow-wrap: anywhere
    }

    .pdfmatch .step p {
      font-size: 14px;
      line-height: 1.2;
      margin: 0;
      overflow-wrap: anywhere
    }

    .pdfmatch .survey-all {
      text-align: right;
      margin-top: 26px;
      color: var(--navy);
      font-weight: 800;
      font-size: 20px
    }

    .pdfmatch .library {
      padding-top: 60px;
      padding-bottom: 50px
    }

    .pdfmatch .library-grid {
      display: grid;
      grid-template-columns: minmax(0, .8fr) minmax(0, 1.2fr);
      gap: 18px;
      align-items: center
    }

    .pdfmatch .lib-label {
      color: var(--gold);
      font-size: 21px;
      font-weight: 700
    }

    .pdfmatch .lib-label:after {
      content: "";
      display: block;
      width: 52px;
      height: 2px;
      background: var(--gold);
      margin-top: 5px
    }

    .pdfmatch .lib-title {
      font-size: 39px !important;
      line-height: 1.03;
      margin: 20px 0 8px
    }

    .pdfmatch .lib-copy {
      font-size: 25px;
      line-height: 1.2
    }

    .pdfmatch .book-stage {
      display: flex;
      align-items: flex-end;
      justify-content: center;
      gap: 7px;
      min-height: 240px
    }

    .pdfmatch .book {
      width: 30%;
      height: 210px;
      border-radius: 6px;
      background: linear-gradient(145deg, #0d181a, #28342d);
      color: #e8d5a5;
      padding: 18px 6px;
      text-align: center;
      box-shadow: 7px 9px 10px rgba(0, 0, 0, .22);
      font-family: Georgia, serif;
      font-weight: 700;
      font-size: 13px;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden
    }

    .pdfmatch .book:nth-child(2) {
      height: 230px;
      background: linear-gradient(145deg, #17130e, #3a3325)
    }

    .pdfmatch .book:nth-child(3) {
      height: 215px;
      background: linear-gradient(145deg, #f7f7f7, #cfd7dc);
      color: #25476b
    }

    .pdfmatch .formats {
      display: flex;
      justify-content: center;
      gap: 7px;
      margin-top: -2px
    }

    .pdfmatch .format {
      background: #fff;
      border-radius: 4px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, .18);
      padding: 2px 5px;
      color: var(--navy);
      font-size: 12px;
      white-space: nowrap
    }

    .pdfmatch .libcats {
      display: grid;
      grid-template-columns: repeat(4, minmax(0, 1fr));
      gap: 7px;
      margin-top: 18px
    }

    .pdfmatch .libcat {
      border: 1px solid #ddd;
      border-radius: 4px;
      padding: 8px 5px;
      font-size: 13px;
      text-align: center;
      background: white;
      white-space: nowrap;
      overflow: hidden
    }

    .pdfmatch .libcat img {
      width: 18px;
      height: 18px;
      object-fit: contain;
      display: inline-block;
      margin-right: 4px;
      vertical-align: -4px
    }

    @media(max-width:700px) {
      .pdfmatch .wrap {
        max-width: 100%;
        padding: 26px 18px
      }

      .pdfmatch .eyebrow {
        font-size: 15px;
        gap: 9px
      }

      .pdfmatch .eyebrow:before,
      .pdfmatch .eyebrow:after {
        width: 38px;
        flex-basis: 38px
      }

      .pdfmatch .policy-title {
        font-size: 30px
      }

      .pdfmatch .policy-sub {
        font-size: 14px;
        margin-bottom: 24px
      }

      .pdfmatch .policy-card {
        padding: 16px 11px 12px;
        min-height: 365px
      }

      .pdfmatch .iconbubble {
        width: 46px;
        height: 46px;
        flex-basis: 46px
      }

      .pdfmatch .iconbubble img {
        width: 31px;
        height: 31px
      }

      .pdfmatch .policy-kicker {
        font-size: 12px;
        gap: 6px
      }

      .pdfmatch .cardtitle {
        font-size: 20px;
        margin-top: 13px
      }

      .pdfmatch .cardcopy {
        font-size: 14px;
        line-height: 1.32
      }

      .pdfmatch .chip {
        font-size: 11px;
        padding: 5px 7px
      }

      .pdfmatch .cta {
        font-size: 11px;
        padding: 8px 8px;
        border-radius: 10px;
        white-space: normal;
        text-align: center
      }

      .pdfmatch .survey-top {
        grid-template-columns: minmax(0, 1.55fr) minmax(80px, .55fr);
        gap: 8px
      }

      .pdfmatch .survey-label {
        font-size: 16px
      }

      .pdfmatch .survey-label:after {
        width: 42px;
        flex-basis: 42px
      }

      .pdfmatch .survey-title {
        font-size: 30px !important
      }

      .pdfmatch .survey-lead {
        font-size: 13px
      }

      .pdfmatch .survey-copy,
      .pdfmatch .survey-method {
        font-size: 13px
      }

      .pdfmatch .survey-hand img {
        max-width: 120px
      }

      .pdfmatch .survey-button {
        font-size: 11px;
        padding: 8px 9px;
        gap: 8px
      }

      .pdfmatch .how {
        font-size: 18px !important;
        margin-top: 28px
      }

      .pdfmatch .step {
        padding: 7px 5px;
        min-height: 145px
      }

      .pdfmatch .num {
        width: 22px;
        height: 22px;
        font-size: 12px
      }

      .pdfmatch .step img {
        width: 17px;
        height: 17px;
        margin-left: 3px
      }

      .pdfmatch .step h3 {
        font-size: 11px;
        line-height: 1.08
      }

      .pdfmatch .step p {
        font-size: 11px;
        line-height: 1.18
      }

      .pdfmatch .survey-all {
        font-size: 16px;
        margin-top: 22px
      }

      .pdfmatch .library {
        padding-top: 52px
      }

      .pdfmatch .library-grid {
        grid-template-columns: minmax(0, .82fr) minmax(0, 1.18fr);
        gap: 8px
      }

      .pdfmatch .lib-label {
        font-size: 16px
      }

      .pdfmatch .lib-title {
        font-size: 28px !important;
        margin-top: 15px
      }

      .pdfmatch .lib-copy {
        font-size: 17px
      }

      .pdfmatch .book-stage {
        min-height: 170px;
        gap: 3px
      }

      .pdfmatch .book {
        height: 145px;
        font-size: 11px;
        padding: 8px 2px
      }

      .pdfmatch .book:nth-child(2) {
        height: 160px
      }

      .pdfmatch .book:nth-child(3) {
        height: 150px
      }

      .pdfmatch .formats {
        gap: 3px
      }

      .pdfmatch .format {
        font-size: 11px;
        padding: 2px 3px
      }

      .pdfmatch .libcats {
        gap: 4px
      }

      .pdfmatch .libcat {
        font-size: 11px;
        padding: 6px 2px
      }

      .pdfmatch .libcat img {
        width: 12px;
        height: 12px;
        margin-right: 2px
      }
    }

    @media(max-width:420px) {

      html,
      body {
        max-width: 100%;
        overflow-x: hidden !important
      }

      .pdfmatch .wrap {
        padding-left: 14px;
        padding-right: 14px
      }

      .pdfmatch .eyebrow {
        font-size: 13px;
        gap: 7px
      }

      .pdfmatch .eyebrow:before,
      .pdfmatch .eyebrow:after {
        width: 30px;
        flex-basis: 30px
      }

      .pdfmatch .policy-title {
        font-size: 25px
      }

      .pdfmatch .policy-sub {
        font-size: 12px;
        line-height: 1.35
      }

      .pdfmatch .policy-grid {
        gap: 6px
      }

      .pdfmatch .policy-card {
        min-height: 350px;
        padding: 14px 9px 11px;
        border-radius: 14px
      }

      .pdfmatch .iconbubble {
        width: 40px;
        height: 40px;
        flex-basis: 40px
      }

      .pdfmatch .iconbubble img {
        width: 27px;
        height: 27px
      }

      .pdfmatch .policy-kicker {
        font-size: 11px
      }

      .pdfmatch .cardtitle {
        font-size: 17px
      }

      .pdfmatch .cardcopy {
        font-size: 12px
      }

      .pdfmatch .chips {
        gap: 4px;
        padding-top: 12px
      }

      .pdfmatch .chip {
        font-size: 11px;
        padding: 5px 6px
      }

      .pdfmatch .cta {
        font-size: 11px;
        padding: 7px 6px
      }

      .pdfmatch .survey-label {
        font-size: 14px
      }

      .pdfmatch .survey-label:after {
        width: 32px;
        flex-basis: 32px
      }

      .pdfmatch .survey-title {
        font-size: 25px !important
      }

      .pdfmatch .survey-lead {
        font-size: 11px
      }

      .pdfmatch .survey-copy,
      .pdfmatch .survey-method {
        font-size: 11px
      }

      .pdfmatch .survey-hand img {
        max-width: 92px
      }

      .pdfmatch .survey-button {
        font-size: 11px
      }

      .pdfmatch .how {
        font-size: 16px !important
      }

      .pdfmatch .step {
        padding: 6px 4px;
        min-height: 138px
      }

      .pdfmatch .num {
        width: 20px;
        height: 20px;
        font-size: 11px
      }

      .pdfmatch .step img {
        width: 14px;
        height: 14px
      }

      .pdfmatch .step h3 {
        font-size: 11px
      }

      .pdfmatch .step p {
        font-size: 11px
      }

      .pdfmatch .survey-all {
        font-size: 14px
      }

      .pdfmatch .lib-label {
        font-size: 14px
      }

      .pdfmatch .lib-title {
        font-size: 24px !important
      }

      .pdfmatch .lib-copy {
        font-size: 15px
      }

      .pdfmatch .book-stage {
        min-height: 145px
      }

      .pdfmatch .book {
        height: 124px;
        font-size: 11px
      }

      .pdfmatch .book:nth-child(2) {
        height: 138px
      }

      .pdfmatch .book:nth-child(3) {
        height: 130px
      }

      .pdfmatch .format {
        font-size: 11px
      }

      .pdfmatch .libcat {
        font-size: 11px
      }
    }
    
    
    /* General mobile */
@media (max-width: 640px) {

    .home-entry-spacer {
        height: 0 !important;
    }

    .home-entry-position {
        margin-top: 0 !important;
        padding-top: 0 !important;
    }

    .home-entry-wrapper {
        margin-top: 0 !important;
    }
}


/* iPhone / iOS Safari only */
@supports (-webkit-touch-callout: none) {
    @media (max-width: 640px) {

        .home-entry-position {
            margin-top: -45px !important;
        }

        .home-entry-wrapper {
            margin-top: 0 !important;
        }
    }
}
    
  </style>

  <style>
    /* FINAL PDF ALIGNMENT PATCH — visual only; PHP/backend untouched */
    @media (max-width:700px) {
      .pdfmatch .policy-grid {
        align-items: stretch;
        gap: 8px;
      }

      .pdfmatch .policy-card {
        min-height: 400px;
        height: 100%;
        padding: 16px 12px 14px;
      }

      .pdfmatch .policy-kicker {
        min-height: 58px;
        align-items: center;
        font-size: 12px;
      }

      .pdfmatch .iconbubble {
        width: 54px;
        height: 54px;
        flex: 0 0 54px;
      }

      .pdfmatch .iconbubble img {
        width: 38px;
        height: 38px;
      }

      .pdfmatch .cardtitle {
        min-height: 62px;
        font-size: 20px;
        line-height: 1.08;
      }

      .pdfmatch .cardcopy {
        font-size: 14px;
        line-height: 1.3;
      }

      .pdfmatch .chips {
        margin-top: auto;
        padding-top: 16px;
        gap: 6px;
        min-height: 50px;
        align-items: flex-end;
      }

      .pdfmatch .chip {
        font-size: 11px;
        padding: 6px 8px;
      }

      .pdfmatch .cta {
        width: 100%;
        min-height: 38px;
        font-size: 11px;
        padding: 8px 7px;
        margin-top: 10px;
        white-space: nowrap;
      }

      .pdfmatch .step img {
        width: 22px;
        height: 22px;
      }

      .pdfmatch .step p,
      .pdfmatch .step h3 {
        font-size: 11px;
      }

      .pdfmatch .book {
        font-size: 11px;
        line-height: 1.15;
      }

      .pdfmatch .format {
        font-size: 11px;
        padding: 3px 5px;
      }

      .pdfmatch .libcat {
        font-size: 11px;
        padding: 7px 3px;
      }

      .pdfmatch .libcat img {
        width: 20px;
        height: 20px;
        margin-right: 4px;
      }

      #trigger-section,
      #trigger-section * {
        box-sizing: border-box;
      }

      #trigger-section {
        width: 100%;
        max-width: 720px;
        margin: 0 auto;
        padding: 14px 14px 26px !important;
      }

      #trigger-section .hs-glass-card {
        width: 100%;
        padding: 14px !important;
      }

      #trigger-section .hs-card p,
      #trigger-section .hs-card h3,
      #trigger-section .hs-footer-link a,
      #trigger-section .hs-desc,
      #trigger-section .hs-badge span,
      #trigger-section .hs-subtitle span {
        font-size: 11px !important;
      }

      #trigger-section .hs-card img {
        min-height: 110px;
      }
    }
  </style>



  <style>
    /* HOW THE PLATFORM WORKS - larger icons on tablet/desktop */
    @media (min-width:701px) {
      .pdfmatch .step img {
        width: 48px !important;
        height: 48px !important;
        min-width: 48px !important;
        min-height: 48px !important;
        object-fit: contain !important;
      }
    }
  </style>

  <style>
    /* ============================================================
   FINAL MOBILE PDF MATCH PATCH
   - Backend/PHP unchanged
   - Larger visible icons
   - More vertical gap before Housing Societies / Model Town
   ============================================================ */
    @media (max-width:700px) {

      /* HOW THE PLATFORM WORKS icons */
      .pdfmatch .step {
        padding: 9px 7px 10px !important;
      }

      .pdfmatch .step .num {
        width: 24px !important;
        height: 24px !important;
        font-size: 12px !important;
      }

      .pdfmatch .step img {
        width: 48px !important;
        height: 48px !important;
        min-width: 48px !important;
        min-height: 48px !important;
        margin-left: 7px !important;
        object-fit: contain !important;
      }

      /* Digital Library category icons */
      .pdfmatch .libcat {
        min-height: 38px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        gap: 5px !important;
        font-size: 11px !important;
        overflow: visible !important;
      }

      .pdfmatch .libcat img {
        width: 22px !important;
        height: 22px !important;
        min-width: 22px !important;
        min-height: 22px !important;
        margin-right: 2px !important;
        vertical-align: middle !important;
        object-fit: contain !important;
      }

      .pdfmatch .libcat .pdf-lib-symbol {
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        width: 22px !important;
        height: 22px !important;
        min-width: 22px !important;
        font-size: 19px !important;
        line-height: 1 !important;
        color: #c59420 !important;
      }

      /* PDF / EPUB / Read Online icons/text */
      .pdfmatch .format {
        min-height: 24px !important;
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        gap: 3px !important;
        font-size: 11px !important;
        padding: 3px 5px !important;
      }

      /* PDF has a clear white gap after Digital Library before Research Series */
      #digital-library-pdfmatch {
        padding-bottom: 64px !important;
      }

      #digital-library-pdfmatch+.pdf-housing-spacer {
        height: 22px !important;
      }

      /* Housing Societies / Model Town begins lower, like PDF */
      .pdf-housing-mobile {
        margin-top: 0 !important;
        padding-top: 0 !important;
      }

      .pdf-housing-mobile #trigger-section {
        margin-top: 0 !important;
        padding-top: 18px !important;
      }
    }

    @media (max-width:420px) {
      .pdfmatch .step img {
        width: 22px !important;
        height: 22px !important;
        min-width: 22px !important;
        min-height: 22px !important;
      }

      .pdfmatch .libcat img,
      .pdfmatch .libcat .pdf-lib-symbol {
        width: 20px !important;
        height: 20px !important;
        min-width: 20px !important;
      }

      .pdfmatch .libcat .pdf-lib-symbol {
        font-size: 18px !important;
      }

      #digital-library-pdfmatch {
        padding-bottom: 58px !important;
      }
    }

    /* Final mobile visual alignment: keep icons and arrows readable at narrow widths. */
    @media (max-width:700px) {
      .pdfmatch .iconbubble {
        width: 58px !important;
        height: 58px !important;
        flex-basis: 58px !important;
      }

      .pdfmatch .iconbubble img {
        width: 42px !important;
        height: 42px !important;
      }

      .pdfmatch .step img {
        width: 28px !important;
        height: 28px !important;
        min-width: 28px !important;
        min-height: 28px !important;
        margin-left: 6px !important;
      }

      .pdfmatch .libcat img,
      .pdfmatch .libcat .pdf-lib-symbol {
        width: 24px !important;
        height: 24px !important;
        min-width: 24px !important;
        min-height: 24px !important;
      }

      .pdfmatch .libcat .pdf-lib-symbol {
        color: #c59420 !important;
        font-size: 21px !important;
      }

      .pdfmatch .cta,
      .pdfmatch .survey-button {
        gap: 8px !important;
      }

      .pdfmatch .cta span,
      .pdfmatch .survey-button b {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 22px !important;
        font-weight: 800;
        line-height: 1 !important;
      }

      .pdfmatch .cta span {
        color: #ffffff !important;
      }

      .pdfmatch .survey-button b {
        color: #0F7A57 !important;
      }

      .pdfmatch .survey-all a {
        color: #043E6B !important;
      }

      .pdfmatch .survey-all a::after {
        content: " →";
        color: #D6A839;
        font-size: 22px;
        vertical-align: -1px;
      }

      .pdfmatch .survey-all a {
        font-size: 0;
      }

      .pdfmatch .survey-all a::before {
        content: "VIEW ALL SURVEYS";
        font-size: 16px;
      }

      #digital-library-pdfmatch {
        padding-bottom: 72px !important;
      }

      #digital-library-pdfmatch+.pdf-housing-spacer {
        height: 34px !important;
      }

      .pdf-housing-mobile {
        margin-top: 0 !important;
        padding-top: 18px !important;
      }

      .pdf-housing-mobile #trigger-section {
        margin-top: 0 !important;
        padding-top: 18px !important;
      }
    }

    @media (max-width:420px) {
      .pdfmatch .iconbubble {
        width: 52px !important;
        height: 52px !important;
        flex-basis: 52px !important;
      }

      .pdfmatch .iconbubble img {
        width: 38px !important;
        height: 38px !important;
      }

      .pdfmatch .step img {
        width: 32px !important;
        height: 32px !important;
        min-width: 32px !important;
        min-height: 32px !important;
      }

      .pdfmatch .survey-all a::before {
        font-size: 14px;
      }
    }
  </style>


  <style>
    /* ============================================================
       FINAL MOBILE PDF REFERENCE PATCH
       - IPPs / Provinces PDF-match block removed
       - Syed Shayan Survey moves up
       - Equal/larger Digital Library category icons
       - Prevents horizontal page movement
       - Desktop/backend/PHP logic remains untouched
       ============================================================ */
    @media (max-width:700px) {

      html,
      body {
        width: 100% !important;
        max-width: 100% !important;
        overflow-x: hidden !important;
      }

      .pdfmatch {
        width: 100% !important;
        max-width: 100% !important;
        overflow-x: hidden !important;
      }

      .pdfmatch .wrap {
        width: 100% !important;
        max-width: 100% !important;
        padding-left: 27px !important;
        padding-right: 27px !important;
      }

      /* Survey now starts at the top like the supplied mobile reference */
      #public-opinion-pdfmatch {
        padding-top: 52px !important;
        padding-bottom: 26px !important;
      }

      .pdfmatch .survey-top {
        grid-template-columns: minmax(0, 1fr) 112px !important;
        gap: 8px !important;
        align-items: center !important;
      }

      .pdfmatch .survey-label {
        font-size: 18px !important;
        line-height: 1.1 !important;
      }

      .pdfmatch .survey-label:after {
        width: 60px !important;
        flex-basis: 60px !important;
      }

      .pdfmatch .survey-title {
        font-size: 34px !important;
        line-height: 1.02 !important;
        margin: 8px 0 22px !important;
        white-space: nowrap;
      }

      .pdfmatch .survey-lead {
        font-size: 14px !important;
        line-height: 1.18 !important;
        margin: -12px 0 18px !important;
      }

      .pdfmatch .survey-copy,
      .pdfmatch .survey-method {
        font-size: 14px !important;
        line-height: 1.3 !important;
      }

      .pdfmatch .survey-method {
        /*margin-top: 20px !important;*/
         margin: -12px 0 18px !important;
      }

      .pdfmatch .survey-hand img {
        width: 105px !important;
        max-width: 105px !important;
      }

      .pdfmatch .survey-button {
        margin-top: 20px !important;
        min-height: 58px !important;
        padding: 12px 18px !important;
        border-radius: 9px !important;
        font-size: 14px !important;
      }

      .pdfmatch .how {
        margin-top: 58px !important;
        margin-bottom: 28px !important;
        font-size: 21px !important;
        white-space: nowrap;
      }

      .pdfmatch .steps {
        grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
      }

      .pdfmatch .step {
        min-height: 280px !important;
        padding: 24px 14px 16px !important;
      }

      .pdfmatch .step .num {
        width: 45px !important;
        height: 45px !important;
        font-size: 20px !important;
      }

      /* All four step icons equal and clearly visible */
      .pdfmatch .step img {
        width: 36px !important;
        height: 36px !important;
        min-width: 36px !important;
        min-height: 36px !important;
        margin-left: 12px !important;
        object-fit: contain !important;
      }

      .pdfmatch .step h3 {
        font-size: 16px !important;
        line-height: 1.02 !important;
        margin-top: 22px !important;
      }

      .pdfmatch .step p {
        font-size: 15px !important;
        line-height: 1.18 !important;
        margin-top: 8px !important;
      }

      .pdfmatch .survey-all {
        margin-top: 55px !important;
        font-size: 20px !important;
      }

      /* Digital Library spacing/composition */
      #digital-library-pdfmatch {
        padding-top: 125px !important;
        padding-bottom: 82px !important;
      }

      .pdfmatch .library-grid {
        grid-template-columns: minmax(0, .82fr) minmax(0, 1.18fr) !important;
        gap: 22px !important;
        align-items: center !important;
      }

      .pdfmatch .lib-label {
        font-size: 18px !important;
      }

      .pdfmatch .lib-label:after {
        width: 98px !important;
        margin-top: 14px !important;
      }

      .pdfmatch .lib-title {
        font-size: 34px !important;
        line-height: 1.02 !important;
        margin-top: 28px !important;
      }

      .pdfmatch .lib-copy {
        font-size: 22px !important;
        line-height: 1.2 !important;
      }

      .pdfmatch .book-stage {
        min-height: 245px !important;
        gap: 3px !important;
      }

      .pdfmatch .book {
        height: 210px !important;
        font-size: 13px !important;
      }

      .pdfmatch .book:nth-child(2) {
        height: 235px !important;
      }

      .pdfmatch .book:nth-child(3) {
        height: 220px !important;
      }

      .pdfmatch .format {
        font-size: 12px !important;
        padding: 4px 7px !important;
      }

      /* Four category buttons stay in one PDF-like row */
      .pdfmatch .libcats {
        grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
        gap: 8px !important;
        margin-top: 35px !important;
        width: 100% !important;
      }

      .pdfmatch .libcat {
        min-height: 74px !important;
        padding: 10px 5px !important;
        font-size: 12px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        gap: 7px !important;
        white-space: normal !important;
        line-height: 1.1 !important;
        overflow: visible !important;
      }

      /* Equal and larger icons requested */
      .pdfmatch .libcat img,
      .pdfmatch .libcat .pdf-lib-symbol {
        width: 36px !important;
        height: 36px !important;
        min-width: 36px !important;
        min-height: 36px !important;
        margin: 0 !important;
        object-fit: contain !important;
        flex: 0 0 36px !important;
      }

      .pdfmatch .libcat .pdf-lib-symbol {
        font-size: 27px !important;
        line-height: 1 !important;
      }

      /* Housing section follows the PDF without excessive blank/overflow */
      #digital-library-pdfmatch+.pdf-housing-spacer {
        height: 72px !important;
      }

      .pdf-housing-mobile,
      .pdf-housing-mobile #trigger-section {
        width: 100% !important;
        max-width: 100% !important;
        overflow-x: hidden !important;
      }

      .pdf-housing-mobile #trigger-section {
        padding-left: 27px !important;
        padding-right: 27px !important;
      }
    }

    @media (max-width:420px) {
      .pdfmatch .wrap {
        padding-left: 20px !important;
        padding-right: 20px !important;
      }

      .pdfmatch .survey-top {
        grid-template-columns: minmax(0, 1fr) 92px !important;
      }

      .pdfmatch .survey-title {
        font-size: 30px !important;
      }

      .pdfmatch .survey-hand img {
        width: 88px !important;
        max-width: 88px !important;
      }

      .pdfmatch .step {
        min-height: 245px !important;
        padding: 20px 9px 14px !important;
      }

      .pdfmatch .step .num {
        width: 38px !important;
        height: 38px !important;
        font-size: 17px !important;
      }

      .pdfmatch .step img {
        width: 32px !important;
        height: 32px !important;
        min-width: 32px !important;
        min-height: 32px !important;
        margin-left: 6px !important;
      }

      .pdfmatch .step h3 {
        font-size: 14px !important;
      }

      .pdfmatch .step p {
        font-size: 13px !important;
      }

      .pdfmatch .libcat {
        min-height: 66px !important;
        font-size: 11px !important;
        gap: 4px !important;
      }

      .pdfmatch .libcat img {
        width: 32px !important;
        height: 32px !important;
        min-width: 32px !important;
        min-height: 32px !important;
        flex-basis: 32px !important;
      }

      .pdfmatch .libcat .pdf-lib-symbol {
        width: 32px !important;
        height: 32px !important;
        min-width: 32px !important;
        min-height: 32px !important;
        flex-basis: 32px !important;
        font-size: 24px !important;
      }

      .pdf-housing-mobile #trigger-section {
        padding-left: 20px !important;
        padding-right: 20px !important;
      }
    }
  </style>


  <!-- FINAL RESPONSIVE OVERRIDE: PDF-matched mobile sizing -->
  <style>
    @media (max-width:700px) {
      .pdfmatch .wrap { padding-left:18px !important; padding-right:18px !important; }

      /* Platform steps: keep four columns like the supplied PDF, but fit viewport */
      .pdfmatch .steps { grid-template-columns:repeat(4,minmax(0,1fr)) !important; gap:0 !important; }
      .pdfmatch .step { min-width:0 !important; min-height:185px !important; padding:14px 5px 10px !important; }
      .pdfmatch .step .num { width:28px !important; height:28px !important; font-size:13px !important; }
      .pdfmatch .step img { width:34px !important; height:34px !important; min-width:34px !important; min-height:34px !important; margin-left:5px !important; object-fit:contain !important; }
      .pdfmatch .step h3 { font-size:11px !important; line-height:1.08 !important; margin-top:12px !important; overflow-wrap:normal !important; word-break:normal !important; }
      .pdfmatch .step p { font-size:11px !important; line-height:1.18 !important; margin-top:6px !important; overflow-wrap:normal !important; word-break:normal !important; }

      /* Digital Library: same left/right composition as PDF */
      #digital-library-pdfmatch { padding-top:62px !important; padding-bottom:48px !important; }
      .pdfmatch .library-grid { grid-template-columns:42% 58% !important; gap:5px !important; align-items:center !important; }
      .pdfmatch .lib-label { font-size:14px !important; }
      .pdfmatch .lib-label:after { width:42px !important; margin-top:5px !important; }
      .pdfmatch .lib-title { font-size:25px !important; line-height:1 !important; margin:13px 0 7px !important; }
      .pdfmatch .lib-copy { font-size:14px !important; line-height:1.15 !important; margin-bottom:9px !important; }
      .pdfmatch .library .cta { font-size:11px !important; padding:8px 8px !important; min-height:28px !important; white-space:nowrap !important; }

      .pdfmatch .book-stage { min-height:155px !important; gap:3px !important; padding:0 2px !important; }
      .pdfmatch .book { width:31% !important; height:132px !important; padding:6px 2px !important; font-size:11px !important; line-height:1.12 !important; }
      .pdfmatch .book:nth-child(2) { height:147px !important; }
      .pdfmatch .book:nth-child(3) { height:136px !important; }
      .pdfmatch .formats { gap:3px !important; margin-top:3px !important; }
      .pdfmatch .format { min-height:0 !important; font-size:11px !important; padding:3px 3px !important; }

      /* Four category buttons + larger, equal icons */
      .pdfmatch .libcats { grid-template-columns:repeat(4,minmax(0,1fr)) !important; gap:4px !important; margin-top:16px !important; }
      .pdfmatch .libcat { min-width:0 !important; min-height:42px !important; padding:5px 2px !important; gap:3px !important; font-size:11px !important; line-height:1.05 !important; white-space:nowrap !important; overflow:hidden !important; }
      .pdfmatch .libcat img,
      .pdfmatch .libcat .pdf-lib-symbol { width:22px !important; height:22px !important; min-width:22px !important; min-height:22px !important; flex:0 0 22px !important; margin:0 !important; object-fit:contain !important; }

      /* Digital Library supplied publication artwork */
      .pdfmatch .digital-library-art {
        min-height:0 !important; height:auto !important; padding:0 !important; gap:0 !important;
        display:flex !important; align-items:flex-end !important; justify-content:center !important;
        background:transparent !important; overflow:visible !important;
      }
      .pdfmatch .digital-library-books-image {
        display:block !important; width:100% !important; max-width:100% !important; height:auto !important;
        object-fit:contain !important; object-position:center bottom !important;
      }

      /* Larger category icons */
      .pdfmatch .libcat img,
      .pdfmatch .libcat .pdf-lib-symbol {
        width:30px !important; height:30px !important; min-width:30px !important; min-height:30px !important;
        flex:0 0 30px !important; object-fit:contain !important;
      }

      #digital-library-pdfmatch + .pdf-housing-spacer { height:24px !important; }
      .pdf-housing-mobile { padding-top:0 !important; }
    }

    @media (max-width:420px) {
      .pdfmatch .wrap { padding-left:14px !important; padding-right:14px !important; }
      .pdfmatch .step { min-height:170px !important; padding:12px 3px 9px !important; }
      .pdfmatch .step img { width:30px !important; height:30px !important; min-width:30px !important; min-height:30px !important; }
      .pdfmatch .step h3 { font-size:11px !important; }
      .pdfmatch .step p { font-size:11px !important; }
      .pdfmatch .lib-title { font-size:22px !important; }
      .pdfmatch .lib-copy { font-size:12px !important; }
      .pdfmatch .book-stage { min-height:142px !important; }
      .pdfmatch .book { height:120px !important; font-size:11px !important; }
      .pdfmatch .book:nth-child(2) { height:134px !important; }
      .pdfmatch .book:nth-child(3) { height:124px !important; }
      .pdfmatch .libcat { min-height:40px !important; font-size:11px !important; gap:2px !important; }
      .pdfmatch .libcat img,
      .pdfmatch .libcat .pdf-lib-symbol { width:27px !important; height:27px !important; min-width:27px !important; min-height:27px !important; flex-basis:27px !important; }
    }
  </style>

  <!-- MOBILE SYED SHAYAN COLUMN — RESTORED TO OLD DESIGN -->
  <div class="block lg:hidden max-w-8xl mx-auto mt-[10px] px-4">
    <div class="flex flex-col gap-2">
      <a href="real-estate-blogs.php"
         class="my-[14px] block w-full transition-all duration-300">

        <section
          class="mobile-zameeni-card relative mx-auto h-[170px] w-full max-w-[340px]
                 overflow-hidden rounded-[22px] bg-white
                 shadow-[0_5px_14px_rgba(0,0,0,0.10)]">

          <!-- Top white area -->
          <div class="absolute inset-x-0 top-0 h-[92px] bg-white"></div>

          <!-- Dark blue lower strip -->
          <div
            class="absolute bottom-[8px] left-[12px] right-[12px] h-[72px]
                   bg-[#022846] shadow-[0_2px_5px_rgba(0,0,0,0.12)]">
          </div>

          <!-- Syed Shayan image -->
          <div
            class="mobile-zameeni-person absolute left-[14px] top-[18px] z-30 h-[140px] w-[94px]
                   overflow-hidden shadow-[0_3px_8px_rgba(0,0,0,0.18)]">
            <img
              src="Images/sir-shayan.jpeg"
              alt="Syed Shayan Founder of SyedShayan.com Think Tank"
              class="h-full w-full object-cover object-[center_35%]">
          </div>

          <!-- Urdu Zameeni Haqaiq logo -->
          <div class="mobile-zameeni-logo absolute right-[18px] top-[18px] z-20">
            <img
              src="Images/zameen-haqaiq.png"
              alt="Zameeni Haqaiq"
              class="h-[66px] w-[190px] object-contain object-right">
          </div>

          <!-- Lower text -->
          <div
            class="mobile-zameeni-copy absolute bottom-[20px] left-[120px] right-[28px] z-30
                   text-left font-['Poppins']">

            <p class="m-0 text-[12px] font-medium leading-[1.15] text-[#d8ae49]">
              Zameeni Haqaiq
            </p>

            <div class="mt-[3px] flex items-center justify-between">
              <p class="m-0 whitespace-nowrap text-[12px] font-medium leading-none text-white">
                A Column by Syed Shayan
              </p>

              <span class="ml-2 shrink-0 text-[20px] font-light leading-none text-[#dfbf72]">
                →
              </span>
            </div>

          </div>

        </section>
      </a>
    </div>
  </div>

  <!-- RESEARCH AND POLICY — directly below Syed Shayan Column (MOBILE) -->
  <div class="block lg:hidden w-full px-4 research-policy-mobile-wrap">
<section class="rp-section rp-mobile rp-paged-slider">
            <div class="rp-heading">
              <div class="rp-kicker"><span></span>RESEARCH AND POLICY<span></span></div>
              <h2 class="rp-mobile-title"><span>Independent Research on</span><span>Pakistan’s Key National</span><span>Challenges</span></h2>
              <p class="rp-mobile-evidence"><span>Evidence based analysis for informed policy, better</span><span>governance and sustainable development.</span></p>
            </div>

            <div class="rp-pages" aria-label="Research and policy topics">

              <!-- CARD 1: ENERGY & POWER -->
              <div class="rp-page" data-rp-page="0">
                <article class="rp-card rp-energy-card">
                  <div class="rp-card-label">
                    <div class="rp-icon rp-energy-icon">
                      <img src="Images/tower-new.png" alt="Energy &amp; Power">
                    </div>
                    <span>ENERGY &amp; POWER</span>
                  </div>
                  <h3>Pakistan’s Electricity<br>System</h3>
                  <p>Independent research on power policy, IPPs, tariffs and the transition to a competitive electricity market.</p>
                  <div class="rp-tags">
                    <span>IPPs Research</span>
                    <span>Power Brief</span>
                  </div>
                  <a href="https://syedshayan.com/ipps-in-pakistan" class="rp-btn">Explore Electricity Research <b>→</b></a>
                </article>
              </div>

              <!-- CARD 2: FEDERAL RESTRUCTURING -->
              <div class="rp-page" data-rp-page="1">
                <article class="rp-card">
                  <div class="rp-card-label">
                    <div class="rp-icon rp-map-icon">
                      <img src="Images/pakistan-map.png?v=1789983834"
                           alt="Federal Restructuring">
                    </div>
                    <span>FEDERAL<br>RESTRUCTURING</span>
                  </div>
                  <h3>Pakistan’s New<br>Provinces Proposal</h3>
                  <p>A national research framework for creating viable provinces through evidence, public debate and constitutional process.</p>
                  <div class="rp-tags">
                    <span>23 Provinces Model</span>
                    <span>Public Survey</span>
                  </div>
                  <a href="https://syedshayan.com/pakistan-new-provinces-survey" class="rp-btn">Explore the Proposal <b>→</b></a>
                </article>
              </div>

              <!-- CARD 3: WATER SECURITY -->
              <div class="rp-page" data-rp-page="2">
                <article class="rp-card">
                  <div class="rp-card-label">
                    <div class="rp-icon rp-water-icon">
                      <img src="Images/water-drop .png" alt="Water Security">
                    </div>
                    <span>WATER SECURITY</span>
                  </div>
                  <h3>Pakistan’s Water<br>System</h3>
                  <p>Independent research on the Indus Basin, irrigation, groundwater, storage and the policies shaping Pakistan’s water security.</p>
                  <div class="rp-tags">
                    <span>Indus Basin</span>
                    <span>Water Brief</span>
                  </div>
                  <a href="https://syedshayan.com/under-construction-page" class="rp-btn">Explore Water Research <b>→</b></a>
                </article>
              </div>

              <!-- CARD 4: CORRUPTION & INTEGRITY -->
              <div class="rp-page" data-rp-page="3">
                <article class="rp-card rp-reference-card rp-corruption-card">
                  <div class="rp-card-label">
                    <div class="rp-icon">
                      <img src="Images/corruption and integrity.png" alt="Corruption and Integrity">
                    </div>
                    <span>CORRUPTION &amp;<br>INTEGRITY</span>
                  </div>
                  <h3>The Cost of<br>Corruption</h3>
                  <p>Independent research on bribery, abuse of power, conflicts of interest and institutional decay, and how corruption weakens public trust, services and development.</p>
                  <div class="rp-tags rp-feature-tags">
                    <span>Public Accountability</span>
                    <span>Institutional Integrity</span>
                  </div>
                  <a href="https://syedshayan.com/under-construction-page" class="rp-btn">Explore Corruption Research <b>→</b></a>
                </article>
              </div>

              <!-- CARD 5: MINERAL RESOURCES -->
              <div class="rp-page" data-rp-page="4">
                <article class="rp-card rp-reference-card rp-mineral-card">
                  <div class="rp-card-label">
                    <div class="rp-icon">
                      <img src="Images/minrals.png" alt="Mineral Resources">
                    </div>
                    <span>MINERAL RESOURCES</span>
                  </div>
                  <h3>Pakistan’s Mineral<br>Wealth</h3>
                  <p>National research on mineral mapping, critical minerals, mining policy and how local processing can turn underground wealth into sustainable development.</p>
                  <div class="rp-tags rp-feature-tags">
                    <span>Mineral Mapping</span>
                    <span>Critical Minerals</span>
                  </div>
                  <a href="https://syedshayan.com/under-construction-page" class="rp-btn">Explore Mineral Research <b>→</b></a>
                </article>
              </div>

            </div>

            <div class="rp-controls" aria-label="Research slider controls">
              <button class="rp-nav rp-prev" type="button" aria-label="Previous research card">&#8249;</button>

              <div class="rp-dots" aria-label="Research slider pagination">
                <button class="active" type="button" data-slide="0" aria-label="Energy and Power"></button>
                <button type="button" data-slide="1" aria-label="Federal Restructuring"></button>
                <button type="button" data-slide="2" aria-label="Water Security"></button>
                <button type="button" data-slide="3" aria-label="Corruption and Integrity"></button>
                <button type="button" data-slide="4" aria-label="Mineral Resources"></button>
              </div>

              <button class="rp-nav rp-next" type="button" aria-label="Next research card">&#8250;</button>
            </div>

          </section>
  </div>

  <div class="pdfmatch public-opinion-section-wrap">
    <section class="wrap survey-wrap" id="public-opinion-pdfmatch">
      <div class="survey-top">
        <div>
          <div class="survey-label">PUBLIC OPINION</div>
          <h2 class="serif survey-title">Syed Shayan <span>Survey</span></h2>
          <p class="survey-lead">PAKISTAN'S ONLINE PUBLIC SURVEY<br>PLATFORM</p>
          <p class="survey-copy">An independent platform that brings public opinion into research, policy discussion and
            informed national debate.</p>
          <p class="survey-method">Transparent methodology · Open participation · Research for public policy</p>
          <a href="https://syedshayan.com/under-construction-page" class="survey-button">METHODOLOGY &amp; STANDARDS <span class="survey-button-arrow" aria-hidden="true">→</span></a>
        </div>
        <div class="survey-hand"><img src="Images/survey image.png" alt="Public survey participation"></div>
      </div>
      <h2 class="how">HOW THE PLATFORM WORKS</h2>
      <div class="steps">
        <div class="step"><span class="num">1</span><img src="Images/screen.png" alt="">
          <h3>Open online<br>participation</h3>
          <p>Pakistan and overseas Pakistanis</p>
        </div>
        <div class="step"><span class="num">2</span><img src="Images/files.png" alt="">
          <h3>Research-<br>led questions</h3>
          <p>Clear purpose and public relevance</p>
        </div>
        <div class="step"><span class="num">3</span><img src="Images/people.png" alt="">
          <h3>Richer public<br>input</h3>
          <p>Written, voice and video responses</p>
        </div>
        <div class="step"><span class="num">4</span><img src="Images/insights.png" alt="">
          <h3>Independent<br>analysis</h3>
          <p>Results interpreted for public policy</p>
        </div>
      </div>
      <div class="survey-all"><a href="https://syedshayan.com/under-construction-page"><span class="survey-all-text">VIEW ALL SURVEYS</span><span class="survey-all-arrow" aria-hidden="true">→</span></a></div>
    </section>

    <!-- DIGITAL LIBRARY — supplied final artwork -->
    <section id="digital-library-pdfmatch" class="digital-library-image-section" aria-label="Digital Library">
      <img
        src="Images/Group.png"
        alt="Digital Library — Ebooks and Publications"
        class="digital-library-group-image"
        loading="lazy">

      <!-- Exact clickable area over the Explore Ebooks button already present in Group.png -->
      <a href="under-construction-page"
         class="digital-library-explore-hitbox"
         aria-label="Explore Ebooks - Under Construction"
         title="Explore Ebooks"></a>
    </section>
  </div>

  <!-- PDF spacing: Housing Societies begins lower after Digital Library -->
  <div class="pdf-housing-spacer block lg:hidden" aria-hidden="true"></div>

  <!-- HOUSING SOCIETIES / MODEL TOWN — same order as PDF -->
  <div class="pdf-housing-mobile block lg:hidden w-full">
    <section id="trigger-section" class="hs-section max-w-4xl mx-auto py-6 px-2 font-sans bg-cover bg-center relative"
      style="background-image: url('Images/modal-bg-1.png');">
      <div class="absolute inset-0 bg-white/5 backdrop-blur-[1px]"></div>

      <div
        class="hs-glass-card relative z-10 max-w-2xl mx-auto p-2 md:p-6 border border-white/80 rounded-[20px] shadow-lg bg-white/5 backdrop-blur-[2px] overflow-hidden">

        <div class="text-center mb-4">
          <div class="hs-badge flex items-center justify-center gap-2 mb-1">
            <div class="h-[0.5px] w-6 bg-gray-400"></div>
            <span class="text-[#c5a059] text-[11px] font-semibold uppercase tracking-widest">Research Series</span>
            <div class="h-[0.5px] w-6 bg-gray-400"></div>
          </div>

          <h2 class="hs-title text-[18px] md:text-3xl font-black text-[#1a4a7c] uppercase leading-none tracking-tight">
            Housing Societies
          </h2>

          <div class="hs-subtitle flex items-center justify-center gap-3 mt-1.5">
            <div class="h-[1px] w-8 md:w-12 bg-[#c5a059]"></div>
            <span class="text-[#1a4a7c] text-[11px] md:text-[16px] font-bold uppercase tracking-widest">Of
              Pakistan</span>
            <div class="h-[1px] w-8 md:w-12 bg-[#c5a059]"></div>
          </div>

          <p class="hs-desc text-gray-600 text-[11px] md:text-xs max-w-xs mx-auto leading-tight">
            Researching the planning models shaping Pakistan’s modern residential communities.
          </p>
        </div>

        <div class="grid grid-cols-2 gap-2">
          <a href="model-town-lahore"
            class="hs-card hs-card-left delay-1 hs-card-hover group bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100 flex flex-col">
            <div class="h-20 md:h-28 overflow-hidden">
              <img src="Images/modal-town-13.png" alt="Model Town" class="w-full h-full object-cover">
            </div>
            <div class="p-2 text-left">
              <p class="text-[#c5a059] text-[11px] md:text-[12px] font-normal leading-none">Cooperative Housing <br>
                Model</p>
              <h3
                class="text-[#1a4a7c] font-normal text-[11px] md:text-[13px] uppercase mt-0.5 underline decoration-1 underline-offset-2">
                MODEL TOWN Lahore</h3>
            </div>
          </a>

          <a href="under-construction-page"
            class="hs-card hs-card-right delay-2 hs-card-hover group bg-white rounded-lg shadow-sm overflow-hidden border border-gray-100 flex flex-col">
            <div class="h-20 md:h-28 overflow-hidden">
              <img src="Images/islamabad-1.png" alt="Islamabad" class="w-full h-full object-cover">
            </div>
            <div class="p-2 text-left">
              <p class="text-[#c5a059] text-[11px] md:text-[12px] font-normal leading-none">Sector Planning<br> Model
              </p>
              <h3
                class="text-[#1a4a7c] font-normal text-[11px] md:text-[13px] uppercase mt-0.5 underline decoration-1 underline-offset-2">
                ISLAMABAD</h3>
            </div>
          </a>

          <a href="under-construction-page"
            class="hs-card hs-card-left delay-3 hs-card-hover bg-white/90 p-2 md:p-3 rounded-md border border-white/60 hover:bg-white text-left block">
            <p class="text-[#c5a059] text-[11px] md:text-[12px] font-normal leading-none">Authority Development <br>
              Model</p>
            <h3
              class="text-[#1a4a7c] font-normal text-[11px] md:text-[13px] uppercase mt-0.5 underline decoration-1 underline-offset-2">
              DHA Pakistan</h3>
          </a>

          <a href="under-construction-page"
            class="hs-card hs-card-right delay-4 hs-card-hover bg-white/90 p-2 md:p-3 rounded-md border border-white/60 hover:bg-white text-left block">
            <p class="text-[#c5a059] text-[11px] md:text-[12px] font-normal leading-none">Private Sector Development
              Model</p>
            <h3
              class="text-[#1a4a7c] font-normal text-[11px] md:text-[13px] uppercase mt-0.5 underline decoration-1 underline-offset-2">
              BAHRIA TOWN Pakistan</h3>
          </a>

          <a href="under-construction-page"
            class="hs-card hs-card-left delay-5 hs-card-hover bg-white/90 p-2 md:p-3 rounded-md border border-white/60 hover:bg-white text-left block">
            <p class="text-[#c5a059] text-[11px] md:text-[12px] font-normal leading-none">Municipal Planning Model</p>
            <h3
              class="text-[#1a4a7c] font-normal text-[11px] md:text-[13px] uppercase mt-0.5 leading-snug underline decoration-1 underline-offset-2">
              SATELLITE TOWN <br> Rawalpindi</h3>
          </a>

          <a href="under-construction-page"
            class="hs-card hs-card-right delay-6 hs-card-hover bg-white/90 p-2 md:p-3 rounded-md border border-white/60 hover:bg-white text-left block">
            <p class="text-[#c5a059] text-[11px] md:text-[12px] font-normal leading-none">Urban Growth Model</p>
            <h3
              class="text-[#1a4a7c] font-normal text-[11px] md:text-[13px] uppercase mt-0.5 leading-snug underline decoration-1 underline-offset-2">
              Community Expansion Patterns</h3>
          </a>

          <a href="under-construction-page"
            class="hs-card hs-card-left delay-7 hs-card-hover bg-white/90 p-2 md:p-3 rounded-md border border-white/60 hover:bg-white text-left block">
            <p class="text-[#c5a059] text-[11px] md:text-[12px] font-normal leading-none">Lahore &amp; Historic Cities</p>
            <h3
              class="text-[#1a4a7c] font-normal text-[11px] md:text-[13px] uppercase mt-0.5 leading-snug underline decoration-1 underline-offset-2">
              HISTORIC WALLED<br>CITY MODEL</h3>
          </a>

          <a href="under-construction-page"
            class="hs-card hs-card-right delay-8 hs-card-hover bg-white/90 p-2 md:p-3 rounded-md border border-white/60 hover:bg-white text-left block">
            <p class="text-[#c5a059] text-[11px] md:text-[12px] font-normal leading-none">Punjab &amp; Sindh Villages</p>
            <h3
              class="text-[#1a4a7c] font-normal text-[11px] md:text-[13px] uppercase mt-0.5 leading-snug underline decoration-1 underline-offset-2">
              RURAL SETTLEMENT<br>MODEL</h3>
          </a>
        </div>

        <div class="hs-footer-link mt-4 text-right">
          <a href="living-communities"
            class="text-[#c5a059] font-semibold italic text-[11px] md:text-[11px] tracking-widest uppercase">
            Explore the study >>>
          </a>
        </div>
      </div>
    </section>
  </div>

  <!-- MOBILE VERSION - Only for mobile screens -->
  <div class="block lg:hidden max-w-8xl mx-auto mt-[10px] px-4">
    <div class="flex flex-col gap-2">

      <!-- MOBILE TOP TWO CARDS REMOVED: Electricity System + New Provinces Proposal -->








      <style>
      
      @media (max-width: 700px) {
  .research-policy-mobile-wrap {
    margin-top: -20px !important;
  }
}
      
        /* Base states (Hidden before scroll) */
        .hs-section,
        .hs-glass-card,
        .hs-badge,
        .hs-title,
        .hs-subtitle,
        .hs-desc,
        .hs-card,
        .hs-footer-link {
          opacity: 0;
          will-change: transform, opacity;
        }

        /* Trigger class added by JS */
        .animate-now {
          opacity: 1 !important;
        }

        /* Main section fade */
        .animate-now.hs-section {
          animation: sectionFade 1s ease-out both;
        }

        @keyframes sectionFade {
          from {
            opacity: 0;
            transform: translateY(20px);
          }

          to {
            opacity: 1;
            transform: translateY(0);
          }
        }

        /* Glass card coming from top */
        .animate-now .hs-glass-card {
          animation: slideDown 0.9s ease-out both;
        }

        @keyframes slideDown {
          from {
            opacity: 0;
            transform: translateY(-40px);
          }

          to {
            opacity: 1;
            transform: translateY(0);
          }
        }

        /* Heading animations */
        .animate-now .hs-badge,
        .animate-now .hs-title,
        .animate-now .hs-subtitle,
        .animate-now .hs-desc,
        .animate-now .hs-footer-link {
          animation: fadeUp 0.8s ease-out forwards;
        }

        .animate-now .hs-badge {
          animation-delay: 0.2s;
        }

        .animate-now .hs-title {
          animation-delay: 0.35s;
        }

        .animate-now .hs-subtitle {
          animation-delay: 0.5s;
        }

        .animate-now .hs-desc {
          animation-delay: 0.65s;
        }

        .animate-now .hs-footer-link {
          animation-delay: 1.2s;
        }

        @keyframes fadeUp {
          from {
            opacity: 0;
            transform: translateY(18px);
          }

          to {
            opacity: 1;
            transform: translateY(0);
          }
        }

        /* Grid cards animation */
        .animate-now .hs-card {
          animation-duration: 0.8s;
          animation-fill-mode: forwards;
          animation-timing-function: ease-out;
        }

        .animate-now .hs-card-left {
          animation-name: slideInLeft;
        }

        .animate-now .hs-card-right {
          animation-name: slideInRight;
        }

        @keyframes slideInLeft {
          from {
            opacity: 0;
            transform: translateX(-35px) translateY(20px);
          }

          to {
            opacity: 1;
            transform: translateX(0) translateY(0);
          }
        }

        @keyframes slideInRight {
          from {
            opacity: 0;
            transform: translateX(35px) translateY(20px);
          }

          to {
            opacity: 1;
            transform: translateX(0) translateY(0);
          }
        }

        /* Stagger delays */
        .delay-1 {
          animation-delay: 0.25s;
        }

        .delay-2 {
          animation-delay: 0.35s;
        }

        .delay-3 {
          animation-delay: 0.45s;
        }

        .delay-4 {
          animation-delay: 0.55s;
        }

        .delay-5 {
          animation-delay: 0.65s;
        }

        .delay-6 {
          animation-delay: 0.75s;
        }

        .delay-7 {
          animation-delay: 0.85s;
        }

        .delay-8 {
          animation-delay: 0.95s;
        }

        /* Hover effects */
        .hs-card-hover {
          transition: transform 0.35s ease, box-shadow 0.35s ease, background-color 0.35s ease;
        }

        .hs-card-hover:hover {
          transform: translateY(-6px) scale(1.02);
          box-shadow: 0 12px 30px rgba(26, 74, 124, 0.15);
        }

        .hs-card-hover img {
          transition: transform 0.5s ease;
        }

        .hs-card-hover:hover img {
          transform: scale(1.06);
        }

        .hs-footer-link a {
          position: relative;
          display: inline-block;
          transition: transform 0.3s ease, color 0.3s ease;
        }

        .hs-footer-link a:hover {
          transform: translateX(6px);
          color: #1a4a7c;
        }

        /* Optional floating glow */
        .hs-glass-card::before {
          content: "";
          position: absolute;
          top: -40%;
          left: -40%;
          width: 76%;
          height: 180%;
          background: linear-gradient(120deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.18) 50%, rgba(255, 255, 255, 0) 100%);
          transform: rotate(18deg);
          animation: shineMove 5s linear infinite;
          pointer-events: none;
        }

        @keyframes shineMove {
          0% {
            transform: translateX(-120%) rotate(18deg);
          }

          100% {
            transform: translateX(220%) rotate(18deg);
          }
        }

        @media (prefers-reduced-motion: reduce) {

          .hs-section,
          .hs-glass-card,
          .hs-badge,
          .hs-title,
          .hs-subtitle,
          .hs-desc,
          .hs-footer-link,
          .hs-card {
            animation: none !important;
            opacity: 1 !important;
            transform: none !important;
          }
        }
      </style>



      <script>
        // Intersection Observer to trigger animations on scroll
        document.addEventListener('DOMContentLoaded', function () {
          const section = document.getElementById('trigger-section');

          const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
              if (entry.isIntersecting) {
                // Add class to start animation
                entry.target.classList.add('animate-now');
              } else {
                // Optional: Remove class if you want animation to repeat when scrolling back down
                entry.target.classList.remove('animate-now');
              }
            });
          }, { threshold: 0.2 }); // Trigger when 20% of section is visible

          observer.observe(section);
        });
      </script>

      
          <style>
            .day-scroll-box {
              overflow: hidden;
              height: 16px;
            }

            .date-scroll-box {
              overflow: hidden;
              height: 32px;
            }

            @media (min-width: 768px) {
              .day-scroll-box {
                height: 18px;
              }

              .date-scroll-box {
                height: 38px;
              }
            }

            @media (min-width: 1024px) {
              .day-scroll-box {
                height: 20px;
              }

              .date-scroll-box {
                height: 42px;
              }
            }

            .run-calendar-anim {
              animation: calendar-slide-up 1.2s cubic-bezier(0.65, 0, 0.35, 1) forwards;
            }

            @keyframes calendar-slide-up {
              0% {
                transform: translateY(0);
                opacity: 0;
              }

              20% {
                opacity: 1;
              }

              100% {
                transform: translateY(-50%);
              }
            }
          </style>

          <!--<a href="/on-this-date/2026-09-27" id="history-card"-->
          <!--  class=" my-[8px] relative bg-gradient-to-b from-white/80 to-gray-200/50 border border-gray-300 shadow-md rounded-2xl hover:shadow-lg transition-all duration-300 w-full h-auto min-h-[200px] overflow-hidden flex items-center p-4 gap-4"-->
          <!--  style="background-image: url('Images/otd-bg-12.png'); background-size: 100% 100%; background-position: center; background-repeat: no-repeat; background-blend-mode: overlay;">-->

          <!--  <div class="flex-shrink-0 w-[110px] flex flex-col overflow-hidden">-->
          <!--    <p class="text-[11px] font-semibold">www.onthisdate.pk</p>-->
          <!--    <div class="h-[65px] w-full overflow-hidden">-->
          <!--      <img src="Images/on-this-date-2007-1790425655-52b974.jpg" alt="History"-->
          <!--        class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">-->
          <!--    </div>-->
          <!--    <div class="py-1">-->
          <!--      <div class="flex flex-col">-->
          <!--        <span-->
          <!--          class="text-[#06846b] text-[11px] font-semibold uppercase mb-0.5">27 SEPTEMBER 2007</span>-->
          <!--        <span-->
          <!--          class="text-[11px] leading-tight uppercase text-black whitespace-normal break-words">SEPTEMBER 27, 2007: THE U.S. HOUSING MARKET SIGNALS A CRISIS THAT WOULD RESHAPE GLOBAL REAL ESTATE</span>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--  </div>-->

          <!--  <div class="flex flex-col flex-grow items-center justify-center border-l border-gray-200 pl-3">-->
          <!--    <div class="flex items-center justify-start w-full gap-[5px]">-->
          <!--      <div class="flex flex-col items-start leading-[0.9] mt-3 border-l-3 border-[#dfbf72]">-->
          <!--        <span class="font-extrabold text-[23px] text-[#06846b]">ON</span>-->
          <!--        <span class="font-extrabold text-[23px] text-[#06846b]">THIS</span>-->
          <!--        <span class="font-extrabold text-[23px] text-[#06846b]">DATE</span>-->
          <!--      </div>-->

          <!--      <div class="relative w-[110px] h-[110px] md:w-[90px] md:h-[90px] lg:w-[110px] lg:h-[110px] flex-shrink-0">-->
          <!--        <img src="Images/otd-calender.png" alt="Calendar" class="w-full h-full ml-1 object-contain">-->

          <!--        <div class="absolute top-[32px] md:top-[12px] lg:top-[16px] left-0 right-0 text-center day-scroll-box">-->
          <!--          <div class="calendar-anim-element flex flex-col">-->
          <!--            <span-->
          <!--              class="text-[11px] md:text-[11px] lg:text-[13px] font-semibold text-[#6b4f2a] tracking-wide h-[16px] md:h-[18px] lg:h-[20px] flex items-center justify-center"-->
          <!--              style="font-family: 'Playfair Display', serif;">-->
          <!--              Sunday-->
          <!--            </span>-->
          <!--            <span-->
          <!--              class="text-[11px] md:text-[11px] lg:text-[13px] font-semibold text-[#6b4f2a] tracking-wide h-[16px] md:h-[18px] lg:h-[20px] flex items-center justify-center"-->
          <!--              style="font-family: 'Playfair Display', serif;">-->
          <!--              Monday-->
          <!--            </span>-->
          <!--          </div>-->
          <!--        </div>-->

          <!--        <div class="absolute top-[43px] md:top-[36px] lg:top-[46px] left-0 right-0 text-center date-scroll-box">-->
          <!--          <div class="calendar-anim-element flex flex-col">-->
          <!--            <span-->
          <!--              class="text-[20px] md:text-[26px] lg:text-[32px] font-bold text-[#4a2f14] leading-none h-[32px] md:h-[38px] lg:h-[42px] flex items-center justify-center">-->
          <!--              27-->
          <!--            </span>-->
          <!--            <span-->
          <!--              class="text-[20px] md:text-[26px] lg:text-[32px] font-bold text-[#4a2f14] leading-none h-[32px] md:h-[38px] lg:h-[42px] flex items-center justify-center">-->
          <!--              28-->
          <!--            </span>-->
          <!--          </div>-->
          <!--        </div>-->

          <!--        <div class="absolute bottom-[24px] md:bottom-[12px] lg:bottom-[16px] left-0 right-0 text-center">-->
          <!--          <span class="text-[11px] md:text-[11px] lg:text-[13px] font-bold text-[#6b4f2a] tracking-wider"-->
          <!--            style="font-family: 'Playfair Display', serif;">-->
          <!--            September-->
          <!--          </span>-->
          <!--        </div>-->
          <!--      </div>-->
          <!--    </div>-->

          <!--    <div class="-mt-2 text-left w-full">-->
          <!--      <p class="text-[11px] text-gray-500">Tracing the Marks of the Past</p>-->
          <!--      <p class="text-[11px] font-medium text-[#043E6B] leading-tight">Syed Shayan <br>Real Estate Archive</p>-->
          <!--      <p class="text-[11px] mt-2 text-[#D7A93A] italic">Explore more >>></p>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</a>-->

          <script>
            const calendarObserver = new IntersectionObserver((entries) => {
              entries.forEach(entry => {
                const elements = entry.target.querySelectorAll('.calendar-anim-element');
                if (entry.isIntersecting) {
                  elements.forEach(el => el.classList.add('run-calendar-anim'));
                } else {
                  elements.forEach(el => el.classList.remove('run-calendar-anim'));
                }
              });
            }, { threshold: 0.2 });
            calendarObserver.observe(document.getElementById('history-card'));
          </script>

                <div class="block md:hidden max-w-8xl mx-auto ">
        <div class="flex flex-col gap-6">

          <!--<a href="https://renews.pk/" target="_blank" rel="noopener noreferrer" class="group block no-underline">-->
          <!--  <div-->
          <!--    class="bg-white border border-gray-200 shadow-xl rounded-2xl hover:shadow-2xl transition-all duration-300 w-full overflow-hidden flex flex-col cursor-pointer px-5 py-10 min-h-[160px] justify-center">-->

          <!--    <div class="flex items-center gap-2">-->
          <!--      <div class="flex flex-col items-center flex-shrink-0 w-[100px]">-->
          <!--        <div class="relative mb-1">-->
          <!--          <img src="Images/renews (2).png" alt="RE News Logo" onerror="this.onerror=null;this.src='Images/ss-main-logo.png';" class="w-full h-auto object-contain">-->
          <!--        </div>-->

          <!--        <span-->
          <!--          class="bg-gradient-to-t from-[#650303] via-[#CB0606] to-[#CB0606] text-white text-[12px] font-bold px-5 py-0.5 rounded-full shadow-md tracking-tight">-->
          <!--          renews.pk-->
          <!--        </span>-->
          <!--      </div>-->

          <!--      <div class="w-[1px] h-[100px] bg-gradient-to-b from-transparent via-gray-300 to-transparent ml-2 mr-1">-->
          <!--      </div>-->

          <!--      <div class="flex flex-col justify-center">-->
          <!--        <h3 class="text-[#b22222] italic font-normal text-[13px] leading-tight mb-1"  style="font-weight: 700;">-->
          <!--          Pakistan's Online Real<br>Estate News Platform-->
          <!--        </h3>-->

          <!--        <h2 class="text-[#043E6B] font-semibold text-[14px] leading-[1.2] mb-2"  style="font-weight: 700;">-->
          <!--          Real Estate News and<br> Market Updates-->
          <!--        </h2>-->

          <!--        <div class="w-full h-[1px] bg-gray-200 mb-2"></div>-->

          <!--        <p class="text-gray-500 text-[11px] leading-snug" style="font-weight: 600;">-->
          <!--          Covering National, City, Corporate and Global Real Estate-->
          <!--        </p>-->
          <!--      </div>-->
          <!--    </div>-->

          <!--  </div>-->
          <!--</a>-->

        </div>
      </div>

    </div>
  </div>

  <!-- ================= DATE SCRIPT ================= -->
  <script>
    const today = new Date();
    document.getElementById('day-name').textContent =
      today.toLocaleDateString('en-US', { weekday: 'long' });
    document.getElementById('day-number').textContent = today.getDate();
    document.getElementById('month-name').textContent =
      today.toLocaleDateString('en-US', { month: 'long' });
  </script>
  <!-- <section class="block sm:hidden bg-gray-50 py-4 px-4">-->
  <!--  <div class="max-w-[1050px] mx-auto grid grid-cols-1 lg:grid-cols-1 gap-6 justify-items-center">-->

  <!--<a href="model-town-lahore" class=" hidden md:flex group flex bg-[#fafafa] rounded-md shadow-sm overflow-hidden border border-gray-200 w-full max-w-[460px] min-h-[90px] sm:min-h-[165px] transition-transform hover:scale-[1.01] hover:shadow-md">-->
  <!--  <div class="w-[55%] relative">-->
  <!--    <img src="Images/modal-town-13.png" alt="Archive" class="w-full h-full object-cover">-->
  <!--  </div>-->
  <!--  <div class="w-[45%] p-4 flex flex-col justify-between relative before:content-[''] before:absolute before:left-0 before:top-1/2 before:-translate-y-1/2 before:h-[70%] before:w-[3px] before:bg-[#D7A93A]">-->
  <!--    <div>-->
  <!--      <h2 class="text-[#0a3d7a] text-lg font-semibold leading-tight">Model Town Lahore</h2>-->
  <!--      <h3 class="text-[#D7A93A] text-sm font-semibold mb-1">Digital Archive</h3>-->
  <!--      <p class="text-gray-600 text-[11px] leading-snug">-->
  <!--        Access and explore <span class="font-bold text-gray-800">Model Town Lahore's</span> Extensive digital record and archives-->
  <!--      </p>-->
  <!--    </div>-->
  <!--    <div class="text-right mt-2">-->
  <!--      <span class="text-[#0a3d7a] italic text-[11px] font-bold group-hover:underline">-->
  <!--        Enter digital Archive <span class="tracking-tighter">>>></span>-->
  <!--      </span>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</a>-->

  <!--    <a href="real-estate_index.php"-->
  <!--      class="group flex bg-[#fafafa] rounded-md shadow-sm overflow-hidden border border-gray-200 w-full max-w-[460px] min-h-[165px] p-4 transition-transform hover:scale-[1.01] hover:shadow-md">-->
  <!--      <div-->
  <!--        class="w-[40%] flex items-center justify-center relative pr-3 before:content-[''] before:absolute before:right-0 before:top-1/2 before:-translate-y-1/2 before:h-[70%] before:w-[2px] before:bg-[#D7A93A]">-->
  <!--        <img src="Images/re-index-1.png" alt="Index Icon" class="w-[170px] h-auto object-contain">-->
  <!--      </div>-->

  <!--      <div class="w-[60%] pl-4 flex flex-col justify-center border-l-[1px] border-gray-100">-->
  <!--        <h2 class="text-[#0a3d7a] text-lg font-semibold">Real Estate Index</h2>-->
  <!--        <p class="text-gray-500 text-[11px] mt-0.5 mb-3 leading-tight">-->
  <!--          Tracking Pakistan's Real Estate<br>trends in just one click-->
  <!--        </p>-->

  <!--        <div class="grid grid-cols-2 sm:mr-10 gap-1.5">-->
  <!--          <span class="bg-[#0a3d7a] text-white text-[11px] py-1.5 px-2 rounded-sm flex items-center gap-1">-->
  <!--            <i class="fas fa-chart-line text-[11px]"></i> Indicators-->
  <!--          </span>-->
  <!--          <span class="bg-[#0a3d7a] text-white text-[11px] py-1.5 px-2 rounded-sm flex items-center gap-1">-->
  <!--            <i class="fas fa-chart-bar text-[11px]"></i> Reports-->
  <!--          </span>-->
  <!--          <span class="bg-[#0a3d7a] text-white text-[11px] py-1.5 px-2 rounded-sm flex items-center gap-1">-->
  <!--            <i class="fas fa-th-large text-[11px]"></i> Dashboard-->
  <!--          </span>-->
  <!--          <span class="bg-[#0a3d7a] text-white text-[11px] py-1.5 px-2 rounded-sm flex items-center gap-1">-->
  <!--            <i class="fas fa-clipboard-list text-[11px]"></i> Surveys-->
  <!--          </span>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--    </a>-->



  <!--    <a href="research-report" style=" padding: 0px 6px; max-width: 460px; " class=" mbladsgvdbgdafbvdcbv">-->
  <!--      <img src="uploads/ipps-report-new-banner2.jpg.jpeg" onerror="this.onerror=function(){this.onerror=null;this.src='Images/ss-main-logo.png';};this.src='uploads/khamba.png';" alt="Electricity Infrastructure" class="w-full">-->
  <!-- BACKGROUND IMAGE -->
  <!--<img src="uploads/khamba.png" -->
  <!--     alt="Electricity Infrastructure"-->
  <!--     class="absolute inset-0 w-full h-full object-cover">-->

  <!-- DARK OVERLAY (for readability) -->
  <!--<div class="absolute inset-0 bg-black/60 group-hover:bg-black/50 transition"></div>-->

  <!-- CONTENT -->
  <!--<div class="relative z-10 p-4 text-white">-->

  <!-- HEADER -->
  <!--    <div class="mb-2 flex items-center gap-2">-->

  <!-- ICON -->
  <!--        <div class="flex-shrink-0 bg-white/20 backdrop-blur rounded-full p-1.5">-->
  <!--            <img src="uploads/search.png" -->
  <!--                 alt="search"-->
  <!--                 class="h-5 w-5">-->
  <!--        </div>-->

  <!--        <div class="flex-1">-->
  <!--            <h5 class="text-[11px] font-bold uppercase tracking-wider leading-none text-gray-200">-->
  <!--                National Inquiry Series-->
  <!--            </h5>-->
  <!--            <p class="text-[11px] text-blue-300 font-semibold group-hover:underline">-->
  <!--                Research Report-->
  <!--            </p>-->
  <!--        </div>-->
  <!--    </div>-->

  <!-- TITLE -->
  <!--    <div class="mb-3">-->
  <!--        <h3 class="text-md font-bold leading-tight group-hover:text-blue-200 transition">-->
  <!--            Pakistan’s Electricity System: -->
  <!--            <span class="text-gray-300 font-medium">-->
  <!--                Pathways to Structural Reform-->
  <!--            </span>-->
  <!--        </h3>-->
  <!--    </div>-->

  <!-- FOOTER -->
  <!--    <div class="flex items-center justify-between border-t border-white/20 pt-2 mt-2">-->
  <!--        <span class="text-xs font-bold text-gray-200">-->
  <!--            Read Report-->
  <!--        </span>-->

  <!--        <div class="bg-white/20 p-1.5 rounded-full group-hover:bg-blue-500 transition">-->
  <!--            <svg class="h-4 w-4 text-white transform group-hover:translate-x-1 transition" -->
  <!--                 fill="none" stroke="currentColor" viewBox="0 0 24 24">-->

  <!--                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" -->
  <!--                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>-->
  <!--            </svg>-->
  <!--        </div>-->
  <!--    </div>-->

  <!--</div>-->
  <!--    </a>-->



  <!--  </div>-->
  <!--</section>-->
  <!--Media & Research Hub desktop section -->
  <section class="hidden w-full bg-white py-10 sm:block sm:py-12">

    <div class="mx-auto max-w-[1180px] px-4 sm:px-6 lg:px-8">

      <!-- Heading -->
      <div class="mb-7">
        <h2 class="text-2xl font-semibold text-[#052945]">
          Media &amp; Research Hub
        </h2>

        <div class="mt-2 h-[3px] w-12 rounded-full bg-[#c59420]"></div>
      </div>


      <!-- Main Layout -->
      <div class="grid grid-cols-1 gap-5 lg:grid-cols-[1.05fr_1.95fr]">

        <!-- Newsroom -->
        <a href="bulletin-news.php" class="group relative min-h-[360px]
                       overflow-hidden rounded-[20px]
                       shadow-[0_14px_40px_rgba(5,41,69,0.20)]
                       sm:min-h-[440px]">

          <img src="Images/news.png" alt="Newsroom" class="absolute inset-0 block h-full w-full object-cover
                           transition duration-700 group-hover:scale-105
                           lg:hidden">

          <!-- Large Screen / Desktop Image -->
          <img src="Images/news-desktop.png" alt="Newsroom" class="absolute inset-0 hidden h-full w-full object-cover
                           transition duration-700 group-hover:scale-105
                           lg:block">

          <div class="absolute inset-0
                           bg-gradient-to-t
                           from-[#031d30]
                           via-[#052945]/45
                           to-transparent"></div>

          <div class="absolute inset-x-0 bottom-0 p-5 sm:p-7">

            <h3 class="text-[24px] font-bold leading-tight
                               text-white sm:text-[30px]">
              Newsroom
            </h3>

            <p class="mt-2 max-w-[420px]
                               text-[12px] leading-5 text-white/80
                               sm:text-[14px] sm:leading-6">
              Digital real estate news, verified updates, and continuous market coverage.
            </p>

            <span class="mt-5 inline-flex items-center gap-2
                               rounded-sm bg-[#043E6B]
                               px-4 py-2
                               text-[11px] font-semibold uppercase
                               tracking-[0.12em] text-white">
              Explore

              <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 transition-transform
                                   duration-300 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
              </svg>
            </span>

          </div>

        </a>


        <!-- Right Cards -->
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">

          <!-- Research Reports -->
          <a href="research-reporter" class="group flex min-h-[260px] flex-col
                           overflow-hidden rounded-[18px]
                           border border-slate-200 bg-white
                           shadow-[0_8px_24px_rgba(15,23,42,0.09)]
                           transition duration-300
                           hover:-translate-y-1
                           hover:border-[#c59420]/60
                           hover:shadow-[0_14px_32px_rgba(15,23,42,0.14)]">

            <div class="h-[145px] overflow-hidden">
              <img src="Images/reports1.png" alt="Research Reports" class="h-full w-full object-cover
                                   transition duration-500
                                   group-hover:scale-105">
            </div>

            <div class="flex flex-1 flex-col p-4 sm:p-5">

              <h3 class="text-[17px] font-bold text-[#052945]">
                Research Reports
              </h3>

              <p class="mt-2 line-clamp-2
                                   text-[11px] leading-5 text-slate-500
                                   sm:text-[12px]">
                Evidence based studies, surveys, and analytical market research.
              </p>

              <div class="mt-auto flex justify-end pt-4">
                <span class="inline-flex items-center gap-1.5
                                       rounded-sm bg-[#043E6B]
                                       px-4 py-1.5
                                       text-[11px] font-semibold uppercase
                                       tracking-[0.12em] text-white">
                  Explore

                  <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 transition-transform
                                           duration-300 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                  </svg>
                </span>
              </div>

            </div>

          </a>


          <!-- TV & Documentaries -->
          <a href="tv-documentary" class="group flex min-h-[260px] flex-col
                           overflow-hidden rounded-[18px]
                           border border-slate-200 bg-white
                           shadow-[0_8px_24px_rgba(15,23,42,0.09)]
                           transition duration-300
                           hover:-translate-y-1
                           hover:border-[#c59420]/60
                           hover:shadow-[0_14px_32px_rgba(15,23,42,0.14)]">

            <div class="h-[145px] overflow-hidden">
              <img src="Images/tv1.png" alt="TV and Documentaries" class="h-full w-full object-cover
                                   transition duration-500
                                   group-hover:scale-105">
            </div>

            <div class="flex flex-1 flex-col p-4 sm:p-5">

              <h3 class="text-[17px] font-bold text-[#052945]">
                TV &amp; Documentaries
              </h3>

              <p class="mt-2 line-clamp-2
                                   text-[11px] leading-5 text-slate-500
                                   sm:text-[12px]">
                Original programmes, visual analysis, and documentary features.
              </p>

              <div class="mt-auto flex justify-end pt-4">
                <span class="inline-flex items-center gap-1.5
                                       rounded-sm bg-[#043E6B]
                                       px-4 py-1.5
                                       text-[11px] font-semibold uppercase
                                       tracking-[0.12em] text-white">
                  Explore

                  <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 transition-transform
                                           duration-300 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                  </svg>
                </span>
              </div>

            </div>

          </a>


          <!-- Podcast -->
          <a href="podcast-home" class="group flex min-h-[260px] flex-col
                           overflow-hidden rounded-[18px]
                           border border-slate-200 bg-white
                           shadow-[0_8px_24px_rgba(15,23,42,0.09)]
                           transition duration-300
                           hover:-translate-y-1
                           hover:border-[#c59420]/60
                           hover:shadow-[0_14px_32px_rgba(15,23,42,0.14)]">

            <div class="h-[145px] overflow-hidden">
              <img src="Images/podcast1.png" alt="Podcast" class="h-full w-full object-cover
                                   transition duration-500
                                   group-hover:scale-105">
            </div>

            <div class="flex flex-1 flex-col p-4 sm:p-5">

              <h3 class="text-[17px] font-bold text-[#052945]">
                Podcast
              </h3>

              <p class="mt-2 line-clamp-2
                                   text-[11px] leading-5 text-slate-500
                                   sm:text-[12px]">
                Expert led discussions, interviews, and policy oriented conversations.
              </p>

              <div class="mt-auto flex justify-end pt-4">
                <span class="inline-flex items-center gap-1.5
                                       rounded-sm bg-[#043E6B]
                                       px-4 py-1.5
                                       text-[11px] font-semibold uppercase
                                       tracking-[0.12em] text-white">
                  Explore

                  <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 transition-transform
                                           duration-300 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                  </svg>
                </span>
              </div>

            </div>

          </a>


          <!-- Real Estate Education Series -->
          <a href="/research-educational-series" class="group flex min-h-[260px] flex-col
                           overflow-hidden rounded-[18px]
                           border border-slate-200 bg-white
                           shadow-[0_8px_24px_rgba(15,23,42,0.09)]
                           transition duration-300
                           hover:-translate-y-1
                           hover:border-[#c59420]/60
                           hover:shadow-[0_14px_32px_rgba(15,23,42,0.14)]">

            <div class="h-[145px] overflow-hidden">
              <img src="Images/real_estate.jpeg" alt="Real Estate Education Series" class="h-full w-full object-cover
                                   transition duration-500
                                   group-hover:scale-105">
            </div>

            <div class="flex flex-1 flex-col p-4 sm:p-5">

              <h3 class="text-[16px] font-bold
                                   leading-tight text-[#052945]">
                Research Educational Series
              </h3>

              <p class="mt-2 line-clamp-2
                                   text-[11px] leading-5 text-slate-500
                                   sm:text-[12px]">
                Structured learning on real estate fundamentals, strategy, and professional practice.
              </p>

              <div class="mt-auto flex justify-end pt-4">
                <span class="inline-flex items-center gap-1.5
                                       rounded-sm bg-[#043E6B]
                                       px-4 py-1.5
                                       text-[11px] font-semibold uppercase
                                       tracking-[0.12em] text-white">
                  Explore

                  <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 transition-transform
                                           duration-300 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                  </svg>
                </span>
              </div>

            </div>

          </a>

        </div>

      </div>

    </div>

  </section>

  <!--Media & Research Hub mobile section -->
  <section class="figma-media-mobile block sm:hidden mx-4 md:w-[60%] sm:mx-auto">
    <h2 class="text-2xl font-semibold text-[#052945] mb-1 ml-1">
      Media & Research Hub
    </h2>

    <div class="space-y-4">
      <a href="bulletin-news.php"
        class="flex items-start bg-[#fafafa] shadow-md rounded-sm border border-gray-100 overflow-hidden p-2 hover:bg-gray-50 transition cursor-pointer block">
        <img src="Images/news-room.png" class="w-28 sm:w-32 h-[80px] sm:h-20 object-cover shrink-0 rounded-sm"
          alt="Newsroom">
        <div class="flex flex-col px-4 py-1 flex-1">
          <h3 class="font-bold text-gray-800 text-sm sm:text-base leading-tight">Newsroom</h3>
          <p class="text-gray-500 text-[11px] sm:text-xs mt-1">Digital real estate news, verified updates, and
            continuous market coverage.</p>
          <div class="mt-2 sm:mt-auto flex justify-end">
            <span
              class="bg-[#043E6B] text-white px-4 py-1 text-[11px] uppercase tracking-wider rounded-sm hover:bg-[#032d4d] transition">Explore</span>
          </div>
        </div>
      </a>

      <a href="research-reporter.php"
        class="flex items-start bg-[#fafafa] shadow-md rounded-sm border border-gray-100 overflow-hidden p-2 hover:bg-gray-50 transition cursor-pointer block">
        <img src="Images/research-report.png" class="w-28 sm:w-32 h-[80px] sm:h-20 object-cover shrink-0 rounded-sm"
          alt="Research Reports">
        <div class="flex flex-col px-4 py-1 flex-1">
          <h3 class="font-bold text-gray-800 text-sm sm:text-base leading-tight">Research Reports</h3>
          <p class="text-gray-500 text-[11px] sm:text-xs mt-1"> Evidence based studies, surveys, and analytical market research.
            research.</p>
          <div class="mt-2 sm:mt-auto flex justify-end">
            <span
              class="bg-[#043E6B] text-white px-4 py-1 text-[11px] uppercase tracking-wider rounded-sm hover:bg-[#032d4d] transition">Explore</span>
          </div>
        </div>
      </a>

      <a href="/tv-documentary"
        class="flex items-start bg-[#fafafa] shadow-md rounded-sm border border-gray-100 overflow-hidden p-2 hover:bg-gray-50 transition cursor-pointer block">
        <img src="Images/remort.png" class="w-28 sm:w-32 h-[80px] sm:h-20 object-cover shrink-0 rounded-sm" alt="TV">
        <div class="flex flex-col px-4 py-1 flex-1">
          <h3 class="font-bold text-gray-800 text-sm sm:text-base leading-tight">TV & Documentaries</h3>
          <p class="text-gray-500 text-[11px] sm:text-xs mt-1">Original programmes, visual analysis, and documentary
            features.</p>
          <div class="mt-2 sm:mt-auto flex justify-end">
            <span
              class="bg-[#043E6B] text-white px-4 py-1 text-[11px] uppercase tracking-wider rounded-sm hover:bg-[#032d4d] transition">Explore</span>
          </div>
        </div>
      </a>

      <a href="podcast-home"
        class="flex items-start bg-[#fafafa] shadow-md rounded-sm border border-gray-100 overflow-hidden p-2 hover:bg-gray-50 transition cursor-pointer block">
        <img src="Images/laptop.png" class="w-28 sm:w-32 h-[80px] sm:h-20 object-cover shrink-0 rounded-sm"
          alt="Podcast">
        <div class="flex flex-col px-4 py-1 flex-1">
          <h3 class="font-bold text-gray-800 text-sm sm:text-base leading-tight">Podcast</h3>
          <p class="text-gray-500 text-[11px] sm:text-xs mt-1">Expert led discussions, interviews, and policy oriented
            conversations.</p>
          <div class="mt-2 sm:mt-auto flex justify-end">
            <span
              class="bg-[#043E6B] text-white px-4 py-1 text-[11px] uppercase tracking-wider rounded-sm hover:bg-[#032d4d] transition">Explore</span>
          </div>
        </div>
      </a>

      <a href="/research-educational-series"
        class="flex items-start bg-[#fafafa] shadow-md rounded-sm border border-gray-100 overflow-hidden p-2 hover:bg-gray-50 transition cursor-pointer block">
        <img src="Images/real_estate.jpeg" class="w-28 sm:w-32 h-[80px] sm:h-20 object-cover shrink-0 rounded-sm"
          alt="Education">
        <div class="flex flex-col px-4 py-1 flex-1">
          <h3 class="font-bold text-gray-800 text-sm sm:text-base leading-tight">Research Educational Series</h3>
          <p class="text-gray-500 text-[11px] sm:text-xs mt-1 leading-tight">Structured learning on real estate
            fundamentals, strategy, and professional practice.</p>
          <div class="mt-2 sm:mt-auto flex justify-end">
            <span
              class="bg-[#043E6B] text-white px-4 py-1 text-[11px] uppercase tracking-wider rounded-sm hover:bg-[#032d4d] transition">Explore</span>
          </div>
        </div>
      </a>
    </div>
  </section>

  
  <style>
    /* Hide scrollbar on mobile */
    .no-scrollbar::-webkit-scrollbar {
      display: none;
    }

    .no-scrollbar {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }

    .partner-divider {
      height: 80px;
      border-left: 1px solid #ccc;
      margin: 0 12px;
    }

    .partner-logo img {
      width: 80px;
      height: auto;
    }

    .partner-logo span {
      margin-top: 6px;
      font-size: 12px;
    }

    #partner-logos {
      position: relative;
    }

    /* Left and right white fade */
    #partner-logos::before,
    #partner-logos::after {
      content: "";
      position: absolute;
      top: 0;
      bottom: 0;
      width: 75px;
      z-index: 10;
      pointer-events: none;
    }

    /* Left side: white se transparent */
    #partner-logos::before {
      left: 0;
      background: linear-gradient(to right,
          #ffffff 0%,
          rgba(255, 255, 255, 0.85) 30%,
          rgba(255, 255, 255, 0) 100%);
    }

    /* Right side: transparent se white */
    #partner-logos::after {
      right: 0;
      background: linear-gradient(to right,
          rgba(255, 255, 255, 0) 0%,
          rgba(255, 255, 255, 0.85) 70%,
          #ffffff 100%);
    }

    /* Mobile */
    @media (max-width: 640px) {

      #partner-logos::before,
      #partner-logos::after {
        width: 45px;
      }
    }
  </style>

  <!-- =========================================================
       PART OF SYEDSHAYAN.COM
       Only 3 active platforms:
       1) Free Media News
       2) On This Date
       3) Shehrbeen
       Other previous partner items are intentionally commented.
  ========================================================== -->

  
  <section class="syed-network-section" aria-label="Part of SyedShayan.com">
    <div class="syed-network-wrap">

      <div class="syed-network-heading">
        <div class="syed-network-heading-top">
          <span class="syed-network-heading-line"></span>
          <h2>PART OF</h2>
          <span class="syed-network-heading-line"></span>
        </div>
        <div class="syed-network-brand">SyedShayan.com</div>
      </div>

      <div class="syed-network-marquee">
        <div id="syedNetworkTrack" class="syed-network-grid syed-network-track">
        <!-- FREE MEDIA NEWS -->
        <a href="https://www.freemedianews.pk/" target="_blank" rel="noopener noreferrer"
           class="syed-network-item" aria-label="Visit Free Media News">
          <div class="syed-network-logo-box">
            <img src="Images/updated logo.png" alt="Free Media News" class="syed-network-free-media-logo">
          </div>
          <div class="syed-network-url-pill">www.freemedianews.pk <span>›</span></div>
        </a>

<!-- ON THIS DATE -->
<a href="https://syedshayan.com/on-this-date/" target="_blank" rel="noopener noreferrer" 
   class="syed-network-item syed-network-item-middle" aria-label="Visit On This Date"> 

  <div class="syed-network-logo-box syed-network-otd-logo-box"> 
    <div class="syed-network-otd-icon-wrap"> 

      <img 
        src="Images/on-this-date.png" 
        alt="On This Date" 
        class="syed-network-otd-icon"
      >

      <!-- Calendar Background -->
      <img 
        src="Images/otd-calender.png" 
        alt="" 
        aria-hidden="true"
        class="syed-network-otd-calendar-bg"
      >

      <div class="syed-network-otd-live-day"> 
        Monday 
      </div> 

      <div class="syed-network-otd-live-number"> 
        28 
      </div> 

      <div class="syed-network-otd-live-month"> 
        September 
      </div> 

    </div> 
  </div> 

  <div class="syed-network-url-pill">
    www.onthisdate.pk <span>›</span>
  </div> 
</a>

        <!-- SHEHRBEEN -->
        <a href="https://www.shehrbeen.com/" target="_blank" rel="noopener noreferrer"
           class="syed-network-item" aria-label="Visit Shehrbeen">
          <div class="syed-network-logo-box">
            <img src="https://syedshayan.com/Images/LOGO1%20(1).png" alt="Shehrbeen" class="syed-network-shehrbeen-logo">
          </div>
          <div class="syed-network-url-pill">www.shehrbeen.com <span>›</span></div>
        </a>
        </div>
      </div>

    </div>
  </section>

  <script>
    /* PART OF SYEDSHAYAN.COM — restore the previous smooth continuous animation */
    document.addEventListener('DOMContentLoaded', function () {
      const track = document.getElementById('syedNetworkTrack');
      if (!track || track.dataset.marqueeReady === 'true') return;

      const originalItems = Array.from(track.children).filter(function (item) {
        return item.classList.contains('syed-network-item');
      });

      if (!originalItems.length) return;

      /* Duplicate twice so the loop remains seamless on desktop, tablet and mobile. */
      for (let set = 0; set < 2; set++) {
        originalItems.forEach(function (item) {
          const clone = item.cloneNode(true);
          clone.setAttribute('aria-hidden', 'true');
          clone.setAttribute('tabindex', '-1');
          track.appendChild(clone);
        });
      }

      let loopDistance = 0;
      let offset = 0;
      let lastTime = 0;
      let rafId = null;
      let paused = false;

      function getSpeed() {
        if (window.innerWidth <= 480) return 28;
        if (window.innerWidth <= 760) return 32;
        return 38;
      }

      function measure() {
        const items = track.querySelectorAll('.syed-network-item');
        if (items.length <= originalItems.length) return;

        const firstOriginal = items[0];
        const firstClone = items[originalItems.length];
        loopDistance = firstClone.offsetLeft - firstOriginal.offsetLeft;

        if (loopDistance > 0) {
          offset = offset % loopDistance;
          track.style.transform = 'translate3d(' + (-offset) + 'px,0,0)';
        }
      }

      function frame(now) {
        if (!lastTime) lastTime = now;

        const delta = Math.min((now - lastTime) / 1000, 0.05);
        lastTime = now;

        if (!paused && loopDistance > 0) {
          offset += getSpeed() * delta;

          if (offset >= loopDistance) {
            offset -= loopDistance;
          }

          track.style.transform = 'translate3d(' + (-offset) + 'px,0,0)';
        }

        rafId = requestAnimationFrame(frame);
      }

      requestAnimationFrame(function () {
        requestAnimationFrame(function () {
          measure();
          track.dataset.marqueeReady = 'true';

          if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            rafId = requestAnimationFrame(frame);
          }
        });
      });

      const viewport = track.closest('.syed-network-marquee');
      if (viewport) {
        viewport.addEventListener('mouseenter', function () {
          paused = true;
        });

        viewport.addEventListener('mouseleave', function () {
          paused = false;
          lastTime = performance.now();
        });
      }

      let resizeTimer;
      window.addEventListener('resize', function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function () {
          measure();
          lastTime = performance.now();
        }, 80);
      });

      window.addEventListener('orientationchange', function () {
        setTimeout(function () {
          measure();
          lastTime = performance.now();
        }, 180);
      });

      document.addEventListener('visibilitychange', function () {
        if (!document.hidden) lastTime = performance.now();
      });
    });
  </script>

  <div class="pb-10  "></div>
  <div class="ios-footer-wrap">
    <footer >

        
             
    

        

        <center class="bg-[#fafafa]">
            <img src="Images/logo-9.png"
     alt="SyedShayan.com - Think Tank and Research-Based Web Portal"
     style="position: relative; right: 20px; width:205px;">
<section class=" text-black ">
  <div  class="max-w-xl mx-auto px-4">
    <p class="text-[12px] px-[45px]">
       
         Development is not measured by what we build.
        It is measured by how we improve lives,
        protect resources and shape better policies.
    </p>

  <!-- Avatar stack and members count -->
<div class="flex items-center justify-center mb-3 space-x-2">
      <span class="inline-block h-px mt-4 w-10
               bg-gradient-to-r from-transparent via-[#a8967c] to-[#a8967c] opacity-80">
  </span>

  <span class="text-[14px] mt-4 font-semibold text-center whitespace-nowrap">
    Our Vision
  </span>

  <span class="inline-block h-px mt-4 w-10
               bg-gradient-to-l from-transparent via-[#a8967c] to-[#a8967c] opacity-80">
  </span>
</div>
    <!-- Description -->
    <p class="text-center text-[11px] text-[black]">
      To be an independent centre of knowledge advancing better urban and regional development, responsible natural resource management and evidence based consumer policy through credible research and public dialogue.
    </p>
<center>
  <!-- Avatar stack and members count -->
<div class="flex items-center justify-center mb-3 space-x-2">
      <span class="inline-block h-px mt-4 w-10
               bg-gradient-to-r from-transparent via-[#a8967c] to-[#a8967c] opacity-80">
  </span>

  <span class="text-[14px] mt-4 font-semibold text-center whitespace-nowrap">
    Our Mission
  </span>

  <span class="inline-block h-px mt-4 w-10
               bg-gradient-to-l from-transparent via-[#a8967c] to-[#a8967c] opacity-80">
  </span>
</div>

  
   <p class="text-center text-[11px] text-[black] mb-[11px]">To produce independent research, informed policy analysis and practical recommendations that strengthen governance, improve communities and support sustainable national development.</p>
<div class="bg-[#fafafa] py-2 mb-8 px-2">
  <div class="max-w-6xl mx-auto">

    <div class="grid grid-cols-4 gap-2 md:gap-6 text-center">

      

      <div class="flex flex-col">
        <img src="Images/urban_regional_development.png" class="w-full h-[35px] md:h-[60px] object-contain rounded mb-3" alt="Urban and Regional Development">
        <h4 class="text-[11px] md:text-[12px] font-semibold mb-1 min-h-[50px] flex items-center justify-center">
         Urban and Regional Development
        </h4>
        <p class="text-[11px] md:text-[11px] text-gray-600 leading-snug">
         Research and policy solutions for sustainable cities, resilient communities and inclusive regional growth.
        </p>
      </div>
      
        <div class="flex flex-col">
            <img src="Images/natural_resources.png" class="w-full h-[35px] md:h-[50px] object-contain rounded mb-3" alt="Natural Resources">
            <h4 class="text-[11px] md:text-[12px] font-semibold mb-1 min-h-[50px] flex items-center justify-center">
              Natural Resources
            </h4>
            <p class="text-[11px] md:text-[11px] text-gray-600 leading-snug">
             Evidence based insights on water, land, energy, minerals and environment for responsible resource management.
            </p>
          </div>
      
      <div class="flex flex-col">
        <img src="Images/consumer_policy.png" class="w-full h-[35px] md:h-[50px] object-contain rounded mb-3" alt="Consumer Policy">
        <h4 class="text-[11px] md:text-[12px] font-semibold mb-1 min-h-[50px] flex items-center justify-center">
          Consumer Policy
        </h4>
        <p class="text-[11px] md:text-[11px] text-gray-600 leading-snug">
         Strengthening consumer rights, market fairness, quality standards and effective regulatory frameworks.
        </p>
      </div>

      <div class="flex flex-col">
        <img src="Images/governance_&_public_policy.png" class="w-full h-[35px] md:h-[45px] object-contain rounded mb-3" alt="Governance and Public Policy">
        <h4 class="text-[11px] md:text-[12px] font-semibold mb-1 min-h-[50px] flex items-center justify-center">
         Governance and Public Policy
        </h4>
        <p class="text-[11px] md:text-[11px] text-gray-600 leading-snug">
         Improving laws, institutions and public systems for accountability, transparency and better public service delivery.
        </p>
      </div>

    </div>

  </div>
</div>
</center>

    

   <!-- Footer Links -->
<div class="footerLinks flex flex-wrap justify-center gap-4 mb-3 text-center mx-2 mt-4">

<a href="/membership-form"
   class="text-[11px]  text-gray-700 underline hover:text-[#043F6C] transition profile-link"
      onclick="redirectToMembership(event)"
   >
  Profile
</a>
  <a href="/about" class="text-[11px]  underline text-gray-700 hover:text-[#043F6C] transition">About Us</a>
  <a href="/mission-statement" class="text-[11px]  underline  text-gray-700 hover:text-[#043F6C] transition">Our Mission</a>
  <a href="/site-map" class="text-[11px]   underline text-gray-700 hover:text-[#043F6C] transition">Site Map</a>
  <a href="/terms-and-conditions" class="text-[11px]   underline text-gray-700 hover:text-[#043F6C] transition">Terms & Conditions</a>
  <a href="/faqs" class="text-[11px]   text-gray-700 underline hover:text-[#043F6C] transition">FAQs</a>
  <a href="/privacy-policy" class="text-[11px]  text-gray-700 underline hover:text-[#043F6C] transition">Privacy Policy</a>
  <a href="/contact" class="text-[11px]  text-gray-700 underline hover:text-[#043F6C] transition">Contact Us</a>

</div>

<!-- Join Button -->
<div class="flex items-center justify-center mb-2 space-x-2">

  <!-- Left Line -->
  <span class="inline-block h-px mt-4 w-10
               bg-gradient-to-r from-transparent via-[#a8967c] to-[#a8967c] opacity-80">
  </span>

  <!-- Button -->
  <a href="/membership-form"
     class="px-[6px] py-[2px] mt-4 rounded-md text-[11px] font-medium
            border border-[#B29974] text-[black] 
            shadow-[0_4px_6px_-3px_rgba(0,0,0,0.35)]" style="background: linear-gradient(90deg,rgba(221, 192, 150, 1) 0%, rgba(245, 220, 179, 1) 100%);">
    Membership Access
  </a>

  <!-- Right Line -->
  <span class="inline-block h-px mt-4 w-10
               bg-gradient-to-l from-transparent via-[#a8967c] to-[#a8967c] opacity-80">
  </span>

</div>



    <!-- Benefits -->
 <p style="font-size: 11px;" class="text-center text-base text-gray-700 mb-2">
  Members are provided with a profile, access to <br> community initiatives, early research reports, and <br> participation in think tank surveys.
</p>


  </div>
</section>
<div class="flex items-center justify-center gap-3 my-3">

  <!-- Left Line -->
  <div class="w-16 h-px 
              bg-gradient-to-r from-transparent via-[#a8967c] to-[#a8967c] opacity-70">
  </div>

  <!-- Diamond -->
  <div class="w-2 h-2 rotate-45 bg-[#a8967c]"></div>

  <!-- Right Line -->
  <div class="w-16 h-px 
              bg-gradient-to-l from-transparent via-[#a8967c] to-[#a8967c] opacity-70">
  </div>

</div>


    <!-- Existing Footer Links -->
    
    <div class="appStores" style="gap: 1px;">

    </div>

<div  class="flex justify-center pt-6  bg-[#fafafa] px-2">
  <div class="flex items-center space-x-3.5">
    <a href="https://www.facebook.com/syedshayanpk1" target="_blank" rel="noopener noreferrer" class=" w-5 h-5 flex items-center justify-center  transition">
      <img src="Images/footer-icon/facebook_4423621.png" alt="Facebook" class="">
    </a>
    <a href="https://www.threads.net/@syedshayancom" target="_blank" rel="noopener noreferrer" class=" w-5 h-5 flex items-center justify-center  transition">
      <img src="Images/footer-icon/threads_12105331.png" alt="Threads" class="">
    </a>
    <a href="https://www.instagram.com/syedshayancom" target="_blank" rel="noopener noreferrer" class=" w-5 h-5 flex items-center justify-center  transition">
      <img src="Images/footer-icon/camera_14611311.png" alt="Instagram" class="">
    </a>
    <a href="https://youtube.com/@syedshayan.?si=k82TXOK7YEbXcfQP" target="_blank" rel="noopener noreferrer" class=" w-5 h-5 flex items-center justify-center  transition">
      <img src="Images/footer-icon/youtube_253781.png" alt="YouTube" class="">
    </a>
    <a href="https://www.linkedin.com/company/shayan-pakistan-real-estate-portfolios-and-syndicate/" target="_blank" rel="noopener noreferrer" class=" w-5 h-5 flex items-center justify-center  transition">
      <img src="Images/footer-icon/linkedin_4926491.png" alt="LinkedIn" class="">
    </a>
    <a href="https://x.com/syedshayanpk?t=ZmtaL5AFz5STg2nma7IMxQ&s=08" target="_blank" rel="noopener noreferrer" class=" w-5 h-5 flex items-center justify-center  transition">
      <img src="Images/footer-icon/twitter_5968951.png" alt="X (Twitter)" class="">
    </a>
    <a href="https://www.tiktok.com/@syedshayan.com?is_from_webapp=1&sender_device=pc" target="_blank" rel="noopener noreferrer" class=" w-5 h-5 flex items-center justify-center  transition">
      <img src="Images/footer-icon/video_15047571.png" alt="TikTok" class="">
    </a>
  </div>
</div>

 <div class="footerView z-0 bg-[#fafafa]">
    <p class="mb-2 text-gray-400" style="text-align:center;">
    &copy; SyedShayan.com
</p>
    
    <div class="footer-end-city" style="
        width: 100%; 
        height: 100px; 
        background-image: url('Images/footer-end-img-2.png'); 
        background-repeat: no-repeat; 
        background-size: 100% 100%; 
        display: block;">
    </div>

    <style>
      /* Mobile only: bring the final skyline image closer to © SyedShayan.com */
      @media (max-width: 767px) {
        .footer-end-city {
          margin-top: 25px !important;
        }
      }
    </style>
</div>

</center>
</footer>

<!--<script>
window.RENEWS_PUSH_RUNTIME = {"enabled":true,"firebase":{"apiKey":"AIzaSyDLaihrPRLYMU4UC9ipx0eRiJa9tfJ1P00","authDomain":"renews-pakistan.firebaseapp.com","projectId":"renews-pakistan","storageBucket":"renews-pakistan.firebasestorage.app","messagingSenderId":"934977837870","appId":"1:934977837870:web:4c6190aaf8be0137fdb8bf","measurementId":"","vapidKey":"BAsOn_u_hZntRdC0jwEOmDBOC0xub4JxeQFhJrCdxPdHHZDMEwjL4PRFJTHUptsYwFzIG9UKjbh1jpvjqRKN0zw"},"serviceWorkerUrl":"https://syedshayan.com/firebase-messaging-sw.js","tokenSaveUrl":"https://syedshayan.com/api/save_fcm_token.php","siteTitle":"ReNews Pakistan","iconUrl":"https://syedshayan.com/Images/favicon_io-real-estate/android-chrome-512x512.png","badgeUrl":"https://syedshayan.com/Images/favicon_io-real-estate/android-chrome-192x192.png","soundUrl":"","permissionPromptKey":"renews_push_prompt_dismissed_v3","pwa":{"manifestUrl":"https://syedshayan.com/manifest.json","installPageUrl":"https://syedshayan.com/real-estate-news.php","startUrl":"https://syedshayan.com/real-estate-news.php?source=pwa","appName":"ReNews Pakistan","appShortName":"ReNews"},"activeMemberId":null};
</script>
<script src="https://www.gstatic.com/firebasejs/10.13.2/firebase-app-compat.js"></script>
<script src="https://www.gstatic.com/firebasejs/10.13.2/firebase-messaging-compat.js"></script>
<script>
(function () {
    const runtime = window.RENEWS_PUSH_RUNTIME || null;
    const debugEnabled = new URLSearchParams(window.location.search).get('push_debug') === '1';
    const iosPreviewEnabled = new URLSearchParams(window.location.search).get('ios_preview') === '1';
    const firebaseConfig = runtime && runtime.firebase ? runtime.firebase : {};
    const promptStorageKey = (runtime && runtime.permissionPromptKey) || 'renews_push_prompt_dismissed_v2';
    const serviceWorkerUrl = (runtime && runtime.serviceWorkerUrl) || '';
    const tokenSaveUrl = (runtime && runtime.tokenSaveUrl) || '';
    const soundUrl = (runtime && runtime.soundUrl) || '';
    const siteTitle = (runtime && runtime.siteTitle) || 'ReNews Pakistan';
    const iconUrl = (runtime && runtime.iconUrl) || '';
    const badgeUrl = (runtime && runtime.badgeUrl) || '';
    const pwaConfig = runtime && runtime.pwa ? runtime.pwa : {};
    const manifestUrl = pwaConfig.manifestUrl || '';
    const installPageUrl = pwaConfig.installPageUrl || (window.location.origin + '/real-estate-news.php');
    const pwaStartUrl = pwaConfig.startUrl || installPageUrl;
    const appShortName = pwaConfig.appShortName || 'ReNews';
    const promptMessage = 'Stay updated with latest news from ReNews Pakistan.';
    const dismissedValue = 'declined';
    const tokenStorageKey = promptStorageKey + '_token';
    const iosGuideStorageKey = promptStorageKey + '_ios_guide';
    const audio = soundUrl ? new Audio(soundUrl) : null;
    const clientEnvironment = (function () {
        const userAgent = navigator.userAgent || '';
        const platform = navigator.platform || '';
        const maxTouchPoints = typeof navigator.maxTouchPoints === 'number' ? navigator.maxTouchPoints : 0;
        const isiPad = /iPad/i.test(userAgent) || (platform === 'MacIntel' && maxTouchPoints > 1);
        const isiPhone = /iPhone/i.test(userAgent);
        const isiPod = /iPod/i.test(userAgent);
        const isAppleMobile = isiPad || isiPhone || isiPod;
        const standaloneMatch = typeof window.matchMedia === 'function'
            && (
                window.matchMedia('(display-mode: standalone)').matches
                || window.matchMedia('(display-mode: fullscreen)').matches
                || window.matchMedia('(display-mode: minimal-ui)').matches
            );
        const isStandalone = standaloneMatch || window.navigator.standalone === true;

        return {
            isAppleMobile: isAppleMobile,
            isStandalone: isStandalone,
            isIosBrowserTab: isAppleMobile && !isStandalone,
            mode: isAppleMobile ? (isStandalone ? 'ios-home-screen' : 'ios-browser-tab') : 'standard-browser'
        };
    })();
    const pushDebugState = {
        runtimeLoaded: runtime && runtime.enabled ? 'yes' : 'no',
        clientMode: clientEnvironment.mode,
        manifestLinked: 'pending',
        notificationPermission: ('Notification' in window) ? Notification.permission : 'unsupported',
        secureContext: window.isSecureContext ? 'yes' : 'no',
        firebaseInit: 'idle',
        serviceWorker: 'idle',
        serviceWorkerScope: '',
        fcmGetToken: 'idle',
        tokenPreview: '',
        fcmErrorCode: '',
        fcmErrorMessage: '',
        fcmErrorDetails: '',
        likelyDiagnosis: '',
        vapidKeyInfo: firebaseConfig.vapidKey ? ('present (' + String(firebaseConfig.vapidKey).length + ' chars)') : 'missing',
        browserUserAgent: navigator.userAgent || '',
        saveRequest: 'idle',
        saveResponseStatus: '',
        saveResponseBody: '',
        tokenSaved: 'idle',
        lastEvent: '',
    };
    let audioPrimed = false;
    let messagingContextPromise = null;
    let foregroundHandlerAttached = false;
    let promptElement = null;
    let launcherElement = null;
    let debugPanelElement = null;
    let debugPanelRenderQueued = false;

    function escapeHtml(value) {
        return String(value == null ? '' : value)
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/"/g, '&quot;')
            .replace(/'/g, '&#39;');
    }

    function serializeError(error) {
        if (!error) {
            return { message: 'Unknown error.' };
        }

        if (typeof error === 'string') {
            return { message: error };
        }

        return {
            name: error.name || 'Error',
            code: error.code || error.errorCode || '',
            message: error.message || String(error),
        };
    }

    function safeErrorDetails(error) {
        if (!error) {
            return 'Unknown error.';
        }

        const out = {
            name: error.name || 'Error',
            code: error.code || error.errorCode || '',
            message: error.message || String(error),
        };

        ['stack', 'customData'].forEach(function (key) {
            if (typeof error[key] !== 'undefined' && error[key] !== null) {
                out[key] = error[key];
            }
        });

        try {
            return JSON.stringify(out);
        } catch (jsonError) {
            return String(out.message || 'Unable to serialize error.');
        }
    }

    function getLikelyDiagnosis(error, context) {
        const code = String((error && (error.code || error.errorCode)) || '').toLowerCase();
        const message = String((error && error.message) || '').toLowerCase();
        const scope = String((context && context.scope) || '').toLowerCase();
        const permission = String(Notification.permission || '').toLowerCase();

        if (permission !== 'granted') {
            return 'Browser notification permission is not granted.';
        }

        if (!('Notification' in window) || !('serviceWorker' in navigator)) {
            return 'This browser does not support the required Push APIs.';
        }

        if (!window.isSecureContext && location.hostname !== 'localhost' && location.hostname !== '127.0.0.1') {
            return 'Page is not running in a secure HTTPS context.';
        }

        if (!firebaseConfig.vapidKey) {
            return 'VAPID public key is missing from runtime config.';
        }

        if (message.indexOf('vapid') !== -1 || code.indexOf('vapid') !== -1 || message.indexOf('applicationserverkey') !== -1) {
            return 'Likely VAPID key mismatch or invalid Web Push certificate.';
        }

        if (message.indexOf('messaging/permission-blocked') !== -1 || code.indexOf('permission') !== -1) {
            return 'Browser or OS has blocked notification permission.';
        }

        if (message.indexOf('registration api') !== -1 || message.indexOf('installations') !== -1 || message.indexOf('403') !== -1 || code.indexOf('403') !== -1) {
            return 'FCM Registration API or Firebase Installations request may be blocked.';
        }

        if (message.indexOf('service worker') !== -1 || message.indexOf('subscription') !== -1) {
            return 'Service worker registration or Push subscription creation failed.';
        }

        if (scope && location.origin && scope.indexOf(location.origin.toLowerCase()) !== 0) {
            return 'Service worker scope does not match the current site origin.';
        }

        if (message.indexOf('not supported') !== -1 || code.indexOf('unsupported') !== -1) {
            return 'Browser does not fully support Firebase Web Push on this device.';
        }

        return 'Check Firebase Console Web Push certificate, VAPID key, and browser/device support.';
    }

    function clearFcmErrorState() {
        setDebugState('fcmErrorCode', '');
        setDebugState('fcmErrorMessage', '');
        setDebugState('fcmErrorDetails', '');
        setDebugState('likelyDiagnosis', '');
    }

    function previewToken(token) {
        const value = String(token || '').trim();

        if (value === '') {
            return '';
        }

        if (value.length <= 24) {
            return value;
        }

        return value.slice(0, 12) + '...' + value.slice(-8);
    }

    function setDebugState(key, value) {
        pushDebugState[key] = value;
        renderDebugPanelSoon();
    }

    function renderDebugPanelSoon() {
        if (!debugEnabled) {
            return;
        }

        if (document.body) {
            renderDebugPanel();
            return;
        }

        if (debugPanelRenderQueued) {
            return;
        }

        debugPanelRenderQueued = true;
        document.addEventListener('DOMContentLoaded', function () {
            debugPanelRenderQueued = false;
            renderDebugPanel();
        }, { once: true });
    }

    function log(eventName, details, level) {
        const method = console[level || 'log'] || console.log;
        pushDebugState.lastEvent = eventName;
        renderDebugPanelSoon();

        if (typeof details !== 'undefined') {
            method.call(console, '[ReNews Push] ' + eventName, details);
            return;
        }

        method.call(console, '[ReNews Push] ' + eventName);
    }

    if (audio) {
        audio.preload = 'auto';
    }

    function primeAudio() {
        if (!audio || audioPrimed) {
            return;
        }

        audio.muted = true;
        const attempt = audio.play();

        if (attempt && typeof attempt.then === 'function') {
            attempt.then(function () {
                audio.pause();
                audio.currentTime = 0;
                audio.muted = false;
                audioPrimed = true;
            }).catch(function () {
                audio.muted = false;
            });
            return;
        }

        audio.muted = false;
    }

    document.addEventListener('click', primeAudio, { once: true, capture: true });
    document.addEventListener('keydown', primeAudio, { once: true, capture: true });

    function playForegroundSound() {
        if (!audio || document.visibilityState !== 'visible') {
            return;
        }

        try {
            audio.currentTime = 0;
        } catch (error) {
        }

        const attempt = audio.play();
        if (attempt && typeof attempt.catch === 'function') {
            attempt.catch(function () {
            });
        }
    }

    function hidePrompt() {
        if (promptElement) {
            promptElement.remove();
            promptElement = null;
        }
    }

    function hideLauncher() {
        if (launcherElement) {
            launcherElement.remove();
            launcherElement = null;
        }
    }

function ensureStyles() {
    if (document.getElementById('renewsPushPromptStyles')) {
        return;
    }

    const style = document.createElement('style');
    style.id = 'renewsPushPromptStyles';
    style.textContent = ''
        + '.renews-push-prompt{position:fixed;right:16px;bottom:16px;z-index:2147483000;width:min(360px,calc(100vw - 32px));padding:18px 18px 16px;border-radius:18px;background:#043F6C;color:#fff;box-shadow:0 24px 48px rgba(15,23,42,.28);font-family:Arial,sans-serif;}'
        + '.renews-push-prompt__title{font-size:16px;font-weight:700;line-height:1.2;margin:0 0 8px;}'
        + '.renews-push-prompt__text{font-size:13px;line-height:1.55;opacity:.95;margin:0 0 14px;}'
        + '.renews-push-prompt__actions{display:flex;gap:10px;align-items:center;}'
        + '.renews-push-prompt__button{flex:1 1 0;border:0;border-radius:999px;padding:10px 14px;font-size:13px;font-weight:700;cursor:pointer;}'
        + '.renews-push-prompt__button--allow{background:#DFBF72;color:#043F6C;}'
        + '.renews-push-prompt__button--decline{background:rgba(255,255,255,.08);color:#fff;border:1px solid rgba(255,255,255,.22);}'
        + '.renews-push-launcher{position:fixed;right:16px;bottom:16px;z-index:2147482999;display:inline-flex;align-items:center;justify-content:center;width:46px;height:46px;padding:0;border:0;border-radius:50%;background:#d71920;color:#fff;box-shadow:0 12px 24px rgba(15,23,42,.25);font:600 16px Arial,sans-serif;cursor:pointer;}'
        + '.renews-push-launcher i{font-size:17px;line-height:1;}'
        + '.renews-push-debug{position:fixed;left:12px;top:12px;z-index:2147483001;width:min(420px,calc(100vw - 24px));padding:12px 14px;border-radius:14px;background:rgba(4,18,38,.94);color:#fff;font:12px/1.45 Arial,sans-serif;}'
        + '.renews-push-debug__title{font-size:13px;font-weight:700;margin:0 0 8px;}'
        + '.renews-push-debug__grid{display:grid;grid-template-columns:minmax(124px,1fr) minmax(0,1.1fr);gap:4px 10px;}'
        + '.renews-push-debug__label{opacity:.72;}'
        + '.renews-push-debug__value{font-weight:700;overflow-wrap:anywhere;}'
        + '.renews-push-debug__mono{font-family:Consolas,Monaco,monospace;font-weight:400;}'
        + '.renews-push-debug__event{margin-top:8px;padding-top:8px;border-top:1px solid rgba(255,255,255,.12);font-size:11px;opacity:.9;overflow-wrap:anywhere;}'
        + '@media (max-width: 640px){.renews-push-prompt{right:12px;bottom:12px;width:auto;max-width:none;padding:16px;}.renews-push-prompt__actions{flex-direction:column;}.renews-push-prompt__button{width:100%;}.renews-push-launcher{right:14px;bottom:14px;width:44px;height:44px;}.renews-push-debug{left:8px;right:8px;top:8px;width:auto;padding:10px 12px;}}'
        + '.renews-push-prompt--ios{right:12px!important;bottom:8px!important;width:auto!important;max-width:300px;padding:11px 12px!important;border-radius:13px!important;background:#ffffff!important;color:#111111!important;box-shadow:0 10px 26px rgba(15,23,42,.22)!important;}'
        + '.renews-push-prompt--ios .renews-push-prompt__title{font-size:13px!important;margin:0 0 5px!important;color:#111111!important;line-height:1.2!important;}'
        + '.renews-push-prompt--ios .renews-push-prompt__text{font-size:12px!important;line-height:1.35!important;margin:0 0 9px!important;color:#111111!important;opacity:1!important;}'
        + '.renews-push-prompt--ios .renews-push-prompt__actions{display:flex!important;flex-direction:row!important;gap:8px!important;margin:0!important;}'
        + '.renews-push-prompt--ios .renews-push-prompt__button{width:auto!important;flex:1 1 0!important;padding:8px 10px!important;font-size:12px!important;border-radius:999px!important;}'
        + '.renews-push-prompt--ios .renews-push-prompt__button--allow{background:#043F6C!important;color:#ffffff!important;}'
        + '.renews-push-prompt--ios .renews-push-prompt__button--decline{background:#ffffff!important;color:#111111!important;border:1px solid #d1d5db!important;}';
    document.head.appendChild(style);
}

    function renderDebugPanel() {
        if (!debugEnabled || !document.body) {
            return;
        }

        ensureStyles();

        if (!debugPanelElement) {
            debugPanelElement = document.createElement('div');
            debugPanelElement.className = 'renews-push-debug';
            document.body.appendChild(debugPanelElement);
        }

        debugPanelElement.innerHTML = ''
            + '<div class="renews-push-debug__title">ReNews Push Debug</div>'
            + '<div class="renews-push-debug__grid">'
            + '  <div class="renews-push-debug__label">Push runtime loaded</div><div class="renews-push-debug__value">' + escapeHtml(pushDebugState.runtimeLoaded) + '</div>'
            + '  <div class="renews-push-debug__label">Client mode</div><div class="renews-push-debug__value">' + escapeHtml(pushDebugState.clientMode || '-') + '</div>'
            + '  <div class="renews-push-debug__label">Manifest linked</div><div class="renews-push-debug__value">' + escapeHtml(pushDebugState.manifestLinked || '-') + '</div>'
            + '  <div class="renews-push-debug__label">Notification permission</div><div class="renews-push-debug__value">' + escapeHtml(pushDebugState.notificationPermission) + '</div>'
            + '  <div class="renews-push-debug__label">Secure context</div><div class="renews-push-debug__value">' + escapeHtml(pushDebugState.secureContext) + '</div>'
            + '  <div class="renews-push-debug__label">Firebase init</div><div class="renews-push-debug__value">' + escapeHtml(pushDebugState.firebaseInit) + '</div>'
            + '  <div class="renews-push-debug__label">Service worker</div><div class="renews-push-debug__value">' + escapeHtml(pushDebugState.serviceWorker) + '</div>'
            + '  <div class="renews-push-debug__label">SW scope</div><div class="renews-push-debug__value renews-push-debug__mono">' + escapeHtml(pushDebugState.serviceWorkerScope || '-') + '</div>'
            + '  <div class="renews-push-debug__label">FCM getToken</div><div class="renews-push-debug__value">' + escapeHtml(pushDebugState.fcmGetToken) + '</div>'
            + '  <div class="renews-push-debug__label">Token preview</div><div class="renews-push-debug__value renews-push-debug__mono">' + escapeHtml(pushDebugState.tokenPreview || '-') + '</div>'
            + '  <div class="renews-push-debug__label">FCM error code</div><div class="renews-push-debug__value renews-push-debug__mono">' + escapeHtml(pushDebugState.fcmErrorCode || '-') + '</div>'
            + '  <div class="renews-push-debug__label">FCM error message</div><div class="renews-push-debug__value renews-push-debug__mono">' + escapeHtml(pushDebugState.fcmErrorMessage || '-') + '</div>'
            + '  <div class="renews-push-debug__label">FCM error details</div><div class="renews-push-debug__value renews-push-debug__mono">' + escapeHtml(pushDebugState.fcmErrorDetails || '-') + '</div>'
            + '  <div class="renews-push-debug__label">Likely diagnosis</div><div class="renews-push-debug__value">' + escapeHtml(pushDebugState.likelyDiagnosis || '-') + '</div>'
            + '  <div class="renews-push-debug__label">VAPID key</div><div class="renews-push-debug__value">' + escapeHtml(pushDebugState.vapidKeyInfo || '-') + '</div>'
            + '  <div class="renews-push-debug__label">User agent</div><div class="renews-push-debug__value renews-push-debug__mono">' + escapeHtml(pushDebugState.browserUserAgent || '-') + '</div>'
            + '  <div class="renews-push-debug__label">save_fcm_token request</div><div class="renews-push-debug__value">' + escapeHtml(pushDebugState.saveRequest) + '</div>'
            + '  <div class="renews-push-debug__label">Response status</div><div class="renews-push-debug__value">' + escapeHtml(pushDebugState.saveResponseStatus || '-') + '</div>'
            + '  <div class="renews-push-debug__label">Response body</div><div class="renews-push-debug__value renews-push-debug__mono">' + escapeHtml(pushDebugState.saveResponseBody || '-') + '</div>'
            + '  <div class="renews-push-debug__label">Token saved</div><div class="renews-push-debug__value">' + escapeHtml(pushDebugState.tokenSaved) + '</div>'
            + '</div>'
            + '<div class="renews-push-debug__event">Last event: ' + escapeHtml(pushDebugState.lastEvent || '-') + '</div>';
    }

    function findMetaTag(name) {
        const tags = document.getElementsByTagName('meta');

        for (let index = 0; index < tags.length; index += 1) {
            if ((tags[index].getAttribute('name') || '') === name) {
                return tags[index];
            }
        }

        return null;
    }

    function ensureMetaTag(name, content) {
        if (!name || !content || !document.head) {
            return;
        }

        let tag = findMetaTag(name);

        if (!tag) {
            tag = document.createElement('meta');
            tag.setAttribute('name', name);
            document.head.appendChild(tag);
        }

        tag.setAttribute('content', content);
    }

    function ensurePwaInstallMetadata() {
        if (!document.head) {
            return;
        }

        let manifestLinked = false;
        let manifestLink = document.querySelector('link[rel="manifest"]');

        if (!manifestLink && manifestUrl) {
            manifestLink = document.createElement('link');
            manifestLink.setAttribute('rel', 'manifest');
            manifestLink.setAttribute('href', manifestUrl);
            document.head.appendChild(manifestLink);
        }

        manifestLinked = !!document.querySelector('link[rel="manifest"]');
        setDebugState('manifestLinked', manifestLinked ? 'yes' : 'no');

        ensureMetaTag('apple-mobile-web-app-capable', 'yes');
        ensureMetaTag('mobile-web-app-capable', 'yes');
        ensureMetaTag('apple-mobile-web-app-status-bar-style', 'default');
        ensureMetaTag('apple-mobile-web-app-title', appShortName);

        if (iconUrl && !document.querySelector('link[rel="apple-touch-icon"]')) {
            const iconLink = document.createElement('link');
            iconLink.setAttribute('rel', 'apple-touch-icon');
            iconLink.setAttribute('href', iconUrl);
            document.head.appendChild(iconLink);
        }
    }

    function storageGet(key) {
        try {
            return window.localStorage.getItem(key);
        } catch (error) {
            return null;
        }
    }

    function storageSet(key, value) {
        try {
            window.localStorage.setItem(key, value);
        } catch (error) {
        }
    }

    function storageRemove(key) {
        try {
            window.localStorage.removeItem(key);
        } catch (error) {
        }
    }

    function updatePermissionState() {
        setDebugState('notificationPermission', ('Notification' in window) ? Notification.permission : 'unsupported');
    }

    ensurePwaInstallMetadata();
    renderDebugPanelSoon();

    if (!runtime || !runtime.enabled) {
        log('runtime_disabled', { enabled: false }, 'warn');
        return;
    }

if (clientEnvironment.isIosBrowserTab || iosPreviewEnabled) {
    setDebugState('firebaseInit', 'waiting (home screen required)');
    setDebugState('serviceWorker', 'waiting (home screen required)');
    setDebugState('fcmGetToken', 'waiting (home screen required)');
    setDebugState('tokenSaved', 'waiting (home screen required)');

    const showIosGuideNow = function () {
if (storageGet(iosGuideStorageKey) === dismissedValue) {
    hidePrompt();
    hideLauncher();
    return;
}

showIosInstallGuide();

        log('ios_browser_tab_detected', {
            mode: clientEnvironment.mode,
            installPageUrl: installPageUrl,
            startUrl: pwaStartUrl
        });
    };

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', showIosGuideNow, { once: true });
    } else {
        showIosGuideNow();
    }

    return;
}

if (!('Notification' in window) || !('serviceWorker' in navigator)) {
    setDebugState('firebaseInit', 'blocked');
    setDebugState('serviceWorker', 'blocked');
    setDebugState('fcmGetToken', 'blocked');
    setDebugState('tokenSaved', 'blocked');
    log('browser_unsupported', { notification: 'Notification' in window, serviceWorker: 'serviceWorker' in navigator }, 'warn');
    return;
}

    if (!window.isSecureContext && location.hostname !== 'localhost' && location.hostname !== '127.0.0.1') {
        setDebugState('firebaseInit', 'blocked (insecure context)');
        setDebugState('serviceWorker', 'blocked (insecure context)');
        setDebugState('fcmGetToken', 'blocked (insecure context)');
        setDebugState('tokenSaved', 'blocked (insecure context)');
        log('insecure_context', { origin: window.location.origin }, 'warn');
        return;
    }

    function getActiveDismissKey() {
        return clientEnvironment.isIosBrowserTab ? iosGuideStorageKey : promptStorageKey;
    }

function showPermissionPrompt() {
    if (Notification.permission !== 'default') {
        hidePrompt();
        return;
    }

    ensureStyles();
    hideLauncher();

    if (promptElement && promptElement.getAttribute('data-prompt-type') === 'permission') {
        return;
    }

    hidePrompt();
    promptElement = document.createElement('div');
    promptElement.className = 'renews-push-prompt renews-push-prompt--ios';
    promptElement.setAttribute('data-prompt-type', 'permission');
    promptElement.setAttribute('role', 'dialog');
    promptElement.setAttribute('aria-live', 'polite');
    promptElement.innerHTML = ''
        + '<div class="renews-push-prompt__title">Enable ReNews Notifications</div>'
        + '<p class="renews-push-prompt__text">Allow ReNews notifications to receive the latest updates.</p>'
        + '<div class="renews-push-prompt__actions">'
        + '  <button type="button" class="renews-push-prompt__button renews-push-prompt__button--allow" data-action="allow">Allow</button>'
        + '  <button type="button" class="renews-push-prompt__button renews-push-prompt__button--decline" data-action="decline">Later</button>'
        + '</div>';

    promptElement.addEventListener('click', function (event) {
        const button = event.target.closest('button[data-action]');

        if (!button) {
            return;
        }

        const action = button.getAttribute('data-action');

        if (action === 'decline') {
            storageSet(promptStorageKey, dismissedValue);
            hidePrompt();
            showLauncher();
            log('decline_clicked');
            return;
        }

        if (action === 'allow') {
            log('allow_clicked');
            storageRemove(promptStorageKey);
            hidePrompt();
            hideLauncher();
            requestPermissionAndInit();
        }
    });

    document.body.appendChild(promptElement);
    log('popup_shown', { page: window.location.pathname });
}
function showIosInstallGuide() {
    ensureStyles();
    hideLauncher();

    if (promptElement && promptElement.getAttribute('data-prompt-type') === 'ios-guide') {
        return;
    }

    hidePrompt();
    promptElement = document.createElement('div');
    promptElement.className = 'renews-push-prompt renews-push-prompt--ios';
    promptElement.setAttribute('data-prompt-type', 'ios-guide');
    promptElement.setAttribute('role', 'dialog');
    promptElement.setAttribute('aria-live', 'polite');
    promptElement.innerHTML = ''
        + '<div class="renews-push-prompt__title">Enable ReNews Notifications</div>'
        + '<p class="renews-push-prompt__text">Add ReNews to your Home Screen to enable iPhone notifications.</p>'
        + '<div class="renews-push-prompt__actions">'
        + '  <button type="button" class="renews-push-prompt__button renews-push-prompt__button--allow" data-action="ios-guide-ok">Allow</button>'
        + '  <button type="button" class="renews-push-prompt__button renews-push-prompt__button--decline" data-action="ios-guide-later">Later</button>'
        + '</div>';

    promptElement.addEventListener('click', function (event) {
        const button = event.target.closest('button[data-action]');

        if (!button) {
            return;
        }

        const action = button.getAttribute('data-action');

        if (action === 'ios-guide-ok' || action === 'ios-guide-later') {
            storageSet(iosGuideStorageKey, dismissedValue);
            hidePrompt();
            hideLauncher();
            log('ios_install_guide_dismissed', {
                action: action,
                installPageUrl: installPageUrl,
                startUrl: pwaStartUrl
            });
        }
    });

    document.body.appendChild(promptElement);
    log('ios_install_guide_shown', {
        page: window.location.pathname,
        installPageUrl: installPageUrl,
        startUrl: pwaStartUrl
    });
}
function showLauncher() {
    const dismissKey = getActiveDismissKey();
    const currentPermission = ('Notification' in window) ? Notification.permission : 'default';

    if (currentPermission !== 'default' || storageGet(dismissKey) !== dismissedValue) {
        hideLauncher();
        return;
    }

    ensureStyles();

    if (launcherElement) {
        return;
    }

    launcherElement = document.createElement('button');
    launcherElement.type = 'button';
    launcherElement.className = 'renews-push-launcher';
    launcherElement.setAttribute('aria-label', 'Enable notifications');
    launcherElement.setAttribute('title', 'Enable notifications');
    launcherElement.innerHTML = '<i class="fa-solid fa-bell" aria-hidden="true"></i>';

    launcherElement.addEventListener('click', function () {
        storageRemove(dismissKey);
        hideLauncher();

        if (clientEnvironment.isIosBrowserTab || iosPreviewEnabled) {
            showIosInstallGuide();
            return;
        }

        showPermissionPrompt();
    });

    document.body.appendChild(launcherElement);
}
    function syncPromptState() {
        updatePermissionState();

        if (clientEnvironment.isIosBrowserTab) {
            setDebugState('firebaseInit', 'waiting (home screen required)');
            setDebugState('serviceWorker', 'waiting (home screen required)');
            setDebugState('fcmGetToken', 'waiting (home screen required)');
            setDebugState('tokenSaved', 'waiting (home screen required)');

           if (storageGet(iosGuideStorageKey) === dismissedValue) {
    hidePrompt();
    hideLauncher();
    return;
}

            showIosInstallGuide();
            return;
        }

        if (Notification.permission === 'granted') {
            storageRemove(promptStorageKey);
            hidePrompt();
            hideLauncher();
            return;
        }

        if (Notification.permission === 'denied') {
            hidePrompt();
            hideLauncher();
            return;
        }

        if (storageGet(promptStorageKey) === dismissedValue) {
            hidePrompt();
            showLauncher();
            return;
        }

        showPermissionPrompt();
    }

    async function getMessagingContext() {
        if (messagingContextPromise) {
            return messagingContextPromise;
        }

        messagingContextPromise = (async function () {
            setDebugState('firebaseInit', 'started');
            log('firebase_init_started', {
                projectId: firebaseConfig.projectId || '',
                messagingSenderId: firebaseConfig.messagingSenderId || ''
            });

            try {
                if (typeof firebase === 'undefined') {
                    throw new Error('Firebase SDK is not loaded.');
                }

                if (!firebase.apps.length) {
                    firebase.initializeApp(firebaseConfig);
                }

                setDebugState('firebaseInit', 'success');
                log('firebase_init_success', {
                    projectId: firebaseConfig.projectId || '',
                    messagingSenderId: firebaseConfig.messagingSenderId || ''
                });
            } catch (error) {
                setDebugState('firebaseInit', 'failed');
                log('firebase_init_failed', serializeError(error), 'error');
                throw error;
            }

            setDebugState('serviceWorker', 'registering');
            log('service_worker_register_started', {
                serviceWorkerUrl: serviceWorkerUrl
            });

            try {
                const registration = await navigator.serviceWorker.register(serviceWorkerUrl);
                await navigator.serviceWorker.ready;

                setDebugState('serviceWorker', 'success');
                setDebugState('serviceWorkerScope', registration.scope || '');
                log('service_worker_register_success', {
                    serviceWorkerUrl: serviceWorkerUrl,
                    scope: registration.scope
                });

                return {
                    registration: registration,
                    messaging: firebase.messaging()
                };
            } catch (error) {
                setDebugState('serviceWorker', 'failed');
                log('service_worker_register_failed', serializeError(error), 'error');
                throw error;
            }
        })();

        return messagingContextPromise;
    }

    async function getCurrentToken() {
        setDebugState('fcmGetToken', 'started');
        clearFcmErrorState();
        log('fcm_get_token_started');

        try {
            const context = await getMessagingContext();
            const token = await context.messaging.getToken({
                vapidKey: firebaseConfig.vapidKey,
                serviceWorkerRegistration: context.registration
            });

            if (token) {
                setDebugState('fcmGetToken', 'success');
                setDebugState('tokenPreview', previewToken(token));
                log('fcm_get_token_success', {
                    tokenPreview: previewToken(token),
                    vapidKeyInfo: pushDebugState.vapidKeyInfo,
                    serviceWorkerScope: pushDebugState.serviceWorkerScope || '',
                    browserUserAgent: pushDebugState.browserUserAgent
                });
            } else {
                setDebugState('fcmGetToken', 'failed');
                setDebugState('tokenPreview', '');
                setDebugState('fcmErrorCode', 'empty-token');
                setDebugState('fcmErrorMessage', 'Firebase returned an empty token.');
                setDebugState('fcmErrorDetails', '{"message":"Firebase returned an empty token."}');
                setDebugState('likelyDiagnosis', 'Push subscription was not created. Check VAPID key and browser support.');
                log('fcm_get_token_failed', {
                    code: 'empty-token',
                    message: 'Firebase returned an empty token.',
                    vapidKeyInfo: pushDebugState.vapidKeyInfo,
                    serviceWorkerScope: pushDebugState.serviceWorkerScope || '',
                    browserUserAgent: pushDebugState.browserUserAgent
                }, 'warn');
            }

            return token;
        } catch (error) {
            const serializedError = serializeError(error);
            const safeDetails = safeErrorDetails(error);
            const diagnosis = getLikelyDiagnosis(error, {
                scope: pushDebugState.serviceWorkerScope || ''
            });

            setDebugState('fcmGetToken', 'failed');
            setDebugState('tokenPreview', '');
            setDebugState('fcmErrorCode', serializedError.code || '');
            setDebugState('fcmErrorMessage', serializedError.message || 'Unknown error.');
            setDebugState('fcmErrorDetails', safeDetails);
            setDebugState('likelyDiagnosis', diagnosis);
            log('fcm_get_token_failed', {
                code: serializedError.code || '',
                message: serializedError.message || 'Unknown error.',
                error: error,
                safeErrorDetails: safeDetails,
                vapidKeyInfo: pushDebugState.vapidKeyInfo,
                serviceWorkerScope: pushDebugState.serviceWorkerScope || '',
                browserUserAgent: pushDebugState.browserUserAgent,
                likelyDiagnosis: diagnosis
            }, 'error');
            throw error;
        }
    }

    async function postToken(payload) {
        try {
            setDebugState('saveRequest', 'sent');
            setDebugState('saveResponseStatus', '');
            setDebugState('saveResponseBody', '');
            setDebugState('tokenSaved', 'pending');
            log('save_token_request_sent', {
                url: tokenSaveUrl,
                action: payload.action,
                permission: payload.permission,
                tokenPreview: previewToken(payload.token)
            });

            const response = await fetch(tokenSaveUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(payload),
                credentials: 'same-origin'
            });

            const rawText = await response.text();
            let data = null;

            try {
                data = rawText ? JSON.parse(rawText) : null;
            } catch (error) {
                data = null;
            }

            setDebugState('saveResponseStatus', String(response.status));
            setDebugState('saveResponseBody', rawText.slice(0, 240));

            if (!response.ok || !data || data.success !== true) {
                setDebugState('saveRequest', 'failed');
                setDebugState('tokenSaved', 'failed');
                log('save_token_request_failed', {
                    status: response.status,
                    bodyPreview: rawText.slice(0, 400)
                }, 'error');
                throw new Error((data && data.message) ? data.message : 'Token request failed.');
            }

            setDebugState('saveRequest', 'success');
            setDebugState('tokenSaved', 'success');
            log('save_token_request_success', {
                status: response.status,
                message: data.message || 'Token saved.'
            });

            return data;
        } catch (error) {
            if (pushDebugState.saveRequest !== 'failed') {
                setDebugState('saveRequest', 'failed');
            }

            if (pushDebugState.tokenSaved !== 'failed') {
                setDebugState('tokenSaved', 'failed');
            }

            if (!pushDebugState.saveResponseBody) {
                setDebugState('saveResponseBody', serializeError(error).message || 'Token request failed.');
            }

            if (!pushDebugState.saveResponseStatus) {
                setDebugState('saveResponseStatus', 'request-error');
            }

            if (pushDebugState.lastEvent !== 'save_token_request_failed') {
                log('save_token_request_failed', serializeError(error), 'error');
            }

            throw error;
        }
    }

    async function saveToken(token) {
        if (!token) {
            return;
        }

        try {
            const data = await postToken({
                action: 'save',
                token: token,
                permission: Notification.permission
            });

            storageSet(tokenStorageKey, token);
            log('token_saved', {
                message: data.message || 'Token saved.',
                tokenPreview: previewToken(token)
            });
        } catch (error) {
            throw error;
        }
    }

    async function deactivateToken(token) {
        if (!token) {
            return;
        }

        const data = await postToken({
            action: 'deactivate',
            token: token,
            permission: Notification.permission
        });

        storageRemove(tokenStorageKey);
        log('token_deactivated', data);
    }

    function showForegroundNotification(payload) {
        if (Notification.permission !== 'granted') {
            return;
        }

        const data = payload && payload.data ? payload.data : {};
        const title = data.title || siteTitle;
        const body = data.body || '';
        const url = data.url || '';
        const notification = new Notification(title, {
            body: body,
            icon: data.icon || iconUrl,
            badge: data.badge || badgeUrl,
            data: {
                url: url
            }
        });

        notification.onclick = function (event) {
            event.preventDefault();
            notification.close();

            if (url) {
                window.focus();
                window.location.href = url;
            }
        };
    }

    async function initMessaging() {
        if (clientEnvironment.isIosBrowserTab) {
            log('init_blocked_ios_browser_tab', {
                mode: clientEnvironment.mode,
                installPageUrl: installPageUrl,
                startUrl: pwaStartUrl
            }, 'warn');
            syncPromptState();
            return;
        }

        const context = await getMessagingContext();
        const token = await getCurrentToken();

        if (token) {
            await saveToken(token);
        }

        if (!foregroundHandlerAttached) {
            context.messaging.onMessage(function (payload) {
                log('foreground_message_received', payload);
                // playForegroundSound();
                showForegroundNotification(payload);
            });
            foregroundHandlerAttached = true;
        }
    }

    async function requestPermissionAndInit() {
        if (clientEnvironment.isIosBrowserTab) {
            log('permission_request_blocked_ios_browser_tab', {
                mode: clientEnvironment.mode,
                installPageUrl: installPageUrl,
                startUrl: pwaStartUrl
            }, 'warn');
            syncPromptState();
            return;
        }

        try {
            const permission = await Notification.requestPermission();
            setDebugState('notificationPermission', permission);
            log('browser_permission_result', { permission: permission });

            if (permission === 'granted') {
                storageRemove(promptStorageKey);
                syncPromptState();
                await initMessaging();
                return;
            }

            if (permission === 'default') {
                storageSet(promptStorageKey, dismissedValue);
                syncPromptState();
                return;
            }

            hidePrompt();
            hideLauncher();
        } catch (error) {
            storageSet(promptStorageKey, dismissedValue);
            syncPromptState();
            log('browser_permission_request_failed', serializeError(error), 'error');
        }
    }

    async function handleGrantedPermission() {
        try {
            storageRemove(promptStorageKey);
            await initMessaging();
        } catch (error) {
            log('init_messaging_failed', serializeError(error), 'error');
        }
    }

    async function handleRevokedPermissionCleanup() {
        const cachedToken = storageGet(tokenStorageKey) || '';

        if (!cachedToken) {
            return;
        }

        try {
            await deactivateToken(cachedToken);
        } catch (error) {
            log('cleanup_deactivate_failed', serializeError(error), 'warn');
        }
    }

    window.RENEWS_PUSH_DEBUG = {
        initMessaging: initMessaging,
        requestPermissionAndInit: requestPermissionAndInit,
        resetPromptPreference: function () {
            storageRemove(promptStorageKey);
            storageRemove(iosGuideStorageKey);
            syncPromptState();
        },
        runtime: runtime,
        state: pushDebugState,
        clientEnvironment: clientEnvironment,
        showPrompt: showPermissionPrompt,
        showIosInstallGuide: showIosInstallGuide,
        renderDebugPanel: renderDebugPanel,
        syncPromptState: syncPromptState
    };

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', syncPromptState, { once: true });
    } else {
        syncPromptState();
    }

    if (clientEnvironment.isIosBrowserTab) {
        log('ios_browser_tab_detected', {
            mode: clientEnvironment.mode,
            installPageUrl: installPageUrl,
            startUrl: pwaStartUrl
        });
        return;
    }

    if (Notification.permission === 'granted') {
        handleGrantedPermission();
    } else if (Notification.permission !== 'default') {
        handleRevokedPermissionCleanup();
    }
})();
</script>
-->

<script>
let membersModalLoaded = false;
let membersModalLoading = false;

async function openMembersModal() {
    const host = document.getElementById('membersModalHost');

    if (!host) return;

    // If already loaded once, just show it again.
    if (membersModalLoaded) {
        const modal = document.getElementById('membersModal');
        if (modal) {
            modal.classList.remove('hidden');
        }
        return;
    }

    // Prevent duplicate AJAX calls on repeated clicks.
    if (membersModalLoading) return;
    membersModalLoading = true;

    try {
        const response = await fetch('members-modal-ajax.php', {
            method: 'GET',
            credentials: 'same-origin',
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        });

        if (!response.ok) {
            throw new Error('Unable to load members.');
        }

        host.innerHTML = await response.text();
        membersModalLoaded = true;

        const modal = document.getElementById('membersModal');
        if (modal) {
            modal.classList.remove('hidden');
        }
    } catch (error) {
        console.error('Members Directory load failed:', error);
    } finally {
        membersModalLoading = false;
    }
}
</script>

<!-- JS for 3 Dots + Unsubscribe -->
<script>
function toggleMenu(button) {
    const menu = button.nextElementSibling;
    // Toggle this one
    menu.classList.toggle('hidden');
}
function toggleDropdown(dropdownId) {
    const dropdown = document.getElementById(dropdownId);
    
    // Close all other dropdowns
    document.querySelectorAll('.dropdown-menu').forEach(function(menu) {
        if (menu.id !== dropdownId) {
            menu.classList.add('hidden');
        }
    });
    
    // Toggle the current dropdown
    dropdown.classList.toggle('hidden');
}

// Close dropdowns when clicking outside
document.addEventListener('click', function(event) {
    if (!event.target.closest('.dropdown-container')) {
        document.querySelectorAll('.dropdown-menu').forEach(function(menu) {
            menu.classList.add('hidden');
        });
    }
});

function deleteUser(userId, btn) {
  if (!confirm("Are you sure you want to delete your profile?")) return;

  // AJAX request to delete_user.php
  $.ajax({
    url: 'delete_user.php',
    method: 'POST',
    data: { id: userId },
    success: function(response) {
      response = response.trim();
      if (response === 'success') {
        // Remove user visually
        $(btn).closest('.relative').fadeOut(400, function() {
          $(this).remove();
          alert('The profile has been deleted successfully and all associated data has been removed from your account settings.');
          location.reload();
        });
      } else {
        alert('❌ Failed to delete user. ' + response);
      }
    },
    error: function() {
      alert('⚠️ Something went wrong. Please try again.');
    }
  });
}

// Profile link redirect function (same as current_affairs-test.php)
async function redirectToMembership(event) {
    event.preventDefault();
    
    try {
        const response = await fetch('set_message');
        if (response.ok) {
            setTimeout(() => {
                window.location.href = "membership-form";
            }, 100);
        } else {
            window.location.href = "membership-form";
        }
    } catch (error) {
        window.location.href = "membership-form";
    }
}

// Also add the same logic for any other protected links if needed
document.addEventListener('DOMContentLoaded', function() {
    const isLoggedIn = false;
    
    if (!isLoggedIn) {
        // Add click handlers to all protected links
        document.querySelectorAll('.profile-link, .protected-link').forEach(link => {
            link.addEventListener('click', redirectToMembership);
        });
    }
});
</script>


<script>
  // Disable right click
  document.addEventListener('contextmenu', function(e) { e.preventDefault(); });

  // Disable selection start (extra)
  document.addEventListener('selectstart', function(e) { e.preventDefault(); });

  // Disable common keyboard shortcuts: Ctrl+C, Ctrl+S, Ctrl+U, Ctrl+Shift+I, PrintScreen (cannot fully block PrintScreen)
  document.addEventListener('keydown', function(e) {
    // ctrl/command key detection
    const ctrl = e.ctrlKey || e.metaKey;
    // block ctrl+c, ctrl+x, ctrl+s, ctrl+u, ctrl+shift+i
    if (ctrl && (e.key === 'c' || e.key === 'x' || e.key === 's' || e.key === 'u')) {
      e.preventDefault();
      return false;
    }
    if (ctrl && e.shiftKey && e.key.toLowerCase() === 'i') {
      e.preventDefault();
      return false;
    }
    // Block F12
    if (e.key === 'F12') { e.preventDefault(); return false; }
  });

  // Prevent copy via clipboard events
  document.addEventListener('copy', function(e) {
    e.preventDefault();
    // optional - replace clipboard text with message
    if (e.clipboardData) {
      e.clipboardData.setData('text/plain', 'Content protected by syedshayan.com — not allowed to copy.');
    }
  });

  // Prevent drag for images or links
  document.addEventListener('dragstart', function(e) {
    e.preventDefault();
  });
  
</script>
<style>
  /* disable text selection & dragging */
  body, p, h1, h2, h3, h4, h5, h6, a, span, div {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }
  img { -webkit-user-drag: none; user-drag: none; pointer-events: none; }

  /* optional overlay watermark container */
  .session-watermark {
    position: fixed;
    left: 0; top: 0;
    width: 100%; height: 100%;
    pointer-events: none; /* doesn't block clicks */
    z-index: 9999;
    mix-blend-mode: multiply;
    opacity: 0.12;
    font-size: 20px;
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
    padding: 12px;
    flex-wrap: wrap;
  }
  .session-watermark span {
    margin-right: 30px;
    transform: rotate(-25deg);
    white-space: nowrap;
  }
</style>
<div id="membersModalHost"></div>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VK9ZXFS94N"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VK9ZXFS94N');
</script>
  
  
<style>  
    @keyframes gold-shimmer {  
        0%, 100% {  
            border-color: rgba(212, 175, 55, 0.3);  
        }  
        50% {  
            border-color: #d4af37;  
            box-shadow: 0 0 15px rgba(212, 175, 55, 0.1);  
        }  
    }  
 
    .animate-gold {  
        animation: gold-shimmer 3s infinite ease-in-out;  
    }  
 
    .popup-content {  
        transform: scale(0.95);  
        opacity: 0;  
        transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);  
    }  
 
    #siteGuestPopup.active .popup-content {  
        transform: scale(1);  
        opacity: 1;  
    }  
</style>  
  
<div id="siteGuestPopup" class="fixed inset-0 z-[10060] hidden items-center justify-center p-4 bg-[#040f1e]/80 backdrop-blur-md">  
 
    <div class="popup-content relative w-full max-w-[380px] rounded-[24px] border border-[#dfbf72]/40 bg-white p-5 shadow-2xl animate-gold overflow-hidden">  
          
        <button id="closePopup" class="absolute top-4 right-4 h-8 w-8 flex items-center justify-center rounded-full bg-slate-100 text-slate-500 hover:bg-slate-200 transition-all"> 
            <i class="fas fa-times text-xs"></i> 
        </button>  
  
        <div class="flex items-center gap-4">  
 
            <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-gradient-to-br from-[#043f6c] to-[#0e6aa8] text-xl text-white shadow-lg">  
                <i class="fas fa-user-plus"></i>  
            </div>  
  
            <span class="inline-flex items-center gap-1.5 rounded-full bg-[#043f6c]/5 px-3 py-1.5 text-[10px] font-bold uppercase tracking-wider text-[#043f6c]">  
                <i class="fas fa-crown text-[#d4af37]"></i> Free Membership  
            </span>  
 
        </div>  
  
        <div class="mt-4">  
 
            <h2 class="text-xl font-bold leading-tight text-slate-900"> 
                Do you want to become a  
                <span class="text-[#b38b1d]">Member?</span> 
            </h2>  
 
            <p class="mt-1 text-sm text-slate-500 leading-snug"> 
                Join to unlock comments, likes, and exclusive features. 
            </p>  
 
        </div>  
  
        <div class="mt-5 flex gap-2">  
 
            <button id="laterBtn" class="flex-1 rounded-xl bg-slate-50 py-3 text-xs font-bold text-slate-600 hover:bg-slate-100 transition-colors"> 
                Maybe Later 
            </button>  
 
            <button id="joinBtn" class="flex-1 rounded-xl bg-gradient-to-r from-[#043f6c] to-[#0d6eaf] py-3 text-xs font-bold text-white shadow-md hover:brightness-110 active:scale-95 transition-all"> 
                I Want to Join 
            </button>  
 
        </div>  
 
    </div>  
 
</div>  
  
<script>  
(function () {  
 
    const get = (id) => document.getElementById(id);  
    const popup = get('siteGuestPopup');  
 
    if (!popup) return;  
 
    /* 
    |-------------------------------------------------------------------------- 
    | Popup Timing 
    |-------------------------------------------------------------------------- 
    | Har fresh page visit par:
    | 40 seconds OR 50% scroll, jo pehle ho, popup sirf 1 dafa.
    */ 
    const FIRST_DELAY = 40 * 1000; 
    const SCROLL_TRIGGER = 0.50; // 50% page scroll
 
    let isPopupVisible = false; 
    let popupShown = false; 
    let popupTimer = null; 
 
 
    /* 
    |-------------------------------------------------------------------------- 
    | Show Popup 
    |-------------------------------------------------------------------------- 
    */ 
    function showPopup() {  
 
        // Is page visit mein sirf 1 dafa 
        if (popupShown || isPopupVisible) return; 
 
        popupShown = true; 
        isPopupVisible = true; 
 
        popup.classList.remove('hidden');  
        popup.classList.add('flex');  
 
        setTimeout(() => {  
            popup.classList.add('active');  
        }, 10);  
 
        document.body.style.overflow = 'hidden';  
    } 
 
 
    /* 
    |-------------------------------------------------------------------------- 
    | Hide Popup 
    |-------------------------------------------------------------------------- 
    */ 
    function hidePopup() {  
 
        popup.classList.remove('active');  
        popup.classList.remove('flex');  
        popup.classList.add('hidden');  
 
        document.body.style.overflow = '';  
        isPopupVisible = false; 
 
        /* 
         * Yahan koi 5-minute timer restart nahi hoga. 
         * Is page visit mein popup dobara nahi aayega. 
         */ 
        if (popupTimer) { 
            clearTimeout(popupTimer); 
            popupTimer = null; 
        } 
    } 
 
 
    /*
    |--------------------------------------------------------------------------
    | Show On 50% Scroll
    |--------------------------------------------------------------------------
    | Agar visitor page ka 50% scroll kar le to popup show hoga.
    */
    function checkScrollProgress() {

        if (popupShown || isPopupVisible) return;

        const documentHeight = document.documentElement.scrollHeight;
        const viewportHeight = window.innerHeight;
        const scrollableHeight = documentHeight - viewportHeight;

        if (scrollableHeight <= 0) return;

        const currentScroll = window.scrollY || window.pageYOffset;
        const scrollPercentage = currentScroll / scrollableHeight;

        if (scrollPercentage >= SCROLL_TRIGGER) {
            showPopup();
        }
    }

    window.addEventListener('scroll', checkScrollProgress, { passive: true });
 
 
    /* 
    |-------------------------------------------------------------------------- 
    | Show Once After 40 Seconds 
    |-------------------------------------------------------------------------- 
    */ 
    popupTimer = setTimeout(() => {  
        showPopup();  
    }, FIRST_DELAY); 
 
 
    /* 
    |-------------------------------------------------------------------------- 
    | Buttons 
    |-------------------------------------------------------------------------- 
    */ 
    const closeBtn = get('closePopup');  
    const laterBtn = get('laterBtn');  
    const joinBtn = get('joinBtn');  
 
 
    // Outside click 
    popup.addEventListener('click', function(e) {  
 
        if (e.target === this) {  
            hidePopup();  
        }  
 
    });  
 
 
    // Close button 
    if (closeBtn) {  
 
        closeBtn.addEventListener('click', function(e) {  
            e.stopPropagation();  
            hidePopup();  
        });  
 
    }  
 
 
    // Maybe Later 
    if (laterBtn) {  
 
        laterBtn.addEventListener('click', function(e) {  
            e.stopPropagation();  
            hidePopup();  
        });  
 
    }  
 
 
    // Join button 
    if (joinBtn) {  
 
        joinBtn.addEventListener('click', function() {  
 
            document.cookie =  
                "redirect_message=" +  
                encodeURIComponent("Join to unlock all features") +  
                "; path=/";  
 
            window.location.href = 'membership-form.php';  
 
        });  
 
    } 
 
 
    /* 
    |-------------------------------------------------------------------------- 
    | Cleanup 
    |-------------------------------------------------------------------------- 
    */ 
    window.addEventListener('beforeunload', function() {  
 
        if (popupTimer) {  
            clearTimeout(popupTimer);  
        }  
 
    });  
 
})();  
</script>  </div>
  <script>
    document.oncontextmenu = null;
    document.onkeydown = null;
    window.onkeydown = null;

    if (document.body) {
      document.body.oncontextmenu = null;
    }

    /* Right Click اور Inspect shortcuts کو block ہونے سے بچائیں */
    window.addEventListener('contextmenu', function (event) {
      event.stopImmediatePropagation();
    }, true);

    window.addEventListener('keydown', function (event) {

      const key = event.key.toLowerCase();

      const inspectShortcut =
        event.key === 'F12' ||
        (event.ctrlKey && event.shiftKey && ['i', 'j', 'c'].includes(key)) ||
        (event.ctrlKey && key === 'u');

      if (inspectShortcut) {
        event.stopImmediatePropagation();
      }

    }, true);
  </script>

  <!-- Pakistan Administrative Future responsive scaling -->
  <script>
    (function () {
      const DESIGN_WIDTH = 1600;
      const DESIGN_HEIGHT = 900;

      function resizeOnePakAdmin(hero) {
        if (!hero) return;

        const stage = hero.querySelector(".pak-admin-stage");
        if (!stage) return;

        const containerWidth = hero.getBoundingClientRect().width;

        if (!containerWidth || containerWidth <= 0) {
          return;
        }

        const scale = containerWidth / DESIGN_WIDTH;
        stage.style.transform = "scale(" + scale + ")";
        hero.style.height = (DESIGN_HEIGHT * scale) + "px";
      }

      function initPakAdminCards() {
        const heroes = document.querySelectorAll(".pak-admin-hero");

        heroes.forEach(function (hero) {
          resizeOnePakAdmin(hero);

          if (typeof ResizeObserver !== "undefined" && !hero._pakAdminObserved) {
            const observer = new ResizeObserver(function () {
              resizeOnePakAdmin(hero);
            });

            observer.observe(hero);
            hero._pakAdminObserved = true;
          }
        });
      }

      window.addEventListener("load", initPakAdminCards);
      window.addEventListener("resize", initPakAdminCards);
      window.addEventListener("orientationchange", function () {
        setTimeout(initPakAdminCards, 120);
      });
      window.addEventListener("pageshow", initPakAdminCards);
      initPakAdminCards();
    })();
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {

      const track = document.getElementById('logos-track');

      if (!track) {
        return;
      }

      /* Prevent running twice */
      if (track.dataset.marqueeReady === 'true') {
        return;
      }


      /* ==========================================
         GET ORIGINAL 3 LOGOS
      ========================================== */

      const originalItems = Array.from(track.children);

      if (!originalItems.length) {
        return;
      }


      /* ==========================================
         CREATE FIRST COMPLETE GROUP
      ========================================== */

      const firstGroup = document.createElement('div');

      firstGroup.className = 'logos-group';


      originalItems.forEach(function (item) {

        firstGroup.appendChild(item);

      });


      /* ==========================================
         CREATE EXACT COPY
      ========================================== */

      const secondGroup = firstGroup.cloneNode(true);

      secondGroup.classList.add('clone-logos-group');

      secondGroup.setAttribute(
        'aria-hidden',
        'true'
      );


      secondGroup
        .querySelectorAll('a')
        .forEach(function (link) {

          link.setAttribute(
            'tabindex',
            '-1'
          );

        });


      /* ==========================================
         ADD BOTH GROUPS TO TRACK
      ========================================== */

      track.innerHTML = '';

      track.appendChild(firstGroup);

      track.appendChild(secondGroup);


      /* ==========================================
         EXACT SCROLL DISTANCE
      ========================================== */

      function setExactMarqueeDistance() {

        /*
         * Exact width of first complete group.
         * We move precisely this distance.
         */

        const groupWidth =
          firstGroup.getBoundingClientRect().width;


        /*
         * Store NEGATIVE value directly.
         * Example: -504px
         */

        track.style.setProperty(
          '--marquee-distance',
          '-' + groupWidth + 'px'
        );

      }


      /* Measure after browser layout */
      requestAnimationFrame(function () {

        requestAnimationFrame(function () {

          setExactMarqueeDistance();

          track.classList.add(
            'marquee-ready'
          );

        });

      });


      /* Recalculate when screen changes */
      window.addEventListener(
        'resize',
        setExactMarqueeDistance
      );


      window.addEventListener(
        'orientationchange',
        function () {

          setTimeout(
            setExactMarqueeDistance,
            150
          );

        }
      );


      track.dataset.marqueeReady = 'true';

    });
  </script>


  <script>
    // Keep the Housing Societies section directly below Digital Library on desktop.
    document.addEventListener('DOMContentLoaded', function () {
      const digitalLibrary = document.getElementById('digital-library-pdfmatch');
      const desktopHousing = document.getElementById('housing-societies-desktop');

      if (digitalLibrary && desktopHousing) {
        digitalLibrary.insertAdjacentElement('afterend', desktopHousing);
      }
    });
  </script>


<script>
document.addEventListener('DOMContentLoaded', function () {
  const sliders = Array.from(document.querySelectorAll('.rp-paged-slider'));

  sliders.forEach(function (slider) {
    const track = slider.querySelector('.rp-pages');
    const originalPages = Array.from(slider.querySelectorAll('.rp-page'));
    const dots = Array.from(slider.querySelectorAll('.rp-dots button'));
    const prevButton = slider.querySelector('.rp-prev');
    const nextButton = slider.querySelector('.rp-next');

    if (!track || originalPages.length === 0) return;

    const total = originalPages.length;
    const infiniteMobile = slider.classList.contains('rp-mobile') && total > 1;
    let active = 0;
    let scrollTimer = null;
    let navLocked = false;

    function normalise(index) {
      return ((index % total) + total) % total;
    }

    function setDot(index) {
      active = infiniteMobile
        ? normalise(index)
        : Math.max(0, Math.min(index, total - 1));

      dots.forEach(function (dot, i) {
        const isActive = i === active;
        dot.classList.toggle('active', isActive);
        dot.setAttribute('aria-current', isActive ? 'true' : 'false');
      });

      if (prevButton) prevButton.disabled = infiniteMobile ? false : active === 0;
      if (nextButton) nextButton.disabled = infiniteMobile ? false : active === total - 1;
    }

    function pageLeft(page) {
      return page.offsetLeft - track.offsetLeft;
    }

    function smoothTo(page) {
      if (!page) return;
      track.style.removeProperty('scroll-behavior');
      track.scrollTo({
        left: pageLeft(page),
        behavior: 'smooth'
      });
    }

    function instantTo(page) {
      if (!page) return;

      /* CSS has scroll-behavior:smooth !important, so temporarily
         override it to make the loop reset completely invisible. */
      track.style.setProperty('scroll-behavior', 'auto', 'important');
      track.scrollLeft = pageLeft(page);

      requestAnimationFrame(function () {
        track.style.removeProperty('scroll-behavior');
      });
    }

    /* =========================================================
       MOBILE INFINITE LOOP
       Visible order remains:
       1,2 -> 2,3 -> 3,4 -> 4,5 -> 5,1 -> 1,2 -> ...
       The first two cards are cloned after Card 5 and Card 5 is
       cloned before Card 1. The reset happens on identical content,
       so there is no visible backward jump.
       ========================================================= */
    if (infiniteMobile) {
      function prepareClone(node, position) {
        const clone = node.cloneNode(true);
        clone.setAttribute('data-rp-clone', position);
        clone.setAttribute('aria-hidden', 'true');

        clone.querySelectorAll('a, button, input, select, textarea, [tabindex]').forEach(function (el) {
          el.setAttribute('tabindex', '-1');
        });

        return clone;
      }

      const beforeClone = prepareClone(originalPages[total - 1], 'before');
      const firstClone = prepareClone(originalPages[0], 'after-first');
      const secondClone = prepareClone(originalPages[1], 'after-second');

      track.insertBefore(beforeClone, originalPages[0]);
      track.appendChild(firstClone);
      track.appendChild(secondClone);

      const physicalPages = Array.from(track.children).filter(function (el) {
        return el.classList && el.classList.contains('rp-page');
      });

      /* Physical positions after cloning:
         0 = clone Card 5
         1..total = original Cards 1..5
         total+1 = clone Card 1
         total+2 = clone Card 2
      */
      let physicalActive = 1;

      function logicalFromPhysical(index) {
        if (index === 0) return total - 1;
        if (index >= 1 && index <= total) return index - 1;
        if (index === total + 1) return 0;
        if (index === total + 2) return 1;
        return 0;
      }

      function goToPhysical(index, smooth) {
        const maxPhysical = total + 2;
        index = Math.max(0, Math.min(index, maxPhysical));
        const page = physicalPages[index];
        if (!page) return;

        physicalActive = index;
        setDot(logicalFromPhysical(index));

        if (smooth === false) {
          instantTo(page);
        } else {
          smoothTo(page);
        }
      }

      function goToLogical(index, smooth) {
        const logical = normalise(index);
        goToPhysical(logical + 1, smooth);
      }

      dots.forEach(function (dot, index) {
        dot.addEventListener('click', function () {
          if (navLocked) return;
          navLocked = true;
          goToLogical(index, true);
        });
      });

      if (prevButton) {
        prevButton.addEventListener('click', function () {
          if (navLocked) return;
          navLocked = true;
          goToPhysical(physicalActive - 1, true);
        });
      }

      if (nextButton) {
        nextButton.addEventListener('click', function () {
          if (navLocked) return;
          navLocked = true;
          goToPhysical(physicalActive + 1, true);
        });
      }

      track.addEventListener('scroll', function () {
        clearTimeout(scrollTimer);

        scrollTimer = setTimeout(function () {
          let nearest = 0;
          let best = Infinity;

          physicalPages.forEach(function (page, i) {
            const distance = Math.abs(pageLeft(page) - track.scrollLeft);
            if (distance < best) {
              best = distance;
              nearest = i;
            }
          });

          /* Card 5 clone before Card 1 -> silently move to the real
             Card 5, where the visible pair is still exactly 5 + 1. */
          if (nearest === 0) {
            physicalActive = total;
            setDot(total - 1);
            instantTo(physicalPages[total]);
            navLocked = false;
            return;
          }

          /* Clone Card 1 after Card 5 -> silently return to real Card 1.
             Both positions display exactly Card 1 + Card 2. */
          if (nearest === total + 1) {
            physicalActive = 1;
            setDot(0);
            instantTo(physicalPages[1]);
            navLocked = false;
            return;
          }

          /* Safety for a very fast iPhone swipe reaching the second clone. */
          if (nearest === total + 2) {
            physicalActive = 2;
            setDot(1);
            instantTo(physicalPages[2]);
            navLocked = false;
            return;
          }

          physicalActive = nearest;
          setDot(logicalFromPhysical(nearest));
          navLocked = false;
        }, 90);
      }, { passive: true });

      setDot(0);
      requestAnimationFrame(function () {
        goToPhysical(1, false);
      });

      return;
    }

    /* Desktop keeps the existing finite slider behaviour unchanged. */
    function goTo(index, smooth) {
      index = Math.max(0, Math.min(index, total - 1));
      const page = originalPages[index];
      if (!page) return;

      if (smooth === false) {
        instantTo(page);
      } else {
        smoothTo(page);
      }
      setDot(index);
    }

    dots.forEach(function (dot, index) {
      dot.addEventListener('click', function () {
        goTo(index, true);
      });
    });

    if (prevButton) {
      prevButton.addEventListener('click', function () {
        goTo(active - 1, true);
      });
    }

    if (nextButton) {
      nextButton.addEventListener('click', function () {
        goTo(active + 1, true);
      });
    }

    track.addEventListener('scroll', function () {
      clearTimeout(scrollTimer);
      scrollTimer = setTimeout(function () {
        let nearest = 0;
        let best = Infinity;

        originalPages.forEach(function (page, i) {
          const distance = Math.abs(pageLeft(page) - track.scrollLeft);
          if (distance < best) {
            best = distance;
            nearest = i;
          }
        });

        setDot(nearest);
      }, 70);
    }, { passive: true });

    setDot(0);
    requestAnimationFrame(function () {
      goTo(0, false);
    });
  });
});
</script>


<style>

.syed-network-otd-icon-wrap {
    position: relative;
    right: 30px;
}

.syed-network-otd-calendar-bg {
    position: absolute;
    left: 100%;
    top: 50%;
    width: 88px;
    height: 115px;   /* increased height */
    object-fit: fill; /* this makes the image stretch vertically */
    transform: translate(-50%, -50%);
    z-index: 1;
}

.syed-network-otd-icon {
    position: relative;
    z-index: 2;
}

.syed-network-otd-live-day,
.syed-network-otd-live-number,
.syed-network-otd-live-month {
    position: relative;
    z-index: 3;
}

/* =========================================================
   FINAL MOBILE COMPACT FIX
   - Methodology button one line + shorter
   - Platform cards shorter
   - Removes unnecessary vertical gaps
   - Keeps all 4 platform cards in one row
   ========================================================= */

@media (max-width: 700px) {

  /* Research & Policy -> Public Opinion gap */
  .rp-mobile.rp-paged-slider {
    margin-bottom: 0 !important;
    padding-bottom: 0 !important;
  }

  .rp-mobile.rp-paged-slider .rp-controls {
    margin-bottom: 0 !important;
  }

  #public-opinion-pdfmatch {
    padding-top: 22px !important;
    padding-bottom: 18px !important;
  }

  /* METHODLOGY & STANDARDS: compact + always one line */
  #public-opinion-pdfmatch .survey-button {
    width: max-content !important;
    max-width: 100% !important;
    min-height: 0 !important;
    height: auto !important;
    margin-top: 14px !important;
    padding: 9px 12px !important;
    gap: 6px !important;
    border-radius: 7px !important;
    font-size: clamp(11px, 2.7vw, 12px) !important;
    line-height: 1 !important;
    font-weight: 800 !important;
    white-space: nowrap !important;
    flex-wrap: nowrap !important;
  }

  #public-opinion-pdfmatch .survey-button b {
    flex: 0 0 auto !important;
    font-size: 19px !important;
    line-height: 1 !important;
  }

  /* HOW THE PLATFORM WORKS heading closer to button/cards */
  #public-opinion-pdfmatch .how {
    margin-top: 30px !important;
    margin-bottom: 14px !important;
    font-size: clamp(17px, 4.7vw, 20px) !important;
    line-height: 1.1 !important;
    white-space: nowrap !important;
  }

  /* Four cards stay in one row */
  #public-opinion-pdfmatch .steps {
    grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
    gap: 4px !important;
    align-items: stretch !important;
  }

  /* Remove the unnecessary tall empty area */
  #public-opinion-pdfmatch .step {
    min-width: 0 !important;
    min-height: 124px !important;
    height: auto !important;
    padding: 8px 5px 8px !important;
    border: 0 !important;
    border-radius: 7px !important;
    background: #fff !important;
    box-shadow: 0 1px 5px rgba(15, 23, 42, .10) !important;
    overflow: hidden !important;
  }

  #public-opinion-pdfmatch .step .num {
    width: 24px !important;
    height: 24px !important;
    min-width: 24px !important;
    min-height: 24px !important;
    font-size: 11px !important;
    line-height: 24px !important;
  }

  #public-opinion-pdfmatch .step img {
    width: 23px !important;
    height: 23px !important;
    min-width: 23px !important;
    min-height: 23px !important;
    margin-left: 3px !important;
    object-fit: contain !important;
  }

  #public-opinion-pdfmatch .step h3 {
    margin-top: 7px !important;
    font-size: clamp(11px, 2.65vw, 11.5px) !important;
    line-height: 1.05 !important;
    font-weight: 800 !important;
    overflow-wrap: normal !important;
    word-break: normal !important;
  }

  #public-opinion-pdfmatch .step p {
    margin-top: 4px !important;
    font-size: clamp(11px, 2.15vw, 11px) !important;
    line-height: 1.13 !important;
    font-weight: 600 !important;
    overflow-wrap: normal !important;
    word-break: normal !important;
  }

  /* Cards -> View All Surveys gap */
  #public-opinion-pdfmatch .survey-all {
    margin-top: 14px !important;
    margin-bottom: 0 !important;
    font-size: 16px !important;
  }

  /* View All Surveys -> Digital Library gap */
  #digital-library-pdfmatch {
    padding-top: 34px !important;
  }
}

@media (max-width: 420px) {
  #public-opinion-pdfmatch {
    padding-top: 18px !important;
  }

  #public-opinion-pdfmatch .survey-button {
    margin-top: 12px !important;
    padding: 8px 9px !important;
    gap: 4px !important;
    font-size: clamp(11px, 2.55vw, 11px) !important;
  }

  #public-opinion-pdfmatch .survey-button b {
    font-size: 17px !important;
  }

  #public-opinion-pdfmatch .how {
    margin-top: 25px !important;
    margin-bottom: 12px !important;
  }

  #public-opinion-pdfmatch .steps {
    gap: 3px !important;
  }

  #public-opinion-pdfmatch .step {
    min-height: 120px !important;
    padding: 7px 4px 7px !important;
  }

  #public-opinion-pdfmatch .step .num {
    width: 22px !important;
    height: 22px !important;
    min-width: 22px !important;
    min-height: 22px !important;
    font-size: 11px !important;
    line-height: 22px !important;
  }

  #public-opinion-pdfmatch .step img {
    width: 21px !important;
    height: 21px !important;
    min-width: 21px !important;
    min-height: 21px !important;
    margin-left: 2px !important;
  }

  #public-opinion-pdfmatch .step h3 {
    margin-top: 6px !important;
    font-size: clamp(11px, 2.55vw, 11px) !important;
  }

  #public-opinion-pdfmatch .step p {
    margin-top: 3px !important;
    font-size: clamp(11px, 2.05vw, 11px) !important;
  }

  #public-opinion-pdfmatch .survey-all {
    margin-top: 12px !important;
  }

  #digital-library-pdfmatch {
    padding-top: 28px !important;
  }
}

/* Very narrow phones need a little more card height because text wraps more. */
@media (max-width: 350px) {
  #public-opinion-pdfmatch .survey-top {
    grid-template-columns: minmax(0, 1fr) 92px !important;
    gap: 5px !important;
  }

  #public-opinion-pdfmatch .survey-hand img {
    width: 92px !important;
    max-width: 92px !important;
  }

  #public-opinion-pdfmatch .survey-button {
    padding: 7px 7px !important;
    gap: 3px !important;
    font-size: 11px !important;
  }

  #public-opinion-pdfmatch .step {
    min-height: 128px !important;
  }
}
</style>


<!-- ===== USER REQUEST 21-09: FINAL MOBILE CLEANUP ===== -->
<style>
@media (max-width: 767px) {

  /* RESEARCH & POLICY SLIDER:
     remove the large empty space between paragraph, pills and CTA */
  .rp-mobile.rp-paged-slider {
    margin-bottom: 0 !important;
    padding-bottom: 0 !important;
  }

  .rp-mobile.rp-paged-slider .rp-pages {
    padding-bottom: 4px !important;
  }

  .rp-mobile.rp-paged-slider .rp-page {
    align-items: start !important;
  }

  .rp-mobile.rp-paged-slider .rp-page .rp-card,
  .rp-mobile.rp-paged-slider .rp-card {
    height: auto !important;
    min-height: 0 !important;
    align-self: start !important;
    padding-bottom: 11px !important;
  }

  .rp-mobile.rp-paged-slider .rp-card > p {
    margin-bottom: 0 !important;
  }

  .rp-mobile.rp-paged-slider .rp-tags,
  .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags,
  .rp-mobile.rp-paged-slider .rp-reference-card .rp-feature-tags {
    margin-top: 10px !important;
    margin-bottom: 10px !important;
  }

  .rp-mobile.rp-paged-slider .rp-btn {
    margin-top: 0 !important;
  }

  .rp-mobile.rp-paged-slider .rp-controls {
    margin-top: 5px !important;
    margin-bottom: 0 !important;
  }

  /* PUBLIC OPINION starts closer to the slider */
  #public-opinion-pdfmatch {
    padding-top: 18px !important;
    padding-bottom: 14px !important;
  }

  /* METHODOLOGY & STANDARDS - force a single line */
  #public-opinion-pdfmatch .survey-button {
    display: inline-flex !important;
    width: auto !important;
    max-width: 100% !important;
    min-width: 0 !important;
    min-height: 0 !important;
    height: auto !important;
    align-items: center !important;
    justify-content: center !important;
    flex-wrap: nowrap !important;
    white-space: nowrap !important;
    gap: 4px !important;
    margin-top: 12px !important;
    padding: 8px 9px !important;
    font-size: clamp(11px, 2.45vw, 11px) !important;
    line-height: 1 !important;
  }

  #public-opinion-pdfmatch .survey-button b {
    flex: 0 0 auto !important;
    font-size: 17px !important;
    line-height: 1 !important;
  }

  /* HOW THE PLATFORM WORKS - compact icon cards */
  #public-opinion-pdfmatch .how {
    margin-top: 24px !important;
    margin-bottom: 11px !important;
  }

  #public-opinion-pdfmatch .steps {
    grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
    gap: 3px !important;
    align-items: stretch !important;
  }

  #public-opinion-pdfmatch .step {
    min-width: 0 !important;
    min-height: 0 !important;
    height: auto !important;
    padding: 6px 4px 7px !important;
    border: 0 !important;
    border-radius: 7px !important;
    background: #fff !important;
    box-shadow: 0 1px 5px rgba(15, 23, 42, .10) !important;
    overflow: hidden !important;
  }

  #public-opinion-pdfmatch .step .num {
    width: 21px !important;
    height: 21px !important;
    min-width: 21px !important;
    min-height: 21px !important;
    line-height: 21px !important;
    font-size: 11px !important;
  }

  #public-opinion-pdfmatch .step img {
    width: 20px !important;
    height: 20px !important;
    min-width: 20px !important;
    min-height: 20px !important;
    margin-left: 2px !important;
    padding: 0 !important;
    object-fit: contain !important;
  }

  #public-opinion-pdfmatch .step h3 {
    margin-top: 5px !important;
    margin-bottom: 0 !important;
    font-size: clamp(11px, 2.35vw, 11px) !important;
    line-height: 1.02 !important;
  }

  #public-opinion-pdfmatch .step p {
    margin-top: 3px !important;
    margin-bottom: 0 !important;
    font-size: clamp(11px, 1.95vw, 11px) !important;
    line-height: 1.1 !important;
  }

  #public-opinion-pdfmatch .survey-all {
    margin-top: 12px !important;
  }
}

@media (max-width: 390px) {
  #public-opinion-pdfmatch .survey-button {
    padding: 7px 7px !important;
    gap: 3px !important;
    font-size: 11px !important;
  }

  #public-opinion-pdfmatch .survey-button b {
    font-size: 15px !important;
  }

  #public-opinion-pdfmatch .step {
    padding: 5px 3px 6px !important;
  }

  #public-opinion-pdfmatch .step .num {
    width: 20px !important;
    height: 20px !important;
    min-width: 20px !important;
    min-height: 20px !important;
    line-height: 20px !important;
  }

  #public-opinion-pdfmatch .step img {
    width: 19px !important;
    height: 19px !important;
    min-width: 19px !important;
    min-height: 19px !important;
  }
}
</style>


<!-- ===== 21-09 FINAL: EQUAL RESEARCH CARDS + COMPACT DIGITAL LIBRARY BOXES ===== -->
<style>
@media (max-width: 767px) {

  /* Research & Policy:
     every slider card gets exactly the same outer height.
     The tallest card decides the row height, and all other cards stretch to it. */
  .rp-mobile.rp-paged-slider .rp-pages {
    align-items: stretch !important;
  }

  .rp-mobile.rp-paged-slider .rp-page {
    align-self: stretch !important;
    align-items: stretch !important;
  }

  .rp-mobile.rp-paged-slider .rp-page .rp-card,
  .rp-mobile.rp-paged-slider .rp-card {
    height: auto !important;
    min-height: 0 !important;
    align-self: stretch !important;
  }

  /* Digital Library category boxes:
     shorter height, less padding, and more useful width for longer labels. */
  #digital-library-pdfmatch .libcats {
    grid-template-columns:
      minmax(0, 1.14fr)
      minmax(0, 1.08fr)
      minmax(0, .82fr)
      minmax(0, 1.08fr) !important;
    gap: 3px !important;
    margin-top: 14px !important;
  }

  #digital-library-pdfmatch .libcat {
    min-width: 0 !important;
    min-height: 34px !important;
    height: 34px !important;
    padding: 3px 2px !important;
    gap: 2px !important;
    font-size: clamp(11px, 1.95vw, 11px) !important;
    line-height: 1 !important;
    white-space: nowrap !important;
    overflow: hidden !important;
  }

  #digital-library-pdfmatch .libcat img,
  #digital-library-pdfmatch .libcat .pdf-lib-symbol {
    width: 18px !important;
    height: 18px !important;
    min-width: 18px !important;
    min-height: 18px !important;
    flex: 0 0 18px !important;
    margin: 0 !important;
    object-fit: contain !important;
  }
}

@media (max-width: 390px) {
  #digital-library-pdfmatch .libcats {
    grid-template-columns:
      minmax(0, 1.16fr)
      minmax(0, 1.10fr)
      minmax(0, .80fr)
      minmax(0, 1.10fr) !important;
    gap: 2px !important;
  }

  #digital-library-pdfmatch .libcat {
    min-height: 32px !important;
    height: 32px !important;
    padding: 2px 1px !important;
    gap: 2px !important;
    font-size: clamp(11px, 1.9vw, 11px) !important;
  }

  #digital-library-pdfmatch .libcat img,
  #digital-library-pdfmatch .libcat .pdf-lib-symbol {
    width: 16px !important;
    height: 16px !important;
    min-width: 16px !important;
    min-height: 16px !important;
    flex-basis: 16px !important;
  }
}
</style>



<!-- ===== 21-09 FINAL: UNIFORM RESEARCH CARD TEXT + EXTRA COMPACT LIBRARY BOXES ===== -->
<style>
@media (max-width: 767px) {
  /* Keep typography identical on every Research & Policy slider card. */
  .rp-mobile.rp-paged-slider .rp-card-label,
  .rp-mobile.rp-paged-slider .rp-card-label > span {
    font-size: 11px !important;
    line-height: 1.22 !important;
    font-weight: 500 !important;
  }

  .rp-mobile.rp-paged-slider .rp-card h3,
  .rp-mobile.rp-paged-slider .rp-reference-card h3 {
    font-size: 18px !important;
    line-height: 1.02 !important;
    font-weight: 800 !important;
    letter-spacing: -0.2px !important;
  }

  .rp-mobile.rp-paged-slider .rp-card > p,
  .rp-mobile.rp-paged-slider .rp-reference-card > p {
    font-size: 13px !important;
    line-height: 1.30 !important;
    font-weight: 400 !important;
  }

  .rp-mobile.rp-paged-slider .rp-tags span,
  .rp-mobile.rp-paged-slider .rp-feature-tags span {
    font-size: 11px !important;
    line-height: 1 !important;
    font-weight: 700 !important;
  }

  .rp-mobile.rp-paged-slider .rp-btn {
    font-size: 11px !important;
    line-height: 1 !important;
    font-weight: 600 !important;
  }

  /* Digital Library category boxes: much shorter while keeping all text on one line. */
  #digital-library-pdfmatch .libcats {
    grid-template-columns:
      minmax(0, 1.18fr)
      minmax(0, 1.12fr)
      minmax(0, .80fr)
      minmax(0, 1.14fr) !important;
    gap: 3px !important;
    margin-top: 12px !important;
  }

  #digital-library-pdfmatch .libcat {
    min-height: 28px !important;
    height: 28px !important;
    padding: 2px 2px !important;
    gap: 2px !important;
    font-size: 11px !important;
    line-height: 1 !important;
    white-space: nowrap !important;
    overflow: hidden !important;
  }

  #digital-library-pdfmatch .libcat img,
  #digital-library-pdfmatch .libcat .pdf-lib-symbol {
    width: 14px !important;
    height: 14px !important;
    min-width: 14px !important;
    min-height: 14px !important;
    flex: 0 0 14px !important;
    margin: 0 !important;
    object-fit: contain !important;
  }
}

@media (max-width: 390px) {
  .rp-mobile.rp-paged-slider .rp-card-label,
  .rp-mobile.rp-paged-slider .rp-card-label > span {
    font-size: 11px !important;
  }

  .rp-mobile.rp-paged-slider .rp-card h3,
  .rp-mobile.rp-paged-slider .rp-reference-card h3 {
    font-size: 16px !important;
  }

  .rp-mobile.rp-paged-slider .rp-card > p,
  .rp-mobile.rp-paged-slider .rp-reference-card > p {
    font-size: 12px !important;
  }

  .rp-mobile.rp-paged-slider .rp-tags span,
  .rp-mobile.rp-paged-slider .rp-feature-tags span {
    font-size: 11px !important;
  }

  .rp-mobile.rp-paged-slider .rp-btn {
    font-size: 11px !important;
  }

  #digital-library-pdfmatch .libcats {
    grid-template-columns:
      minmax(0, 1.20fr)
      minmax(0, 1.14fr)
      minmax(0, .78fr)
      minmax(0, 1.16fr) !important;
    gap: 2px !important;
  }

  #digital-library-pdfmatch .libcat {
    min-height: 26px !important;
    height: 26px !important;
    padding: 1px !important;
    gap: 1px !important;
    font-size: 11px !important;
  }

  #digital-library-pdfmatch .libcat img,
  #digital-library-pdfmatch .libcat .pdf-lib-symbol {
    width: 13px !important;
    height: 13px !important;
    min-width: 13px !important;
    min-height: 13px !important;
    flex-basis: 13px !important;
  }
}
</style>



<!-- ===== 22-09 FINAL: RESEARCH & POLICY MOBILE REFERENCE MATCH ===== -->
<style>
@media (max-width: 767px) {
  /* Keep the mobile cards visually like the supplied reference: equal, clean and aligned. */
  .rp-mobile.rp-paged-slider .rp-pages {
    align-items: stretch !important;
    gap: 7px !important;
    padding-bottom: 7px !important;
  }

  .rp-mobile.rp-paged-slider .rp-page {
    align-self: stretch !important;
    align-items: stretch !important;
    display: flex !important;
  }

  .rp-mobile.rp-paged-slider .rp-page .rp-card,
  .rp-mobile.rp-paged-slider .rp-card {
    width: 100% !important;
    height: 320px !important;
    min-height: 320px !important;
    max-height: 320px !important;
    align-self: stretch !important;
    display: flex !important;
    flex-direction: column !important;
    padding: 14px 9px 10px !important;
    border-radius: 13px !important;
    overflow: hidden !important;
  }

  /* Top icon + gold category line */
  .rp-mobile.rp-paged-slider .rp-card-label,
  .rp-mobile.rp-paged-slider .rp-card-label > span {
    font-size: 11px !important;
    line-height: 1.16 !important;
    font-weight: 500 !important;
  }

  .rp-mobile.rp-paged-slider .rp-card-label {
    min-height: 48px !important;
    height: 48px !important;
    flex: 0 0 48px !important;
    gap: 6px !important;
  }

  /* Headings match the reference proportions. */
  .rp-mobile.rp-paged-slider .rp-card h3,
  .rp-mobile.rp-paged-slider .rp-reference-card h3 {
    min-height: 54px !important;
    margin: 8px 0 4px !important;
    font-size: 18px !important;
    line-height: .98 !important;
    font-weight: 800 !important;
    letter-spacing: -0.2px !important;
    overflow: visible !important;
  }

  /* Same copy size and compact vertical rhythm on every card. */
  .rp-mobile.rp-paged-slider .rp-card > p,
  .rp-mobile.rp-paged-slider .rp-reference-card > p {
    margin: 0 !important;
    font-size: 12px !important;
    line-height: 1.28 !important;
    font-weight: 400 !important;
    overflow: visible !important;
  }

  /* Pills stay together on one row where two short pills are used. */
  .rp-mobile.rp-paged-slider .rp-tags,
  .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags,
  .rp-mobile.rp-paged-slider .rp-reference-card .rp-feature-tags {
    width: 100% !important;
    display: flex !important;
    flex-wrap: nowrap !important;
    align-items: center !important;
    gap: 5px !important;
    margin: auto 0 7px !important;
    overflow: visible !important;
  }

  .rp-mobile.rp-paged-slider .rp-tags span,
  .rp-mobile.rp-paged-slider .rp-feature-tags span,
  .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags span {
    min-width: 0 !important;
    padding: 5px 5px !important;
    font-size: 11px !important;
    line-height: 1 !important;
    font-weight: 700 !important;
    white-space: nowrap !important;
  }

  /* The proposal pills must sit side-by-side exactly like the reference. */
  .rp-mobile.rp-paged-slider .rp-page[data-rp-page="1"] .rp-tags {
    flex-wrap: nowrap !important;
    gap: 5px !important;
  }

  /* Full CTA stays inside the card instead of clipping its first/last letters. */
  .rp-mobile.rp-paged-slider .rp-btn,
  .rp-mobile.rp-paged-slider .rp-reference-card .rp-btn {
    width: 100% !important;
    max-width: 100% !important;
    min-width: 0 !important;
    height: 27px !important;
    min-height: 27px !important;
    margin: 0 !important;
    padding: 0 3px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 2px !important;
    font-size: 11px !important;
    line-height: 1 !important;
    font-weight: 600 !important;
    letter-spacing: -0.28px !important;
    white-space: nowrap !important;
    overflow: hidden !important;
  }

  .rp-mobile.rp-paged-slider .rp-btn b {
    flex: 0 0 auto !important;
    font-size: 17px !important;
    line-height: 1 !important;
  }

  .rp-mobile.rp-paged-slider .rp-controls {
    margin-top: 4px !important;
  }
}

@media (max-width: 390px) {
  .rp-mobile.rp-paged-slider .rp-pages { gap: 5px !important; }
  .rp-mobile.rp-paged-slider .rp-page .rp-card,
  .rp-mobile.rp-paged-slider .rp-card {
    height: 316px !important;
    min-height: 316px !important;
    max-height: 316px !important;
    padding-left: 7px !important;
    padding-right: 7px !important;
  }

  .rp-mobile.rp-paged-slider .rp-card h3,
  .rp-mobile.rp-paged-slider .rp-reference-card h3 {
    font-size: 17px !important;
  }

  .rp-mobile.rp-paged-slider .rp-card > p,
  .rp-mobile.rp-paged-slider .rp-reference-card > p {
    font-size: 11px !important;
  }

  .rp-mobile.rp-paged-slider .rp-tags span,
  .rp-mobile.rp-paged-slider .rp-feature-tags span,
  .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags span {
    font-size: 11px !important;
    padding-left: 4px !important;
    padding-right: 4px !important;
  }

  .rp-mobile.rp-paged-slider .rp-btn,
  .rp-mobile.rp-paged-slider .rp-reference-card .rp-btn {
    font-size: 11px !important;
    letter-spacing: -0.35px !important;
    padding-left: 2px !important;
    padding-right: 2px !important;
  }
}
</style>



<!-- ===== 22-09 CARD SIZE / TYPOGRAPHY FIX — MATCH SECOND REFERENCE ===== -->
<style>
/*
   Only Research & Policy cards are changed here.
   Backend, links, slider JS and card content remain untouched.
*/
@media (max-width: 767px) {
  .rp-mobile.rp-paged-slider {
    overflow: hidden !important;
  }

  .rp-mobile.rp-paged-slider .rp-pages {
    display: flex !important;
    align-items: stretch !important;
    gap: 8px !important;
    padding: 3px 1px 10px !important;
    overflow-x: auto !important;
    overflow-y: hidden !important;
    scroll-snap-type: x mandatory !important;
    -webkit-overflow-scrolling: touch !important;
  }

  /* Always show two cards side-by-side, exactly like the reference. */
  .rp-mobile.rp-paged-slider .rp-pages::after {
    flex: 0 0 calc((100% - 8px) / 2) !important;
    min-width: calc((100% - 8px) / 2) !important;
  }

  .rp-mobile.rp-paged-slider .rp-page {
    flex: 0 0 calc((100% - 8px) / 2) !important;
    width: calc((100% - 8px) / 2) !important;
    min-width: calc((100% - 8px) / 2) !important;
    display: flex !important;
    align-items: stretch !important;
    scroll-snap-align: start !important;
  }

  .rp-mobile.rp-paged-slider .rp-page .rp-card,
  .rp-mobile.rp-paged-slider .rp-card {
    width: 100% !important;
    min-width: 0 !important;
    height: 100% !important;
    min-height: 390px !important;
    max-height: none !important;
    display: flex !important;
    flex-direction: column !important;
    padding: 17px 11px 12px !important;
    background: #ffffff !important;
    border: 1px solid #dedede !important;
    border-radius: 15px !important;
    box-shadow: 0 8px 12px rgba(0,0,0,.14) !important;
    overflow: hidden !important;
  }

  /* Gold category + icon */
  .rp-mobile.rp-paged-slider .rp-card-label {
    width: 100% !important;
    min-height: 56px !important;
    height: auto !important;
    flex: 0 0 auto !important;
    display: flex !important;
    align-items: center !important;
    gap: 8px !important;
    color: #D6A839 !important;
  }

  .rp-mobile.rp-paged-slider .rp-card-label > span {
    color: #D6A839 !important;
    font-size: 12px !important;
    line-height: 1.18 !important;
    font-weight: 500 !important;
    letter-spacing: 0 !important;
  }

  .rp-mobile.rp-paged-slider .rp-icon {
    width: 48px !important;
    height: 48px !important;
    min-width: 48px !important;
    flex: 0 0 48px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    background: transparent !important;
    border-radius: 0 !important;
    box-shadow: none !important;
  }

  .rp-mobile.rp-paged-slider .rp-icon img,
  .rp-mobile.rp-paged-slider .rp-energy-icon img,
  .rp-mobile.rp-paged-slider .rp-map-icon img,
  .rp-mobile.rp-paged-slider .rp-water-icon img {
    width: 42px !important;
    height: 42px !important;
    min-width: 42px !important;
    max-width: 42px !important;
    max-height: 42px !important;
    object-fit: contain !important;
  }

  /* Blue heading — larger like image 2 */
  .rp-mobile.rp-paged-slider .rp-card h3,
  .rp-mobile.rp-paged-slider .rp-reference-card h3 {
    min-height: 0 !important;
    margin: 13px 0 7px !important;
    color: #043E6B !important;
    font-size: 20px !important;
    line-height: .98 !important;
    font-weight: 800 !important;
    letter-spacing: -.25px !important;
    overflow: visible !important;
  }

  /* Description is deliberately bigger than the old 11–12px version. */
  .rp-mobile.rp-paged-slider .rp-card > p,
  .rp-mobile.rp-paged-slider .rp-reference-card > p {
    margin: 0 0 16px !important;
    color: #282828 !important;
    font-size: 13.5px !important;
    line-height: 1.34 !important;
    font-weight: 400 !important;
    overflow: visible !important;
  }

  /* Pills */
  .rp-mobile.rp-paged-slider .rp-tags,
  .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags,
  .rp-mobile.rp-paged-slider .rp-reference-card .rp-feature-tags {
    width: 100% !important;
    display: flex !important;
    flex-wrap: nowrap !important;
    align-items: center !important;
    gap: 5px !important;
    margin: auto 0 11px !important;
    overflow: visible !important;
  }

  .rp-mobile.rp-paged-slider .rp-tags span,
  .rp-mobile.rp-paged-slider .rp-feature-tags span,
  .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags span {
    min-width: 0 !important;
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    padding: 6px 7px !important;
    border-radius: 999px !important;
    background: #dcecff !important;
    color: #0a4b7c !important;
    font-size: 11px !important;
    line-height: 1 !important;
    font-weight: 700 !important;
    white-space: nowrap !important;
  }

  /* CTA button — same rounded dark-blue style as image 2. */
  .rp-mobile.rp-paged-slider .rp-btn,
  .rp-mobile.rp-paged-slider .rp-reference-card .rp-btn {
    width: 100% !important;
    max-width: 100% !important;
    min-width: 0 !important;
    height: 34px !important;
    min-height: 34px !important;
    margin: 0 !important;
    padding: 0 8px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 4px !important;
    border-radius: 999px !important;
    background: #043E6B !important;
    color: #fff !important;
    box-shadow: 0 4px 9px rgba(0,0,0,.25) !important;
    font-size: 11px !important;
    line-height: 1 !important;
    font-weight: 600 !important;
    letter-spacing: -.12px !important;
    text-decoration: none !important;
    white-space: nowrap !important;
    overflow: hidden !important;
  }

  .rp-mobile.rp-paged-slider .rp-btn b {
    flex: 0 0 auto !important;
    font-size: 20px !important;
    line-height: 1 !important;
    font-weight: 300 !important;
  }

  .rp-mobile.rp-paged-slider .rp-controls {
    margin-top: 7px !important;
  }

  .rp-mobile.rp-paged-slider .rp-dots {
    gap: 6px !important;
  }

  .rp-mobile.rp-paged-slider .rp-dots button {
    width: 8px !important;
    height: 8px !important;
    min-width: 8px !important;
  }
}

/* Small phones: keep the same design, only scale enough to prevent clipping. */
@media (max-width: 390px) {
  .rp-mobile.rp-paged-slider .rp-pages {
    gap: 6px !important;
  }

  .rp-mobile.rp-paged-slider .rp-pages::after,
  .rp-mobile.rp-paged-slider .rp-page {
    flex-basis: calc((100% - 6px) / 2) !important;
    width: calc((100% - 6px) / 2) !important;
    min-width: calc((100% - 6px) / 2) !important;
  }

  .rp-mobile.rp-paged-slider .rp-page .rp-card,
  .rp-mobile.rp-paged-slider .rp-card {
    min-height: 405px !important;
    padding: 15px 8px 11px !important;
  }

  .rp-mobile.rp-paged-slider .rp-card-label > span {
    font-size: 11px !important;
  }

  .rp-mobile.rp-paged-slider .rp-icon {
    width: 43px !important;
    height: 43px !important;
    min-width: 43px !important;
    flex-basis: 43px !important;
  }

  .rp-mobile.rp-paged-slider .rp-icon img,
  .rp-mobile.rp-paged-slider .rp-energy-icon img,
  .rp-mobile.rp-paged-slider .rp-map-icon img,
  .rp-mobile.rp-paged-slider .rp-water-icon img {
    width: 37px !important;
    height: 37px !important;
    min-width: 37px !important;
    max-width: 37px !important;
    max-height: 37px !important;
  }

  .rp-mobile.rp-paged-slider .rp-card h3,
  .rp-mobile.rp-paged-slider .rp-reference-card h3 {
    font-size: 18px !important;
  }

  .rp-mobile.rp-paged-slider .rp-card > p,
  .rp-mobile.rp-paged-slider .rp-reference-card > p {
    font-size: 12px !important;
    line-height: 1.32 !important;
  }

  .rp-mobile.rp-paged-slider .rp-tags span,
  .rp-mobile.rp-paged-slider .rp-feature-tags span,
  .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags span {
    padding: 5px 4px !important;
    font-size: 11px !important;
  }

  .rp-mobile.rp-paged-slider .rp-btn,
  .rp-mobile.rp-paged-slider .rp-reference-card .rp-btn {
    height: 31px !important;
    min-height: 31px !important;
    padding-left: 4px !important;
    padding-right: 4px !important;
    font-size: 11px !important;
    letter-spacing: -.2px !important;
  }
}
</style>



<style>
/* =========================================================
   22-09 FINAL MOBILE FIX
   1) Remove the large empty gap inside Research & Policy cards
   2) Make the Zameeni Haqaiq banner wider and bring it upward
   ========================================================= */
@media (max-width: 767px) {
  /* Research cards should size to their real content instead of
     stretching every card to the tallest slide. */
  .rp-mobile.rp-paged-slider .rp-pages {
    align-items: flex-start !important;
  }

  .rp-mobile.rp-paged-slider .rp-page {
    height: auto !important;
    align-self: flex-start !important;
  }

  .rp-mobile.rp-paged-slider .rp-page .rp-card {
    height: auto !important;
    min-height: 285px !important;
    padding-top: 14px !important;
    padding-bottom: 10px !important;
  }

  .rp-mobile.rp-paged-slider .rp-card > p {
    margin-bottom: 0 !important;
  }

  /* This is the main whitespace fix: pills no longer get pushed
     all the way to the bottom by margin-top:auto. */
  .rp-mobile.rp-paged-slider .rp-tags,
  .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags {
    margin: 11px 0 9px !important;
  }

  .rp-mobile.rp-paged-slider .rp-btn {
    margin-top: 0 !important;
  }
}

@media (max-width: 420px) {
  .rp-mobile.rp-paged-slider .rp-page .rp-card {
    min-height: 275px !important;
  }
}
</style>



<!-- ===== 22-09: SLIGHTLY WIDER + EQUAL RESEARCH CARDS ===== -->
<style>
@media (max-width: 767px) {
  /* Slightly wider cards: still keeps the two-card slider look,
     but gives headings/descriptions more usable line width. */
  .rp-mobile.rp-paged-slider .rp-pages {
    gap: 7px !important;
    align-items: stretch !important;
  }

  .rp-mobile.rp-paged-slider .rp-pages::after,
  .rp-mobile.rp-paged-slider .rp-page {
    flex: 0 0 52.5% !important;
    width: 52.5% !important;
    min-width: 52.5% !important;
  }

  /* All cards stay exactly the same outer height.  The tallest
     card defines the row height; the others stretch to match it. */
  .rp-mobile.rp-paged-slider .rp-page {
    display: flex !important;
    align-self: stretch !important;
    align-items: stretch !important;
    height: auto !important;
  }

  .rp-mobile.rp-paged-slider .rp-page .rp-card,
  .rp-mobile.rp-paged-slider .rp-card {
    width: 100% !important;
    height: 100% !important;
    min-height: 0 !important;
    align-self: stretch !important;
    padding-left: 8px !important;
    padding-right: 8px !important;
  }

  /* Keep the content compact; any remaining spare room stays
     below the CTA instead of creating a big gap in the middle. */
  .rp-mobile.rp-paged-slider .rp-card > p {
    margin-bottom: 0 !important;
  }

  .rp-mobile.rp-paged-slider .rp-tags,
  .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags,
  .rp-mobile.rp-paged-slider .rp-reference-card .rp-feature-tags {
    margin: 10px 0 9px !important;
  }
}

@media (max-width: 390px) {
  /* On very small phones only a tiny extra width is added, so the
     layout does not look oversized or awkward. */
  .rp-mobile.rp-paged-slider .rp-pages {
    gap: 6px !important;
  }

  .rp-mobile.rp-paged-slider .rp-pages::after,
  .rp-mobile.rp-paged-slider .rp-page {
    flex-basis: 53% !important;
    width: 53% !important;
    min-width: 53% !important;
  }

  .rp-mobile.rp-paged-slider .rp-page .rp-card,
  .rp-mobile.rp-paged-slider .rp-card {
    padding-left: 7px !important;
    padding-right: 7px !important;
  }
}
</style>



<!-- ===== 22-09 BOSS SUGGESTION: 1 FULL CARD + HALF NEXT CARD ===== -->
<style>
@media (max-width: 767px) {
  /*
     Mobile carousel now intentionally shows:
     1 complete card + about half of the next card.
     Swiping/snapping brings the next card fully to the left.
  */
  .rp-mobile.rp-paged-slider {
    overflow: hidden !important;
  }

  .rp-mobile.rp-paged-slider .rp-pages {
    display: flex !important;
    align-items: stretch !important;
    gap: 10px !important;
    width: 100% !important;
    overflow-x: auto !important;
    overflow-y: hidden !important;
    scroll-snap-type: x mandatory !important;
    scroll-behavior: smooth !important;
    -webkit-overflow-scrolling: touch !important;
    scrollbar-width: none !important;
    padding: 2px 0 9px !important;
  }

  .rp-mobile.rp-paged-slider .rp-pages::-webkit-scrollbar {
    display: none !important;
  }

  /* 66% card width leaves almost half of the next card visible. */
  .rp-mobile.rp-paged-slider .rp-page {
    flex: 0 0 66% !important;
    width: 66% !important;
    min-width: 66% !important;
    height: auto !important;
    display: flex !important;
    align-self: stretch !important;
    align-items: stretch !important;
    scroll-snap-align: start !important;
    scroll-snap-stop: always !important;
    padding: 0 !important;
  }

  /* Tail spacer lets the final card also snap fully into view. */
  .rp-mobile.rp-paged-slider .rp-pages::after {
    content: "" !important;
    display: block !important;
    flex: 0 0 34% !important;
    width: 34% !important;
    min-width: 34% !important;
  }

  /* All cards share the same outer height through flex stretching. */
  .rp-mobile.rp-paged-slider .rp-page .rp-card,
  .rp-mobile.rp-paged-slider .rp-card {
    width: 100% !important;
    min-width: 0 !important;
    height: 100% !important;
    min-height: 326px !important;
    max-height: none !important;
    align-self: stretch !important;
    display: flex !important;
    flex-direction: column !important;
    padding: 16px 13px 12px !important;
    border-radius: 14px !important;
    overflow: hidden !important;
  }

  /* Same top row height and spacing on every card. */
  .rp-mobile.rp-paged-slider .rp-card-label {
    width: 100% !important;
    height: 50px !important;
    min-height: 50px !important;
    flex: 0 0 50px !important;
    gap: 8px !important;
    align-items: center !important;
  }

  .rp-mobile.rp-paged-slider .rp-card-label > span {
    font-size: 11.5px !important;
    line-height: 1.16 !important;
    font-weight: 500 !important;
  }

  .rp-mobile.rp-paged-slider .rp-icon {
    width: 44px !important;
    height: 44px !important;
    min-width: 44px !important;
    flex: 0 0 44px !important;
  }

  .rp-mobile.rp-paged-slider .rp-icon img,
  .rp-mobile.rp-paged-slider .rp-energy-icon img,
  .rp-mobile.rp-paged-slider .rp-map-icon img,
  .rp-mobile.rp-paged-slider .rp-water-icon img {
    width: 34px !important;
    height: 34px !important;
    min-width: 34px !important;
    max-width: 34px !important;
    max-height: 34px !important;
    object-fit: contain !important;
  }

  /* Headings use the same two-line visual block. */
  .rp-mobile.rp-paged-slider .rp-card h3,
  .rp-mobile.rp-paged-slider .rp-reference-card h3 {
    min-height: 42px !important;
    margin: 11px 0 7px !important;
    color: #043E6B !important;
    font-size: 20px !important;
    line-height: 1 !important;
    font-weight: 800 !important;
    letter-spacing: -.25px !important;
  }

  /* Wider cards reduce wrapping; a common copy block keeps pills aligned. */
  .rp-mobile.rp-paged-slider .rp-card > p,
  .rp-mobile.rp-paged-slider .rp-reference-card > p {
    min-height: 108px !important;
    margin: 0 0 10px !important;
    color: #282828 !important;
    font-size: 12.5px !important;
    line-height: 1.32 !important;
    font-weight: 400 !important;
  }

  /* Pills now match the opening slides: text only, no extra mini-icons. */
  .rp-mobile.rp-paged-slider .rp-tags,
  .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags,
  .rp-mobile.rp-paged-slider .rp-reference-card .rp-feature-tags {
    width: 100% !important;
    min-height: 22px !important;
    display: flex !important;
    flex-wrap: nowrap !important;
    align-items: center !important;
    gap: 5px !important;
    margin: 0 0 10px !important;
    overflow: visible !important;
  }

  .rp-mobile.rp-paged-slider .rp-tags span,
  .rp-mobile.rp-paged-slider .rp-feature-tags span,
  .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags span {
    min-width: 0 !important;
    padding: 6px 7px !important;
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    border-radius: 999px !important;
    font-size: 11px !important;
    line-height: 1 !important;
    font-weight: 700 !important;
    white-space: nowrap !important;
  }

  .rp-mobile.rp-paged-slider .rp-btn,
  .rp-mobile.rp-paged-slider .rp-reference-card .rp-btn {
    width: 100% !important;
    max-width: 100% !important;
    min-width: 0 !important;
    height: 34px !important;
    min-height: 34px !important;
    margin: 0 !important;
    padding: 0 8px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 4px !important;
    border-radius: 999px !important;
    font-size: 11px !important;
    line-height: 1 !important;
    font-weight: 600 !important;
    letter-spacing: -.16px !important;
    white-space: nowrap !important;
    overflow: hidden !important;
  }

  .rp-mobile.rp-paged-slider .rp-btn b {
    flex: 0 0 auto !important;
    font-size: 19px !important;
    line-height: 1 !important;
  }

  .rp-mobile.rp-paged-slider .rp-controls {
    margin-top: 5px !important;
  }
}

@media (max-width: 390px) {
  .rp-mobile.rp-paged-slider .rp-pages {
    gap: 8px !important;
  }

  .rp-mobile.rp-paged-slider .rp-page {
    flex-basis: 66% !important;
    width: 66% !important;
    min-width: 66% !important;
  }

  .rp-mobile.rp-paged-slider .rp-pages::after {
    flex-basis: 34% !important;
    width: 34% !important;
    min-width: 34% !important;
  }

  .rp-mobile.rp-paged-slider .rp-page .rp-card,
  .rp-mobile.rp-paged-slider .rp-card {
    min-height: 330px !important;
    padding: 15px 11px 11px !important;
  }

  .rp-mobile.rp-paged-slider .rp-card-label > span {
    font-size: 11px !important;
  }

  .rp-mobile.rp-paged-slider .rp-card h3,
  .rp-mobile.rp-paged-slider .rp-reference-card h3 {
    min-height: 40px !important;
    font-size: 18px !important;
  }

  .rp-mobile.rp-paged-slider .rp-card > p,
  .rp-mobile.rp-paged-slider .rp-reference-card > p {
    min-height: 108px !important;
    font-size: 11.5px !important;
    line-height: 1.32 !important;
  }

  .rp-mobile.rp-paged-slider .rp-tags span,
  .rp-mobile.rp-paged-slider .rp-feature-tags span,
  .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags span {
    padding: 5px 5px !important;
    font-size: 11px !important;
  }

  .rp-mobile.rp-paged-slider .rp-btn,
  .rp-mobile.rp-paged-slider .rp-reference-card .rp-btn {
    height: 32px !important;
    min-height: 32px !important;
    padding-left: 6px !important;
    padding-right: 6px !important;
    font-size: 11px !important;
  }
}
</style>



<!-- ===== 22-09 FIGMA COMPACT CARD OVERRIDE ===== -->
<style>
@media (max-width: 767px) {
  /* Keep boss-approved 1 full card + half of the next card. */
  body .rp-mobile.rp-paged-slider .rp-pages {
    gap: 9px !important;
    align-items: stretch !important;
    padding: 1px 0 7px !important;
  }

  body .rp-mobile.rp-paged-slider .rp-page {
    flex: 0 0 66% !important;
    width: 66% !important;
    min-width: 66% !important;
    align-self: stretch !important;
    align-items: stretch !important;
  }

  body .rp-mobile.rp-paged-slider .rp-pages::after {
    flex: 0 0 34% !important;
    width: 34% !important;
    min-width: 34% !important;
  }

  /* Equal outer cards, but no artificial empty content blocks. */
  body .rp-mobile.rp-paged-slider .rp-page .rp-card,
  body .rp-mobile.rp-paged-slider .rp-card {
    width: 100% !important;
    min-width: 0 !important;
    height: 100% !important;
    /* Minor height increase requested for the mobile research cards */
    min-height: 260px !important;
    max-height: none !important;
    padding: 13px 11px 10px !important;
    border-radius: 14px !important;
    display: flex !important;
    flex-direction: column !important;
    justify-content: flex-start !important;
  }

  /* Category row: compact, Figma-like scale. */
  body .rp-mobile.rp-paged-slider .rp-card-label {
    width: 100% !important;
    height: auto !important;
    min-height: 40px !important;
    flex: 0 0 auto !important;
    gap: 7px !important;
    margin: 0 !important;
    align-items: center !important;
  }

  body .rp-mobile.rp-paged-slider .rp-card-label > span {
    font-size: 11px !important;
    line-height: 1.12 !important;
    font-weight: 500 !important;
  }

  body .rp-mobile.rp-paged-slider .rp-icon {
    width: 38px !important;
    height: 38px !important;
    min-width: 38px !important;
    flex: 0 0 38px !important;
  }

  body .rp-mobile.rp-paged-slider .rp-icon img,
  body .rp-mobile.rp-paged-slider .rp-energy-icon img,
  body .rp-mobile.rp-paged-slider .rp-map-icon img,
  body .rp-mobile.rp-paged-slider .rp-water-icon img {
    width: 29px !important;
    height: 29px !important;
    min-width: 29px !important;
    max-width: 29px !important;
    max-height: 29px !important;
    object-fit: contain !important;
  }

  /* Figma-style heading scale; remove the reserved heading height. */
  body .rp-mobile.rp-paged-slider .rp-card h3,
  body .rp-mobile.rp-paged-slider .rp-reference-card h3 {
    min-height: 0 !important;
    height: auto !important;
    margin: 8px 0 5px !important;
    font-size: 19px !important;
    line-height: .98 !important;
    font-weight: 800 !important;
    letter-spacing: -.18px !important;
  }

  /* Boss request: body copy 12px. No 108px forced blank text area. */
  body .rp-mobile.rp-paged-slider .rp-card > p,
  body .rp-mobile.rp-paged-slider .rp-reference-card > p {
    min-height: 0 !important;
    height: auto !important;
    margin: 0 0 8px !important;
    font-size: 12px !important;
    line-height: 1.26 !important;
    font-weight: 400 !important;
  }

  /* Pills flow directly after copy. No auto push / no big white gap. */
  body .rp-mobile.rp-paged-slider .rp-tags,
  body .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags,
  body .rp-mobile.rp-paged-slider .rp-reference-card .rp-feature-tags {
    width: 100% !important;
    min-height: 0 !important;
    height: auto !important;
    display: flex !important;
    flex-wrap: nowrap !important;
    align-items: center !important;
    gap: 5px !important;
    margin: 0 0 7px !important;
    overflow: visible !important;
  }

  body .rp-mobile.rp-paged-slider .rp-tags span,
  body .rp-mobile.rp-paged-slider .rp-feature-tags span,
  body .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags span {
    min-width: 0 !important;
    padding: 5px 7px !important;
    font-size: 11px !important;
    line-height: 1 !important;
    font-weight: 700 !important;
    white-space: nowrap !important;
  }

  body .rp-mobile.rp-paged-slider .rp-btn,
  body .rp-mobile.rp-paged-slider .rp-reference-card .rp-btn {
    width: 100% !important;
    max-width: 85% !important;
    min-width: 0 !important;
    height: 32px !important;
    min-height: 32px !important;
    margin: 0 !important;
    padding: 0 8px !important;
    gap: 4px !important;
    font-size: 11px !important;
    line-height: 1 !important;
    font-weight: 600 !important;
    letter-spacing: -.12px !important;
    white-space: nowrap !important;
  }

  body .rp-mobile.rp-paged-slider .rp-btn b {
    font-size: 18px !important;
    line-height: 1 !important;
  }

  body .rp-mobile.rp-paged-slider .rp-controls {
    margin-top: 3px !important;
  }
}

@media (max-width: 390px) {
  body .rp-mobile.rp-paged-slider .rp-pages { gap: 8px !important; }

  body .rp-mobile.rp-paged-slider .rp-page {
    flex-basis: 68% !important;
    width: 68% !important;
    min-width: 68% !important;
  }

  body .rp-mobile.rp-paged-slider .rp-pages::after {
    flex-basis: 32% !important;
    width: 32% !important;
    min-width: 32% !important;
  }

  body .rp-mobile.rp-paged-slider .rp-page .rp-card,
  body .rp-mobile.rp-paged-slider .rp-card {
    padding: 12px 10px 9px !important;
  }

  body .rp-mobile.rp-paged-slider .rp-card-label > span {
    font-size: 11px !important;
  }

  body .rp-mobile.rp-paged-slider .rp-card h3,
  body .rp-mobile.rp-paged-slider .rp-reference-card h3 {
    font-size: 18px !important;
    margin-top: 7px !important;
  }

  body .rp-mobile.rp-paged-slider .rp-card > p,
  body .rp-mobile.rp-paged-slider .rp-reference-card > p {
    font-size: 12px !important;
    line-height: 1.24 !important;
    margin-bottom: 7px !important;
  }

  body .rp-mobile.rp-paged-slider .rp-tags span,
  body .rp-mobile.rp-paged-slider .rp-feature-tags span,
  body .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags span {
    font-size: 11px !important;
    padding: 5px 6px !important;
  }

  body .rp-mobile.rp-paged-slider .rp-btn,
  body .rp-mobile.rp-paged-slider .rp-reference-card .rp-btn {
    height: 31px !important;
    min-height: 31px !important;
    font-size: 11px !important;
  }
}
</style>



<!-- ===== 22-09 MOBILE CARD TEXT SPACING FIX ===== -->
<style>
@media (max-width: 767px) {
  /* Give the category text a little breathing room. */
  body .rp-mobile.rp-paged-slider .rp-card-label > span {
    line-height: 1.24 !important;
  }

  /* Main card title: slightly more line-height and spacing below/above. */
  body .rp-mobile.rp-paged-slider .rp-card h3,
  body .rp-mobile.rp-paged-slider .rp-reference-card h3 {
    margin: 10px 0 7px !important;
    line-height: 1.07 !important;
  }

  /* Body copy: less cramped, easier to read. */
  body .rp-mobile.rp-paged-slider .rp-card > p,
  body .rp-mobile.rp-paged-slider .rp-reference-card > p {
    margin: 0 0 10px !important;
    line-height: 1.38 !important;
  }

  /* Keep a clean gap between chips and CTA button. */
  body .rp-mobile.rp-paged-slider .rp-tags,
  body .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags,
  body .rp-mobile.rp-paged-slider .rp-reference-card .rp-feature-tags {
    margin-bottom: 9px !important;
  }
}

@media (max-width: 390px) {
  body .rp-mobile.rp-paged-slider .rp-card h3,
  body .rp-mobile.rp-paged-slider .rp-reference-card h3 {
    margin: 9px 0 6px !important;
    line-height: 1.08 !important;
  }

  body .rp-mobile.rp-paged-slider .rp-card > p,
  body .rp-mobile.rp-paged-slider .rp-reference-card > p {
    margin-bottom: 9px !important;
    line-height: 1.36 !important;
  }
}
</style>



<!-- ===== 22-09 MOBILE CTA BUTTON ALIGNMENT FIX ===== -->
<style>
@media (max-width: 767px) {
  /* Keep every Research & Policy CTA on the same bottom line. */
  body .rp-mobile.rp-paged-slider .rp-btn,
  body .rp-mobile.rp-paged-slider .rp-reference-card .rp-btn {
    margin-top: auto !important;
    margin-bottom: 0 !important;
    flex: 0 0 auto !important;
    align-self: stretch !important;
  }

  /* Preserve the chip spacing while the CTA uses the remaining card space. */
  body .rp-mobile.rp-paged-slider .rp-tags,
  body .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags,
  body .rp-mobile.rp-paged-slider .rp-reference-card .rp-feature-tags {
    margin-top: 0 !important;
    margin-bottom: 9px !important;
    flex: 0 0 auto !important;
  }
}
</style>



<!-- ===== 22-09 MOBILE LIGHT-BLUE TAG ALIGNMENT FIX ===== -->
<style>
@media (max-width: 767px) {
  /* Keep every light-blue tag row on the same horizontal level. */
  body .rp-mobile.rp-paged-slider .rp-tags,
  body .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags,
  body .rp-mobile.rp-paged-slider .rp-reference-card .rp-feature-tags {
    margin-top: auto !important;
    margin-bottom: 9px !important;
    min-height: 24px !important;
    height: 24px !important;
    flex: 0 0 24px !important;
    align-items: center !important;
  }

  /* All blue chips use one consistent height without stretching their text. */
  body .rp-mobile.rp-paged-slider .rp-tags span,
  body .rp-mobile.rp-paged-slider .rp-feature-tags span,
  body .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags span {
    height: 22px !important;
    min-height: 22px !important;
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }

  /* Button remains directly below the aligned chip row. */
  body .rp-mobile.rp-paged-slider .rp-btn,
  body .rp-mobile.rp-paged-slider .rp-reference-card .rp-btn {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
    flex: 0 0 auto !important;
  }
}

@media (max-width: 390px) {
  body .rp-mobile.rp-paged-slider .rp-tags,
  body .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags,
  body .rp-mobile.rp-paged-slider .rp-reference-card .rp-feature-tags {
    min-height: 23px !important;
    height: 23px !important;
    flex-basis: 23px !important;
  }

  body .rp-mobile.rp-paged-slider .rp-tags span,
  body .rp-mobile.rp-paged-slider .rp-feature-tags span,
  body .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags span {
    height: 21px !important;
    min-height: 21px !important;
  }
}
</style>



<!-- ===== 22-09 iPHONE HEADING + ZAMEENI TEXT CENTER FIX ===== -->
<style>
@media (max-width: 767px) {
  /* Keep the Research & Policy evidence sentence on exactly two lines on iPhone/mobile. */
  body .rp-mobile .rp-heading .rp-mobile-evidence {
    width: 100% !important;
    max-width: 100% !important;
    margin: 13px auto 0 !important;
    padding: 0 !important;
    font-size: clamp(11.5px, 3.1vw, 13px) !important;
    line-height: 1.32 !important;
    font-weight: 600 !important;
    text-align: center !important;
    letter-spacing: -0.05px !important;
  }

  body .rp-mobile .rp-heading .rp-mobile-evidence span {
    display: block !important;
    white-space: nowrap !important;
  }

  /* Center the two English lines in the right side of the Zameeni Haqaiq banner. */
  body .mobile-zameeni-copy {
    left: 112px !important;
    right: 18px !important;
    bottom: 19px !important;
    text-align: center !important;
  }

  body .mobile-zameeni-copy > p {
    text-align: center !important;
  }

  body .mobile-zameeni-copy > div {
    position: relative !important;
    display: block !important;
    margin-top: 4px !important;
    text-align: center !important;
  }

  body .mobile-zameeni-copy > div > p {
    display: inline-block !important;
    text-align: center !important;
  }

  body .mobile-zameeni-copy > div > span {
    position: absolute !important;
    right: 0 !important;
    top: 50% !important;
    margin-left: 0 !important;
    transform: translateY(-50%) !important;
  }
}

@media (max-width: 380px) {
  body .rp-mobile .rp-heading .rp-mobile-evidence {
    font-size: 11.4px !important;
  }

  body .mobile-zameeni-copy {
    left: 108px !important;
    right: 14px !important;
  }
}
</style>



<!-- ===== 22-09 FINAL: BUTTON PRESS ONLY + MOBILE TITLE + ZAMEENI CENTER ===== -->
<style>
/* ---------------------------------------------------------
   Research & Policy:
   Cards stay completely unchanged.
   Only the blue CTA button becomes slightly darker while
   it is being hovered/pressed/tapped.
   --------------------------------------------------------- */
.rp-section .rp-btn {
  background: #043E6B !important;
  color: #ffffff !important;
}

/* Desktop mouse hover */
.rp-section .rp-btn:hover {
  background: #033653 !important;
  color: #ffffff !important;
}

/* Mouse click / mobile tap */
.rp-section .rp-btn:active {
  background: #022B47 !important;
  color: #ffffff !important;
}

/* Keyboard accessibility */
.rp-section .rp-btn:focus-visible {
  background: #033653 !important;
  color: #ffffff !important;
  outline: 2px solid #dfbf72 !important;
  outline-offset: 2px !important;
}

.rp-section .rp-btn:hover b,
.rp-section .rp-btn:active b,
.rp-section .rp-btn:focus-visible b {
  color: #ffffff !important;
}

@media (max-width: 767px) {
  /* Exact 3-line mobile heading: "on" stays on line 1. */
  body .rp-mobile .rp-heading .rp-mobile-title {
    width: 100% !important;
    max-width: 100% !important;
    margin: 0 auto !important;
    font-size: clamp(18px, 5.5vw, 19px) !important;
    line-height: 1.07 !important;
    letter-spacing: -.65px !important;
    text-align: center !important;
  }

  body .rp-mobile .rp-heading .rp-mobile-title span {
    display: block !important;
    width: 100% !important;
    white-space: nowrap !important;
    text-align: center !important;
  }

  /* Center Urdu logo in the right side of the white panel. */
  body .mobile-zameeni-logo {
    left: 108px !important;
    right: 14px !important;
    top: 16px !important;
    width: auto !important;
    height: 68px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
  }

  body .mobile-zameeni-logo img {
    width: 184px !important;
    max-width: 100% !important;
    height: 66px !important;
    object-fit: contain !important;
    object-position: center !important;
  }

  /* Center Zameeni Haqaiq + A Column by Syed Shayan. */
  body .mobile-zameeni-copy {
    left: 108px !important;
    right: 18px !important;
    bottom: 16px !important;
    width: auto !important;
    min-height: 52px !important;
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    justify-content: center !important;
    text-align: center !important;
  }

  body .mobile-zameeni-copy > p {
    width: 100% !important;
    margin: 0 !important;
    text-align: center !important;
  }

  body .mobile-zameeni-copy > div {
    position: relative !important;
    display: block !important;
    width: 100% !important;
    margin-top: 4px !important;
    text-align: center !important;
  }

  body .mobile-zameeni-copy > div > p {
    display: block !important;
    width: 100% !important;
    margin: 0 !important;
    text-align: center !important;
  }

  body .mobile-zameeni-copy > div > span {
    position: absolute !important;
    right: 0 !important;
    top: 50% !important;
    margin: 0 !important;
    transform: translateY(-50%) !important;
  }
}

@media (max-width: 380px) {
  body .rp-mobile .rp-heading .rp-mobile-title {
    font-size: 24.8px !important;
    letter-spacing: -.75px !important;
  }

  body .mobile-zameeni-logo,
  body .mobile-zameeni-copy {
    left: 104px !important;
    right: 14px !important;
  }

  body .mobile-zameeni-logo img {
    width: 176px !important;
  }
}
</style>

<style>
/* =========================================================
   22-09 FINAL REFERENCE ADJUSTMENTS
   - consistent space before new sections
   - platform cards/icons match supplied reference
   - Group.png replaces coded Digital Library
   - static 3-site network layout
   ========================================================= */

/* ---------- Section breathing room ---------- */
@media (max-width: 1023px) {
body .research-policy-mobile-wrap {
  padding-top: 45px !important;
}
  body .public-opinion-section-wrap {
    margin-top: 70px !important;
  }

  body .public-opinion-section-wrap #public-opinion-pdfmatch {
    padding-top: 0 !important;
  }

  body #digital-library-pdfmatch {
    margin-top: 72px !important;
  }

  body #digital-library-pdfmatch + .pdf-housing-spacer,
  body .pdf-housing-spacer {
    height: 38px !important;
  }
}

/* ---------- HOW THE PLATFORM WORKS ---------- */
body #public-opinion-pdfmatch .steps {
  display: grid !important;
  grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
  gap: 4px !important;
  align-items: stretch !important;
}

body #public-opinion-pdfmatch .step {
  position: relative !important;
  min-width: 0 !important;
  min-height: 160px !important;
  padding: 10px 10px 11px !important;
  border: 1px solid #dedede !important;
  border-radius: 6px !important;
  background: #ffffff !important;
  box-shadow: none !important;
  overflow: hidden !important;
  text-align: left !important;
}

body #public-opinion-pdfmatch .step .num {
  display: inline-flex !important;
  align-items: center !important;
  justify-content: center !important;
  width: 24px !important;
  height: 24px !important;
  min-width: 24px !important;
  min-height: 24px !important;
  margin: 0 7px 0 0 !important;
  border-radius: 50% !important;
  background: #0F7A57 !important;
  color: #ffffff !important;
  font-size: 13px !important;
  line-height: 24px !important;
  font-weight: 700 !important;
  vertical-align: middle !important;
}

body #public-opinion-pdfmatch .step img {
  display: inline-block !important;
  width: 32px !important;
  height: 32px !important;
  min-width: 32px !important;
  min-height: 32px !important;
  margin: 0 !important;
  object-fit: contain !important;
  vertical-align: middle !important;
}

body #public-opinion-pdfmatch .step h3 {
  margin: 12px 0 5px !important;
  color: #043E6B !important;
  font-family: 'Poppins', sans-serif !important;
  font-size: 17px !important;
  line-height: 1.04 !important;
  font-weight: 800 !important;
  letter-spacing: -.25px !important;
}

body #public-opinion-pdfmatch .step p {
  margin: 0 !important;
  color: #595959 !important;
  font-family: 'Poppins', sans-serif !important;
  font-size: 14px !important;
  line-height: 1.18 !important;
  font-weight: 500 !important;
}

@media (max-width: 700px) {
  body #public-opinion-pdfmatch .steps { gap: 3px !important; }

  body #public-opinion-pdfmatch .step {
    min-height: 158px !important;
    padding: 9px 7px 9px !important;
  }

  body #public-opinion-pdfmatch .step .num {
    width: 23px !important;
    height: 23px !important;
    min-width: 23px !important;
    min-height: 23px !important;
    margin-right: 5px !important;
    font-size: 12px !important;
    line-height: 23px !important;
  }

  body #public-opinion-pdfmatch .step img {
    width: 30px !important;
    height: 30px !important;
    min-width: 30px !important;
    min-height: 30px !important;
  }

  body #public-opinion-pdfmatch .step h3 {
    margin-top: 10px !important;
    font-size: clamp(12px, 3.05vw, 18px) !important;
    line-height: 1.04 !important;
  }

  body #public-opinion-pdfmatch .step p {
    font-size: clamp(11px, 2.6vw, 15px) !important;
    line-height: 1.17 !important;
  }
}

@media (max-width: 420px) {
  body #public-opinion-pdfmatch .step {
    min-height: 150px !important;
    padding: 8px 5px 8px !important;
  }

  body #public-opinion-pdfmatch .step .num {
    width: 21px !important;
    height: 21px !important;
    min-width: 21px !important;
    min-height: 21px !important;
    font-size: 11px !important;
    line-height: 21px !important;
  }

  body #public-opinion-pdfmatch .step img {
    width: 28px !important;
    height: 28px !important;
    min-width: 28px !important;
    min-height: 28px !important;
  }

  body #public-opinion-pdfmatch .step h3 {
    font-size: 11px !important;
  }

  body #public-opinion-pdfmatch .step p {
    font-size: 11px !important;
  }
}

/* ---------- DIGITAL LIBRARY: one supplied image only ---------- */
body #digital-library-pdfmatch.digital-library-image-section {
  position: relative !important;
  width: 100% !important;
  max-width: 720px !important;
  margin-left: 11px !important;
  margin-right: auto !important;
  padding: 0 !important;
  overflow: hidden !important;
  background: #ffffff !important;
  /*margin-top: -1px !important;*/
}
@media (max-width: 700px) {
  body #digital-library-pdfmatch.digital-library-image-section {
    top: -5px !important;
  }
}

body #digital-library-pdfmatch .digital-library-group-image {
  display: block !important;
  width: 100% !important;
  max-width: 100% !important;
  height: auto !important;
  margin: 0 auto !important;
  object-fit: contain !important;
}

/* ---------- PART OF SYEDSHAYAN.COM ---------- */
body .syed-network-section {
  width: 100% !important;
  margin: 64px 0 0 !important;
  padding: 48px 16px 58px !important;
  background: #ffffff !important;
}

body .syed-network-wrap {
  width: 100% !important;
  max-width: 690px !important;
  margin: 0 auto !important;
}

body .syed-network-heading {
  margin-bottom: 42px !important;
  text-align: center !important;
}

body .syed-network-heading-top {
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
  gap: 16px !important;
}

body .syed-network-heading-line {
  width: 58px !important;
  height: 2px !important;
  flex: 0 0 58px !important;
  background: #D6A839 !important;
}

body .syed-network-heading h2 {
  margin: 0 !important;
  color: #3b3b3b !important;
  font-family: 'Poppins', sans-serif !important;
  font-size: 20px !important;
  line-height: 1 !important;
  font-weight: 600 !important;
  letter-spacing: .15px !important;
}

body .syed-network-brand {
  margin-top: 10px !important;
  color: #043E6B !important;
  font-family: 'Poppins', sans-serif !important;
  font-size: 24px !important;
  line-height: 1.1 !important;
  font-weight: 700 !important;
}

body .syed-network-grid {
  display: grid !important;
  grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
  align-items: stretch !important;
  gap: 0 !important;
}

body .syed-network-item {
  position: relative !important;
  min-width: 0 !important;
  min-height: 145px !important;
  display: flex !important;
  flex-direction: column !important;
  align-items: center !important;
  justify-content: space-between !important;
  padding: 0 16px 4px !important;
  color: inherit !important;
  text-decoration: none !important;
}

body .syed-network-item-middle::before,
body .syed-network-item-middle::after {
  content: '' !important;
  position: absolute !important;
  top: 0 !important;
  bottom: 0 !important;
  width: 1px !important;
  background: #e5e5e5 !important;
}

body .syed-network-item-middle::before { left: 0 !important; }
body .syed-network-item-middle::after { right: 0 !important; }

body .syed-network-logo-box {
  width: 100% !important;
  height: 92px !important;
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
}

body .syed-network-free-media-logo {
  display: block !important;
  width: 150px !important;
  max-width: 100% !important;
  height: 80px !important;
  object-fit: contain !important;
  transform: none !important;
}

body .syed-network-otd-combo {
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
  gap: 5px !important;
}

body .syed-network-otd-logo {
  display: block !important;
  width: 92px !important;
  height: 78px !important;
  object-fit: contain !important;
}

body .syed-network-calendar {
  position: relative !important;
  width: 52px !important;
  height: 72px !important;
  flex: 0 0 52px !important;
  overflow: hidden !important;
}

body .syed-network-calendar > img {
  position: absolute !important;
  inset: 0 !important;
  width: 100% !important;
  height: 100% !important;
  object-fit: fill !important;
}

body .syed-network-calendar-day,
body .syed-network-calendar-number,
body .syed-network-calendar-month {
  position: absolute !important;
  left: 50% !important;
  z-index: 2 !important;
  width: 76% !important;
  transform: translateX(-50%) !important;
  color: #2f1d12 !important;
  font-family: Arial, sans-serif !important;
  text-align: center !important;
  white-space: nowrap !important;
}

body .syed-network-calendar-day {
  top: 20% !important;
  font-size: 11px !important;
  font-weight: 700 !important;
}

body .syed-network-calendar-number {
  top: 39% !important;
  font-size: 16px !important;
  line-height: 1 !important;
  font-weight: 800 !important;
}

body .syed-network-calendar-month {
  bottom: 18% !important;
  font-size: 11px !important;
  font-weight: 700 !important;
}

body .syed-network-shehrbeen-logo {
  display: block !important;
  width: 125px !important;
  max-width: 100% !important;
  height: 82px !important;
  object-fit: contain !important;
}

body .syed-network-url-pill {
  display: inline-flex !important;
  align-items: center !important;
  justify-content: center !important;
  width: auto !important;
  max-width: 100% !important;
  min-height: 28px !important;
  padding: 5px 11px !important;
  border-radius: 999px !important;
  background: #f8f8f8 !important;
  color: #2d2d2d !important;
  box-shadow: 0 3px 10px rgba(0,0,0,.10) !important;
  font-family: Arial, sans-serif !important;
  font-size: 12px !important;
  line-height: 1 !important;
  font-weight: 500 !important;
  white-space: nowrap !important;
}

body .syed-network-url-pill span {
  margin-left: 4px !important;
  color: #D6A839 !important;
  font-size: 15px !important;
  line-height: 1 !important;
}

@media (max-width: 700px) {
  body .syed-network-section {
    margin-top: 54px !important;
    padding: 42px 10px 50px !important;
  }

  body .syed-network-wrap {
    max-width: 620px !important;
  }

  body .syed-network-heading {
    margin-bottom: 38px !important;
  }

  body .syed-network-heading-line {
    width: 48px !important;
    flex-basis: 48px !important;
  }

  body .syed-network-heading h2 {
    font-size: 18px !important;
  }

  body .syed-network-brand {
    font-size: 22px !important;
  }

  body .syed-network-item {
    min-height: 132px !important;
    padding: 0 10px 3px !important;
  }

  body .syed-network-logo-box {
    height: 82px !important;
  }

  body .syed-network-free-media-logo {
    width: 138px !important;
    height: 72px !important;
  }

  body .syed-network-otd-logo {
    width: 82px !important;
    height: 68px !important;
  }

  body .syed-network-calendar {
    width: 46px !important;
    height: 64px !important;
    flex-basis: 46px !important;
  }

  body .syed-network-shehrbeen-logo {
    width: 116px !important;
    height: 72px !important;
  }

  body .syed-network-url-pill {
    min-height: 27px !important;
    padding: 5px 9px !important;
    font-size: clamp(11px, 2vw, 12px) !important;
  }
}

@media (max-width: 420px) {
  body .syed-network-section {
    padding-left: 6px !important;
    padding-right: 6px !important;
  }

  body .syed-network-heading-top { gap: 10px !important; }
  body .syed-network-heading-line { width: 38px !important; flex-basis: 38px !important; }
  body .syed-network-heading h2 { font-size: 16px !important; }
  body .syed-network-brand { font-size: 19px !important; }

  body .syed-network-item {
    min-height: 118px !important;
    padding-left: 5px !important;
    padding-right: 5px !important;
  }

  body .syed-network-logo-box { height: 72px !important; }
  body .syed-network-free-media-logo { width: 105px !important; height: 58px !important; }
  body .syed-network-otd-combo { gap: 2px !important; }
  body .syed-network-otd-logo { width: 62px !important; height: 56px !important; }
  body .syed-network-calendar { width: 34px !important; height: 49px !important; flex-basis: 34px !important; }
  body .syed-network-calendar-day,
  body .syed-network-calendar-month { font-size: 11px !important; }
  body .syed-network-calendar-number { font-size: 11px !important; }
  body .syed-network-shehrbeen-logo { width: 86px !important; height: 60px !important; }
  body .syed-network-url-pill {
    min-height: 24px !important;
    padding: 4px 5px !important;
    font-size: 11px !important;
  }
}
</style>


<style>
/* =========================================================
   22-09 FINAL SMALL CHANGES
   1) Group.png keeps its exact artwork, Explore Ebooks is clickable
   2) Previous continuous partner animation restored
   3) Partner separators taper: thin -> thick -> thin
   ========================================================= */

/* ---------- GROUP.PNG / EXPLORE EBOOKS ---------- */
body #digital-library-pdfmatch.digital-library-image-section {
  position: relative !important;
}

/*
 * Group.png already contains the exact navy Explore Ebooks artwork.
 * This transparent anchor sits precisely over it, so the visible button
 * stays pixel-identical to the supplied image while becoming clickable.
 */
body #digital-library-pdfmatch .digital-library-explore-hitbox {
  position: absolute !important;
  left: 3.55% !important;
  top: 66.05% !important;
  width: 32.05% !important;
  height: 9.15% !important;
  z-index: 8 !important;
  display: block !important;
  border: 0 !important;
  border-radius: 2px !important;
  background: transparent !important;
  cursor: pointer !important;
  text-decoration: none !important;
  -webkit-tap-highlight-color: transparent !important;
}

body #digital-library-pdfmatch .digital-library-explore-hitbox:focus-visible {
  outline: 2px solid #D6A839 !important;
  outline-offset: 2px !important;
}

/* ---------- PART OF SYEDSHAYAN.COM: restore old animation ---------- */
body .syed-network-marquee {
  position: relative !important;
  width: 100% !important;
  overflow: hidden !important;
  padding: 2px 0 7px !important;
}

body .syed-network-track,
body .syed-network-grid.syed-network-track {
  display: flex !important;
  grid-template-columns: none !important;
  align-items: stretch !important;
  gap: 0 !important;
  width: max-content !important;
  max-width: none !important;
  transform: translate3d(0,0,0);
  will-change: transform;
  backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
}

body .syed-network-track .syed-network-item {
  width: 230px !important;
  flex: 0 0 230px !important;
  min-width: 230px !important;
  backface-visibility: hidden !important;
  -webkit-backface-visibility: hidden !important;
  transform: translateZ(0);
}

/* Remove the old straight middle-only lines. */
body .syed-network-item-middle::before,
body .syed-network-item-middle::after {
  content: none !important;
  display: none !important;
}

/*
 * Separator on every item:
 * narrow at the top, widest in the middle, narrow again at the bottom.
 */
body .syed-network-track .syed-network-item::after {
  content: '' !important;
  display: block !important;
  visibility: visible !important;
  opacity: 1 !important;
  position: absolute !important;
  top: 4px !important;
  right: -1.5px !important;
  width: 3px !important;
  height: calc(100% - 8px) !important;
  z-index: 3 !important;
  pointer-events: none !important;
  background: linear-gradient(
    to bottom,
    rgba(205,205,205,.42) 0%,
    rgba(186,186,186,.72) 48%,
    rgba(205,205,205,.42) 100%
  ) !important;
  clip-path: polygon(
    40% 0%,
    60% 0%,
    100% 50%,
    60% 100%,
    40% 100%,
    0% 50%
  ) !important;
}

/* Keep the clean current reference design while it moves. */
body .syed-network-track .syed-network-item {
  padding-left: 16px !important;
  padding-right: 16px !important;
}

@media (max-width: 700px) {
  body .syed-network-track .syed-network-item {
    width: 206px !important;
    flex-basis: 206px !important;
    min-width: 206px !important;
    padding-left: 10px !important;
    padding-right: 10px !important;
  }
}

@media (max-width: 420px) {
  body .syed-network-track .syed-network-item {
    width: 176px !important;
    flex-basis: 176px !important;
    min-width: 176px !important;
    padding-left: 5px !important;
    padding-right: 5px !important;
  }
}

@media (prefers-reduced-motion: reduce) {
  body .syed-network-track {
    transform: translate3d(0,0,0) !important;
  }
}
</style>



<!-- ===== 22-09 ZAMEENI HAQAIQ ALIGNMENT — REFERENCE IMAGE MATCH ===== -->
<style>
@media (max-width: 767px) {
  /* Urdu logo: keep it on the right side like the supplied reference. */
  body .mobile-zameeni-logo {
    left: 116px !important;
    right: 10px !important;
    top: 15px !important;
    width: auto !important;
    height: 68px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: flex-end !important;
    transform: translateX(6px) !important;
  }

  body .mobile-zameeni-logo img {
    width: 180px !important;
    max-width: 100% !important;
    height: 66px !important;
    object-fit: contain !important;
    object-position: right center !important;
  }

  /* Lower blue-strip text: left aligned exactly like the reference image. */
  body .mobile-zameeni-copy {
    left: 122px !important;
    right: 20px !important;
    bottom: 17px !important;
    width: auto !important;
    min-height: 52px !important;
    display: flex !important;
    flex-direction: column !important;
    align-items: flex-start !important;
    justify-content: center !important;
    text-align: left !important;
  }

  body .mobile-zameeni-copy > p {
    width: auto !important;
    margin: 0 !important;
    text-align: left !important;
  }

  body .mobile-zameeni-copy > div {
    position: relative !important;
    display: flex !important;
    align-items: center !important;
    justify-content: space-between !important;
    width: 100% !important;
    margin-top: 4px !important;
    text-align: left !important;
  }

  body .mobile-zameeni-copy > div > p {
    display: block !important;
    width: auto !important;
    margin: 0 !important;
    text-align: left !important;
  }

  body .mobile-zameeni-copy > div > span {
    position: static !important;
    flex: 0 0 auto !important;
    margin-left: auto !important;
    padding-left: 10px !important;
    transform: none !important;
  }
}

@media (max-width: 380px) {
  body .mobile-zameeni-logo {
    left: 112px !important;
    right: 8px !important;
    transform: translateX(5px) !important;
  }

  body .mobile-zameeni-logo img {
    width: 174px !important;
  }

  body .mobile-zameeni-copy {
    left: 116px !important;
    right: 18px !important;
  }
}
</style>



<style>
/* =========================================================
   22-09 FINAL: PARTNER LOGOS + CLEAN REFERENCE BUTTON ARROW
   ========================================================= */

/* PART OF SYEDSHAYAN.COM — bigger logos + readable text */
body .syed-network-track .syed-network-item {
  width: 260px !important;
  min-height: 158px !important;
  padding: 0 16px 8px !important;
}

body .syed-network-logo-box {
  height: 118px !important;
  display: flex !important;
  flex-direction: column !important;
  align-items: center !important;
  justify-content: center !important;
  gap: 7px !important;
}

body .syed-network-free-media-logo {
  width: 182px !important;
  height: 92px !important;
}

body .syed-network-shehrbeen-logo {
  width: 154px !important;
  height: 92px !important;
}

body .syed-network-otd-combo {
  gap: 8px !important;
}

body .syed-network-otd-logo {
  width: 112px !important;
  height: 84px !important;
}

body .syed-network-calendar {
  width: 60px !important;
  height: 82px !important;
  flex: 0 0 60px !important;
}

body .syed-network-calendar-day {
  top: 18% !important;
  font-size: 11px !important;
}

body .syed-network-calendar-number {
  top: 37% !important;
  font-size: 18px !important;
}

body .syed-network-calendar-month {
  bottom: 17% !important;
  font-size: 11px !important;
}

body .syed-network-otd-subtitle {
  display: none !important;
}

body .syed-network-url-pill {
  min-height: 34px !important;
  padding: 7px 13px !important;
  font-size: 14px !important;
  line-height: 1 !important;
  font-weight: 600 !important;
}

body .syed-network-url-pill span {
  margin-left: 5px !important;
  font-size: 17px !important;
}

/* Survey button — same arrow pattern as reference */
#public-opinion-pdfmatch .survey-button {
  display: inline-flex !important;
  align-items: center !important;
  justify-content: center !important;
  gap: 8px !important;
  padding: 10px 12px 10px 12px !important;
  border-radius: 10px !important;
  background: linear-gradient(90deg, #042945 0%, #043E6B 100%) !important;
  color: #ffffff !important;
  font-size: 15px !important;
  line-height: 1 !important;
  font-weight: 800 !important;
  white-space: nowrap !important;
  box-shadow: 0 5px 12px rgba(0,0,0,.18) !important;
}

#public-opinion-pdfmatch .survey-button .survey-button-arrow {
  display: inline-block !important;
  flex: 0 0 auto !important;
  width: auto !important;
  height: auto !important;
  margin-left: 2px !important;
  padding: 0 !important;
  border: 0 !important;
  color: #0F7A57 !important;
  font-size: 25px !important;
  line-height: .75 !important;
  font-weight: 700 !important;
  transform: translateY(-1px) !important;
}

@media (max-width: 700px) {
  body .syed-network-track .syed-network-item {
    width: 236px !important;
    min-height: 150px !important;
    padding: 0 13px 8px !important;
  }

  body .syed-network-logo-box {
    height: 110px !important;
    gap: 6px !important;
  }

  body .syed-network-free-media-logo {
    width: 168px !important;
    height: 84px !important;
  }

  body .syed-network-shehrbeen-logo {
    width: 144px !important;
    height: 84px !important;
  }

  body .syed-network-otd-logo {
    width: 102px !important;
    height: 76px !important;
  }

  body .syed-network-calendar {
    width: 54px !important;
    height: 74px !important;
    flex-basis: 54px !important;
  }

  body .syed-network-calendar-day,
  body .syed-network-calendar-month {
    font-size: 11px !important;
  }

  body .syed-network-calendar-number {
    font-size: 16px !important;
  }

  body .syed-network-url-pill {
    min-height: 32px !important;
    padding: 7px 12px !important;
    font-size: 13px !important;
  }

  #public-opinion-pdfmatch .survey-button {
    font-size: 14px !important;
    padding: 10px 11px !important;
    gap: 7px !important;
  }

  #public-opinion-pdfmatch .survey-button .survey-button-arrow {
    width: auto !important;
    height: auto !important;
    padding: 0 !important;
    border: 0 !important;
    font-size: 24px !important;
  }
}

@media (max-width: 420px) {
  body .syed-network-track .syed-network-item {
    width: 212px !important;
    min-height: 140px !important;
    padding: 0 10px 7px !important;
  }

  body .syed-network-logo-box {
    height: 102px !important;
    gap: 5px !important;
  }

  body .syed-network-free-media-logo {
    width: 152px !important;
    height: 76px !important;
  }

  body .syed-network-shehrbeen-logo {
    width: 132px !important;
    height: 76px !important;
  }

  body .syed-network-otd-combo {
    gap: 5px !important;
  }

  body .syed-network-otd-logo {
    width: 88px !important;
    height: 66px !important;
  }

  body .syed-network-calendar {
    width: 47px !important;
    height: 66px !important;
    flex-basis: 47px !important;
  }

  body .syed-network-calendar-day,
  body .syed-network-calendar-month {
    font-size: 11px !important;
  }

  body .syed-network-calendar-number {
    font-size: 14px !important;
  }

  body .syed-network-url-pill {
    min-height: 30px !important;
    padding: 6px 10px !important;
    font-size: 11px !important;
  }

  body .syed-network-url-pill span {
    font-size: 15px !important;
  }

  #public-opinion-pdfmatch .survey-button {
    font-size: 12px !important;
    padding: 9px 10px !important;
    gap: 6px !important;
  }

  #public-opinion-pdfmatch .survey-button .survey-button-arrow {
    width: auto !important;
    height: auto !important;
    padding: 0 !important;
    border: 0 !important;
    font-size: 22px !important;
  }
}
</style>



<style>
/* =========================================================
   22-09 CALENDAR TEXT FIX ONLY
   Keep Tue / date / month neatly inside calendar artwork.
   ========================================================= */
body .syed-network-calendar {
  overflow: hidden !important;
}

body .syed-network-calendar-day,
body .syed-network-calendar-number,
body .syed-network-calendar-month {
  left: 50% !important;
  width: 58% !important;
  max-width: 58% !important;
  transform: translateX(-50%) !important;
  margin: 0 !important;
  padding: 0 !important;
  text-align: center !important;
  white-space: nowrap !important;
  overflow: hidden !important;
  box-sizing: border-box !important;
}

body .syed-network-calendar-day {
  top: 18.5% !important;
  font-size: 11px !important;
  line-height: 1 !important;
  font-weight: 700 !important;
}

body .syed-network-calendar-number {
  top: 39% !important;
  font-size: 17px !important;
  line-height: .95 !important;
  font-weight: 800 !important;
}

body .syed-network-calendar-month {
  bottom: 18% !important;
  font-size: 11px !important;
  line-height: 1 !important;
  font-weight: 700 !important;
}

@media (max-width:700px) {
  body .syed-network-calendar-day,
  body .syed-network-calendar-month {
    font-size: 11px !important;
  }

  body .syed-network-calendar-number {
    top: 39% !important;
    font-size: 15px !important;
  }
}

@media (max-width:420px) {
  body .syed-network-calendar-day,
  body .syed-network-calendar-number,
  body .syed-network-calendar-month {
    width: 56% !important;
    max-width: 56% !important;
  }

  body .syed-network-calendar-day {
    top: 19% !important;
    font-size: 11px !important;
  }

  body .syed-network-calendar-number {
    top: 39.5% !important;
    font-size: 13px !important;
    line-height: .9 !important;
  }

  body .syed-network-calendar-month {
    bottom: 18.5% !important;
    font-size: 11px !important;
  }
}
</style>



<style>
/* =========================================================
   22-09 FINAL OTD ICON REPLACEMENT
   Uses Images/otd-icon.png (transparent background) and places
   today's Pakistan date inside the calendar drawn in that icon.
   ========================================================= */

body .syed-network-otd-logo-box {
  overflow: visible !important;
}

body .syed-network-otd-icon-wrap {
  position: relative !important;
  width: 220px !important;
  max-width: 100% !important;
  aspect-ratio: 1632 / 964 !important;
  margin: 0 auto !important;
  flex: 0 0 auto !important;
}

body .syed-network-otd-icon {
  position: absolute !important;
  inset: 0 !important;
  display: block !important;
  width: 100% !important;
  height: 100% !important;
  max-width: none !important;
  object-fit: contain !important;
}

body .syed-network-otd-live-day,
body .syed-network-otd-live-number,
body .syed-network-otd-live-month {
  position: absolute !important;
  left: 98.25% !important;
  z-index: 4 !important;
  width: 27% !important;
  transform: translate(-50%, -50%) !important;
  margin: 0 !important;
  padding: 0 2px !important;
  color: #21120c !important;
  font-family: Arial, Helvetica, sans-serif !important;
  text-align: center !important;
  white-space: nowrap !important;
  overflow: hidden !important;
  text-overflow: clip !important;
  box-sizing: border-box !important;
  pointer-events: none !important;
}

body .syed-network-otd-live-day {
  top: 36.2% !important;
  font-size: 11px !important;
  line-height: 1 !important;
  font-weight: 700 !important;
}

body .syed-network-otd-live-number {
  top: 54.1% !important;
  font-size: 24px !important;
  line-height: .92 !important;
  font-weight: 800 !important;
}

body .syed-network-otd-live-month {
  top: 74.0% !important;
  font-size: 11px !important;
  line-height: 1 !important;
  font-weight: 700 !important;
}

/* The new icon already contains the calendar artwork, so the old
   separate On This Date logo/calendar elements are no longer used. */

@media (max-width: 700px) {
  body .syed-network-otd-icon-wrap {
    width: 205px !important;
  }

  body .syed-network-otd-live-day {
    font-size: 11px !important;
  }

  body .syed-network-otd-live-number {
    font-size: 22px !important;
  }

  body .syed-network-otd-live-month {
    font-size: 11px !important;
  }
}

@media (max-width: 420px) {
  body .syed-network-otd-icon-wrap {
    width: 184px !important;
  }

  body .syed-network-otd-live-day {
    font-size: 11px !important;
  }

  body .syed-network-otd-live-number {
    font-size: 19px !important;
  }

  body .syed-network-otd-live-month {
    font-size: 11px !important;
  }
}
</style>



<!-- ===== 22-09 FINAL IPHONE FIX: PLATFORM CARDS + ZAMEENI HAQAIQ ===== -->
<style>
/* ---------------------------------------------------------
   HOW THE PLATFORM WORKS — compact mobile reference match
   --------------------------------------------------------- */
@media (max-width: 700px) {
  body #public-opinion-pdfmatch .steps {
    display: grid !important;
    grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
    gap: 3px !important;
    align-items: stretch !important;
    width: 100% !important;
  }

  body #public-opinion-pdfmatch .step {
    box-sizing: border-box !important;
    min-width: 0 !important;
    min-height: 108px !important;
    height: 108px !important;
    padding: 6px 5px 6px !important;
    border: 1px solid #dedede !important;
    border-radius: 6px !important;
    background: #ffffff !important;
    box-shadow: none !important;
    overflow: hidden !important;
    text-align: left !important;
  }

  body #public-opinion-pdfmatch .step .num {
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    width: 18px !important;
    height: 18px !important;
    min-width: 18px !important;
    min-height: 18px !important;
    line-height: 18px !important;
    margin: 0 3px 0 0 !important;
    border-radius: 50% !important;
    font-size: 11px !important;
    font-weight: 700 !important;
    vertical-align: middle !important;
  }

  body #public-opinion-pdfmatch .step img {
    display: inline-block !important;
    width: 14px !important;
    height: 14px !important;
    min-width: 14px !important;
    min-height: 14px !important;
    margin: 0 !important;
    padding: 0 !important;
    object-fit: contain !important;
    vertical-align: middle !important;
  }

  body #public-opinion-pdfmatch .step h3 {
    margin: 7px 0 3px !important;
    color: #043E6B !important;
    font-size: clamp(11px, 2.75vw, 12px) !important;
    line-height: 1.02 !important;
    font-weight: 800 !important;
    letter-spacing: -.15px !important;
    overflow-wrap: normal !important;
    word-break: normal !important;
  }

  body #public-opinion-pdfmatch .step p {
    margin: 0 !important;
    color: #595959 !important;
    font-size: clamp(11px, 2.25vw, 11px) !important;
    line-height: 1.10 !important;
    font-weight: 500 !important;
    overflow-wrap: normal !important;
    word-break: normal !important;
  }
}

@media (max-width: 390px) {
  body #public-opinion-pdfmatch .steps {
    gap: 3px !important;
  }

  body #public-opinion-pdfmatch .step {
    min-height: 104px !important;
    height: 104px !important;
    padding: 5px 4px 5px !important;
  }

  body #public-opinion-pdfmatch .step .num {
    width: 17px !important;
    height: 17px !important;
    min-width: 17px !important;
    min-height: 17px !important;
    line-height: 17px !important;
    font-size: 11px !important;
  }

  body #public-opinion-pdfmatch .step img {
    width: 13px !important;
    height: 13px !important;
    min-width: 13px !important;
    min-height: 13px !important;
  }

  body #public-opinion-pdfmatch .step h3 {
    margin-top: 6px !important;
    font-size: 11px !important;
  }

  body #public-opinion-pdfmatch .step p {
    font-size: 11px !important;
    line-height: 1.08 !important;
  }
}

/* ---------------------------------------------------------
   ZAMEENI HAQAIQ — match supplied reference on mobile
   --------------------------------------------------------- */
@media (max-width: 767px) {
  body .mobile-zameeni-card {
    width: 100% !important;
    max-width: 394px !important;
    height: 190px !important;
    border-radius: 20px !important;
    overflow: hidden !important;
    background: #fff !important;
    box-shadow: 0 5px 14px rgba(0,0,0,.10) !important;
  }

  /* Blue at the start, darker at the end. */
  body .mobile-zameeni-card > div:nth-of-type(2) {
    left: 14px !important;
    right: 14px !important;
    bottom: 10px !important;
    height: 86px !important;
    background: linear-gradient(90deg, #0d5a87 0%, #07456d 42%, #022846 100%) !important;
    box-shadow: 0 2px 5px rgba(0,0,0,.12) !important;
  }

  /* Bring Syed Shayan slightly forward/right and keep him above the strip. */
  body .mobile-zameeni-person {
    left: 28px !important;
    top: 20px !important;
    width: 112px !important;
    height: 160px !important;
    z-index: 40 !important;
    box-shadow: 0 3px 8px rgba(0,0,0,.18) !important;
  }

  body .mobile-zameeni-person img {
    width: 100% !important;
    height: 100% !important;
    object-fit: cover !important;
    object-position: center 34% !important;
  }

  /* Urdu logo centered in the white area to the right of the portrait. */
  body .mobile-zameeni-logo {
    left: 148px !important;
    right: 22px !important;
    top: 13px !important;
    height: 72px !important;
    width: auto !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    transform: none !important;
  }

  body .mobile-zameeni-logo img {
    width: 188px !important;
    max-width: 100% !important;
    height: 70px !important;
    object-fit: contain !important;
    object-position: center !important;
  }

  /* Center both English lines; arrow stays cleanly at the right edge. */
  body .mobile-zameeni-copy {
    left: 148px !important;
    right: 25px !important;
    bottom: 23px !important;
    min-height: 55px !important;
    width: auto !important;
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    justify-content: center !important;
    text-align: center !important;
  }

  body .mobile-zameeni-copy > p {
    width: 100% !important;
    margin: 0 !important;
    text-align: center !important;
    font-size: 13px !important;
    line-height: 1.1 !important;
  }

  body .mobile-zameeni-copy > div {
    position: relative !important;
    display: block !important;
    width: 100% !important;
    margin-top: 5px !important;
    text-align: center !important;
  }

  body .mobile-zameeni-copy > div > p {
    width: 100% !important;
    margin: 0 !important;
    padding: 0 24px 0 0 !important;
    text-align: center !important;
    white-space: nowrap !important;
    font-size: 12px !important;
    line-height: 1.1 !important;
  }

  body .mobile-zameeni-copy > div > span {
    position: absolute !important;
    right: 0 !important;
    top: 50% !important;
    margin: 0 !important;
    padding: 0 !important;
    transform: translateY(-50%) !important;
    color: #dfbf72 !important;
    font-size: 24px !important;
    line-height: 1 !important;
    font-weight: 300 !important;
  }
}

@media (max-width: 380px) {
  body .mobile-zameeni-card {
    height: 180px !important;
  }

  body .mobile-zameeni-card > div:nth-of-type(2) {
    height: 80px !important;
  }

  body .mobile-zameeni-person {
    left: 23px !important;
    top: 19px !important;
    width: 104px !important;
    height: 150px !important;
  }

  body .mobile-zameeni-logo,
  body .mobile-zameeni-copy {
    left: 135px !important;
    right: 18px !important;
  }

  body .mobile-zameeni-logo img {
    width: 176px !important;
  }

  body .mobile-zameeni-copy > div > p {
    font-size: 11px !important;
  }
}
</style>



<!-- ===== FINAL MOBILE PLATFORM ICON SIZE FIX ===== -->
<style>
@media (max-width: 700px) {
  html body #public-opinion-pdfmatch .step > img {
    width: 32px !important;
    height: 32px !important;
    min-width: 32px !important;
    min-height: 32px !important;
    max-width: 32px !important;
    max-height: 32px !important;
    margin: 0 !important;
    padding: 0 !important;
    object-fit: contain !important;
    vertical-align: middle !important;
  }
}

@media (max-width: 390px) {
  html body #public-opinion-pdfmatch .step > img {
    width: 30px !important;
    height: 30px !important;
    min-width: 30px !important;
    min-height: 30px !important;
    max-width: 30px !important;
    max-height: 30px !important;
  }
}
</style>


<!-- ===== 23-09 FINAL: ZAMEENI HAQAIQ + CARD ICON SIZE ===== -->
<style>
/* ---------------------------------------------------------
   ZAMEENI HAQAIQ
   Match the supplied reference:
   - English copy aligned to the LEFT
   - arrow stays at the far right
   - arrow returns to the slimmer 20px reference size
   - gradient becomes noticeably darker toward the right end
   --------------------------------------------------------- */
@media (max-width: 767px) {

  body .mobile-zameeni-card > div:nth-of-type(2) {
    background: linear-gradient(
      90deg,
      #0c5a87 0%,
      #07466d 48%,
      #033451 72%,
      #011f36 100%
    ) !important;
  }

  body .mobile-zameeni-copy {
    left: 148px !important;
    right: 25px !important;
    bottom: 23px !important;
    width: auto !important;
    min-height: 55px !important;

    display: flex !important;
    flex-direction: column !important;
    align-items: flex-start !important;
    justify-content: center !important;

    text-align: left !important;
  }

  body .mobile-zameeni-copy > p {
    width: 100% !important;
    margin: 0 !important;
    padding: 0 !important;

    text-align: left !important;
    font-size: 13px !important;
    line-height: 1.1 !important;
  }

  body .mobile-zameeni-copy > div {
    position: relative !important;
    display: block !important;
    width: 100% !important;
    margin-top: 5px !important;
    text-align: left !important;
  }

  body .mobile-zameeni-copy > div > p {
    display: block !important;
    width: auto !important;
    max-width: calc(100% - 32px) !important;
    margin: 0 !important;
    padding: 0 !important;

    text-align: left !important;
    white-space: nowrap !important;

    font-size: 12px !important;
    line-height: 1.1 !important;
  }

  body .mobile-zameeni-copy > div > span {
    position: absolute !important;
    right: 0 !important;
    top: 50% !important;

    margin: 0 !important;
    padding: 0 !important;
    transform: translateY(-50%) !important;

    color: #d6aa43 !important;
    font-size: 20px !important;
    line-height: 1 !important;
    font-weight: 300 !important;
  }

  /* -------------------------------------------------------
     RESEARCH & POLICY CARD ICONS
     Restore the larger visual scale shown in the reference.
     ------------------------------------------------------- */
  body .rp-mobile.rp-paged-slider .rp-icon {
    width: 48px !important;
    height: 48px !important;
    min-width: 48px !important;
    flex: 0 0 48px !important;
  }

  body .rp-mobile.rp-paged-slider .rp-icon img,
  body .rp-mobile.rp-paged-slider .rp-energy-icon img,
  body .rp-mobile.rp-paged-slider .rp-map-icon img,
  body .rp-mobile.rp-paged-slider .rp-water-icon img {
    width: 42px !important;
    height: 42px !important;
    min-width: 42px !important;
    max-width: 42px !important;
    max-height: 42px !important;
    object-fit: contain !important;
  }

  body .rp-mobile.rp-paged-slider .rp-card-label {
    min-height: 48px !important;
    gap: 8px !important;
  }

  /* -------------------------------------------------------
     TOP FOUR HOME CARDS
     Slightly enlarge the circular icons as requested.
     ------------------------------------------------------- */
  body #home-entry-cards .home-entry-icon,
  body #home-entry-cards > a > div > .flex-grow > .flex.items-center > div:first-child {
    width: 52px !important;
    height: 52px !important;
    min-width: 52px !important;
    flex: 0 0 52px !important;
  }

  body #home-entry-cards .home-entry-icon img,
  body #home-entry-cards > a > div > .flex-grow > .flex.items-center img {
    width: 36px !important;
    height: 36px !important;
    min-width: 36px !important;
    max-width: 36px !important;
    max-height: 36px !important;
    object-fit: contain !important;
  }
}

@media (max-width: 390px) {
  /* Keep the same left-aligned reference composition on small iPhones. */
  body .mobile-zameeni-copy {
    left: 135px !important;
    right: 18px !important;
    align-items: flex-start !important;
    text-align: left !important;
  }

  body .mobile-zameeni-copy > p,
  body .mobile-zameeni-copy > div,
  body .mobile-zameeni-copy > div > p {
    text-align: left !important;
  }

  body .mobile-zameeni-copy > div > p {
    max-width: calc(100% - 28px) !important;
    font-size: 11px !important;
  }

  body .mobile-zameeni-copy > div > span {
    font-size: 20px !important;
    color: #d6aa43 !important;
  }

  body .rp-mobile.rp-paged-slider .rp-icon {
    width: 46px !important;
    height: 46px !important;
    min-width: 46px !important;
    flex-basis: 46px !important;
  }

  body .rp-mobile.rp-paged-slider .rp-icon img,
  body .rp-mobile.rp-paged-slider .rp-energy-icon img,
  body .rp-mobile.rp-paged-slider .rp-map-icon img,
  body .rp-mobile.rp-paged-slider .rp-water-icon img {
    width: 40px !important;
    height: 40px !important;
    min-width: 40px !important;
    max-width: 40px !important;
    max-height: 40px !important;
  }

  body #home-entry-cards .home-entry-icon,
  body #home-entry-cards > a > div > .flex-grow > .flex.items-center > div:first-child {
    width: 50px !important;
    height: 50px !important;
    min-width: 50px !important;
    flex-basis: 50px !important;
  }

  body #home-entry-cards .home-entry-icon img,
  body #home-entry-cards > a > div > .flex-grow > .flex.items-center img {
    width: 34px !important;
    height: 34px !important;
    min-width: 34px !important;
    max-width: 34px !important;
    max-height: 34px !important;
  }
}
</style>



<!-- ===== 23-09 FINAL PUBLIC OPINION GREEN MATCH ===== -->
<style>
/* Exact green sampled from the supplied reference image */
#public-opinion-pdfmatch {
  --green: #0F7A57 !important;
}

/* PUBLIC OPINION */
#public-opinion-pdfmatch .survey-label {
  color: #0F7A57 !important;
}

/* Only the word "Survey" in the title */
#public-opinion-pdfmatch .survey-title span {
  color: #0F7A57 !important;
}

/* HOW THE PLATFORM WORKS */
#public-opinion-pdfmatch .how {
  color: #0F7A57 !important;
}

/* Green number circles 1,2,3,4 */
#public-opinion-pdfmatch .step .num,
body #public-opinion-pdfmatch .step .num {
  background: #0F7A57 !important;
  color: #ffffff !important;
}

/* Green arrow inside METHODOLOGY & STANDARDS */
#public-opinion-pdfmatch .survey-button .survey-button-arrow,
#public-opinion-pdfmatch .survey-button b {
  color: #0F7A57 !important;
}

/* VIEW ALL SURVEYS + its arrow */
#public-opinion-pdfmatch .survey-all,
#public-opinion-pdfmatch .survey-all a,
#public-opinion-pdfmatch .survey-all a::before,
#public-opinion-pdfmatch .survey-all a::after {
  color: #0F7A57 !important;
}
</style>


<!-- ===== 23-09 iPHONE FINAL FIX: GREEN + ZAMEENI POSITION ===== -->
<style>
/* ---------------------------------------------------------
   PUBLIC OPINION — force the exact reference green on iOS.
   -webkit-text-fill-color prevents Safari/WebKit from
   visually replacing the requested text color.
   --------------------------------------------------------- */
@supports (-webkit-touch-callout: none) {
  #public-opinion-pdfmatch {
    --green: #0F7A57 !important;
  }

  html body #public-opinion-pdfmatch .survey-label,
  html body #public-opinion-pdfmatch .survey-title span,
  html body #public-opinion-pdfmatch .how,
  html body #public-opinion-pdfmatch .survey-all,
  html body #public-opinion-pdfmatch .survey-all a,
  html body #public-opinion-pdfmatch .survey-all a::before,
  html body #public-opinion-pdfmatch .survey-all a::after,
  html body #public-opinion-pdfmatch .survey-button .survey-button-arrow,
  html body #public-opinion-pdfmatch .survey-button b {
    color: #0F7A57 !important;
    -webkit-text-fill-color: #0F7A57 !important;
  }

  html body #public-opinion-pdfmatch .step .num {
    background: #0F7A57 !important;
    background-color: #0F7A57 !important;
    color: #ffffff !important;
    -webkit-text-fill-color: #ffffff !important;
  }
}

/* ---------------------------------------------------------
   iPHONE ZAMEENI HAQAIQ
   Android layout remains untouched.
   Fixes the copy overlapping the portrait and brings the
   arrow slightly inward like the supplied reference.
   --------------------------------------------------------- */
@supports (-webkit-touch-callout: none) {
  @media (max-width: 767px) {
    html body .mobile-zameeni-copy {
      left: 152px !important;
      right: 32px !important;
      bottom: 23px !important;
      width: auto !important;
      min-height: 55px !important;

      display: flex !important;
      flex-direction: column !important;
      align-items: flex-start !important;
      justify-content: center !important;
      text-align: left !important;
    }

    html body .mobile-zameeni-copy > p {
      width: 100% !important;
      margin: 0 !important;
      padding: 0 !important;
      text-align: left !important;
      font-size: 13px !important;
      line-height: 1.1 !important;
    }

    html body .mobile-zameeni-copy > div {
      position: relative !important;
      display: block !important;
      width: 100% !important;
      margin-top: 5px !important;
      text-align: left !important;
    }

    html body .mobile-zameeni-copy > div > p {
      display: block !important;
      width: auto !important;
      max-width: calc(100% - 34px) !important;
      margin: 0 !important;
      padding: 0 !important;
      text-align: left !important;
      white-space: nowrap !important;
      font-size: 12px !important;
      line-height: 1.1 !important;
    }

    html body .mobile-zameeni-copy > div > span {
      position: absolute !important;
      right: 0 !important;
      top: 50% !important;
      margin: 0 !important;
      padding: 0 !important;
      transform: translateY(-50%) !important;
      color: #d6aa43 !important;
      -webkit-text-fill-color: #d6aa43 !important;
      font-size: 20px !important;
      line-height: 1 !important;
      font-weight: 300 !important;
    }
  }

  /* Smaller iPhones */
  @media (max-width: 380px) {
    html body .mobile-zameeni-copy {
      left: 140px !important;
      right: 30px !important;
    }

    html body .mobile-zameeni-copy > div > p {
      max-width: calc(100% - 32px) !important;
      font-size: 11px !important;
    }
  }
}
</style>


<!-- ===== FINAL DEVICE-WISE ZAMEENI ARROW FIX ===== -->
<script>
(function () {
  const ua = navigator.userAgent || '';
  const root = document.documentElement;

  if (/iPhone|iPad|iPod/i.test(ua)) {
    root.classList.add('device-ios');
  } else if (/Android/i.test(ua)) {
    root.classList.add('device-android');
  }
})();
</script>

<style>
@media (max-width: 767px) {

  /* common structure */
  html .mobile-zameeni-copy {
    text-align: left !important;
    align-items: flex-start !important;
  }

  html .mobile-zameeni-copy > div {
    position: relative !important;
    display: block !important;
    width: 100% !important;
    margin-top: 5px !important;
    text-align: left !important;
  }

  html .mobile-zameeni-copy > div > p {
    margin: 0 !important;
    white-space: nowrap !important;
    text-align: left !important;
    font-size: 12px !important;
    line-height: 1.1 !important;
  }

  html .mobile-zameeni-copy > div > span {
    position: absolute !important;
    top: 50% !important;
    transform: translateY(-50%) !important;
    margin: 0 !important;
    padding: 0 !important;
    color: #d6aa43 !important;
    -webkit-text-fill-color: #d6aa43 !important;
    font-size: 20px !important;
    line-height: 1 !important;
    font-weight: 300 !important;
  }

  /* ==========================================
     iPhone + Android = arrow on RIGHT side
     Match the 3rd reference image closely.
     iPhone gets a very slight forward/right nudge.
     ========================================== */
  html.device-ios .mobile-zameeni-copy,
  html.device-android .mobile-zameeni-copy {
    left: 148px !important;
    right: 22px !important;
    bottom: 23px !important;
  }

  html.device-ios .mobile-zameeni-copy > div > p,
  html.device-android .mobile-zameeni-copy > div > p {
    width: 100% !important;
    max-width: calc(100% - 36px) !important;
    padding-right: 36px !important;
    padding-left: 0 !important;
  }

  html.device-ios .mobile-zameeni-copy > div > span,
  html.device-android .mobile-zameeni-copy > div > span {
    right: 4px !important;
    left: auto !important;
  }

  /* iPhone only: tiny extra forward move */
  html.device-ios .mobile-zameeni-copy {
    right: 20px !important;
  }

  html.device-ios .mobile-zameeni-copy > div > span {
    right: 5px !important;
  }
}

@media (max-width: 380px) {
  html.device-ios .mobile-zameeni-copy,
  html.device-android .mobile-zameeni-copy {
    left: 136px !important;
    right: 17px !important;
  }

  html.device-ios .mobile-zameeni-copy > div > p,
  html.device-android .mobile-zameeni-copy > div > p {
    max-width: calc(100% - 34px) !important;
    padding-right: 34px !important;
    padding-left: 0 !important;
    font-size: 11px !important;
  }

  html.device-ios .mobile-zameeni-copy > div > span,
  html.device-android .mobile-zameeni-copy > div > span {
    right: 4px !important;
    left: auto !important;
  }

  html.device-ios .mobile-zameeni-copy {
    right: 15px !important;
  }

  html.device-ios .mobile-zameeni-copy > div > span {
    right: 5px !important;
  }
}
</style>


<!-- ===== 23-09 FINAL PUBLIC OPINION ARROW ALIGNMENT ===== -->
<style>
/* ---------------------------------------------------------
   METHODOLOGY & STANDARDS
   Keep the green arrow slim and close to the text, matching
   the supplied 2nd reference image.
   --------------------------------------------------------- */
#public-opinion-pdfmatch .survey-button {
  display: inline-flex !important;
  align-items: center !important;
  justify-content: center !important;
}

#public-opinion-pdfmatch .survey-button .survey-button-arrow {
  display: inline-flex !important;
  align-items: center !important;
  justify-content: center !important;
  flex: 0 0 auto !important;
  width: 16px !important;
  min-width: 16px !important;
  /*margin: 0 0 0 3px !important;*/
  margin-top:5px;
  padding: 0 !important;
  border: 0 !important;
  color: #0F7A57 !important;
  -webkit-text-fill-color: #0F7A57 !important;
  font-size: 18px !important;
  line-height: 1 !important;
  font-weight: 400 !important;
  letter-spacing: 0 !important;
  transform: translateY(-1px) !important;
}

/* ---------------------------------------------------------
   VIEW ALL SURVEYS
   Use real spans instead of old ::before/::after arrows so
   the arrow stays immediately beside the text like image 4.
   --------------------------------------------------------- */
#public-opinion-pdfmatch .survey-all {
  text-align: right !important;
}

#public-opinion-pdfmatch .survey-all a {
  display: inline-flex !important;
  align-items: center !important;
  justify-content: flex-end !important;
  gap: 6px !important;
  width: auto !important;
  font-size: inherit !important;
  line-height: 1 !important;
  color: #0F7A57 !important;
  -webkit-text-fill-color: #0F7A57 !important;
  font-weight: 900 !important;
  text-decoration: none !important;
  white-space: nowrap !important;
}

/* Disable the older generated text/arrow. */
#public-opinion-pdfmatch .survey-all a::before,
#public-opinion-pdfmatch .survey-all a::after {
  content: none !important;
  display: none !important;
}

#public-opinion-pdfmatch .survey-all .survey-all-text {
  display: inline-block !important;
  color: #0F7A57 !important;
  -webkit-text-fill-color: #0F7A57 !important;
  font-size: inherit !important;
  line-height: 1 !important;
  font-weight: 900 !important;
}

#public-opinion-pdfmatch .survey-all .survey-all-arrow {
  display: inline-flex !important;
  align-items: center !important;
  justify-content: center !important;
  flex: 0 0 auto !important;
  width: 18px !important;
  min-width: 18px !important;
  margin: 0 !important;
  padding: 0 !important;
  color: #0F7A57 !important;
  -webkit-text-fill-color: #0F7A57 !important;
  font-size: 18px !important;
  line-height: 1 !important;
  font-weight: 400 !important;
  transform: translateY(-1px) !important;
}

@media (max-width: 767px) {
  #public-opinion-pdfmatch .survey-button {
    gap: 2px !important;
  }

  #public-opinion-pdfmatch .survey-button .survey-button-arrow {
    width: 15px !important;
    min-width: 15px !important;
    margin-left: 2px !important;
    font-size: 17px !important;
  }

  #public-opinion-pdfmatch .survey-all a {
    gap: 5px !important;
  }

  #public-opinion-pdfmatch .survey-all .survey-all-arrow {
    width: 17px !important;
    min-width: 17px !important;
    font-size: 17px !important;
  }
}

@media (max-width: 390px) {
  #public-opinion-pdfmatch .survey-button .survey-button-arrow {
    width: 14px !important;
    min-width: 14px !important;
    font-size: 16px !important;
  }

  #public-opinion-pdfmatch .survey-all a {
    gap: 4px !important;
  }

  #public-opinion-pdfmatch .survey-all .survey-all-arrow {
    width: 16px !important;
    min-width: 16px !important;
    font-size: 16px !important;
  }
}
</style>


<!-- ===== 23-09 FIGMA TYPOGRAPHY: WEB SIZE = FIGMA SIZE + 3PX ===== -->
<style>
/*
  This block intentionally sits at the very end so it wins over older
  responsive font-size rules. Only the text values verified from the
  supplied Figma Properties screenshots are changed here.
*/
@media (max-width: 767px) {

  /* HERO -------------------------------------------------- */
  html body .figma-hero-title {
    font-family: 'Lora', serif !important;
    font-size: 20px !important;       /* Figma 17px -> Web 20px */
    font-weight: 600 !important;
    letter-spacing: 0 !important;
    color: #043F6C !important;
  }

  html body .figma-hero-tagline {
    font-family: 'Poppins', sans-serif !important;
    font-size: 12px !important;       /* Figma 9px -> Web 12px */
    font-weight: 500 !important;
    font-style: italic !important;
    letter-spacing: 0 !important;
    color: #BD8B12 !important;
  }

  /* RESEARCH & POLICY ------------------------------------ */
  html body .rp-mobile.rp-paged-slider .rp-card > p {
    font-family: 'Poppins', sans-serif !important;
    font-size: 12px !important;       /* Figma 9px -> Web 12px */
    font-weight: 400 !important;
    letter-spacing: 0 !important;
    color: #282724 !important;
  }

  /* PUBLIC OPINION --------------------------------------- */
  html body #public-opinion-pdfmatch .survey-label {
    font-family: 'Poppins', sans-serif !important;
    font-size: 14px !important;       /* Figma 11px -> Web 14px */
    font-weight: 600 !important;
    letter-spacing: 0 !important;
    color: #107B57 !important;
    -webkit-text-fill-color: #107B57 !important;
  }

  html body #public-opinion-pdfmatch .survey-title,
  html body #public-opinion-pdfmatch .survey-title span {
    font-family: 'Lora', serif !important;
    font-size: 20px !important;       /* Figma 17px -> Web 20px */
    font-weight: 700 !important;
    letter-spacing: 0 !important;
  }

  html body #public-opinion-pdfmatch .survey-title {
    color: #043F6C !important;
    -webkit-text-fill-color: #043F6C !important;
  }

  html body #public-opinion-pdfmatch .survey-title span {
    color: #107B57 !important;
    -webkit-text-fill-color: #107B57 !important;
  }

  html body #public-opinion-pdfmatch .survey-lead {
    font-family: 'Poppins', sans-serif !important;
    font-size: 12px !important;       /* Figma 9px -> Web 12px */
    font-weight: 600 !important;
    letter-spacing: 0 !important;
    color: #262626 !important;
  }

  html body #public-opinion-pdfmatch .survey-copy {
    font-family: 'Poppins', sans-serif !important;
    font-size: 11px !important;       /* Figma 8px -> Web 11px */
    font-weight: 500 !important;
    letter-spacing: 0 !important;
    color: #464646 !important;
  }

  html body #public-opinion-pdfmatch .survey-method {
    font-family: 'Poppins', sans-serif !important;
    font-size: 12px !important;       /* Figma 9px -> Web 12px */
    font-weight: 500 !important;
    letter-spacing: 0 !important;
    color: #2F2F2F !important;
  }

  html body #public-opinion-pdfmatch .survey-button {
    font-family: 'Poppins', sans-serif !important;
    font-size: 11px !important;       /* Figma 8px -> Web 11px */
    font-weight: 500 !important;
    letter-spacing: 0 !important;
    color: #FFFFFF !important;
    -webkit-text-fill-color: #FFFFFF !important;
  }

  /* Keep the button arrow green after WebKit text-fill on the parent. */
  html body #public-opinion-pdfmatch .survey-button .survey-button-arrow {
    color: #107B57 !important;
    -webkit-text-fill-color: #107B57 !important;
  }

  html body #public-opinion-pdfmatch .how {
    font-family: 'Poppins', sans-serif !important;
    font-size: 14px !important;       /* Figma 11px -> Web 14px */
    font-weight: 600 !important;
    letter-spacing: 0 !important;
    color: #107B57 !important;
    -webkit-text-fill-color: #107B57 !important;
  }

  html body #public-opinion-pdfmatch .step p {
    font-family: 'Poppins', sans-serif !important;
    font-size: 11px !important;       /* Figma 8px -> Web 11px */
    font-weight: 500 !important;
    letter-spacing: -0.02em !important;
    color: #565656 !important;
  }

  html body #public-opinion-pdfmatch .survey-all,
  html body #public-opinion-pdfmatch .survey-all a,
  html body #public-opinion-pdfmatch .survey-all .survey-all-text {
    font-family: 'Poppins', sans-serif !important;
    font-size: 14px !important;       /* Figma 11px -> Web 14px */
    font-weight: 600 !important;
    letter-spacing: 0 !important;
    color: #107B57 !important;
    -webkit-text-fill-color: #107B57 !important;
  }

  /* HOUSING SOCIETIES ------------------------------------ */
  html body .pdf-housing-mobile .hs-badge span {
    font-family: 'Poppins', sans-serif !important;
    font-size: 14px !important;       /* Figma 11px -> Web 14px */
    font-weight: 700 !important;
    letter-spacing: 0 !important;
    color: #D7A93A !important;
  }

  html body .pdf-housing-mobile .hs-title {
    font-family: 'Poppins', sans-serif !important;
    font-size: 21px !important;       /* Figma 18px -> Web 21px */
    font-weight: 600 !important;
    letter-spacing: 0 !important;
    color: #043F6C !important;
  }

  html body .pdf-housing-mobile .hs-subtitle span {
    font-family: 'Poppins', sans-serif !important;
    font-size: 17px !important;       /* Figma 14px -> Web 17px */
    font-weight: 600 !important;
    letter-spacing: 0 !important;
    color: #043F6C !important;
  }

  html body .pdf-housing-mobile .hs-desc {
    font-family: 'DM Sans', sans-serif !important;
    font-size: 13px !important;       /* Figma 10px -> Web 13px */
    font-weight: 400 !important;
    letter-spacing: 0 !important;
    color: #333232 !important;
  }

  html body .pdf-housing-mobile .hs-card p {
    font-family: 'Poppins', sans-serif !important;
    font-size: 13px !important;       /* Figma 10px -> Web 13px */
    font-weight: 400 !important;
    letter-spacing: 0 !important;
    color: #D7A93A !important;
  }

  html body .pdf-housing-mobile .hs-card h3 {
    font-family: 'Poppins', sans-serif !important;
    font-size: 14px !important;       /* Figma 11px -> Web 14px */
    font-weight: 500 !important;
    letter-spacing: 0 !important;
    text-transform: uppercase !important;
  }

  /* MEDIA & RESEARCH HUB --------------------------------- */
  html body .figma-media-mobile > h2 {
    font-family: 'Poppins', sans-serif !important;
    font-size: 18px !important;       /* Figma 15px -> Web 18px */
    font-weight: 500 !important;
    letter-spacing: 0 !important;
    color: #052945 !important;
  }

  html body .figma-media-mobile a p {
    font-family: 'Poppins', sans-serif !important;
    font-size: 11px !important;       /* Figma 8px -> Web 11px */
    font-weight: 300 !important;
    letter-spacing: 0 !important;
    color: #333131 !important;
  }

  /* PART OF SYEDSHAYAN.COM ------------------------------- */
  html body .syed-network-heading h2 {
    font-family: 'Poppins', sans-serif !important;
    font-size: 14px !important;       /* Figma 11px -> Web 14px */
    font-weight: 500 !important;
    letter-spacing: 0 !important;
    color: #404040 !important;
  }

  html body .syed-network-brand {
    font-family: 'Poppins', sans-serif !important;
    font-size: 15px !important;       /* Figma 12px -> Web 15px */
    font-weight: 600 !important;
    letter-spacing: 0 !important;
    color: #043F6C !important;
  }
}
</style>



<!-- ===== FINAL 23-09 ANDROID + IPHONE MATCH OVERRIDE ===== -->
<style>
/* ===== FINAL 23-09 ANDROID + IPHONE MATCH OVERRIDE ===== */
@media (max-width: 767px) {

  /* VIEW ALL SURVEYS: same position, size and arrow on Android + iPhone */
  html body #public-opinion-pdfmatch .survey-all {
    width: 100% !important;
    text-align: right !important;
  }

  html body #public-opinion-pdfmatch .survey-all a {
    display: inline-flex !important;
    align-items: center !important;
    justify-content: flex-end !important;
    width: auto !important;
    gap: 4px !important;
    margin: 0 !important;
    padding: 0 !important;
    font-family: 'Poppins', sans-serif !important;
    font-size: 14px !important;
    font-weight: 600 !important;
    line-height: 1 !important;
    letter-spacing: 0 !important;
    color: #107B57 !important;
    -webkit-text-fill-color: #107B57 !important;
    text-decoration: none !important;
    white-space: nowrap !important;
  }

  html body #public-opinion-pdfmatch .survey-all a::before,
  html body #public-opinion-pdfmatch .survey-all a::after {
    content: none !important;
    display: none !important;
  }

  html body #public-opinion-pdfmatch .survey-all .survey-all-text {
    display: inline-block !important;
    margin: 0 !important;
    padding: 0 !important;
    font-family: 'Poppins', sans-serif !important;
    font-size: 14px !important;
    font-weight: 600 !important;
    line-height: 1 !important;
    letter-spacing: 0 !important;
    color: #107B57 !important;
    -webkit-text-fill-color: #107B57 !important;
  }

  html body #public-opinion-pdfmatch .survey-all .survey-all-arrow {
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    flex: 0 0 auto !important;
    width: auto !important;
    min-width: 0 !important;
    margin: 0 !important;
    padding: 0 !important;
    font-family: Arial, sans-serif !important;
    font-size: 16px !important;
    font-weight: 400 !important;
    line-height: 1 !important;
    color: #107B57 !important;
    -webkit-text-fill-color: #107B57 !important;
    transform: translateY(-1px) !important;
  }

  /* HOUSING / RESEARCH SERIES typography */
  html body .pdf-housing-mobile .hs-badge {
    gap: 8px !important;
    margin-bottom: 6px !important;
  }

  html body .pdf-housing-mobile .hs-badge span {
    font-family: 'Poppins', sans-serif !important;
    font-size: 14px !important;
    font-weight: 600 !important;
    line-height: 1 !important;
    letter-spacing: 0 !important;
    text-transform: uppercase !important;
    color: #D7A93A !important;
    -webkit-text-fill-color: #D7A93A !important;
  }

  html body .pdf-housing-mobile .hs-title {
    font-family: 'Poppins', sans-serif !important;
    font-size: 21px !important;
    font-weight: 600 !important;
    line-height: 1.08 !important;
    letter-spacing: 0 !important;
    color: #043F6C !important;
    -webkit-text-fill-color: #043F6C !important;
  }

  html body .pdf-housing-mobile .hs-subtitle span {
    font-family: 'Poppins', sans-serif !important;
    font-size: 17px !important;
    font-weight: 600 !important;
    line-height: 1 !important;
    letter-spacing: 0 !important;
    color: #043F6C !important;
    -webkit-text-fill-color: #043F6C !important;
  }

  html body .pdf-housing-mobile .hs-desc {
    font-family: 'DM Sans', sans-serif !important;
    font-size: 13px !important;
    font-weight: 400 !important;
    line-height: 1.3 !important;
    color: #333232 !important;
    margin-top: 8px !important;
  }

  html body .pdf-housing-mobile .hs-card p {
    font-family: 'Poppins', sans-serif !important;
    font-size: 13px !important;
    font-weight: 400 !important;
    line-height: 1.15 !important;
    letter-spacing: 0 !important;
    color: #D7A93A !important;
  }

  html body .pdf-housing-mobile .hs-card h3 {
    font-family: 'Poppins', sans-serif !important;
    font-size: 14px !important;
    font-weight: 500 !important;
    line-height: 1.12 !important;
    letter-spacing: 0 !important;
    color: #043F6C !important;
  }

  html body .pdf-housing-mobile .hs-footer-link a {
    font-family: 'Poppins', sans-serif !important;
    font-size: 13px !important;
    font-weight: 500 !important;
    line-height: 1 !important;
    letter-spacing: 0 !important;
    color: #D7A93A !important;
  }
}

/* Do not shrink the iPhone <=390px version differently from Android. */
@media (max-width: 390px) {
  html body #public-opinion-pdfmatch .survey-all a,
  html body #public-opinion-pdfmatch .survey-all .survey-all-text {
    font-size: 14px !important;
    font-weight: 600 !important;
  }

  html body #public-opinion-pdfmatch .survey-all .survey-all-arrow {
    width: auto !important;
    min-width: 0 !important;
    font-size: 16px !important;
  }

  html body .pdf-housing-mobile .hs-badge span {
    font-size: 14px !important;
    font-weight: 600 !important;
  }

  html body .pdf-housing-mobile .hs-title {
    font-size: 21px !important;
    font-weight: 600 !important;
  }

  html body .pdf-housing-mobile .hs-subtitle span {
    font-size: 17px !important;
    font-weight: 600 !important;
  }

  html body .pdf-housing-mobile .hs-desc {
    font-size: 13px !important;
    font-weight: 400 !important;
  }

  html body .pdf-housing-mobile .hs-card p {
    font-size: 13px !important;
    font-weight: 400 !important;
  }

  html body .pdf-housing-mobile .hs-card h3 {
    font-size: 14px !important;
    font-weight: 500 !important;
  }
}
</style>



<!-- ===== FINAL 23-09 MOBILE SPACING + PARTNER LOGOS FIX ===== -->
<style>
/*
   Final mobile-only override.
   1) Reduces the large gap between VIEW ALL SURVEYS and Digital Library.
   2) Makes PART OF SyedShayan.com logos compact like the supplied reference.
   3) Keeps divider lines away from logos and consistent on Android + iPhone.
*/
@media (max-width: 767px) {

  /* VIEW ALL SURVEYS -> DIGITAL LIBRARY: remove the oversized mobile gap */
  html body #digital-library-pdfmatch,
  html body #digital-library-pdfmatch.digital-library-image-section {
    margin-top: 18px !important;
    top: 0 !important;
  }

  /* Keep the survey link from adding any extra space below itself. */
  html body #public-opinion-pdfmatch .survey-all {
    margin-bottom: 0 !important;
  }

  /* PART OF SYEDSHAYAN.COM: tighter heading-to-logo spacing */
  html body .syed-network-heading {
    margin-bottom: 22px !important;
  }

  /* Three compact partner items can sit naturally across a phone viewport. */
  html body .syed-network-track .syed-network-item {
    width: 124px !important;
    min-width: 124px !important;
    flex: 0 0 124px !important;
    min-height: 106px !important;
    padding: 0 10px 4px !important;
    overflow: visible !important;
  }

  html body .syed-network-logo-box {
    height: 64px !important;
    overflow: visible !important;
  }

  /* Free Media News */
  html body .syed-network-free-media-logo {
    width: 80px !important;
    max-width: 80px !important;
    height: 48px !important;
    object-fit: contain !important;
    transform: none !important;
  }

  /* On This Date + live calendar: scale the whole combined artwork down. */
  html body .syed-network-otd-logo-box {
    height: 64px !important;
    overflow: visible !important;
  }

  html body .syed-network-otd-icon-wrap {
    position: relative !important;
    right: 0 !important;
    width: 68px !important;
    max-width: 68px !important;
    margin: 0 12px 0 0 !important;
    aspect-ratio: 1632 / 964 !important;
  }

  html body .syed-network-otd-icon {
    width: 100% !important;
    height: 100% !important;
    object-fit: contain !important;
  }

  html body .syed-network-otd-calendar-bg {
    left: 100% !important;
    top: 50% !important;
    width: 38px !important;
    height: 50px !important;
    transform: translate(-50%, -50%) !important;
    object-fit: fill !important;
  }

  html body .syed-network-otd-live-day,
  html body .syed-network-otd-live-number,
  html body .syed-network-otd-live-month {
    left: 100% !important;
    width: 34% !important;
    padding: 0 1px !important;
  }

  html body .syed-network-otd-live-day {
    top: 35.5% !important;
    font-size: 11px !important;
  }

  html body .syed-network-otd-live-number {
    top: 54% !important;
    font-size: 11px !important;
  }

  html body .syed-network-otd-live-month {
    top: 74% !important;
    font-size: 11px !important;
  }

  /* Shehrbeen */
  html body .syed-network-shehrbeen-logo {
    width: 76px !important;
    max-width: 76px !important;
    height: 50px !important;
    object-fit: contain !important;
  }

  /* Compact URL pills, matching the smaller reference layout. */
  html body .syed-network-url-pill {
    max-width: 112px !important;
    min-height: 21px !important;
    padding: 4px 6px !important;
    font-size: 11px !important;
    line-height: 1 !important;
  }

  html body .syed-network-url-pill span {
    margin-left: 3px !important;
    font-size: 11px !important;
  }

  /*
     Divider sits at the item boundary instead of over the logo.
     Extra horizontal breathing room comes from the compact logo widths above.
  */
  html body .syed-network-track .syed-network-item::after {
    content: '' !important;
    display: block !important;
    position: absolute !important;
    top: 3px !important;
    right: 0 !important;
    bottom: auto !important;

    /* Reference-style divider: thin at top/bottom, fuller in the middle */
    width: 2px !important;
    height: 90px !important;
    opacity: 1 !important;
    background: linear-gradient(
      to bottom,
      rgba(229,229,229,0) 0%,
      rgba(229,229,229,.38) 12%,
      rgba(218,218,218,.82) 36%,
      rgba(218,218,218,.95) 50%,
      rgba(218,218,218,.82) 64%,
      rgba(229,229,229,.38) 88%,
      rgba(229,229,229,0) 100%
    ) !important;
    -webkit-clip-path: polygon(50% 0, 100% 26%, 100% 74%, 50% 100%, 0 74%, 0 26%) !important;
    clip-path: polygon(50% 0, 100% 26%, 100% 74%, 50% 100%, 0 74%, 0 26%) !important;
    pointer-events: none !important;
  }

  /* No divider after the last logo. */
  html body .syed-network-track .syed-network-item:last-child::after {
    display: none !important;
  }
}

/* Keep the same partner sizing on narrow iPhones instead of shrinking again. */
@media (max-width: 390px) {
  html body .syed-network-track .syed-network-item {
    width: 124px !important;
    min-width: 124px !important;
    flex-basis: 124px !important;
    padding-left: 10px !important;
    padding-right: 10px !important;
  }

  html body .syed-network-free-media-logo {
    width: 80px !important;
    max-width: 80px !important;
    height: 48px !important;
  }

  html body .syed-network-otd-icon-wrap {
    width: 68px !important;
    max-width: 68px !important;
    right: 0 !important;
  }

  html body .syed-network-shehrbeen-logo {
    width: 76px !important;
    max-width: 76px !important;
    height: 50px !important;
  }

  html body .syed-network-url-pill {
    font-size: 11px !important;
    padding: 4px 6px !important;
  }
}
</style>


<!-- ===== FINAL DESKTOP DIGITAL LIBRARY CENTER FIX ===== -->
<style>
/*
   Desktop-only fix:
   The Digital Library artwork was being forced left by margin-left:11px.
   Keep mobile/tablet behavior unchanged and center the complete Group.png
   section on desktop.
*/
@media (min-width: 1024px) {
  html body #digital-library-pdfmatch.digital-library-image-section {
    width: 100% !important;
    max-width: 720px !important;
    margin-left: auto !important;
    margin-right: auto !important;
    padding-left: 0 !important;
    padding-right: 0 !important;
  }

  html body #digital-library-pdfmatch .digital-library-group-image {
    display: block !important;
    width: 100% !important;
    max-width: 100% !important;
    height: auto !important;
    margin-left: auto !important;
    margin-right: auto !important;
    object-fit: contain !important;
  }
}
</style>



<!-- ===== 24-09 HOME CARDS — TEXT ENDING LINE ALIGNMENT FIX ===== -->
<style>
/*
   Figma reference:
   Keep all four mobile cards equal in height and make the LAST LINE
   of each description finish at the same vertical level.

   Important:
   - Heading/icon area stays at the top.
   - Description uses the remaining flexible space.
   - The paragraph is pushed to the bottom of that content area.
   - CTA remains directly below with the same gap in every card.
*/
@media (max-width: 767px) {

  #home-entry-cards {
    grid-auto-rows: 1fr !important;
    align-items: stretch !important;
  }

  #home-entry-cards > a {
    height: 100% !important;
  }

  #home-entry-cards > a > div {
    height: 100% !important;
    display: flex !important;
    flex-direction: column !important;
  }

  #home-entry-cards > a > div > .flex-grow {
    flex: 1 1 auto !important;
    min-height: 0 !important;
    display: flex !important;
    flex-direction: column !important;
  }

  /* KEY FIX:
     Shorter descriptions move slightly lower, so every description
     finishes on the same horizontal/vertical ending line. */
  #home-entry-cards > a > div > .flex-grow > p {
    margin-top: auto !important;
    margin-bottom: 0 !important;
  }

  /* Do not let another auto-margin split the available space.
     Existing flex-grow padding already provides the gap above button. */
  #home-entry-cards > a > div > div:last-child {
    margin-top: 0 !important;
    flex-shrink: 0 !important;
  }
}
</style>



<!-- ===== 24-09 FIGMA RESEARCH HEADING + DIGITAL LIBRARY SIZE FIX ===== -->
<style>
/* =========================================================
   MOBILE ONLY
   1) Research & Policy heading typography enlarged to better
      match the supplied Figma reference.
   2) Digital Library Group.png enlarged across the available
      mobile width so the ebook artwork does not leave the
      right-side/corner area looking empty.
   ========================================================= */
@media (max-width: 767px) {

  /* ---------- RESEARCH & POLICY HEADING ---------- */
  html body .research-policy-mobile-wrap .rp-heading {
    width: 100% !important;
    max-width: 335px !important;
    margin-left: auto !important;
    margin-right: auto !important;
    margin-bottom: 18px !important;
    padding-left: 0 !important;
    padding-right: 0 !important;
  }

  html body .research-policy-mobile-wrap .rp-kicker {
    gap: 10px !important;
    margin-bottom: 7px !important;
    font-size: 13.5px !important;
    line-height: 1.05 !important;
    font-weight: 700 !important;
    letter-spacing: 0 !important;
  }

  html body .research-policy-mobile-wrap .rp-kicker span {
    width: 34px !important;
    min-width: 34px !important;
    flex-basis: 34px !important;
    height: 1.5px !important;
  }

  html body .rp-mobile .rp-heading .rp-mobile-title {
    width: 100% !important;
    max-width: 100% !important;
    margin: 0 auto !important;
    font-family: Georgia, 'Times New Roman', serif !important;
    font-size: 22px !important;
    line-height: 1.08 !important;
    font-weight: 700 !important;
    letter-spacing: -0.25px !important;
    text-align: center !important;
    color: #043E6B !important;
  }

  html body .rp-mobile .rp-heading .rp-mobile-title span {
    display: block !important;
    width: 100% !important;
    white-space: nowrap !important;
  }

  html body .rp-mobile .rp-heading .rp-mobile-evidence {
    width: 100% !important;
    max-width: 100% !important;
    margin: 10px auto 0 !important;
    padding: 0 !important;
    font-family: 'Poppins', Arial, sans-serif !important;
    font-size: 12.5px !important;
    line-height: 1.28 !important;
    font-weight: 600 !important;
    letter-spacing: -0.08px !important;
    text-align: center !important;
    color: #262626 !important;
  }

  html body .rp-mobile .rp-heading .rp-mobile-evidence span {
    display: block !important;
    white-space: nowrap !important;
  }

  /* ---------- DIGITAL LIBRARY ----------
     Group.png is the complete supplied artwork, so enlarging
     its section enlarges the ebook artwork proportionally too.
     The clickable Explore Ebooks overlay remains aligned because
     it is positioned relative to this same section.
  */
  html body #digital-library-pdfmatch.digital-library-image-section {
    position: relative !important;
    max-width: none !important;
    padding: 0 !important;
    overflow: hidden !important;
  }

  html body #digital-library-pdfmatch .digital-library-group-image {
    display: block !important;
    width: 100% !important;
    max-width: none !important;
    height: auto !important;
    margin: 0 !important;
    object-fit: contain !important;
  }
}

/* Most Android/mobile widths: bring the artwork close to viewport edges. */
@media (min-width: 421px) and (max-width: 700px) {
  html body #digital-library-pdfmatch.digital-library-image-section {
    width: calc(100% + 28px) !important;
    margin-left: -14px !important;
    margin-right: -14px !important;
  }
}

/* iPhone / narrow mobile: same Figma-like edge fill. */
@media (max-width: 420px) {
  html body #digital-library-pdfmatch.digital-library-image-section {
    width: calc(100% + 20px) !important;
    margin-left: -10px !important;
    margin-right: -10px !important;
  }

  html body .research-policy-mobile-wrap .rp-heading {
    max-width: 330px !important;
  }

  html body .research-policy-mobile-wrap .rp-kicker {
    font-size: 13px !important;
  }

  html body .rp-mobile .rp-heading .rp-mobile-title {
    font-size: 21.5px !important;
    line-height: 1.08 !important;
  }

  html body .rp-mobile .rp-heading .rp-mobile-evidence {
    font-size: 12px !important;
    line-height: 1.28 !important;
  }
}

/* Keep narrow iPhones consistent; override the older 24.8px rule. */
@media (max-width: 380px) {
  html body .rp-mobile .rp-heading .rp-mobile-title {
    font-size: 21px !important;
    letter-spacing: -0.2px !important;
  }

  html body .rp-mobile .rp-heading .rp-mobile-evidence {
    font-size: 11.7px !important;
  }
}
</style>


<!-- ===== 24-09 FINAL PUBLIC OPINION + DIGITAL LIBRARY FIGMA FIX ===== -->
<style>
@media (max-width: 767px) {

  /* PUBLIC OPINION — tighten the text/button stack like the Figma reference */
  html body #public-opinion-pdfmatch .survey-copy {
    margin-bottom: 8px !important;
  }

  html body #public-opinion-pdfmatch .survey-method {
    margin: 4px 0 0 !important;
  }

  /* Methodology button: move upward and make it thinner */
  html body #public-opinion-pdfmatch .survey-button {
    width: max-content !important;
    min-width: 0 !important;
    min-height: 0 !important;
    height: 24px !important;
    margin-top: 8px !important;
    padding: 4px 8px !important;
    gap: 3px !important;
    border-radius: 6px !important;
    font-size: 11px !important;
    line-height: 1 !important;
    font-weight: 600 !important;
    white-space: nowrap !important;
  }

  html body #public-opinion-pdfmatch .survey-button .survey-button-arrow {
    width: 13px !important;
    min-width: 13px !important;
    margin: 0 0 0 1px !important;
    font-size: 14px !important;
    line-height: 1 !important;
    transform: translateY(-1px) !important;
  }

  /* Pull everything below the button upward */
  html body #public-opinion-pdfmatch .how {
    margin-top: 20px !important;
    margin-bottom: 10px !important;
  }

  html body #public-opinion-pdfmatch .steps {
    gap: 3px !important;
    align-items: stretch !important;
  }

  html body #public-opinion-pdfmatch .step {
    height: 100px !important;
    min-height: 100px !important;
    padding: 6px 5px 6px !important;
    border: 1px solid #dedede !important;
    border-radius: 6px !important;
    box-shadow: none !important;
  }

  html body #public-opinion-pdfmatch .step .num {
    width: 18px !important;
    height: 18px !important;
    min-width: 18px !important;
    min-height: 18px !important;
    line-height: 18px !important;
    font-size: 11px !important;
  }

  html body #public-opinion-pdfmatch .step img {
    width: 14px !important;
    height: 14px !important;
    min-width: 14px !important;
    min-height: 14px !important;
  }

  html body #public-opinion-pdfmatch .step h3 {
    margin: 6px 0 2px !important;
    font-size: 11px !important;
    line-height: 1.02 !important;
  }

  html body #public-opinion-pdfmatch .step p {
    margin: 0 !important;
    font-size: 11px !important;
    line-height: 1.08 !important;
  }

  html body #public-opinion-pdfmatch .survey-all {
    margin-top: 15px !important;
    margin-bottom: 0 !important;
  }

  /* DIGITAL LIBRARY
     Make Group.png larger and crop the unused right-side white area,
     matching the supplied Figma composition more closely. */
  html body #digital-library-pdfmatch,
  html body #digital-library-pdfmatch.digital-library-image-section {
    position: relative !important;
    width: 100vw !important;
    max-width: none !important;
    margin-top: 14px !important;
    margin-left: calc(50% - 50vw) !important;
    margin-right: 0 !important;
    padding: 0 !important;
    overflow: hidden !important;
    background: #fff !important;
  }

  html body #digital-library-pdfmatch .digital-library-group-image {
    display: block !important;
    width: 104% !important;
    max-width: none !important;
    height: auto !important;
    position: relative !important;
    left: 50% !important;
    transform: translateX(-50%) !important;
    margin: 0 !important;
    object-fit: contain !important;
  }

  /* Keep the invisible Explore Ebooks link aligned with centered Group.png */
  html body #digital-library-pdfmatch .digital-library-explore-hitbox {
    left: calc(-2% + 3.69%) !important;
    top: 66.05% !important;
    width: 33.33% !important;
    height: 9.15% !important;
  }
}

@media (max-width: 390px) {
  html body #public-opinion-pdfmatch .survey-button {
    height: 23px !important;
    padding: 4px 7px !important;
    font-size: 11px !important;
  }

  html body #public-opinion-pdfmatch .how {
    margin-top: 18px !important;
  }

  html body #public-opinion-pdfmatch .step {
    height: 98px !important;
    min-height: 98px !important;
    padding-left: 4px !important;
    padding-right: 4px !important;
  }

  html body #digital-library-pdfmatch .digital-library-group-image {
    width: 104% !important;
    position: relative !important;
    left: 50% !important;
    transform: translateX(-50%) !important;
    margin: 0 !important;
  }

  html body #digital-library-pdfmatch .digital-library-explore-hitbox {
    left: calc(-2% + 3.69%) !important;
    width: 33.33% !important;
  }
}
</style>



<!-- ===== 24-09 FINAL RESEARCH CARDS — 2 FULL CARDS + FIGMA TEXT WRAP ===== -->
<style>
@media (max-width: 767px) {

  /*
    Reference target:
    - 2 complete cards visible together
    - same card height
    - title always uses the same 2-line block
    - body copy wraps compactly to about 4–5 lines
    - chips and CTA stay on exactly the same horizontal level
  */

  html body .research-policy-mobile-wrap {
    padding-left: 6px !important;
    padding-right: 6px !important;
    overflow: hidden !important;
  }

  html body .rp-mobile.rp-paged-slider {
    width: 100% !important;
    max-width: 100% !important;
    overflow: hidden !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-pages {
    display: flex !important;
    align-items: stretch !important;
    gap: 5px !important;
    width: 100% !important;
    padding: 1px 0 7px !important;
    overflow-x: auto !important;
    overflow-y: hidden !important;
    scroll-snap-type: x mandatory !important;
    scroll-behavior: smooth !important;
    -webkit-overflow-scrolling: touch !important;
    scrollbar-width: none !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-pages::-webkit-scrollbar {
    display: none !important;
  }

  /* Exactly two complete cards in the viewport. */
  html body .rp-mobile.rp-paged-slider .rp-page {
    flex: 0 0 calc((100% - 5px) / 2) !important;
    width: calc((100% - 5px) / 2) !important;
    min-width: calc((100% - 5px) / 2) !important;
    max-width: calc((100% - 5px) / 2) !important;
    height: auto !important;
    padding: 0 !important;
    display: flex !important;
    align-items: stretch !important;
    scroll-snap-align: start !important;
    scroll-snap-stop: always !important;
  }

  /* Spacer keeps the last card swipeable without changing card width. */
  html body .rp-mobile.rp-paged-slider .rp-pages::after {
    content: "" !important;
    display: block !important;
    flex: 0 0 calc((100% - 5px) / 2) !important;
    width: calc((100% - 5px) / 2) !important;
    min-width: calc((100% - 5px) / 2) !important;
  }

  /* SAME outer size for all five cards. */
  html body .rp-mobile.rp-paged-slider .rp-page .rp-card,
  html body .rp-mobile.rp-paged-slider .rp-card,
  html body .rp-mobile.rp-paged-slider .rp-reference-card {
    box-sizing: border-box !important;
    width: 100% !important;
    min-width: 0 !important;
    height: 248px !important;
    min-height: 248px !important;
    max-height: 248px !important;
    padding: 9px 7px 8px !important;
    display: flex !important;
    flex-direction: column !important;
    justify-content: flex-start !important;
    border-radius: 11px !important;
    overflow: hidden !important;
  }

  /* Category row starts at the same level on every card. */
  html body .rp-mobile.rp-paged-slider .rp-card-label {
    box-sizing: border-box !important;
    width: 100% !important;
    height: 36px !important;
    min-height: 36px !important;
    max-height: 36px !important;
    flex: 0 0 36px !important;
    margin: 0 !important;
    gap: 5px !important;
    display: flex !important;
    align-items: center !important;
    text-align: left !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-card-label > span {
    margin: 0 !important;
    font-size: 11px !important;
    line-height: 1.12 !important;
    font-weight: 500 !important;
    letter-spacing: 0 !important;
    text-align: left !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-icon,
  html body .rp-mobile.rp-paged-slider .rp-energy-icon,
  html body .rp-mobile.rp-paged-slider .rp-map-icon,
  html body .rp-mobile.rp-paged-slider .rp-water-icon {
    width: 30px !important;
    height: 30px !important;
    min-width: 30px !important;
    min-height: 30px !important;
    flex: 0 0 30px !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-icon img,
  html body .rp-mobile.rp-paged-slider .rp-energy-icon img,
  html body .rp-mobile.rp-paged-slider .rp-map-icon img,
  html body .rp-mobile.rp-paged-slider .rp-water-icon img {
    width: 27px !important;
    height: 27px !important;
    min-width: 27px !important;
    max-width: 27px !important;
    max-height: 27px !important;
    display: block !important;
    object-fit: contain !important;
  }

  /* Every title occupies exactly the same 2-line block. */
  html body .rp-mobile.rp-paged-slider .rp-card h3,
  html body .rp-mobile.rp-paged-slider .rp-reference-card h3 {
    box-sizing: border-box !important;
    width: 100% !important;
    height: 34px !important;
    min-height: 34px !important;
    max-height: 34px !important;
    margin: 5px 0 4px !important;
    padding: 0 !important;
    color: #043E6B !important;
    font-size: 13.5px !important;
    line-height: 1.05 !important;
    font-weight: 800 !important;
    letter-spacing: -0.12px !important;
    text-align: left !important;
    overflow: hidden !important;
  }

  /*
    Key change requested:
    compact body copy like the reference image.
    The narrower font + line-height makes the descriptions sit at
    roughly 4–5 lines instead of the oversized 7–9 line mobile wrap.
  */
  html body .rp-mobile.rp-paged-slider .rp-card > p,
  html body .rp-mobile.rp-paged-slider .rp-reference-card > p {
    box-sizing: border-box !important;
    width: 100% !important;
    height: 62px !important;
    min-height: 62px !important;
    max-height: 62px !important;
    margin: 0 0 6px !important;
    padding: 0 !important;
    color: #282724 !important;
    font-family: 'Poppins', Arial, sans-serif !important;
    font-size: 11px !important;
    line-height: 1.28 !important;
    font-weight: 400 !important;
    letter-spacing: -0.08px !important;
    text-align: left !important;
    overflow: hidden !important;
  }

  /* Chips always appear at the same vertical level. */
  html body .rp-mobile.rp-paged-slider .rp-tags,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-feature-tags {
    box-sizing: border-box !important;
    width: 100% !important;
    height: 20px !important;
    min-height: 20px !important;
    max-height: 20px !important;
    flex: 0 0 20px !important;
    margin: auto 0 6px !important;
    display: flex !important;
    flex-wrap: nowrap !important;
    align-items: center !important;
    gap: 3px !important;
    overflow: hidden !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-tags span,
  html body .rp-mobile.rp-paged-slider .rp-feature-tags span,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags span {
    box-sizing: border-box !important;
    min-width: 0 !important;
    height: 18px !important;
    min-height: 18px !important;
    padding: 0 4px !important;
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    border-radius: 999px !important;
    font-size: 11px !important;
    line-height: 1 !important;
    font-weight: 700 !important;
    white-space: nowrap !important;
  }

  /* Long Corruption / Mineral pills stay on one line. */
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-feature-tags span {
    padding-left: 3px !important;
    padding-right: 3px !important;
    font-size: 11px !important;
  }

  /* All CTA buttons line up and remain fully inside each half-width card. */
  html body .rp-mobile.rp-paged-slider .rp-btn,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-btn {
    box-sizing: border-box !important;
    width: 100% !important;
    max-width: 100% !important;
    height: 28px !important;
    min-height: 28px !important;
    max-height: 28px !important;
    flex: 0 0 28px !important;
    margin: 0 !important;
    padding: 0 4px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 2px !important;
    border-radius: 999px !important;
    font-size: 11px !important;
    line-height: 1 !important;
    font-weight: 600 !important;
    letter-spacing: -0.1px !important;
    white-space: nowrap !important;
    overflow: hidden !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-btn b {
    flex: 0 0 auto !important;
    font-size: 15px !important;
    line-height: 1 !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-controls {
    margin-top: 3px !important;
  }
}

/* Narrow iPhone: KEEP two complete cards and the same 4–5-line text rhythm. */
@media (max-width: 390px) {

  html body .research-policy-mobile-wrap {
    padding-left: 5px !important;
    padding-right: 5px !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-pages {
    gap: 4px !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-page,
  html body .rp-mobile.rp-paged-slider .rp-pages::after {
    flex-basis: calc((100% - 4px) / 2) !important;
    width: calc((100% - 4px) / 2) !important;
    min-width: calc((100% - 4px) / 2) !important;
    max-width: calc((100% - 4px) / 2) !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-page .rp-card,
  html body .rp-mobile.rp-paged-slider .rp-card,
  html body .rp-mobile.rp-paged-slider .rp-reference-card {
    height: 244px !important;
    min-height: 244px !important;
    max-height: 244px !important;
    padding-left: 6px !important;
    padding-right: 6px !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-card-label > span {
    font-size: 11px !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-card h3,
  html body .rp-mobile.rp-paged-slider .rp-reference-card h3 {
    font-size: 13px !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-card > p,
  html body .rp-mobile.rp-paged-slider .rp-reference-card > p {
    height: 62px !important;
    min-height: 62px !important;
    max-height: 62px !important;
    font-size: 11px !important;
    line-height: 1.27 !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-tags span,
  html body .rp-mobile.rp-paged-slider .rp-feature-tags span,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags span {
    font-size: 11px !important;
    padding-left: 3px !important;
    padding-right: 3px !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-feature-tags span {
    font-size: 11px !important;
    padding-left: 2px !important;
    padding-right: 2px !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-btn,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-btn {
    font-size: 11px !important;
    padding-left: 3px !important;
    padding-right: 3px !important;
  }
}
</style>



<!-- ===== 24-09 FINAL OVERRIDE — BIGGER READABLE CARD TEXT + REMOVE EMPTY SPACE ===== -->
<style>
@media (max-width: 767px) {

  /* Keep exactly two complete cards visible. */
  html body .research-policy-mobile-wrap {
    padding-left: 6px !important;
    padding-right: 6px !important;
    overflow: hidden !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-pages {
    gap: 5px !important;
    align-items: stretch !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-page,
  html body .rp-mobile.rp-paged-slider .rp-pages::after {
    flex-basis: calc((100% - 5px) / 2) !important;
    width: calc((100% - 5px) / 2) !important;
    min-width: calc((100% - 5px) / 2) !important;
    max-width: calc((100% - 5px) / 2) !important;
  }

  /* Same compact height for every card, with content filling the space. */
  html body .rp-mobile.rp-paged-slider .rp-page .rp-card,
  html body .rp-mobile.rp-paged-slider .rp-card,
  html body .rp-mobile.rp-paged-slider .rp-reference-card {
    box-sizing: border-box !important;
    width: 100% !important;
    height: 232px !important;
    min-height: 232px !important;
    max-height: 232px !important;
    padding: 8px 7px 7px !important;
    display: flex !important;
    flex-direction: column !important;
    justify-content: flex-start !important;
    overflow: hidden !important;
  }

  /* Category row: larger and slightly bolder. */
  html body .rp-mobile.rp-paged-slider .rp-card-label {
    height: 36px !important;
    min-height: 36px !important;
    max-height: 36px !important;
    flex: 0 0 36px !important;
    gap: 5px !important;
    margin: 0 !important;
    align-items: center !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-card-label > span {
    font-size: 11px !important;
    line-height: 1.12 !important;
    font-weight: 600 !important;
    letter-spacing: 0 !important;
  }

  /* Keep icons proportionate to the stronger typography. */
  html body .rp-mobile.rp-paged-slider .rp-icon,
  html body .rp-mobile.rp-paged-slider .rp-energy-icon,
  html body .rp-mobile.rp-paged-slider .rp-map-icon,
  html body .rp-mobile.rp-paged-slider .rp-water-icon {
    width: 31px !important;
    height: 31px !important;
    min-width: 31px !important;
    min-height: 31px !important;
    flex: 0 0 31px !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-icon img,
  html body .rp-mobile.rp-paged-slider .rp-energy-icon img,
  html body .rp-mobile.rp-paged-slider .rp-map-icon img,
  html body .rp-mobile.rp-paged-slider .rp-water-icon img {
    width: 28px !important;
    height: 28px !important;
    min-width: 28px !important;
    max-width: 28px !important;
    max-height: 28px !important;
    object-fit: contain !important;
  }

  /* Main titles stay aligned in the same two-line area. */
  html body .rp-mobile.rp-paged-slider .rp-card h3,
  html body .rp-mobile.rp-paged-slider .rp-reference-card h3 {
    box-sizing: border-box !important;
    width: 100% !important;
    height: 38px !important;
    min-height: 38px !important;
    max-height: 38px !important;
    margin: 4px 0 4px !important;
    padding: 0 !important;
    font-size: 15.5px !important;
    line-height: 1.04 !important;
    font-weight: 800 !important;
    letter-spacing: -0.14px !important;
    text-align: left !important;
    overflow: hidden !important;
  }

  /*
    Bigger readable body copy:
    - increased from the tiny 8.x px size
    - medium weight for readability
    - fixed text area creates roughly 4–5 lines
    - no large artificial white gap below the paragraph
  */
  html body .rp-mobile.rp-paged-slider .rp-card > p,
  html body .rp-mobile.rp-paged-slider .rp-reference-card > p {
    box-sizing: border-box !important;
    width: 100% !important;
    height: 72px !important;
    min-height: 72px !important;
    max-height: 72px !important;
    margin: 0 0 5px !important;
    padding: 0 !important;
    font-family: 'Poppins', Arial, sans-serif !important;
    font-size: 11px !important;
    line-height: 1.25 !important;
    font-weight: 500 !important;
    letter-spacing: -0.06px !important;
    text-align: left !important;
    overflow: hidden !important;
  }

  /*
    IMPORTANT: remove margin-top:auto.
    That old auto margin was creating the large empty white area.
  */
  html body .rp-mobile.rp-paged-slider .rp-tags,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-feature-tags {
    box-sizing: border-box !important;
    width: 100% !important;
    height: 20px !important;
    min-height: 20px !important;
    max-height: 20px !important;
    flex: 0 0 20px !important;
    margin: 0 0 5px !important;
    display: flex !important;
    flex-wrap: nowrap !important;
    align-items: center !important;
    gap: 3px !important;
    overflow: hidden !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-tags span,
  html body .rp-mobile.rp-paged-slider .rp-feature-tags span,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags span {
    height: 19px !important;
    min-height: 19px !important;
    min-width: 0 !important;
    padding: 0 4px !important;
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    font-size: 11px !important;
    line-height: 1 !important;
    font-weight: 700 !important;
    white-space: nowrap !important;
  }

  /* Long reference-card chips need only a tiny reduction to remain single-line. */
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-feature-tags span {
    font-size: 11px !important;
    padding-left: 3px !important;
    padding-right: 3px !important;
  }

  /* CTA text also made more readable while keeping all buttons aligned. */
  html body .rp-mobile.rp-paged-slider .rp-btn,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-btn {
    box-sizing: border-box !important;
    width: 100% !important;
    max-width: 100% !important;
    height: 30px !important;
    min-height: 30px !important;
    max-height: 30px !important;
    flex: 0 0 30px !important;
    margin: 0 !important;
    padding: 0 4px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 3px !important;
    font-size: 11px !important;
    line-height: 1 !important;
    font-weight: 700 !important;
    white-space: nowrap !important;
    overflow: hidden !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-btn b {
    font-size: 16px !important;
    line-height: 1 !important;
  }
}

/* iPhone / narrow mobile: retain the same readable scale and two-card layout. */
@media (max-width: 390px) {

  html body .research-policy-mobile-wrap {
    padding-left: 5px !important;
    padding-right: 5px !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-pages {
    gap: 4px !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-page,
  html body .rp-mobile.rp-paged-slider .rp-pages::after {
    flex-basis: calc((100% - 4px) / 2) !important;
    width: calc((100% - 4px) / 2) !important;
    min-width: calc((100% - 4px) / 2) !important;
    max-width: calc((100% - 4px) / 2) !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-page .rp-card,
  html body .rp-mobile.rp-paged-slider .rp-card,
  html body .rp-mobile.rp-paged-slider .rp-reference-card {
    height: 232px !important;
    min-height: 232px !important;
    max-height: 232px !important;
    padding-left: 6px !important;
    padding-right: 6px !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-card-label > span {
    font-size: 11px !important;
    font-weight: 600 !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-card h3,
  html body .rp-mobile.rp-paged-slider .rp-reference-card h3 {
    font-size: 15px !important;
    font-weight: 800 !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-card > p,
  html body .rp-mobile.rp-paged-slider .rp-reference-card > p {
    height: 72px !important;
    min-height: 72px !important;
    max-height: 72px !important;
    font-size: 11px !important;
    line-height: 1.25 !important;
    font-weight: 500 !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-tags span,
  html body .rp-mobile.rp-paged-slider .rp-feature-tags span,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags span {
    font-size: 11px !important;
    font-weight: 700 !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-feature-tags span {
    font-size: 11px !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-btn,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-btn {
    font-size: 11px !important;
    font-weight: 700 !important;
  }
}
</style>



<!-- ===== 24-09 FINAL FIX — READABLE LIGHT-BLUE PILLS + ANDROID CTA ARROW ===== -->
<style>
@media (max-width: 767px) {

  /* Light-blue boxes: slightly taller + larger/bolder text. */
  html body .rp-mobile.rp-paged-slider .rp-tags,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-feature-tags {
    height: 23px !important;
    min-height: 23px !important;
    max-height: 23px !important;
    flex: 0 0 23px !important;
    margin-bottom: 5px !important;
    gap: 4px !important;
    overflow: visible !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-tags span,
  html body .rp-mobile.rp-paged-slider .rp-feature-tags span,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags span {
    height: 22px !important;
    min-height: 22px !important;
    padding: 0 5px !important;
    font-size: 11px !important;
    line-height: 1 !important;
    font-weight: 800 !important;
    letter-spacing: -0.05px !important;
    white-space: nowrap !important;
  }

  /* Longer feature pills remain readable without wrapping. */
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-feature-tags span {
    font-size: 11px !important;
    font-weight: 800 !important;
    padding-left: 4px !important;
    padding-right: 4px !important;
  }

  /*
    CTA arrow:
    Android/Chromium can render the text-arrow slightly above center.
    Make the arrow its own centered flex box, then nudge it 1px down.
  */
  html body .rp-mobile.rp-paged-slider .rp-btn b,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-btn b {
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    height: 100% !important;
    line-height: 1 !important;
    position: relative !important;
    top: 1px !important;
    margin: 0 !important;
    padding: 0 !important;
  }

  /* Keep the CTA text itself vertically centered. */
  html body .rp-mobile.rp-paged-slider .rp-btn,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-btn {
    align-items: center !important;
  }
}

/* iPhone/iOS: keep the arrow at its current correct position. */
@supports (-webkit-touch-callout: none) {
  @media (max-width: 767px) {
    html body .rp-mobile.rp-paged-slider .rp-btn b,
    html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-btn b {
      top: 0 !important;
    }
  }
}

/* Very narrow iPhones: keep pill text readable without making the boxes oversized. */
@media (max-width: 390px) {
  html body .rp-mobile.rp-paged-slider .rp-tags span,
  html body .rp-mobile.rp-paged-slider .rp-feature-tags span,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags span {
    font-size: 11px !important;
    font-weight: 800 !important;
    padding-left: 4px !important;
    padding-right: 4px !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-feature-tags span {
    font-size: 11px !important;
  }
}
</style>



<!-- ===== 24-09 FINAL DIGITAL LIBRARY — BALANCED MOBILE SIDE SPACE ===== -->
<style>
@media (max-width: 767px) {

  /*
    Match the supplied reference:
    keep a small, equal white gutter on BOTH sides of the complete
    Digital Library artwork instead of stretching/cropping it edge-to-edge.
  */
  html body #digital-library-pdfmatch,
  html body #digital-library-pdfmatch.digital-library-image-section {
    position: relative !important;
    width: calc(100vw - 24px) !important;
    max-width: none !important;

    /* 12px visible space from left + 12px from right */
    margin-left: calc(50% - 50vw + 12px) !important;
    margin-right: 0 !important;

    padding: 0 !important;
    overflow: hidden !important;
    background: #ffffff !important;
  }

  /* Show the COMPLETE artwork, centered, without 104% oversizing/cropping. */
  html body #digital-library-pdfmatch .digital-library-group-image {
    display: block !important;
    width: 100% !important;
    max-width: 100% !important;
    height: auto !important;

    position: relative !important;
    left: auto !important;
    right: auto !important;
    transform: none !important;

    margin: 0 auto !important;
    object-fit: contain !important;
  }

  /* Re-align the invisible Explore Ebooks link to the original Group.png proportions. */
  html body #digital-library-pdfmatch .digital-library-explore-hitbox {
    left: 3.55% !important;
    top: 66.05% !important;
    width: 32.05% !important;
    height: 9.15% !important;
  }
}

/* Keep exactly the same balanced spacing on narrow iPhones too. */
@media (max-width: 390px) {
  html body #digital-library-pdfmatch,
  html body #digital-library-pdfmatch.digital-library-image-section {
    width: calc(100vw - 24px) !important;
    margin-left: calc(50% - 50vw + 12px) !important;
    margin-right: 0 !important;
  }

  html body #digital-library-pdfmatch .digital-library-group-image {
    width: 100% !important;
    left: auto !important;
    transform: none !important;
    margin: 0 auto !important;
  }

  html body #digital-library-pdfmatch .digital-library-explore-hitbox {
    left: 3.55% !important;
    width: 32.05% !important;
  }
}
</style>



<!-- ===== 24-09 FINAL DIGITAL LIBRARY — EXACT MOBILE CENTER + SMALL EQUAL GUTTERS ===== -->
<style>
@media (max-width: 767px) {

  /*
    Final mobile adjustment:
    - artwork is slightly larger than before
    - exact visual centering
    - equal small left/right gutters
  */
  html body #digital-library-pdfmatch,
  html body #digital-library-pdfmatch.digital-library-image-section {
    position: relative !important;

    /* 8px space on both sides */
    width: calc(100vw - 16px) !important;
    max-width: none !important;

    /* exact center */
    left: 50% !important;
    transform: translateX(-50%) !important;

    margin-left: 0 !important;
    margin-right: 0 !important;
    padding: 0 !important;

    overflow: hidden !important;
    background: #ffffff !important;
  }

  html body #digital-library-pdfmatch .digital-library-group-image {
    display: block !important;
    width: 100% !important;
    max-width: 100% !important;
    height: auto !important;

    position: static !important;
    left: auto !important;
    right: auto !important;
    transform: none !important;

    margin: 0 auto !important;
    object-fit: contain !important;
  }

  /* Keep Explore Ebooks clickable area aligned with Group.png */
  html body #digital-library-pdfmatch .digital-library-explore-hitbox {
    left: 3.55% !important;
    top: 66.05% !important;
    width: 32.05% !important;
    height: 9.15% !important;
  }
}

/* Same exact centering on narrow iPhones */
@media (max-width: 390px) {
  html body #digital-library-pdfmatch,
  html body #digital-library-pdfmatch.digital-library-image-section {
    width: calc(100vw - 16px) !important;
    left: 50% !important;
    transform: translateX(-50%) !important;
    margin-left: 0 !important;
    margin-right: 0 !important;
  }

  html body #digital-library-pdfmatch .digital-library-group-image {
    width: 100% !important;
    margin: 0 auto !important;
    transform: none !important;
  }

  html body #digital-library-pdfmatch .digital-library-explore-hitbox {
    left: 3.55% !important;
    width: 32.05% !important;
  }
}
</style>



<!-- ===== 24-09 DIGITAL LIBRARY — VISUAL CENTER FIX FOR IPHONE + ANDROID ===== -->
<style>
@media (max-width: 767px) {

  /*
    The outer section was mathematically centered already.
    The supplied Group.png artwork itself has slightly more visual white
    space on the right, so shift the ARTWORK a little to the right.
  */
  html body #digital-library-pdfmatch,
  html body #digital-library-pdfmatch.digital-library-image-section {
    width: calc(100vw - 16px) !important;
    max-width: none !important;
    left: 50% !important;
    transform: translateX(-50%) !important;
    margin-left: 0 !important;
    margin-right: 0 !important;
    padding: 0 !important;
    overflow: hidden !important;
  }

  html body #digital-library-pdfmatch .digital-library-group-image {
    display: block !important;
    width: 100% !important;
    max-width: 100% !important;
    height: auto !important;

    /* visual centering correction */
    position: relative !important;
    left: 9px !important;
    right: auto !important;
    transform: none !important;

    margin: 0 auto !important;
    object-fit: contain !important;
  }

  /* Move invisible Explore Ebooks link with the artwork */
  html body #digital-library-pdfmatch .digital-library-explore-hitbox {
    left: calc(3.55% + 9px) !important;
    top: 66.05% !important;
    width: 32.05% !important;
    height: 9.15% !important;
  }
}

/* Same correction for narrow iPhones */
@media (max-width: 390px) {
  html body #digital-library-pdfmatch .digital-library-group-image {
    left: 9px !important;
  }

  html body #digital-library-pdfmatch .digital-library-explore-hitbox {
    left: calc(3.55% + 9px) !important;
  }
}
</style>



<!-- ===== 24-09 FINAL PART OF SYEDSHAYAN.COM — BIGGER LOGOS + BIGGER URL TEXT + SHARPER LINES ===== -->
<style>
/* Keep desktop and tablet layout same, only improve visual scale/readability */
body .syed-network-heading-top {
  gap: 18px !important;
}

body .syed-network-heading-line {
  width: 64px !important;
  height: 3px !important;
  flex: 0 0 64px !important;
  background: #C99A28 !important;
  border-radius: 999px !important;
}

body .syed-network-heading h2 {
  color: #3a3a3a !important;
  font-size: 22px !important;
  font-weight: 600 !important;
  letter-spacing: .2px !important;
}

body .syed-network-brand {
  margin-top: 9px !important;
  font-size: 28px !important;
  line-height: 1.08 !important;
  font-weight: 700 !important;
}

body .syed-network-item {
  min-height: 164px !important;
  padding: 0 14px 6px !important;
}

body .syed-network-item-middle::before,
body .syed-network-item-middle::after {
  width: 1px !important;
  background: #dedede !important;
}

body .syed-network-logo-box {
  height: 104px !important;
}

body .syed-network-free-media-logo {
  width: 176px !important;
  max-width: 100% !important;
  height: 92px !important;
}

body .syed-network-otd-combo {
  gap: 7px !important;
}

body .syed-network-otd-logo {
  width: 108px !important;
  height: 86px !important;
}

body .syed-network-calendar {
  width: 58px !important;
  height: 78px !important;
  flex: 0 0 58px !important;
}

body .syed-network-calendar-day {
  top: 20% !important;
  font-size: 11px !important;
  font-weight: 700 !important;
}

body .syed-network-calendar-number {
  top: 39% !important;
  font-size: 18px !important;
  font-weight: 800 !important;
}

body .syed-network-calendar-month {
  bottom: 17% !important;
  font-size: 11px !important;
  font-weight: 700 !important;
}

body .syed-network-shehrbeen-logo {
  width: 142px !important;
  max-width: 100% !important;
  height: 92px !important;
}

body .syed-network-url-pill {
  min-height: 32px !important;
  padding: 6px 13px !important;
  font-size: 13px !important;
  line-height: 1 !important;
  font-weight: 600 !important;
  color: #2c2c2c !important;
}

body .syed-network-url-pill span {
  margin-left: 4px !important;
  color: #C99A28 !important;
  font-size: 16px !important;
  font-weight: 700 !important;
}

@media (max-width: 700px) {
  body .syed-network-heading-top {
    gap: 14px !important;
  }

  body .syed-network-heading-line {
    width: 54px !important;
    height: 3px !important;
    flex-basis: 54px !important;
  }

  body .syed-network-heading h2 {
    font-size: 20px !important;
  }

  body .syed-network-brand {
    font-size: 24px !important;
  }

  body .syed-network-item {
    min-height: 146px !important;
    padding-left: 8px !important;
    padding-right: 8px !important;
    padding-bottom: 4px !important;
  }

  body .syed-network-logo-box {
    height: 92px !important;
  }

  body .syed-network-free-media-logo {
    width: 154px !important;
    height: 80px !important;
  }

  body .syed-network-otd-combo {
    gap: 5px !important;
  }

  body .syed-network-otd-logo {
    width: 90px !important;
    height: 74px !important;
  }

  body .syed-network-calendar {
    width: 50px !important;
    height: 68px !important;
    flex-basis: 50px !important;
  }

  body .syed-network-calendar-day,
  body .syed-network-calendar-month {
    font-size: 11px !important;
  }

  body .syed-network-calendar-number {
    font-size: 16px !important;
  }

  body .syed-network-shehrbeen-logo {
    width: 126px !important;
    height: 80px !important;
  }

  body .syed-network-url-pill {
    min-height: 29px !important;
    padding: 5px 10px !important;
    font-size: clamp(11px, 2.15vw, 12px) !important;
    font-weight: 600 !important;
  }

  body .syed-network-url-pill span {
    font-size: 15px !important;
  }
}

@media (max-width: 420px) {
  body .syed-network-section {
    padding-left: 6px !important;
    padding-right: 6px !important;
  }

  body .syed-network-heading-top {
    gap: 10px !important;
  }

  body .syed-network-heading-line {
    width: 42px !important;
    height: 2.5px !important;
    flex-basis: 42px !important;
  }

  body .syed-network-heading h2 {
    font-size: 17px !important;
  }

  body .syed-network-brand {
    font-size: 21px !important;
  }

  body .syed-network-item {
    min-height: 128px !important;
    padding-left: 4px !important;
    padding-right: 4px !important;
    padding-bottom: 3px !important;
  }

  body .syed-network-logo-box {
    height: 78px !important;
  }

  body .syed-network-free-media-logo {
    width: 118px !important;
    height: 66px !important;
  }

  body .syed-network-otd-combo {
    gap: 3px !important;
  }

  body .syed-network-otd-logo {
    width: 70px !important;
    height: 60px !important;
  }

  body .syed-network-calendar {
    width: 38px !important;
    height: 54px !important;
    flex-basis: 38px !important;
  }

  body .syed-network-calendar-day,
  body .syed-network-calendar-month {
    font-size: 11px !important;
  }

  body .syed-network-calendar-number {
    font-size: 12px !important;
  }

  body .syed-network-shehrbeen-logo {
    width: 98px !important;
    height: 66px !important;
  }

  body .syed-network-url-pill {
    min-height: 24px !important;
    padding: 4px 6px !important;
    font-size: 11px !important;
    font-weight: 600 !important;
  }

  body .syed-network-url-pill span {
    font-size: 13px !important;
  }
}
</style>



<!-- ===== 24-09 FINAL TYPOGRAPHY FLOOR — NO VISIBLE TEXT BELOW 11PX ===== -->
<style>
/*
  Typography QA rule:
  No visible page text should render below 11px.
  Existing larger typography is preserved.
*/
small {
  font-size: 11px !important;
}

/* Slightly stronger card typography for readability */
#home-entry-cards .home-entry-copy,
#home-entry-cards .home-entry-card p,
.rp-card > p,
.rp-reference-card > p,
#public-opinion-pdfmatch .step p,
.pdfmatch .step p,
.hs-card p,
.hs-glass-card p,
.news-card p,
.mobile-zameeni-card p {
  font-weight: 500 !important;
}

#home-entry-cards .home-entry-title,
.rp-card-label,
.rp-card-label > span,
#public-opinion-pdfmatch .step h3,
.pdfmatch .step h3,
.hs-card h3,
.hs-glass-card h3,
.news-card h3,
.mobile-zameeni-card h3 {
  font-weight: 700 !important;
}

.rp-tags span,
.rp-feature-tags span,
.rp-btn,
#home-entry-cards .home-entry-button {
  font-weight: 700 !important;
}

/* Partner URLs: explicitly keep them at least 11px on small phones */
@media (max-width: 420px) {
  body .syed-network-url-pill {
    font-size: 11px !important;
    font-weight: 600 !important;
  }
}
</style>


<!-- ===== 24-09 MOBILE RESEARCH CARDS — FULL TEXT + SMALL NON-OVERLAPPING PILLS ===== -->
<style>
/*
  Final mobile override for the Research & Policy slider.
  - Slightly taller cards so the full description is visible.
  - Keeps all cards the same height.
  - Light-blue pills use a smaller font and a 2-column grid so they can never overlap.
  - iPhone/Safari text auto-scaling is disabled only for these pills.
*/
@media (max-width: 767px) {

  /* Slight card-height increase: 248px -> 290px */
  html body .rp-mobile.rp-paged-slider .rp-page .rp-card,
  html body .rp-mobile.rp-paged-slider .rp-card,
  html body .rp-mobile.rp-paged-slider .rp-reference-card {
    height: 290px !important;
    min-height: 290px !important;
    max-height: 290px !important;
  }

  /* Give the description enough fixed space so every card stays aligned. */
  html body .rp-mobile.rp-paged-slider .rp-card > p,
  html body .rp-mobile.rp-paged-slider .rp-reference-card > p {
    height: 102px !important;
    min-height: 102px !important;
    max-height: 102px !important;
    overflow: hidden !important;
  }

  /* Two pills always remain INSIDE their own card. */
  html body .rp-mobile.rp-paged-slider .rp-tags,
  html body .rp-mobile.rp-paged-slider .rp-feature-tags,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-feature-tags {
    width: 100% !important;
    max-width: 100% !important;
    height: 20px !important;
    min-height: 20px !important;
    max-height: 20px !important;
    display: grid !important;
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
    align-items: center !important;
    column-gap: 2px !important;
    row-gap: 0 !important;
    margin: auto 0 6px !important;
    overflow: hidden !important;
    -webkit-text-size-adjust: none !important;
    text-size-adjust: none !important;
  }

  /* Normal blue pill text. */
  html body .rp-mobile.rp-paged-slider .rp-tags span,
  html body .rp-mobile.rp-paged-slider .rp-feature-tags span,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags span {
    box-sizing: border-box !important;
    width: 100% !important;
    max-width: 100% !important;
    min-width: 0 !important;
    height: 18px !important;
    min-height: 18px !important;
    margin: 0 !important;
    padding: 0 2px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    border-radius: 999px !important;
    font-size: 8.5px !important;
    line-height: 1 !important;
    font-weight: 700 !important;
    letter-spacing: -0.18px !important;
    white-space: nowrap !important;
    overflow: hidden !important;
    text-overflow: clip !important;
    -webkit-text-size-adjust: none !important;
    text-size-adjust: none !important;
  }

  /* The longest four labels need a little extra reduction. */
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-feature-tags span {
    font-size: 7px !important;
    padding-left: 1px !important;
    padding-right: 1px !important;
    letter-spacing: -0.22px !important;
  }
}

/* Narrow iPhone / small Android phones. */
@media (max-width: 390px) {
  html body .rp-mobile.rp-paged-slider .rp-page .rp-card,
  html body .rp-mobile.rp-paged-slider .rp-card,
  html body .rp-mobile.rp-paged-slider .rp-reference-card {
    height: 294px !important;
    min-height: 294px !important;
    max-height: 294px !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-card > p,
  html body .rp-mobile.rp-paged-slider .rp-reference-card > p {
    height: 106px !important;
    min-height: 106px !important;
    max-height: 106px !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-tags,
  html body .rp-mobile.rp-paged-slider .rp-feature-tags,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-feature-tags {
    column-gap: 1px !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-tags span,
  html body .rp-mobile.rp-paged-slider .rp-feature-tags span,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags span {
    font-size: 8px !important;
    padding-left: 1px !important;
    padding-right: 1px !important;
    letter-spacing: -0.2px !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-feature-tags span {
    font-size: 6.5px !important;
    letter-spacing: -0.24px !important;
  }
}
</style>



<!-- ===== 24-09 FINAL MOBILE RESEARCH CARD COMPACT FLOW FIX ===== -->
<style>
@media (max-width: 767px) {
  /*
    Remove the artificial fixed paragraph/card heights that created the large
    white gap. Content now flows naturally, while the card remains compact.
  */
  html body .rp-mobile.rp-paged-slider .rp-page .rp-card,
  html body .rp-mobile.rp-paged-slider .rp-card,
  html body .rp-mobile.rp-paged-slider .rp-reference-card {
    height: auto !important;
    min-height: 238px !important;
    max-height: none !important;
    padding: 9px 7px 8px !important;
    justify-content: flex-start !important;
  }

  /* Keep heading block compact. */
  html body .rp-mobile.rp-paged-slider .rp-card h3,
  html body .rp-mobile.rp-paged-slider .rp-reference-card h3 {
    height: auto !important;
    min-height: 30px !important;
    max-height: none !important;
    margin: 5px 0 5px !important;
    font-size: 13.5px !important;
    line-height: 1.02 !important;
  }

  /* Full description, approximately 4–5 lines on common phones. */
  html body .rp-mobile.rp-paged-slider .rp-card > p,
  html body .rp-mobile.rp-paged-slider .rp-reference-card > p {
    height: auto !important;
    min-height: 0 !important;
    max-height: none !important;
    margin: 0 0 7px !important;
    padding: 0 !important;
    overflow: visible !important;
    font-family: 'Poppins', Arial, sans-serif !important;
    font-size: 9.6px !important;
    line-height: 1.18 !important;
    font-weight: 500 !important;
    letter-spacing: -0.12px !important;
  }

  /* IMPORTANT: no margin:auto here — that was the cause of the empty space. */
  html body .rp-mobile.rp-paged-slider .rp-tags,
  html body .rp-mobile.rp-paged-slider .rp-feature-tags,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-feature-tags {
    width: 100% !important;
    height: 20px !important;
    min-height: 20px !important;
    max-height: 20px !important;
    flex: 0 0 20px !important;
    margin: 0 0 6px !important;
    display: grid !important;
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
    align-items: center !important;
    gap: 2px !important;
    overflow: hidden !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-tags span,
  html body .rp-mobile.rp-paged-slider .rp-feature-tags span,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags span {
    width: 100% !important;
    max-width: 100% !important;
    min-width: 0 !important;
    height: 18px !important;
    min-height: 18px !important;
    margin: 0 !important;
    padding: 0 2px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    font-size: 8.5px !important;
    line-height: 1 !important;
    font-weight: 700 !important;
    letter-spacing: -0.18px !important;
    white-space: nowrap !important;
    overflow: hidden !important;
    text-overflow: clip !important;
    -webkit-text-size-adjust: none !important;
    text-size-adjust: none !important;
  }

  /* Long corruption/mineral labels stay fully inside their own pill. */
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-feature-tags span {
    font-size: 7px !important;
    padding-left: 1px !important;
    padding-right: 1px !important;
    letter-spacing: -0.22px !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-btn,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-btn {
    margin: 0 !important;
  }
}

@media (max-width: 390px) {
  html body .rp-mobile.rp-paged-slider .rp-page .rp-card,
  html body .rp-mobile.rp-paged-slider .rp-card,
  html body .rp-mobile.rp-paged-slider .rp-reference-card {
    min-height: 235px !important;
    padding-left: 6px !important;
    padding-right: 6px !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-card > p,
  html body .rp-mobile.rp-paged-slider .rp-reference-card > p {
    font-size: 9.2px !important;
    line-height: 1.17 !important;
    letter-spacing: -0.14px !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-tags span,
  html body .rp-mobile.rp-paged-slider .rp-feature-tags span,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags span {
    font-size: 8px !important;
    padding-left: 1px !important;
    padding-right: 1px !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-feature-tags span {
    font-size: 6.5px !important;
    letter-spacing: -0.24px !important;
  }
}
</style>



<!-- ===== 24-09 FINAL FINAL — RESEARCH CARDS EXACT COMPACT REFERENCE ===== -->
<style>
@media (max-width: 767px) {
  /* Keep exactly two complete cards visible, like the supplied reference. */
  html body .research-policy-mobile-wrap {
    padding-left: 6px !important;
    padding-right: 6px !important;
    overflow: hidden !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-pages {
    gap: 5px !important;
    align-items: flex-start !important; /* prevents tallest card from stretching every card */
    padding: 1px 0 7px !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-page,
  html body .rp-mobile.rp-paged-slider .rp-pages::after {
    flex: 0 0 calc((100% - 5px) / 2) !important;
    width: calc((100% - 5px) / 2) !important;
    min-width: calc((100% - 5px) / 2) !important;
    max-width: calc((100% - 5px) / 2) !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-page {
    height: 248px !important;
    min-height: 248px !important;
    max-height: 248px !important;
    padding: 0 !important;
    display: flex !important;
    align-items: flex-start !important;
    align-self: flex-start !important;
  }

  /* Exact compact card rhythm: label -> title -> copy -> pills -> CTA. */
  html body .rp-mobile.rp-paged-slider .rp-page .rp-card,
  html body .rp-mobile.rp-paged-slider .rp-card,
  html body .rp-mobile.rp-paged-slider .rp-reference-card {
    box-sizing: border-box !important;
    width: 100% !important;
    height: 248px !important;
    min-height: 248px !important;
    max-height: 248px !important;
    padding: 9px 7px 8px !important;
    margin: 0 !important;
    display: grid !important;
    grid-template-rows: 36px 34px minmax(0, 1fr) 20px 28px !important;
    row-gap: 4px !important;
    align-content: stretch !important;
    border-radius: 11px !important;
    overflow: hidden !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-card-label {
    width: 100% !important;
    height: 36px !important;
    min-height: 36px !important;
    max-height: 36px !important;
    margin: 0 !important;
    padding: 0 !important;
    gap: 5px !important;
    display: flex !important;
    align-items: center !important;
    align-self: start !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-card-label > span {
    margin: 0 !important;
    font-size: 11px !important;
    line-height: 1.12 !important;
    font-weight: 600 !important;
    letter-spacing: 0 !important;
    text-align: left !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-icon,
  html body .rp-mobile.rp-paged-slider .rp-energy-icon,
  html body .rp-mobile.rp-paged-slider .rp-map-icon,
  html body .rp-mobile.rp-paged-slider .rp-water-icon {
    width: 30px !important;
    height: 30px !important;
    min-width: 30px !important;
    min-height: 30px !important;
    flex: 0 0 30px !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-icon img,
  html body .rp-mobile.rp-paged-slider .rp-energy-icon img,
  html body .rp-mobile.rp-paged-slider .rp-map-icon img,
  html body .rp-mobile.rp-paged-slider .rp-water-icon img {
    width: 27px !important;
    height: 27px !important;
    min-width: 27px !important;
    max-width: 27px !important;
    max-height: 27px !important;
    object-fit: contain !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-card h3,
  html body .rp-mobile.rp-paged-slider .rp-reference-card h3 {
    width: 100% !important;
    height: 34px !important;
    min-height: 34px !important;
    max-height: 34px !important;
    margin: 0 !important;
    padding: 0 !important;
    align-self: start !important;
    color: #043E6B !important;
    font-size: 13.5px !important;
    line-height: 1.05 !important;
    font-weight: 800 !important;
    letter-spacing: -0.12px !important;
    text-align: left !important;
    overflow: hidden !important;
  }

  /* Full copy stays inside the card. The row itself absorbs the small height difference. */
  html body .rp-mobile.rp-paged-slider .rp-card > p,
  html body .rp-mobile.rp-paged-slider .rp-reference-card > p {
    width: 100% !important;
    height: 100% !important;
    min-height: 0 !important;
    max-height: none !important;
    margin: 0 !important;
    padding: 0 !important;
    align-self: start !important;
    color: #282724 !important;
    font-family: 'Poppins', Arial, sans-serif !important;
    font-size: 9.6px !important;
    line-height: 1.18 !important;
    font-weight: 500 !important;
    letter-spacing: -0.08px !important;
    text-align: left !important;
    overflow: visible !important;
  }

  /* Longer Corruption/Mineral descriptions get a tiny reduction so all copy remains visible. */
  html body .rp-mobile.rp-paged-slider .rp-reference-card > p {
    font-size: 8.7px !important;
    line-height: 1.15 !important;
    letter-spacing: -0.1px !important;
  }

  /* Sky-blue boxes: two equal columns, no overlap. */
  html body .rp-mobile.rp-paged-slider .rp-tags,
  html body .rp-mobile.rp-paged-slider .rp-feature-tags,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-feature-tags {
    box-sizing: border-box !important;
    width: 100% !important;
    height: 20px !important;
    min-height: 20px !important;
    max-height: 20px !important;
    margin: 0 !important;
    padding: 0 !important;
    display: grid !important;
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
    align-items: center !important;
    gap: 3px !important;
    overflow: hidden !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-tags span,
  html body .rp-mobile.rp-paged-slider .rp-feature-tags span,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags span {
    box-sizing: border-box !important;
    width: 100% !important;
    min-width: 0 !important;
    max-width: 100% !important;
    height: 19px !important;
    min-height: 19px !important;
    margin: 0 !important;
    padding: 0 2px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    border-radius: 999px !important;
    font-size: 8.5px !important;
    line-height: 1 !important;
    font-weight: 700 !important;
    letter-spacing: -0.12px !important;
    white-space: nowrap !important;
    overflow: hidden !important;
    text-overflow: clip !important;
    -webkit-text-size-adjust: none !important;
    text-size-adjust: none !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-feature-tags span {
    font-size: 7.2px !important;
    padding-left: 1px !important;
    padding-right: 1px !important;
    letter-spacing: -0.18px !important;
  }

  /* Button is the last grid row, so there can be no large empty area under it. */
  html body .rp-mobile.rp-paged-slider .rp-btn,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-btn {
    box-sizing: border-box !important;
    width: 100% !important;
    max-width: 100% !important;
    height: 28px !important;
    min-height: 28px !important;
    max-height: 28px !important;
    margin: 0 !important;
    padding: 0 4px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    align-self: end !important;
    gap: 2px !important;
    border-radius: 999px !important;
    font-size: 11px !important;
    line-height: 1 !important;
    font-weight: 700 !important;
    letter-spacing: -0.1px !important;
    white-space: nowrap !important;
    overflow: hidden !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-btn b,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-btn b {
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    height: 100% !important;
    margin: 0 !important;
    padding: 0 !important;
    font-size: 15px !important;
    line-height: 1 !important;
  }
}

@media (max-width: 390px) {
  html body .research-policy-mobile-wrap {
    padding-left: 5px !important;
    padding-right: 5px !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-pages {
    gap: 4px !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-page,
  html body .rp-mobile.rp-paged-slider .rp-pages::after {
    flex-basis: calc((100% - 4px) / 2) !important;
    width: calc((100% - 4px) / 2) !important;
    min-width: calc((100% - 4px) / 2) !important;
    max-width: calc((100% - 4px) / 2) !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-page,
  html body .rp-mobile.rp-paged-slider .rp-page .rp-card,
  html body .rp-mobile.rp-paged-slider .rp-card,
  html body .rp-mobile.rp-paged-slider .rp-reference-card {
    height: 246px !important;
    min-height: 246px !important;
    max-height: 246px !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-card,
  html body .rp-mobile.rp-paged-slider .rp-reference-card {
    padding-left: 6px !important;
    padding-right: 6px !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-card > p {
    font-size: 9.2px !important;
    line-height: 1.17 !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-reference-card > p {
    font-size: 8.35px !important;
    line-height: 1.14 !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-tags span,
  html body .rp-mobile.rp-paged-slider .rp-feature-tags span,
  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-tags span {
    font-size: 8px !important;
    padding-left: 1px !important;
    padding-right: 1px !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-reference-card .rp-feature-tags span {
    font-size: 6.8px !important;
  }
}
</style>



<style>
/* ===== 24-09 ONLY CARD DESCRIPTION TEXT WRAP FIX =====
   Only the paragraph typography is adjusted. Card size, buttons,
   pills, icons and spacing remain unchanged. */
@media (max-width: 767px) {
  html body .rp-mobile.rp-paged-slider .rp-card > p,
  html body .rp-mobile.rp-paged-slider .rp-reference-card > p {
    font-size: 12.5px !important;
    line-height: 1.48 !important;
    letter-spacing: -0.08px !important;
  }

  /* Longer Corruption / Mineral copy: keep all text inside the same card. */
  html body .rp-mobile.rp-paged-slider .rp-reference-card > p {
    font-size: 9.2px !important;
    line-height: 1.20 !important;
  }
}

@media (max-width: 390px) {
  html body .rp-mobile.rp-paged-slider .rp-card > p {
    font-size: 12px !important;
    line-height: 1.48 !important;
  }

  html body .rp-mobile.rp-paged-slider .rp-reference-card > p {
    font-size: 8.9px !important;
    line-height: 1.18 !important;
  }
}
</style>



<!-- ===== 24-09 ONLY LAST 3 RESEARCH CARDS — BIGGER BODY TEXT ===== -->
<style>
/* Only description text of cards 3, 4 and 5 is changed.
   Card height, title, icons, pills, buttons and spacing remain untouched. */
@media (max-width: 767px) {

  /* CARD 3 — WATER SECURITY: ~6 lines */
  html body .rp-mobile.rp-paged-slider
  .rp-page[data-rp-page="2"] .rp-card > p {
    font-size: 13px !important;
    line-height: 1.22 !important;
    letter-spacing: -0.08px !important;
  }

  /* CARD 4 — CORRUPTION & INTEGRITY: ~6–7 lines */
  html body .rp-mobile.rp-paged-slider
  .rp-page[data-rp-page="3"] .rp-card > p {
    font-size: 10.4px !important;
    line-height: 1.22 !important;
    letter-spacing: -0.08px !important;
  }

  /* CARD 5 — MINERAL RESOURCES: ~6–7 lines */
  html body .rp-mobile.rp-paged-slider
  .rp-page[data-rp-page="4"] .rp-card > p {
    font-size: 10.6px !important;
    line-height: 1.22 !important;
    letter-spacing: -0.08px !important;
  }
}

/* Narrow iPhone: keep all text inside the existing fixed card height. */
@media (max-width: 390px) {
  html body .rp-mobile.rp-paged-slider
  .rp-page[data-rp-page="2"] .rp-card > p {
    font-size: 12.6px !important;
    line-height: 1.22 !important;
  }

  html body .rp-mobile.rp-paged-slider
  .rp-page[data-rp-page="3"] .rp-card > p {
    font-size: 10.2px !important;
    line-height: 1.20 !important;
  }

  html body .rp-mobile.rp-paged-slider
  .rp-page[data-rp-page="4"] .rp-card > p {
    font-size: 10.4px !important;
    line-height: 1.20 !important;
  }
}
</style>



<!-- ===== 24-09 FINAL: ALL RESEARCH CARD DESCRIPTION TEXT = 11PX ===== -->
<style>
@media (max-width: 767px) {
  html body .rp-mobile.rp-paged-slider .rp-card > p,
  html body .rp-mobile.rp-paged-slider .rp-reference-card > p,
  html body .rp-mobile.rp-paged-slider .rp-page[data-rp-page] .rp-card > p {
    font-size: 11px !important;
  }
}

@media (max-width: 390px) {
  html body .rp-mobile.rp-paged-slider .rp-card > p,
  html body .rp-mobile.rp-paged-slider .rp-reference-card > p,
  html body .rp-mobile.rp-paged-slider .rp-page[data-rp-page] .rp-card > p {
    font-size: 11px !important;
  }
}
</style>





<!-- ===== FINAL iPHONE SAFARI FOOTER / ILLUSTRATION WHITE-GAP FIX ===== -->
<style>
@media (max-width: 767px) {
  @supports (-webkit-touch-callout: none) {

    html,
    body {
      width: 100% !important;
      height: auto !important;
      min-height: 100% !important;
      margin: 0 !important;
      padding-bottom: 0 !important;
      overscroll-behavior-y: none !important;
    }

    /* The PHP footer is wrapped in this element in the page. */
    html body .ios-footer-wrap {
      display: block !important;
      position: relative !important;
      width: 100% !important;
      height: auto !important;
      min-height: 0 !important;
      margin: 0 !important;
      padding: 0 !important;
      overflow: hidden !important;
      line-height: normal !important;
    }

    /*
      footer.php can use div/section instead of a <footer> tag.
      Remove bottom padding/margin from the LAST branch only so the
      skyline/illustration finishes exactly at the end of the page.
    */
    html body .ios-footer-wrap > div:last-of-type,
    html body .ios-footer-wrap > section:last-of-type,
    html body .ios-footer-wrap > footer:last-of-type,
    html body .ios-footer-wrap > main:last-of-type {
      margin-bottom: 0 !important;
      padding-bottom: 0 !important;
    }

    html body .ios-footer-wrap div:last-child,
    html body .ios-footer-wrap section:last-child,
    html body .ios-footer-wrap footer:last-child {
      margin-bottom: 0 !important;
      padding-bottom: 0 !important;
    }

    /* Prevent the normal inline-image baseline from leaving a strip. */
    html body .ios-footer-wrap img {
      vertical-align: bottom !important;
    }

    html body .ios-footer-wrap img:last-child {
      display: block !important;
      margin-bottom: 0 !important;
    }
  }
}
</style>

<script>
/* iPhone Safari sometimes keeps bottom spacing from nested footer wrappers.
   Trim only the final visible branch of footer.php; other footer spacing stays intact. */
(function () {
  function isAppleTouchDevice() {
    return /iPhone|iPad|iPod/i.test(navigator.userAgent) ||
      (navigator.platform === 'MacIntel' && navigator.maxTouchPoints > 1);
  }

  function visibleElementChildren(el) {
    return Array.from(el.children).filter(function (child) {
      if (['SCRIPT', 'STYLE', 'LINK', 'NOSCRIPT'].includes(child.tagName)) return false;
      var cs = window.getComputedStyle(child);
      if (cs.display === 'none' || cs.visibility === 'hidden') return false;
      return child.getClientRects().length > 0;
    });
  }

  function trimLastBranch(el, depth) {
    if (!el || depth > 12) return;

    el.style.setProperty('margin-bottom', '0px', 'important');
    el.style.setProperty('padding-bottom', '0px', 'important');
    el.style.setProperty('min-height', '0px', 'important');

    var kids = visibleElementChildren(el);
    if (!kids.length) return;

    trimLastBranch(kids[kids.length - 1], depth + 1);
  }

  function fixIphoneFooterBottom() {
    if (!isAppleTouchDevice() || window.innerWidth > 767) return;

    var wrap = document.querySelector('.ios-footer-wrap');
    if (!wrap) return;

    trimLastBranch(wrap, 0);

    document.documentElement.style.setProperty('padding-bottom', '0px', 'important');
    document.body.style.setProperty('padding-bottom', '0px', 'important');
    document.body.style.setProperty('margin-bottom', '0px', 'important');
  }

  window.addEventListener('load', function () {
    fixIphoneFooterBottom();
    setTimeout(fixIphoneFooterBottom, 250);
    setTimeout(fixIphoneFooterBottom, 900);
  });

  window.addEventListener('pageshow', fixIphoneFooterBottom);
  window.addEventListener('orientationchange', function () {
    setTimeout(fixIphoneFooterBottom, 250);
  });
})();
</script>


<!-- ===== 24-09 PARTNER LOGOS: SLIGHTLY BIGGER ON MOBILE ===== -->
<style>
@media (max-width: 700px) {
  /* Free Media News */
  html body .syed-network-free-media-logo {
    width: 166px !important;
    max-width: 100% !important;
    height: 86px !important;
  }

  /* On This Date combined logo/calendar artwork */
  html body .syed-network-otd-icon-wrap {
    width: 74px !important;
    max-width: 74px !important;
  }

  html body .syed-network-otd-calendar-bg {
    width: 42px !important;
    height: 54px !important;
  }

  /* Shehrbeen */
  html body .syed-network-shehrbeen-logo {
    width: 136px !important;
    max-width: 100% !important;
    height: 86px !important;
  }
}

@media (max-width: 420px) {
  html body .syed-network-free-media-logo {
    width: 128px !important;
    max-width: 128px !important;
    height: 72px !important;
  }

  html body .syed-network-otd-icon-wrap {
    width: 74px !important;
    max-width: 74px !important;
  }

  html body .syed-network-otd-calendar-bg {
    width: 42px !important;
    height: 54px !important;
  }

  html body .syed-network-shehrbeen-logo {
    width: 106px !important;
    max-width: 106px !important;
    height: 72px !important;
  }
}
</style>


<!-- ===== 24-09 ON THIS DATE CALENDAR TEXT — SMALLER ===== -->
<style>
@media (max-width: 700px) {
  html body .syed-network-otd-live-day,
  html body .syed-network-otd-live-month {
    font-size: 8px !important;
    line-height: 1 !important;
  }

  html body .syed-network-otd-live-number {
    font-size: 9px !important;
    line-height: 1 !important;
  }
}

@media (max-width: 420px) {
  html body .syed-network-otd-live-day,
  html body .syed-network-otd-live-month {
    font-size: 8px !important;
  }

  html body .syed-network-otd-live-number {
    font-size: 9px !important;
  }
}
</style>


<!-- ===== RESEARCH & POLICY — FULL CARD CLICKABLE ===== -->
<style>
.rp-section .rp-card {
  cursor: pointer !important;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
  /*
    Every Research & Policy card uses the URL already present in its
    .rp-btn CTA. Clicking anywhere on the card now opens that same page.
    Event delegation also works for slider clones.
  */
  document.addEventListener('click', function (event) {
    const card = event.target.closest('.rp-section .rp-card');
    if (!card) return;

    /* If the user clicked the existing button/link, let it behave normally. */
    const directLink = event.target.closest('a');
    if (directLink) return;

    const cardLink = card.querySelector('.rp-btn[href]');
    if (!cardLink) return;

    window.location.href = cardLink.href;
  });

  /* Keyboard accessibility for the full-card link behavior. */
  document.querySelectorAll('.rp-section .rp-card').forEach(function (card) {
    if (!card.hasAttribute('tabindex')) {
      card.setAttribute('tabindex', '0');
    }
    card.setAttribute('role', 'link');

    card.addEventListener('keydown', function (event) {
      if (event.key !== 'Enter' && event.key !== ' ') return;

      const cardLink = card.querySelector('.rp-btn[href]');
      if (!cardLink) return;

      event.preventDefault();
      window.location.href = cardLink.href;
    });
  });
});
</script>


<!-- ===== 24-09 PART OF SYEDSHAYAN.COM — 3 LOGOS VISIBLE REFERENCE MATCH ===== -->
<style>
@media (max-width: 700px) {

  /* Keep exactly three partner items visible across the phone viewport. */
  html body .syed-network-marquee {
    width: 100% !important;
    overflow: hidden !important;
    padding-left: 6px !important;
    padding-right: 6px !important;
    box-sizing: border-box !important;
  }

  html body .syed-network-track .syed-network-item {
    width: calc((100vw - 12px) / 3) !important;
    min-width: calc((100vw - 12px) / 3) !important;
    flex: 0 0 calc((100vw - 12px) / 3) !important;

    min-height: 104px !important;
    padding: 0 5px 4px !important;

    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    justify-content: flex-start !important;
    box-sizing: border-box !important;
    overflow: visible !important;
  }

  /* Compact logo row like the supplied screenshot. */
  html body .syed-network-logo-box,
  html body .syed-network-otd-logo-box {
    width: 100% !important;
    height: 66px !important;
    min-height: 66px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    overflow: visible !important;
  }

  /* FREE MEDIA NEWS */
  html body .syed-network-free-media-logo {
    width: 96px !important;
    max-width: 96px !important;
    height: 54px !important;
    object-fit: contain !important;
  }

  /* ON THIS DATE + calendar */
  html body .syed-network-otd-icon-wrap {
    width: 76px !important;
    max-width: 76px !important;
    margin: 0 10px 0 0 !important;
    right: 0 !important;
  }

  html body .syed-network-otd-calendar-bg {
    width: 38px !important;
    height: 48px !important;
  }

  html body .syed-network-otd-live-day,
  html body .syed-network-otd-live-month {
    font-size: 7px !important;
    line-height: 1 !important;
  }

  html body .syed-network-otd-live-number {
    font-size: 8px !important;
    line-height: 1 !important;
  }

  /* SHEHRBEEN */
  html body .syed-network-shehrbeen-logo {
    width: 92px !important;
    max-width: 92px !important;
    height: 56px !important;
    object-fit: contain !important;
  }

  /* Website pill under every logo. */
  html body .syed-network-url-pill {
    width: auto !important;
    max-width: calc(100% - 8px) !important;
    min-height: 20px !important;
    margin-top: 2px !important;
    padding: 4px 6px !important;
    font-size: 10px !important;
    line-height: 1 !important;
    white-space: nowrap !important;
  }

  html body .syed-network-url-pill span {
    font-size: 11px !important;
    margin-left: 2px !important;
  }

  /*
    Thin light divider centered between each logo item,
    matching the supplied reference image.
  */
  html body .syed-network-track .syed-network-item::after {
    content: '' !important;
    display: block !important;
    position: absolute !important;
    top: 7px !important;
    right: 0 !important;
    width: 1px !important;
    height: 82px !important;
    opacity: 1 !important;
    background: linear-gradient(
      to bottom,
      rgba(220,220,220,0) 0%,
      rgba(214,214,214,.55) 12%,
      rgba(204,204,204,.92) 45%,
      rgba(204,204,204,.92) 55%,
      rgba(214,214,214,.55) 88%,
      rgba(220,220,220,0) 100%
    ) !important;
    -webkit-clip-path: none !important;
    clip-path: none !important;
    pointer-events: none !important;
  }

  /* Keep the continuous marquee clean at the physical end of the cloned track. */
  html body .syed-network-track .syed-network-item:last-child::after {
    display: none !important;
  }
}

/* Same 3-logo composition on narrow iPhones. */
@media (max-width: 390px) {
  html body .syed-network-track .syed-network-item {
    width: calc((100vw - 12px) / 3) !important;
    min-width: calc((100vw - 12px) / 3) !important;
    flex-basis: calc((100vw - 12px) / 3) !important;
    padding-left: 4px !important;
    padding-right: 4px !important;
  }

  html body .syed-network-free-media-logo {
    width: 92px !important;
    max-width: 92px !important;
    height: 52px !important;
  }

  html body .syed-network-otd-icon-wrap {
    width: 72px !important;
    max-width: 72px !important;
    margin-right: 9px !important;
  }

  html body .syed-network-otd-calendar-bg {
    width: 36px !important;
    height: 46px !important;
  }

  html body .syed-network-shehrbeen-logo {
    width: 88px !important;
    max-width: 88px !important;
    height: 54px !important;
  }

  html body .syed-network-url-pill {
    max-width: calc(100% - 6px) !important;
    padding-left: 4px !important;
    padding-right: 4px !important;
    font-size: 9px !important;
  }
}
</style>


<!-- ===== PAGE BUTTON HOVER EFFECTS — ADDITION ONLY ===== -->
<style>
/*
  Only hover / press behavior is added here.
  Existing button sizes, colors, layout, text, links and page code stay unchanged.
*/
@media (hover:hover) and (pointer:fine) {
  .pdfmatch .cta,
  #public-opinion-pdfmatch .survey-button,
  .pdfmatch .survey-button,
  #home-entry-cards .home-entry-button,
  .rp-section .rp-btn,
  .news-popup-trigger,
  .pdfmatch .survey-all a,
  a.inline-flex.rounded-lg,
  a.inline-flex.rounded-full,
  a.inline-flex.rounded-xl {
    transition:
      transform .25s ease,
      filter .25s ease,
      box-shadow .25s ease !important;
  }

  .pdfmatch .cta:hover,
  #public-opinion-pdfmatch .survey-button:hover,
  .pdfmatch .survey-button:hover,
  #home-entry-cards .home-entry-button:hover,
  .rp-section .rp-btn:hover,
  .news-popup-trigger:hover,
  .pdfmatch .survey-all a:hover,
  a.inline-flex.rounded-lg:hover,
  a.inline-flex.rounded-full:hover,
  a.inline-flex.rounded-xl:hover {
    transform: translateY(-3px) !important;
    filter: brightness(.94) !important;
    box-shadow: 0 9px 18px rgba(0,0,0,.20) !important;
  }

  button:not(.rp-dots button):not(#close-real-estate-news-modal) {
    transition:
      transform .22s ease,
      filter .22s ease,
      box-shadow .22s ease !important;
  }

  button:not(.rp-dots button):not(#close-real-estate-news-modal):hover {
    transform: translateY(-2px) !important;
    filter: brightness(.94) !important;
  }
}

/* Small press feedback; does not alter the normal design. */
.pdfmatch .cta:active,
#public-opinion-pdfmatch .survey-button:active,
.pdfmatch .survey-button:active,
#home-entry-cards .home-entry-button:active,
.rp-section .rp-btn:active,
.news-popup-trigger:active,
.pdfmatch .survey-all a:active,
a.inline-flex.rounded-lg:active,
a.inline-flex.rounded-full:active,
a.inline-flex.rounded-xl:active,
button:not(.rp-dots button):not(#close-real-estate-news-modal):active {
  transform: translateY(0) scale(.98) !important;
}
</style>

</body>

</html>