<?php
    // Podemos/DEVEMOS usar auto_load
    include("Model/Usuario.php");
    include("Controller/Usuario.php");

    // Exemplo do auto_load
    spl_autoload_register(function ($ns, $classe){
        require_once("$ns/{$classe}.php");        
    });
    
    // Criando os objetos
    $objUsuarioModel = new Model\Usuario();
    $objUsuarioController = new Controller\Usuario();

    // Depurando os objetos
    var_dump($objUsuarioController);
    var_dump($objUsuarioModel);
