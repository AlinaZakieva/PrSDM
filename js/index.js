const inputANode = document.querySelector('.js-input-a');
const inputBNode = document.querySelector('.js-input-b');
const btnResultNode = document.querySelector('.js-btn-result');
const outputNode = document.querySelector('.js-output');

btnResultNode.addEventListener('click', function() {
    const a = Number(inputANode.value);
    const b = Number(inputBNode.value);

    let c = b * 2;
    let d = a * 5;

    if (document.getElementById('session-yes').checked) {
        e = 3;
    }
    else if (document.getElementById('session-no').checked) {
        e = 0;
    }
    if (document.getElementById('planning-yes').checked) {
        f = a * 0.5;
        g = a * f;
    }
    else if (document.getElementById('planning-no').checked) {
        g = 0;
    }
    if (document.getElementById('instructions-yes').checked) {
        h = b * 1.2;
    }
    else if (document.getElementById('planning-no').checked) {
        h = 0;
    }

    result = (c + d + e + g + h) * 2500;
    outputNode.innerHTML = result;
});
