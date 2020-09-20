<!DOCTYPE html>
<html>
	<head>
		<title>TecBlog - O seu blog de tecnologia</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
	</head>
	<body>
		<div id="cabecalho">

			<div id="area-logo">
				<h1>Carros<span class="branco">All</span></h1>
			</div>
			<div id="area-menu">
				<a href="home.php">Home</a> |
				<a href="celular.php">Celulares</a> |
				<a href="info.php">Informática</a> |
				<a href="jogo.html">Jogos</a> |
				<a href="eletronicos.html">Eletrônicos</a> |
			</div>
		</div>



		<div id="area-principal">

			<div id="menu-lateral">
				<div class="conteudo-lateral">

					<h3>Postagens recentes</h3>

					<div class="postagem-lateral">
						<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						</p>
						<a href="">Leia mais</a>
					</div>

					<div class="postagem-lateral" style="border-bottom: none;">
						<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						</p>
						<a href="">Leia mais</a>
					</div>

				</div>

				<div id="menu-lateral">
				<div class="conteudo-lateral">

					<h3>Categorias</h3>

					<ul>
						<li>
							<a href="home.php">Home</a> <br>
						</li>
						<li>
							<a href="celular.php">Celulares</a> <br></li>
						<li>
							<a href="info.php">Informática</a> <br>
						</li>
						<li>
							<a href="jogo.php">Jogos</a> <br>
						</li>
						<li>
							<a href="eletronicos.php">Eletrônicos</a> <br>
						</li>
					</ul>
					
				</div>
			</div>

			</div>
			
			<div id="postagens">
				<div class="postagem">
					<h2>Todos os carros</h2>
					<span class="data">20 março 2020</span>
					<img width="620" src="image/imagem1.jpg">
					<?php 

						// create a new cURL resource
						$ch = curl_init();

						// set URL and other appropriate options
						curl_setopt($ch, CURLOPT_URL, "http://localhost:8080/api/v1/carros");
						curl_setopt($ch, CURLOPT_HEADER, 0);

						// grab URL and pass it to the browser
						curl_exec($ch);

						// close cURL resource, and free up system resources
						curl_close($ch);

					?>
					<a href="">Leia mais</a>
					
				</div>
			</div><!-- Fechamento postagem 1 -->

			<div id="postagens">
				<div class="postagem">
					<h2>Titulo da postagem 2</h2>
					<span class="data">10 março 2020</span>
					<img width="620" src="image/imagem2.jpg">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					<a href="">Leia mais</a>
					
				</div>
			</div><!-- Fechamento postagem 2 -->

			

			<div id="rodape">
				Todos os direitos reservados
			</div>

		</div>

	</body>
</html>