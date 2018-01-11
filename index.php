<?php
$json = file_get_contents("json/general.json");
$exa_data = json_decode($json, true);

$page = $_SERVER['PHP_SELF'];
$sec = "10";
header("Refresh: $sec; url=$page");
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Exacoin stats</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
	<style>
	body, html {
	   height: 100%;
	   background-repeat:round;
	   background-image: url('img/topbg.jpg');
     color: #fff;
	}

	.card-container.card {
	   max-width: 350px;
	   padding: 40px 40px;
	}

	/*
	* Card component
	*/
	.card {
	   background-color: #404040;
	   /* just in case there no content*/
	   padding: 20px 25px 30px;
	   margin: 0 auto 25px;
	   margin-top: 50px;
	   /* shadows and rounded borders */
	   -moz-border-radius: 2px;
	   -webkit-border-radius: 2px;
	   border-radius: 2px;
	   -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	   -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	   box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	}


	</style>
	<script src="//code.jquery.com/jquery-1.11.1.min.js" type="text/javascript">
	</script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js" type="text/javascript">
	</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</script>
	<script src="https://exacoin.co/js/jquery.ui.highlight.min.js" type="text/javascript">
	</script>
	<script src="https://www.gstatic.com/firebasejs/4.6.1/firebase.js">
	</script>
	<script src="https://www.gstatic.com/firebasejs/4.6.1/firebase-firestore.js">
	</script>
</head>
<body>
	<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
	<div class="container">
		<div class="card card-container">
			<!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
			<img class="profile-img-card" id="profile-img" src="img/logo.png">
			<p class="profile-name-card" id="profile-name"></p>
			<h3><b>Exacoin Price:</b><i style="color:#00ffff;"> <br><?php echo $exa_data['price_exa'] ?></i></h3>
      <h3><b>Exacoin Price(btc):</b><i style="color:#0087ff;"> <?php echo $exa_data['btc_exa'] ?> BTC/EXA</i></h3>
      <h3><b>Exacoin Price(eth):</b><i style="color:#0087ff;"> <?php echo $exa_data['eth_exa'] ?> ETH/EXA</i></h3>
      <hr />
      <h3><b>Exacoin 24 Low:</b><i style="color:#de4444;"> <?php echo $exa_data['24_low'] ?></i></h3>
      <h3><b>Exacoin 24 High:</b><i style="color:#97ce42;"> <?php echo $exa_data['24_high'] ?></i></h3>
      <hr />
      <h3><b>Exacoin Volume:</b><i style="color:#f1cf21;"> <?php echo $exa_data['24_vol'] ?></i></h3>
		</div><!-- /card-container -->
	</div><!-- /container -->
  <script src="js/ai.js" type="text/javascript">
	</script>
</body>
</html>
