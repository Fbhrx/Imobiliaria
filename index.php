<?php 
//importa o UsuarioController.php
require_once 'controller/UsuarioController.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

<?php

if(isset($_GET['action'])){
 
    if($_GET['action'] == 'editar'){
        //chama uma função PHP que permite informar a classe e o método que será acionado
        $usuario = call_user_func(array('UsuarioController', 'editar'), $_GET['id']);
        require_once 'view/cadUsuario.php';
    }
    if($_GET['action'] == 'listar'){
        require_once 'view/listUsuario.php';
    }
    if($_GET['action'] == 'excluir'){
        //chama uma função PHP que permite informar a classe e o método que será acionado
        $usuario = call_user_func(array('UsuarioController', 'excluir'), $_GET ['id']);
        require_once 'view/listUsuario.php';
    }

} else {
    require_once 'view/cadUsuario.php';
}

?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>