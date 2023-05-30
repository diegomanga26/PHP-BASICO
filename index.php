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
    /**
     * ?NÚMEROS Y OPERADORES:
     */
    /**
     * *Operadores aritmeticos:
     * * + = Suma.
     * * - = Resta.
     * * * = Multiplicación.
     * * / = División.
     * * % = Módulo.
     * * ** = Exponenciación.
     */
    /**
     * *Operadores de asignación:
     * * = "Igual a.
     */
    /**
     * *Operadores de matriz:
     * * + = Unión.
     * * == = Igualdad.
     * * === = Identidad (Cumplir con 2 condiciones).
     * * != = Desigualdad.
     * * <> = Desigualdad.
     * * !== = No identidad (No cumplir con 2 condiciones).
     */
    /**
     * *Operador Bit a Bit:
     * * & = "Y".
     * * ^ = "O".
     * * | = "no".
     * * << = Desplazar a la izquierda.
     * * >> = Desplazar a la derecha.
     */
    /**
     * *Operador de comparación:
     * * == = Igualdad.
     * * === = Identico (Se cumple condicion de valor y tipo de variable).
     * * != = Desigualdad.
     * * !== = Totalmente desigual.
     * * <> = Desigualdad.
     * * < = Menor que.
     * * <= = Menor o igual que.
     * * > = Mayor que.
     * * >= = Mayor o igual que.
     * * <=> = Spaceship operator.
     */
    /**
     * *Operador de ejecución:
     * * `` = Acentos graves.
     */
    /**
     * *Operador de control de errores:
     * *@ = A la señal.
     */
    /**
     * *Operadores de incremento y decremento:
     * *++$a = PreIncremento.
     * *$a++ = PostIncremento.
     * *--$a = PreDecremento.
     * *$a-- = PostDecremento.
     */
    /**
     * *Operadores Lógicos:
     * *&& = "Y".
     * *|| = "o".
     * *! = "No".
     * *and = "Y".
     * *xor = xor.
     * *or = "o".
     */
    /**
     * *EJEMPLOS DE OPERADORES:
     */
    $numero1 = 20;
    $numero2 = 30;
    $numero3 = 30;
    $numero4 = "30";

    /**
     * *Operador Mayor y Menor que:
     */
    echo '<br></br>';
    var_dump($numero1 > $numero2);
    echo '<br></br>';
    var_dump($numero1 < $numero2);
    echo '<br></br>';
    /**
     * *Operador Mayor o igual y Menor o igual que:
     */
    var_dump($numero1 >= $numero2);
    echo '<br></br>';
    var_dump($numero1 <= $numero2);
    echo '<br></br>';
    /**
     * *Operador de comparación normal:
     */
    var_dump($numero2 == $numero3);
    echo '<br></br>';
    var_dump($numero3 == $numero4);
    echo '<br></br>';
    /**
     * *Operador de comparación estricto:
     */
    var_dump($numero2 === $numero4);
    echo '<br></br>';
    /**
     * *Operador Spaceship:
     * *Si el valor de la izquierda es menor será -1, si es igual será 0 y si es mayor será 1.
     */
    var_dump($numero1 <=> $numero2);
    echo '<br></br>';
    var_dump($numero2 <=> $numero3);
    echo '<br></br>';
    var_dump($numero2 <=> $numero1);
    echo '<br></br>';
    /**
     * ?METODOS PHP PARA MANIPULAR CADENAS DE CARACTERES:
     */
    $nombreCliente = "Campers Campuslands";

    /**
     * *Conocer toda la extensión de un string:
     */
    echo strlen($nombreCliente);
    echo '<br></br>';
    var_dump($nombreCliente);
    /**
     * *Eliminar espacios en blanco en el string:
     */
    $texto1 = trim($nombreCliente);
    echo '<br></br>';
    echo strlen($texto1);
    /**
     * *Convertir string en mayusculas:
     */
    echo strtoupper($nombreCliente);
    echo '<br></br>';
    /**
     * *Convertir string en minusculas:
     */
    echo strtolower($nombreCliente);

    $mail1 = "correo@correo.com";
    $mail2 = "Correo@correo.com";

    var_dump(strtolower($mail1) === strtolower($mail2));
    echo '<br></br>';
    echo str_replace('Juan', 'J', $nombreCliente);

    /**
     * *Revisar si un string existe o no existe:
     */
    echo strpos($nombreCliente, 'Pedro');

    $tipoCliente = "Premium - Empresarial";

    echo '<br></br>';

    echo "El Cliente " . $nombreCliente . " es " . $tipoCliente;

    echo '<br></br>';

    echo "El Cliente {$nombreCliente} es ${tipoCliente}"
?>