<?php

	// Acesso as variaveis de secao
	session_start();

	// Se o isset() retornar TRUE, ou seja, se $_GET possuir o indece "erro", erro = o valor contido nesse indice, caso contrario, erro = 0
	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
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
	<script >
		$(document).ready( function() {

			$('#btn-login').click(function(){
				var campo_vazio = false;

				if ($('#input-login').val() == '') {
					// Muda a cor da borda caso o campo login esteja vazio
					$('#input-login').css({ 'border-color': '#A94442' });
					campo_vazio = true;
				} else {
					$('#input-login').css({ 'border-color': '#CCC' });
				}

				if ($('#input-senha-login').val() == '') {
					// Muda a cor da borda caso o campo senha esteja vazio
					$('#input-senha-login').css({ 'border-color': '#A94442' });
					campo_vazio = true;
				} else {
					$('#input-login').css({ 'border-color': '#CCC' });
				}

				if (campo_vazio) {
					return false;
				}
			});
		});
	</script>

	<title>Hello, world!</title>
</head>

<body>

	<!-- Barra de navegação -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary justify-content-between">
		<div class="container">
			<div>
				<a class="navbar-brand" h ="#">Sistema de Controle de Atividades Complementares</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
				</button>
			</div>

			<!--        <div>-->
			<!--        <div class="collapse navbar-collapse"  id="navbarSupportedContent">-->
			<!--            <ul class="navbar-nav mr-auto">-->
			<!--                <li class="nav-item">-->
			<!--                    <button class="btn btn-light mr-2" type="button">Coordenador</button>-->
			<!--                </li>-->
			<!---->
			<!--                <li class="nav-item">-->
			<!--                    <button class="btn btn-dark my-0" type="button">Administrador</button>-->
			<!--                </li>-->
			<!--            </ul>-->
			<!--        </div>-->
			<!--        </div>-->
		</div>
	</nav>
	<!-- /Barra de navegação -->


	<!-- Formulários -->
	<div class="container ">
		<div class="row justify-content-between container-formularios">

			<!-- Formulário de login -->
			<div class="col-md-5 formulario-login">
				<div class="titulo-formulario">
					Login
				</div>
				<form method="post" action="_database/login.php">
					<div class="form-group input-group-lg">
						<label for="input-login">Login</label>
						<input type="text" class="form-control" id="input-login" name="input-login" placeholder="Digite seu RA ou email">
					</div>
					<div class="form-group input-group-lg">
						<label for="input-senha-login">Senha</label>
						<input type="password" class="form-control" id="input-senha-login" name="input-senha-login" placeholder="Digite sua senha">
					</div>

					<button type="submit" class="btn btn-primary" id="btn-login">Entrar</button>
				</form>
			</div>
			<!-- /Formulário de login -->

			<!-- Exibe erro caso o login ou senha estejam incorretos -->
			<?php
				if ($erro == 1) {
					echo '<font color="#FF0000">Login ou senha incorretos</font>';
				}
			?>

			<!-- Formulário de cadastro de aluno -->
			<div class="col-md-5 formulario-cadastro">
				<div class="titulo-formulario">
					Cadastro do aluno
				</div>
				<form method="post" action="_database/cadastro_aluno.php">
					<div class="form-group input-group-sm">
						<label for="input-ra-cadastro">RA</label>
						<input type="text" class="form-control" id="input-ra-cadastro" name="input-ra-cadastro" aria-describedby="ra-dica" placeholder="Digite seu RA">
						<small id="ra-dica" class="form-text text-muted">Exemplo: 201411722015</small>
					</div>
					<div class="form-group input-group-sm">
						<label for="input-nome-cadastro">Nome</label>
						<input type="text" class="form-control" id="input-nome-cadastro" name="input-nome-cadastro" placeholder="Digite seu nome completo">
					</div>
					<div class="form-group input-group-sm">
						<label for="input-cpf-cadastro">CPF</label>
						<input type="text" class="form-control" id="input-cpf-cadastro" name="input-cpf-cadastro" placeholder="Digite seu CPF">
					</div>
					<div class="form-group input-group-sm">
						<label for="input-email-cadastro">Email</label>
						<input type="email" class="form-control" id="input-email-cadastro" name="input-email-cadastro" aria-describedby="email-dica" placeholder="Digite seu email">
						<small id="email-dica" class="form-text text-muted">Nós não vamos mostrar seu email para ninguém.</small>
					</div>
					<div class="form-group input-group-sm">
						<label for="input-curso-cadastro">Curso</label>
						<input type="text" class="form-control" id="input-curso-cadastro" name="input-curso-cadastro" value="Ciência da Computação">
					</div>
					<div class="form-group input-group-sm">
						<label for="input-password-cadastro">Senha</label>
						<input type="password" class="form-control" id="input-password-cadastro" name="input-password-cadastro" placeholder="Digite sua senha">
					</div>

					<button type="submit" class="btn btn-primary">Cadastrar</button>
				</form>
			</div>
			<!-- /Formulário de cadastro de aluno -->

		</div>

	</div>

	<!-- JavaScript Opcional -->
	<!-- jQuery primeiro, então Popper.js, então Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
