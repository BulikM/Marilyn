let items = document.querySelectorAll('.carousel-9 .carousel-item')

items.forEach((el) => {
	const minPerSlide = 9
	let next = el.nextElementSibling
	for (var i=1; i<minPerSlide; i++) {
		if (!next) {
			// wrap carousel by using first child
			next = items[0]
		}
		let cloneChild = next.cloneNode(true)
		el.appendChild(cloneChild.children[0])
		next = next.nextElementSibling
	}
})

// carousel-4
let items4 = document.querySelectorAll('.carousel-4 .carousel-item')

items4.forEach((el) => {
    const minPerSlide = 4
    let next = el.nextElementSibling
    for (var i=1; i<minPerSlide; i++) {
        if (!next) {
            // wrap carousel by using first child
            next = items[0]
        }
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
})

// scrol to top
const scrollBtn = document.querySelector(".scrollBtn");
const btnVisibility = () => {
	if (window.scrollY > 400) {
		scrollBtn.style.visibility = "visible";
	} else {
		scrollBtn.style.visibility = "hidden";
	}
};
document.addEventListener("scroll", () => {
	btnVisibility();
});
scrollBtn.addEventListener("click", () => {
	window.scrollTo({
		top: 0,
		behavior: "smooth"
	});
});

