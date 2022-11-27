var pixelartGrid;
var zoomOutButton;
var zoomInButton;
var zoomLevel = 10;

document.addEventListener("DOMContentLoaded", e => {
    console.log("working");
    const TILES_COUNT = 225;
    pixelartGrid = document.querySelector('.pixelart-grid');
    zoomOutButton = document.querySelector('.zoom-out');
    zoomInButton = document.querySelector('.zoom-in');
    zoomOutButton.addEventListener('click', zoomOut);
    zoomInButton.addEventListener('click', zoomIn);
    
    for (let i = 0; i < TILES_COUNT; i++) {
        let tile = document.createElement('div');
        tile.classList.add('tile');
        pixelartGrid.append(tile);
        console.log("created element");
    }
});

function zoomOut() {
    if (zoomLevel <= 5) {
        return;
    }
    zoomLevel -= 1;
    pixelartGrid.style.width = (zoomLevel + '0%');
}

function zoomIn() {
    if (zoomLevel >= 15) {
        return;
    }
    zoomLevel += 1;
    pixelartGrid.style.width = (zoomLevel + '0%');
}