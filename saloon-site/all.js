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
        threshold: 0.1 // 50% visible
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




// Typing Text Animation
const words = [
    "STYLISH CUTS",
    "GLAM LOOKS",
    "HAIR TRENDS",
    "BEAUTY CARE",
    "LUXURY TOUCH",
    "MODERN STYLES",
    "ELEGANT FINISH",
    "SHINE & CONFIDENCE"
];

const spans = document.querySelectorAll(".typing-text");

spans.forEach((span, index) => {
    let wordIndex = index % words.length; // each span starts from different word
    let charIndex = 0;
    let deleting = false;

    function typeEffect() {
        let currentWord = words[wordIndex];
        if (!deleting) {
            span.textContent = currentWord.substring(0, charIndex++);
            if (charIndex > currentWord.length) {
                deleting = true;
                setTimeout(typeEffect, 1000);
                return;
            }
        } else {
            span.textContent = currentWord.substring(0, charIndex--);
            if (charIndex < 0) {
                deleting = false;
                wordIndex = (wordIndex + spans.length) % words.length; // move ahead by number of spans
            }
        }
        setTimeout(typeEffect, deleting ? 80 : 120);
    }

    typeEffect();
});
