<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>

    <link href="transhis.css" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
  
</head>

<body>

    <h2>Transaction History</h2>
    <div class="table-wrapper">
    <table class="fl-table table-hover table-sm">
    <div class="table-responsive-sm">
       
        <thead>
            <tr>
                <th  scope="col" class="text-center">Transaction Id</th>
                <th  scope="col" class="text-center">Sender</th>
                <th  scope="col" class="text-center">Receiver</th>
                <th  scope="col" class="text-center">Amount</th>
                <th  scope="col" class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

          $conn = mysqli_connect('localhost', 'root', '', 'spark_bank');
    
        if(!$conn)
        {
            die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
        }

            $sql ="select * from history";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['transid']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['reciever']; ?></td>
            <td class="py-2"><?php echo $rows['amount']; ?> </td>
            <td class="py-2"><?php echo $rows['date']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    
    </div>
    </table>

</div>
</body>
</html>