
<!DOCTYPE html>
<html>
<title>OneTimeSystems</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1,h2,h3,h4,h5,h6 {
    font-family: "Playfair Display";
    letter-spacing: 5px;
}
</style>
<body>


<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">Healthy Foods Company</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">Must Know</a>
      <a href="#menu" class="w3-bar-item w3-button">New On Menu</a>
	  <a href="#contact" class="w3-bar-item w3-button">Your Opinion</a>
    <a href="indexpost.php" class="w3-bar-item w3-button">Notice Board</a>
    <a  href="indexpost.php" class="w3-bar-item w3-button" >Back</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <!--big image on the start of the page 
  <img class="w3-image" src="mages/foodamin.jpg" alt="food main" width="1600" height="800">
  --><div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge">Food Company</h1>
  </div>
</header>

<!-- Page content -->
<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

	</div>
		
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="images/foodmain.jpeg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">About Food Comapny</h1><br>
      <h5 class="w3-center">Tradition since 2015</h5>
      <p class="w3-large">The Company was founded in Dublin 2 by One Time System Group  in CCT College 3rd year lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute iruredolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.We only use <span class="w3-tag w3-light-grey">seasonal</span> ingredients.</p>
      <p class="w3-large w3-text-grey w3-hide-medium">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temporincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
  
  <hr>
  
  <!-- Menu Section -->
  <div class="w3-row w3-padding-64" id="menu">
    <div class="w3-col l6 w3-padding-large">
      <h1>These items will be added to our curent Menu from Septmber till December</h1><br>
      
	
    </div>	  
    </div>
    <div class="w3-col l6 w3-padding-large">
	 <h4>Tuna Salad bowl</h4>
      <img src="images/saladbowl.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
    </div>
	
	<div class="w3-col l6 w3-padding-large">
	 <h4>VegWrap </h4>
      <img src="images/wrap.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
    </div>
	
	<div class="w3-col l6 w3-padding-large">
	 <h4>VegWrap </h4>
      <img src="images/wrap.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
    </div>
	
	<div class="w3-col l6 w3-padding-large">
	 <h4>VegWrap </h4>
      <img src="images/wrap.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
    </div>
	
	
  </div>

  <hr>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-64" id="contact">
    <h1>Our Valued Staff</h1><br>
    <p>We value you as a staff member and we believe you might have have some opinions that you would like to share. And We understand your needs , if you have something please. Do not hesitate to contact us.</p>
    <p class="w3-text-blue-grey w3-large"><b>One Time Systems, 215 North circular Road, Dublin 7, Dublin</b></p>
    <p>You can also reach us by phone 0000000000 or email healthyfoods@onetimesystems.com, or you write your suggestions below:</p>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <!--<p><input class="w3-input w3-padding-16" type="number" placeholder="How many people" required name="People"></p>
      <p><input class="w3-input w3-padding-16" type="datetime-local" placeholder="Date and time" required name="date" value="2017-11-16T20:00"></p>
    --><p><input class="w3-input w3-padding-16" type="text" placeholder="Opinion / Suggetion" required name="Message"></p>
      <p><button class="w3-button w3-light-grey w3-section" type="submit">SEND </button></p>
    </form>
  </div>
  
<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
  <p>Powered by <a href="https://www.onetimesystems.com" title="W3.CSS" target="_blank" class="w3-hover-text-green">OneTimeSystems</a></p>
</footer>

</body>
</html>


