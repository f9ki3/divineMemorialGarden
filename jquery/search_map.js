
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
            div.style.backgroundColor = 'green'; // Set background color of each div to green
        });
        return; // Exit function if search term is empty
    }
    
    var mapDivs = document.querySelectorAll('#map div');
    var found = false;
    mapDivs.forEach(function(div) {
        var divValue = div.getAttribute('value').toUpperCase();
        if (divValue.includes(searchTerm)) {
            found = true;
            div.style.backgroundColor = 'red';
        } else {
            div.style.backgroundColor = 'green';
        }
    });
    if (!found) {
        alert('No result found.');
    }
}