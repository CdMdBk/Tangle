const buttonChangeStatus = $('.admin-buttons_appearance:first-child');
const buttonSave = $('.admin-buttons_appearance[data-status-save]');

buttonChangeStatus.click(() => {
    buttonChangeStatus.hide();
    buttonSave.show();
    changeStatus();
});

buttonSave.click(() => {
    buttonChangeStatus.show();
    buttonSave.hide();
    changeStatus();
});

function changeStatus() {
    const arrStatus = $('.recent-actions__cell[data-status]');
    const arrStatusSelect = $('.recent-actions__cell[data-status-select]');

    arrStatus.each((index, element) => {
        element.classList.toggle('recent-actions_inactive');
    });
    arrStatusSelect.each((index, element) => {
        element.classList.toggle('recent-actions_inactive');
    });
}