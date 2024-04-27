<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuario</title>
</head>
<body>
    <form name="cadUsuario" id="cadUsuario" action="" method="post">
        <label for="login">Login: </label>
        <input type="text" name="login" id="login"><br/>
        <label for="Senha1">Senha: </label>
        <input type="password" name ="senha1" id="senha1"><br/>
        <label for="senha2">Confirmação da Senha: </label>
        <input type="password" name="senha2" id="senha2"><br/>
        <label for="permissao">Tipos de permissão</label>
        <select name="permissao" id="permissao">
            <option value="0">**SELECIONE**</option>
            <option value="A">Administrador</option>
            <option value="C">Comum</option>
        </select><br/><br/>
        <button>GAYYYYYYYYYYYY</button>
        <input type="submit" name="btnSalvar" id="btnSalvar">
    </form>
</body>

<?php 

//verifica se o botão submit foi acionado
if(isset($_POST['btnSalvar'])){

    //importa o UsuarioController.php
    require_once '../controller/UsuarioController.php';
    //chama a função PHP que permite informar a classe e o Método que será acionado
    call_user_func(array('UsuarioController','Salvar'));
}
?>