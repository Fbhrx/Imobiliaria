<?php
require_once 'model/Imovel.php';

class ImovelController {
    public static function salvar(){
        $imovel = new Imovel();

        $imovel->setId($_POST['id']);
        $imovel->setDescricao($_POST['descricao']);
        $imovel->setFoto($_POST['foto']);
        $imovel->setValor($_POST['valor']);
        $imovel->setTipo($_POST['tipo']);

        $imovel->save();
    }

    public static function listar(){
        $imoveis = new Imovel();
        return $imoveis->listAll();
    }

    public static function editar($id){
        $imovel = new Imovel();
        return $imovel->find($id);
    }

    public static function excluir($id){
        $imovel = new Imovel();
        $imovel->remove($id);
    }
}
?>
