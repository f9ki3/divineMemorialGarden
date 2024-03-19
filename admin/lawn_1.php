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
    </style>
    
</head>
<body style="overflow: hidden">
    <div style=" display:flex;  justify-content: center; align-items: center" class="pt-3">
        <input type="text" id="searchInput" class="w-25 form-control mt-2 me-2" placeholder="Enter search term">
        <button onclick="highlightBlock()" class="btn btn-primary mt-2 ">Search</button>
    </div>

    <!-- lawn 1 map -->
    <div style="display: flex; flex-direction: row; justify-content: center; height: 100vh; width: 100%;">
        <div style="display: flex; flex-direction:column; justify-content: center; align-items: end;">
            <!-- 52-59 -->
            <div  style="display: flex; flex-direction: row;">
            
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid white; height: 9px; width: 100%; font-size: 5px; text-align: center"></div>
                        <div style="border: 1px solid white; height: 9px; width: 100%; font-size: 5px; text-align: center"></div>
                        <div style="border: 1px solid white; height: 9px; width: 100%; font-size: 5px; text-align: center"></div>
                        <div style="border: 1px solid white; height: 9px; width: 100%; font-size: 5px; text-align: center"></div>
                        <div style="border: 1px solid white; height: 9px; width: 100%; font-size: 5px; text-align: center"></div>
                        <div style="border: 1px solid white; height: 9px; width: 100%; font-size: 5px; text-align: center"></div>
                        <div style="border: 1px solid white; height: 9px; width: 100%; font-size: 5px; text-align: center"></div>
                        <div style="border: 1px solid white; height: 9px; width: 100%; font-size: 5px; text-align: center"></div>
                        <div style="border: 1px solid white; height: 9px; width: 100%; font-size: 5px; text-align: center"></div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">52</div>
                </div>
                <div id="container" style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div class="letter-highlight" style="height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div class="letter-highlight" style="height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div class="letter-highlight" style="height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div class="letter-highlight" style="height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div class="letter-highlight" style="height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div class="letter-highlight" style="height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div class="letter-highlight" style="height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div class="letter-highlight" style="height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div class="letter-highlight" style="height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div class="letter-highlight" style="height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div class="letter-highlight" style="height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div class="letter-highlight" style="height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div class="letter-highlight" style="height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div class="letter-highlight" style="height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div class="letter-highlight" style="height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div class="letter-highlight" style="height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div class="letter-highlight" style="height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div class="letter-highlight" style="height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div class="letter-highlight" style="height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div class="letter-highlight" style="height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <div id="highlighted" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">53</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">54</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">55</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">56</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">57</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">58</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">59</div>
                </div>
                
                <div style="border: 1px solid white; background-color: white; height: 95px; width: 50px;"></div>
            </div>
            <!-- 43-48 -->
            <div style="display: flex; flex-direction: row;">
            
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">44</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">45</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">46</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">47</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <!-- <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div> -->
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">48</div>
                </div>
                <div style="border: 1px solid green; background-color: green; height: 95px; width: 205.5px; display: flex; justify-content: center; align-items: center;">
                    Multipurpose Area
                </div>

                
            </div>
            <!-- 38-43 -->
            <div style="display: flex; flex-direction: row;">
            <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <!-- <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div> -->
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <!-- <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div> -->
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">38</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <!-- <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div> -->
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">39</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">40</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">41</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">42</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <!-- <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div> -->
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">43</div>
                </div>
                <div style="border: 1px solid green; background-color: green; height: 95px; width: 205.5px;">
                </div>
            </div>
            
            <!-- 21 to 28 -->
            <div style="display: flex; flex-direction: row;">
            <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <!-- <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div> -->
                    </div>
                    <div style="width: 49%">
                        <!-- <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div> -->
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">29</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <!-- <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div> -->
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">30</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">31</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <!-- Overlay div -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">32</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <!-- Overlay div -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">33</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <!-- Overlay div -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">34</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <!-- Overlay div -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">35</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <!-- Overlay div -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">36</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <!-- Overlay div -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">37</div>
                </div>
                
            </div>
            <!-- 21 to 28 -->
            <div style="display: flex; flex-direction: row;">
            <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <!-- <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div> -->
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <!-- <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div> -->
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">21</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">22</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <!-- Overlay div -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">23</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <!-- Overlay div -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">24</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <!-- Overlay div -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">25</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <!-- Overlay div -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">26</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <!-- Overlay div -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">27</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <!-- Overlay div -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">28</div>
                </div>
                
            </div>
            <!-- 14 to 20 -->
            <div style="display: flex; flex-direction: row;">
            <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <!-- <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div> -->
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">14</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <!-- Overlay div -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">15</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <!-- Overlay div -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">16</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <!-- Overlay div -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">17</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <!-- Overlay div -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">18</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <!-- Overlay div -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">19</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <!-- Overlay div -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">20</div>
                </div>
                
            </div>
            <!-- 7 to 13 -->
            <div style="display: flex; flex-direction: row;">
            <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <!-- <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div> -->
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">7</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <!-- Overlay div -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">8</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <!-- Overlay div -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">9</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <!-- Overlay div -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">10</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <!-- Overlay div -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">11</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <!-- Overlay div -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">12</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <!-- Overlay div -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">13</div>
                </div>
            </div>
            <!-- 1 to 6 -->
            <div style="display: flex; flex-direction: row;">
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                        <div style="width: 49%">
                            <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                            <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                            <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                            <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                            <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                            <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                            <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                            <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                            <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                            <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                        </div>
                        <div style="width: 49%">
                            <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                            <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                            <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                            <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                            <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                            <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                            <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                            <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                            <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                            <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                        </div>
                        <!-- Overlay div -->
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">1</div>
                    </div>
                    <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <!-- Overlay div -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">2</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <!-- Overlay div -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">3</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <!-- Overlay div -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center;  z-index: 1; font-size: 20; color: red">4</div>
                </div>
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row;  position: relative">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <!-- Overlay div -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">5</div>
                </div>
                
                <div style="border: 1px solid red; height: 95px; width: 50px; display: flex; flex-direction: row; position: relative;">
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">A</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">B</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">C</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">D</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">E</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">F</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">G</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">H</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">I</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">J</div>
                    </div>
                    <div style="width: 49%">
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">K</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">L</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">M</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">N</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">O</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">P</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">Q</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">R</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">S</div>
                        <div style="border: 1px solid green; height: 9px; width: 100%; font-size: 5px; text-align: center">T</div>
                    </div>
                    <!-- Overlay div -->
                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 1; font-size: 20; color: red">6</div>
                </div>

            </div>
        </div>


    </div>
    <script>
    // Highlight function
    function highlightBlock() {
        var searchInput = document.getElementById("searchInput").value;
        var container = document.getElementById("container");
        var highlighted = document.getElementById("highlighted");
        
        // Reset previous highlights
        container.classList.remove("highlight");
        highlighted.innerHTML = "";
        
        // Highlight block containing search term
        if (searchInput === "53") {
            container.classList.add("highlight");
            highlighted.innerHTML = "<span style='color: green;'>53</span>";
        }
    }
</script>
</body>
</html>