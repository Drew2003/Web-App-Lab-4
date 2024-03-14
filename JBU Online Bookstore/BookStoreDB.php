<!DOCTYPE html>
<html>
	<head> 
		<title>Menu with CSS </title>
		
		<link rel="stylesheet" href="css/bookstylesDB.css" />

		<script type="text/javascript" src="js/myjsDB.js"></script>
		
	</head>

	<?php include ("demo_db_connection.php"); ?>

	<body bgcolor="#fff">
		<br><br><br>

	<center>
		<img src = "images/jbu.jpg" width = "100px" height = "120px">
	</center>

	<h1 align="center"> JBU Online Store </h1>
	
	
	<ul>
		<li class="menu-item"><a href="#" class="drp">Books </a>
			<div class="menu-content">
				<a class = "link-content1" href="add_book.php">Add Book</a><br>
				<a class = "link-content2" href="remove_book.php">Remove Book</a><br>
				<a class = "link-content3" href="display_books.php">Display all Books</a><br>
			</div>
		</li>
		
		<li class="menu-item"><a href="#" class="drp">Books </a>
		<div class="menu-content">
			<a  href="add_book.php">Add Book</a><br>
			<a  href="remove_book.php">Remove Book</a><br>
			<a href="display_books.php">Display all Books</a><br>
		</div>
		</li>
		
		<li class="menu-item"><a href="#" class="drp">Users </a>	
		<div class="menu-content">
			<a href="add_user.php">Add User</a><br>
			<a href="remove_user.php">Remove User</a><br>
			<a href="display_users.php">Display all Users</a><br>
		</div>
		</li>
	</ul>
	<p align="center"> Welcome to JBU's Online store - open for faculty/staff and students!<p>
	
	<!-- <table align = "center" >
		<tr>
			<td><a href = "javascript:void:(0)" onclick = "popupfunction('1')"><img src = "images/WindowsLogo.png" width = "75%"/></a>
				<br><button id = "surface" value = "surface" onclick = "getCart('Surface Laptop \n')"> Add to Cart </button></td>

			<td><a href = "javascript:void:(0)" onclick = "popupfunction('2')"><img src = "images/macOSLogo.png" width = "50%" /></a>
				<br><button id = "mac" value = "mac" onclick = "getCart('MacBook Air \n')"> Add to Cart </button></td>

			<td><a href = "javascript:void:(0)" onclick = "popupfunction('3')"><img src = "images/ipadLogo.png" width = "50%" /></a>
				<br><button id = "ipad" value = "ipad" onclick = "getCart('iPad \n')"> Add to Cart </button></td>
		</tr>
	</table>
	<table align = "center">
		<tr>
			<td><a href = "javascript:void:(0)" onclick = "popupfunction('4')"><img src = "images/nothingLogo.png" width = "80%" />
				<br></a><button id = "nothingear2" value = "nothingear2" onclick = "getCart('Nothing Ear 2 \n')"> Add to Cart </button></td>

			<td><a href = "javascript:void:(0)" onclick = "popupfunction('5')"><img src = "images/airpods.png" width = "50%" /></a>
				<br><button id = "airpod" value = "airpod" onclick = "getCart('Airpod Pro \n')"> Add to Cart </button></td>
		</tr>
	</table>

	<div id="popup1" class="white_content">
		<p align=center><br><br>
			<img src="images/SurfaceLaptop.avif" width=30% /><br>Surface Laptop<br><br>Price:$800<br>Rating: 4<br>
			<a href = "javascript:void(0)" onclick = "popupclose('1')" class=linktext>close window</a>
		</p>
		</div>
	<div id="fade1" class="black_content"></div>


	<div id="popup2" class="white_content">
	<p align=center><br><br>
		<img src="images/macbookAir.jpg" width=30% /><br>MacBook<br><br>Price:$1000<br>Rating: 5<br>
		<a href = "javascript:void(0)" onclick = "popupclose('2')" class=linktext>close window</a>
	</p>
	</div>
	<div id="fade2" class="black_content"></div>


	<div id="popup3" class="white_content">
		<p align=center><br><br>
			<img src="images/ipadImage.webp" width=30% /><br>iPad<br><br>Price:$1000<br>Rating: 5<br>
			<a href = "javascript:void(0)" onclick = "popupclose('3')" class=linktext>close window</a>
		</p>
		</div>
	<div id="fade3" class="black_content"></div>


	<div id="popup4" class="white_content">
		<p align=center><br><br>
			<img src="images/nothingear2.jpg" width=30% /><br>Nothing Earbuds<br><br>Price:$100<br>Rating: 4<br>
			<a href = "javascript:void(0)" onclick = "popupclose('4')" class=linktext>close window</a>
		</p>
		</div>
	<div id="fade4" class="black_content"></div>


	<div id="popup5" class="white_content">
		<p align=center><br><br>
			<img src="images/airpodPro.webp" width=30% /><br>Airpods<br><br>Price:$160<br>Rating: 5<br>
			<a href = "javascript:void(0)" onclick = "popupclose('5')" class=linktext>close window</a>
		</p>
		</div>
	<div id="fade5" class="black_content"></div>
-->


	<button id = "showcart" class = "cartbutton" onclick="showmycart()"> <img src = "images/cart.jpg" width = "50px" height = "50px"> </button>

	<div id = "mycart" class = "cart" style = "display: none">
	</div>
	
	<?php

		/* $sql_user = "SELECT * FROM users_tab";
		$result_user = $connect -> query($sql_user);

		while($row_user = $result_user -> fetch_assoc())
		{
			echo $row_user["username"]."<br>";
			echo $row_user["city"]."<br>";
			echo $row_user["contact_email"]."<br>";
			echo "<hr><br>";
		}
		*/

		$sql_product = "SELECT * FROM product_tab";
		$result_product = $connect -> query($sql_product);

		$count = 1;
		?>

		<table align = "center" width = 80% border = 1>
			<tr>
			<?php

			while($row_product = $result_product -> fetch_assoc())
			{
				?>
					<td>
						<?php echo $row_product["product_name"]."<br>"; ?> 
						<?php echo $row_product["unit_price"]."<br>"; ?>
						<?php echo "<img src='".$row_product["product_img"]."'/>"; ?> 
						<input type = "button" value="Add to Cart" onClick="javascript:getCart('<br><?php echo $row_product["product_name"]; ?>')" />
						<?php echo "<hr><br>"; ?> 
					</td>
				
				<?php

				if ($count == 2)
				{
					echo "</tr><tr>";
					$count = 1;
				}
				else
				{
					$count++;
				}

			} ?>
		</table>
	</body>
</html>



