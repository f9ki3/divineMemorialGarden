<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbcemetery";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$deceased_id = $_GET['deceased_id'];

$getDetails = "SELECT * FROM deceased WHERE deceased_id = $deceased_id";

//display

$result = $conn->query($getDetails);
$deceased = $result->fetch_assoc();

session_start();
require('dbconnect.php');

?>

<!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>How to Select Data from Database in PHP & Display in Table Format</title>  
      <style type="text/css">  
           *{  
                padding: 0;  
                margin: 0;  
                box-sizing: border-box;  
           }  
           body{  
                width: 100%;  
                min-height: 100vh;  
                background-color: #5d6d7d;  
           }  
           .container{  
                max-width: 900px;  
                margin: 100px auto;  
                width: 100%;  
           }  
           table{  
                border-collapse: collapse;  
                width: 100%;  
           }  
           table th{  
                background-color: red;  
                color: #fff;  
                padding: 10px;  
           }  
           table td{  
                padding: 12px;  
                color: #fff;  
                font-size: 1em;  
                text-align: center;  
           }  
           table tr:nth-child(odd){  
                background-color: #797676;  
           }  
      </style>  
 </head>  
 <body>  
 <div class="container">  
      <table border="1">  

      <a href="map.php" class="btn btn-primary btn-sm">&nbsp;Back&nbsp;</a>

           <tr>  
                <th>Deceased_id</th> 
                <th>Fullname</th>  
                <th>Address</th>
                <th>date_of_birth</th>  
                <th>date_of_death</th>
                <th>date_of_interment</th>    
           </tr>  

            <td> 
                <?php echo $deceased['deceased_id'] ?>
            </td>
            <td> 
                <?php echo $deceased['fullname'] ?>
            </td>
            <td> 
                <?php echo $deceased['address'] ?>
            </td>
            <td> 
                <?php echo $deceased['date_of_birth'] ?>
            </td>
            <td> 
                <?php echo $deceased['date_of_death'] ?>
            </td>
            <td> 
                <?php echo $deceased['date_of_interment'] ?>
            </td>
            
      </table>  
 </div>  
 </body>  
 </html>