if (!(document.cookie)) {
    document.body.innerHTML = `
        <h1 style="margin: 100px 0 60px 100px; font-size: 50px;">О нет, срок действия токена истёк!</h1>
        <p style="margin-left: 100px;">Попробуйте вернуться на <a href="index.html" style="color: red;">начальную страницу</a> и авторизироваться)</p>
    `;
}