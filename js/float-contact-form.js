const floatContact = (function() {

    function init() {
        const contactSection = document.getElementById('contact-section');
        const toggleButtons = document.querySelectorAll('.contact-toggle');

        if (!contactSection || toggleButtons.length === 0) return;

        toggleButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const isActive = contactSection.classList.toggle('active');
                button.innerHTML = isActive ? '&nbsp;Close&nbsp;' : 'Contact';
            });
        });

        // ✅ Fix: When clicking outside (on the section background), reset buttons to "Contact"
        contactSection.addEventListener('click', function(e) {
            if (e.target === contactSection) {
                contactSection.classList.remove('active');
                toggleButtons.forEach(button => {
                    button.innerHTML = 'Contact';
                });
            }
        });
    }

    return {
        init: init
    };
})();
