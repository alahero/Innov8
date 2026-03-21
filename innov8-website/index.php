<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ═══════════════════════════════════════════
         PRIMARY META
    ═══════════════════════════════════════════ -->
    <title>Innov8 Creations | Digital Strategy & Cinematic Design</title>
    <meta name="description"
        content="Innov8 Creations — a premium digital agency crafting cinematic brand experiences through high-end strategy and result-driven design narratives.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://innov8creations.com/">

    <!-- ═══════════════════════════════════════════
         FAVICON
    ═══════════════════════════════════════════ -->
    <link rel="icon" type="image/svg+xml" href="./public/assets/svg/favicon.svg">
    <link rel="alternate icon" href="./public/assets/svg/favicon.svg">

    <!-- ═══════════════════════════════════════════
         OPEN GRAPH
    ═══════════════════════════════════════════ -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://innov8creations.com/">
    <meta property="og:title" content="Innov8 Creations | Digital Strategy & Cinematic Design">
    <meta property="og:description"
        content="We craft cinematic brand experiences through high-end strategy and result-driven design. Bold ideas. Cinematic execution.">
    <meta property="og:image" content="https://innov8creations.com/public/assets/og-image.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Innov8 Creations">
    <meta property="og:locale" content="en_US">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Innov8 Creations | Digital Strategy & Cinematic Design">
    <meta name="twitter:description"
        content="We craft cinematic brand experiences through high-end strategy and result-driven design.">
    <meta name="twitter:image" content="https://innov8creations.com/public/assets/og-image.png">

    <!-- ═══════════════════════════════════════════
         SCHEMA.ORG (JSON-LD)
    ═══════════════════════════════════════════ -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ProfessionalService",
      "name": "Innov8 Creations",
      "description": "A premium digital design agency specializing in Logo & Branding, Social Media, Editorial Design, Website Development, and Corporate Identity.",
      "url": "https://innov8creations.com",
      "logo": "https://innov8creations.com/public/assets/svg/favicon.svg",
      "image": "https://innov8creations.com/public/assets/og-image.png",
      "email": "sales@innov8creations.com",
      "telephone": "+1 (657) 645-9590",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Mexico City",
        "addressCountry": "MX"
      },
      "sameAs": [
        "https://www.instagram.com/innov8creations?igsh=enk4eTFianE3b202",
        "https://m.facebook.com/profile.php?id=61583735412037&name=xhp_nt__fb__action__open_user"
      ],
      "serviceType": [
        "Logo & Branding",
        "Editorial Design",
        "Social Media",
        "Website Design",
        "Corporate Stationery",
        "Promotional Materials"
      ]
    }
    </script>

    <!-- ═══════════════════════════════════════════
         FONTS
    ═══════════════════════════════════════════ -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&family=Inter:wght@300;400;500;600&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="./public/main.css">

    <style>
        /* Project Modal */
        #project-modal .modal-inner {
            transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.3s ease;
        }

        #project-modal.open .modal-inner {
            transform: scale(1);
            opacity: 1;
        }

        #project-modal:not(.open) .modal-inner {
            transform: scale(0.96);
            opacity: 0;
        }

        /* Bento grid cells — always fill their container without stretching */
        .bento-cell {
            overflow: hidden;
            border-radius: 1rem;
            background: var(--color-brand-surface);
        }

        .bento-cell img,
        .bento-cell video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* Aspect ratio helpers */
        .bento-cover {
            aspect-ratio: 16/9;
        }

        .bento-wide {
            aspect-ratio: 16/9;
        }

        .bento-square {
            aspect-ratio: 1/1;
        }

        .bento-portrait {
            aspect-ratio: 9/16;
        }

        .bento-tall {
            aspect-ratio: 4/5;
        }
    </style>
</head>

<body class="bg-brand-dark overflow-x-hidden md:overflow-y-auto">

    <?php include './includes/navbar.php'; ?>

    <main>
        <?php include './includes/hero.php'; ?>
        <?php include './includes/client-marquee.php'; ?>

        <?php include './includes/bento-grid.php'; ?>
        <?php include './includes/project-modal.php'; ?>

        <?php include './includes/services.php'; ?>
        <?php include './includes/narrative.php'; ?>
    </main>

    <?php include  './includes/whatsapp-button.php'; ?>
    <?php include './includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/lucide@0.477.0/dist/umd/lucide.js"></script>
    <script src="./assets/js/main.js"></script>

    <script src="./assets/js/project-modal.js"></script>
</body>

</html>