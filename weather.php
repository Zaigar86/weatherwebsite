<?php 
//skickar sökernen vidare på sökningen till sidan för respektive plat och världena är i celsius och m/s.
if (!empty($_POST['query'])) {
	// code...
	header("Location: weatherinfo.php?stad=" . $_POST['query'] . "&units=metric" );
}

  ?>

	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css
    ">
		<title>Weather</title>
	</head>

<style type="text/css">

</style>

	<body>

<div class="container">
<div class="text-center">

<br><br><br><br><br><br><br>
<div class="box1">
	<br>
	<h2 class="ord">Weather site</h2>


<!-- Denna bitt är en kopia på php som finns längst uppe i koden på rad 5 -->
<p class="ord">Sök på önskad stad för att se vädret:</p>
 <form action="weatherinfo.php" method="GET">
 	<input type="hidden" name="units" value="metric">
        <input type="text" name="query" placeholder="Skriv namn på staden..." class="ord">
        <input type="submit" value="Sök" class="button3 button2 ord">
    </form>

<br><br>

</div>

</div> <!--  -->
  </div> <!-- container -->





	</body>
	</html>