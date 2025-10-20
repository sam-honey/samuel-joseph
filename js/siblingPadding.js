const siblingPadding = (() => {

  function init() {
  	console.log("Sibling padding module");

  	function adjustContentPadding() {
  const header = document.getElementById('sticky-header');
  const firstSection = document.querySelector('#projects'); // adjust to first content section
  if (header && firstSection) {
    const headerHeight = header.offsetHeight + 30;
    firstSection.style.paddingTop = `${headerHeight}px`;
  }
}
document.addEventListener('DOMContentLoaded', adjustContentPadding);
window.addEventListener('resize', adjustContentPadding);

 	}

  // Public API
  return { init };

})();