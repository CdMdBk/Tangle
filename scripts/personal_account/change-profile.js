const buttonEditProfile = $('.my-profile__cell-change_appearance');
const buttonSaveProfile = $('.my-profile__submit_appearance');
const formData = $('form.my-profile__container');

buttonEditProfile.click(toggleEditProfile);
buttonSaveProfile.click(toggleEditProfile);
formData.submit(event => {
    event.preventDefault();
})

function toggleEditProfile() {
    $('div.my-profile__container').toggleClass('my-profile__container_inactive');
    formData.toggleClass('my-profile__container_inactive');
}