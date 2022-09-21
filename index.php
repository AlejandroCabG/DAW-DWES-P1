<?php
//Variables definidas
$shopping_cart = 9.5;
$tipo = 'periferico';
$shipping_price = 0;

//Bucle if else if
if ($shopping_cart < 20 && $tipo == 'cable') { //En función de que el precio sea menor de 20 y del tipo especificado.
    echo " No se puede enviar ";
} else if ($shopping_cart < 20 && $tipo == 'periferico') {
    $shipping_price = 4.99; //Asigno el valor de 4.99€ a la variable shipping_price.
    echo "Los gastos de envío son $shipping_price €.";
} else if ($shopping_cart >= 20 && $shopping_cart <= 50) { //Valores entre los cuales debe estar el precio de la compra.
    echo "Los gastos de envío son $shipping_price €.";
} else if ($shopping_cart > 50 && $shopping_cart <= 150) {//Se tiene que poner <= 150 para que esté incluido.
    $shipping_price = 0;//Asigno el valor de 0€ a la variable shipping_price para indicar que es gratis.
    echo "Los portes de envío son gratis $shipping_price €.";
} else if ($shopping_cart > 150) {
    echo "Código de descuento GIMBERNAT_20_%";
} else {
    echo "Por favor, introduzca un tipo válido: cable o periferico";
}

