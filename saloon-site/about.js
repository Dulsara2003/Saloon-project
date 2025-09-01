document.addEventListener("DOMContentLoaded", () => {
    const target = document.querySelector('.fade-up');

    // Function to add the 'visible' class when in view
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                target.classList.add('visible');
            } else {
                target.classList.remove('visible'); // Reset when out of view
            }
        });
    }, {
        threshold: 0.5 // Trigger when 50% of the element is in view
    });

    observer.observe(target);
});


// Text
document.addEventListener("DOMContentLoaded", () => {
    const target = document.querySelector('.fade-right-about-text');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                target.classList.add('animate-left');
            } else {
                target.classList.remove('animate-left');
            }
        });
    }, {
        threshold: 0.5 // 50% of element visible
    });

    observer.observe(target);
});


// Image
document.addEventListener("DOMContentLoaded", () => {
    const target = document.querySelector('.fade-right-about-img');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                target.classList.add('visible');
            } else {
                target.classList.remove('visible'); // Reset if you want
            }
        });
    }, {
        threshold: 0.5 // Trigger when 50% of element is visible
    });

    observer.observe(target);
});
