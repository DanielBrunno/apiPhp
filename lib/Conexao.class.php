<?php

/**
 * Description of Conexao
 *
 * @author Daniel Brunno
 */
class Conexao {
    //put your code here 
    
    // BANCO RODANDO ON LINE
    /* private $usuario = "consumo_valter";    
    private $senha = "@Ativ123";
    private $caminho = "clubedeconsumidores.com.br";
    private $banco = "consumo_atividades";
    private $con;
    */

// BANCO RODANDO LOCALHOST NO XAMPP
    private $usuario = "valter";
    private $senha = "@AtivInfor1";
    private $caminho = "127.0.0.1";
    private $banco = "cadastro";
    private $con;
    
    
    public function __construct() {
        $this->con = mysqli_connect($this->caminho, $this->usuario, $this->senha) or die ("Conexao com o banco de dados falhou" . mysqli_error($this->con));
        mysqli_select_db($this->con, $this->banco) or die ("Conexao com o banco de dados falhou" . mysqli_error($this->con));
    }
    
    public function getCon(){ return $this->con; }
}
