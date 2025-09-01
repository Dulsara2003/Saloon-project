// Fade-Up
document.addEventListener("DOMContentLoaded", () => {
    const targets = document.querySelectorAll('.fade-up');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            } else {
                entry.target.classList.remove('visible'); // Remove if you want reset
            }
        });
    }, {
        threshold: 0.5 // 50% visible
    });

    targets.forEach(target => observer.observe(target));
});



// Fade-right
document.addEventListener("DOMContentLoaded", () => {
    const targets = document.querySelectorAll('.fade-right'); // all elements select

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            } else {
                entry.target.classList.remove('visible'); // reset
            }
        });
    }, {
        threshold: 0.5 // 50% visible
    });

    // Observe each element separately
    targets.forEach(target => observer.observe(target));
});


// Fade-Left
document.addEventListener("DOMContentLoaded", () => {
    const targets = document.querySelectorAll('.fade-left');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            } else {
                entry.target.classList.remove('visible'); // Remove if you want reset
            }
        });
    }, {
        threshold: 0.5 // Trigger when 50% visible
    });

    targets.forEach(target => observer.observe(target));
});
