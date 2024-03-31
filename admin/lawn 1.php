<html lang="en">

<body >
<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
    <div style=" display:flex;  justify-content: center; align-items: center" class="pt-3">
        <input type="text" id="searchInput" class="w-25 form-control mt-2 me-2" placeholder="Enter search term">
        <button onclick="highlightBlock()" class="btn btn-success mt-2">Search</button>
        <a href="#" class="btn btn-primary mt-2 ms-2 btn-success" onclick="history.back(); return false;">Exit</a>
    </div>
    <div id="zoom-container" class="scroll" style="overflow: hidden;">
        <!-- lawn 1 map -->
        <div style="display: flex; flex-direction: row; justify-content: center; height: 70%; width: 100%;">
            <div id="zoom-content">
                <div style="position: relative; width: 100%; height: 100%;">
                    <div class="content" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; margin-top: 50px;">
                        <?php include 'map_lawn1.php'?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="mt-1 d-flex flex-column justify-content-center align-items-center">
    <h5>LEGENDS</h5>
    <div class="d-flex flex-row">
        <div class="d-flex">
            <p class="ms-2 me-2">Sold</p>
            <div style="background-color: Green; width: 20px; height: 20px"></div>
        </div>
        <div class="d-flex">
            <p class="ms-2 me-2">Sell</p>
            <div style="background-color: Red; width: 20px; height: 20px"></div>
        </div>
    </div>
</div>

<div class="mt-3" style=" justify-content: center; display: flex" >    
    <div id="zoom-controls">
    <button id="zoom-in" class="rounded rounded-5 btn border-success text-success">Zoom +</button>
    <button id="zoom-out" class="rounded rounded-5 btn border-success text-success">Zoom -</button>
    </div>
</div>

<script src="../jquery/zoom.js"></script>
<script src="../jquery/search_map.js"></script>
</body>
</html>