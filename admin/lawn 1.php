<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lawn 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .highlight {
            background-color: yellow;
        }
        .letter-highlight {
            border: 1px solid green;
        }
        .btn_select:hover{
            background-color: red;
        }
        .btn_select{
            background-color: green;
        }

    </style>
    
</head>
<body >
    <div style=" display:flex;  justify-content: center; align-items: center" class="pt-3">
        <input type="text" id="searchInput" class="w-25 form-control mt-2 me-2" placeholder="Enter search term">
        <button onclick="highlightBlock()" class="btn btn-success mt-2">Search</button>
        <a href="#" class="btn btn-primary mt-2 ms-2 btn-success" onclick="history.back(); return false;">Exit</a>
    </div>
<div id="zoom-container">
    
        
<!-- lawn 1 map -->
<div style="display: flex; flex-direction: row; justify-content: center; height: 80%; width: 100%; overflow-x: scroll; overflow-y: scroll; ">
    <div id="zoom-content">
        <div style="position: relative; width: 100%; height: 100%;">
            <div class="content" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; ">
            <div style="height: 300px; width: 100px; display: flex; flex-direction: column; margin: 320px 100px 100px 150px;">
                        <div>
                            <div id="map" style="display: flex; flex-direction: row-reverse;  width: 160px" class="py-1">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div value="1A" class=" p-1 btn_select me-1" style="font-size: 8px">A</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div value="1B" class=" p-1 btn_select me-1" style="font-size: 8px">B</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div value="1C" class=" p-1 btn_select me-1" style="font-size: 8px">C</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div value="1D" class=" p-1 btn_select me-1" style="font-size: 8px">D</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div value="1E" class=" p-1 btn_select me-1" style="font-size: 8px">E</div></a>
                                <!-- <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">F</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">G</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">H</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">I</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">J</div></a> -->
                                
                            </div>
                            <div id="map" style="display: flex; flex-direction: row-reverse; width: 160px">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div value="1K" class=" p-1 btn_select me-1" style="font-size: 8px">K</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div value="1L" class=" p-1 btn_select me-1" style="font-size: 8px">L</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div value="1M" class=" p-1 btn_select me-1" style="font-size: 8px">M</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div value="1N" class=" p-1 btn_select me-1" style="font-size: 8px">N</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div value="1O" class=" p-1 btn_select me-1" style="font-size: 8px">0</div></a>
                                <!-- <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">N</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">O</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">P</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">Q</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">R</div></a> -->
                            </div>
                        </div>
                        <div>
                            <div id="map" style="display: flex; flex-direction: row-reverse;  width: 160px" class="py-1">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div value="2A" class=" p-1 btn_select me-1" style="font-size: 8px">A</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div value="2B" class=" p-1 btn_select me-1" style="font-size: 8px">B</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div value="2C" class=" p-1 btn_select me-1" style="font-size: 8px">C</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div value="2D" class=" p-1 btn_select me-1" style="font-size: 8px">D</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div value="2E" class=" p-1 btn_select me-1" style="font-size: 8px">E</div></a>
                                <!-- <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">F</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">G</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">H</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">I</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">J</div></a> -->
                                
                            </div>
                            <div id="map" style="display: flex; flex-direction: row-reverse; width: 160px">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div value="2K" class=" p-1 btn_select me-1" style="font-size: 8px">K</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div value="2L" class=" p-1 btn_select me-1" style="font-size: 8px">L</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div value="2M" class=" p-1 btn_select me-1" style="font-size: 8px">M</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div value="2N" class=" p-1 btn_select me-1" style="font-size: 8px">N</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div value="2O" class=" p-1 btn_select me-1" style="font-size: 8px">O</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div value="2P" class=" p-1 btn_select me-1" style="font-size: 8px">P</div></a>
                                <!-- <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">Q</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">R</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">S</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">T</div></a> -->
                            </div>
                        </div>
                        <div>
                            <div id="map" style="display: flex; flex-direction: row-reverse;  width: 160px" class="py-1">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div value="2A" class=" p-1 btn_select me-1" style="font-size: 8px">A</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div value="2B" class=" p-1 btn_select me-1" style="font-size: 8px">B</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div value="2C" class=" p-1 btn_select me-1" style="font-size: 8px">C</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div value="2D" class=" p-1 btn_select me-1" style="font-size: 8px">D</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div value="2E" class=" p-1 btn_select me-1" style="font-size: 8px">E</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div value="2F" class=" p-1 btn_select me-1" style="font-size: 8px">F</div></a>
                                <!-- <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">G</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">H</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">I</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">J</div></a> -->
                                
                            </div>
                            <div id="map" style="display: flex; flex-direction: row-reverse; width: 160px">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">K</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">L</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">M</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">N</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">O</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">P</div></a>
                                <!-- <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">G</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">H</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">I</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">J</div></a> -->
                            </div>
                        </div>
                        <div>
                            <div id="map" style="display: flex; flex-direction: row-reverse;  width: 160px" class="py-1">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">A</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">B</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">C</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">D</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">E</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">F</div></a>
                                <!-- <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">G</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">H</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">I</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">J</div></a> -->
                                
                            </div>
                            <div id="map" style="display: flex; flex-direction: row-reverse; width: 160px">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">K</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">L</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">M</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">N</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">O</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">P</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">Q</div></a>
                                <!-- <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">H</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">I</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">J</div></a> -->
                            </div>
                        </div>
                        <div>
                            <div id="map" style="display: flex; flex-direction: row-reverse;  width: 160px" class="py-1">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">A</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">B</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">C</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">D</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">E</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">F</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">G</div></a>
                                <!-- <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">H</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">I</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">J</div></a> -->
                                
                            </div>
                            <div id="map" style="display: flex; flex-direction: row-reverse; width: 160px">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">K</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">L</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">M</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">N</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">O</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">P</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">Q</div></a>
                                <!-- <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">H</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">I</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">J</div></a> -->
                            </div>
                        </div>
                        <div>
                            <div id="map" style="display: flex; flex-direction: row-reverse;  width: 160px" class="py-1">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">A</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">B</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">C</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">D</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">E</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">F</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">G</div></a>
                                <!-- <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">H</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">I</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">J</div></a> -->
                                
                            </div>
                            <div id="map" style="display: flex; flex-direction: row-reverse; width: 160px">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">K</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">L</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">M</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">N</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">O</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">P</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">Q</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">R</div></a>
                                <!-- <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">I</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">J</div></a> -->
                            </div>
                        </div>

                        
                </div>
                <div style="height: 300px; width: 100px; display: flex; flex-direction: column; margin: -428px 100px 100px 330px;">
                <div>
                            <div style="display: flex; flex-direction: row-reverse;  width: 160px" class="py-1">
                                <!-- <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">A</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">B</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">C</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">D</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">E</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">F</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">G</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">H</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">I</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">J</div></a> -->
                                
                            </div>
                            <div style="display: flex; flex-direction: row-reverse; width: 160px">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">A</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">B</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">C</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">D</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">E</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">F</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">G</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">H</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">I</div></a>
                                <!-- <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">J</div></a> -->
                            </div>
                        </div>
                        <div>
                            <div style="display: flex; flex-direction: row-reverse;  width: 160px" class="py-1">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">A</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">B</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">C</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">D</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">E</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">F</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">G</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">H</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">I</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">J</div></a>
                                
                            </div>
                            <div style="display: flex; flex-direction: row-reverse; width: 160px">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">K</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">L</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">M</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">N</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">O</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">P</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">Q</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">R</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">S</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">T</div></a>
                            </div>
                        </div>
                        <div>
                            <div style="display: flex; flex-direction: row-reverse;  width: 160px" class="py-1">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">A</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">B</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">C</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">D</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">E</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">F</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">G</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">H</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">I</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">J</div></a>
                                
                            </div>
                            <div style="display: flex; flex-direction: row-reverse; width: 160px">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">K</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">L</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">M</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">N</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">O</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">P</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">Q</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">R</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">S</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">T</div></a>
                            </div>
                        </div>
                        <div>
                            <div style="display: flex; flex-direction: row-reverse;  width: 160px" class="py-1">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">A</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">B</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">C</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">D</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">E</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">F</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">G</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">H</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">I</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">J</div></a>
                                
                            </div>
                            <div style="display: flex; flex-direction: row-reverse; width: 160px">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">K</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">L</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">M</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">N</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">O</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">P</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">Q</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">R</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">S</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">T</div></a>
                            </div>
                        </div>
                        <div>
                            <div style="display: flex; flex-direction: row-reverse;  width: 160px" class="py-1">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">A</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">B</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">C</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">D</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">E</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">F</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">G</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">H</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">I</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">J</div></a>
                                
                            </div>
                            <div style="display: flex; flex-direction: row-reverse; width: 160px">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">K</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">L</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">M</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">N</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">O</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">P</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">Q</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">R</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">S</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">T</div></a>
                            </div>
                        </div>
                        <div>
                            <div style="display: flex; flex-direction: row-reverse;  width: 160px" class="py-1">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">A</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">B</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">C</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">D</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">E</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">F</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">G</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">H</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">I</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">J</div></a>
                                
                            </div>
                            <div style="display: flex; flex-direction: row-reverse; width: 160px">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">K</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">L</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">M</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">N</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">O</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">P</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">Q</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">R</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">S</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">T</div></a>
                            </div>
                        </div>
                        <div>
                            <div style="display: flex; flex-direction: row-reverse;  width: 160px" class="py-1">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">A</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">B</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">C</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">D</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">E</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">F</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">G</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">H</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">I</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">J</div></a>
                                
                            </div>
                            <div style="display: flex; flex-direction: row-reverse; width: 160px">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">K</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">L</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">M</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">N</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">O</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">P</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">Q</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">R</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">S</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">T</div></a>
                            </div>
                        </div>

                        
                </div>
            </div>
            <div style="margin: 10px 100px 100px 100px;">
                <img src="../assets/map_css/MAP.png" alt="ff" style="height: 100%; width: auto;">
            </div>
        </div>
</div>
    </div>
</div>

<div style=" justify-content: center; display: flex" >    
    <div id="zoom-controls" class="mt-3">
    <button id="zoom-in" class="rounded rounded-5 btn border-success text-success">Zoom +</button>
    <button id="zoom-out" class="rounded rounded-5 btn border-success text-success">Zoom -</button>
    </div>
</div>

<script src="../jquery/zoom.js"></script>
<script src="../jquery/search_map.js"></script>
</body>
</html>