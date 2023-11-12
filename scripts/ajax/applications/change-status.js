let arrayChangedStatuses = [];

buttonSave[0].addEventListener('click', changeStatusRequest);

function getChangeStatuses() {
    document.querySelectorAll('select.recent-actions__cell').forEach((select, index) => {
        select.addEventListener('change', () => {
            arrayChangedStatuses.push({
                status_id: +select.value.slice(select.value.indexOf('_') + 1, select.value.length),
                record_id: +select.previousElementSibling.getAttribute('id').slice(select.previousElementSibling.getAttribute('id').indexOf('_') + 1, select.previousElementSibling.getAttribute('id').length)
            });
        });
    });
}

function changeStatusRequest() {
    let arrayFilterApplications = [];

    for (let i = 0; i < arrayChangedStatuses.length; i++) {
        fetch(`https://tangle.cargotrace.ru/api/applications/${arrayChangedStatuses[i].record_id}`, {
            method: 'PATCH',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'Authorization': `bearer ${getCookie('token')}`
            },
            body: JSON.stringify({
                status_id: arrayChangedStatuses[i].status_id
            })
        }).then(response => {
            return response.json();
        }).then(data => {
            changeStatusAfterQuery(data.data);
            updateColorStatus();

            arrayChangedStatuses = [];
        });
    }
}