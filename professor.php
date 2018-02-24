<!doctype html>
<html lang="pt-br">
<head>
    <!-- Meta tags necessárias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Estilo css -->
    <link rel="stylesheet" href="_css/estilo.css">

    <!-- Arquivos JavaScript -->
    <script src="_js/index.js"></script>

    <title>Atividade</title>
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
    <div class="row justify-content-center container-formularios">

        <!-- Formulário de atividae -->
        <div class="col-md-5 formulario-atividade" >
            <div class="titulo-formulario">
                Cadastro de professor
            </div>
            <form method="post" action="_database/cadastro_professor.php">
                <div class="form-group input-group-sm">
                    <label for="input-nome-professor">Nome</label>
                    <input type="text" class="form-control" id="input-nome-professor" name="input-nome-professor" aria-describedby="titulo-dica" placeholder="Digite o nome do professor">
                </div>
                <div class="form-group input-group-sm">
                    <label for="input-email-professor">Carga horaria (horas)</label>
                    <input type="email" class="form-control" id="input-email-professor" name="input-email-professor" placeholder="Digite o email do professor">
                </div>
                
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <small id="ra-dica" class="form-text text-muted">Cadastar professor</small>
            </form>
        </div>
        <!-- Formulário de cadastro de atividade complementar -->

    </div>

</div>



<!-- JavaScript Opcional -->
<!-- jQuery primeiro, então Popper.js, então Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>