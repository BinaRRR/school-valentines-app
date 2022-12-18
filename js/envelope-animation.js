var mainContainer, envelope, letter, lid, seal, pixelart, wipInfoParagraph, currentLetter, lastLetter;

document.addEventListener("DOMContentLoaded", e => {
    currentLetter = 0;
    // lastLetter = 
    envelope = document.querySelector('.envelope-container');
    letter = document.querySelector('.letter');
    lid = document.querySelector('.triangle-top');
    mainContainer = document.querySelector('.valentine-main-container');
    pixelart = document.querySelector('.pixelart-grid');
    wipInfoParagraph = document.querySelector('.wip-info');
    // letter.style.transform = "translate(-50%, -30%)";
    envelope.style.transform = "translate(0, 50%)";
    
    seal = document.querySelector('.envelope-seal');
    seal.addEventListener('click', sealClicked);
    document.querySelector('body').classList.remove('preload');
});

function sealClicked() {
    seal.removeEventListener('click', sealClicked);
    letter.classList.toggle('letter-slide-out');
    lid.classList.toggle('lid-open');
    envelope.classList.toggle('envelope-open');
    setTimeout(() => {
        mainContainer.classList.toggle('scroll-enabled');
        envelope.style.setProperty('--overflow-hider-height', '0');
        pixelart.style.opacity = 1;
        wipInfoParagraph.style.opacity = 1;
    }, 2000);
}