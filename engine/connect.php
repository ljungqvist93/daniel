<?php

	error_reporting(E_ERROR | E_WARNING | E_PARSE);

	ini_set('display_errors', 'Off'); 

	$db = new PDO('mysql:host=127.0.0.1;dbname=u707713646_cyberlad;charset=latin1', 'u707713646_daniel', 'Daniel93');
    //$db = new PDO('mysql:host=127.0.0.1;dbname=danielljungqvist;charset=latin1', 'root', '');

	include 'functions.php';