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
    /**
     * ?TIPOS DE DATOS:
     */
    /**
     * *Enteros(int): Se usa para para almacenar números enteros:
     */
    $numero = 200;
    var_dump($numero);
    /**
     * *Punto flotante(float): Se usa para almacenar números decimales:
     */
    echo '<br></br>';
    $float = 200.8;
    var_dump($float);
    /**
     * *Cadenas de texto(string): Se usa para almacenar texto:
     */
    echo '<br></br>';
    $nombre1 = "Alexander";
    var_dump($nombre1);
    /**
     * *Booleanos(bool): Se usa para almacenar datos true o false:
     */
    echo '<br></br>';
    $logueado = true;
    var_dump($logueado);
    /**
     * *Arreglos(array): Se usa para almacenar un conjunto de datos:
     */
    echo '<br></br>';
    $array = [];
    var_dump($array);
    /**
     * *Objetos(object): Se usa para almacenar objetos de clases.
     * *Recursos(resource): Se usa para almacenar referencias o recursos externos, como archivos o conexiones.
     * *Nulo(null): Se usan para almacenar variables sin valor.
     */

?>