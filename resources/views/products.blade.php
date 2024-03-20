<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <style>
        body{
            width: 99%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        table, tr, th, td{
            border: 1px solid #555
        }

        table{
            
        }
    </style>
</head>
<body>
    <h2>Itens disponiveis: bicicleta, celular, gailoa, lixeira, ventilador, armário e martelo</h2>
    <p>(obs: evite caracteres especiais e erros gramaticais na URL. Isso pode resultar em erro ao achar o produto)</p><br><br>
    <div id="container">
        <table>
            <tr>
                @foreach($validProducts as $product)
                <th>{{$product["name"]}}</th>
                @endforeach
            </tr>
            <tr>
                @foreach($validProducts as $product)
                <td>{{$product["description"]}}</td>
                @endforeach
            </tr>
            <tr>
                @foreach($validProducts as $product)
                <td>{{$product["price"]}}</td>
                @endforeach
            </tr>
        </table>
    </div>


</body>
</html>