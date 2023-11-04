const buttonChangeStatus = $('.admin-buttons_appearance:first-child');

buttonChangeStatus.click(changeStatus);

function changeStatus() {
    if (buttonChangeStatus.html().trim() === 'Изменить статус') {
        buttonChangeStatus.html('Сохранить');
    } else {
        buttonChangeStatus.html('Изменить статус');
        updateColorStatus();
    }
    arrStatus.each((index, element) => {
        element.classList.toggle('recent-actions_inactive');
    });
    arrStatusSelect.each((index, element) => {
        element.classList.toggle('recent-actions_inactive');
    });
}