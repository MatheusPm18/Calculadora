<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }
    </style>    
</head>
<body>
    <div class="container">
        {{-- Início do Cabeçalho --}}
        <div class="row mt-2">
        <center> <h1>Página Inicial<h1> </center>
        </div>
        {{-- Final do Cabeçalho --}}

        {{-- Inicio do Corpo --}}
        <div class="row mt-3">
            </div> 
            <div class="row">
            <form method="Soma" action="{{ route('carregarSoma') }}">
                        
                    <button type="submit" class="btn btn-primary">Somar</button>
                    </form>
            </div>     
            <div class="row mt-1">
            <form method="subtrai" action="{{ route('carregarSubtrai') }}">
                        
                    <button type="submit" class="btn btn-primary">Subtrair</button>
                    </form>
            </div>    
            <div class="row mt-1">
            <form method="multiplicar" action="{{ route('carregarMultiplicar') }}">
                        
                    <button type="submit" class="btn btn-primary">Multiplicar</button>
                    </form>
            </div>    
            <div class="row mt-1">
            <form method="divide" action="{{ route('carregarDivide') }}">
                        
                    <button type="submit" class="btn btn-primary">Dividir</button>
                    </form>
            </div>  
            
              


        </div>