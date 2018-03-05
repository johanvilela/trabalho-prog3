<?php
	session_start();
	require_once("_database/busca_lista.php");
?>

<!doctype html>
<html lang="pt-br">

<head>
	<!-- Meta tags necessárias -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- Estilo css -->
	<link rel="stylesheet" href="_css/estilo.css">

	<!-- Arquivos JavaScript -->
	<script src="_js/index.js"></script>

	<title>Hello, world!</title>
</head>

<body>


	<!-- Barra de navegação -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary justify-content-between">
		<div class="container">
			<div>
				<a class="navbar-brand" href="#">Sistema de Controle de Atividades Complementares</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
			</div>
		</div>
	</nav>

	<div class="container">


		<h2>Relatórios</h2>
		<form method="get" action="">
			<div class="form-group row">
				<input type="text" class="form-control col-sm-10" id="input-busca" name="input-busca" placeholder="Refinar a busca pelo RA">
				<button type="submit" class="btn btn-primary col-sm-2">Entrar</button>
			</div>
		</form>


		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nome</th>
					<th scope="col">Estado</th>
				</tr>
			</thead>
			<tbody id="tabela-relatorios">
				<tr>
					<th scope="row">1</th>
					<td>Johan Vilela</td>
					<td>Em avaliação</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>Michael Jordan</td>
					<td>Aceito</td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td>Marcos Otário</td>
					<td>Rejeitado</td>
				</tr>
				<tr>
					<th scope="row">4</th>
					<td>Xuxu Alves</td>
					<td>Submetida</td>
				</tr>
				<tr>
					<th scope="row">5</th>
					<td>Bob Marley</td>
					<td>Aguardando</td>
				</tr>

			</tbody>
		</table>
	</div>

	<!-- Criando novas linhas -->
	<script>
		//    var contadd = 0;

		function addLine(nome) {

			var linha = document.createElement("tr");
			var celula_numero = document.createElement("th");
			celula_numero.setAttribute("scope", "row");
			celula_numero.innerHTML = 'num';

			var celula_nome = document.createElement("td");
			celula_nome.innerHTML = nome;
			var celula_estado = document.createElement("td");
			celula_estado.innerHTML = 'estado';

			linha.appendChild(celula_numero);
			linha.appendChild(celula_nome);
			linha.appendChild(celula_estado);

			var tb = document.getElementById('tabela-relatorios');

			tb.appendChild(linha);

			//        contadd++;
		}

		console.log($_SESSION);

		for (i = 0; i < $_SESSION['nomes'].length; i++) {
			addLine($_SESSION['nomes'][i]);
		}
	</script>
	<!-- /Criando novas linhas -->


	<!-- JavaScript Opcional -->
	<!-- jQuery primeiro, então Popper.js, então Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
