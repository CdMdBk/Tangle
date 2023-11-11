let changedStatuses = [];
let arrayIndexes = new Set();

function getChangeStatus() {
    document.querySelectorAll('select.recent-actions__cell').forEach((select, index) => {
        select.addEventListener('change', () => {
            changedStatuses.push({
                status_id: select.value,
                id: select.previousElementSibling.getAttribute('id'),
                index: index
            });
            arrayIndexes.add(index);
        });
    });
}

buttonSave[0].addEventListener('click', changeStatusRequest);

function changeStatusRequest() {
    for (let i = 0; i < changedStatuses.length; i++) {
        fetch(`https://tangle.cargotrace.ru/api/applications/${changedStatuses[i].id}`, {
            method: 'PATCH',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'Authorization': `bearer ${getCookie('token')}`
            },
            body: JSON.stringify({
                status_id: changedStatuses[i].status_id
            })
        }).then(response => {
            addListRecords();

            changedStatuses = [];
            arrayIndexes = new Set();
        });
    }
}