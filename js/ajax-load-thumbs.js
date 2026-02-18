
const LoadMoreProjects = (() => {
    function init(options = {}) {
        const loadMoreBtn = document.querySelector(options.selector || "#load-more-projects");
        if (!loadMoreBtn) return;

        loadMoreBtn.addEventListener("click", function() {
            const button = this;
            let page = parseInt(button.dataset.page);
            const max = parseInt(button.dataset.max);

            button.textContent = "Loading...";

            fetch(my_ajax_object.ajax_url, {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                },
                body: new URLSearchParams({
                    action: "load_more_projects",
                    page: page
                })
            })
            .then(response => response.text())
            .then(data => {
                const thumbWrap = document.getElementById("thumb-wrap");
                thumbWrap.insertAdjacentHTML("beforeend", data);

                // Tell FadeInOnScroll to observe new thumbnails
                const newThumbs = thumbWrap.querySelectorAll('.projects-thumb.fade-in:not(.visible)');
                FadeInOnScroll.addNew(newThumbs);

                page++;
                button.dataset.page = page;
                button.textContent = "Load More";

                if (page >= max) button.style.display = "none";
            })
            .catch(() => {
                button.textContent = "Error – try again";
            });
        });
    }

    return { init };
})();
