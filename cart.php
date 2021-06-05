<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="cart_style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript">

    $(document).ready(function(){

      $.ajax({
        type:'post',
        url:'store_items.php',
        data:{
          total_cart_items:"totalitems"
        },
        success:function(response) {
          document.getElementById("total_items").value=response;
        }
      });

    });

    function cart(id)
    {
	  var ele=document.getElementById(id);
	  var img_src=ele.getElementsByTagName("img")[0].src;
	  var name=document.getElementById(id+"_name").value;
	  var price=document.getElementById(id+"_price").value;
	
	  $.ajax({
        type:'post',
        url:'store_items.php',
        data:{
          item_src:img_src,
          item_name:name,
          item_price:price
        },
        success:function(response) {
          document.getElementById("total_items").value=response;
        }
      });
	
    }

    function show_cart()
    {
      $.ajax({
      type:'post',
      url:'store_items.php',
      data:{
        showcart:"cart"
      },
      success:function(response) {
        document.getElementById("mycart").innerHTML=response;
        $("#mycart").slideToggle(); 
      }
     });

    }
	
</script>
  
</head>

<body style="margin-top:-16px;">
<?php
//include('store_items.php');
//include('store_items.php');

?>

<div style="background-color: #0074d9; height: 69px;">
    <nav>
      <ul>
        <li style="list-style-type:none; font-size: 33px; padding-top: 1%; display: flex; justify-content: center; color: white;">HOME</li>
      </ul>

    </nav>

</div>





<p id="cart_button" onclick="show_cart();">
  <img src="http://talkerscode.com/webtricks/demo/images/cart_icon.png">
  <input type="button" id="total_items" value="">
</p>

<div id="mycart">
</div>


<div id="item_div" >

  <div class="items" id="item1">
    <img src="https://i.imgur.com/w2rCsEw.jpg">
    <form method="post">
    <input type="button" name="onclick" value="Add To CART" onclick="cart('item1')">
    </form>
    <p>RED REDDISH</p>
    <p >Price - $95</p>
    <input type="hidden" id="item1_name" value="RED REDDISH">
    <input type="hidden" id="item1_price" value="95">
  </div>

  <div class="items" id="item2">
    <img src="https://i.imgur.com/ZRUetRF.jpg">
    <input type="button" value="Add To CART" onclick="cart('item2')">
    <p>CORNS</p>
    <p>Price - $105</p>
    <input type="hidden" id="item2_name" value="CORNS">
    <input type="hidden" id="item2_price" value="105">
  </div>
  
  <div class="items" id="item3">
    <img src="https://images-na.ssl-images-amazon.com/images/I/21DejQuoT2L.jpg">
    <input type="button" value="Add To CART" onclick="cart('item3')">
    <p>BANANA</p>
    <p>Price - $120</p>
    <input type="hidden" id="item3_name" value="BANANA">
    <input type="hidden" id="item3_price" value="120">
  </div>

  <div class="items" id="item4">
    <img src="https://i.imgur.com/emb60L5.jpg">
    <input type="button" value="Add To CART" onclick="cart('item4')">
    <p>BITTER GUARD</p>
    <p>Price - $140</p>
    <input type="hidden" id="item4_name" value="BITTER GUARD">
    <input type="hidden" id="item4_price" value="140">
  </div>

  <div class="items" id="item5">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSe-Lxz0Rxbe-G3YIvZP8JjBn24YfqfhHHjBU9C5sfxkac85h9Yr-fQCnDtOrcHgE-Zvw8&usqp=CAU">
    <input type="button" value="Add To CART" onclick="cart('item5')">
    <p>ORANGE</p>
    <p>Price - $130</p>
    <input type="hidden" id="item5_name" value="ORANGE">
    <input type="hidden" id="item5_price" value="130">
  </div>

  <div class="items" id="item6">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQjxyKJR9slyDC1jSdkCVjltAtlCM21j-9-3YR-PWf6lKrVyKixraaxSqW56ioqEd1O3M&usqp=CAU">
    <input type="button" value="Add To CART" onclick="cart('item6')">
    <p>TOMATO</p>
    <p>Price - $90</p>
    <input type="hidden" id="item6_name" value="TOMATO">
    <input type="hidden" id="item6_price" value="90">
  </div>

  <div class="items" id="item7">
    <img src="https://media.istockphoto.com/photos/single-gala-apple-with-leaf-isolated-picture-id1134031619?k=6&m=1134031619&s=170667a&w=0&h=jiS51OvqTPjqDRqOoIqDxOKqnKIS5G97T2V_YoXUiYU=">
    <input type="button" value="Add To CART" onclick="cart('item7')">
    <p>APPLE</p>
    <p>Price - $90</p>
    <input type="hidden" id="item7_name" value="APPLE">
    <input type="hidden" id="item7_price" value="90">
  </div>

  <div class="items" id="item8">
    <img src="https://i.etsystatic.com/17225740/r/il/b82341/1891498040/il_570xN.1891498040_k1f7.jpg">
    <input type="button" value="Add To CART" onclick="cart('item8')">
    <p>PINE APPLE</p>
    <p>Price - $90</p>
    <input type="hidden" id="item8_name" value="PINE APPLE">
    <input type="hidden" id="item8_price" value="90">
  </div>
  
  <div class="items" id="item9">
    <img src="https://www.gedimex.com/wp-content/uploads/2019/03/afbeelding-erwt-website.jpg">
    <input type="button" value="Add To CART" onclick="cart('item9')">
    <p>PEAS</p>
    <p>Price - $90</p>
    <input type="hidden" id="item9_name" value="PEAS">
    <input type="hidden" id="item9_price" value="90">
  </div>

  <div class="items" id="item10">
    <img src="https://5.imimg.com/data5/QK/FM/RR/ANDROID-87259295/product-jpeg-500x500.jpg">
    <input type="button" value="Add To CART" onclick="cart('item10')">
    <p>CUCUMBER</p>
    <p>Price - $90</p>
    <input type="hidden" id="item10_name" value="CUCUMBER">
    <input type="hidden" id="item10_price" value="90">
  </div>

  <div class="items" id="item11">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtJmwtrCKPfo8aD2DL6jSzXzbT31g3BnTFR7UBhPOVB2m83ccjce72BkCKVfOjlKbLfgE&usqp=CAU">
    <input type="button" value="Add To CART" onclick="cart('item11')">
    <p>RED CAPCICUM</p>
    <p>Price - $100</p>
    <input type="hidden" id="item11_name" value="RED CAPCICUM">
    <input type="hidden" id="item11_price" value="90">
  </div>

  <div class="items" id="item12">
    <img src="https://us.123rf.com/450wm/greyelkin/greyelkin1810/greyelkin181000076/110606805-carrot-isolated-on-white-background-clipping-path-full-depth-of-field.jpg?ver=6">
    <input type="button" value="Add To CART" onclick="cart('item12')">
    <p>CARROT</p>
    <p>Price - $100</p>
    <input type="hidden" id="item12_name" value="CARROT">
    <input type="hidden" id="item12_price" value="90">
  </div>


</div>

</body>
</html>