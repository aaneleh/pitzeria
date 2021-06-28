<?php

	define("HOST", "localhost");
	define("USER", "root");
	define("PASS", "");
	define("BASE", "agenda");

/*
original
	$link = mysql_connect(HOST, USER, PASS) or die(mysql_error());
	mysql_select_db(BASE, $link,) or die(mysql_error());
*/
	$link = mysqli_connect(HOST, USER, PASS) or die(mysql_error());
	mysqli_select_db($link, BASE) or die(mysql_error());

	//echo 'cheguei aqui';
	//die;
?>