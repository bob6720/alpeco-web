const menuButton = document.querySelector('.menu-button');
const navLinks = document.querySelector('.nav-links');

menuButton?.addEventListener('click', () => {
    const isOpen = navLinks?.classList.toggle('open') ?? false;
    menuButton.setAttribute('aria-expanded', String(isOpen));
});
