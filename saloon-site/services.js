document.addEventListener("DOMContentLoaded", () => {
    const targets = document.querySelectorAll('.zoom-in');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
            } else {
                entry.target.classList.remove('fade-in'); // remove if you want reset
            }
        });
    }, {
        threshold: 0.4 // Trigger when 40% visible
    });

    targets.forEach(target => observer.observe(target));
});
