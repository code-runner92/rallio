const circlelize = (container) => {
	const circlesContainer = document.querySelector('.circles');
	const containerHeight = container.clientHeight;
	const NoOfCircles = 5 * Math.round( containerHeight / window.screen.width );
	console.log(NoOfCircles);
	let circles = '';

	for (let i=0; i < NoOfCircles; i++) {
		const width = Math.floor(Math.random() * (100 - 70 + 1) ) + 70,
		height = width,
		left = Math.floor(Math.random() * (100 - 0 + 1) ) - 30,
		top = Math.floor(Math.random() * (130 - 0 + 1) ) - 40,
		angle = Math.floor(Math.random() * (360- 0 + 1) );

		circles += `<div class="circle" style="width: ${width}vw; height: ${height}vw; left: ${left}%; top: ${top}%; background: linear-gradient(${angle}deg, rgba(255,255,255, 0) 0%, rgba(0,0,0, 0.03) 100%);"></div>`;
	}

	circlesContainer.innerHTML = circles;
}

const blogContainer = document.querySelector('.blog-container');
if (blogContainer) {
	circlelize(blogContainer);
}

const postContainer = document.querySelector('.post-container');
if (postContainer) {
	circlelize(postContainer);
}

const aboutContainer = document.querySelector('.about-container');
if (aboutContainer) {
	circlelize(aboutContainer);
}

const localContainer = document.querySelector('.local-container');
if (localContainer) {
	circlelize(localContainer);
}
