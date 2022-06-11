let pageLists = [
	"/",
	"/products",
	"/services",
	"/works",
	"/contact",
]

let path = window.location.pathname
if (path != "/")
	path = window.location.pathname.replace(/\/+$/, '')

pageLists.forEach((page) => {
	if (path != page)
		return

	let buttons = document.querySelectorAll("a[href='" + page + "']")
	buttons.forEach((button) => {
		button.classList.add("active")
	})
})

let mobileNav = document.getElementById("mobileNavigation")
let mobileNavOverlay = document.getElementById("mobileNavigationOverlay")
mobileNav.addEventListener("transitionend", () => mobileNav.classList.remove("nav-animate"))

class Navigation {
	static open() {
		mobileNav.classList.add("nav-animate")
		mobileNav.classList.add("nav-show")
		mobileNavOverlay.classList.add("nav-overlay-show")
	}
	static close() {
		mobileNav.classList.add("nav-animate")
		mobileNav.classList.remove("nav-show")
		mobileNavOverlay.classList.remove("nav-overlay-show")
	}
}

let toggleButton = document.getElementById("mobileNavigationButton")
let overlay = document.getElementById("mobileNavigationOverlay")
toggleButton.addEventListener("click", () => Navigation.open())
overlay.addEventListener("click", () => Navigation.close())
