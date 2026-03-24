<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Joia;

class Joias extends Controller
{

    public function index()
    {
        $joias = Joia::all();
        return view('index')->with('joias', $joias);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $joia = new Joia();

        $joia->nome = $request->input('nome');
        $joia->descricao = $request->input('descricao');
        $joia->preco = $request->input('preco');
        $joia->quantidade = $request->input('quantidade');

        $joia->save();

        $joias = Joia::all();

        return view('index')
            ->with('joias', $joias)
            ->with('msg', 'Joia cadastrada com sucesso!');
    }

    public function show(string $id)
    {
        $joia = Joia::find($id);

        if ($joia) {
            return view('show')->with('joia', $joia);
        } else {
            return view('show')->with('msg', 'Joia não encontrada!');
        }
    }

    public function edit(string $id)
    {
        $joia = Joia::find($id);

        if ($joia) {
            return view('edit')->with('joia', $joia);
        } else {
            $joias = Joia::all();
            return view('index')
                ->with('joias', $joias)
                ->with('msg', 'Joia não encontrada!');
        }
    }

    public function update(Request $request, string $id)
    {
        $joia = Joia::find($id);

        $joia->nome = $request->input('nome');
        $joia->descricao = $request->input('descricao');
        $joia->preco = $request->input('preco');
        $joia->quantidade = $request->input('quantidade', 0);

        $joia->save();

        $joias = Joia::all();

        return view('index')
            ->with('joias', $joias)
            ->with('msg', 'Joia atualizada com sucesso!');
    }

    public function destroy(string $id)
    {
        $joia = Joia::find($id);

        if ($joia) {
            $joia->delete();
        }

        $joias = Joia::all();

        return view('index')
            ->with('joias', $joias)
            ->with('msg', 'Joia excluída com sucesso!');
    }
}