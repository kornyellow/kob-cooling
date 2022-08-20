let navigations = document.querySelectorAll(".nav-link");
console.log(navigations)
navigations.forEach((e) => {
	if (e.pathname === location.pathname) {
		e.classList.add("active");
	}
});
