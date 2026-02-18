const fixedHeader = (function() {
    function init() {
        const header = document.querySelector("#sticky-header");
        const targetSection = document.querySelector("#fade-in-target");

        if (!header || !targetSection) return; // safety check

        const showHeader = () => {
            const sectionTop = targetSection.getBoundingClientRect().top + window.scrollY;
            const triggerPoint = sectionTop + targetSection.offsetHeight * 0.5;

            if (window.scrollY + window.innerHeight >= triggerPoint) {
                header.classList.add("visible");
                return true; // header is visible
            }
            return false;
        };

        // Initial check on page load
        if (showHeader()) return; // already visible, no need to observe

        // Intersection Observer for scrolling normally
        const observer = new IntersectionObserver(
            (entries, observerInstance) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        header.classList.add("visible");
                        observerInstance.disconnect();
                    }
                });
            },
            { threshold: 0.5 }
        );

        observer.observe(targetSection);
    }

    return { init };
})();
