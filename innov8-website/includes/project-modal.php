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
            <button onclick="closeProjectModal()" aria-label="Close Project Details"
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