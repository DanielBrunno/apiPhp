<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// SÓ ATIVAR QUANDO ESTIVER FINCIONANDO A PARTE DE SEGURANÇA - SENÃO IRÁ REDIRECIONAR PARA O INICIO
session_start();
//if((!isset($_SESSION['login']))) header("Location: ..\..\index.php");
?>

<hr><h2>Cadastrar exames com resultados que est&atilde;o acima do normal</h2>

<?
// SÓ ATIVAR QUANDO ESTIVER FINCIONANDO A PARTE DE SEGURANÇA - SENÃO IRÁ REDIRECIONAR PARA O INICIO
//session_start();
//if((!isset($_SESSION['login']))) header("Location: ..\..\index.php");
?>

<pre>
<?

$cpf = $_POST['cpf'];

if (isset($cpf)) {


echo "<br> Cadastrar exames para: ";

for($i = 0; $i < count($data); $i++){ 
   
   $id = $data[$i]["id"];
   
   echo "" .$data[$i]["nome"] . ", " .$data["$i"]["sobrenome"] . ".<br>"; 
    
} 


    
} else {  echo "CPF n&atilde;o encontrado!"; }

?>
</pre>

<div class="row" >
    <div style="text-align: center" class="col-md-1">
        
    </div>
    <div class="col-md-6">
        
                <form role="form" action="./index.php?modulo=ExamesClinicos&acao=push" method="POST">
            <div class="form-group">              
                <!-- pegar o id do usuario -->
                <input type="hidden" name="fkusuario" class="form-control" value="<? if($id) { echo $id; } else { echo "Cpf n&atilde;o encontrado"; } ?>" readonly><br>
                <label for="exampleInputEmail1">
                    Nome
                </label>
                <input type="text" name="nome" class="form-control" id="exampleInputPassword1" /><br />
                <label for="exampleInputEmail1">
                    valor
                </label>
                <input type="text" name="valor" class="form-control" id="exampleInputPassword1" /><br />
                <label for="exampleInputEmail1">
                    Unidade de Medida
                </label>
                <input type="text" name="unidmedida" class="form-control" id="exampleInputPassword1" ><br />
                <label for="exampleInputEmail1">
                    Porcentagem da Amostra
                </label>
                <input type="text" name="porcentamost" class="form-control" id="exampleInputPassword1" ><br />
                <label for="exampleInputEmail1">
                    Data do Exame
                </label>
                <input type="date" name="dtexame" class="form-control" id="exampleInputPassword1" /><br />
                <label for="exampleInputEmail1">
                    N&uacute;mero do Registro no Exame
                </label>
                <input type="text" name="idexterno" class="form-control" id="exampleInputPassword1" /><br />
                <label for="exampleInputEmail1">
                    nomemedico
                </label>
                <input type="text" name="nomemedico" class="form-control" id="exampleInputPassword1" /><br />
                <label for="exampleInputEmail1">
                    CRF || CRM M&eacute;dico
                </label>
                <input type="text" name="crfmedico" class="form-control" id="exampleInputPassword1" /><br />
                <label for="exampleInputEmail1">
                    Especialidade
                </label>
                <input type="text" name="especialmedic" class="form-control" id="exampleInputPassword1" /><br />
                <label for="exampleInputEmail1">
                    Local do Exame
                </label>
                <input type="text" name="localexame" class="form-control" id="exampleInputPassword1" /><br />                
                <label for="exampleInputEmail1">
                    M&eacute;todo Utilizado
                </label>
                <input type="text" name="metodo" class="form-control" id="exampleInputPassword1" ><br />
                <label for="exampleInputEmail1">
                    Categoria do Tipo do Exame
                </label>
                <input type="text" name="categoriatipo" class="form-control" id="exampleInputPassword1" ><br />
                <label for="exampleInputEmail1">
                    Subtipo do Exame
                </label>
                <input type="text" name="subtipo" class="form-control" id="exampleInputPassword1" ><br />
                <label for="exampleInputEmail1">
                    Cor
                </label>
                <input type="text" name="cor" class="form-control" id="exampleInputPassword1" ><br />
                <label for="exampleInputEmail1">
                    Descri&ccedil;&atilde;o do Laudo
                </label>
                <input type="text" name="descrilaudo" class="form-control" id="exampleInputPassword1" ><br />
                <label for="exampleInputEmail1">
                    Diagn&oacute;stico M&eacute;dico
                </label>
                <input type="text" name="diagnostmed" class="form-control" id="exampleInputPassword1" ><br />
                <label for="exampleInputEmail1">
                    Local onde se encontra arquivo digitalizado
                </label>
                <input type="text" name="localarquivo" class="form-control" id="exampleInputPassword1" ><br />
                <label for="exampleInputEmail1">
                    Observa&ccedil;&atilde;o
                </label>
                <input type="text" name="observacao" class="form-control" id="exampleInputPassword1" title="Observação informada pelo cliente"><br />                
                <label for="exampleInputEmail1">
                    Confirma
                </label>
                <input type="checkbox" name="ativo" class="form-control" required /><br />
            </div>
            <div class="form-group">
                <input type="submit" value="gravar" /><br />
            </div>

        </form>
        
    </div>
    <div style="text-align: center" class="col-md-4">
    </div>
</div>