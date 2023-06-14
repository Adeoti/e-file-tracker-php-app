<?php
	try{
		$con = new PDO("mysql:dbhost=localhost; dbname=e_office", "root", "");
	}catch(PDOException $e){
		$e -> getMessage();
	}

?>