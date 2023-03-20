<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Mcwaddles | Assignment 2 </title>
  <link rel="stylesheet" type="text/css" href="/~33314961/assignment2/WebClient/css/main.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="/~33314961/assignment2/WebClient/js/main.js"></script>
</head>

<body class="hello">
  <nav id="navigationBar">
    <ul>
      <li>
        <a href="/~33314961/assignment2/WebClient" class="link">HOME</a>
      </li>
      <li>
        <a href="/~33314961/assignment2/WebClient/menu.php" class="link">MENU</a>
      </li>
      <li>
        <a href="/~33314961/assignment2/WebClient/order" class="link">ORDERS</a>
      </li>
      <li>
        <a href="/~33314961/assignment2/WebClient/login.php" class="link">LOGIN / REGISTER</a>
      </li>
      <li>
        <a class="checkout" href="/~33314961/assignment2/WebClient/checkout.php" class="link">Checkout</a>
      </li>
    </ul>
  </nav>
  <header>
    <div class="CTA">
      <div class="text">
        <h1> Mcwaddles Menu</h1>
        <h2>Browse Mcwaddles drone service menu </h2>
        <a class="burgerbutton" href="/~33314961/assignment2/WebClient/order">TRACK YOUR ORDER</a>
  </header>

  <section class="landing-page">
    <div class="menutext">
    <?php
      
      // echo '<p>'.$newCart->getTotalItems().'</p>';
      // echo '<p>'.$_SESSION['test'].'</p>'
      
      
      ?>
      <h2>About our products</h2>
      <p>Here at Mcwaddles we make really good food deliverd reallly fast, to order from us click the meny on the right
        side :)</p>
        <p>Products in cart: <a id="clicks">0</a></p>
        <form action="../Server/SearchItems.php" method="GET">
	      <input type="text" name="query" class="searchfeildstyle" />
	      <input class="burgerbutton" type="submit" value="Search" />
        </form>
        
    </div>
    <div id="table" name="table">
      <button onclick="getTable()">Refresh Table</button>
      <?php include '../Server/productList.php';?>
    </div>

  </section>
  <footer>
    <p>Made by Zavier & Anson | 33314961 & 34212178 </p>
  </footer>
</body>

</html>