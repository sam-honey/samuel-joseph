const parallax = (() => {
  console.log("Parallax script loaded");

  let elements = [];
  let speed = 0.5;
  let ticking = false;

  function update() {
    const scrollTop = window.pageYOffset;
    const windowHeight = window.innerHeight;

    elements.forEach(el => {
      const offsetTop = el.offsetTop;
      const height = el.offsetHeight;

      if (scrollTop + windowHeight > offsetTop && scrollTop < offsetTop + height) {
        const yPos = -((scrollTop - offsetTop) * speed);
        el.style.backgroundPosition = `center ${yPos}px`;
      }
    });

    ticking = false; // allow new updates
  }

  function onScroll() {
    if (!ticking) {
      window.requestAnimationFrame(update);
      ticking = true;
    }
  }

  function init(options = {}) {
    elements = document.querySelectorAll(options.selector || '.parallax');
    speed = options.speed || 0.5;

    if (!elements.length) return;
    window.addEventListener('scroll', onScroll, { passive: true });
    update(); // initial position
  }

  function destroy() {
    window.removeEventListener('scroll', onScroll);
  }

  return { init, destroy };
})();
