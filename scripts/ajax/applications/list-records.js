let arrayDifferentStatus = [];

addListRecords();

function addListRecords() {
    fetch('https://tangle.cargotrace.ru/api/applications?page=1&query=50').then(response => {
        return response.json();
    }).then(data => {
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

        let blockRecord = '';
        for (let i = 0; i < data.data.length; i++) {
            switch(data.data[i].status.name) {
                case 'Ожидает':
                    arrayDifferentStatus = [['Получен', 3], ['Выполнен', 1], ['Отклонен', 4]];
                    break;
                case 'Получен':
                    arrayDifferentStatus = [['Ожидает', 2], ['Выполнен', 1], ['Отклонен', 4]];
                    break;
                case 'Выполнен':
                    arrayDifferentStatus = [['Ожидает', 2], ['Получен', 3], ['Отклонен', 4]];
                    break;
                case 'Отклонен':
                    arrayDifferentStatus = [['Ожидает', 2], ['Получен', 3], ['Выполнен', 1]];
            }

            blockRecord += `
                <div class="recent-actions__row">
                    <p class="recent-actions__cell recent-actions__cell_font">
                        ${data.data[i].created_at.slice(0, data.data[i].created_at.indexOf('T'))}
                    </p>
    
                    <p class="recent-actions__cell recent-actions__cell_font">
                        ${data.data[i].user_id}
                    </p>
    
                    <p class="recent-actions__cell recent-actions__cell_font">
                        ${data.data[i].donation_amount}
                    </p>
    
                    <p class="recent-actions__cell recent-actions__cell_font">
                        ${data.data[i].entity.name}
                    </p>
    
                    <p class="recent-actions__cell recent-actions__cell_font"
                       data-status
                       id='${data.data[i].id}'>
                        ${data.data[i].status.name}
                    </p>
    
                    <select class="recent-actions__cell recent-actions__cell_font recent-actions_inactive"
                            name="status"
                            data-status-select>
                        <option value="${data.data[i].status_id}">
                            ${data.data[i].status.name}
                        </option>
    
                        <option value="${arrayDifferentStatus[0][1]}">
                            ${arrayDifferentStatus[0][0]}
                        </option>
    
                        <option value="${arrayDifferentStatus[1][1]}">
                            ${arrayDifferentStatus[1][0]}
                        </option>
    
                        <option value="${arrayDifferentStatus[2][1]}">
                            ${arrayDifferentStatus[2][0]}
                        </option>
                    </select>
                </div>
            `;
        }

        document.querySelector('.recent-actions').innerHTML += blockRecord;
        updateColorStatus();

        getChangeStatus();
    });
}

// function changeStatusAfter(set) {
//     let arrayItems = Array.from(set);
//
//     console.log(arrayItems);
//     console.log(changedStatuses);
//
//         for (index of arrayItems) {
//             console.log(index);

            // changedStatuses.forEach((status, i) => {
            //     if (status.index === index) {
            //
            //         console.log('com');
            //
            //         switch(status.status_id) {
            //             case '2':
            //                 arrayDifferentStatus = [['Ожидает', '2'], ['Выполнен', 1], ['Получен', 3], ['Отклонен', 4]];
            //                 break;
            //             case '3':
            //                 arrayDifferentStatus = [['Получен', '3'], ['Ожидает', 2], ['Выполнен', 1], ['Отклонен', 4]];
            //                 break;
            //             case '1':
            //                 arrayDifferentStatus = [['Выполнен', '1'], ['Ожидает', 2], ['Получен', 3], ['Отклонен', 4]];
            //                 break;
            //             case '4':
            //                 arrayDifferentStatus = [['Отклонен', '4'], ['Ожидает', 2], ['Получен', 3], ['Выполнен', 1]];
            //         }
            //
            //         console.log(arrayDifferentStatus);
            //
            //         break eachSet;
            //
            //         // document.querySelectorAll('.recent-actions__row')[index + 1].children[4].textContent = arrayDifferentStatus[0][0];
            //
            //         // document.querySelectorAll('.recent-actions__row')[index + 1].children[5] = `
            //         //     <option value="${arrayDifferentStatus[0][1]}">
            //         //         ${arrayDifferentStatus[0][0]}
            //         //     </option>
            //         //
            //         //     <option value="${arrayDifferentStatus[1][1]}">
            //         //         ${arrayDifferentStatus[1][0]}
            //         //     </option>
            //         //
            //         //     <option value="${arrayDifferentStatus[2][1]}">
            //         //         ${arrayDifferentStatus[2][0]}
            //         //     </option>
            //         //
            //         //     <option value="${arrayDifferentStatus[3][1]}">
            //         //         ${arrayDifferentStatus[3][0]}
            //         //     </option>
            //         // `;
            //     }
            // });
        // }

    // getChangeStatus();
// }