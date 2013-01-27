<?php

    // base folder
    define("BASE_DIR", dirname(__DIR__) );


    // Autoloader
    // ----------
    // 
    // All Rain class are loaded with the autoloader.
    // If you install RainForm with composer you want
    // to include the autoloader of composer which 
    // usually is "vendor/autoload.php"
    //
    require BASE_DIR . "/library/Rain/autoload.php";


    // use the namespace Rain
    use Rain\Form;

    
    // Create a form
    $form = new Form( "", "" );
    

    // dump the info
    var_dump( $form->getFormInfo() );