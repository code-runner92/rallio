const header = document.querySelector('.header'),
menuToggler = header.querySelector('.menu-toggler'),
menu = header.querySelector('.header-menu');

menuToggler.addEventListener('click', () => {
	header.classList.toggle('visible');
	menuToggler.classList.toggle('x');
});


const loginLink = menu.querySelector('.login a');
loginLink.innerHTML = '<img src="/wp-content/themes/rallio/dist/img/icons/LOGIN.svg" />';

document.addEventListener('scroll', () => {
  checkScroll();
});

const checkScroll = () => {
    const top = 200;
    if (document.scrollingElement.scrollTop >= top) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
}

checkScroll();