// document.querySelector('.nav_font[href="index.html"]').addEventListener('click', exitAccount(event));

function exitAccount(event) {
    event.preventDefault();
    fetch('https://tangle.cargotrace.ru/api/auth/refresh').then(response => {
        delete_cookie('token');
        window.location.href = 'index.html';
    });
}