<?php
$config = parse_ini_file('config.ini'); 

$conn = mysqli_connect(
		$config['server'],
		$config['username'],
		$config['password'],
		$config['database']
	);

		if(!$conn){
		die('Error: ' . mysqli_connect_error());
	}
        