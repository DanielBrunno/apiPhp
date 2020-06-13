<hr><h1>Todos os Usu&aacute;rio</h1>
<pre>
    
<?php 
//print_r($data); //exibe um array com todos os registros não ativar, só para teste
$msn = "Oi. Teste de Mensagem da API Contatos";
echo "Nome: ";

for($i = 0; $i < count($data); $i++){
$nome = $data[$i]["nome"];    
$contato = $data[$i]["contato"];    
echo "" . $nome . " - " . $contato . " <a href=' https://api.whatsapp.com/send?phone=" . $nome. "&text=" . $msn. " '><button>Enviar Whatssap</button></a> ";

}

//echo $_SERVER["REMOTE_ADDR"]; //EXIBE O IP
?>

</pre>