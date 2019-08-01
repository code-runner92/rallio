const menuToggler = document.querySelector('.menu-toggler'),
menu = document.querySelector('.header-menu');

menuToggler.addEventListener('click', () => {
	menu.classList.toggle('visible');
});