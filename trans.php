<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8" content="width=device-width, initial-scale=1">
  <title>Transactions</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>

<link href="trans.css" rel="stylesheet">



<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
  
</head>

<body>

<?php
    $conn = mysqli_connect('localhost', 'root', '', 'spark_bank');
    
    if(!$conn){
        die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
    }
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn,$sql);
?>

<h2>Transaction page</h2>
<div class="table-wrapper">
    <table class="fl-table table-hover table-sm">
    <div class="table-responsive-sm">
         
        <thead>
        <tr>
        <th scope="col" class="text-center py-2">User id</th>
        <th scope="col" class="text-center py-2">Username</th>
        <th scope="col" class="text-center py-2">E-Mail</th>
        <th scope="col" class="text-center py-2">Balance</th>
        <th scope="col" class="text-center py-2">Operation</th>
        </tr>
        </thead>

        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result))
                    {
                ?>
                    <tr>
                    <td class="py-2"><?php echo $rows['userid']?></td>
                        <td class="py-2"><?php echo $rows['username']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="transactions.php?userid= <?php echo $rows['userid'] ;?>"> <button type="button" class="btn">Transact</button></a></td> 
                   
                    </tr>
                <?php
                    }
                ?>
            
        </tbody>
      
    </div>    
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 


</body>
</html>