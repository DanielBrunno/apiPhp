<?php 
//INÍCIO DA ÁREA DE VERIFICAÇÃO, SESSÃO E COOKIES
// Se a sessão não existir, inicia uma
if (!isset($_SESSION)) session_start();

// Salva os dados encontrados na sessão
$nome = $_SESSION['Nome'];
$login = $_SESSION['Login'];
$nivel = $_SESSION['Nivel'];
$status = $_SESSION['Status'];

//echo $nome . " - " . $nivel . " - " . $login . " - " . $status . "<br>";

// Salva os dados encontrados na Cookies
setcookie("login", $login, time() + 5);  /* expira em 1 minuto se quiser 1 hora temque colocar 3600 */
setcookie("nome", $nome, time() + 5);  /* expira em 1 minuto se quiser 1 hora temque colocar 3600 */
setcookie("nivel", $nivel, time() + 5);  /* expira em 1 hora */
setcookie("status", $status, time() + 5);  /* expira em 1 hora */ ?>
<div id="ajusteTela"><br><br><br><br><br>
   
    <style>
    /* On screens that are 600px or less, set the background color to olive */
    @media only screen and (max-width: 480px) {                                        
        #ajusteTela { display: none; }
        .fone { 
        width: 100%;
        font-size: 150%;
        }
        .carinha { }
        img{ width: 100px;}
    }
    </style>

</div>

<div>
<!-- -----------------------------------------------  MENU  -------------------------------------------------------------------- -->
<? include "view/menu.php"; ?>
<? // include "http://finesaude.com.br/view/menu.php"; ?>
<!-- -----------------------------------------------  MENU  -------------------------------------------------------------------- -->
</div>
<!-- INÍCIO DO CONTAINER-->
<div id="main-content">
    
    
<div class="container-fluid">

<!-- BEGIN PAGE HEADER-->
<div class="row-fluid">
	<div class="span12">
    </div>	
</div>

<div class="row-fluid">
	<!-- TÍTULO DA PÁGINA & MIGALHAS DE PÃO -->
	<div class="span12">
    	<div class="span6">
			<h3 class="page-title">Escritório Virtual<small> Informações Gerais </small></h3>
			<ul class="breadcrumb">
				<li><a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span></li>
                  <li><a href="index.php"></a> <span class="divider">&nbsp;</span></li>
				<li><a href="#">Painel</a><span class="divider-last">&nbsp;</span></li>
			</ul>	
		</div>
		<div class="span6"></div>
		<!-- FIM DO TÍTULO DA PÁGINA & MIGALHAS DE PÃO -->
	</div>
</div>
<!-- FIM DO HEADER-->

<STYLE>
input {  width: 95%; }
.col-md-7 { padding:0px 0px 0px 80px; }
</STYLE>

<?
// SÓ ATIVAR QUANDO ESTIVER FINCIONANDO A PARTE DE SEGURANÇA - SENÃO IRÁ REDIRECIONAR PARA O INICIO
session_start();
//if((!isset($_SESSION['login']))) header("Location: ..\..\index.php");
?>

<hr><h1>Editar Usuário</h1>

<div class="row">
    <div style="text-align: center" class="col-md-1">
    </div>
    <div class="col-md-7">
        <form role="form" action="index.php?modulo=Usuario&acao=update" method="POST">
            <div class="form-group">              
                <label for="exampleInputEmail1">
                    Cpf
                </label>
                <input style="width:100%;" type="text" name="cpf" class="form-control" id="exampleInputPassword1" pattern="[0-9][0-9][0-9]+.[0-9][0-9][0-9]+.[0-9][0-9][0-9]+-[0-9][0-9]{3,3,3,2}$" title="Digite o cpf" placeholder="999.999.999-99"><br />
                <input type="hidden" name="tipost" value="Buscar"><br />
            </div>
            <div class="form-group">
                <input type="submit" value="Buscar" /><br />
            </div>
        </form>
    </div>
    <div style="text-align: center" class="col-md-4">
       <!-- <img style="width: 50%;" alt="Bootstrap Image Preview" src="view/resources/images/logo_gitLab.jpg"> -->
    </div>
</div>

<pre>
    
<? 

if (isset($_POST["cpf"])) {


for($i = 0; $i < count($data); $i++){  
echo "<br>";


?>

    <div style="text-align: center" class="col-md-1">
    </div>
    <div class="col-md-6">
                <form role="form" action="index.php?modulo=Usuario&acao=update" method="POST">
            <div class="form-group">  
             <label for="exampleInputEmail1">
                    Id
                </label>
                <input type="text" name="id" class="form-control" id="exampleInputPassword1" value="<? echo $data[$i]["id"]; ?>" /><br />
                <label for="exampleInputEmail1">
                    Nome
                </label>
                <input type="text" name="nome" class="form-control" id="exampleInputPassword1" value="<? echo $data[$i]["nome"]; ?>" /><br />
                <input type="hidden" name="tipost" value="Editar"><br />
                <label for="exampleInputEmail1">
                    Sobrenome
                </label>
                <input type="text" name="sobrenome" class="form-control" id="exampleInputPassword1" value="<? echo $data[$i]["sobrenome"]; ?>" /><br />
                <label for="exampleInputEmail1">
                    Cpf
                </label>
                <input type="text" name="cpf" class="form-control" id="exampleInputPassword1" pattern="[0-9][0-9][0-9]+.[0-9][0-9][0-9]+.[0-9][0-9][0-9]+-[0-9][0-9]{3,3,3,2}$" title="Digite o cpf" placeholder="999.999.999-99" value="<? echo $data[$i]["cpf"]; ?>" /><br />
                <label for="exampleInputEmail1">
                    Contato
                </label>
                <input type="text" name="contato" class="form-control" id="exampleInputPassword1" pattern="(+[0-9][0-9]+)+ [0-9][0-9][0-9][0-9][0-9]+-[0-9][0-9][0-9][0-9]{2,5,4}$"  placeholder="(99) 99999-9999" value="<? echo $data[$i]["contato"]; ?>" /><br />
                <label for="exampleInputEmail1">
                    Data de Nascimento
                </label>
                <input type="date" name="dtnascimento" class="form-control" id="exampleInputPassword1" value="<? echo $data[$i]["dtnasc"]; ?>" /><br />
                <label for="exampleInputEmail1">
                    Idade
                </label>
                <input type="text" name="idade" class="form-control" id="exampleInputPassword1" value="<? echo $data[$i]["idade"]; ?>" /><br />
                <label for="exampleInputEmail1">
                    Sexo
                </label>
                <input type="text" name="sexo" class="form-control" id="exampleInputPassword1" value="<? echo $data[$i]["sexo"]; ?>" /><br />
                <label for="exampleInputEmail1">
                    Peso
                </label>
                <input type="text" name="peso" class="form-control" id="exampleInputPassword1" value="<? echo $data[$i]["peso"]; ?>" /><br />
                <label for="exampleInputEmail1">
                    Altura
                </label>
                <input type="text" name="altura" class="form-control" id="exampleInputPassword1" value="<? echo $data[$i]["altura"]; ?>" /><br />
                <label for="exampleInputEmail1">
                    e-mail
                </label>
                <input type="email" name="email" class="form-control" id="exampleInputPassword1" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="nome@nome.com ou nome@nome.com.br" value="<? echo $data[$i]["email"]; ?>" /><br />

                <label for="exampleInputEmail1">
                    Confirma
                </label>
                <input type="checkbox" name="status" class="form-control" required /><br />
                <input type="submit" value="Editar" /><br />

        </form>
        
    </div>


<?

}
} else {  echo "Realize sua consulta!";  }

?> 

</pre>





