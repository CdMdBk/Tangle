'use strict'

setColorLabel('.donation__radio', '.donation__radio_appearance', 'donation__radio_appearance_checked');

setColorLabel('.donation__purpose-radio', '.donation__purpose-radio_appearance', 'donation__purpose-radio_appearance_checked');

$('.donation').submit(event => {
    event.preventDefault();
});
//
function setColorLabel(inputSelector, labelSelector, classChecked) {
    $(inputSelector).each((index, element) => {
        element.addEventListener('change', () => {
            $(labelSelector).each(function() {
                $(this).removeClass(classChecked);
            });
            $(labelSelector)[index].classList.add(classChecked);
        });
    });
}