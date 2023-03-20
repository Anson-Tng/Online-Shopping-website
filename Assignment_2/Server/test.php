<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Mcwaddles | Assignment 2 </title>
  <link rel="stylesheet" type="text/css" href="/~33314961/assignment2/WebClient/css/main.css" />
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
        <a href="/~33314961/assignment2/WebClient/orders" class="link">ORDERS</a>
      </li>
      <li>
        <a href="/~33314961/assignment2/WebClient/login" class="link">LOGIN / REGISTER</a>
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
      <h2>About our products</h2>
      <p>Here at Mcwaddles we make really good food deliverd reallly fast, to order from us click the meny on the right
        side :)</p>

    </div>
    <div id="table" name="table">
        <form action="..\Server\login.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" name="login-btn">Login</button>
        </form>
        
        <?php
            if(isset($_SESSION['userid'])){
                echo '<p>LOG IN</p>';
            }else{
                echo '<p>LOG OFF</p>';
            }
        ?>
    </div>


  </section>
  <footer>
    <p>Made by Zavier & Anson | 33314961 & 34212178 </p>
  </footer>
</body>

</html>