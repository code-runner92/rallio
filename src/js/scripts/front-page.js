const swiper = new Swiper('.swiper-container', {
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
});

const scrollIcon = document.querySelector('.hero__scroll'),
afterHero = document.querySelector('section.hero + *');
scrollIcon.addEventListener('click', () => {
	afterHero.scrollIntoView();
});

const phaseArrows = document.querySelectorAll('.phase__arrow');
phaseArrows.forEach(arrow => {
	arrow.addEventListener('click', () => {
		const nextSection = arrow.closest('section').nextElementSibling;
		nextSection.scrollIntoView();
	})
});

const phaseMobileArrows = document.querySelectorAll('.phase__arrow--mobile');
phaseMobileArrows.forEach(arrow => {
	arrow.addEventListener('click', () => {
		const nextSection = arrow.closest('section').nextElementSibling;
		nextSection.scrollIntoView();
	})
});