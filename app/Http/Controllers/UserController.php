<?php

namespace App\Http\Controllers;

Class UserController extends Controller{
    public function showView(string $n, string $s=null){
        return View('userName', ['firstName' => $n, 'lastName' => $s]);
    }
}





















?>