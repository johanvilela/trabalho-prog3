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
    <link rel="stylesheet" href="_css/estilo-adim.css">

    <title>Hello, world!</title>
</head>
<body>
<div class="container">

    <!-- Formulário com os dados do coordenador -->
    <div class="row flex-container flex-center">
        <div class="col-sm-12 col-md-8 col-lg-6 form-add-coordenador">
            <div class="titulo-formulario">
                Dados do Coordenador
            </div>
            <form>
                <div class="form-group">
                    <label for="input-coord-nome">Nome</label>
                    <input type="text" class="form-control" id="input-coord-nome" placeholder="Digite o nome do coordenador">
                </div>
                <div class="form-group">
                    <label for="input-coord-email">email</label>
                    <input type="email" class="form-control" id="input-coord-email" placeholder="Digite o email do coordenador">
                </div>
                <div class="form-group">
                    <label for="input-coord-senha">Senha</label>
                    <input type="password" class="form-control" id="input-coord-senha" placeholder="Digite a senha do coordenador">
                </div>
                <input class="btn btn-danger" type="reset" value="Limpar dados">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>

        </div>
    </div>
    <!-- /Formulário com os dados do coordenador -->

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