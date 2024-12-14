document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('.fade-link');
    const fadeContainer = document.querySelector('.fade-container');

    links.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault(); // Prevent default link navigation
            const href = link.getAttribute('href'); // Get the target page
            
            // Add fade-out class
            fadeContainer.classList.add('fade-out');

            // Wait for the animation to complete, then navigate
            setTimeout(() => {
                window.location.href = href;
            }, 1000); // Matches the animation duration (1s)
        });
    });
});
