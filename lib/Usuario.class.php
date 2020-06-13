<?php

/**
 * Description of Usuario
 *
 * @author Daniel Brunno
 * 
 * !IMPORTANTE: ====== AS FUNÇÕES AQUI TÊM O MESMO NOME DA VIEW =========
 */
class Usuario extends Model{	

    //put your code here

    private $id;
    private $nome;
    private $contato;
    private $email;
    private $senha;
    private $data = array();

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getSobreNome() {
        return $this->sobreNome;
    }

    function getContato() {
        return $this->contato;
    }

    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function getData() {
        return $this->data;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }


    function setData($data) {
        $this->data = $data;
    }

    // FUNÇÃO REFERENTE A VIEW -  todos 
    public function findAll() { // FUNÇÃO FINAL - COMPLETA
        $uDao = new UsuarioDao();
        return $uDao->findAll();
    }
        
   // FUNÇÃO REFERENTE A VIEW -  findId 
    public function findId() { // FUNÇÃO FINAL - COMPLETA
        $data = new UsuarioDao();
        return $data->findId();
    }

    public function push(){
        $uNovo = new UsuarioDao();
        return $uNovo->push();
        
    }
    
    public function update(){
        $uEdit = new UsuarioDao();
        return $uEdit->update();
        
    }
    
    public function deleteId(){
        $udeleteid = new UsuarioDao();
        return $udeleteid->deleteId();
    }
    
    public function requestLogin($login, $senha){
        $loginRest = new UsuarioDao();
        return $loginRest->requestLogin($login, $senha);
    }

    public function __toString() {
        if (is_null($this->login)) {
            return 'NULL';
        }
        return $this->login;
    }

}
