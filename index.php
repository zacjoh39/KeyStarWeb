<!DOCTYPE HTML>
<HTML>

<HEAD>

	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Home | KeyStar</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="js.js"></script>
	<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />


</HEAD>

<BODY>
	
	<div style=" position: fixed; width:100%;">
		<nav>
			<ul id="first-list">
				<div style="position: relative;overflow:hidden;height: 6.6vh;">
					<li><img src="images\keystar.png" align="right"></li>
					<li><a class="active" href="index.php">HOME</a></li>
					<li><img src="images\productsicon.png" align="right"></li>
					<li><a href="Products.php">PRODUCTS</a></li>
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
<div class="slidebg">
<div class="slideshow-container">
	<div class="mySlides fade">
    <div class="numbertext">$599</div>
    <img src="images\computer-1.png" style="width:100%; pointer-events: none;">
    <div class="text">Keystar Portal Ultra AMD-FX Series</div>
	</div>

	<div class="mySlides fade">
    <div class="numbertext">$750</div>
    <img src="images\computer-2.png" style="width:100%">
    <div class="text">Caption Two</div>
	</div>

	<div class="mySlides fade">
    <div class="numbertext">$999</div>
    <img src="images\computer-3.png" style="width:100%">
    <div class="text">Caption Three</div>
	</div>

  
</div>
	
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<div class="containerCol">
<a href="Products.php?sort=VGA">
       <div class="column column-left">
    		<div class="boximg ">
    		<img src="images\box.png" style="width:85%">
    		 <div class="text3">Video card</div>
    		 </div>
       </div>
</a>

  <a href="Products.php?sort=CPU">
       <div class="column column-right">
    		<div class="abc">
    		<img src="images\box2.png" style="width:85%">
    		 <div class="text3">CPU</div>
    		 </div>
       </div>
  </a>

  <a href="Products.php?sort=RAM">
       <div class="column column-center">
    		<img src="images\box3.png" style="width:85%">
    		<div class="text3">RAM</div>
       </div>

  </a>

  <a href="Products.php?sort=MB">

       <div class="column column-center">
    		<img src="images\box4.png" style="width:85%">
    		<div class="text3">Motherboard</div>
    </div>   
</div>

  </a>

<br>
<div class="containerCol">

  <a href="Products.php?sort=HDD">
   <div class="column column-left">
		<div class="boximg"><img src="images\box5.png" style="width:85%">
		 <div class="text3">Storage</div>
		 </div>
   </div>

   </a>

   <a href="Products.php?sort=IN">
   <div class="column column-right">
		<img src="images\box6.png" style="width:85%">
		<div class="text3">Input</div>
   </div>

   </a>

   <a href="Products.php?sort=PSU">
   <div class="column column-center">
		<img src="images\box7.png" style="width:85%">
		<div class="text3">PSU</div>
   </div>
    </a>

    <a href="Products.php?sort=CASE">
   <div class="column column-center">
		<img src="images\box8.png" style="width:85%">
		<div class="text3">Case</div>
   </div>
   </a>
  
   
</div>

	<div class="top"; style="position: relative; width:100%;">
	</div>
	
	

	

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" dotactive", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " dotactive";
}

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
