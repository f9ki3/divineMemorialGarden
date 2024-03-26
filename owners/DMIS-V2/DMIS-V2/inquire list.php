<?php
@include 'config.php';

$sql = "SELECT * FROM inquries";
$transaction_number = $conn->query($sql) or die ($conn->error);
$row = $transaction_number->fetch_assoc();


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquire List</title>

    <style>

        body{font-family: Arial, Helvetica, sans-serif;}
        table,td,tr{border: 1px solid black; border-collapse: collapse;}
        table{width: 70%;}

    </style>
</head>
<body>
    <center>
    <table>
        <tr>
            <td width="10%">Inquire ID</td><td width="20%">Name</td><td width="10%">Contact</td><td width="10%">Concern</td><td width="30%">Message</td>
        </tr>

        <!-- insert loop here -->
        <?php do{ ?>
        <tr>
            <td width="10%"><?php echo $row ['date_of_inquires'];?></td>
            <td width="10%"><?php echo $row ['fullname'];?></td>
            <td width="20%"><?php echo $row ['contact'];?></td>
            <td width="30%"><?php echo $row ['concerns'];?></td>
            <td width="20%"><?php echo $row ['message'];?></td>
        </tr>

        <?php }while($row = $transaction_number->fetch_assoc()) ?>

    </table>
    </center>
</body>
</html>