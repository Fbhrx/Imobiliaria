<?php 

require_once "Model/Usuario.php";

class UsuarioController{

    /**
     * Salvar o usuario submetido pelo formulário
     */
    public static function salvar(){
        //cria um objeto do tipo Usuario
        $usuario = new Usuario;

        //armazena as informações do $_POST via set
        $usuario->setLogin($_POST['login']);
        $usuario->setSenha($_POST['senha1']);
        $usuario->setPermissao($_POST['permissao']);

        // chama o método save para gravar as informações no banco de dados
        $usuario->save();
    }

    /**
    * Lista os usuarios
    */
    public static function listar(){
        //cria um objeto do tipo Usuario
        $usuarios = new Usuario;
        //chama o método listAll()
        return $usuarios->listAll();
    }
}

?>