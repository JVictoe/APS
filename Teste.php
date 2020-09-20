<!DOCTYPE html>
<html>
<head>
	<title>Teste</title>
	<meta charset="utf-8">
</head>
<body style="background-color: red">

	<?php 
	
	// create a new cURL resource
	$ch = curl_init();

	// set URL and other appropriate options
	curl_setopt($ch, CURLOPT_URL, "http://localhost:8080/api/v1/carros/tipo/esportivos");
	curl_setopt($ch, CURLOPT_HEADER, 0);

	// grab URL and pass it to the browser
	curl_exec($ch);

	// close cURL resource, and free up system resources
	curl_close($ch);
	
?>

	<div>
		<div align="center">Informações</div>
	</div>

	<div>
				<a href="http://localhost:8080/api/v1/carros">
				Todos</a> |
				<a href="http://localhost:8080/api/v1/carros/tipo/esportivos">Esportivos</a> |
				<a href="info.html">Informática</a> |
				<a href="jogo.html">Jogos</a> |
				<a href="eletronicos.html">Eletrônicos</a> |
	</div>



</body>
</html>