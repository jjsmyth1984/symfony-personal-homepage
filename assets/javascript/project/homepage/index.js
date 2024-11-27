let documentHeader = document.getElementById('fh5co-loader');
if (documentHeader) {
    fadeOut(documentHeader);
}

/**
 *
 * @param elem
 */
function fadeOut(elem) {
    let elementary = Number(getComputedStyle(elem).opacity);

    if (elementary <= 0) {
        return;
    }
    elem.style.opacity = elementary - 0.01;

    setTimeout(function () {
        fadeOut(elem);
        elem.style.position = 'unset';
    }, 15);
}

let burgerMenu = document.getElementById('burger-menu');

if(burgerMenu) {
    burgerMenu.addEventListener('click', function (e) {
        let burgerMenuBody = document.getElementById(this.getAttribute('data-bs-target'));
        if (burgerMenuBody.classList.contains('collapse')) {
            burgerMenuBody.classList.remove('collapse');
        } else {
            burgerMenuBody.classList.add('collapse');
        }
    });
}