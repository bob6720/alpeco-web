const menuButton = document.querySelector('.menu-button');
const navLinks = document.querySelector('.nav-links');

menuButton?.addEventListener('click', () => {
    const isOpen = navLinks?.classList.toggle('open') ?? false;
    menuButton.setAttribute('aria-expanded', String(isOpen));
});

document.querySelectorAll('[data-pest-selector]').forEach((selector) => {
    const audienceButtons = [...selector.querySelectorAll('[data-audience]')];
    const pestList = selector.querySelector('[data-pest-list]');
    const pestGrid = selector.querySelector('.pest-grid');
    const buttons = [...selector.querySelectorAll('[data-pest]')];
    const panel = selector.querySelector('.pest-detail-panel');
    const closeButton = selector.querySelector('[data-pest-close]');
    const audienceHeading = selector.querySelector('[data-audience-heading]');
    const audienceDescription = selector.querySelector('[data-audience-description]');
    const originalButtonOrder = [...buttons];
    const detailFields = {
        name: panel?.querySelector('[data-pest-detail="name"]'),
        overview: panel?.querySelector('[data-pest-detail="overview"]'),
        treatment: panel?.querySelector('[data-pest-detail="treatment"]'),
        timing: panel?.querySelector('[data-pest-detail="timing"]'),
        shop: panel?.querySelector('[data-pest-shop]'),
    };

    if (!panel || !closeButton || !pestList || !pestGrid || !audienceHeading || !audienceDescription || !detailFields.shop) {
        return;
    }

    pestList.hidden = true;

    const clearSelection = () => {
        buttons.forEach((button) => {
            button.classList.remove('is-selected', 'is-minimized');
            button.setAttribute('aria-expanded', 'false');
        });

        selector.classList.remove('has-selection');
        panel.classList.remove('is-visible');
        panel.hidden = true;
    };

    audienceButtons.forEach((audienceButton) => {
        audienceButton.addEventListener('click', () => {
            const audience = audienceButton.dataset.audience;
            const priority = audience === 'commercial' ? ['bed-bugs', 'birds'] : ['spiders', 'cockroaches'];

            audienceButtons.forEach((button) => {
                button.setAttribute('aria-pressed', String(button === audienceButton));
            });

            const orderedButtons = [...originalButtonOrder].sort((left, right) => {
                const leftPriority = priority.indexOf(left.dataset.pest);
                const rightPriority = priority.indexOf(right.dataset.pest);
                const leftRank = leftPriority === -1 ? priority.length : leftPriority;
                const rightRank = rightPriority === -1 ? priority.length : rightPriority;

                return leftRank - rightRank;
            });

            orderedButtons.forEach((button) => pestGrid.append(button));

            audienceHeading.textContent = audience === 'commercial' ? 'Commercial pest services' : 'Residential pest services';
            audienceDescription.textContent = audience === 'commercial'
                ? 'Bed bugs and bird netting are common commercial needs. All pest types are available below for buildings of every size.'
                : 'Spiders and cockroaches are common around the home. All pest types are available below.';
            pestList.hidden = false;
            clearSelection();
        });
    });

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
            detailFields.shop.href = button.dataset.pestShopUrl;
            detailFields.shop.textContent = 'Shop related products at PestStop';
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
