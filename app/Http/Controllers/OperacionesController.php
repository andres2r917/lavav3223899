<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{
    public function Holamundo (){

    return "hola desde la funcion saludar..";

    }
//trabajo aparte

  public function division($div1 = 60, $div2 = 20) {
        if ($div2 == 0) {
            return "No se puede dividir por cero o faltan datos";
        }
        $operacion = $div1 / $div2;
        return $operacion;
    }

    public function sumar($sum1, $sum2) {
        $resultado = $sum1 + $sum2;
        return "La suma de $sum1 + $sum2 es: " . $resultado;
    }

   public function restar($rest1, $rest2) {

    $resultado = $rest1 - $rest2;

    return "La resta de $rest1 - $rest2 es: " . $resultado;
}

    public function multiplicar($mult1, $mult2) {
        $resultado = $mult1 * $mult2;
        return "La multiplicacion de $mult1 * $mult2 es: " . $resultado;
    }

    public function formulacuadratica( $a, $b, $c){
        $discriminante = pow($b, 2) - (4 * $a * $c);

    if ($discriminante < 0) {
        return "La ecuación no tiene soluciones reales (raíz negativa).";
    }

    $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
    $x2 = (-$b - sqrt($discriminante)) / (2 * $a);

    return "Las soluciones son: x1 = $x1 y x2 = $x2";

    }

    public function areacuadrado ($lado){ 
    $area = pow($lado, 2);
    return "El área de un cuadrado con lado $lado es: " . $area;
    }

    public function areaTriangulo($base,$altura){
        $areaTriangulo = ($base*$altura)/2;
        return "El area de un triangulo con su base =".$base." y su altura ".$altura." el resultado es= ".$areaTriangulo;
    }

    public function areaRectangulo($base,$altura){
        $areaRectangulo = $base*$altura;
        return "El area de un rectangulo con su base =".$base." y su altura ".$altura." el resultado es = ".$areaRectangulo;
    }

    public function areaParalelogramo($h,$base){
        $areaParalelogramo = $base*$h;
        return "El area de un paralelogramo con h = ".$h." y su base = ".$base.". El resultado es = ".$areaParalelogramo;
    }

    public function areaCirculo($radio){
        $areaCirculo = pi()*pow($radio,2);
        return "El area de un circulo con radio = ".$radio.". El resultado es = ".$areaCirculo;
    }
    
    public function areaTrapecio($a,$b,$h){
        $areaTrapecio=(($a+$b)*$h)/2;
        return "El area de un trapecio con valor de a = ".$a." y valor de b = ".$b." y valor de h = ".$h.". El resultado es =".$areaTrapecio;

    }
} 