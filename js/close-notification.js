document.addEventListener('DOMContentLoaded', () => {
    const closeButton = document.querySelector('#notification-close-button');
    const notificationBar = document.querySelector('.notifications-bar');
    closeButton.addEventListener('click', () => {
        notificationBar.style.display = 'none';
    });
});