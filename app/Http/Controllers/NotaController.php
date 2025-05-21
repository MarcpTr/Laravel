<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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
        $request->validate([ // Si falla redirige al mismo formulario
            'titulo' => 'required',
            'contenido' => 'required',
        ]);

        Nota::create($request->all());
        return redirect()->route('notas.index');
    }

    public function show($id) {
        try {
            $nota = Nota::findOrFail($id);
            return view('notas.show', compact('nota'));
        } catch (ModelNotFoundException $e) {
            return response()->view('errors.nota-no-encontrada', [], 404);
        };
    }

    public function update(Request $request, $id) {
        $nota = Nota::findOrFail($id);
        $nota->update($request->all());
        return redirect()->route('notas.index');
    }
}
