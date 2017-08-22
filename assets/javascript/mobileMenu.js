define(function () {
    return function (element) {

        const mobileMenuButton = document.querySelector('.HamburgerContainer');

        const mobileMenu = document.querySelector('.Navigation.Mobile');
        const closeText = document.querySelector('.Navigation.Mobile .close');
        const body = document.getElementsByTagName('body')

        element.addEventListener('click', function () {
            mobileMenu.classList.toggle('MobileOpen')
            mobileMenuButton.classList.toggle('MobileActive')
            body[0].classList.toggle('MobileMenuActive')
        }, false)

        closeText.addEventListener('click', function () {
            mobileMenu.classList.toggle('MobileOpen')
            mobileMenuButton.classList.toggle('MobileActive')
            body[0].classList.toggle('MobileMenuActive')
        }, false)

    }
});
