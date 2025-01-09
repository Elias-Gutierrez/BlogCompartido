<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    // Mostrar la lista de personas
    public function index()
    {
        $personas = Persona::all();
        return view('personas.index', compact('personas'));
    }

    // Mostrar el formulario para crear una nueva persona
    public function create()
    {
        return view('personas.create');
    }

    // Guardar una nueva persona en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:100',
            'apellido' => 'required|max:100',
            'email' => 'required|email|unique:personas',
            'telefono' => 'nullable|max:15',
            'fecha_nacimiento' => 'nullable|date',
            'direccion' => 'nullable|max:255',
            'pais' => 'required|max:50',
        ]);

        Persona::create($request->all());

        return redirect()->route('personas.index')->with('success', 'Persona creada correctamente.');
    }

    // Mostrar una persona específica
    public function show(Persona $persona)
    {
        return view('personas.show', compact('persona'));
    }

    // Mostrar el formulario para editar una persona
    public function edit(Persona $persona)
    {
        return view('personas.edit', compact('persona'));
    }

    // Actualizar una persona en la base de datos
    public function update(Request $request, Persona $persona)
    {
        $request->validate([
            'nombre' => 'required|max:100',
            'apellido' => 'required|max:100',
            'email' => 'required|email|unique:personas,email,' . $persona->id,
            'telefono' => 'nullable|max:15',
            'fecha_nacimiento' => 'nullable|date',
            'direccion' => 'nullable|max:255',
            'pais' => 'required|max:50',
        ]);

        $persona->update($request->all());

        return redirect()->route('personas.index')->with('success', 'Persona actualizada correctamente.');
    }

    // Eliminar una persona de la base de datos
    public function destroy(Persona $persona)
    {
        $persona->delete();

        return redirect()->route('personas.index')->with('success', 'Persona eliminada correctamente.');
    }
}
