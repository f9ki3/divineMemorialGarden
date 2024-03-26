// Get all the search result elements
var results = document.querySelectorAll('.result');

// Add a click event listener to each search result element
results.forEach(function(result) {
    result.addEventListener('click', function() {
        // Get the title and description of the clicked search result
        var title = this.querySelector('h2').innerText;
        var description = this.querySelector('p').innerText;
        
        // Set the title and description of the pop-up box
        document.getElementById('popup-title').innerText = title;
        document.getElementById('popup-description').innerText = description;
        
        // Display the pop-up box
        document.querySelector('.popup-box').style.display = 'block';
    });
});

// Add a click event listener to the pop-up box to hide it
document.querySelector('.popup-box').addEventListener('click', function() {
    this.style.display = 'none';
});
