const body = document.querySelector('body'),
categories = document.querySelectorAll('.blog-filter'),
all = document.querySelector('.blog-filter.all');

if (body.classList.contains('blog')) {
	const urlParams = new URLSearchParams(window.location.search);
	const cat = urlParams.get('cat');
	if (cat) {
		categories.forEach(category => {
			if (category.dataset.id === cat) {
				category.classList.add('active');
			}
		});
	} else {
		all.classList.add('active');
	}
}