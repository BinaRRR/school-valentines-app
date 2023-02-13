var mainContainer, envelope, letters, lid, seal, pixelart, currentLetter, lastLetter;

document.addEventListener("DOMContentLoaded", e => {
    currentLetter = 0;
    // lastLetter = 
    envelope = document.querySelector('.envelope-container');
    letters = document.querySelectorAll('.letter');
    lid = document.querySelector('.triangle-top');
    mainContainer = document.querySelector('.valentine-main-container');
    // pixelart = document.querySelector('.pixelart-grid');
    lastLetter = letters.length;
    // letter.style.transform = "translate(-50%, -30%)";
    envelope.style.transform = "translate(0, 50%)";
    
    seal = document.querySelector('.envelope-seal');
    seal.addEventListener('click', sealClicked);
    document.querySelector('body').classList.remove('preload');
});

function sealClicked() {
    if (lastLetter <= currentLetter) {
        seal.removeEventListener('click', sealClicked);
        setTimeout(() => {
            mainContainer.classList.toggle('scroll-enabled');
            envelope.style.setProperty('--overflow-hider-height', '0');
        }, 2000);
    }
    if (currentLetter <= 0) {
        lid.classList.toggle('lid-open');
        envelope.classList.toggle('envelope-open');
    }
    letters[currentLetter].classList.toggle('letter-slide-out');
    currentLetter++;
}