<? header("Content-Type: text/html; lang:pt-br; charset=ISO-8859-1",true); ?>

<!DOCTYPE html>
<html>
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Cadastro de Contatos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="view/resources/assets/css/temaAzul.css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
    
    <!-- INÍCIO DO MENU SUPERIOR -->
    
    <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">IN&Iacute;CIO</a></li>
       <!-- <li><a href="index.php?modulo=Usuario&acao=novo">CADASTRE-SE</a></li> -->
        <li><a href="#contact"></a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">LOGIN
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><hr></li>
            <!--  <li><a href="#band">LOGIN</a></li>
                  <form method="POST" action="index.php?modulo=#&acao=#">
                      <input type="text" name="login" placeholder="Digite o Usu&aacute;rio" required> 
                      <input type="password" name="senha" placeholder="Senha" required>
                      <br>
                      <li><input type="submit" name="Entrar" value="ENTRAR" /> </li>
                  </form>
                <li><hr></li> -->   
              <li><a href="#band">USU&Aacute;RIO</a></li>                    
              <li><a href="./index.php?modulo=Usuario&acao=findAll"><i class="icon-user"></i> Mostrar Todos </a></li>
              <li><a href="./index.php?modulo=Usuario&acao=findId"><i class="icon-user"></i> Mostrar por Id </a></li>
              <!-- <li><a href="./index.php?modulo=Usuario&acao=findpush"><i class="icon-user"></i> Inserir </a></li>
              <li><a href="./index.php?modulo=Usuario&acao=findpush"><i class="icon-user"></i> Editar </a></li>
              <li><a href="./index.php?modulo=Usuario&acao=findpush"><i class="icon-user"></i> Deletar </a></li> -->
              </li>
              <li><hr></li>          
          </ul>
        </li>        
      </ul>
    </div>
  </div>
</nav>
<hr />