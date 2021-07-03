<?php

	define("HOST", "localhost");
	define("USER", "root");
	define("PASS", "");
	define("BASE", "pitzeria");

/*
original
	$link = mysql_connect(HOST, USER, PASS) or die(mysql_error());
	mysql_select_db(BASE, $link,) or die(mysql_error());
*/
	$link = mysqli_connect(HOST, USER, PASS) or die(mysqli_error($link));
	mysqli_select_db($link, BASE) or die(mysqli_error($link));

	//echo 'cheguei aqui';
	//die;
?>