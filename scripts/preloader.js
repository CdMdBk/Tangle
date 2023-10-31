const preloaderBlock = document.querySelector('.preloader');

setTimeout(() => {
    preloaderBlock.style.opacity = 0;
}, 600);

setTimeout(() => {
    preloaderBlock.remove();
}, 1200);