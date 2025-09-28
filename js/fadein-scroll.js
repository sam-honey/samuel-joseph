const FadeInOnScroll = (() => {
  console.log("fade in script2");
  function init(options = {}) {
    const elements = document.querySelectorAll(options.selector || '.fade-in');
    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: options.threshold || 0.9});

    elements.forEach(el => observer.observe(el));
  }

  return { init };
})();