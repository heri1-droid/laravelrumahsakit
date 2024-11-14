window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar-header');
    const logo = document.querySelector('.navbar-logo');
    const scrollPosition = window.scrollY;

    if (scrollPosition > 100) { 
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

document.getElementById('scrollButton').addEventListener('click', function() {
    document.getElementById('section2').scrollIntoView({ 
        behavior: 'smooth' 
    });
});



