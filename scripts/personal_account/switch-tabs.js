const buttonInternalUl = $('.account-header__li_arrow');
const listPopUp = $('.account-header__li[data-pop-up-nav]');

buttonInternalUl.click(() => {
    $('.account-header__internal-ul').toggleClass('account-header__internal-ul_active');
    listPopUp.toggleClass('account-header__li_internal-active');
    buttonInternalUl.toggleClass('account-header__li_arrow_active');
});

const buttonMyProfile = $('.account-header__li:first-child');
const buttonDonation = $('.account-header__internal-li:first-child');

const blockMyProfile = $('.my-profile');
const blockDonation = $('.donation');

buttonMyProfile.click(() => {
    blockMyProfile.show();
    blockDonation.hide();
    buttonMyProfile.addClass('account-header__li_active');
    buttonDonation.removeClass('account-header__li_active');
});

buttonDonation.click(() => {
    blockMyProfile.hide();
    blockDonation.show();
    buttonDonation.addClass('account-header__li_active');
    buttonMyProfile.removeClass('account-header__li_active');
});