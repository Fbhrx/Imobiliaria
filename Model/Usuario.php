<?php 

require_once 'Banco.php';
require_once '../Conexao.php';

class Usuario extends Banco{

    private $id;
    private $login;
    private $senha;
    private $permissao;

    public function getId(){
        return $this->$id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getLogin(){
        return $this->$login;
    }

    public function setLogin($login){
        $this->login = $login;
    }

    public function getSenha(){
        return $this->$senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function getPermissao(){
        return $this->$permissao;
    }

    public function setPermissao($permissao){
        $this->permissao = $permissao;
    }

    public function save(){
        $result = false;

        //cria um objeto do tipo conexão
        $conexao = new Conexao();
        //cria query de inserção passando os atributos que serão armazenados
        $query = "insert into usuario (id, login, senha, permissao) values (null,:login,:senha,:permissao)";
        //cria a conexao com o banco de dados
        if($conn = $conexao->getConnection()){
            //prepara a query para execução 
            $stmt = $conn->prepare($query);
            //executa a query
            if($stmt->execute(array(':login' => $this->login, ':senha' => $this->senha, ':permissao' => $this->permissao))){
                $result = $stmt->rowCount();
            }
        }
    return $result;
}

    public function remove($id){
        
    }

    public function find($id){
        
    }

    public function count(){
        
    }

    public function listAll(){
        //cria um objeto do tipo conexao 
        $conexao = new Conexao();
        //cria a conexao com o banco de dados
        $conn = $conexao->getConecction();
        //cria query de seleção
        $query = "SELECT * FROM usuario";
        //prepara a query para a execução
        $stmt = $conn->prepare($query);
        //cria um array para receber o resultado da seleção
        $result = array();
        //executa a query
        if($stmt->execute()){
            //O resultado da busca será retornado como o um objeo de classe
            while($rs = $stmt->fetchObject(Usuario::class)){
                //armazena esse objeto em uma posição do vetor
                $result[] = $rs;
            }
        } else {
            $result = false;
        }

        return $result;
    }
}
?>