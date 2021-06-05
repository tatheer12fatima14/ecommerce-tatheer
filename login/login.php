<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="login.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Document</title>
</head>
<body>



<?php



 $conn= mysqli_connect('localhost' , 'root' , '' , 'login');
 if(isset($_POST['submit'])){
    $sql_query = "SELECT * FROM login_2nd_assignment where username = '$_POST[username]' AND  users_password = '$_POST[password]'";
     $query = mysqli_query($conn , $sql_query);       
     if($fetch_array = mysqli_fetch_array($query)){
        
        header("location: .././admin/index.php");
    }
    
 

 }

?>







<div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div class="box">
                    <div class="shape1"></div>
                    <div class="shape2"></div>
                    <div class="shape3"></div>
                    <div class="shape4"></div>
                    <div class="shape5"></div>
                    <div class="shape6"></div>
                    <div class="shape7"></div>
                    <div class="float">
                        <form method="post" class="form">
                            <div class="form-group">
                                <label for="username" class="text-white">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-white">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            
                            </div>
                            <div class="form-group">
                            
                            <?php 
                            if(isset($_POST['submit'])){
                                
                                if(empty($_POST['username']) || empty($_POST['password'])){
                                    echo ' Kindly fill the required fields' . "</br>";
                                }
                            }
                            ?>
                            
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
    //if(isset($_POST['submit'])){
        //if(!$fetch_array = mysqli_fetch_array($query)){
      //  echo "user not found";
    //}
//}
    ?>
</body>
</html>