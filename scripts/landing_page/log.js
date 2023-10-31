const buttonExit = $('.log__exit');
const log = $('.log');
const logContent = $('.log__content');
const blockAuthorization= `
    <form class="log__content" data-authorization method="post" action="#">
        <img class="log__exit" src="../images/landing_page/log/exit.svg" alt="exit" onclick="toggleLog()">
    
        <h3 class="log__content_heading">
            Вход
        </h3>
    
        <label class="log__content_font" for="email">
            Эл. почта<span></span>
        </label>
    
        <input class="log__input" id="email" name="email" type="text" required>
    
        <label class="log__content_font" for="password">
            Пароль<span></span>
        </label>
    
        <input class="log__input" id="password" name="password" type="password" required>
    
        <input class="log__submit log__submit_appearance" id="" type="submit" value="Регистрация">
    
        <p class="log__content_question-font">
            У вас нет аккаунта?
        </p>
    
        <button class="log__content_question-font_active" onclick="showRegistration()">
            Зарегистрироваться
        </button>
    </form>
`;
const blockRegistration = `
    <form class="log__content" method="post" action="#">
        <img class="log__exit" src="../images/landing_page/log/exit.svg" alt="exit" onclick="toggleLog()">
    
        <h3 class="log__content_heading">
            Вход
        </h3>
    
        <label class="log__content_font" for="email">
            Эл. почта<span></span>
        </label>
    
        <input class="log__input" id="email" name="email" type="text" required>
    
        <label class="log__content_font" for="password">
            Пароль<span></span>
        </label>
    
        <input class="log__input" id="password" name="password" type="password" required>
    
        <label class="log__content_font" for="copy-password">
            Повторите пароль<span></span>
        </label>
    
        <input class="log__input" id="copy-password" name="copy-password" type="password" required>
    
        <input class="log__submit log__submit_appearance" id="" type="submit" value="Регистрация">
    
        <p class="log__content_question-font">
            Уже есть профиль?
        </p>
    
        <button class="log__content_question-font_active" onclick="showAuthorization()">
            Нажмите сюда
        </button>
    </form>
`;

function toggleLog() {
    if (log.hasClass('log_active')) {
        log.removeClass('log_active');
        $('body')[0].style.overflow = `auto`;
    } else {
        log.addClass('log_active');
        $('body')[0].style.overflow = `hidden`;
        showRegistration();
    }
}

log.submit(event => {
    event.preventDefault();
});

function showRegistration() {
    log.html(blockRegistration);
}

function showAuthorization() {
    log.html(blockAuthorization);
}