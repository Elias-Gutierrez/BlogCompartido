@extends('layouts.app')

@section('title', 'Cliente Casa Divisas')

@section('content')
<div class="bg-white shadow rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4">Registros de Cliente Casa Divisas</h1>

    <!-- Formulario de Filtros -->
    <form method="GET" action="{{ route('cliente-casa-divisas.index') }}" class="mb-4">
        <div class="grid grid-cols-3 gap-4">
            <!-- Filtro por Nombre -->
            <div>
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" name="nombre" id="nombre" value="{{ request('nombre') }}"
                       class="form-control mt-1 block w-full" placeholder="Buscar por nombre">
            </div>

            <!-- Filtro por Casa -->
            <div>
                <label for="casa" class="block text-sm font-medium text-gray-700">Casa</label>
                <input type="text" name="casa" id="casa" value="{{ request('casa') }}"
                       class="form-control mt-1 block w-full" placeholder="Buscar por casa">
            </div>

            <!-- Filtro por Divisa -->
            <div>
                <label for="divisa" class="block text-sm font-medium text-gray-700">Divisa</label>
                <input type="text" name="divisa" id="divisa" value="{{ request('divisa') }}"
                       class="form-control mt-1 block w-full" placeholder="Buscar por divisa">
            </div>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Filtrar</button>
            <a href="{{ route('cliente-casa-divisas.index') }}" class="btn btn-secondary">Limpiar</a>
        </div>
    </form>

    <!-- Tabla de Registros -->
    <table class="table-auto w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-blue-200">
                <th class="border border-gray-300 px-4 py-2">ID</th>
                <th class="border border-gray-300 px-4 py-2">Persona</th>
                <th class="border border-gray-300 px-4 py-2">Casa</th>
                <th class="border border-gray-300 px-4 py-2">Divisa</th>
                <th class="border border-gray-300 px-4 py-2">Fecha de Asignación</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($registros as $registro)
                <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">{{ $registro->id }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $registro->persona->nombre ?? 'N/A' }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $registro->casa->nombre ?? 'N/A' }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $registro->divisa->nombre ?? 'N/A' }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $registro->fecha_asignacion }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center py-4">No se encontraron registros</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
