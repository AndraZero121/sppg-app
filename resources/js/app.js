import './bootstrap';

const filterInput = document.querySelector('[data-menu-filter]');

if (filterInput) {
    const items = Array.from(document.querySelectorAll('[data-menu-item]'));
    const applyFilter = () => {
        const term = filterInput.value.toLowerCase().trim();
        items.forEach((item) => {
            const text = item.dataset.menuText ?? '';
            item.classList.toggle('hidden', term.length > 0 && !text.includes(term));
        });
    };

    filterInput.addEventListener('input', applyFilter);
    applyFilter();
}
