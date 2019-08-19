const body = document.querySelector('body'),
categories = document.querySelectorAll('.blog-filter'),
all = document.querySelector('.blog-filter.all');

if (body.classList.contains('blog')) {
	all.classList.add('active');
}

categories.forEach(category => {
	category.addEventListener('click', () => {
		category.classList.add('active');
	})
})