function verificaTipoDeLogin() {
    var txt_login = document.getElementById("input-login").value;
    // console.log(txt_login);

    if(isNumber(txt_login)){
        // Login do aluno
        // console.log("Usuário é aluno");

    } else if(txt_login == "admin"){
        // Login do Administrador
        // console.log("Usuário é administrador");
    } else {
        // Login do Coordenador
        // console.log("Coordenador");
    }
}

function isNumber(n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
}