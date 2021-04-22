<div class="product">
<h3>Tomatoes</h3>
<a href="add_to_cart.php?id=1">Add to Cart</a>
</div>
<div class="product">
<h3>Milk</h3>
<a href="add_to_cart.php?id=2">Add to Cart</a>
</div>
<div class="product">
<h3>Steak</h3>
<a href="add_to_cart.php?id=3">Add to Cart</a>
</div>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Meat</title>
    <link rel="stylesheet" href="../FINAL-Frontend AWS version(2021-03-12)/FINAL-Frontend AWS version(2021-03-12)/products.css"/>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
      integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
   <!-- Navbar Section -->
   <nav class="navbar">
    <div class="navbar__container">
      <a href="../FINAL-Frontend AWS version(2021-03-12)/FINAL-Frontend AWS version(2021-03-12)/index.html" id="navbar__logo"
        ><i class="fas fa-shopping-basket"></i>SUPER GROCERIES</a
      >
      <!--JS part-->
      <div class="navbar__toggle" id="mobile-menu">
        <span class="bar"></span> <span class="bar"></span>
        <span class="bar"></span>
      </div>
      <ul class="navbar__menu">
        <li class="navbar__item">
          <a href="../FINAL-Frontend AWS version(2021-03-12)/FINAL-Frontend AWS version(2021-03-12)/index.html" class="navbar__links">Home</a>
        </li>
        
        </li>
        <li class="navbar__item">
          <a href="../FINAL-Frontend AWS version(2021-03-12)/FINAL-Frontend AWS version(2021-03-12)/aisles.html" class="navbar__links">Products</a>
        </li>
        <li class="navbar__item">
          <a href="../FINAL-Frontend AWS version(2021-03-12)/FINAL-Frontend AWS version(2021-03-12)/signin.html" class="navbar__links">Sign in</a>
        </li>
        <li class="navbar__item">
          <a href="../FINAL-Frontend AWS version(2021-03-12)/FINAL-Frontend AWS version(2021-03-12)/cart.html" class="navbar__links">
          Cart <i class=" fas fa-shopping-basket"></i></a>
          

        </li>

      </ul>
    </div>
  </nav>

    <div class="main">
      <div class="main__container">
        <div class="main__content">
          <h1>MEAT SECTION</h1>
          <p>All the meat you crave is located right here</p>
        </div>
<button class="sale_button"
data-modal-target="#modal">Today's Special</button>
  <div class="modal" id="modal">
    <button data-close-button class="close-button">&times;</button>
    <div class="modal-header">
      <div class="title">Special Sale Beef:20%</div>
     
    
    <div class="modal-body">
Beef is one of the most popular types of meat. It's exceptionally rich in high-quality protein, vitamins, and minerals. Therefore, it may improve muscle growth and maintenance, as well as exercise performance. As a rich source of iron, it may also cut your risk of anemia.

    </div>
  </div>
  
  <div id="overlay"></div>

        <div class="main__img-container">
          <img id="main__img" src="images/meatmain.jpg" style="width:100%;" />
        </div>
      </div>
      </div>
        <div class="section__store__products"> 
          <h2>Ground beef (12.99/lbs)</h2>
          <img src="images/groundbeef.jpg"style="width:50%;"/>
          <button class="main__btn"><a href="groundbeef.html">More details</a></button>
        <button class="main__btn"><a href="/cartphp/add_to_cart.php"></a>Add to cart</button>
          <br>
          <br>
          <h2>Steak (15.99/lbs)</h2>
          <img src="images/steak.jpg"style="width:50%;"/>
          <button class="main__btn"><a href="steak.html">More details</a></button>
        <button class="main__btn">Add to cart</button>
          <br>
          <br>
          <h2>Veal (16.99/lbs)</h2>
          <img src="images/veal.jpg"style="width:50%;"/>
          <button class="main__btn"><a href="veal.html">More details</a></button>
        <button class="main__btn">Add to cart</button>
        </div>
         
    </div>
      <script src="../FINAL-Frontend AWS version(2021-03-12)/FINAL-Frontend AWS version(2021-03-12)/app.js"></script>
      <script src="../FINAL-Frontend AWS version(2021-03-12)/FINAL-Frontend AWS version(2021-03-12)/special.js"></script>
  </body>
</html>
