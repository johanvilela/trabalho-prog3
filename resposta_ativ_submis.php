<!-- Requisito 4.
Resposta quando submetida atividade pro aluno.
Quando submetido sistema deverá gerar relatório (HTML e PDF)
com todas as atividades cadastradas, listando-as por ano. -->


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

	<title>Lista de Atividades Submetidas</title>
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
    <h2>Lista de Atividades Submetidas</h2>

    <!-- Tabela com Atividades Submetidas por ano -->
    <table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Titulo</th>
					<th scope="col">Carga horaria</th>
          <th scope="col">Ano</th>
          <th scope="col">Tipo</th>
          <!-- <th scope="col">RA</th> -->
				</tr>
			</thead>
      <tbody id="tabela-atividades">
        <tr>
					<th scope="row">1</th>
					<td></td>
					<td></td>
          <td></td>
          <td></td>
				</tr>
      </tbody>
      <script scr="busca_lista_ativ.php"></script>
    </table>



    <!-- JavaScript Opcional -->
  	<!-- jQuery primeiro, então Popper.js, então Bootstrap JS -->
  	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </div>

</body>
