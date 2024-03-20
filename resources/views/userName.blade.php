<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome e Sobrenome</title>
    <style>
        body{
            width: 99%;
            height: 96vh;
            background-color: #191970;
            display: flex;
            justify-content: center;
            align-items: center;
            color: snow;
            font-family: segoe UI;
        }

        h1{
            border-bottom: 1px solid white;
            font-size: 3rem;
        }
    </style>
</head>
<body>
    @if($lastName == null)
    <h1>Bem Vindo(a)! {{$firstName}}!</h1>
    @else
    <h1>Bem Vindo(a)! {{$firstName}} {{$lastName}}!</h1>
    @endif
</body>
</html>