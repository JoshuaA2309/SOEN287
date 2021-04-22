<!DOCTYPE html>
<html>
    <head>
        <title>Meat</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="storestyles.css" />
        <script src="../FINAL-Frontend AWS version(2021-03-12)/FINAL-Frontend AWS version(2021-03-12)/store.js" async></script>
    </head>
    <body>
     <nav class="navbar">
      <div class="navbar__container">
        <a href="/FINAL-Frontend AWS version(2021-03-12)/FINAL-Frontend AWS version(2021-03-12)/index.html" id="navbar__logo"
          ><i class="fas fa-shopping-basket"></i>SUPER GROCERIES</a
        >
        <!--JS part-->
        <div class="navbar__toggle" id="mobile-menu">
          <span class="bar"></span> <span class="bar"></span>
          <span class="bar"></span>
        </div>
         <ul class="navbar__menu">
          <li class="navbar__item">
            <a href="/FINAL-Frontend AWS version(2021-03-12)/FINAL-Frontend AWS version(2021-03-12)/index.html" class="navbar__links">Home</a>
          </li>
          
          </li>
          <li class="navbar__item">
            <a href="/FINAL-Frontend AWS version(2021-03-12)/FINAL-Frontend AWS version(2021-03-12)/aisles.html" class="navbar__links">Products</a>
          </li>
          <li class="navbar__item">
            <a href="/FINAL-Frontend AWS version(2021-03-12)/FINAL-Frontend AWS version(2021-03-12)/signin.html" class="navbar__links">Sign in</a>
          </li>
          <li class="navbar__item">
            <a href="/FINAL-Frontend AWS version(2021-03-12)/FINAL-Frontend AWS version(2021-03-12)/cart.html" class="navbar__links">
            Cart <i class=" fas fa-shopping-basket"></i></a>
            

          </li>

        </ul>
      </div>
       <div class="main">
          
    </nav>
    <section class="container content-section">
            <h2 class="section-header">MEAT</h2>
            <div class="shop-items">
    <?php
      $xml=simplexml_load_file('products.xml');
            $xml1=new DomDocument("1.0","UTF-8");
            $xml1->load("cart.xml");
            
            if(isset($_POST['add_to_cart'])){
            $xml3=simplexml_load_file("cart.xml") or die("Error: Cannot create object"); 
            $xml2=simplexml_load_file('products.xml');
            $counter=-1;
            $a=$_POST['a'];

             foreach($xml as $p){
            $counter++;
            if($xml2-> p[$counter]->id==$a){
               $name=$xml2-> p[$counter]->name;
               $price=$xml2-> p[$counter]->price;
               $id=$xml2-> p[$counter]->id;
               $pnew= $xml3->addChild('p');
               $pnew->addChild('id',$name);
               $pnew->addChild('name',$price);
               $pnew->addChild('stock',$id);
               file_put_contents("cart.xml",$xml3->asXML());

            //    should add cart file
               echo'<script type="text/javascript">
               window.location = "meat.php";
               </script>';
               }
            }
          }

                 $counter=8;
         foreach($xml as $p){
           if($xml-> p[$counter]-> aisles=="meat"){
           $name=$xml-> p[$counter]->name;
           $price=$xml-> p[$counter]->price;
           $stock=$xml-> p[$counter]->stock;
           $id=$xml-> p[$counter]->id;
           $a=$id;
           $counter++;


 echo "<div class='shop-item'>
                    <span class='shop-item-title'>$name</span>
                    <img class='shop-item-image' src='cartimages/$name.jpg'>
                    <div class='shop-item-details'>
                        <span class='shop-item-price'>$price</span>
                        
                        <form class='btn btn-primary shop-item-button' method='POST' action=''>
        <input type='submit' class='main__btn' name='add_to_cart' value='ADD TO CART'>
        <input type='hidden' name='a' value='$a'>
        </form>
                    </div>
                </div>";
         }
          } 
?>

        
                <!-- <div class="shop-item">
                    <span class="shop-item-title">Tomatoes</span>
                    <img class="shop-item-image" src="../cartphp/cartimages/Tomatoes.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$12.99</span>
                   
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Meat</span>
                    <img class="shop-item-image" src="../cartphp/cartimages//Meat.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$14.99</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Milk</span>
                    <img class="shop-item-image" src="../cartphp/cartimages//Milk.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$9.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>  -->
               
            </div>

 </div>
        </section>


        <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
        </section>
      

    
              <script type="text/javascript" src="../FINAL-Frontend AWS version(2021-03-12)/FINAL-Frontend AWS version(2021-03-12)/app.js"></script>
       </div>
       
    </body>
</html>