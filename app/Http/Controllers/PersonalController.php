<?php

namespace App\Http\Controllers;

Class PersonalController extends Controller{
    public function showData(string $n, string $s, int $i, int $r, string $g, string $e){
        return View('userProfile', ['firstName' => $n, 'lastName' => $s, 'age' => $i, 'rm' => $r, 'gender' => $g, 'adress' => $e]);
    }
}











?>