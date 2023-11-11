fetch('https://tangle.cargotrace.ru/api/auth/user', {
    method: 'GET',
    headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json',
        'Authorization': `bearer ${getCookie('token')}`
    }
}).then(response => {
    return response.json();
}).then(data => {
    changePersonalData(data);
});