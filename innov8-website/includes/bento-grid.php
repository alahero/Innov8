<section id="portfolio" class="py-32 px-8 overflow-hidden">
    <div class="container mx-auto max-w-7xl">

        <!-- Section Header -->
        <div class="flex justify-between items-end mb-6 md:mb-20">
            <div data-animate="slide-up">
                <h2 class="text-[10px] font-black uppercase tracking-[0.5em] text-brand-cyan mb-4">SELECTED NARRATIVES
                </h2>
                <h3 class="text-5xl md:text-8xl font-black uppercase tracking-tighter">THE PORTFOLIO</h3>
            </div>
            <a href="portfolio.php"
                class="hidden md:flex items-center gap-4 text-white/30 hover:text-brand-cyan transition-all duration-300 text-[10px] uppercase tracking-[0.3em] group">
                VIEW FULL ARCHIVE <i data-lucide="arrow-up-right"
                    class="w-6 h-6 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
            </a>
        </div>

        <div class="flex justify-between items-end mb-20">
            <a href="portfolio.php"
                class="flex md:hidden items-center gap-4 text-white/30 hover:text-brand-cyan transition-all duration-300 text-[10px] uppercase tracking-[0.3em] group">
                VIEW FULL ARCHIVE <i data-lucide="arrow-up-right"
                    class="w-6 h-6 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
            </a>
        </div>

        <!-- Bento Grid -->
        <div class="grid grid-cols-1 md:grid-cols-6 md:grid-rows-2 gap-8 h-auto md:h-[1200px]">

            <?php
                $projects = [
                    ['id' => 'p1', 'title' => 'NEXUS PROMO', 'service' => 'Promotional Materials', 'desc' => 'Global event campaign.', 'cover' => 'https://picsum.photos/seed/nexus/800/800'],
                    ['id' => 'p2', 'title' => 'STRIPE CONNECT', 'service' => 'Website', 'desc' => 'B2B dashboard redesign.', 'cover' => 'https://picsum.photos/seed/stripe2/800/800'],
                    ['id' => 'p3', 'title' => 'SNAPCHAT KIT', 'service' => 'Corporate Stationery', 'desc' => 'Full stationery kit.', 'cover' => 'https://picsum.photos/seed/mobile/800/800'],
                    ['id' => 'p4', 'title' => 'VANTARA XP', 'service' => 'Digital Tools', 'desc' => '3D Immersive web experience.', 'cover' => 'https://picsum.photos/seed/nature/800/800'],
                ];
            ?>

            <!-- Project 1 (Large) -->
            <div class="md:col-span-4 md:row-span-1 group relative overflow-hidden rounded-[3rem] bg-brand-surface shadow-2xl cursor-pointer"
                data-animate="card" data-service="<?= $projects[0]['service'] ?>" data-project-id="<?= $projects[0]['id'] ?>"
                        onclick="openProjectModal(<?= htmlspecialchars(json_encode($projects[0]), ENT_QUOTES, 'UTF-8') ?>)">
                <img src="<?= $projects[0]['cover'] ?>"
                    alt="<?= $projects[0]['desc'] ?>" loading="lazy"
                    class="w-full h-full object-cover opacity-60 group-hover:opacity-100 group-hover:scale-105 transition-all duration-1000 ease-out">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                <div class="absolute bottom-12 left-12">
                    <p class="text-[10px] font-black uppercase tracking-[0.4em] text-brand-cyan mb-4"><?= $projects[0]['service'] ?>
                    </p>
                    <h4 class="text-3xl md:text-5xl font-black uppercase tracking-tighter mb-4"><?= $projects[0]['title'] ?></h4>
                    <p class="text-sm text-white/50 max-w-sm font-medium"><?= $projects[0]['desc'] ?></p>
                </div>
            </div>

            <!-- Project 2 (Small Square) -->
            <div class="md:col-span-2 md:row-span-1 group relative overflow-hidden rounded-[3rem] bg-brand-surface cursor-pointer"
                data-animate="card" data-service="<?= $projects[1]['service'] ?>" data-project-id="<?= $projects[1]['id'] ?>"
                        onclick="openProjectModal(<?= htmlspecialchars(json_encode($projects[1]), ENT_QUOTES, 'UTF-8') ?>)">
                <img src="<?= $projects[1]['cover'] ?>" alt="<?= $projects[1]['desc'] ?>"
                    loading="lazy"
                    class="w-full h-full object-cover opacity-60 group-hover:opacity-100 group-hover:scale-110 transition-all duration-1000">
                <div
                    class="absolute inset-0 bg-gradient-to-t from-brand-navy/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                </div>
                <div
                    class="absolute bottom-12 left-12 translate-y-8 group-hover:translate-y-0 transition-transform duration-500">
                    <p class="text-[10px] font-black uppercase tracking-[0.4em] text-cyan-400 mb-2"><?= $projects[1]['service'] ?></p>
                    <h4 class="text-2xl font-black uppercase tracking-tighter"><?= $projects[1]['title'] ?></h4>
                </div>
            </div>

            <!-- Project 3 (Medium) -->
            <div class="md:col-span-2 md:row-span-1 group relative overflow-hidden rounded-[3rem] bg-brand-surface cursor-pointer"
                data-animate="card" data-service="<?= $projects[2]['service'] ?>" data-project-id="<?= $projects[2]['id'] ?>"
                        onclick="openProjectModal(<?= htmlspecialchars(json_encode($projects[2]), ENT_QUOTES, 'UTF-8') ?>)">
                <img src="<?= $projects[2]['cover'] ?>"
                    alt="<?= $projects[2]['desc'] ?>" loading="lazy"
                    class="w-full h-full object-cover opacity-60 group-hover:opacity-100 group-hover:scale-110 transition-all duration-1000">
                <div class="absolute bottom-12 left-12">
                    <p class="text-[10px] font-black uppercase tracking-[0.4em] text-brand-red mb-2"><?= $projects[2]['service'] ?></p>
                    <h4 class="text-2xl font-black uppercase tracking-tighter"><?= $projects[2]['title'] ?></h4>
                </div>
            </div>

            <!-- Project 4 (Large Horizontal) -->
            <div class="md:col-span-4 md:row-span-1 group relative overflow-hidden rounded-[3rem] bg-brand-surface cursor-pointer shadow-2xl"
                data-animate="card" data-service="<?= $projects[3]['service'] ?>" data-project-id="<?= $projects[3]['id'] ?>"
                        onclick="openProjectModal(<?= htmlspecialchars(json_encode($projects[3]), ENT_QUOTES, 'UTF-8') ?>)">
                <img src="<?= $projects[3]['cover'] ?>"
                    alt="<?= $projects[3]['desc'] ?>" loading="lazy"
                    class="w-full h-full object-cover opacity-60 group-hover:opacity-100 group-hover:scale-105 transition-all duration-1000">
                <div
                    class="absolute inset-x-0 bottom-0 p-12 bg-gradient-to-t from-brand-navy via-brand-navy/50 to-transparent">
                    <p class="text-[10px] font-black uppercase tracking-[0.4em] text-brand-cyan mb-4"><?= $projects[3]['service'] ?></p>
                    <h4 class="text-4xl font-black uppercase tracking-tighter mb-4"><?= $projects[3]['title'] ?></h4>
                    <p class="text-sm text-white/50 max-w-lg font-medium"><?= $projects[3]['desc'] ?></p>
                </div>
            </div>

        </div>
    </div>
</section>