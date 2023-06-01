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

    echo "El Cliente {$nombreCliente} es ${tipoCliente}";

    /**
     * ?ARREGLOS, ARREGLOS ASOCIATIVOS Y FUNCIONES PARA ARREGLOS:
     */
    /**
     * *Declaración de variables de tipo array indexadas.
     * @param $nombres
     */
    $nombres = array("Diego", "Roberto", "Ivan");
    var_dump($nombres);
    echo "<hr>";
    /**
     * *Declaración de variables de tipo array multidimensional.
     * @param $edades, $personas
     */
    /**
     * ? En los array multidimensionales el símbolo "=>" es meramente de asignación.
     * ? Se indica fuera de parentesis que es de tipo array y dentro los valores.
     */
    $edades = array(
        "Diego" => 23, 
        "Roberto" => 24, 
        "Ivan" => 23);
    var_dump($edades);
    echo "<hr>";
    $personas = array(
        "Diego" => array("Edad" => 23, "Ciudad" => "Valledupar", "País" => "Colombia"),
        "Roberto" => array("Edad" => 24, "Ciudad" => "Valledupar", "País" => "Colombia"),
        "Ivan" => array("Edad" => 23, "Ciudad" => "La Jagua de Ibirico", "País" => "Colombia")
    );
    print_r($personas);
    echo "<hr>";
    /**
     * ? Para la asignación de datos se llama el array y entre corchetes se va accediendo a la información.
     */
    print_r($personas["Diego"]["Ciudad"]);
    echo "<hr>";
    /**
     * * 1) Método array_flip():
     * * Este método es utilizado para intercambiar las llaves con sus valores y entrega un array nuevo.
     * ? Podría renombrarse como nuevo array en una variable nueva.
     */

    $edadesFlip = array_flip($edades);
    print_r($edadesFlip);
    echo "<hr>";

    /**
     * * 2) Método array_fill():
     * * Este método es utilizado para rellenar un array en un rango de pocisiones, se le puede dar un valor cualquiera que
     * * se va a repetir a lo largo del array en el rango indicado.
     */

    $nuevoArray = array_fill(0,8,"Papa");
    print_r($nuevoArray);
    echo "<hr>";

    /**
     * * 3) Método array_filter():
     * * Este método es utilizado para filtrar elementos en un array recorriendolo y pasandolos a una función "callback".
     */
    /**
     * !MÉTODO CLÁSICO:
     */

    // $numeritos = array(1,2,3,4,5,6,7,8,9);
    // function esImpar($numeritos) {
    //     return $numeritos % 2 != 0;
    // };
    // $numeritosImpares = array_filter($numeritos, "esImpar");
    // print_r($numeritosImpares);
    /**
     * ?Otra forma de hacerlo pero con función flecha:
     */
    $numeritos = array(1,2,3,4,5,6,7,8,9);
    $numeritosImpares = array_filter($numeritos,fn($numeritos) => 
        $numeritos % 2 != 0
    );
    print_r($numeritosImpares);
    echo "<hr>";

    /**
     * * 4) Método array_map():
     * * Este método es utilizado para aplicar una función a cada elemento del array y devolviendo un nuevo array con los resultados.
     */
    /**
     * !MÉTODO CLÁSICO:
     */

    // function dividirEnDos($numeritosImpares) {
    //     return $numeritosImpares * 2;
    // };

    // $numeritosDivididos = array_map("dividirEnDos", $numeritosImpares);

    // print_r($numeritosDivididos);

    /**
     * ?Otra forma de hacerlo pero con función flecha:
     */

    $numeritosDivididos = array_map(fn($numeritosImpares) => 
    $numeritosImpares/2,$numeritosImpares);
    
    print_r($numeritosDivididos);
    echo "<hr>";
    /**
     * * 5) Método array_reduce():
     * * Este método es utilizado para reducir el array a un solo valor usando una función "callback", esto lo hace iterando el array.
     */
    /**
     * !MÉTODO CLÁSICO:
     */

    // function sumar($sumatoria, $numeritosDivididos) {
    //     return $sumatoria + $numeritosDivididos;
    // };

    // $total = array_reduce($numeritosDivididos, "sumar");

    // print_r($total);

    /**
     * ?Otra forma de hacerlo pero con función flecha:
     */

    $total = array_reduce($numeritosDivididos, fn($sumatoria, $numeritosDivididos) => 
    $sumatoria + $numeritosDivididos);

    print_r($total);
    echo "<hr>";

    /**
     * * 6) Método array_key_exists():
     * * Este método es utilizado para verificar una llave en un array.
     */

    if (array_key_exists("Ciudad",$personas["Diego"])) {
        echo "La clave 'Ciudad' si existe";
    } else {
        echo "La clave 'Ciudad' no existe";
    };
    echo "<hr>";

    /**
     * * 7) Método in_array():
     * * Este método es utilizado para comprobar si un valor existe en un array.
     */

    if (in_array("Valledupar", $personas["Diego"])) {
        echo "La ciudad 'Valledupar' existe en el array";
    } else {
        echo "La ciudad 'Valledupar' no existe en el array";
    };
    echo "<hr>";

    /**
     * * 8) Método array_rand():
     * * Este método es utilizado para devolver una o mas claves de forma aleatoria dentro del array.
     */

    print_r(array_rand($personas));
    echo "<hr>";

    /**
     * ?Por ejemplo se le pueden pasar dos o más claves a retornar de forma aleatoria.
     */

    print_r(array_rand($personas,2));
    echo "<hr>";

    /**
     * * 9) Método array_push():
     * * Este método es utilizado para agregar uno o más elementos al final de un array.
     */

    $diego= array("Diego" => array("Edad" => 23, "Ciudad" => "Valledupar", "País" => "Colombia"));
    array_push($personas, $diego);
    print_r($personas);
    echo "<hr>";

    /**
     * * 10) Método array_unique():
     * * Este método es utilizado para eliminar valores duplicados de un array.
     */

    print_r(array_unique($personas));

?>