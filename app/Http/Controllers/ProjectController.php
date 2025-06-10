<?php

namespace App\Http\Controllers;

use App\Models\projeto;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function create()
    {
        return view('auth.createproject');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'user_id' => 'required|integer|exists:users,id',
            'funcionario_id' => 'required|integer|exists:employee,id',
            'status' => 'required|string',
            'etapa_atual' => 'required|string',
            'etapa_anterior' => 'nullable|string',
            'etapa_posterior' => 'nullable|string',
            'tempo_final_etapa' => 'required|integer',
        ]);

        $request['atualizacao'] = now();

        $projeto = projeto::create([
            'name' => $request->name,
            'user_id' => $request->user_id,
            'funcionario_id' => $request->funcionario_id,
            'status' => $request->status,
            'etapa_atual' => $request->etapa_atual,
            'etapa_anterior' => $request->etapa_anterior,
            'etapa_posterior' => $request->etapa_posterior,
            'tempo_final_etapa' => $request->tempo_final_etapa,
        ]);

        // return redirect()->route('projetos.show', $projeto->id);
        return redirect('/');
    }

    public function show($id)
    {
        $projeto = projeto::findOrFail($id);
        return view('projetos.show', compact('projeto'));
    }
}
