<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>

<div class="container" style="margin-top:14%;">
    
    <table class="table table-bordered">
    
        <tr>
            <th style="text-align:center;background-color: #0074d9; color:white; height:40px; padding-left:1%;">id </th>
            <th style="text-align:center;background-color: #0074d9; color:white; height:40px; padding-left:1%;">country</th>
            <th style="text-align:center;background-color: #0074d9; color:white; height:40px; padding-left:1%;">First_Name</th>
            <th style="text-align:center;background-color: #0074d9; color:white; height:40px; padding-left:1%;">last_Name</th>
            <th style="text-align:center;background-color: #0074d9; color:white; height:40px; padding-left:1%;">Address</th>
            <th style="text-align:center;background-color: #0074d9; color:white; height:40px; padding-left:1%;">City</th>
            <th style="text-align:center;background-color: #0074d9; color:white; height:40px; padding-left:1%;">Phone_Number</th>
            <th style="text-align:center;background-color: #0074d9; color:white; height:40px; padding-left:1%;">Email_Address</th>
            <th style="text-align:center;background-color: #0074d9; color:white; height:40px; padding-left:1%;">Action</th>
        </tr>
       
<?php 

$conn= mysqli_connect('localhost' , 'root' , '' , 'login');
$save = "SELECT * FROM checkout";
$query = mysqli_query($conn , $save);
if($query->num_rows > 0){
    while($rows = $query->fetch_assoc()){
        $id = $rows['id'];
        $country = $rows['country'];
        $First_Name = $rows['First_Name'];
        $last_Name = $rows['last_Name'];
        $Addresss = $rows['Addresss'];
        $City = $rows['City'];
        $Phone_Number = $rows['Phone_Number'];
        $Email_Address = $rows['Email_Address'];
        
        
    echo "
    <tr>
            <td style=text-align:center;>$id</td>
            <td style=text-align:center;>$country</td>
            <td style=text-align:center;>$First_Name</td>
            <td style=text-align:center;>$last_Name</td>
            <td style=text-align:center;>$Addresss</td>
            <td style=text-align:center;>$City</td>
            <td style=text-align:center;>$Phone_Number</td>
            <td style=text-align:center;>$Email_Address</td> </tr>
            <tr>
                    <td>product name</td>
                    <td>product price</td>
                
                </tr>";
            
            $save2 = "SELECT * FROM admin_table WHERE ID = 0";
                    $query2 = mysqli_query($conn , $save2);
                    if($query2->num_rows > 0){
                        while($row = $query2->fetch_assoc()){
                            echo "
                
                <tr>
                    <td>$row[product_name]</td>
                    <td>$row[product_price]</td>
                </tr>
                
           ";}}
        echo "<tr><td><b>total price</b></td></tr>";}}

?>
       
    </table>
    <?php

    


?>
    </div>
</body>
</html>