const swiper = new Swiper('.swiper-container', {
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
});

const scrollIcon = document.querySelector('.hero__scroll'),
afterHero = document.querySelector('section.hero + *');
if (scrollIcon) {
	scrollIcon.addEventListener('click', () => {
		afterHero.scrollIntoView();
	});
}

const phaseArrows = document.querySelectorAll('.phase__arrow');
if (phaseArrows) {
	phaseArrows.forEach(arrow => {
		arrow.addEventListener('click', () => {
			const nextSection = arrow.closest('section').nextElementSibling;
			nextSection.scrollIntoView();
		})
	});
}

const phaseMobileArrows = document.querySelectorAll('.phase__arrow--mobile');
if (phaseMobileArrows) {
	phaseMobileArrows.forEach(arrow => {
		arrow.addEventListener('click', () => {
			const nextSection = arrow.closest('section').nextElementSibling;
			nextSection.scrollIntoView();
		})
	});
}
