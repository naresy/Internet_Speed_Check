<script>
	function myFunction() {
	  var x = document.getElementById("myTopnav");
	  if (x.className === "topnav") {
		x.className += " responsive";
	  } else {
		x.className = "topnav";
	  }
	}
</script>

<div class="topnav" id="myTopnav">
	<a href="./" class="home"><i class="fas fa-house-damage"></i></a>
	<a href="about.php" class="<?php if (basename($_SERVER['PHP_SELF']) == "about.php") { ?> selected <?php } ?>">About us</a>
	
	
	<a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
</div>