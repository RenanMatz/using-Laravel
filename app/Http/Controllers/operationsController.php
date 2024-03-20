<?php

namespace App\Http\Controllers;

Class OperationsController extends Controller{
    public function doSum(int $n1, int $n2){
        $textComplete = "da soma";
        $result = $n1 + $n2;
        return View('operations', ['num1' => $n1, 'num2' => $n2, 'tc' => $textComplete, 'result' => $result]);
    }

    public function doDiv(int $n1, int $n2){
        $textComplete = "da divisão";
        if($n1===0 || $n2===0){
            echo "ERRO: Não é possivel dividir um número por zero.";
            return;
        } else{
            $result = $n1 / $n2;
            return View('operations', ['num1' => $n1, 'num2' => $n2, 'tc' => $textComplete, 'result'=> $result]);
        }
    }

    public function doMul(int $n1, int $n2){
        $textComplete = "da multiplicação";
        $result = $n1 * $n2;
        return View('operations', ['num1' => $n1, 'num2' => $n2, 'tc' => $textComplete, 'result' => $result]);
    }

    public function doMin(int $n1, int $n2){
        $textComplete = "da subtração";
        $result = $n1 - $n2;
        return View('operations', ['num1' => $n1, 'num2' => $n2, 'tc' => $textComplete, 'result' => $result]);
    }
}



















?>