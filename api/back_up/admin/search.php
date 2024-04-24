<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <style>
        #map div {
            background-color: green;
            width: 5%;
            display: inline-block;
            margin: 2px;
            text-align: center;
            line-height: 30px;
            color: white;
        }
    </style>
</head>
<body>
    <input type="text" id="searchInput" class="w-25 form-control mt-2 me-2" placeholder="Enter search term">
    <button onclick="highlightBlock()" class="btn btn-success mt-2">Search</button>
    <div id="map">
        <div value="1A">1</div>
        <div value="1B">2</div>
        <div value="1C">3</div>
        <div value="1D">4</div>
        <div value="1E">5</div>
        <div value="1F">6</div>
        <div value="1G">7</div>
    </div>

    <script>
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
            var mapDivs = document.querySelectorAll('#map div');
            var found = false;
            mapDivs.forEach(function(div) {
                var divValue = div.getAttribute('value').toUpperCase();
                if (divValue.includes(searchTerm)) {
                    found = true;
                    div.style.backgroundColor = 'yellow';
                } else {
                    div.style.backgroundColor = 'green';
                }
            });
            if (!found) {
                alert('No result found.');
            }
        }
    </script>
</body>
</html>
