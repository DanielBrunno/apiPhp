<?php

/**
 * Description of UsuarioDao
 *
 * @author Daniel Brunno
 */
class UsuarioDao {

    //put your code here
    private $conexao;

    public function __construct() {
        $this->conexao = new Conexao();
    }
    
 /****************************************************************************************************************************************************************************
                                                                                FUNÇÕES DE RETORNO ARRAY           
  ****************************************************************************************************************************************************************************/
        

//INSERIR REGISTRO
    public function push() { // FUNÇÃO FINAL - COMPLETA

        if (isset($_POST) && count($_POST) >= 1) {
            
            $nome = $_POST['nome'];
            $contato = $_POST['contato'];
            $email = $_POST['email'];
            $senha = sha1($_POST['senha']);
            if ($senha) {                
                $execute = "INSERT INTO usuario (nome , contato, email, senha)"
                        . " VALUES ('$nome', '$contato', '$email', '$senha') ";
                $link = mysqli_query($this->conexao->getCon(), $execute);
                echo  "<script>alert('Registro Gravado com Sucesso!');</script>";
            } else { echo "NAO GRAVADO NO BANCO <br>"; }
                
            header('location: http://www.localhost/cadastro/index.php?modulo=Usuario&acao=push');                
            $postData = array($nome, $contato, $email);

        } else { $postData = array("nenhum POST foi enviado"); }
    return $postData;
    } 
    
//ALTERAR REGISTRO
    public function update() { 
        
        if(isset($_POST['cpf']) && ($_POST['tipost'] == "Buscar")){
        
        $cpf = $_POST['cpf'];
        $sql = 'SELECT * FROM usuario WHERE cpf = "'.$cpf.'" '; 
        $result = mysqli_query($this->conexao->getCon(), $sql);
        $rowcount = mysqli_num_rows($result);
        $usuarios = array($rowcount);
        if ($rowcount > 0) {
            $postData = array();
            while ($row = $result->fetch_assoc()) { 
            $postData[] = $row; // transformo os dados em objetos e copio para o array
            }
        }
            
        return $postData; //retorno os dados em array
        
        } elseif (isset($_POST["id"]) && ($_POST['tipost'] == "Editar")){
            
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $contato = $_POST['contato'];
            $email = $_POST['email'];
            $senha = sha1($_POST['senha']);

            $query = "UPDATE usuario SET nome='$nome', contato='$contato', email='$email' WHERE id='$id'";
            $link = mysqli_query($this->conexao->getCon(), $query);        
        
            return $postData; //retorno os dados em array
        
        } else { return null; }
            
    }
    
//DELETAR POR ID
    public function deleteId(){
        
        if(isset($_POST['id']) && ($_POST['tipost'] == "Buscar")){
            $id = $_POST['id'];
            $sql = 'SELECT * FROM usuario WHERE id = "'.$id.'" '; 
            $result = mysqli_query($this->conexao->getCon(), $sql);
            $rowcount = mysqli_num_rows($result);
            $usuarios = array($rowcount);

            if ($rowcount > 0) {
                $postData = array();
                while ($row = $result->fetch_assoc()) { 
                $postData[] = $row; // transformo os dados em objetos e copio para o array
                }
            }
            return $postData; //retorno os dados em array
        
            } elseif (isset($_POST["id"]) && ($_POST['tipost'] == "Deletar")){            
                $id = $_POST['id'];
                $deleteq = 'DELETE FROM usuario WHERE id = "'.$id.'" '; 
                $link = mysqli_query($this->conexao->getCon(), $deleteq);
            return true; //retorno os dados em array        
            } else { return false; }        
    }
    
//MOSTRAR TODOS 
    public function findAll() { // FUNÇÃO COMPLETA E VERIFICADA

        $sql = "SELECT id, nome, contato, email FROM usuarios";
        $result = mysqli_query($this->conexao->getCon(), $sql);
        $rowcount = mysqli_num_rows($result);
        $usuarios = array($rowcount);

        if ($rowcount > 0) {                
            $postData = array();            
            while ($row = $result->fetch_assoc()) { 
            $postData[] = $row; // transformo os dados em objetos e copio para o array
        }        
        return $postData; //retorno os dados em array
            
        } else { return $postData = null; }

    }
    
        
//MOSTRAR POR ID
    public function findId() { // FUNÇÃO COMPLETA E VERIFICADA
        if(isset($_POST["id"])){
            $id = $_POST['id'];
            $sql = 'SELECT id, nome, contato, email FROM usuarios WHERE id = "'.$id.'" '; 
            $result = mysqli_query($this->conexao->getCon(), $sql);
            $rowcount = mysqli_num_rows($result);
            $usuarios = array($rowcount);

            if ($rowcount > 0) {                
                $postData = array();            
                while ($row = $result->fetch_assoc()) { 
                    $postData[] = $row; // transformo os dados em objetos e copio para o array        
            }
            return $postData; //retorno os dados em array
            }
        
        } else { return $postData = NULL;  }  
            
    }
    
//MOSTRAR POR LOGIN COM RETORNO TODOS CAMPOS
    public function findLogin($email,$senha) { // FUNÇÃO COMPLETA E VERIFICADA
        $sql = "SELECT * FROM usuario WHERE email = '".$email."' AND senha = '" .sha1($senha). "' "; 
        $result = mysqli_query($this->conexao->getCon(), $sql);
        $rowcount = mysqli_num_rows($result);
        $usuarios = array($rowcount);

        if ($rowcount > 0) {                
            $postData = array();            
            while ($row = $result->fetch_assoc()) { 
                $postData[] = $row; // transformo os dados em objetos e copio para o array
        }
        return $postData; //retorno os dados em array            
        } else { return $postData = NULL; }           
    }
    
}