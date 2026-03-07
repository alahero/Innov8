<?php $isHome = false; include './includes/head-portfolio.php'; ?>

<style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .portfolio-item {
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
        }

        .filtering-hide {
            opacity: 0;
            transform: scale(0.95);
            pointer-events: none;
            position: absolute;
            visibility: hidden;
        }

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

<body class="bg-brand-dark overflow-x-hidden md:overflow-y-auto pt-24">

    <!-- Navbar -->
    <?php include './includes/navbar.php'; ?>

    <main class="py-24 text-white min-h-[calc(100vh-100px)] relative z-10 flex flex-col">

        <!-- Abstract Background Detail -->
        <div class="absolute inset-0 pointer-events-none z-0 overflow-hidden">
            <div class="absolute -top-[10%] -left-[10%] w-[50%] h-[50%] bg-brand-cyan/5 blur-[150px] rounded-full">
            </div>
            <div class="absolute bottom-[20%] -right-[10%] w-[40%] h-[40%] bg-brand-red/5 blur-[120px] rounded-full">
            </div>
        </div>

        <div class="container mx-auto px-6 lg:px-12 max-w-7xl relative z-10 flex-grow">

            <!-- Header Section -->
            <div class="text-center max-w-4xl mx-auto mb-16 md:mb-24" data-animate="slide-up">
                <h1 class="text-5xl md:text-7xl lg:text-8xl font-black uppercase tracking-tighter leading-[0.9] mb-6">
                    Our <br class="md:hidden" />
                    <span class="text-brand-cyan italic">Masterpieces</span>
                </h1>
                <p class="text-lg md:text-2xl text-white/60 font-medium leading-relaxed mb-8">
                    We don't just build, we conquer. This is our arena. Explore our curated selection of digital
                    dominance where bold ideas meet cinematic execution.
                </p>
                <div class="w-24 h-1 bg-brand-cyan mx-auto rounded-full"></div>
            </div>

            <!-- Filter Bar -->
            <div class="mb-12 relative" data-animate="slide-up" style="transition-delay: 100ms;">
                <div class="flex flex-wrap justify-center gap-4 pb-4 px-2 items-center">
                    <?php
                    $filters = [
                        'All' => 'All',
                        'Logo & Branding' => 'Logo & Branding',
                        'Corporate Stationery' => 'Corporate Stationery',
                        'Website' => 'Website',
                        'Social Media' => 'Social Media',
                        'Promotional Materials' => 'Promotional Materials',
                        'Digital Tools' => 'Digital Tools',
                        'Editorial Design' => 'Editorial Design'
                    ];
                    $isFirst = true;
                    foreach ($filters as $label => $value): ?>
                        <button
                            class="filter-btn shrink-0 px-6 py-3 rounded-full text-[10px] font-black uppercase tracking-[0.2em] transition-all duration-300 border <?= $isFirst ? 'bg-brand-cyan border-brand-cyan text-brand-navy' : 'bg-white/5 border-white/10 text-white hover:bg-white/10 hover:border-white/30' ?>"
                            data-filter="<?= $value ?>">
                            <?= $label ?>
                        </button>
                        <?php $isFirst = false;
                    endforeach; ?>
                </div>
            </div>

            <!-- Portfolio Grid -->
            <div id="portfolio-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 relative pb-24"
                data-animate="slide-up" style="transition-delay: 200ms;">

                <?php
                $projects = [
                    // === REAL PROJECTS ===
                    [
                        'id' => 'il-leo',
                        'title' => 'IL LEO',
                        'service' => 'Logo & Branding',
                        'desc' => 'A bold, distinctive identity for Il Leo — merging Mediterranean heritage with modern edge.',
                        'cover' => './public/portfolio/logo-branding/il-leo/Il_Leo_Cover.webp',
                        'type' => 'image',
                        'content' => [
                            ['src' => './public/portfolio/logo-branding/il-leo/Il_Leo_Conten_02.webp', 'type' => 'image', 'size' => 'bento-wide'],
                            ['src' => './public/portfolio/logo-branding/il-leo/Il_Leo_Conten_03.png', 'type' => 'image', 'size' => 'bento-square'],
                            ['src' => './public/portfolio/logo-branding/il-leo/Il_Leo_Conten_04.png', 'type' => 'image', 'size' => 'bento-square'],
                            ['src' => './public/portfolio/logo-branding/il-leo/Il_Leo_Conten_05.webp', 'type' => 'image', 'size' => 'bento-square'],
                            ['src' => './public/portfolio/logo-branding/il-leo/Il_Leo_Conten_06.webp', 'type' => 'image', 'size' => 'bento-wide'],
                        ]
                    ],
                    [
                        'id' => 'las-tortillas',
                        'title' => 'LAS TORTILLAS',
                        'service' => 'Logo & Branding',
                        'desc' => 'Vibrant, culturally rich branding that captures the essence and warmth of Las Tortillas.',
                        'cover' => './public/portfolio/logo-branding/las-tortillas/Las_Tortillas_Cover.png',
                        'type' => 'image',
                        'content' => [
                            ['src' => './public/portfolio/logo-branding/las-tortillas/Las_Tortillas_Content_02.png', 'type' => 'image', 'size' => 'bento-wide'],
                            ['src' => './public/portfolio/logo-branding/las-tortillas/Las_Tortillas_Content_03.png', 'type' => 'image', 'size' => 'bento-square'],
                            ['src' => './public/portfolio/logo-branding/las-tortillas/Las_Tortillas_Content_04.webp', 'type' => 'image', 'size' => 'bento-portrait'],
                            ['src' => './public/portfolio/logo-branding/las-tortillas/Las_Tortillas_Content_05.png', 'type' => 'image', 'size' => 'bento-portrait'],
                            ['src' => './public/portfolio/logo-branding/las-tortillas/Las_Tortillas_Content_06.png', 'type' => 'image', 'size' => 'bento-wide'],
                            ['src' => './public/portfolio/logo-branding/las-tortillas/Las_Tortillas_Content_07.png', 'type' => 'image', 'size' => 'bento-square'],
                            ['src' => './public/portfolio/logo-branding/las-tortillas/Las_Tortillas_Content_08.png', 'type' => 'image', 'size' => 'bento-square'],
                            ['src' => './public/portfolio/logo-branding/las-tortillas/Las_Tortillas_Content_09.png', 'type' => 'image', 'size' => 'bento-square'],
                            ['src' => './public/portfolio/logo-branding/las-tortillas/Las_Tortillas_Content_10.png', 'type' => 'image', 'size' => 'bento-wide'],
                        ]
                    ],
                    [
                        'id' => 'freak-city',
                        'title' => 'FREAK CITY',
                        'service' => 'Editorial Design',
                        'desc' => 'Unconventional editorial layouts that mirror the raw, defiant spirit of Freak City.',
                        'cover' => './public/portfolio/editorial/freak-city/Freak_City_Cover.jpg',
                        'type' => 'image',
                        'content' => [
                            ['src' => './public/portfolio/editorial/freak-city/Freak_City_Content_02.jpg', 'type' => 'image', 'size' => 'bento-wide'],
                            ['src' => './public/portfolio/editorial/freak-city/Freak_City_Content_03.jpg', 'type' => 'image', 'size' => 'bento-wide'],
                        ]
                    ],
                    [
                        'id' => 'helvetica',
                        'title' => 'HELVETICA',
                        'service' => 'Editorial Design',
                        'desc' => 'A typographic love letter to Helvetica — clean minimalism, maximum impact.',
                        'cover' => './public/portfolio/editorial/helvetica/Helvetica_Cover.png',
                        'type' => 'image',
                        'content' => [
                            ['src' => './public/portfolio/editorial/helvetica/Helvetica_Content_02.png', 'type' => 'image', 'size' => 'bento-wide'],
                            ['src' => './public/portfolio/editorial/helvetica/Helvetica_Content_03.png', 'type' => 'image', 'size' => 'bento-square'],
                            ['src' => './public/portfolio/editorial/helvetica/Helvetica_Content_04.png', 'type' => 'image', 'size' => 'bento-portrait'],
                        ]
                    ],
                    [
                        'id' => 'la-santa',
                        'title' => 'LA SANTA ANIVERSARIO',
                        'service' => 'Social Media',
                        'desc' => 'A cinematic anniversary campaign for La Santa — motion-forward storytelling at its finest.',
                        'cover' => './public/portfolio/social-media/la-santa/La_Santa_Aniversario_Cover.mp4',
                        'type' => 'video',
                        'content' => [
                            ['src' => './public/portfolio/social-media/la-santa/La_Santa_Aniversario_Content_02.mp4', 'type' => 'video', 'size' => 'bento-portrait'],
                            ['src' => './public/portfolio/social-media/la-santa/La_Santa_Aniversario_Content_03.mp4', 'type' => 'video', 'size' => 'bento-portrait'],
                            ['src' => './public/portfolio/social-media/la-santa/La_Santa_Aniversario_Content_04.mp4', 'type' => 'video', 'size' => 'bento-portrait'],
                        ]
                    ],
                    [
                        'id' => 'mandala',
                        'title' => 'MANDALA TEASER',
                        'service' => 'Social Media',
                        'desc' => 'An evocative teaser campaign for Mandala — where ancient symbolism meets modern motion design.',
                        'cover' => './public/portfolio/social-media/mandala/Mandala_Teaser_Cover.mp4',
                        'type' => 'video',
                        'content' => [
                            ['src' => './public/portfolio/social-media/mandala/Mandala_Teaser_Content_02.mp4', 'type' => 'video', 'size' => 'bento-portrait'],
                            ['src' => './public/portfolio/social-media/mandala/Mandala_Teaser_Content_03.mp4', 'type' => 'video', 'size' => 'bento-portrait'],
                            ['src' => './public/portfolio/social-media/mandala/Mandala_Teaser_Content_04.mp4', 'type' => 'video', 'size' => 'bento-portrait'],
                            ['src' => './public/portfolio/social-media/mandala/Mandala_Teaser_Content_05.mp4', 'type' => 'video', 'size' => 'bento-portrait'],
                        ]
                    ],
                    // === PLACEHOLDER PROJECTS (for other service categories) ===
                    ['id' => 'p1', 'title' => 'STRIPE CONNECT', 'service' => 'Website', 'desc' => 'B2B dashboard redesign.', 'cover' => 'https://picsum.photos/seed/stripe2/800/800', 'type' => 'image', 'content' => []],
                    ['id' => 'p2', 'title' => 'SNAPCHAT KIT', 'service' => 'Corporate Stationery', 'desc' => 'Full stationery kit.', 'cover' => 'https://picsum.photos/seed/mobile/800/800', 'type' => 'image', 'content' => []],
                    ['id' => 'p3', 'title' => 'NEXUS PROMO', 'service' => 'Promotional Materials', 'desc' => 'Global event campaign.', 'cover' => 'https://picsum.photos/seed/nexus/800/800', 'type' => 'image', 'content' => []],
                    ['id' => 'p4', 'title' => 'VANTARA XP', 'service' => 'Digital Tools', 'desc' => '3D Immersive web experience.', 'cover' => 'https://picsum.photos/seed/nature/800/800', 'type' => 'image', 'content' => []],
                ];
                ?>

                <?php foreach ($projects as $p): ?>
                    <div class="portfolio-item group relative overflow-hidden rounded-[2rem] bg-brand-surface cursor-pointer shadow-xl border border-white/5 hover:border-brand-cyan/30 w-full aspect-[4/5] flex flex-col"
                        data-service="<?= $p['service'] ?>" data-project-id="<?= $p['id'] ?>"
                        onclick="openProjectModal(<?= htmlspecialchars(json_encode($p), ENT_QUOTES, 'UTF-8') ?>)">

                        <div class="relative flex-grow overflow-hidden rounded-[2rem]">
                            <?php if ($p['type'] === 'video'): ?>
                                <video src="<?= $p['cover'] ?>" autoplay muted loop playsinline
                                    class="absolute inset-0 w-full h-full object-cover opacity-70 group-hover:opacity-100 group-hover:scale-105 transition-all duration-1000 ease-out pointer-events-none">
                                </video>
                            <?php else: ?>
                                <img src="<?= $p['cover'] ?>" alt="<?= $p['title'] ?>"
                                    class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:opacity-100 group-hover:scale-110 transition-all duration-1000 ease-out">
                            <?php endif; ?>
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-brand-navy/90 via-brand-navy/20 to-transparent">
                            </div>
                        </div>

                        <!-- Info Overlay -->
                        <div
                            class="absolute bottom-0 left-0 right-0 p-8 translate-y-2 group-hover:translate-y-0 transition-transform duration-500">
                            <p class="text-[10px] font-black uppercase tracking-[0.4em] text-brand-cyan mb-2">
                                <?= $p['service'] ?>
                            </p>
                            <h4 class="text-2xl font-black uppercase tracking-tighter text-white mb-2 leading-tight">
                                <?= $p['title'] ?>
                            </h4>
                            <p
                                class="text-sm font-medium text-white/0 group-hover:text-white/60 transition-colors duration-500 line-clamp-2">
                                <?= $p['desc'] ?>
                            </p>
                            <?php if (!empty($p['content'])): ?>
                                <div
                                    class="mt-4 inline-flex items-center gap-2 text-[9px] font-black uppercase tracking-[0.2em] text-white/40 group-hover:text-brand-cyan transition-colors duration-500">
                                    <i data-lucide="layout-grid" class="w-3 h-3"></i>
                                    <span>View Project</span>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>

            <!-- Empty State Fallback -->
            <div id="empty-state" class="hidden py-32 text-center">
                <p class="text-brand-cyan mb-4"><i data-lucide="ghost" class="w-12 h-12 mx-auto"></i></p>
                <h3 class="text-2xl font-black uppercase tracking-tighter text-white mb-2">NO PROJECTS FOUND</h3>
                <p class="text-white/50">There are no projects matching this service yet.</p>
            </div>

        </div>
    </main>

    <!-- Project Detail Modal -->
    <div id="project-modal" class="fixed inset-0 z-[200] pointer-events-none flex items-center justify-center p-4"
        aria-hidden="true">
        <!-- Backdrop -->
        <div id="modal-backdrop"
            class="absolute inset-0 bg-brand-dark/95 backdrop-blur-xl opacity-0 transition-opacity duration-300 cursor-pointer"
            onclick="closeProjectModal()"></div>

        <!-- Modal Panel -->
        <div
            class="modal-inner relative w-[92vw] max-h-[90vh] my-auto mx-auto bg-brand-dark rounded-3xl border border-white/10 overflow-y-auto shadow-2xl flex flex-col">

            <!-- Modal Header -->
            <div
                class="sticky top-0 z-10 flex items-center justify-between px-8 py-6 bg-brand-dark/90 backdrop-blur-sm border-b border-white/5">
                <div>
                    <p id="modal-service"
                        class="text-[10px] font-black uppercase tracking-[0.4em] text-brand-cyan mb-1"></p>
                    <h2 id="modal-title"
                        class="text-2xl md:text-4xl font-black uppercase tracking-tighter text-white leading-none"></h2>
                </div>
                <button onclick="closeProjectModal()"
                    class="p-3 rounded-full bg-white/5 hover:bg-white/10 text-white/60 hover:text-brand-cyan transition-all duration-300">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>
            </div>

            <!-- Project Description -->
            <div class="px-8 py-10">
                <p id="modal-desc" class="text-lg text-white/60 font-medium leading-relaxed max-w-xl"></p>
            </div>

            <!-- Bento Content Grid (cover is first item, injected by JS) -->
            <div id="modal-bento" class="px-8 pb-16 grid grid-cols-2 md:grid-cols-3 gap-4">
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include './includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/lucide@0.477.0/dist/umd/lucide.js"></script>
    <script src="./assets/js/main.js"></script>

    <!-- Filtering Logic & Project Modal -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const portfolioItems = document.querySelectorAll('.portfolio-item');
            const emptyState = document.getElementById('empty-state');
            const grid = document.getElementById('portfolio-grid');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    filterBtns.forEach(b => {
                        b.classList.remove('bg-brand-cyan', 'border-brand-cyan', 'text-brand-navy');
                        b.classList.add('bg-white/5', 'border-white/10', 'text-white', 'hover:bg-white/10', 'hover:border-white/30');
                    });
                    btn.classList.remove('bg-white/5', 'border-white/10', 'text-white', 'hover:bg-white/10', 'hover:border-white/30');
                    btn.classList.add('bg-brand-cyan', 'border-brand-cyan', 'text-brand-navy');

                    const filterValue = btn.getAttribute('data-filter');
                    let visibleCount = 0;

                    portfolioItems.forEach(item => {
                        const service = item.getAttribute('data-service');
                        if (filterValue === 'All' || service === filterValue) {
                            item.classList.remove('filtering-hide');
                            setTimeout(() => {
                                item.style.opacity = '1';
                                item.style.transform = 'scale(1)';
                            }, 50);
                            visibleCount++;
                        } else {
                            item.style.opacity = '0';
                            item.style.transform = 'scale(0.95)';
                            setTimeout(() => {
                                if (item.style.opacity === '0') {
                                    item.classList.add('filtering-hide');
                                }
                            }, 500);
                        }
                    });

                    setTimeout(() => {
                        emptyState.classList.toggle('hidden', visibleCount > 0);
                    }, 500);
                });
            });

            lucide.createIcons();
        });

        // --- Project Modal Logic ---
        function openProjectModal(project) {
            const modal = document.getElementById('project-modal');
            const backdrop = document.getElementById('modal-backdrop');

            document.getElementById('modal-title').textContent = project.title;
            document.getElementById('modal-service').textContent = project.service;
            document.getElementById('modal-desc').textContent = project.desc;

            const bento = document.getElementById('modal-bento');
            bento.innerHTML = '';

            // --- 1. Cover as first full-width item ---
            const coverDiv = document.createElement('div');
            coverDiv.className = 'bento-cell bento-cover col-span-2 md:col-span-3';
            if (project.type === 'video') {
                coverDiv.innerHTML = `<video src="${project.cover}" autoplay muted loop playsinline></video>`;
            } else {
                coverDiv.innerHTML = `<img src="${project.cover}" alt="${project.title} cover">`;
            }
            bento.appendChild(coverDiv);

            // --- 2. Content items ---
            if (project.content && project.content.length > 0) {
                project.content.forEach((item, index) => {
                    const div = document.createElement('div');
                    // Portrait items (9:16) should NEVER span 2 cols — they're already tall
                    // Wide/square items get alternating col-span-2 for rhythm
                    const isPortrait = item.size === 'bento-portrait';
                    const spanTwo = !isPortrait && (index === 0 || index % 3 === 0);
                    div.className = `bento-cell ${item.size} ${spanTwo ? 'col-span-2' : 'col-span-1'}`;
                    if (item.type === 'video') {
                        div.innerHTML = `<video src="${item.src}" autoplay muted loop playsinline></video>`;
                    } else {
                        div.innerHTML = `<img src="${item.src}" alt="Project content ${index + 2}">`;
                    }
                    bento.appendChild(div);
                });
            }

            // Show modal — always scroll back to top
            const modalInner = document.querySelector('#project-modal .modal-inner');
            if (modalInner) modalInner.scrollTop = 0;
            modal.style.pointerEvents = 'auto';
            modal.setAttribute('aria-hidden', 'false');
            backdrop.style.opacity = '1';
            modal.classList.add('open');
            document.body.style.overflow = 'hidden';
            lucide.createIcons();
        }

        function closeProjectModal() {
            const modal = document.getElementById('project-modal');
            const backdrop = document.getElementById('modal-backdrop');
            modal.classList.remove('open');
            backdrop.style.opacity = '0';
            document.body.style.overflow = '';
            setTimeout(() => {
                modal.style.pointerEvents = 'none';
                modal.setAttribute('aria-hidden', 'true');
            }, 400);
        }

        // Close modal on Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeProjectModal();
        });
    </script>
</body>

</html>