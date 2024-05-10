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
        $usuario->setId($_POST['id']);
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

    /**
     * Mostrar formulário para editar um usuario
     */
    public static function editar(){
        //cria um objeto do tipo Usuario
        $usuario = new Usuario;

        $usuario = $usuario->find($id);

        return $usuario;
    } 

    /**
     * Apagar um usuario conforme o id informado
     */
    public static function excluir($id){
        //cria um objeto do tipo usuario
        $usuario = new Usuario;

        $usuario = $usuario->remove($id);
    }
}

?>