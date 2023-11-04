'use strict'

class ToggleBlocks {
    constructor(element, blockToggle, classActive) {
        this.element = $(element);
        this.blockToggle = $(blockToggle);
        this.classActive = classActive;
    }

    toggleELement() {
        this.blockToggle.toggleClass(this.classActive);
    }

    addELement() {
        this.blockToggle.addClass(this.classActive);
    }

    removeELement() {
        this.blockToggle.removeClass(this.classActive);
    }
}

const buttonShowFilter = new ToggleBlocks('.account-header__button-filter', '.filter', 'filter_active');
const buttonFilter = new ToggleBlocks('.filter__submit', '.filter', 'filter_active');

buttonShowFilter.element.click(() => {
    buttonShowFilter.toggleELement();
});
buttonFilter.element.click(() => {
    buttonFilter.removeELement();
});

$('.filter').submit(event => {
    event.preventDefault();
});



