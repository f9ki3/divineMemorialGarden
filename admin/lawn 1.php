<html lang="en">

<body >
<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
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
                <?php include 'dex.html'?>
            </div>
        </div>
</div>
    </div>
</div>

<div style=" justify-content: center; display: flex" >    
    <div id="zoom-controls">
    <button id="zoom-in" class="rounded rounded-5 btn border-success text-success">Zoom +</button>
    <button id="zoom-out" class="rounded rounded-5 btn border-success text-success">Zoom -</button>
    </div>
</div>

<script src="../jquery/zoom.js"></script>
<script src="../jquery/search_map.js"></script>
</body>
</html>