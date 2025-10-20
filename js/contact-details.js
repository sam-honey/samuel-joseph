const addContactDetails = (() => {

  function init() {
    /* Email */
    const emailParts = ["info", "@", "sjhoney", ".", "co", ".", "uk"];
    const emailFull = emailParts.join("");
    const emailLinks = document.querySelectorAll(".emailLink");
    
    emailLinks.forEach(link => {
      link.href = "mailto:" + emailFull;
      const label = link.querySelector(".desktop-label");
      if (label) label.textContent = emailFull;
    });

    /* Phone */
    const numberParts = ["07932", "877017"];
    const fullNumber = numberParts.join(" ");
    const callLinks = document.querySelectorAll(".callLink");
    
    callLinks.forEach(link => {
      link.href = "tel:" + fullNumber.replace(/\s+/g, "");
      const label = link.querySelector(".desktop-label");
      if (label) label.textContent = fullNumber;
    });

    /* Address */
    const addressParts = [
      "SJHoney Property Solutions, ",
      "55 Ringwood Rd, ",
      "Oldfield, Bath, ",
      "BA2 3JL"
    ];
    const fullAddress = addressParts.join("");
    const addressBlocks = document.querySelectorAll(".addressBlock");
    
    addressBlocks.forEach(block => {
      block.textContent = fullAddress;
    });
  }

  // Public API
  return { init };

})();
