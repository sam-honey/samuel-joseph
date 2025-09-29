const Parallax = (() => {
  console.log("Parallax script loaded");

  let elements = [];
  let speed = 0.5;

  function onScroll() {
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
  }

  function init(options = {}) {
    elements = document.querySelectorAll(options.selector || '.parallax');
    speed = options.speed || 0.5;

    if (!elements.length) return;
    window.addEventListener('scroll', onScroll);
    onScroll(); // initial position
  }

  function destroy() {
    window.removeEventListener('scroll', onScroll);
  }

  return { init, destroy };
})();
