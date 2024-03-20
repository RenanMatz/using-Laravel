<?php

namespace App\Http\Controllers;

Class ProductsController extends Controller{
    public function showProducts(string $i1=null, string $i2=null, string $i3=null, string $i4=null, string $i5=null){

        $userProducts = [$i1,$i2,$i3,$i4,$i5];

        $p1 = [
            "name" => "bicicleta",

            "description" => "Linda bicicleta Caloi 10 aro 26, semi-nova e em ótimo estado. Perfeita para quem procura uma bike para passeios, exercícios físicos ou uso no dia a dia.",

            "price" => "R$ 800,00"
        ];

        $p2 = [
            "name" => "celular",

            "description" => "O Samsung Galaxy S23 Ultra é um smartphone topo de linha que oferece o melhor em termos de desempenho, tela, câmera e bateria.",

            "price" => "R$ 8.000,00" 
        ];

        $p3 = [
            "name" => "gaiola",

            "description" => "Esta gaiola para pássaros grande é perfeita para oferecer um lar confortável e seguro para seus amigos emplumados.",

            "price" => "R$ 800,00"
        ];

        $p4 = [
            "name" => "lixeira",

            "description" => "Esta lixeira de pedal com tampa de 12 litros é a solução ideal para manter seu ambiente limpo e organizado. A lixeira é feita de aço inoxidável resistente e possui um design elegante e moderno.",

            "price" => "R$ 100,00"
        ];

        $p5 = [
            "name" => "ventilador",

            "description" => "Este ventilador de parede de 60cm com 3 pás é ideal para refrescar grandes ambientes como lojas, escolas, restaurantes, igrejas, indústrias, entre outros.",

            "price" => "R$ 100,00"
        ];

        $p6 = [
            "name" => "armario",

            "description" => "Este armário de cozinha com 2 portas e 3 gavetas é a solução ideal para organizar seus utensílios domésticos e alimentos.",

            "price" => "R$ 500,00"
        ];

        $p7 = [
            "name" => "martelo",

            "description" => "Este martelo de unhas de 25mm com cabo de madeira é a ferramenta ideal para diversos tipos de tarefas, como pregar, arrancar pregos, quebrar objetos e muito mais.",

            "price" => "R$ 15,00"
        ];

        $products = [$p1,$p2,$p3,$p4,$p5,$p6,$p7];

        $validProducts = [];

        foreach($userProducts as $userProduct){
            foreach($products as $product){
                if(strtolower($userProduct) == $product["name"]){
                    $validProducts[] = $product;
                }
            }
        }

        return View('products', ['validProducts' => $validProducts]);
    }
}

















?>