const menuButton = document.querySelector('.menu-button');
const navLinks = document.querySelector('.nav-links');

menuButton?.addEventListener('click', () => {
    const isOpen = navLinks?.classList.toggle('open') ?? false;
    menuButton.setAttribute('aria-expanded', String(isOpen));
});

document.querySelectorAll('[data-pest-selector]').forEach((selector) => {
    const buttons = [...selector.querySelectorAll('[data-pest]')];
    const panel = selector.querySelector('.pest-detail-panel');
    const closeButton = selector.querySelector('[data-pest-close]');
    const detailFields = {
        name: panel?.querySelector('[data-pest-detail="name"]'),
        overview: panel?.querySelector('[data-pest-detail="overview"]'),
        treatment: panel?.querySelector('[data-pest-detail="treatment"]'),
        timing: panel?.querySelector('[data-pest-detail="timing"]'),
    };

    if (!panel || !closeButton) {
        return;
    }

    const clearSelection = () => {
        buttons.forEach((button) => {
            button.classList.remove('is-selected', 'is-minimized');
            button.setAttribute('aria-expanded', 'false');
        });

        selector.classList.remove('has-selection');
        panel.classList.remove('is-visible');
        panel.hidden = true;
    };

    buttons.forEach((button) => {
        button.addEventListener('click', () => {
            if (button.classList.contains('is-selected')) {
                clearSelection();
                return;
            }

            buttons.forEach((otherButton) => {
                const isSelected = otherButton === button;
                otherButton.classList.toggle('is-selected', isSelected);
                otherButton.classList.toggle('is-minimized', !isSelected);
                otherButton.setAttribute('aria-expanded', String(isSelected));
            });

            detailFields.name.textContent = button.dataset.pestName;
            detailFields.overview.textContent = button.dataset.overview;
            detailFields.treatment.textContent = button.dataset.treatment;
            detailFields.timing.textContent = button.dataset.timing;
            selector.classList.add('has-selection');
            panel.hidden = false;

            requestAnimationFrame(() => {
                panel.classList.add('is-visible');
                panel.scrollIntoView({
                    behavior: window.matchMedia('(prefers-reduced-motion: reduce)').matches ? 'auto' : 'smooth',
                    block: 'nearest',
                });
            });
        });
    });

    closeButton.addEventListener('click', () => {
        const selectedButton = buttons.find((button) => button.classList.contains('is-selected'));

        clearSelection();
        selectedButton?.focus();
    });
});
