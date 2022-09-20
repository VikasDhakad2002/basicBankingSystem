<?php
	$db=new PDO('mysql:host=localhost;port=3306;dbname=ideal_bank','garvisha','password');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>