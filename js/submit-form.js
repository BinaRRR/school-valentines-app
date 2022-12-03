document.addEventListener('DOMContentLoaded', e => {
    let form = document.querySelector('#form');
    let fileUpload = document.querySelector('#fileUpload');
    fileUpload.addEventListener('change', uploadFile);
    form.addEventListener('submit', onFormSubmitted);
});

async function uploadFile(e) {
    e.preventDefault();
    console.log("xddd");
    const fileDropZone = document.querySelector('.file-drop-zone');
    var reader = new FileReader();
    reader.readAsDataURL(e.target.files[0]);
    console.log(e.target.files[0]);
    reader.onload = function(e) {
        // fileDropZone.style.backgroundImage = `url(${this.result})`;
        document.querySelector('#file-drop-zone-p').style.display = 'none';
        let img = document.createElement('img');
        img.src = this.result;
        img.classList.add('upload-preview');
        img.style.maxWidth = '100%';
        img.style.maxHeight = '100%';
        const preview = document.querySelector('.upload-preview');
        if (preview != null)
            fileDropZone.removeChild(preview);
        fileDropZone.appendChild(img);
    }
}

async function onFormSubmitted() {
    const submitBtn = document.querySelector('#submit-form');
    submitBtn.style.backgroundColor = '#a5a5a5';
    submitBtn.setAttribute('disabled', '');
    let pixelColors = [];
    const vFirstName = document.querySelector('#firstName').value;
    const vLastName = document.querySelector('#lastName').value;
    const vGrade = document.querySelector('#grade').value;
    const vTitle = document.querySelector('#title').value;
    const vContent = document.querySelector('#content').value;
    const vImage = document.querySelector('#fileUpload').files[0];
    const tiles = document.querySelectorAll('.tile');
    tiles.forEach(tile => {
        let color = rgbToHex(window.getComputedStyle(tile).backgroundColor);
        pixelColors.push(color);
    });
    console.log(pixelColors);

    const formData = new FormData();
    formData.append('pixelColors', JSON.stringify(pixelColors));
    formData.append('firstName', vFirstName);
    formData.append('lastName', vLastName);
    formData.append('grade', vGrade);
    formData.append('title', vTitle);
    formData.append('content', vContent);
    if (vImage != null) {  
        console.log("wtf");
        formData.append('userImage', vImage);
    }
    const inprogressCard = document.querySelector('.in-progress');
    inprogressCard.classList.add('state-card--active');
    let response = await fetch('valentine-post-create.php', {
        method: 'POST',
        body: formData
    });
    let data = await response.text();
    const failureCard = document.querySelector('.failure');
    const successCard = document.querySelector('.success');
    if (data == "Failed") {
        console.log("FAILED");
        console.log(data);
        inprogressCard.classList.remove('state-card--active');
        failureCard.classList.add('state-card--active');
    } else {
        console.log("SUCCESS");
        console.log(data);
        inprogressCard.classList.remove('state-card--active');
        successCard.classList.add('state-card--active');
        setTimeout(() => {
            location.href = 'index.php';
        }, 2000);
    } 
    return false;
}

function rgbToHex(rgba) {
    if (rgba[0] != 'r')
        return rgba;
    return `${rgba.match(/^rgba?\((\d+),\s*(\d+),\s*(\d+)(?:,\s*(\d+\.{0,1}\d*))?\)$/).slice(1).map((n, i) => (i === 3 ? Math.round(parseFloat(n) * 255) : parseFloat(n)).toString(16).padStart(2, '0').replace('NaN', '')).join('')}`;
}