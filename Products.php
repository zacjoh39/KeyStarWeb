<!DOCTYPE HTML>
<HTML>

<HEAD>

	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Products | KeyStar</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="js.js"></script>
	<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />

</HEAD>

<BODY>

	<div id="nav">
		<nav>
			<ul id="first-list">
				<div style="position: relative;overflow:hidden;height: 6.6vh;">
					<li><img src="images\keystar.png" align="right"></li>
					<li><a href="index.php">HOME</a></li>
					<li><img src="images\productsicon.png" align="right"></li>
					<li><a class="active" href="Products.php">PRODUCTS</a></li>
					<li><img src="images\abouticon.png"  align="right"></li>
					<li><a href="About.php">ABOUT</a></li>
					<li><button id="b1" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button></li>	
				</div>
			</ul>
		</nav>
	</div>
	<div class="top"; style="position: relative; width:100%;">
	</div>
	
	<br>


<div id="sortform">
	<form action=products.php method="get" name="prodsort">
		
			<select name="sort">
				<option value="VGA">Video Card</option>
				<option value="CPU">CPU</option>
				<option value="RAM">RAM</option>
				<option value="MB">Motherboard</option>
				<option value="HDD">Storage</option>
				<option value="PSU">Power Supply</option>
				<option value="CASE">Case</option>
				<option value="IN">Input</option>
			</select>
		<input type="submit" name="filtersubmit" value="filter">
		
	</form>
</div>




<?php
$mysqlip = "127.0.0.1";
$username = "root";
$password = "";
if(isset($_GET["sort"])){
	$sort = $_GET["sort"];
}

$connection = new mysqli($mysqlip,$username,$password,"HW");
$productQuery = $connection->query("SELECT * FROM parts");

while($row = mysqli_fetch_assoc($productQuery)){
	if(isset($_GET["sort"])){


		if($row["ProdType"]==$sort){

			$productName = $row["Name"];
			$productPrice = $row["Price"];
			$img = "images/".$row["Img"];
			
			echo '
			
				<div id="productContainer">
					<div class="prodCol">
					   <div class="column prodBox unstyled">
							<div class="boximg ">
								<img src='.$img.' style="width:85%; height: 35vh;">
								<div class="text2">
									<p class="prodName">'.$productName.'</p>
									<p class="prodPrice">$'.$productPrice.'</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			
			';
		}
	}else{
		$productName = $row["Name"];
			$productPrice = $row["Price"];
			$img = "images/".$row["Img"];
			
			echo '
			
				<div id="productContainer">
					<div class="prodCol">
					   <div class="column prodBox unstyled">
							<div class="boximg ">
								<img src='.$img.' style="width:85%; height: 35vh;">
								<div class="text2">
									<p class="prodName">'.$productName.'</p>
									<p class="prodPrice">$'.$productPrice.'</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				';
	}
}
?>




	
<script>
	// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
	
	</body>

	</html>