<?php $isHome = false;
include './includes/head-contact.php'; ?>

<body class="bg-brand-dark overflow-x-hidden md:overflow-y-auto pt-24">

    <!-- Navbar -->
    <?php include './includes/navbar.php'; ?>

    <main class="py-24 text-white min-h-[calc(100vh-100px)] relative z-10 flex flex-col justify-center">
        <!-- Abstract Background Detail -->
        <div class="absolute inset-0 pointer-events-none z-0 overflow-hidden">
            <div class="absolute -top-[20%] -right-[10%] w-[60%] h-[60%] bg-brand-cyan/5 blur-[150px] rounded-full">
            </div>
            <div class="absolute bottom-[10%] -left-[10%] w-[40%] h-[40%] bg-brand-red/5 blur-[120px] rounded-full">
            </div>
        </div>

        <div class="container mx-auto px-6 lg:px-12 max-w-7xl relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 xl:gap-24 items-center">

                <!-- Left Content: Header & Info -->
                <div class="space-y-8" data-animate="slide-up">
                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-black uppercase tracking-tighter leading-[0.9]">
                        Ready to Lead <br />
                        <span class="text-brand-cyan italic dropdown-text">Your Market?</span>
                    </h1>

                    <p class="text-lg md:text-2xl text-white/60 font-medium leading-relaxed max-w-xl">
                        Tell us your goals. We'll map a strategy, define the deliverables, and engineer the brand
                        presence your business deserves.
                    </p>

                    <div class="pt-8 flex flex-col gap-8 border-t border-white/10">
                        <div class="flex flex-col md:flex-row md:gap-12">
                            <!-- Direct Contact info -->
                            <div>
                                <p class="text-[10px] font-black uppercase tracking-[0.3em] text-brand-cyan mb-2">EMAIL US
                                </p>
                                <a href="mailto:hello@innov8creations.com"
                                    class="text-lg font-medium text-white hover:text-brand-cyan transition-colors">
                                    hello@innov8creations.com
                                </a>
                            </div>
                            <div class="hidden md:block w-px bg-white/10"></div>
                            <div>
                                <p class="text-[10px] font-black uppercase tracking-[0.3em] text-brand-red mb-2">CALL US</p>
                                <a href="tel:+1234567890"
                                    class="text-lg font-medium text-white hover:text-brand-red transition-colors">
                                    +1 (234) 567-890
                                </a>
                            </div>
                        </div>
                        
                        <!-- Secondary Separator -->
                        <div class="w-full h-px bg-white/10"></div>
                        
                        <p class="text-xs font-bold uppercase tracking-[0.2em] text-white">A Grupo Salisguri Company</p>
                    </div>
                </div>

                <!-- Right Content: Form -->
                <div class="glass border-white/5 rounded-[2rem] p-8 md:p-12 relative shadow-2xl" data-animate="slide-up"
                    style="transition-delay: 200ms;">

                    <form id="contact-form" method="POST" class="space-y-8">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                            <!-- Full Name -->
                            <div class="space-y-3">
                                <label for="fullName"
                                    class="block text-[10px] font-bold uppercase tracking-widest text-brand-cyan">Full
                                    Name</label>
                                <input type="text" id="fullName" name="name" required
                                    class="w-full bg-white/5 border border-white/10 rounded-xl px-5 py-4 text-white text-sm placeholder-white/30 focus:outline-none focus:border-brand-cyan focus:bg-white/10 transition-all font-inter"
                                    placeholder="Jane Doe">
                            </div>

                            <!-- Phone Number -->
                            <div class="space-y-3">
                                <label for="phone"
                                    class="block text-[10px] font-bold uppercase tracking-widest text-brand-cyan">Phone
                                    Number</label>
                                <input type="tel" id="phone" name="phone" required
                                    class="w-full bg-white/5 border border-white/10 rounded-xl px-5 py-4 text-white text-sm placeholder-white/30 focus:outline-none focus:border-brand-cyan focus:bg-white/10 transition-all font-inter"
                                    placeholder="+1 (555) 000-0000">
                            </div>

                            <!-- Email Address -->
                            <div class="space-y-3 md:col-span-2">
                                <label for="email"
                                    class="block text-[10px] font-bold uppercase tracking-widest text-brand-cyan">Email
                                    Address</label>
                                <input type="email" id="email" name="email" required
                                    class="w-full bg-white/5 border border-white/10 rounded-xl px-5 py-4 text-white text-sm placeholder-white/30 focus:outline-none focus:border-brand-cyan focus:bg-white/10 transition-all font-inter"
                                    placeholder="jane@company.com">
                            </div>

                            <!-- State -->
                            <div class="space-y-3 md:col-span-2">
                                <label for="state"
                                    class="block text-[10px] font-bold uppercase tracking-widest text-brand-cyan">State</label>
                                <input type="text" id="state" name="state" required
                                    class="w-full bg-white/5 border border-white/10 rounded-xl px-5 py-4 text-white text-sm placeholder-white/30 focus:outline-none focus:border-brand-cyan focus:bg-white/10 transition-all font-inter"
                                    placeholder="California">
                            </div>

                            <!-- Service of Interest -->
                            <div class="space-y-3 md:col-span-2">
                                <label for="service"
                                    class="block text-[10px] font-bold uppercase tracking-widest text-brand-cyan">Service
                                    of Interest</label>
                                <div class="relative">
                                    <select id="service" name="service" required
                                        class="w-full appearance-none bg-white/5 border border-white/10 rounded-xl px-5 py-4 text-sm text-white focus:outline-none focus:border-brand-cyan focus:bg-white/10 transition-all cursor-pointer font-inter">
                                        <option value="" disabled selected class="bg-brand-navy text-white/50">Select a
                                            service</option>
                                        <option value="Logo & Branding" class="bg-brand-navy text-white">Logo & Branding
                                        </option>
                                        <option value="Corporate Stationery" class="bg-brand-navy text-white">Corporate
                                            Stationery</option>
                                        <option value="Website" class="bg-brand-navy text-white">Website</option>
                                        <option value="Social Media" class="bg-brand-navy text-white">Social Media
                                        </option>
                                        <option value="Promotional Materials" class="bg-brand-navy text-white">
                                            Promotional Materials</option>
                                        <option value="Digital Tools" class="bg-brand-navy text-white">Digital Tools
                                        </option>
                                        <option value="Editorial Design" class="bg-brand-navy text-white">Editorial
                                            Design</option>
                                    </select>
                                    <div
                                        class="absolute inset-y-0 right-5 flex items-center pointer-events-none text-brand-cyan">
                                        <i data-lucide="chevron-down" class="w-4 h-4"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- How did you hear about us? -->
                            <div class="space-y-3 md:col-span-2">
                                <label for="referral"
                                    class="block text-[10px] font-bold uppercase tracking-widest text-brand-cyan">How
                                    did you hear about us?</label>
                                <div class="relative">
                                    <select id="referral" name="referral" required
                                        class="w-full appearance-none bg-white/5 border border-white/10 rounded-xl px-5 py-4 text-sm text-white focus:outline-none focus:border-brand-cyan focus:bg-white/10 transition-all cursor-pointer font-inter">
                                        <option value="" disabled selected class="bg-brand-navy text-white/50">Select an
                                            option</option>
                                        <option value="Search Engine" class="bg-brand-navy text-white">Search Engine
                                            (Google, Bing, etc.)</option>
                                        <option value="Social Media" class="bg-brand-navy text-white">Social Media
                                        </option>
                                        <option value="Referral" class="bg-brand-navy text-white">Referral / Word of
                                            Mouth</option>
                                        <option value="Advertisement" class="bg-brand-navy text-white">Advertisement
                                        </option>
                                        <option value="Other" class="bg-brand-navy text-white">Other</option>
                                    </select>
                                    <div
                                        class="absolute inset-y-0 right-5 flex items-center pointer-events-none text-brand-cyan">
                                        <i data-lucide="chevron-down" class="w-4 h-4"></i>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Submit Button and Legend -->
                        <div
                            class="pt-6 border-t border-white/10 flex flex-col md:flex-row items-center gap-6 justify-between">

                            <button type="submit" aria-label="Send Message to Innov8 Creations"
                                class="w-full md:w-auto px-10 py-4 bg-brand-cyan text-brand-navy font-black flex items-center justify-center gap-4 uppercase tracking-[0.2em] rounded-full hover:bg-white hover:text-brand-navy transition-all duration-300 transform active:scale-95 shadow-xl group order-1 md:order-2 shrink-0 text-[10px]">
                                Send Message
                                <i data-lucide="send"
                                    class="w-4 h-4 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                            </button>

                            <!-- Legend -->
                            <p
                                class="text-xs text-white/40 leading-relaxed text-center md:text-left flex items-start md:items-center gap-3 order-2 md:order-1 font-medium font-inter">
                                <i data-lucide="info"
                                    class="w-4 h-4 shrink-0 text-brand-cyan mt-0.5 md:mt-0 opacity-50"></i>
                                <span class="max-w-[300px]">Once we receive your message, we’ll review your information
                                    and contact you to discuss next steps.</span>
                            </p>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </main>

    <!-- Whatsapp button -->
    <?php include  './includes/whatsapp-button.php'; ?>

    <!-- Footer -->
    <?php include './includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/lucide@0.477.0/dist/umd/lucide.js"></script>
    <script src="./assets/js/main.js"></script>

    <script src="./plugins/jquery/jquery.js"></script>
    <script src="./plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="./assets/js/contact-form.js"></script>
</body>

</html>