function setApplicationsUser() {
    let {applications} = userData;
    let blockRecord = '';

    document.querySelector('.recent-actions').innerHTML = `
        <div class="recent-actions__row">
            <h4 class="recent-actions__cell recent-actions__cell_font">
                Дата
            </h4>

            <h4 class="recent-actions__cell recent-actions__cell_font">
                Время
            </h4>

            <h4 class="recent-actions__cell recent-actions__cell_font" data-personal-account>
                Цель пожертвования
            </h4>

            <h4 class="recent-actions__cell recent-actions__cell_font">
                Статус заявки
            </h4>
        </div>
    `;

    for (let i = 0; i < applications.length; i++) {
        blockRecord = `
            <div class="recent-actions__row">
                <p class="recent-actions__cell recent-actions__cell_font">
                    ${applications[i].created_at.slice(0, applications[i].created_at.indexOf('T'))}
                </p>

                <p class="recent-actions__cell recent-actions__cell_font">
                    ${applications[i].created_at.slice(applications[i].created_at.indexOf('T') + 1, applications[i].created_at.indexOf('.'))}
                </p>

                <p class="recent-actions__cell recent-actions__cell_font" data-personal-account>
                    ${applications[i].entity.name}
                </p>

                <p class="recent-actions__cell recent-actions__cell_font" data-status>
                    ${applications[i].status.name}
                </p>
            </div>
        `;

        document.querySelector('.recent-actions').innerHTML += blockRecord;
    }

    updateColorStatus();
}