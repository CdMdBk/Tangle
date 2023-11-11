if (document.cookie) {
    document.querySelector('.nav__li:nth-child(4)').style.display = 'none';
    document.querySelector('.nav__li:nth-child(5)').style.display = 'block';
    document.querySelector('.help__text-container > .button').style.display = 'none';
} else {
    document.querySelector('.nav__li:nth-child(4)').style.display = 'block';
    document.querySelector('.nav__li:nth-child(5)').style.display = 'none';
    document.querySelector('.help__text-container > .button').style.display = 'flex';
}