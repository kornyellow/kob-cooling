let navigations = document.querySelectorAll(".nav-link");
navigations.forEach((e) => {
	if (e.pathname === location.pathname) {
		e.classList.add("active");
	}
});
