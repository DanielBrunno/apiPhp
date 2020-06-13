<?php

/**
 * Description of Conexao
 *
 * @author Daniel Brunno
 */
class Conexao {
    //put your code here 

    /*
    private $usuario = "danie932_ativdan";
    private $senha = "@Ativ123";
    private $caminho = "http://danielbrunno.com.br/";
    private $banco = "danie932_atividades";
    private $con;
    */
    
    private $usuario = "root";
    private $senha = "";
    private $caminho = "localhost";	
    //private $caminho = "127.0.0.1";
    private $banco = "cadastro";
    private $con;

    /*
    private $usuario = "valter";
    private $senha = "@AtivInfor1";
    private $caminho = "localhost";	
    //private $caminho = "127.0.0.1";
    private $banco = "cadastro";
    private $con;
     */
    
    public function __construct() {
        $this->con = mysqli_connect($this->caminho, $this->usuario, $this->senha) or die ("Conexao com o banco de dados falhou" . mysqli_error($this->con));
        mysqli_select_db($this->con, $this->banco) or die ("Conexao com o banco de dados falhou" . mysqli_error($this->con));
    }
    
    public function getCon(){ return $this->con; }
}
