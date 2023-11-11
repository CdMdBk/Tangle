let changedStatuses = {};



document.querySelector('.admin-buttons_appearance:first-child[data-save]').addEventListener('click', () => {
    fetch('', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json;charset=utf-8'
        },
        body: JSON.stringify(changedStatuses)
    }).then(response => {
        alert('Статусы обновлены');
    });
});

addChangeStatus();

function addChangeStatus() {
    document.querySelectorAll('select.recent-actions__cell').forEach((select, index) => {
        select.addEventListener('change', () => {
            changedStatuses[index] = {
                status: select.value,
                id: select.previousElementSibling.getAttribute('id')
            }

            console.log(changedStatuses);
        })
    })
}