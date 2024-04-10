

	<?php 
	$stad = $_GET['query']; // hämtar info om stad 
$units = $_GET['units']; // hämtar väder värden

// information om API data 
$DataAPI = @file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=". $stad ."&appid=c01dd007b2a6bab8b8fee59008e3f772&units=$units");

//hämtar info 
$infovariabel = json_decode($DataAPI, true); 


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

<br><br>
<div class="box1">
	<br>
	<h2 class="ord">Weather site</h2>


<p class="ord">Information om vädret:</p>
 
<table class="ord">
	
<tr> 
<!-- I varje php tag så hämtas specefik väder info om väder, tempratur, vind, vad tempraturen käns och luft fuktighet. -->
<td> Väder: </td> <td> <?=  $infovariabel['weather']['0']['main']; ?></td>

</tr>

<tr> 

<td> Tempratur: </td> <td><?=  $infovariabel['main']['temp']; ?> </td>

</tr>

<tr>

<td> vind: </td> <td><?=  $infovariabel['wind']['speed']; ?> </td>

</tr>

<tr>

<td> tempratur känsla: </td> <td><?=  $infovariabel['main']['feels_like']; ?></td>

</tr>

<tr>

<td> Luft fuktighet: </td> <td><?=  $infovariabel['main']['humidity']; ?>%</td>

</tr>

</table>

<br>
<!-- Genom att trycka på knapen läses sidan in och ändrar värdena på sidan till fahrenheit(tempratur) och fot(vind)  -->
<a href="weatherinfo.php?query=<?=$stad?>&units=imperial">
<button class="button4 button5 ord"> Fahrenheit °F</button></a>

<!-- Genom att trycka på knapen läses sidan in och ändrar värdena till celsius(tempratur) och vind till m/s  -->
<a href="weatherinfo.php?query=<?=$stad?>&units=metric">
<button class="button4 button7 ord"> Celsius °C</button>
</a>
<br>

<a href="weather.php">
<button class="button4 button8 ord"> Backa</button>
</a>

<br><br>

</div>

</div> <!--  -->
  </div> <!-- container -->





	</body>
	</html>