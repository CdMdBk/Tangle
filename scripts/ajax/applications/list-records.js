fetch('').then(response => {
    return response.json();
}).then(data => {
    console.log(data);

    let blockRecord = '';
    for (let i = 0; i < data.length; i++) {
        blockRecord = `
    <div class="recent-actions__row">
        <p class="recent-actions__cell recent-actions__cell_font">
            30.10.2023
            ${data[i]['fds']}
        </p>

        <p class="recent-actions__cell recent-actions__cell_font">
            Лыкова О.
            ${data[i]['fds']}
        </p>

        <p class="recent-actions__cell recent-actions__cell_font">
            3400₽
            ${data[i]['fds']}
        </p>

        <p class="recent-actions__cell recent-actions__cell_font">
            Корм (Ева)
            ${data[i]['fds']}
        </p>

        <p class="recent-actions__cell recent-actions__cell_font"
           data-status
           id="">
            Ожидает
            ${data[i]['fds']}
        </p>

        <select class="recent-actions__cell recent-actions__cell_font recent-actions_inactive"
                name="status"
                data-status-select>
            <option value="waiting">
                Ожидает
                ${data[i]['fds']}
            </option>

            <option value="received">
                Получен
                ${data[i]['fds']}
            </option>

            <option value="completed">
                Выполнен
                ${data[i]['fds']}
            </option>

            <option value="rejected">
                Отклонён
                ${data[i]['fds']}
            </option>
        </select>
    </div>
`;
        document.querySelector('.recent-actions').innerHTML = blockRecord;
    }
});