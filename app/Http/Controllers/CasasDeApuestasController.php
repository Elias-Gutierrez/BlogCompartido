<?php

namespace App\Http\Controllers;

use App\Models\CasasDeApuestas;
use Illuminate\Http\Request;

class CasasDeApuestasController extends Controller
{
    // Mostrar la lista de casas de apuestas
    public function index()
    {
        $casas = CasasDeApuestas::all();
        return view('casas_de_apuestas.index', compact('casas'));
    }

    // Mostrar el formulario para crear una nueva casa de apuestas
    public function create()
    {
        return view('casas_de_apuestas.create');
    }

    // Guardar una nueva casa de apuestas en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:100',
            'provCuotas' => 'required|max:100',
            'pais' => 'required|max:50',
        ]);

        CasasDeApuestas::create($request->all());

        return redirect()->route('casas-de-apuestas.index')->with('success', 'Casa de apuestas creada correctamente.');
    }

    // Mostrar una casa de apuestas específica
    public function show(CasasDeApuestas $casasDeApuesta)
    {
        return view('casas_de_apuestas.show', compact('casasDeApuesta'));
    }

    // Mostrar el formulario para editar una casa de apuestas
    public function edit(CasasDeApuestas $casasDeApuesta)
    {
        return view('casas_de_apuestas.edit', compact('casasDeApuesta'));
    }

    // Actualizar una casa de apuestas en la base de datos
    public function update(Request $request, CasasDeApuestas $casasDeApuesta)
    {
        $request->validate([
            'nombre' => 'required|max:100',
            'provCuotas' => 'required|max:100',
            'pais' => 'required|max:50',
        ]);

        $casasDeApuesta->update($request->all());

        return redirect()->route('casas-de-apuestas.index')->with('success', 'Casa de apuestas actualizada correctamente.');
    }

    // Eliminar una casa de apuestas de la base de datos
    public function destroy(CasasDeApuestas $casasDeApuesta)
    {
        $casasDeApuesta->delete();

        return redirect()->route('casas-de-apuestas.index')->with('success', 'Casa de apuestas eliminada correctamente.');
    }
}
