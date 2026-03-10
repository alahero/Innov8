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