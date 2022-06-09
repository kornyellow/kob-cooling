// Cache
let pageCache = new Array()

// Page now
let pages = [
	"home", "products", "services",
	"works", "contact"
]

// Load default page
let pathname = "home"
if (localStorage.pathnameRequest !== undefined) {
	pathname = localStorage.pathnameRequest.replace("/", "")
	localStorage.removeItem("pathnameRequest")
}
window.history.pushState({}, null, pathname);

if (!pages.includes(pathname)) {
	pathname = "error"
}

let xhttp = new XMLHttpRequest();
xhttp.onload = () => pageCache[pathname] = xhttp.responseText
xhttp.open("GET", "/contents/" + pathname + ".html")
xhttp.send()

