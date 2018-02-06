<?php

define('SECOND_IN_DAY', 86400);
define('PROJECT_NAME', 'Proverka');
$currentDate = time();
$yesterday = $currentDate - SECOND_IN_DAY * 7;


 echo $currentDate . "<br />";
echo date('d.m.y H:i:s', $yesterday) . "<br />" ;
echo date('d.m.y H:i:s') . "<br />";

require_once 'template.php';

?>
<!-- http://fi2.php.net/manual/ru/function.date.php some text-->


<!DOCTYPE html>
<html>
<head>
	 <?php require_once 'include/head.php'?>
</head>

<body>
	<div id="wrapper">
		<div id="content">
	<header>
		<?php
require “путь»
?>
	</header>
	<div class="user" align="middle">
	<div>
		<img class="ava" src="img/sobakaAva.jpg">
	</div>
	<div class="instauser">
		<label>Гав Кудревич</label>
	</div>
	<div class="time">
		<label> 8 часов назад</label>	
	</div>
</div>

<div class="sobitie" align="middle">
	<div>
		<img class="picture" src="img/SobakaPic.jpg">
	</div>
	 <div class="like_position">
            <img class="like" src="img/heart.jpg"/> 
            <div class="pointer">  
                 <label>40</label>
     </div>	
</div>
<div class="comment">
	<p>Решил сменить имидж.<a href=""> #smokedog </a><a href=""> #KapytanKudrevich </a> <a href=""> #Bigboss </a></p>
	</div>
</div>
<br/>
<div class="user" align="middle">
	<div>
		<img class="ava" src="img/sudar.jpg">
	</div>
	<div class="instauser">
		<label>Сэр Мяузер</label>
	</div>
	<div class="time">
		<label> 3 часа назад</label>	
	</div>
</div>

<div class="sobitie" align="middle">
	<div>
		<img class="picture" src="img/pocker.jpg">
	</div>
	 <div class="like_position">
            <img class="like" src="img/heart.jpg"/> 
            <div class="pointer">  
                 <label>184</label>
     </div>	
</div>
<div class="comment">
	<p>Цвет общеста играет в покер.<a href=""> #pocker </a><a href=""> #catmafia </a> <a href=""> #smoke </a></p>
	</div>
</div>
</div>
<footer>
	<?php
require “путь»
?>
</footer>
</div>
</body>
</html>