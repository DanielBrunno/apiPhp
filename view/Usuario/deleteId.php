<hr><h1>Deletarf Usuário</h1>

<div class="row">
    <div style="text-align: center" class="col-md-1">
    </div>
    <div class="col-md-7">
        <form role="form" action="index.php?modulo=Usuario&acao=deleteId" method="POST">
            <div class="form-group">              
                <label for="exampleInputEmail1">
                    ID
                </label>
                <input style="width:100%;" type="text" name="id" class="form-control" id="exampleInputPassword1" pattern="[0-9][0-9][0-9]+.[0-9][0-9][0-9]+.[0-9][0-9][0-9]+-[0-9][0-9]{3,3,3,2}$" title="Digite o cpf" placeholder="999.999.999-99"><br />
                <input type="hidden" name="tipost" value="Buscar"><br />
            </div>
            <div class="form-group">
                <input type="submit" value="Buscar" /><br />
            </div>
        </form>
    </div>
    <div style="text-align: center" class="col-md-4">
        <img style="width: 50%;" alt="Bootstrap Image Preview" src="view/resources/images/logo_gitLab.jpg">
    </div>
</div>

<pre>
    
<? 

if (isset($_POST["id"])) {


for($i = 0; $i < count($data); $i++){  

?>
            <form action="index.php?modulo=Usuario&acao=deleteId" method="POST">
                
                Id: <? echo $data[$i]["id"]; ?> - <? echo $data[$i]["nome"]; ?> <? echo $data[$i]["sobrenome"]; ?> - Cpf: <? echo $data[$i]["cpf"]; ?> - Contato: <? echo $data[$i]["contato"]; ?>.
                <input type="hidden" name="id" value="<? echo $data[$i]["id"]; ?>"  readonly />
                <input type="hidden" name="nome" value="<? echo $data[$i]["nome"]; ?>" />
                <input type="hidden" name="tipost" value="Deletar">
                <input type="hidden" name="sobrenome" value="<? echo $data[$i]["sobrenome"]; ?>" />
                <input type="hidden" name="contato" pattern="(+[0-9][0-9]+)+ [0-9][0-9][0-9][0-9][0-9]+-[0-9][0-9][0-9][0-9]{2,5,4}$"  placeholder="(99) 99999-9999" value="<? echo $data[$i]["contato"]; ?>" />
                <input type="hidden" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="nome@nome.com ou nome@nome.com.br" value="<? echo $data[$i]["email"]; ?>" />

                Confirma: <input type="checkbox" name="status" required />
                <input type="submit" value="Deletar" />

        </form>


<?

}
} else {  echo "Realize sua consulta!";  }

?> 

</pre>





