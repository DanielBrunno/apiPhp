<hr><h1>Buscar os Usuário por ID</h1>

<div class="row">
    <div style="text-align: center" class="col-md-1">
    </div>
    <div class="col-md-7">
        <form role="form" action="index.php?modulo=Usuario&acao=findId" method="POST">
            <div class="form-group">              
                <label for="exampleInputEmail1"> Id </label>
                <input style="width:100%;" type="text" name="id" class="form-control" id="id" title="id" placeholder="Informe o id"><br />
            </div>
            <div class="form-group">
                <input type="submit" value="Buscar" /><br />
            </div>
        </form>
    </div>
</div>

<pre>
    <?php 
    
    if(isset($_POST["id"]) && $data != NULL){
        echo "<br> Nome: ";
        for($i = 0; $i < count($data); $i++){
            echo "" .$data[$i]["nome"] . " - " .$data["$i"]["contato"] . ". <br>";
        }
    } else if(isset($_POST["id"]) && $data == NULL) echo "<br> Não existe contato cadastrado com o ID = ". $_POST['id'];
    else echo "Realize sua consulta!";

    ?> 
</pre>