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
                Cadastro de atividade complementar
            </div>
            <form method="post" action="_database/cadastro_atividade.php">
                <div class="form-group input-group-sm">
                    <label for="input-titulo-atividade">Titulo</label>
                    <input type="text" class="form-control" id="input-titulo-atividade" name="input-titulo-atividade" aria-describedby="titulo-dica" placeholder="Digite o titulo da atividade complementar">
                    <small id="titulo-dica" class="form-text text-muted">Exemplo: Curso de PHP</small>
                </div>
                <div class="form-group input-group-sm">
                    <label for="input-carga_hr-atividade">Carga horaria (horas)</label>
                    <input type="number" class="form-control" id="input-carga_hr-atividade" name="input-carga_hr-atividade" placeholder="Digite a carga horaria da atividade complementar">
                    <small id="carga_hr-dica" class="form-text text-muted">Exemplo: 30</small>
                </div>
                <div class="form-group input-group-sm">
                    <label for="input-ano-atividade">Ano</label>
                    <input type="number" class="form-control" id="input-ano-atividade" name="input-ano-atividade" placeholder="Digite o ano de participação da atividade">
                    <small id="ano-dica" class="form-text text-muted">Exemplo: 2018</small>
                </div>
                <div class="form-group input-group-sm">
                    <label for="input-tipo-atividade">Tipo</label>
                    <input type="text" class="form-control" id="input-tipo-atividade" name="input-tipo-atividade" aria-describedby="tipo-dica" placeholder="Selecione o tipo de atividade complementar">
                    <small id="tipo-dica" class="form-text text-muted">Exemplo: Curso de extensão</small>
                </div>

                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
        <!-- /Formulário de cadastro de atividade complementar -->

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