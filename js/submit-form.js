document.addEventListener('DOMContentLoaded', e => {
    let form = document.querySelector('#form');
    form.addEventListener('submit', onFormSubmitted);
});

function onFormSubmitted() {
    let pixelColors = [];
    const vReceiver = document.querySelector('#receiver').value;
    const vGrade = document.querySelector('#grade').value;
    const vTitle = document.querySelector('#title').value;
    const vContent = document.querySelector('#content').value;
    const tiles = document.querySelectorAll('.tile');
    tiles.forEach(tile => {
        let color = rgbToHex(window.getComputedStyle(tile).backgroundColor);
        pixelColors.push(color);
    });
    document.write("XD");
    console.log(pixelColors);
    $.post('valentine-post-create.php', {
        pixelColors: JSON.stringify(pixelColors),
        receiver: vReceiver,
        grade: vGrade,
        title: vTitle,
        content: vContent
    })
    .done(function() {
        location.href = 'index.php';
    })
}

function rgbToHex(rgba) {
    if (rgba[0] != 'r')
        return rgba;
    return `${rgba.match(/^rgba?\((\d+),\s*(\d+),\s*(\d+)(?:,\s*(\d+\.{0,1}\d*))?\)$/).slice(1).map((n, i) => (i === 3 ? Math.round(parseFloat(n) * 255) : parseFloat(n)).toString(16).padStart(2, '0').replace('NaN', '')).join('')}`;
}