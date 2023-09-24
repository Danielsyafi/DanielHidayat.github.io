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

          <p class="section-subtitle">Your order was Successful</p>

          <h2 class="h2 section-title">
            Food <span class="span">Order</span>
          </h2>

          <p class="section-text">
            Food is any substance consumed to provide nutritional support for an organism.
          </p>
          </div>
          <div class="tabel_buy">
          <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Food</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php $i = 1;
?>
  <?php foreach($mcd as $k) : ?>
    <tr>
      <th scope="row">
        <?= $i++; ?>
      </th>
      <td><?= $k['food'];?></td>
      <td><?= $k['price'];?></td>
      <td><?= $k['quantity'];?></td>
      <td><div class=" d-md justify-content-md-end">
      <a href="/page/edit/<?= $k['id']?>"button class="btn btn-primary me-md-1" type="button">Edit</button></a>
      <a href="/page/delete/<?= $k['id']?>" method="post" class="btn btn-primary" type="submit">Batal pesanan</a>
    </td>
    </td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
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
