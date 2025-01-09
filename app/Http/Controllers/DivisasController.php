<?php

namespace App\Http\Controllers;

use App\Models\Divisas;
use Illuminate\Http\Request;

class DivisasController extends Controller
{
    // Mostrar la lista de divisas
    public function index()
    {
        $divisas = Divisas::all();
        return view('divisas.index', compact('divisas'));
    }

    // Mostrar el formulario para crear una nueva divisa
    public function create()
    {
        return view('divisas.create');
    }

    // Guardar una nueva divisa en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required|max:3|unique:divisas',
            'nombre' => 'required|max:50',
        ]);

        Divisas::create($request->all());

        return redirect()->route('divisas.index')->with('success', 'Divisa creada correctamente.');
    }

    // Mostrar una divisa específica
    public function show(Divisas $divisa)
    {
        return view('divisas.show', compact('divisa'));
    }

    // Mostrar el formulario para editar una divisa
    public function edit(Divisas $divisa)
    {
        return view('divisas.edit', compact('divisa'));
    }

    // Actualizar una divisa en la base de datos
    public function update(Request $request, Divisas $divisa)
    {
        $request->validate([
            'codigo' => 'required|max:3|unique:divisas,codigo,' . $divisa->id,
            'nombre' => 'required|max:50',
        ]);

        $divisa->update($request->all());

        return redirect()->route('divisas.index')->with('success', 'Divisa actualizada correctamente.');
    }

    // Eliminar una divisa de la base de datos
    public function destroy(Divisas $divisa)
    {
        $divisa->delete();

        return redirect()->route('divisas.index')->with('success', 'Divisa eliminada correctamente.');
    }
}
