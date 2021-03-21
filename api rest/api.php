<?php
	$url = "http://localhost:8080/swagger-ui.html";
	$data = ['collection' = > 'EsercizioAPI'];
	$curl = curl_init($url);

	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($data));
	curl_setopt($curl, CURLOPT_HTTPHEADER, ['X-RapidAPI-Host: http://localhost:8080/swagger-ui.html', 'Content-Type: application/json']);

	$risposta = curl_exec ($curl) ;
	curl_close ($curl) ;
	echo $risposta . PHP_EOL; 
?>