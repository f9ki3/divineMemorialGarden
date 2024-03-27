<html lang="en">

<body >
<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
    
    <div class="pt-3 container d-flex justify-content-between">
        <div class="w-50">
            <div class="pt-2"><a href="area">Area</a> ><a href="area_info">Owner List</a> ><a href="lawn 1">Map</a></div>
        </div>
        <div class="d-flex flex-row w-100 justify-content-end">
            <input type="text" id="searchInput" class="w-50 form-control mt-2 me-2" placeholder="Search block and lot">
            <button onclick="highlightBlock()" class="btn btn-success mt-2">Search</button>
            <a href="area_info" class="btn btn-primary mt-2 ms-2 btn-success">Exit</a>
        </div>
        
    </div>
<div id="zoom-container">
    
        
<!-- lawn 1 map -->
<div style="display: flex; flex-direction: row; justify-content: center; height: 80%; width: 100%; overflow-x: scroll; overflow-y: scroll; ">
    <div id="zoom-content">
        <div style="position: relative; width: 100%; height: 100%;">
            <div class="content" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; ">
            <div style="height: 300px; width: 100px; display: flex; flex-direction: column; margin: 320px 100px 100px 170px;">
                        <div>
                            <div id="map" style="display: flex; flex-direction: row-reverse;  width: 160px" class="py-1">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div value="1A" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">A</div></a>
                                <a href="view_lot?id=2" style="text-decoration: none; color: white"><div value="1B" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">B</div></a>
                                <a href="view_lot?id=3" style="text-decoration: none; color: white"><div value="1C" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">C</div></a>
                                <a href="view_lot?id=4" style="text-decoration: none; color: white"><div value="1D" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">D</div></a>
                                <a href="view_lot?id=5" style="text-decoration: none; color: white"><div value="1E" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">E</div></a>
                                <!-- <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">F</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">G</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">H</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">I</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">J</div></a> -->
                                
                            </div>
                            <div id="map" style="display: flex; flex-direction: row-reverse; width: 160px">
                                <a href="view_lot?id=6" style="text-decoration: none; color: white"><div value="1K" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">K</div></a>
                                <a href="view_lot?id=7" style="text-decoration: none; color: white"><div value="1L" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">L</div></a>
                                <a href="view_lot?id=8" style="text-decoration: none; color: white"><div value="1M" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">M</div></a>
                                <a href="view_lot?id=9" style="text-decoration: none; color: white"><div value="1N" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">N</div></a>
                                <a href="view_lot?id=10" style="text-decoration: none; color: white"><div value="1O" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">0</div></a>
                                <!-- <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">N</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">O</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">P</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">Q</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">R</div></a> -->
                            </div>
                        </div>
                        <div>
                            <div id="map" style="display: flex; flex-direction: row-reverse;  width: 160px" class="py-1">
                                <a href="view_lot?id=11" style="text-decoration: none; color: white"><div value="2A" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">A</div></a>
                                <a href="view_lot?id=12" style="text-decoration: none; color: white"><div value="2B" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">B</div></a>
                                <a href="view_lot?id=13" style="text-decoration: none; color: white"><div value="2C" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">C</div></a>
                                <a href="view_lot?id=14" style="text-decoration: none; color: white"><div value="2D" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">D</div></a>
                                <a href="view_lot?id=15" style="text-decoration: none; color: white"><div value="2E" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">E</div></a>
                                <!-- <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">F</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">G</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">H</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">I</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">J</div></a> -->
                                
                            </div>
                            <div id="map" style="display: flex; flex-direction: row-reverse; width: 160px">
                                <a href="view_lot?id=16" style="text-decoration: none; color: white"><div value="2K" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">K</div></a>
                                <a href="view_lot?id=17" style="text-decoration: none; color: white"><div value="2L" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">L</div></a>
                                <a href="view_lot?id=18" style="text-decoration: none; color: white"><div value="2M" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">M</div></a>
                                <a href="view_lot?id=19" style="text-decoration: none; color: white"><div value="2N" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">N</div></a>
                                <a href="view_lot?id=20" style="text-decoration: none; color: white"><div value="2O" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">O</div></a>
                                <a href="view_lot?id=21" style="text-decoration: none; color: white"><div value="2P" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">P</div></a>
                                <!-- <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">Q</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">R</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">S</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">T</div></a> -->
                            </div>
                        </div>
                        <div>
                            <div id="map" style="display: flex; flex-direction: row-reverse;  width: 160px" class="py-1">
                                <a href="view_lot?id=22" style="text-decoration: none; color: white"><div value="3A" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">A</div></a>
                                <a href="view_lot?id=23" style="text-decoration: none; color: white"><div value="3B" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">B</div></a>
                                <a href="view_lot?id=24" style="text-decoration: none; color: white"><div value="3C" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">C</div></a>
                                <a href="view_lot?id=25" style="text-decoration: none; color: white"><div value="3D" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">D</div></a>
                                <a href="view_lot?id=26" style="text-decoration: none; color: white"><div value="3E" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">E</div></a>
                                <a href="view_lot?id=27" style="text-decoration: none; color: white"><div value="3F" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">F</div></a>
                                <!-- <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">G</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">H</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">I</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">J</div></a> -->
                                
                            </div>
                            <div id="map" style="display: flex; flex-direction: row-reverse; width: 160px">
                                <a href="view_lot?id=28" style="text-decoration: none; color: white"><div value="3K" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">K</div></a>
                                <a href="view_lot?id=29" style="text-decoration: none; color: white"><div value="3L" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">L</div></a>
                                <a href="view_lot?id=30" style="text-decoration: none; color: white"><div value="3M" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">M</div></a>
                                <a href="view_lot?id=31" style="text-decoration: none; color: white"><div value="3N" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">N</div></a>
                                <a href="view_lot?id=32" style="text-decoration: none; color: white"><div value="3O" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">O</div></a>
                                <a href="view_lot?id=33" style="text-decoration: none; color: white"><div value="3P" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">P</div></a>
                                <!-- <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">H</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">I</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">J</div></a> -->
                            </div>
                        </div>
                        <div>
                            <div id="map" style="display: flex; flex-direction: row-reverse;  width: 160px" class="py-1">
                                <a href="view_lot?id=34" style="text-decoration: none; color: white"><div value="4A" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">A</div></a>
                                <a href="view_lot?id=35" style="text-decoration: none; color: white"><div value="4B" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">B</div></a>
                                <a href="view_lot?id=36" style="text-decoration: none; color: white"><div value="4C" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">C</div></a>
                                <a href="view_lot?id=37" style="text-decoration: none; color: white"><div value="4D" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">D</div></a>
                                <a href="view_lot?id=38" style="text-decoration: none; color: white"><div value="4E" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">E</div></a>
                                <a href="view_lot?id=39" style="text-decoration: none; color: white"><div value="4F" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">F</div></a>
                                <!-- <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">H</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">I</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">J</div></a> -->
                                
                            </div>
                            <div id="map" style="display: flex; flex-direction: row-reverse; width: 160px">
                                <a href="view_lot?id=40" style="text-decoration: none; color: white"><div value="4K" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">K</div></a>
                                <a href="view_lot?id=41" style="text-decoration: none; color: white"><div value="4L" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">L</div></a>
                                <a href="view_lot?id=42" style="text-decoration: none; color: white"><div value="4M" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">M</div></a>
                                <a href="view_lot?id=43" style="text-decoration: none; color: white"><div value="4N" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">N</div></a>
                                <a href="view_lot?id=44" style="text-decoration: none; color: white"><div value="4O" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">O</div></a>
                                <a href="view_lot?id=45" style="text-decoration: none; color: white"><div value="4P" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">P</div></a>
                                <a href="view_lot?id=46" style="text-decoration: none; color: white"><div value="4Q" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">Q</div></a>
                                <!-- <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">H</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">I</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">J</div></a> -->
                            </div>
                        </div>
                        <div>
                            <div id="map" style="display: flex; flex-direction: row-reverse;  width: 160px" class="py-1">
                                <a href="view_lot?id=47" style="text-decoration: none; color: white"><div value="5A" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">A</div></a>
                                <a href="view_lot?id=48" style="text-decoration: none; color: white"><div value="5B" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">B</div></a>
                                <a href="view_lot?id=49" style="text-decoration: none; color: white"><div value="5C" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">C</div></a>
                                <a href="view_lot?id=50" style="text-decoration: none; color: white"><div value="5D" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">D</div></a>
                                <a href="view_lot?id=51" style="text-decoration: none; color: white"><div value="5E" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">E</div></a>
                                <a href="view_lot?id=52" style="text-decoration: none; color: white"><div value="5F" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">F</div></a>
                                <a href="view_lot?id=53" style="text-decoration: none; color: white"><div value="5G" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">G</div></a>
                                <!-- <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">H</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">I</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">J</div></a> -->
                                
                            </div>
                            <div id="map" style="display: flex; flex-direction: row-reverse; width: 160px">
                                <a href="view_lot?id=54" style="text-decoration: none; color: white"><div value="5K" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">K</div></a>
                                <a href="view_lot?id=55" style="text-decoration: none; color: white"><div value="5L" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">L</div></a>
                                <a href="view_lot?id=56" style="text-decoration: none; color: white"><div value="5M" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">M</div></a>
                                <a href="view_lot?id=57" style="text-decoration: none; color: white"><div value="5N" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">N</div></a>
                                <a href="view_lot?id=58" style="text-decoration: none; color: white"><div value="5O" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">O</div></a>
                                <a href="view_lot?id=59" style="text-decoration: none; color: white"><div value="5P" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">P</div></a>
                                <a href="view_lot?id=60" style="text-decoration: none; color: white"><div value="5Q" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">Q</div></a>
                                <!-- <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">H</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">I</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">J</div></a> -->
                            </div>
                        </div>
                        <div>
                            <div id="map" style="display: flex; flex-direction: row-reverse;  width: 160px" class="py-1">
                                <a href="view_lot?id=61" style="text-decoration: none; color: white"><div value="6A" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">A</div></a>
                                <a href="view_lot?id=62" style="text-decoration: none; color: white"><div value="6B" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">B</div></a>
                                <a href="view_lot?id=63" style="text-decoration: none; color: white"><div value="6C" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">C</div></a>
                                <a href="view_lot?id=64" style="text-decoration: none; color: white"><div value="6D" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">D</div></a>
                                <a href="view_lot?id=65" style="text-decoration: none; color: white"><div value="6E" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">E</div></a>
                                <a href="view_lot?id=66" style="text-decoration: none; color: white"><div value="6F" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">F</div></a>
                                <a href="view_lot?id=67" style="text-decoration: none; color: white"><div value="6G" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">G</div></a>
                                <!-- <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">H</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">I</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">J</div></a> -->
                                
                            </div>
                            <div id="map" style="display: flex; flex-direction: row-reverse; width: 160px">
                                <a href="view_lot?id=68" style="text-decoration: none; color: white"><div value="6K" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">K</div></a>
                                <a href="view_lot?id=69" style="text-decoration: none; color: white"><div value="6L" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">L</div></a>
                                <a href="view_lot?id=70" style="text-decoration: none; color: white"><div value="6M" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">M</div></a>
                                <a href="view_lot?id=71" style="text-decoration: none; color: white"><div value="6N" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">N</div></a>
                                <a href="view_lot?id=72" style="text-decoration: none; color: white"><div value="6O" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">O</div></a>
                                <a href="view_lot?id=73" style="text-decoration: none; color: white"><div value="6P" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">P</div></a>
                                <a href="view_lot?id=74" style="text-decoration: none; color: white"><div value="6Q" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">Q</div></a>
                                <a href="view_lot?id=75" style="text-decoration: none; color: white"><div value="6R" class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">R</div></a>
                                <!-- <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">I</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">J</div></a> -->
                            </div>
                        </div>

                        
                </div>
                <div style="height: 300px; width: 100px; display: flex; flex-direction: column; margin: -433px 100px 100px 370px;">
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
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">A</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">B</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">C</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">D</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">E</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">F</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">G</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">H</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">I</div></a>
                                <!-- <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px">J</div></a> -->
                            </div>
                        </div>
                        <div>
                            <div style="display: flex; flex-direction: row-reverse;  width: 160px" class="py-1">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">A</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">B</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">C</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">D</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">E</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">F</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">G</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">H</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">I</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">J</div></a>
                                
                            </div>
                            <div style="display: flex; flex-direction: row-reverse; width: 160px">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">K</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">L</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">M</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">N</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">O</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">P</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">Q</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">R</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">S</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">T</div></a>
                            </div>
                        </div>
                        <div>
                            <div style="display: flex; flex-direction: row-reverse;  width: 160px" class="py-1">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">A</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">B</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">C</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">D</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">E</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">F</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">G</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">H</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">I</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">J</div></a>
                                
                            </div>
                            <div style="display: flex; flex-direction: row-reverse; width: 160px">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">K</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">L</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">M</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">N</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">O</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">P</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">Q</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">R</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">S</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">T</div></a>
                            </div>
                        </div>
                        <div>
                            <div style="display: flex; flex-direction: row-reverse;  width: 160px" class="py-1">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">A</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">B</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">C</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">D</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">E</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">F</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">G</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">H</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">I</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">J</div></a>
                                
                            </div>
                            <div style="display: flex; flex-direction: row-reverse; width: 160px">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">K</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">L</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">M</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">N</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">O</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">P</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">Q</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">R</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">S</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">T</div></a>
                            </div>
                        </div>
                        <div>
                            <div style="display: flex; flex-direction: row-reverse;  width: 160px" class="py-1">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">A</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">B</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">C</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">D</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">E</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">F</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">G</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">H</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">I</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">J</div></a>
                                
                            </div>
                            <div style="display: flex; flex-direction: row-reverse; width: 160px">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">K</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">L</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">M</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">N</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">O</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">P</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">Q</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">R</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">S</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">T</div></a>
                            </div>
                        </div>
                        <div>
                            <div style="display: flex; flex-direction: row-reverse;  width: 160px" class="py-1">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">A</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">B</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">C</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">D</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">E</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">F</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">G</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">H</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">I</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">J</div></a>
                                
                            </div>
                            <div style="display: flex; flex-direction: row-reverse; width: 160px">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">K</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">L</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">M</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">N</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">O</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">P</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">Q</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">R</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">S</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">T</div></a>
                            </div>
                        </div>
                        <div>
                            <div style="display: flex; flex-direction: row-reverse;  width: 160px" class="py-1">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">A</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">B</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">C</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">D</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">E</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">F</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">G</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">H</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">I</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">J</div></a>
                                
                            </div>
                            <div style="display: flex; flex-direction: row-reverse; width: 160px">
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">K</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">L</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">M</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">N</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">O</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">P</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">Q</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">R</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">S</div></a>
                                <a href="view_lot?id=1" style="text-decoration: none; color: white"><div class=" p-1 btn_select me-1" style="font-size: 8px; width: 15px; height: 25px">T</div></a>
                            </div>
                        </div>

                        
                </div>
            </div>
            <div style="margin: 0px 100px 100px 100px;">
                <img src="../assets/img/MAP.png" alt="ff" style="height: 100%; width: auto;">
            </div>
        </div>
</div>
    </div>
</div>

<div style=" justify-content: center; display: flex" >    
    <div id="zoom-controls">
    <button id="zoom-in" class="rounded rounded-5 btn border-success text-success">Zoom +</button>
    <button id="zoom-out" class="rounded rounded-5 btn border-success text-success">Zoom -</button>
    <button id="rotate-btn" class="rounded rounded-5 btn border-success text-success">Rotate</button>
    </div>
</div>

<script src="../jquery/zoom.js"></script>
<script src="../jquery/search_map.js"></script>
</body>
</html>