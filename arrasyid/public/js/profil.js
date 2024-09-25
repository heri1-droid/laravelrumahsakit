document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const scrollToSection = urlParams.get('scroll');

    if (scrollToSection === 'visi' || scrollToSection === 'mitra') {
        const sectionId = scrollToSection === 'visi' ? 'visi' : 'mitra';
        const section = document.getElementById(sectionId);
        if (section) {
            const offset = 130; // Sesuaikan offset agar tidak terlalu jauh ke bawah
            const y = section.getBoundingClientRect().top + window.pageYOffset - offset;

            window.scrollTo({ top: y, behavior: 'smooth' });

            // Menghapus parameter query dari URL setelah scroll
            history.replaceState(null, '', window.location.pathname);
        }
    }
});
