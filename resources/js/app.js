/**
 * Fades marked landing page sections in while they are on screen and out once they leave it.
 */
const fadeSections = document.querySelectorAll('[data-fade-section]');

if (fadeSections.length > 0 && 'IntersectionObserver' in window) {
    document.documentElement.classList.add('fade-sections-ready');

    const fadeSectionObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                entry.target.classList.toggle('is-visible', entry.isIntersecting);
            });
        },
        { threshold: 0.15, rootMargin: '0px 0px -10% 0px' },
    );

    fadeSections.forEach((section) => fadeSectionObserver.observe(section));
}
