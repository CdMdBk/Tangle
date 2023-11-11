function changePersonalData(data) {
    document.querySelector('.account-header__avatar_heading').textContent = data.name;
    document.querySelector('.my-profile__cell:nth-child(1) > .my-profile__cell_font:nth-child(2)').textContent = data.name;
    document.querySelector('.my-profile__cell:nth-child(2) > .my-profile__cell_font:nth-child(2)').textContent = data.login;
    document.querySelector('.my-profile__cell:nth-child(3) > .my-profile__cell_font:nth-child(2)').textContent = data.email;
    document.querySelector('.my-profile__cell:nth-child(4) > .my-profile__cell_font:nth-child(2)').textContent = data.phone;
    document.querySelector('.my-profile__cell:nth-child(1) > .my-profile__input').setAttribute('value', data.name);
    document.querySelector('.my-profile__cell:nth-child(2) > .my-profile__input').setAttribute('value', data.login);
    document.querySelector('.my-profile__cell:nth-child(3) > .my-profile__input').setAttribute('value', data.email);
    if (data.phone === null) data.phone = '';
    document.querySelector('.my-profile__cell:nth-child(4) > .my-profile__input').setAttribute('value', data.phone);
}

function changeLanding(data) {

}