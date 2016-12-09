<?php
	header("HTTP/1.0 418 I'm a teapotos");
	header("Content-type: application/json");

	$user123 = [
		"id" => 123,
		"name" => "Romeo",
	];

	//var_dump($_SERVER);
	$uri = $_SERVER["PATH_INFO"];

	$method = $_SERVER["REQUEST_METHOD"];

	if ($uri == "/user/123") {
		if ($method == "GET") {
			header("HTTP/1.0 200 OK");
			echo json_encode($user123);
		}
		else{
			header("HTTP/1.0 405 METHOD NOT ALLOWED");
		}
	}
	else {
		header("HTTP/1.0 404 Not Found");
	}
?>