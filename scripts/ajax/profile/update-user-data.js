let arrayNewUserData = {};

document.querySelector('.my-profile__submit_appearance').addEventListener('click', () => {
    arrayNewUserData = {
        name: document.querySelector('.my-profile__cell:nth-child(1) > .my-profile__input:last-child').value,
        login: document.querySelector('.my-profile__cell:nth-child(2) > .my-profile__input:last-child').value,
        email: document.querySelector('.my-profile__cell:nth-child(3) > .my-profile__input:last-child').value,
        phone: document.querySelector('.my-profile__cell:nth-child(4) > .my-profile__input:last-child').value
    }

    fetch('https://tangle.cargotrace.ru/api/auth/user', {
        method: 'PATCH',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'Authorization': `bearer ${getCookie('token')}`
        },
        body: JSON.stringify(arrayNewUserData)
    }).then(response => {
        return response.json();
    }).then(data => {
        changePersonalData(data.data);
    });
})