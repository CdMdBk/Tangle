'use strict'

console.log(document.cookie);

let arrayData = {};

function userRegistration(event) {
    event.preventDefault();

    arrayData = {
        name: document.querySelectorAll('.log__input')[0].value,
        login: document.querySelectorAll('.log__input')[1].value,
        email: document.querySelectorAll('.log__input')[2].value,
        password: document.querySelectorAll('.log__input')[3].value
    }

    fetch('https://tangle.cargotrace.ru/api/auth/register', {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(arrayData)
    }).then(response => {
        alert('Вы зарегистрировались');
    });
}