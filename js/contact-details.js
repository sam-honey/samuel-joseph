const addContactDetails = (() => {

  function init() {
    /* Email */
    const emailParts = ["info", "@", "samueljoseph", ".", "uk"];
    const emailFull = emailParts.join("");
    const emailLinks = document.querySelectorAll(".emailLink");
    
    if (emailLinks.length === 0) {
      console.warn("⚠️ No elements found with class '.emailLink'");
    } else {
      console.log("email!!");
      emailLinks.forEach(link => {
        link.href = "mailto:" + emailFull;
        console.log("link " + link);
        const label = link.querySelector(".desktop-label");
        if (label) label.textContent = emailFull;
      });
    }

    /* Phone */
    const numberParts = ["07932", "877017"];
    const fullNumber = numberParts.join(" ");
    const callLinks = document.querySelectorAll(".callLink");
    
    if (callLinks.length === 0) {
      console.warn("⚠️ No elements found with class '.callLink'");
    } else {
      callLinks.forEach(link => {
        link.href = "tel:" + fullNumber.replace(/\s+/g, "");
        const label = link.querySelector(".desktop-label");
        if (label) label.textContent = fullNumber;
      });
    }

    /* Address */
    const addressParts = [
      "Samuel Joseph Decor, ",
      "55 Ringwood Rd, ",
      "Oldfield Park, Bath, ",
      "BA2 3JL"
    ];
    const fullAddress = addressParts.join("");
    const addressBlocks = document.querySelectorAll(".addressBlock");
    
    if (addressBlocks.length === 0) {
      console.warn("⚠️ No elements found with class '.addressBlock'");
    } else {
      console.log("Address added: "+ fullAddress);
      addressBlocks.forEach(block => {
        block.textContent = fullAddress;
      });
    }
  }

  // Public API
  return { init };

})();

