<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="/~33314961/assignment2/WebClient/js/main.js"></script>
<?php



		$host = "localhost";
		$user = "X33314961";
		$passwd = "X33314961";
		$dbname = "X33314961";

		$dbc = mysqli_connect($host, $user,
		$passwd, $dbname);
		// check connection
		if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: "
		. mysqli_connect_error()
		. "<br/>Error number:"
		. mysql_connect_errno();
		}

		$sql = "SELECT * FROM products";
		$result = $dbc->query($sql);

		if(!$result){
			die("Invalid query:".$dbc->error);
		}
		
		while($row = $result->fetch_assoc()){
			echo "

                <div class ='product_selection'>
					<div id='product'>

						<p class ='name_product' name='checkout_name'>".$row["name"]."</p>
						<p class ='product_description' >".$row["description"]."</p>
						<p class ='product_price' name='checkout_price'>".$row["price"]."</p>
						<form class ='add_item_form'  action='..\Server\addItem.php' method='POST'>
							<input class = 'product_quantity_box' 	type='number' name='amount'>
							<input class = 'add_items_button' onClick='onClick()' type='submit' value='Add Item'	name='add_btn'>
						</form>
						
					</div>
					<img class='product_image' src='".$row["product_images"]."'/>
				</div>

                        
                ";
		}


	?>