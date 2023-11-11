fetch('https://tangle.cargotrace.ru/api/groups').then(response => {
    return response.json();
}).then(arrayGroups => {
    substituteGroups(arrayGroups);
    getCategories();
});

function getCategories() {
    document.querySelectorAll('.donation__purpose-radio_appearance[data-groups]').forEach((label, index) => {
        label.addEventListener('click', () => {
            fetch(`https://tangle.cargotrace.ru/api/groups/${index + 1}/categories`).then(response => {
                return response.json();
            }).then(arrayCategories => {
                substituteCategories(arrayCategories);
                substituteEntities(arrayCategories);
            });
        });
    });
}

function substituteGroups(data) {
    document.querySelectorAll('.donation__purpose-radio_appearance[data-groups]').forEach((label, index) => {
        label.textContent = data[index].name
        document.querySelectorAll('.donation__purpose-radio[name="groups"]')[index].value = data[index].name;
    });
}

function substituteCategories(data) {
    document.querySelector('.donation__purpose-direction:nth-child(2)').innerHTML = '';
    document.querySelector('.donation__purpose-direction:nth-child(3)').innerHTML = '';

    for (let i = 0; i < data.length; i++) {
        document.querySelector('.donation__purpose-direction:nth-child(2)').innerHTML += `
            <fieldset class="donation__purpose-cell" data-some>
                <input class="donation__purpose-some"
                       id="categories-${data[i].id}"
                       name="categories"
                       type="radio"
                       required>
    
                <label class="donation__purpose-some_appearance"
                       for="categories-${data[i].id}"
                       data-categories>
                    ${data[i].name}
                </label>
            </fieldset>
        `;

        document.querySelectorAll('.donation__purpose-some[name="categories"]')[i].value = data[i].name;
    }

    setColorLabel('.donation__purpose-some[name="categories"]', '.donation__purpose-some_appearance', 'donation__purpose-some_appearance_checked');
}

function substituteEntities(data) {
    document.querySelectorAll('.donation__purpose-some_appearance[data-categories]').forEach((label, index) => {
        label.addEventListener('click', () => {
            document.querySelector('.donation__purpose-direction:nth-child(3)').innerHTML = '';

            for (let i = 0; i < data[index].entities.length; i++) {
                document.querySelector('.donation__purpose-direction:nth-child(3)').innerHTML += `
                    <fieldset class="donation__purpose-cell" data-some>
                        <input class="donation__purpose-some"
                               id="entities-${data[index].entities[i].id}"
                               name="entities"
                               type="radio"
                               required>
        
                        <label class="donation__purpose-some_appearance"
                               for="entities-${data[index].entities[i].id}"
                               data-entities>
                            ${data[index].entities[i].name}
                        </label>
                    </fieldset>
                `;

                document.querySelectorAll('.donation__purpose-some[name="entities"]')[i].value = data[index].entities[i].name;
            }

            setColorLabel('.donation__purpose-some[name="entities"]', '.donation__purpose-some_appearance[data-entities]', 'donation__purpose-some_appearance_checked');
        });
    });
}