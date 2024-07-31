<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        return view('contato');
    }

    public function store(Request $request)
    {
        // Valida os dados recebidos
        $request->validate([
            'nome' => 'required|string|max:50',
            'telefone' => 'required|string|max:14',
            'email' => 'required|string|email|max:50',
            'motivo_do_contato' => 'required|string',
            'mensagem' => 'required|string',
        ]);

        // Cria o contato com os dados validados
        Contato::create($request->all());

        // Redireciona com uma mensagem de sucesso
        return redirect('/contato')->with('success', 'Contato enviado com sucesso!');
    }
}
