let arrayDifferentStatus = [];

addListRecords();

function addListRecords() {
    fetch('https://tangle.cargotrace.ru/api/applications?page=1&query=50').then(response => {
        return response.json();
    }).then(data => {
        insertApplicationsLayout(data.data);
        getChangeStatuses();
    });
}

function insertApplicationsLayout(arrayApplications) {
    document.querySelector('.recent-actions[data-admin]').innerHTML = `
        <div class="recent-actions__row">
            <h4 class="recent-actions__cell recent-actions__cell_font">
                Дата
            </h4>

            <h4 class="recent-actions__cell recent-actions__cell_font">
                id пользователя
            </h4>

            <h4 class="recent-actions__cell recent-actions__cell_font">
                Сумма
            </h4>

            <h4 class="recent-actions__cell recent-actions__cell_font">
                Цель<br>пожертвования
            </h4>

            <h4 class="recent-actions__cell recent-actions__cell_font">
                Статус заявки
            </h4>
        </div>
    `;

    console.log(arrayApplications);

    let blockRecord = '';
    for (let i = 0; i < arrayApplications.length; i++) {
        changeOptionValue(arrayApplications[i]);

        blockRecord += `
                <div class="recent-actions__row">
                    <p class="recent-actions__cell recent-actions__cell_font">
                        ${arrayApplications[i].created_at.slice(0, arrayApplications[i].created_at.indexOf('T'))}
                    </p>

                    <p class="recent-actions__cell recent-actions__cell_font">
                        ${arrayApplications[i].user_id}
                    </p>

                    <p class="recent-actions__cell recent-actions__cell_font">
                        ${arrayApplications[i].donation_amount}₽
                    </p>

                    <p class="recent-actions__cell recent-actions__cell_font">
                        ${arrayApplications[i].entity.name}
                    </p>

                    <p class="recent-actions__cell recent-actions__cell_font"
                       data-status
                       id='record_${arrayApplications[i].id}'>
                        ${arrayApplications[i].status.name}
                    </p>

                    <select class="recent-actions__cell recent-actions__cell_font recent-actions_inactive"
                            name="status"
                            data-status-select>
                        <option value="status_${arrayApplications[i].status_id}">
                            ${arrayApplications[i].status.name}
                        </option>

                        <option value="status_${arrayDifferentStatus[0][1]}">
                            ${arrayDifferentStatus[0][0]}
                        </option>

                        <option value="status_${arrayDifferentStatus[1][1]}">
                            ${arrayDifferentStatus[1][0]}
                        </option>

                        <option value="status_${arrayDifferentStatus[2][1]}">
                            ${arrayDifferentStatus[2][0]}
                        </option>
                    </select>
                </div>
            `;
    }

    document.querySelector('.recent-actions[data-admin]').innerHTML += blockRecord;
    updateColorStatus();
}

function changeStatusAfterQuery(changedApplication) {
    changeOptionValue(changedApplication);

    document.querySelector(`p.recent-actions__cell[id="record_${changedApplication.id}"]`).innerHTML = changedApplication.status.name;
    document.querySelector(`p.recent-actions__cell[id="record_${changedApplication.id}"]`).nextElementSibling.innerHTML = `
        <option value="status_${changedApplication.status_id}">
            ${changedApplication.status.name}
        </option>

        <option value="status_${arrayDifferentStatus[0][1]}">
            ${arrayDifferentStatus[0][0]}
        </option>

        <option value="status_${arrayDifferentStatus[1][1]}">
            ${arrayDifferentStatus[1][0]}
        </option>

        <option value="status_${arrayDifferentStatus[2][1]}">
            ${arrayDifferentStatus[2][0]}
        </option>
    `;
}

function changeOptionValue(application) {
    switch(application.status_id) {
        case 1:
            arrayDifferentStatus = [['Ожидает', 2], ['Получен', 3], ['Отклонен', 4]];
            break;
        case 2:
            arrayDifferentStatus = [['Выполнен', 1], ['Получен', 3], ['Отклонен', 4]];
            break;
        case 3:
            arrayDifferentStatus = [['Выполнен', 1], ['Ожидает', 2], ['Отклонен', 4]];
            break;
        case 4:
            arrayDifferentStatus = [['Выполнен', 1], ['Ожидает', 2], ['Получен', 3]];
    }
}