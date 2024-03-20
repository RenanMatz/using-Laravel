<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            padding: 0px;
            box-sizing: 0px;
            margin: 0%;
            list-style: none;
        }

        body{
            background-color: #f8f8f8;
        }

        #navBar{
            width: 100%;
            height: 12vh;
            background-color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0px 30px;
            box-sizing: border-box;
            box-shadow: #ccc 2px 2px 4px;
        }

        #navBar h1, h4, li{
            font-family: segoe UI;
        }

        #navBar img{
            height: 30px;
        }

        #navBar ul{
            display: flex;
            gap: 70px;
        }

        #navBar div{
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        #userProfile{
            width: 100%;
            height: 88vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #userDataContainer{
            width: 90%;
            height: 80%;
            border: 1px solid #bbb;
        }

        #profileTop{
            background-color: #191970;
            height: 30%;
            width: 100%;
            position: relative;
        }

        #profileTop img{
            height: 150px;
            border-radius: 50%;
            position: absolute;
            top: 45%;
            left: 5%;
            background-color: #fff;
        }

        #profileTop div{
            position: absolute;
            right: 10px;
            bottom: -40%;
            display: flex;
            gap: 20px;
        }

        #profileTop div button{
            border-radius: 5%;
            border: none;
            padding: 0px 15px;
            background-color: #ccc;
        }

        #profileTop div i{
            font-size: 1.2rem;
        }

        #profileTop div p{
            background-color: #191970;
            padding: 10px 15px;
            border-radius: 5%;
            color: snow;
        }

        #profileDown{
            background-color: white;
            height: 70%;
            width: 100%;
            padding: 20px 250px;
            box-sizing: border-box;
        }

        #profileDown li{
            padding: 8px 0px;
        }

        #profileDown h1, li, #profileTop div{
            font-family: segoe UI;
        }
    </style>
    <title>Profile</title>
</head>
<body>
    <nav id="navBar">
        <h1>Kindred</h1>
        <ul>
            <li>Explorar</li>
            <li>Projetos</li>
            <li>Sobre Nós</li>
            <li>Ajuda  <i class="fa-solid fa-chevron-down"></i></li>
        </ul>
        <div>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Default_pfp.svg/1200px-Default_pfp.svg.png" alt="imagem de perfil padrão">
            <h4>Olá, {{$firstName}}  <i class="fa-solid fa-chevron-down"></i></h4>
        </div>
    </nav>
    <main id="userProfile">
        <div id="userDataContainer">
            <div id="profileTop">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Default_pfp.svg/1200px-Default_pfp.svg.png" alt="imagem de perfil padrão">
                <div>
                <button><i class="fa-solid fa-ellipsis"></i></button>
                <p>Editar perfil</p>
                <p>Ver Currículo</p>
                </div>
            </div>
            <div id="profileDown">
                <h1>{{$firstName}} {{$lastName}}</h1><br>
                <ul>
                    <li>idade: <strong>{{$age}}</strong></li>
                    <li>Gênero: <strong>{{$gender}}</strong></li>
                    <li>Rm: <strong>{{$rm}}</strong></li>
                    <li>Endereço: <strong>{{$adress}}</strong></li>
                </ul>
            </div>
        </div>
    </main>

    <!-- Biblioteca de Icones -->
    <script src="https://kit.fontawesome.com/8b450a9b91.js" crossorigin="anonymous"></script>
</body>
</html>