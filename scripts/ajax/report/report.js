const arrayDataApplications = [];

document.querySelector('.admin-buttons_appearance:nth-child(3)').addEventListener('click', () => {
    const arrayApplicationsBoxes = document.querySelectorAll('.recent-actions__row');

    for (let i = 1; i < arrayApplicationsBoxes.length; i++) {
        arrayDataApplications[i] = {
            data: arrayApplicationsBoxes[i].children[0].textContent.trim(),
            user_id: arrayApplicationsBoxes[i].children[1].textContent.trim(),
            amount: arrayApplicationsBoxes[i].children[2].textContent.trim(),
            entity: arrayApplicationsBoxes[i].children[3].textContent.trim(),
            status: arrayApplicationsBoxes[i].children[4].textContent.trim(),
            application_id: arrayApplicationsBoxes[i].children[4].getAttribute('id').trim()
        }
    }
    console.log(arrayDataApplications);

    fetch('../scripts/ajax/report/report.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(arrayDataApplications)
    }).then(() => {
        alert('Отчёт сформирован');
    });
})