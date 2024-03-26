

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquiries</title>
    <link rel="stylesheet" href="inquiries.css">



    
    <style>
        form{ background-color: white; border-radius: 10px;  margin-top: 50px; border: 1px solid black; padding-top: 50px; padding-bottom: 50px; 
            font-family: Arial, Helvetica, sans-serif; width: 30%; 
            }

        .inquiries-input{ height: 40px; width: 50%;}
        .inquiries-button{width: 50%; height: 50px; color: aliceblue; background-color: green; font-size: 18px;}
        .inquiries-button:hover{ background-color: darkgreen;}

    </style>
</head>
<body>




<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Decease Information</h2>
    </div>
    <div class="modal-body">
    <button class="modal-button">Continue</button>
    </div>

  </div>

</div>










<center>
    <div class="inquiries-form">
    <form method="POST" enctype="multipart/form-data">

        <h1>INQUIRE FORM</h1>
        <label for="" class="inquiries-label layout-margin" >Name:</label><br><br>
        <input type="text" name="name" class="inquiries-input layout-margin"   placeholder="insert here"><br><br>

        <label for="" class="inquiries-label layout-margin">Contact:</label><br><br>
        <input type="text" name="contact" class="inquiries-input layout-margin"   placeholder="insert your email or contact number"><br><br>

        <label for="" class="inquiries-label layout-margin">Concern:</label><br><br>
        <input type="text" name="concern" class="inquiries-input layout-margin"   placeholder="insert your concern here"><br><br>

        <label for="" class="inquiries-label layout-margin">Message:</label><br><br>
        <textarea type="text" name="message"   id="" cols="38" rows="10" ></textarea><br><br>

        <button class="inquiries-button layout-margin" id="myBtn" type="submit" name="submit">SUBMIT</button>
    </form>
    </div>
    </center>


<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>


