var pixelartGrid;
var zoomOutButton;
var zoomInButton;
var zoomLevel = 10;
var defaultColor = '#ffffff';
var currentlyPickedColor = '#000000';

const TILES_COUNT = 225;

document.addEventListener("DOMContentLoaded", e => {
    console.log("working");
    pixelartGrid = document.querySelector('.pixelart-grid');
    zoomOutButton = document.querySelector('.zoom-out');
    zoomInButton = document.querySelector('.zoom-in');
    colorPicker = document.querySelector('#color-picker');
    clearBtn = document.querySelector('.btn-clear-pixels');


    zoomOutButton.addEventListener('click', zoomOut);
    zoomInButton.addEventListener('click', zoomIn);
    colorPicker.addEventListener('change', colorChanged, false);
    clearBtn.addEventListener('click', clearCanvas);
    
    for (let i = 0; i < TILES_COUNT; i++) {
        let tile = document.createElement('div');
        tile.classList.add('tile');
        tile.addEventListener('click', e => {
            tile.style.background = currentlyPickedColor;
            console.log(tile.style.backgroundColor);
        });

        pixelartGrid.append(tile);
        // tile.addEventListener('click', e => {
        //     console.log("CLICK");
        // });
        console.log("created element");
    }
});

function colorChanged(e) {
    console.log(currentlyPickedColor);
    currentlyPickedColor = e.target.value;
    
}

function clearCanvas() {
    tiles.forEach(tile => {
        tile.style.background = defaultColor;
        console.log(tile);
    });
}

function zoomOut() {
    if (zoomLevel <= 4) {
        return;
    }
    zoomLevel -= 1;
    pixelartGrid.style.width = (zoomLevel + '0%');
}

function zoomIn() {
    if (zoomLevel >= 20) {
        return;
    }
    zoomLevel += 1;
    pixelartGrid.style.width = (zoomLevel + '0%');
}