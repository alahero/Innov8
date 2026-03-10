<section id="marquee" class="relative py-16 bg-brand-dark/50 border-y border-white/5 overflow-hidden">

    <!-- Marquee Content -->
    <div class="marquee-content inline-flex gap-16 md:gap-32 animate-scroll py-4 whitespace-nowrap items-center mb-8">
        <?php
        $testimonials = [
            ['name' => 'Sarah Jenkins', 'company' => 'Adobe', 'img' => 'https://ui-avatars.com/api/?name=Sarah+Jenkins&background=random', 'quote' => 'Innov8 transformed our brand entirely! The cinematic approach they took elevated our identity to a level we never thought possible.'],
            ['name' => 'David Chen', 'company' => 'Stripe', 'img' => 'https://ui-avatars.com/api/?name=David+Chen&background=random', 'quote' => 'Their strategic precision and stunning execution gave us the exact push we needed to solidify our market position.'],
            ['name' => 'Elena Rodriguez', 'company' => 'Figma', 'img' => 'https://ui-avatars.com/api/?name=Elena+Rodriguez&background=random', 'quote' => 'The team at Innov8 does not just design; they craft immersive narratives. We were blown away by the final delivery.'],
            ['name' => 'Marcus Johnson', 'company' => 'Shopify', 'img' => 'https://ui-avatars.com/api/?name=Marcus+Johnson&background=random', 'quote' => 'A fully integrated creative partner that truly understands how to blend premium aesthetics with highly functional digital tools.'],
            ['name' => 'Aisha Patel', 'company' => 'Netflix', 'img' => 'https://ui-avatars.com/api/?name=Aisha+Patel&background=random', 'quote' => 'From the initial strategy to the final cinematic execution, every step was handled with surgical precision. Outstanding work.'],
            ['name' => 'Tom Anderson', 'company' => 'Slack', 'img' => 'https://ui-avatars.com/api/?name=Tom+Anderson&background=random', 'quote' => 'They redefined our corporate stationery and digital presence simultaneously. A truly bold and cohesive ecosystem.'],
            ['name' => 'Zoe Fisher', 'company' => 'Zendesk', 'img' => 'https://ui-avatars.com/api/?name=Zoe+Fisher&background=random', 'quote' => 'Working with Innov8 was the best investment we made this year. High-end, fluid, and relentlessly focused on results.']
        ];

        // Duplicate for infinite loop effect
        $all_testimonials = array_merge($testimonials, $testimonials, $testimonials);
        foreach ($all_testimonials as $t):
            ?>
            <div class="testimonial-item flex flex-col items-center gap-4 group cursor-pointer px-8 transition-transform hover:scale-105 duration-300"
                data-name="<?= $t['name'] ?>" data-company="<?= $t['company'] ?>" data-img="<?= $t['img'] ?>"
                data-quote="<?= $t['quote'] ?>">
                <!-- Circular Picture -->
                <div
                    class="w-16 h-16 md:w-24 md:h-24 rounded-full overflow-hidden border-2 border-white/5 group-hover:border-brand-cyan transition-colors duration-500 shadow-xl pointer-events-none">
                    <img src="<?= $t['img'] ?>" alt="<?= $t['name'] ?>"
                        class="w-full h-full object-cover grayscale opacity-70 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-500">
                </div>
                <!-- Name and Company -->
                <div class="text-center pointer-events-none">
                    <h5
                        class="text-sm md:text-lg font-black text-white uppercase tracking-wider group-hover:text-brand-cyan transition-colors duration-500 mb-1">
                        <?= $t['name'] ?>
                    </h5>
                    <p
                        class="text-[10px] md:text-xs font-bold text-white/50 uppercase tracking-[0.2em] group-hover:text-white/80 transition-colors duration-500">
                        <?= $t['company'] ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Static Small Legend -->
    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 z-10 pointer-events-none">
        <span
            class="text-[10px] md:text-xs font-black uppercase tracking-[0.5em] text-brand-red/70 bg-brand-dark/80 px-4 py-2 rounded-full backdrop-blur-sm shadow-2xl border border-white/5">Testimonials</span>
    </div>

    <!-- Testimonial Modal (Hidden by Default) -->
    <div id="testimonial-modal"
        class="fixed inset-0 z-[100] flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300">
        <div class="absolute inset-0 bg-brand-dark/90 backdrop-blur-md cursor-pointer" id="modal-overlay"></div>
        <div class="relative w-full max-w-2xl mx-4 p-8 md:p-12 glass rounded-3xl border border-white/10 shadow-2xl transform scale-95 transition-transform duration-300"
            id="modal-content">
            <button id="close-modal" aria-label="Close Testimonial Modal"
                class="absolute top-6 right-6 text-white/50 hover:text-brand-cyan transition-colors">
                <i data-lucide="x" class="w-6 h-6"></i>
            </button>
            <div class="flex flex-col items-center text-center mt-4">
                <div
                    class="w-20 h-20 md:w-28 md:h-28 rounded-full overflow-hidden border-2 border-brand-cyan mb-6 shadow-xl">
                    <img id="modal-img" src="" alt="" class="w-full h-full object-cover">
                </div>
                <h4 id="modal-name" class="text-2xl md:text-3xl font-black text-white uppercase tracking-wider mb-2">
                </h4>
                <p id="modal-company"
                    class="text-xs md:text-sm font-bold text-brand-cyan uppercase tracking-[0.2em] mb-8"></p>
                <div class="relative max-w-lg">
                    <i data-lucide="quote"
                        class="absolute -top-6 -left-8 md:-left-12 w-8 h-8 md:w-10 md:h-10 text-white/10"></i>
                    <p id="modal-quote"
                        class="text-lg md:text-xl text-white/80 font-medium leading-relaxed italic relative z-10"></p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes scroll {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-33.33%);
        }
    }

    .animate-scroll {
        animation: scroll 40s linear infinite;
    }

    .marquee-content:hover {
        animation-play-state: paused;
    }
</style>