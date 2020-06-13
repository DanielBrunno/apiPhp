<br><h1>Cadastrar Usu&aacute;rio</h1>
<pre>
    <?php 
    
    if(isset($_POST["nome"])){
        echo "<br>  Tudo ok. Deseja realizar outro cadastro?. </h2> ";
    } else echo "Realize seu cadastro!";

    ?> 
</pre>
<pre>
        <form role="form" action="index.php?modulo=Usuario&acao=push" method="POST" style="text-align: center;">
            <input type="text" name="nome" class="form-control" placeholder="Nome" />
            <input type="hidden" name="tipost" value="Cadastrar">
            <input type="text" name="contato" class="form-control" pattern="[0-9][0-9][0-9][0-9][0-9]0-9][0-9][0-9][0-9][0-9][0-9]{11}$"  placeholder="84988889999"  />
            <input type="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="nome@nome.com ou nome@nome.com.br" />
            <input type="password" name="senha" class="form-control" placeholder="Digite uma senha" />
            <label for="exampleInputEmail1"> Confirmar:
            <input type="checkbox" name="status" class="form-control" required /> </label>
            <input type="submit" style="background: #00FF00; color: #FFFFFF; font-size: 18pt; border-radius: 5px; border-bottom-color: #FFFFFF; width: 75%; height: 50px;" value="Cadastrar" />
        </form>
</pre>