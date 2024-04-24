
function highlightBlock() {
    searchAndChangeColor();
}

document.getElementById('searchInput').addEventListener('keydown', function(event) {
    if (event.key === 'Enter') {
        searchAndChangeColor();
    }
});

function searchAndChangeColor() {
    var searchTerm = document.getElementById('searchInput').value.trim().toUpperCase();
    if (searchTerm === '') {
        alert('Please enter a search term.');
        var mapDivs = document.querySelectorAll('#map div');
        mapDivs.forEach(function(div) {
            div.style.backgroundColor = 'transparent'; // Set background color of each div to transparent
        });
        return; // Exit function if search term is empty
    }
    
    var mapDivs = document.querySelectorAll('#map div');
    var found = false;
    mapDivs.forEach(function(div) {
        var divValue = div.getAttribute('value').toUpperCase();
        if (divValue.includes(searchTerm)) {
            found = true;
            div.style.backgroundColor = 'orange';
        } else {
            div.style.backgroundColor = 'transparent';
        }
    });
    if (!found) {
        alert('No result found.');
    }
}