<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found | Innov8 Creations</title>
    <meta name="robots" content="noindex, nofollow">
    <link rel="icon" type="image/svg+xml" href="./public/assets/svg/favicon.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&family=Inter:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./public/main.css">
</head>

<body
    class="bg-brand-dark text-white overflow-x-hidden min-h-screen flex flex-col items-center justify-center relative">

    <!-- Background glow -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <div class="absolute top-1/4 left-1/4 w-[50vw] h-[50vw] bg-brand-cyan/5 blur-[200px] rounded-full"></div>
        <div class="absolute bottom-1/4 right-1/4 w-[30vw] h-[30vw] bg-brand-red/5 blur-[150px] rounded-full"></div>
    </div>

    <main class="relative z-10 text-center px-6 py-24 flex flex-col items-center gap-8">

        <!-- 404 Label -->
        <p class="text-[10px] font-black uppercase tracking-[0.5em] text-brand-cyan">Error 404</p>

        <!-- Giant Number -->
        <div
            class="text-[25vw] md:text-[18vw] font-black tracking-tighter leading-none text-white/5 select-none pointer-events-none absolute">
            404
        </div>

        <!-- Headline -->
        <h1 class="text-5xl md:text-7xl lg:text-8xl font-black uppercase tracking-tighter leading-[0.9] relative z-10">
            Lost in the<br>
            <span class="text-brand-cyan italic">Void</span>
        </h1>

        <!-- Description -->
        <p class="text-lg md:text-xl text-white/50 font-medium leading-relaxed max-w-lg relative z-10">
            This page doesn't exist — or has been relocated. Let's get you back to something real.
        </p>

        <!-- CTAs -->
        <div class="flex flex-col sm:flex-row gap-4 relative z-10 mt-4">
            <a href="./"
                class="px-8 py-4 bg-brand-cyan text-brand-navy font-black text-[10px] uppercase tracking-[0.3em] rounded-full hover:bg-white transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-brand-cyan focus:ring-offset-2 focus:ring-offset-brand-dark">
                Back to Home
            </a>
            <a href="./portfolio.php"
                class="px-8 py-4 bg-white/5 border border-white/10 text-white font-black text-[10px] uppercase tracking-[0.3em] rounded-full hover:bg-white/10 hover:border-white/30 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-brand-cyan focus:ring-offset-2 focus:ring-offset-brand-dark">
                View Our Work
            </a>
        </div>
    </main>

    <script src="https://unpkg.com/lucide@0.477.0/dist/umd/lucide.js"></script>
    <script>lucide.createIcons();</script>
</body>

</html>