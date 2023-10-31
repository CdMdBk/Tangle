const burgerButton = document.querySelector('.nav__burger');
const navBlock = document.querySelector('.nav__ul');
const arrLinksNav = document.querySelectorAll('.nav__li');

removeNav();
window.addEventListener('resize', removeNav);

burgerButton.addEventListener('click', toggleNavVisibility);

arrLinksNav.forEach((link, index) => {
    link.addEventListener('click', removeNav);
});

function toggleNavVisibility() {
    burgerButton.classList.toggle('nav__burger_active');
    navBlock.classList.toggle('nav__ul_active');
    document.body.style.overflow === 'hidden' ?
        document.body.style.overflow = '' :
        document.body.style.overflow = 'hidden';
}

function removeNav() {
    burgerButton.classList.remove('nav__burger_active');
    navBlock.classList.remove('nav__ul_active');
    document.body.style.overflow = '';
}