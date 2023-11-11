let arrayApplicationData = {};

document.querySelector('.donation').addEventListener('submit', event => {
    event.preventDefault();

    arrayApplicationData = {
        user_id: userData.id,
        status_id: 1,
        donation_amount: +document.querySelector('.donation__radio:checked').value,
        entity_id: +document.querySelector('.donation__purpose-some[name="entities"]:checked').getAttribute('id').replace('entities-', '')
    }

    fetch('https://tangle.cargotrace.ru/api/applications', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'Authorization': `bearer ${getCookie('token')}`
        },
        body: JSON.stringify(arrayApplicationData)
    }).then(response => {
        alert('Пожертвование оформлено');
        getUserData();
    });
})