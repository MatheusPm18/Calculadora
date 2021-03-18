<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class CalculadoraController extends Controller
{
    public function menu()
    {
        return view ('menu');
    }



    public function soma()
    {
        return view ('soma');
    }

    public function calcularSoma(Request $request)
    {
        $valor1 = $request->valor1; 
        $valor2 = $request->valor2; 
        $resultado = $valor1 + $valor2;

        return view('resultadoSoma', compact('valor1', 'valor2', 'resultado'));

    }


    public function subtrai()
    {
        return view ('subtrai');
    }
    public function calcularSubtrai(Request $request)
    {
        $valor1 = $request->valor1; 
        $valor2 = $request->valor2; 
        $resultado = $valor1 - $valor2;

        return view('resultadoSubtrai', compact('valor1', 'valor2', 'resultado'));

    }


    public function divide()
    {
        return view ('divide');
    }
    public function calcularDivide(Request $request)
    {
        $valor1 = $request->valor1; 
        $valor2 = $request->valor2; 
        $resultado = $valor1/$valor2;

        return view('resultadoDivide', compact('valor1', 'valor2', 'resultado'));

    }


    public function multiplicar()
    {
        return view ('multiplicar');
    }
    public function calcularMultiplicar(Request $request)
    {
        $valor1 = $request->valor1; 
        $valor2 = $request->valor2; 
        $resultado = $valor1*$valor2;

        return view('resultadoMultiplicar', compact('valor1', 'valor2', 'resultado'));

    }

}
