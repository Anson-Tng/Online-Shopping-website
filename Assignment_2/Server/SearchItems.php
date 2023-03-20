
<?php
	$host = "localhost";
    $user = "X33314961";
    $passwd = "X33314961";
    $dbname = "X33314961";

    $dbc = mysqli_connect($host, $user,$passwd, $dbname);
    if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: "
    . mysqli_connect_error()
    . "<br/>Error number:"
    . mysql_connect_errno();
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
    <div class="searchpage">
      <div class="text">
        <h1> Mcwaddles Search results</h1>
        <form action="../Server/SearchItems.php" method="GET">
	      <input type="text" name="query" class="searchfeildstyle" />
	      <input class="burgerbutton" type="submit" value="Search" />
        </form> 
  </header>
<?php
	
    $query = $_GET['query']; 
	$min_length = 3;
    echo "<div id=searchresults>";
	if(strlen($query) >= $min_length){
		
		$query = htmlspecialchars($query);
        


        $sql = "SELECT * FROM products WHERE name LIKE '% ".$query."%' OR description LIKE '% ".$query."%';";
        $result = $dbc->query($sql);
        if(!$result){
            die("Invalid query:".$dbc->error);
        }

        if(mysqli_num_rows($result) > 0){ 
	
			while($tempresults = mysqli_fetch_array($result)){
                echo "<div id=singlesearch>";
				echo "<p><h3>".$tempresults['name']."</h3>".$tempresults['description']."</p>";
			}			
		}
		else{ 
			echo "No results";
		}

    }
    else{ 
		echo "Minimum length is ".$min_length;
	}

?>
</body>
</html>