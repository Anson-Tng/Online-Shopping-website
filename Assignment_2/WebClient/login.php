<?php 
    session_start();
?>

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
    <div class="login">
      <div class="text">
        <h1> Mcwaddles Login & Register</h1>
        <h2>To login please enter your credentials below or create an account</h2>
        <a class="burgerbutton" href="/~33314961/assignment2/WebClient/order">TRACK YOUR ORDER</a>
  </header>

  <section class="landing-page">
    <div class="loginmenutext">
      <h2>Login below</h2>
      <p>Login to order items :)</p>

    </div>
    <div id="table" name="table">
      <form action="..\Server\login.php" method="post">
        <input class="searchfeildstyle" type="text" name="username" placeholder="Username">
        <input class="searchfeildstyle" type="password" name="password" placeholder="Password">
        <button class="burgerbutton" type="submit" name="login-btn">Login</button>
      </form>

      <?php
            echo '<p><strong>'.$_SESSION['status'].'</strong></p>';
            if(isset($_SESSION['userid'])){
                echo "<p class='space' ><strong>CURRENTLY LOGGED IN</strong></p>";


                echo "
                <p>To change your current user data, please fill out the areas you want to change and hit Login. </p>
                <form action='..\Server\profileUpdate.php' method='post'>
                <input class='searchfeildstyle' type='text' name='name' placeholder='name'>
                <input class='searchfeildstyle' type='text' name='email' placeholder='name'>
                <input class='searchfeildstyle' type='password' name='password' placeholder='password'>
                <input class='searchfeildstyle' type='text' name='mobile' placeholder='mobile'>
                <input class='searchfeildstyle' type='text' name='address' placeholder='address'>
                <button class='burgerbutton' type='submit' name='profile-update-btn'>Change Info</button>
                </form>  
                ";
                echo '<p><strong>'.$_SESSION['status'].'</strong></p>';
                echo "
                  <p class='space' >To log ot of your account, please select the button below. </p>
                  <form action='..\Server\logout.php' method='post'>
                  <button class='burgerbutton' type='submit' name='login-btn'>Logout</button>
                  </form>  
                ";

            }else{
              echo '<p>'.$_SESSION['status'].'</p>';
            }
        ?>

    </div>

    <?php
      // if(isset($_SESSION['userid'])){
      //   echo "
      //   <p>To change your current user data, please fill out the areas you want to change and hit Login. </p>
      //   ";
      // }
    ?>

    <div class="cloginmenutext">
      <h2>Create a account below</h2>
      <div id="table" name="table">
      <form class="createacc" action="..\Server\signup.php" method="post">
        <p>Username: </p><input class="searchfeildstyle" type="text" name="username" placeholder="Username">
        <p>Name: </p><input class="searchfeildstyle" type="text" name="name" placeholder="name">
        <p>Type: </p><input class="searchfeildstyle" type="text" name="type" placeholder="type">
        <p>Email: </p><input class="searchfeildstyle" type="text" name="email" placeholder="email">
        <p>Password: </p><input class="searchfeildstyle" type="password" name="password" placeholder="Password">
        <p>Mobile: </p><input class="searchfeildstyle" type="number" name="mobile" placeholder="mobile">
        <p>Address: </p><input class="searchfeildstyle" type="text" name="address" placeholder="address">  
        <button class="burgerbutton" type="submit" name="signup_btn">Create Account</button>
      </form>

      <?php
        echo '<p>'.$_SESSION['sign-up-status'].'</p>';
      ?>

        

    </div>



  </section>
  <footer>
    <p>Made by Zavier & Anson | 33314961 & 34212178 </p>
  </footer>
</body>

</html>