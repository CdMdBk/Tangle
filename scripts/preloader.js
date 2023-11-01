const preloaderBlock = $('.preloader');

setTimeout(() => {
    preloaderBlock.css('opacity', 0);
}, 600);

setTimeout(() => {
    preloaderBlock.remove();
}, 1200);