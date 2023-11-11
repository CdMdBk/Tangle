let user = ['.'];

fetch('', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json;charset=utf-8'
    },
    body: JSON.stringify()
}).then(response => {
    return response.json(user);
}).then(data => {
    console.log(data);

    let blockRecord = '';
    for (let i = 0; i < data.length; i++) {
        blockRecord = `
            <div class="recent-actions__row">
                <p class="recent-actions__cell recent-actions__cell_font">
                    02.10.2023
                    ${data[i]['fds']}
                </p>

                <p class="recent-actions__cell recent-actions__cell_font">
                    20:00
                    ${data[i]['fds']}
                </p>

                <p class="recent-actions__cell recent-actions__cell_font" data-personal-account>
                    Мышь (кот)
                    ${data[i]['fds']}
                </p>

                <p class="recent-actions__cell recent-actions__cell_font" data-status>
                    Выполнен
                    ${data[i]['fds']}
                </p>
            </div>
        `;

        document.querySelector('.recent-actions').innerHTML += blockRecord;
    }
});