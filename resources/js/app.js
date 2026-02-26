import './bootstrap';
document.addEventListener('DOMContentLoaded', () => {
    const alertElements = document.querySelectorAll('.alert-message');
    alertElements.forEach(alert => {
        const closeBtn = alert.querySelector('.close-alert');
        if (closeBtn) {
            closeBtn.addEventListener('click', () => {
                alert.style.display = 'none';
            });
        }
    });
});