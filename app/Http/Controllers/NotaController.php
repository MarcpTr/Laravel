<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;

class NotaController extends Controller
{
    public function index() {
        $notas = Nota::all();
        return view('notas.index', compact('notas'));
    }

    public function create() {
        return view('notas.create');
    }

    public function store(Request $request) {
        $request->validate([
            'titulo' => 'required',
            'contenido' => 'required',
        ]);

        Nota::create($request->all());
        return redirect()->route('notas.index');
    }

    public function show($id) {
        $nota = Nota::findOrFail($id);
        return view('notas.show', compact('nota'));
    }

    public function update(Request $request, $id) {
        $nota = Nota::findOrFail($id);
        $nota->update($request->all());
        return redirect()->route('notas.index');
    }
}
