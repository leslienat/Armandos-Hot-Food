var staticURL = 'https://script.google.com/macros/s/AKfycbx5R83RGM4McNeHkNrBxIRjDuJj32VZr40ONQ5l5A/exec'

$.getJSON(staticURL, function(data) {
	console.log("Inside the function")
	console.log(data)
});

/* function menuTemplate(menu) {
	return
	<h2 class="menu-item">${menu.Item}</h2>
	<p class="menu-notes">${menu.Notes}</p>
	<p class="menu-price">${menu.Price}</p>
}

document.getElementById('menu').innerHTML = '
	<h1 class="menu-title">Menu (${Menu.length} results)</h1>
	${Menu.map(menuTemplate).join('')}
` */