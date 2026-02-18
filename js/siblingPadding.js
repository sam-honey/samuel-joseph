const siblingPadding = (() => {

  function init() {
    console.log("Sibling padding module");

    function adjustContentPadding() {
      const header = document.getElementById('sticky-header');
      if (!header) return;

      const headerHeight = header.offsetHeight + 10;

      // Determine which element to pad
      const homeSection = document.querySelector('#projects');
      const singleProject = document.querySelector('#single-project-wrap');

      if (homeSection) {
        // Home page
        homeSection.style.paddingTop = `${headerHeight}px`;
      } else if (singleProject) {
        // Single project page
        singleProject.style.paddingTop = `${headerHeight}px`;
      }
    }

    // Run once immediately
    adjustContentPadding();

    // Update on resize
    window.addEventListener('resize', adjustContentPadding);
  }

  // Public API
  return { init };

})();
