<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foodie - Supper delicious Burger in town!</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="/foodie/favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="/css_buy/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Rubik:wght@400;500;600;700&family=Shadows+Into+Light&display=swap"
    rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="/css/images_copy/hero-banner.png" media="min-width(768px)">
  <link rel="preload" as="image" href="/css/images_copy/hero-banner-bg.png" media="min-width(768px)">
  <link rel="preload" as="image" href="/css/images_copy/hero-bg.jpg">

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <h1>
        <a href="/index.php" class="logo">McDine Delight<span class="span">.</span></a>
      </h1>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="nav-item">
            <a href="/page/index" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li class="nav-item">
            <a href="#about" class="navbar-link" data-nav-link>About Us</a>
          </li>

          <li class="nav-item">
            <a href="#food-menu" class="navbar-link" data-nav-link>Shop</a>
          </li>

          <li class="nav-item">
            <a href="#blog" class="navbar-link" data-nav-link>Blog</a>
          </li>

          <li class="nav-item">
            <a href="#" class="navbar-link" data-nav-link>Contact Us</a>
          </li>

        </ul>
      </nav>

      <div class="header-btn-group">
        <button class="search-btn" aria-label="Search" data-search-btn>
          <ion-icon name="search-outline"></ion-icon>
        </button>

        <button class="btn btn-hover">Reservation</button>

        <button class="nav-toggle-btn" aria-label="Toggle Menu" data-menu-toggle-btn>
          <span class="line top"></span>
          <span class="line middle"></span>
          <span class="line bottom"></span>
        </button>
      </div>

    </div>
  </header>

  
  <!-- 
    - #SEARCH BOX
  -->

  <div class="search-container" data-search-container>

    <div class="search-box">
      <input type="search" name="search" aria-label="Search here" placeholder="Type keywords here..."
        class="search-input">

      <button class="search-submit" aria-label="Submit search" data-search-submit-btn>
        <ion-icon name="search-outline"></ion-icon>
      </button>
    </div>

    <button class="search-close-btn" aria-label="Cancel search" data-search-close-btn></button>

  </div>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home" style="background-image: url('/foodie/assets/images/hero-bg.jpg')">
        <div class="container">

          <div class="hero-content">
          <section class="section food-menu" id="food-menu">
        <div class="container">

          <p class="section-subtitle">Popular Dishes</p>

          <h2 class="h2 section-title">
            Our Delicious <span class="span">Foods</span>
          </h2>

          <p class="section-text">
            Food is any substance consumed to provide nutritional support for an organism.
          </p>

          <ul class="food-menu-list">


<li>
  <div class="food-menu-card">

    <div class="card-banner">
      <img src="/foodie/assets/images/food-menu-1.png" width="300" height="300" loading="lazy"
        alt="Fried Chicken Unlimited" class="w-100">

      <div class="badge">-15%</div>

     
    </div>

    <div class="wrapper">
      <p class="category">Chicken</p>

      <div class="rating-wrapper">
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
      </div>
    </div>

    <h3 class="h3 card-title">Fried Chicken Unlimited</h3>

    <div class="price-wrapper">

      <p class="price-text">Price:</p>

      <data class="price">$49.00</data>

      <del class="del" value="69.00">$69.00</del>

    </div>

  </div>
</li>

<li>
  <div class="food-menu-card">

    <div class="card-banner">
      <img src="/foodie/assets/images/food-menu-2.png" width="300" height="300" loading="lazy"
        alt="Burger King Whopper" class="w-100">

      <div class="badge">-10%</div>

      
    </div>

    <div class="wrapper">
      <p class="category">Noddles</p>

      <div class="rating-wrapper">
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
      </div>
    </div>

    <h3 class="h3 card-title">Burger King Whopper</h3>

    <div class="price-wrapper">

      <p class="price-text">Price:</p>

      <data class="price" value="29.00">$29.00</data>

      <del class="del">$39.00</del>

    </div>

  </div>
</li>

<li>
  <div class="food-menu-card">

    <div class="card-banner">
      <img src="/foodie/assets/images/food-menu-3.png" width="300" height="300" loading="lazy"
        alt="White Castle Pizzas" class="w-100">

      <div class="badge">-25%</div>

      
    </div>

    <div class="wrapper">
      <p class="category">Pizzas</p>

      <div class="rating-wrapper">
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
      </div>
    </div>

    <h3 class="h3 card-title">White Castle Pizzas</h3>

    <div class="price-wrapper">

      <p class="price-text">Price:</p>

      <data class="price" value="49.00">$49.00</data>

      <del class="del">$69.00</del>

    </div>

  </div>
</li>

<li>
  <div class="food-menu-card">

    <div class="card-banner">
      <img src="/foodie/assets/images/food-menu-4.png" width="300" height="300" loading="lazy"
        alt="Bell Burrito Supreme" class="w-100">

      <div class="badge">-20%</div>

      
    </div>

    <div class="wrapper">
      <p class="category">Burrito</p>

      <div class="rating-wrapper">
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
      </div>
    </div>

    <h3 class="h3 card-title">Bell Burrito Supreme</h3>

    <div class="price-wrapper">

      <p class="price-text">Price:</p>

      <data class="price" value="59.00 ">$59.00</data>

      <del class="del">$69.00</del>

    </div>

  </div>
</li>

<li>
  <div class="food-menu-card">

    <div class="card-banner">
      <img src="/foodie/assets/images/food-menu-5.png" width="300" height="300" loading="lazy"
        alt="Kung Pao Chicken BBQ" class="w-100">

      <div class="badge">-5%</div>

    </div>

    <div class="wrapper">
      <p class="category">Nuggets</p>

      <div class="rating-wrapper">
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
      </div>
    </div>

    <h3 class="h3 card-title">Kung Pao Chicken BBQ</h3>

    <div class="price-wrapper">

      <p class="price-text">Price:</p>

      <data class="price" value="49.00">$49.00</data>

      <del class="del">$69.00</del>

    </div>

  </div>
</li>

<li>
  <div class="food-menu-card">

    <div class="card-banner">
      <img src="/foodie/assets/images/food-menu-6.png" width="300" height="300" loading="lazy"
        alt="Wendy's Chicken" class="w-100">

      <div class="badge">-15%</div>

      
    </div>

    <div class="wrapper">
      <p class="category">Chicken</p>

      <div class="rating-wrapper">
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
        <ion-icon name="star"></ion-icon>
      </div>
    </div>

    <h3 class="h3 card-title">Wendy's Chicken</h3>

    <div class="price-wrapper">

      <p class="price-text">Price:</p>

      <data class="price" value="49.00">$49.00</data>

      <del class="del">$69.00</del>

    </div>

  </div>
</li>

</ul>


</div>
</section>




  <div class="create">
          <form action="/page/save" method="post" class="footer-form">
            <?= csrf_field(); ?>
             

<p class="footer-list-title">Pesan</p>

<div class="input-wrapper">

  <input type="text" name="food" id ="food" required placeholder="Food" aria-label="food"
    class="input-field">

  <input type="text" name="price" id ="price" required placeholder="price" aria-label="price"
    class="input-field">

</div>
<div class="quantity">

<input type="number" name="quantity" id ="quantity" required placeholder="quantity" aria-label="quantity"
    class="input-field">
    </div>
<div class="s">
<button type="submit" class="btn">Buy</button>
</div>

</form>
</form>
         
</div>
</div>
          </div>

          



          <figure class="hero-banner">
            

           
          </figure>

        </div>
        
      </section>

      
      
      
  <!-- 
    - custom js link
  -->
  <script src="/foodie/assets/js/script.js" defer></script>

<!-- 
  - ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
