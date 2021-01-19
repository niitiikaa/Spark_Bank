<?php 
include 'info.php'; 
?>

<DOCTYPE html>
    <html>
    
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
    <link href="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <link href="user.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
      
    </head>
    
    <body class="main-bg">

        <div clas="bg-image">

        <div class="animate__animated animate__bounce">
        <div class="login-container text-c animated flipInX">
                <div>
                    <h1 class="logo-badge text-whitesmoke"><span class="fa fa-user-circle"></span></h1>
                </div>
                    <h3 class="text-whitesmoke">Create Account</h3>
                    <p class="text-whitesmoke">user</p>
                <div class="container-content">
                    <form class="margin-t text-whitesmoke" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control text-whitesmoke" placeholder="username" name="username" required></input>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control text-whitesmoke" placeholder="email" name="email" required></input>
                        </div>
                        <div class="form-group">
                         <input type="number" class="form-control text-whitesmoke" placeholder="balance" name="balance" required></input>
                        </div>
                        <input type="submit" class="form-button button-l margin-b" name="submit"></input>
                
                        
                    </form>
                    <p class="margin-t text-whitesmoke"><small> Nitika Thingalaya; 2021</small> </p>
                </div>
            </div>

        </div>
</body>


    </html>
