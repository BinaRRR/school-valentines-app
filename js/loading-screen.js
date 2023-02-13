const loadingScreenContainer = document.querySelector('.loading-screen-container');
const pageContainer = document.querySelector('.page-container');
const loadingBar = document.querySelector('.loading-bar');

window.addEventListener('load', () => {
    loadingBar.style.width = '100%';
    setInterval(() => {
        pageContainer.style.display = 'block';
        setInterval(() => {
            pageContainer.style.opacity = 1;
            loadingScreenContainer.style.opacity = 0;
            setInterval(() => {
                loadingScreenContainer.style.display = 'none';
            }, 1000);
        }, 100);
    }, 1000);
});