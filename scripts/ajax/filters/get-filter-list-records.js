let arrayFilterData = {};

document.querySelector('.filter').addEventListener('submit', event => {
    event.preventDefault();
    arrayFilterData = {};

    if (document.querySelector('[id="date-start"]').value && document.querySelector('[id="date-end"]').value) {
        arrayFilterData.date = [document.querySelector('[id="date-start"]').value, document.querySelector('[id="date-end"]').value];
    }

    arrayFilterData.amount = [+document.querySelector('.input-min').value, +document.querySelector('.input-max').value];

    if (document.querySelector('.filter__select[name="status"]').value) arrayFilterData.status_id = +document.querySelector('.filter__select[name="status"]').value;

    console.log(arrayFilterData);

    fetch('https://tangle.cargotrace.ru/api/applications/search', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'Authorization': `bearer ${getCookie('token')}`
        },
        body: JSON.stringify(arrayFilterData)
    }).then(response => {
        return response.json();
    }).then(data => {
        insertApplicationsLayout(data.data);
        getChangeStatuses();
    });

    // fetch('https://tangle.cargotrace.ru/api/applications?page=1&query=50', {
    //     method: 'POST',
    //     headers: {
    //         'Content-Type': 'application/json',
    //         'Accept': 'application/json',
    //         'Authorization': `bearer ${getCookie('token')}`
    //     },
    //     body: JSON.stringify(arrayFilterData)
    // }).then(response => {
    //     return response.json();
    // }).then(data => {
    //     console.log(data.data.length);

        // for (let i = 0; i < data.length; i++) {
        //     blockRecord = `
        //     <div class="recent-actions__row">
        //         <p class="recent-actions__cell recent-actions__cell_font">
        //             30.10.2023
        //             ${data[i]['fds']}
        //         </p>
        //
        //         <p class="recent-actions__cell recent-actions__cell_font">
        //             Лыкова О.
        //             ${data[i]['fds']}
        //         </p>
        //
        //         <p class="recent-actions__cell recent-actions__cell_font">
        //             3400₽
        //             ${data[i]['fds']}
        //         </p>
        //
        //         <p class="recent-actions__cell recent-actions__cell_font">
        //             Корм (Ева)
        //             ${data[i]['fds']}
        //         </p>
        //
        //         <p class="recent-actions__cell recent-actions__cell_font"
        //            data-status
        //            id="">
        //             Ожидает
        //             ${data[i]['fds']}
        //         </p>
        //
        //         <select class="recent-actions__cell recent-actions__cell_font recent-actions_inactive"
        //                 name="status"
        //                 data-status-select>
        //             <option value="waiting">
        //                 Ожидает
        //                 ${data[i]['fds']}
        //             </option>
        //
        //             <option value="received">
        //                 Получен
        //                 ${data[i]['fds']}
        //             </option>
        //
        //             <option value="completed">
        //                 Выполнен
        //                 ${data[i]['fds']}
        //             </option>
        //
        //             <option value="rejected">
        //                 Отклонён
        //                 ${data[i]['fds']}
        //             </option>
        //         </select>
        //     </div>
        // `;
        //     document.querySelector('.recent-actions').innerHTML = blockRecord;
        // }

        // updateColorStatus();
    // });
})