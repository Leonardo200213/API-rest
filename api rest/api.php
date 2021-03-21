<?php
function fpost(){
	$url = "http://localhost:8080/swagger-ui.html";
	$data = ['collection' = > 'EsercizioAPI'];
	$curl = curl_init($url);

	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($data));
	curl_setopt($curl, CURLOPT_HTTPHEADER, ['X-RapidAPI-Host: http://localhost:8080/swagger-ui.html', 'Content-Type: application/json']);

	$response = curl_exec ($curl) ;
	curl_close ($curl) ;
	echo $response . PHP_EOL; 
}


function fget(){
	$url = 'http://localhost:8080/swagger-ui.html';
	$collection_name = 'EsercizioAPI';
	$request_url = $url . '/' . $collection_name;

	$curl = curl_init($request_url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_HTTPHEADER, ['X-RapidAPI-Host: http://localhost:8080/swagger-ui.html', 'Content-Type: application/json']);

	$response = curl_exec($curl);
	curl_close($curl);
	echo $response . PHP_EOL;
}


function fput(){
	$url = 'http://localhost:8080/swagger-ui.html';
	$collection_name = 'EsercizioAPI';
	$request_url = $url . '/' . $collection_name;

	$data = ['public_write' => true];
	$curl = curl_init($request_url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
	curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($data));
	curl_setopt($curl, CURLOPT_HTTPHEADER, ['X-RapidAPI-Host: http://localhost:8080/swagger-ui.html', 'Content-Type: application/json']);
	
	$response = curl_exec($curl);
	curl_close($curl);
	echo $response . PHP_EOL;
}


function fdelete(){
	$url = 'http://localhost:8080/swagger-ui.html';
	$collection_name = 'EsercizioAPI';
	$request_url = $url . '/' . $collection_name;

	$curl = curl_init($request_url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DELETE');
	curl_setopt($curl, CURLOPT_HTTPHEADER, ['X-RapidAPI-Host: http://localhost:8080/swagger-ui.html', 'Content-Type: application/json']);
	
	$response = curl_exec($curl);
	curl_close($curl);
	echo $response . PHP_EOL;
}
?>