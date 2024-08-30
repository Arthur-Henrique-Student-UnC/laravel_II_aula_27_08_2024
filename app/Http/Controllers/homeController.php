<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        $data = [
            'pageTitle' => 'Exemplo',
            'showButton' => true,
            'items' => ['Item 1', 'Item 2', 'Item 3'],
            'user' => ['name' => 'Arthur Ribeiro Henrique', 'role' => 'Aluno']
        ];
        return view('home', $data);
    }

    public function about(){
        return view('about');
    }


}
