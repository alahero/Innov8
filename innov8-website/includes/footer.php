<footer id="contact" class="bg-brand-dark pt-48 pb-16 px-8 border-t border-white/5 relative overflow-hidden">
    <div class="container mx-auto max-w-7xl relative z-20">

        <!-- Main Footer Core -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-32 mb-40">
            <div data-animate="slide-up">
                <h2
                    class="text-[14vw] lg:text-[10vw] font-black tracking-tighter uppercase leading-[0.75] mb-16 text-white group cursor-default">
                    Let's <br /> <span class="text-brand-cyan hover:italic transition-all duration-700">Talk</span>
                </h2>
                <div class="flex flex-col gap-6 md:gap-8">
                    <a href="mailto:hello@innov8.creations"
                        class="text-lg sm:text-xl md:text-3xl lg:text-4xl font-black text-white hover:text-brand-red transition-colors duration-500 uppercase tracking-tighter block break-all">sales@innov8creations.com</a>
                    <a href="tel:+14157966262"
                        class="text-xl text-white/40 hover:text-white transition-colors duration-500 uppercase tracking-[0.4em] font-black">
                        +1 (657) 645-9590</a>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-20" data-animate="slide-up">
                <div class="flex flex-col gap-10">
                    <p class="text-[10px] uppercase tracking-[0.5em] text-white/30 font-black">NAVIGATION</p>
                    <?php
                    $navLinks = [
                        'Home' => './',
                        'Portfolio' => './portfolio.php',
                        'Services' => './index.php#services',
                        'Process' => './index.php#process',
                        'Contact' => './contact.php',
                    ];
                    foreach ($navLinks as $label => $href): ?>
                        <a href="<?= $href ?>"
                            class="text-lg md:text-xl font-black uppercase text-white hover:text-brand-cyan transition-all duration-300 tracking-tighter">
                            <?= $label ?>
                        </a>
                    <?php endforeach; ?>
                </div>
                <div class="flex flex-col gap-10">
                    <p class="text-[10px] uppercase tracking-[0.5em] text-white/30 font-black">FOLLOW US</p>
                    <?php
                    $socialLinks = [
                        'Instagram' => 'https://www.instagram.com/innov8creations?igsh=enk4eTFianE3b202',
                        // 'Dribbble' => 'https://dribbble.com/innov8creations',
                        'Facebook' =>  'https://m.facebook.com/profile.php?id=61583735412037&name=xhp_nt__fb__action__open_user',
                        // 'LinkedIn' => 'https://linkedin.com/company/innov8creations',
                        // 'Twitter' => 'https://twitter.com/innov8creations',
                    ];
                    foreach ($socialLinks as $label => $href): ?>
                        <a href="<?= $href ?>" target="_blank" rel="noopener noreferrer"
                            class="text-lg md:text-xl font-black uppercase text-white hover:text-brand-red transition-all duration-300 tracking-tighter">
                            <?= $label ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="flex flex-col md:flex-row justify-between items-center pt-16 border-t border-white/5 gap-12">
            <div class="flex flex-col items-start gap-2">
                <a href="./" class="flex items-center">
                    <img src="./public/assets/svg/Innov8_Logo_Reduced.svg" alt="Innov8 Logo"
                        class="h-8 w-auto brightness-0 invert">
                </a>
                <p class="text-[9px] text-white/20 uppercase tracking-[0.4em] font-black">National Reach. Local
                    Dedication.</p>
            </div>
            <div class="flex flex-col items-center">
                <p class="text-[10px] text-white/20 uppercase tracking-[0.4em] font-black">© <?= date('Y') ?> Innov8
                    Creations, LLC. ALL RIGHTS RESERVED.</p>
                <p class="text-[10px] text-white uppercase tracking-[0.4em] font-bold mt-2">A Grupo Salisguri Company</p>
            </div>
            <div class="flex gap-12">
                <a href="#"
                    class="text-[10px] text-white/20 hover:text-brand-cyan uppercase tracking-[0.4em] font-black">Privacy</a>
                <a href="#"
                    class="text-[10px] text-white/20 hover:text-brand-cyan uppercase tracking-[0.4em] font-black">Terms</a>
            </div>
        </div>
    </div>

    <!-- Decorative Blob -->
    <div class="absolute -bottom-1/4 -left-1/4 w-[60vw] h-[60vw] bg-brand-cyan/10 blur-[150px] rounded-full opacity-30">
    </div>
</footer>