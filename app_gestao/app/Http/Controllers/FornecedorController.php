<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedor = [
            0 => ['nome'=>'fornecedor 1',
            'status'=>'N',
            'cnpj'=> '0000.000/000',
            'DDD' => '11',
            'telefone'=>'0000-0000'],
            1 => ['nome'=>'fornecedor 2',
            'status'=>'S',
            'cnpj' => null,
            'DDD' => '85',
            'telefone'=>'0000-0000'],
            2 => ['nome'=>'fornecedor 3',
            'status'=>'S',
            'cnpj' => null,
            'DDD' => '87',
            'telefone'=>'0000-0000'],
            3 => ['nome'=>'fornecedor 4',
            'status'=>'S',
            'cnpj' => '000.000/000',
            'DDD' => '89',
            'telefone'=>'0000-0000'],
        ];
        $fornecedores = [];
        return view('app.fornecedores.index',compact('fornecedor'));

        
        
    }
}
