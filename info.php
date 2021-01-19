<?php



//initializing
//$username= $_POST['username'];
//$email_id= $_POST['email_id'];
//$password1= $_POST['password1'];
//$password2= $_POST['password2'];

//$username = "";
//$email = "";

$error = array();

//connect to db
$conn = mysqli_connect('localhost', 'root', '', 'spark_bank');
//or die("could not connect");

if(!$conn){
    die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
}

//register user
if(isset($_POST['submit']))
{
          
    $username = $_POST['username'];
    $email = $_POST['email'];
    $balance = $_POST['balance'];

    $query = "SELECT * FROM user WHERE username = '$username' " ;
    $val = mysqli_query($conn, $query);
    $count=mysqli_num_rows($val);
    if ($count>0)
    {
        echo '<script>alert("username already exist");</script>'; 
    }
        else
        {
            $sql = "INSERT INTO user (username, email, balance) VALUES ('$username','$email','$balance')";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                       
                       echo '<script>alert("User created");</script>';
                       header('location: index.php');
                             
                            
            }
            else
            {
                echo '<script>alert("");</script>';  
            }

        }
        
    
    


}

    
?>













