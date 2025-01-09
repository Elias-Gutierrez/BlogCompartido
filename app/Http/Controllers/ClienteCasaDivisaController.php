<?php

namespace App\Http\Controllers;

use App\Models\ClienteCasaDivisa;
use App\Models\Persona;
use App\Models\CasasDeApuestas;
use App\Models\Divisas;
use Illuminate\Http\Request;

class ClienteCasaDivisaController extends Controller
{
    // Mostrar la lista de cliente_casa_divisas
    public function index(Request $request)
    {
        $query = ClienteCasaDivisa::query()->with(['persona', 'casa', 'divisa']);

        // Filtrar por nombre de la persona
        if ($request->filled('nombre')) {
            $query->whereHas('persona', function ($q) use ($request) {
                $q->where('nombre', 'like', '%' . $request->nombre . '%');
            });
        }

        // Filtrar por casa
        if ($request->filled('casa')) {
            $query->whereHas('casa', function ($q) use ($request) {
                $q->where('nombre', 'like', '%' . $request->casa . '%');
            });
        }

        // Filtrar por divisa
        if ($request->filled('divisa')) {
            $query->whereHas('divisa', function ($q) use ($request) {
                $q->where('nombre', 'like', '%' . $request->divisa . '%');
            });
        }

        $registros = $query->get();

        return view('cliente_casa_divisas.index', compact('registros'));
    }

    // Mostrar el formulario para crear un nuevo registro
    public function create()
    {
        $personas = Persona::all();
        $casas = CasasDeApuestas::all();
        $divisas = Divisas::all();
        return view('cliente_casa_divisas.create', compact('personas', 'casas', 'divisas'));
    }

    // Guardar un nuevo registro en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'persona_id' => 'required|exists:personas,id',
            'casa_id' => 'required|exists:casas_de_apuestas,id',
            'divisa_id' => 'required|exists:divisas,id',
            'fecha_asignacion' => 'required|date',
        ]);

        ClienteCasaDivisa::create($request->all());

        return redirect()->route('cliente-casa-divisas.index')->with('success', 'Registro creado correctamente.');
    }

    // Mostrar un registro específico
    public function show(ClienteCasaDivisa $clienteCasaDivisa)
    {
        return view('cliente_casa_divisas.show', compact('clienteCasaDivisa'));
    }

    // Mostrar el formulario para editar un registro
    public function edit(ClienteCasaDivisa $clienteCasaDivisa)
    {
        $personas = Persona::all();
        $casas = CasasDeApuestas::all();
        $divisas = Divisas::all();
        return view('cliente_casa_divisas.edit', compact('clienteCasaDivisa', 'personas', 'casas', 'divisas'));
    }

    // Actualizar un registro en la base de datos
    public function update(Request $request, ClienteCasaDivisa $clienteCasaDivisa)
    {
        $request->validate([
            'persona_id' => 'required|exists:personas,id',
            'casa_id' => 'required|exists:casas_de_apuestas,id',
            'divisa_id' => 'required|exists:divisas,id',
            'fecha_asignacion' => 'required|date',
        ]);

        $clienteCasaDivisa->update($request->all());

        return redirect()->route('cliente-casa-divisas.index')->with('success', 'Registro actualizado correctamente.');
    }

    // Eliminar un registro de la base de datos
    public function destroy(ClienteCasaDivisa $clienteCasaDivisa)
    {
        $clienteCasaDivisa->delete();

        return redirect()->route('cliente-casa-divisas.index')->with('success', 'Registro eliminado correctamente.');
    }
}
