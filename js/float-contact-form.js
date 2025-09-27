const floatContact = (function() {

    function init() {
        console.log("floatContact module loaded");
        const contactSection = document.getElementById('contact-section');
        const toggleButtons = document.querySelectorAll('.contact-toggle'); // ⬅️ multiple buttons
        if (!contactSection || toggleButtons.length === 0) return;

        toggleButtons.forEach(button => {
            button.addEventListener('click', function(e){
                e.preventDefault();
                const isActive = contactSection.classList.toggle('active');
                button.textContent = isActive ? '×' : 'Contact';
            });
        });

        contactSection.addEventListener('click', function(e){
            if (e.target === contactSection) {
                contactSection.classList.remove('active');
                toggleButtons.forEach(button => button.textContent = 'Contact');
            }
        });
    }

    return {
        init: init
    };
})();
