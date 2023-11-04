const burgerButton = $('.nav__burger');
const navBlock = $('.nav__ul');
const arrLinksNav = $('.nav__li');

removeNav();
$(window).resize(removeNav);

burgerButton.click(toggleNavVisibility);

arrLinksNav.each((index, link) => {
    link.addEventListener('click', removeNav);
});

function toggleNavVisibility() {
    burgerButton.toggleClass('nav__burger_active');
    navBlock.toggleClass('nav__ul_active');
    document.body.style.overflow === 'hidden' ?
        document.body.style.overflow = '' :
        document.body.style.overflow = 'hidden';
}

function removeNav() {
    burgerButton.removeClass('nav__burger_active');
    navBlock.removeClass('nav__ul_active');
    document.body.style.overflow = '';
}