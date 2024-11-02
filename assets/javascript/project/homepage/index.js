let documentHeader = document.getElementById('fh5co-loader');
fadeOut(documentHeader);

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