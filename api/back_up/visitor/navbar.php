<div class="bg-success sticky-top">
    <nav class="container d-flex py-3 justify-content-between">
        <div>
            <h5 class="fw-bolder mt-2 text-light">Divine Garden Memorial</h5>
        </div>
        <div class="d-flex">
            <div class="d-flex mt-2 d-flex justify-content-between">
                <li><a href="homepage" class="text-light mx-3" style="text-decoration: none;">Home</a></li>
                <li><a href="area" class="text-light mx-3" style="text-decoration: none;">Mapping</a></li>
                <li><a href="sell_bulletin" class="text-light mx-3" style="text-decoration: none;">Sale Bulletin</a></li>
                <li><a href="message" class="text-light mx-3" style="text-decoration: none;">Messages</a></li>
            </div>
            <div class="btn-group">
            <button type="button" class="btn border-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../uploads/<?php echo $profile?>" alt="" style="border-radius: 100%; height: 40px; width: 40px">
            </button>
            <ul class="dropdown-menu">
                <!-- Dropdown menu items -->
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="logout">Logout</a></li>
            </ul>
            </div>
        </div>

    </nav>
</div>
