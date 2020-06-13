<br>
<h1>Editar Usu&aacute;rio</h1>
 <div style="text-align: center" class="col-md-1">
    </div>
    <div class="col-md-2">
        <form role="form" action="index.php?modulo=Usuario&acao=update" method="POST">
            <div class="form-group">              
                <input type="hidden" name="tipost" value="Buscar"><br />
                <input style="width:100%;" type="text" name="id" title="Digite o id" placeholder="Digite o ID do contato">
            </div>
            <div class="form-group">
                <input type="submit" value="Selecionar" /><br />
            </div>
        </form>
    </div>
<pre>
      
<?php

 if(isset($data) && $_POST["tipost"] == "Buscar"){
    echo "<div class='col-md-6'>
            <form role='form' action='index.php?modulo=Usuario&acao=update' method='POST'>
            <div style='text-align: center' class='col-md-1'></div>     
                <div class='form-group'> ";
    for($i = 0; $i < count($data); $i++){  
        echo "<input type='hidden' name='tipost' value='Editar'  readonly/>
              Id: <input type='text' name='id' class='form-control' value='". $data[$i]['id'] . "'  readonly required />
              Nome: <input type='text' name='nome' class='form-control' value='". $data[$i]['nome'] . "' required />
              Contato: <input type='text' name='contato' class='form-control' value='". $data[$i]['contato'] . "' required />
              E-mail: <input type='text' name='email' class='form-control' value='". $data[$i]['email'] . "' required />
              Senha: <input type='password' name='senha' class='form-control' value='' required />
              <label> Confirmar: <input type='checkbox' name='status' required /> </label>
              <input type='submit' style='background: #00FF00; color: #FFFFFF; font-size: 14pt; border-radius: 5px; border-bottom-color: #FFFFFF; width: 75%; height: 50px;' value='Alterar' />
             ";
     }
     echo "</form>
     </div>";
     
     } else if(isset($data) && $_POST["tipost"] == "Editar"){
        if(isset($_POST["nome"])) echo "<h4>  Tudo ok. Deseja editar outro cadastro?. </h4> ";
    } else {  
        if(isset($_POST['tipost']) && $data == null && $_POST["tipost"] == "Buscar") echo "Não Contato com o Id = " . $_POST['id'] . "<br>";
        echo "Realize sua consulta!";  
    }

?> 
</pre>