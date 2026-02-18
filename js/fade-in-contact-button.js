const fadeInContactButton = (() => {

  function init() {
console.log("fade in button moduule");

const fab = document.querySelector(".fab-contact");
  if (!fab) return;

  let hasFadedIn = false; // tracks if FAB has initially appeared

  const sections = document.querySelectorAll("#section-about, #projects, #single-project-wrap");
  if (sections.length === 0) {
    console.log("Error: #section-about or #projects not found in the DOM!");
    return;
  }

  // FADE IN OBSERVER
  const fadeInObserver = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && entry.intersectionRatio > 0.3) {
        fab.classList.add("fade-in-contact-button");
        hasFadedIn = true; // mark that FAB has appeared
        obs.disconnect(); // fade in only once
      }
    });
  }, { threshold: [0.3] });

  requestAnimationFrame(() => {
    sections.forEach(section => fadeInObserver.observe(section));
  });

  // FADE OUT OBSERVER (footer)
  const footer = document.querySelector("footer");
  if (footer) {
    const fadeOutObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (!hasFadedIn) return; // do nothing until FAB has faded in

        if (entry.isIntersecting) {
          fab.classList.remove("fade-in-contact-button"); // fade out
        } else {
          fab.classList.add("fade-in-contact-button"); // fade back in
        }
      });
    }, { threshold: [0.1] });

    fadeOutObserver.observe(footer);
  }

  	}

  // Public API
  return { init };

})();