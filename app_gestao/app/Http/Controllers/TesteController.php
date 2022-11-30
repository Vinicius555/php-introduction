<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2)
    {
       // return view('site.teste', ['p1' => $p1, 'p2' => $p2]); --ArrayAssociativo
       return view('site.teste',compact('p1','p2')); // metodo compact passase a nome da variavel como um string
       //return view('site.teste')->with('p1',$p1)->with('p2',$p2); // metodo with passa primeiro o nome que sera assciado a view e depois a variavel correspondente
    }
}
