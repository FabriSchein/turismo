window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("abajo",window.scrollY>0);
})

function filterItems() {
    var categoryCheckboxes = document.querySelectorAll('.filters input[type="checkbox"][id^="filter-"]:checked');
    var locationCheckboxes = document.querySelectorAll('.filters input[type="checkbox"][id^="filter-location-"]:checked');

    var selectedCategories = Array.from(categoryCheckboxes).map(function (checkbox) {
        return checkbox.id.replace('filter-', '');
    });

    var selectedLocations = Array.from(locationCheckboxes).map(function (checkbox) {
        return checkbox.id.replace('filter-location-', '');
    });

    var items = document.querySelectorAll('.item');

    items.forEach(function (item) {
        var categories = item.getAttribute('data-categories').split(' ');
        var locations = item.getAttribute('data-locations').split(' ');

        var categoryMatch = selectedCategories.length === 0 || selectedCategories.some(function (category) { return categories.includes(category); });
        var locationMatch = selectedLocations.length === 0 || selectedLocations.some(function (location) { return locations.includes(location); });

        item.style.display = categoryMatch && locationMatch ? 'block' : 'none';
    });
}

filterItems(); // Aplicar los filtros al cargar la página
