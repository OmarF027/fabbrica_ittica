// Menu Toggle
const menuToggle = document.getElementById('menuToggle');
const menuLinks = document.getElementById('menuLinks');
const headerElements = document.getElementById('headerElements');

menuToggle.addEventListener('click', () => {
    menuToggle.classList.toggle('active');
    menuLinks.classList.toggle('active');
});

// Nascondi header allo scroll down
let lastScroll = 0;

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;

    if (currentScroll <= 0) {
        headerElements.classList.remove('hidden');
        return;
    }

    if (currentScroll > lastScroll && !headerElements.classList.contains('hidden')) {
        // Scroll down
        headerElements.classList.add('hidden');
        menuLinks.classList.remove('active');
        menuToggle.classList.remove('active');
    } else if (currentScroll < lastScroll && headerElements.classList.contains('hidden')) {
        // Scroll up
        headerElements.classList.remove('hidden');
    }

    lastScroll = currentScroll;
});
