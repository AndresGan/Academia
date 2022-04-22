<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ControladorPrecios extends Controller{
    public function precios($precio){
        if ($precio > 0 and $precio < 100000) {
            echo 'este producto no tiene descuento ';
        }
        elseif ($precio >= 100000 and $precio < 150000 ) {
            echo 'el descuento del prodcuto es de 2% y el total a pagar es de: '. $precio-$precio*0.02;
        }
        elseif ($precio >= 150000 and $precio < 300000 ) {
            echo 'el descuento del prodcuto es de 3% y el total a pagar es de: '. $precio-$precio*0.03;
        }
        elseif ($precio >= 300000 and $precio < 500000 ) {
            echo 'el descuento del prodcuto es de 4% y el total a pagar es de: '. $precio-$precio*0.04;
        }
        elseif ($precio >= 500000) {
            echo 'el descuento del prodcuto es de 5% y el total a pagar es de: '. $precio-$precio*0.05;
        }
        else {
            echo 'el valor es incorrecto, ingreselo nuevamente';
        }
    }

    public function getIVA($nombre,$precio){
        if (is_numeric($precio)){
        echo 'El artículo'. $nombre . ' sin IVA cuesta $' . $precio .  ' y el precio del IVA es de $' .$precio*0.19 .' El
        total a pagar por el artículo es de $' . $precio+$precio*0.19;
    }
    }
}
