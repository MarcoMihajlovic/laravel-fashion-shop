<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress; 

class HomeController extends Controller
{
    public function index() {

        $vestiti = Dress::all();

        $data = [
            'vestiti' => $vestiti
        ];
        
        return view('home', $data);
    }

    public function contatti() {
        
        return view('contatti');

    }

    public function bianca() {
        
        return view('bianca');
        
    }
}
