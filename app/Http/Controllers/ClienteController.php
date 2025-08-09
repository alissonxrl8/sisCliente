<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function index()
    {
        return response()->json(Cliente::all());
    }


    public function store(Request $request)
    {
        $dados = $request->validate([
            'nome'=>'string|required',
            'cpf'=>'string|required',
            'numero'=>'string|required'
        ]);

        $cliente = Cliente::create($dados);

        return response()->json($cliente, 201);
    }


}
