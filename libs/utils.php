<?php

/**
 * @param $str1
 * @param $str2
 * @return bool
 */
function cmpStr($str1, $str2)
{
    return (strcmp($str1, $str2) == 0);
}

/**
 * @param $titulo
 * @param $object
 */
function imprimir($titulo, $object)
{
    echo "<p>$titulo: ";
    print_r($object);
    echo "</p><br/>";
}

/**
 * @param $matriz
 */
function recorro($matriz)
{

    foreach ($matriz as $key => $value) {

        if (is_array($value)) {
            //si es un array sigo recorriendo
            echo '--------------------------------------------------------------';
            echo '<p>La clave ' . $key . ' es un vector</p>';
            echo 'Elementos:';
            echo '<br>';
            recorro($value);
        } else {
            //si es un elemento lo muestro
            echo $key . ' = ' . $value;
            echo '<br>';
        }
    }
}

/**
 * Function que limpia los datos de entrada. Utilizamos la clase InputFilter
 * @param $options
 * @return mixed
 */
function sanitizer($options)
{
    $ifilter = new InputFilter();
    $data = $ifilter->process($options);
    $chars = array(
        '$',
        '|',
        '+'
    );
    return str_replace($chars, "", $data);
}

/**
 * Compresses CSS content
 *
 * @param string $what
 * @return string
 */
function compress($what)
{
    $what = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $what);
    $what = str_replace(array(
        "\r\n",
        "\r",
        "\n",
        "\t",
        '  ',
        '   ',
        '    ',
        '     '
    ), '', $what);
    return $what;
}
