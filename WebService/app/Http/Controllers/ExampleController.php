<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{

    function suma(Request $data , $data1)
    {
        $valor1 = $data->json()->all();
        $valor2 = $data1->json()->all();
        return $suma = $valor1 + $valor2;
    }
    function resta(Request $data , $data1)
    {
        $valor1 = $data->json()->all();
        $valor2 = $data1->json()->all();
        return $suma = $valor1 - $valor2;
    }
    function multiplicacion(Request $data , $data1)
    {
        $valor1 = $data->json()->all();
        $valor2 = $data1->json()->all();
        return $suma = $valor1 * $valor2;
    }
    function division(Request $data , $data1)
    {
        $valor1 = $data->json()->all();
        $valor2 = $data1->json()->all();
        return $suma = $valor1 / $valor2;
    }


}
