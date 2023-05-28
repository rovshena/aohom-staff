// window.addEventListener("load", function () {
//     $('.preloader').fadeOut();
// });

function disableSubmitButton() {
    document.getElementById('submit-button').setAttribute('disabled', 'true');
    document.getElementById('loading').classList.remove('d-none');
    // $('.preloader').show();
}
