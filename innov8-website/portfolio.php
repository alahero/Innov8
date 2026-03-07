<?php
// Active page to help with navigation logic if needed
$isHome = false;
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Portfolio | Innov8 Creations</title>

    <!-- Meta Description -->
    <meta name="description"
        content="Explore our portfolio of curated, cinematic digital experiences. We take pride in our adventurous and bold approach to design and strategy.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&family=Inter:wght@300;400;500;600&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="./public/main.css">

    <style>
        /* Hide scrollbar for the filter bar */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        .portfolio-item {
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
        }

        .filtering-hide {
            opacity: 0;
            transform: scale(0.95);
            pointer-events: none;
            position: absolute;
            /* Take out of flow to let others collapse */
            visibility: hidden;
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
                    foreach ($filters as $label => $value):
                        ?>
                        <button
                            class="filter-btn shrink-0 px-6 py-3 rounded-full text-[10px] font-black uppercase tracking-[0.2em] transition-all duration-300 border <?= $isFirst ? 'bg-brand-cyan border-brand-cyan text-brand-navy' : 'bg-white/5 border-white/10 text-white hover:bg-white/10 hover:border-white/30' ?>"
                            data-filter="<?= $value ?>">
                            <?= $label ?>
                        </button>
                        <?php
                        $isFirst = false;
                    endforeach;
                    ?>
                </div>
            </div>

            <!-- Portfolio Grid -->
            <div id="portfolio-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 relative pb-24"
                data-animate="slide-up" style="transition-delay: 200ms;">

                <?php
                // Simulated most-recent data order
                $projects = [
                    ['id' => 1, 'title' => 'SKY DEFI', 'service' => 'Logo & Branding', 'desc' => 'Cinematic identity design.', 'img' => 'https://picsum.photos/seed/tech/800/800'],
                    ['id' => 2, 'title' => 'STRIPE CONNECT', 'service' => 'Website', 'desc' => 'B2B dashboard redesign.', 'img' => 'https://picsum.photos/seed/stripe2/800/800'],
                    ['id' => 3, 'title' => 'VANTARA EXPERIENCE', 'service' => 'Digital Tools', 'desc' => '3D Immersive web experience.', 'img' => 'https://picsum.photos/seed/nature/800/800'],
                    ['id' => 4, 'title' => 'SNAPCHAT AR', 'service' => 'Corporate Stationery', 'desc' => 'Modern stationery kit.', 'img' => 'https://picsum.photos/seed/mobile/800/800'],
                    ['id' => 5, 'title' => 'NEXUS PROMO', 'service' => 'Promotional Materials', 'desc' => 'Global event campaign.', 'img' => 'https://picsum.photos/seed/nexus/800/800'],
                    ['id' => 6, 'title' => 'AURA MAGAZINE', 'service' => 'Editorial Design', 'desc' => 'Premium layout and typography.', 'img' => 'https://picsum.photos/seed/aura/800/800'],
                    ['id' => 7, 'title' => 'ELEVATE SOCIAL', 'service' => 'Social Media', 'desc' => 'High-impact grid narratives.', 'img' => 'https://picsum.photos/seed/elevate/800/800'],
                    ['id' => 8, 'title' => 'QUANTUM REBRAND', 'service' => 'Logo & Branding', 'desc' => 'Bold new visual system.', 'img' => 'https://picsum.photos/seed/quantum/800/800'],
                    ['id' => 9, 'title' => 'E-COMMERCE FLOW', 'service' => 'Website', 'desc' => 'Frictionless checkout experience.', 'img' => 'https://picsum.photos/seed/ecommerce/800/800']
                ];
                ?>

                <?php foreach ($projects as $p): ?>
                    <div class="portfolio-item group relative overflow-hidden rounded-[2rem] bg-brand-surface cursor-pointer shadow-xl border border-white/5 hover:border-brand-cyan/30 w-full aspect-[4/5] flex flex-col"
                        data-service="<?= $p['service'] ?>">

                        <div class="relative flex-grow overflow-hidden">
                            <img src="<?= $p['img'] ?>" alt="<?= $p['title'] ?>"
                                class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:opacity-100 group-hover:scale-110 transition-all duration-1000 ease-out">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-brand-navy/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>
                        </div>

                        <!-- Content Overlaid or Pinned to Bottom -->
                        <div
                            class="absolute bottom-0 left-0 right-0 p-8 translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                            <p class="text-[10px] font-black uppercase tracking-[0.4em] text-cyan-400 mb-2">
                                <?= $p['service'] ?>
                            </p>
                            <h4 class="text-2xl font-black uppercase tracking-tighter text-white mb-2 leading-tight">
                                <?= $p['title'] ?>
                            </h4>
                            <p
                                class="text-sm font-medium text-white/0 group-hover:text-white/60 transition-colors duration-500 line-clamp-2">
                                <?= $p['desc'] ?>
                            </p>
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

    <!-- Footer -->
    <?php include './includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/lucide@0.477.0/dist/umd/lucide.js"></script>
    <script src="./assets/js/main.js"></script>

    <!-- Filtering Logic -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const portfolioItems = document.querySelectorAll('.portfolio-item');
            const emptyState = document.getElementById('empty-state');
            const grid = document.getElementById('portfolio-grid');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    // Update active button styles
                    filterBtns.forEach(b => {
                        b.classList.remove('bg-brand-cyan', 'border-brand-cyan', 'text-brand-navy');
                        b.classList.add('bg-white/5', 'border-white/10', 'text-white', 'hover:bg-white/10', 'hover:border-white/30');
                    });
                    btn.classList.remove('bg-white/5', 'border-white/10', 'text-white', 'hover:bg-white/10', 'hover:border-white/30');
                    btn.classList.add('bg-brand-cyan', 'border-brand-cyan', 'text-brand-navy');

                    const filterValue = btn.getAttribute('data-filter');
                    let visibleCount = 0;

                    // Filter items
                    portfolioItems.forEach(item => {
                        const service = item.getAttribute('data-service');

                        if (filterValue === 'All' || service === filterValue) {
                            // Removing hidden class makes it flow back into the grid
                            item.classList.remove('filtering-hide');
                            // Delaying the opacity so the display:block takes effect first
                            setTimeout(() => {
                                item.style.opacity = '1';
                                item.style.transform = 'scale(1)';
                            }, 50);
                            visibleCount++;
                        } else {
                            item.style.opacity = '0';
                            item.style.transform = 'scale(0.95)';
                            // Wait for animation to finish before removing from flow
                            setTimeout(() => {
                                if (item.style.opacity === '0') {
                                    item.classList.add('filtering-hide');
                                }
                            }, 500);
                        }
                    });

                    // Handle empty state
                    setTimeout(() => {
                        if (visibleCount === 0) {
                            emptyState.classList.remove('hidden');
                        } else {
                            emptyState.classList.add('hidden');
                        }
                    }, 500);
                });
            });

            // Re-initialize lucide icons for the empty state
            lucide.createIcons();
        });
    </script>
</body>

</html>