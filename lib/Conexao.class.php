<?php

/**
 * Description of Conexao
 *
 * @author Daniel Brunno
 */
class Conexao {
    //put your code here
	  
    private $usuario = "valter'@'%";
    private $senha = "@AtivInfor1";
    //private $caminho = "192.168.0.28"; // para usuario criado
    private $caminho = "localhost";
	
    private $banco = "cadastro";
    private $con;
    
    public function __construct() {
        $this->con = mysqli_connect($this->caminho, $this->usuario, $this->senha) or die ("Conexao com o banco de dados falhou" . mysqli_error($this->con));
        mysqli_select_db($this->con, $this->banco) or die ("Conexao com o banco de dados falhou" . mysqli_error($this->con));
    }
    
    public function getCon(){
        return $this->con;
    }
}
