// document.addEventListener('DOMContentLoaded', function () {
//     const navLinks = document.querySelectorAll('.nav-link');

//     navLinks.forEach(link => {
//         link.addEventListener('click', function () {
//             console.log('Link clicked:', this); // Debug log
//             navLinks.forEach(link => link.classList.remove('active'));
//             this.classList.add('active');
//         });
//     });
// });

window.addEventListener('scroll', function () {
    const navbarTop = document.getElementById('navbarTop');
    const navbarMain = document.getElementById('navbarMain');

    if (window.scrollY > 50) {
        document.body.classList.add('scrolled');
        navbarMain.classList.add('scrolled');
    } else {
        document.body.classList.remove('scrolled');
        navbarMain.classList.remove('scrolled');
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const navLinks = document.querySelectorAll('.nav-link');
    const navbar = document.querySelector('.navbar-header');
    const logo = document.querySelector('.navbar-logo');
    const emailSection = document.querySelector('.navbar-body-secondary');

    navLinks.forEach(link => {
        link.addEventListener('click', function () {
            console.log('Link clicked:', this); // Debug log
            navLinks.forEach(link => link.classList.remove('active'));
            this.classList.add('active');
        });
    });

    // Add scroll event listener
    window.addEventListener('scroll', function () {
        if (window.scrollY > 50) { // Adjust the scrollY value based on when you want the logo to hide
            navbar.classList.add('scrolled');
            logo.style.opacity = '0';
            logo.style.transform = 'translateY(-20px)'; // Move logo up
            logo.style.transition = 'opacity 0.5s ease, transform 0.5s ease';

            emailSection.style.opacity = '0';
            emailSection.style.transition = 'opacity 0.5s ease';
        } else {
            navbar.classList.remove('scrolled');
            logo.style.opacity = '1';
            logo.style.transform = 'translateY(0)';
            logo.style.transition = 'opacity 0.5s ease, transform 0.5s ease';

            emailSection.style.opacity = '1';
            emailSection.style.transition = 'opacity 0.5s ease';
        }
    });
});


