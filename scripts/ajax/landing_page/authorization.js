'use strict'

function userAuthorization(event) {
    event.preventDefault();

    arrayData = {
        login: document.querySelectorAll('.log__input')[0].value,
        password: document.querySelectorAll('.log__input')[1].value
    }

    fetch('https://tangle.cargotrace.ru/api/auth/login', {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(arrayData)
    }).then(response => {
        return response.json();
    }).then(data => {
        console.log(data);
        if (data.message_error) {
            alert(data.message_error);
        } else {
            document.cookie = `token=${data.access_token}; expires=${new Date(Date.now() + data.expires_in)}`;

            window.location.href = 'personal-account.html';
        }
    });
}