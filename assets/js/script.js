const dateElement = document.getElementById('date-display');

const getCurrenDate = () => {
    const date = new Date();
    const options = {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    };

    return date.toLocaleDateString('en-PH', options);
}

dateElement.innerText = getCurrenDate();

const addToolTips = () => {
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    tooltipTriggerList.forEach(el => new bootstrap.Tooltip(el));
}

const highlightActiveLink = () => {
    const currentPath = window.location.pathname.split('/').pop();
    const navLinks = document.querySelectorAll('.nav-item');
    console.log(currentPath, navLinks);

    navLinks.forEach(link => {
        const linkPath = link.getAttribute('href');
        currentPath === linkPath
            ? link.classList.add('active')
            : link.classList.remove('active');
    });
}

document.addEventListener('DOMContentLoaded', () => {
    addToolTips();
    highlightActiveLink();
});