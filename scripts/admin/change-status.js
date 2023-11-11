const buttonChangeStatus = $('.admin-buttons_appearance:first-child');

buttonChangeStatus.click(changeStatus);

function changeStatus() {
    if (buttonChangeStatus.html().trim() === 'Изменить статус') {
        buttonChangeStatus.html('Сохранить');
        buttonChangeStatus.attr('data-save', '');
    } else {
        buttonChangeStatus.html('Изменить статус');
        buttonChangeStatus.removeAttr('data-save');
        updateColorStatus();
    }

    const arrStatus = $('.recent-actions__cell[data-status]');
    const arrStatusSelect = $('.recent-actions__cell[data-status-select]');

    arrStatus.each((index, element) => {
        element.classList.toggle('recent-actions_inactive');
    });
    arrStatusSelect.each((index, element) => {
        element.classList.toggle('recent-actions_inactive');
    });
}