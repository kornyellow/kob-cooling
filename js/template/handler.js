// Load page function
let loadPage = (file) => {
	if (pageCache[file] !== undefined) {
		mainBody.innerHTML = pageCache[file]
		return
	}

	let xhttp = new XMLHttpRequest()

	xhttp.onload = () => {
		pageCache[file] = xhttp.responseText
		mainBody.innerHTML = xhttp.responseText
	}

	xhttp.open("GET", "/contents/" + file + ".html", true)
	xhttp.send()
}

// Main Body
let pageToGo;
let mainBody = document.getElementById("main")
mainBody.addEventListener("transitionend", () => {
	if (pageToGo !== undefined) {
		mainBody.classList.remove("hide")
		loadPage(pageToGo)
		pageToGo = undefined
		return
	}
	mainBody.classList.remove("animate")
})

// Buttons
let homeButtons = document.querySelectorAll(".home")
let productsButtons = document.querySelectorAll(".products")
let servicesButtons = document.querySelectorAll(".services")
let worksButtons = document.querySelectorAll(".works")
let contactButtons = document.querySelectorAll(".contact")

let addRedirectEvent = (elements) => {
	elements.forEach((element) => {
		element.addEventListener("click", () => {
			if (element.classList.contains("active"))
				return
			if (mainBody.classList.contains("animate"))
				return

			window.history.pushState({}, null, element.classList[0]);

			toggleActive(lastActive)
			lastActive = toggleActive(elements)

			mainBody.classList.add("animate")
			mainBody.classList.add("hide")
			pageToGo = element.classList[0]

			Navigation.close()
			return
		})
	})
}

addRedirectEvent(homeButtons)
addRedirectEvent(productsButtons)
addRedirectEvent(servicesButtons)
addRedirectEvent(worksButtons)
addRedirectEvent(contactButtons)

// Applied default page (Home)
let toggleActive = (elements) => {
	elements.forEach((element) => element.classList.toggle("active"))
	return elements
}

let lastActive = toggleActive(homeButtons)
loadPage(pathname)
