<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtroController extends Controller{
        public function helado($topping){
            if ($topping==1) {
                $valor = 500;
                echo 'El topping escogido es: el chocolate y su precio es $500. El valor total a pagar por el helado es '. '$'.$valor+3000;
            }
            else if ($topping==2){
                $valor = 1000;
                echo 'El topping escogido es: el brownie y su precio es $1000. El valor total a pagar por el helado es '. '$'.$valor+3000;
            }
            else if ($topping==3){
                $valor = 1500;
                echo 'El topping escogido es: el delicatessen y su precio es $1500. El valor total a pagar por el helado es '. '$'.$valor+3000;
            }
            else if ($topping==0){
                $valor = 0;
                echo 'No escogio topping, el valor total a pagar por el helado es '. '$'.$valor+3000;
            }
            else {
                echo 'Opcion no valida';
            }
            }
        }
