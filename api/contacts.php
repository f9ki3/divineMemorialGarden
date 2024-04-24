<?php include 'session.php'?>
<?php include 'navigation_bar.php'?>

  <div class="container mt-5 mb-5">
   <h3 class="fw-bold text-center">Contact Us</h3>
   <div class="d-flex flex-column mb-3 justify-content-center align-items-center">
        <div class="form-floating px-1 mt-4" style="width: 32%;">
            <input type="text" id="fname" class="form-control" placeholder="" required>
            <label for="fname">Full Name</label>
        </div>
        <div class="form-floating px-1 mt-4" style="width: 32%;">
            <input type="email" id="fname" class="form-control" placeholder="" required>
            <label for="fname">E-mail</label>
        </div>
        <div class="form-floating px-1 mt-4" style="width: 32%;">
            <textarea id="fname" class="form-control" style="height: 150px;" placeholder="" required></textarea>
            <label for="fname">Message</label>
        </div>
        <div class="form-floating px-1 mb-5 mt-4" style="width: 32%;">
            <button class="btn btn-success w-100">Submit</button>
        </div>

    </div>

</div>


<?php include 'footer.php'?>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
