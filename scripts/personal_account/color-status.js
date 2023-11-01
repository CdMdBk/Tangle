const arrStatus = $('.recent-actions__cell[data-status]');
const arrStatusSelect = $('.recent-actions__cell[data-status-select]');

updateColorStatus();

function updateColorStatus() {
    arrStatus.each((index, element) => {
        switch(element.innerHTML.trim()) {
            case 'Выполнен':
                element.style.color = `#4ECD00`;
                break;
            case 'Получен':
                element.style.color = `#0500FF`;
                break;
            case 'Ожидает':
                element.style.color = `#444`;
                break;
            case 'Отклонён':
                element.style.color = `red`;
        }
    });

    arrStatusSelect.each((index, element) => {
        switch(element.innerHTML.trim()) {
            case 'Выполнен':
                element.style.color = `#4ECD00`;
                break;
            case 'Получен':
                element.style.color = `#0500FF`;
                break;
            case 'Ожидает':
                element.style.color = `#444`;
                break;
            case 'Отклонён':
                element.style.color = `red`;
        }
    });
}