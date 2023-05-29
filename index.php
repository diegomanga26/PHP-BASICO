<?php
    /**
     * ?FUNCIONES DE SALIDA:
     */
    /**
     * *Función de salida "echo()":
     */
    echo '<h1>Hola mundo cruel</h1>';
    /**
     * *Función de salida "print()":
     */
    $texto = "Mundo";
    printf("Hola %s", $texto);
    /**
     * *Función de salida "sprintf()":
     */
    echo '<br></br>';
    $mensaje = sprintf("Hola %s", $texto);
    echo $mensaje;

    /**
     * ?VARIABLES:
     */
    /**
     * *Declarando una variable numérica:
     */
    $edad = 25;
    /**
     * *Declarando una variable de texto:
     */
    $nombre = "Diego";
    /**
     * *Declarando una variable booleana;
     */
    $es_valido = true;
    echo '<br></br>';
    /**
     * ?CONSTANTES:
     */
    /**
     * *Declarando una constante numérica:
     */
    define("PI", 3.1416);
    /**
     * *Declarando una constante de texto:
     */
    define("SALUDO", "Hola Mundo!");
    /**
     * *Declarando una constante booleana:
     */
    define("ES_VALIDO", true);

?>