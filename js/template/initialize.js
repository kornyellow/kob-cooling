// Cache
let pageCache = new Array();

// Load default page (Home)
let xhttp = new XMLHttpRequest()

xhttp.onload = () => pageCache["home"] = xhttp.responseText
xhttp.open("GET", "/contents/home.html")
xhttp.send()

