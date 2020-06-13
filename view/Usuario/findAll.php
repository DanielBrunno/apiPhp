<hr><h1>Todos os Usu&aacute;rios</h1>
<pre>
    
<?php 
//print_r($data); //exibe um array com todos os registros não ativar, só para teste
$msn = "Oi. Teste de Mensagem da API Contatos";
echo "Nome: <br><br> ";

for($i = 0; $i < count($data); $i++){
$nome = $data[$i]["nome"];    
$contato = $data[$i]["contato"];    
echo "" . $nome . " - " . $contato . " <a style='text-align:left;' href=' https://api.whatsapp.com/send?phone=+55" . $contato. "&text=" . $msn. " '><button style='background: #00FF00; color: #FFFFFF; font-size: 14pt; border-radius: 5px; border-bottom-color: #FFFFFF;'>Enviar Whatssap</button></a> <br><br> ";

}

//echo $_SERVER["REMOTE_ADDR"]; //EXIBE O IP
?>

</pre>