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

    <title>Hello, world!</title>
</head>
<body>

<div class="container flex-container flex-center ">
    <div class="row justify-content-between container-formularios">

        <!-- Formulário de login de aluno -->
        <div class="col-md-5 formulario-aluno" style="//border: solid 1px red;">
            <div class="titulo-formulario">
                Login do aluno
            </div>
            <form>
                <div class="form-group input-group-lg">
                    <label for="input-email-login">Email</label>
                    <input type="email" class="form-control" id="input-email-login" aria-describedby="emailHelp" placeholder="Digite seu email">
                </div>
                <div class="form-group input-group-lg">
                    <label for="input-senha-login">Senha</label>
                    <input type="password" class="form-control" id="input-senha-login" placeholder="Digite sua senha">
                </div>

                <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
        </div>
        <!-- /Formulário de login de aluno -->

        <!-- Formulário de cadastro de aluno -->
        <div class="col-md-5 formulario-professor" style="//border: solid 1px green;">
            <div class="titulo-formulario">
                Cadastro do aluno
            </div>
            <form>
                <div class="form-group input-group-sm">
                    <label for="input-ra-cadastro">RA</label>
                    <input type="text" class="form-control" id="input-ra-cadastro" aria-describedby="ra-dica" placeholder="Digite seu RA">
                    <small id="ra-dica" class="form-text text-muted">Exemplo: 201411722015</small>
                </div>
                <div class="form-group input-group-sm">
                    <label for="input-nome-cadastro">Nome</label>
                    <input type="text" class="form-control" id="input-nome-cadastro" placeholder="Digite seu nome completo">
                </div>
                <div class="form-group input-group-sm">
                    <label for="input-cpf-cadastro">CPF</label>
                    <input type="text" class="form-control" id="input-cpf-cadastro" placeholder="Digite seu CPF">
                </div>
                <div class="form-group input-group-sm">
                    <label for="input-email-cadastro">Email</label>
                    <input type="email" class="form-control" id="input-email-cadastro" aria-describedby="email-dica" placeholder="Digite seu email">
                        <small id="email-dica" class="form-text text-muted">Nós não vamos mostrar seu email para ninguém.</small>
                </div>
                <div class="form-group input-group-sm">
                    <label for="input-nome-cadastro">Curso</label>
                    <input type="text" class="form-control" id="input-nome-cadastro" placeholder="Ciência da Computação">
                </div>
                <div class="form-group input-group-sm">
                    <label for="input-password-cadastro">Senha</label>
                    <input type="password" class="form-control" id="input-password-cadastro" placeholder="Digite sua senha">
                </div>

                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
        <!-- /Formulário de cadastro de aluno -->

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