<?php

$conn= mysqli_connect('localhost' , 'root' , '' , 'login');


  session_start();


  if(isset($_POST['total_cart_items']))
  {
	echo count($_SESSION['name']);
  
	exit();
  }



  if(isset($_POST['item_src']))
  {
    $_SESSION['name'][]=$_POST['item_name'];
    $_SESSION['price'][]=$_POST['item_price'];
    $_SESSION['src'][]=$_POST['item_src'];
    echo count($_SESSION['name']);
    
    exit();
  }

  if(isset($_POST['showcart']))
  {
    $total = 0;
   
      

    for($i=0;$i<count($_SESSION['src']);$i++)
    {
      echo "<div class='cart_items'>";
      echo "<img src='".$_SESSION['src'][$i]."'>";
      echo "<p>".$_SESSION['name'][$i]."</p>";
      echo "<p>".$_SESSION['price'][$i]."</p>";
      echo "</div>";


            $var = $_SESSION['price'][$i]; 
            $num = intval($_SESSION['price'][$i]);
            $total = $total + $num;
            $name = $_SESSION['name'][$i];
            $PRICE = $_SESSION['price'];
            

            
            
}




    
   echo "<h2 align='right' style='color:green'> <pre> SUBTOTAL    </pre> </h2> "; 
    echo "<h2 align='right' style='color:green'><pre>$total       </pre></h2>";
    ?>
    <form method="post" action="./checkout.php">
      <input type="submit" name="checkout" id="checkout" value="checkout" style="color: white; background-color: green; margin-left: 84%; padding: 8px; margin-bottom: 10px;">
    </form>
    <?php
    
    exit();	
  }

  