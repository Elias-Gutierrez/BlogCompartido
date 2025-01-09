@extends('layouts.app')

@section('title', 'Lista de Personas')

@section('content')
<div class="bg-white shadow rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4">Lista de Personas</h1>
    <a href="{{ route('personas.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Agregar Persona</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table-auto w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-blue-200">
                <th class="border border-gray-300 px-4 py-2">ID</th>
                <th class="border border-gray-300 px-4 py-2">Nombre</th>
                <th class="border border-gray-300 px-4 py-2">Apellido</th>
                <th class="border border-gray-300 px-4 py-2">Email</th>
                <th class="border border-gray-300 px-4 py-2">Teléfono</th>
                <th class="border border-gray-300 px-4 py-2">País</th>
                <th class="border border-gray-300 px-4 py-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personas as $persona)
                <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">{{ $persona->id }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $persona->nombre }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $persona->apellido }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $persona->email }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $persona->telefono }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $persona->pais }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                        <a href="{{ route('personas.edit', $persona->id) }}" class="text-yellow-500 hover:underline">Editar</a>
                        <form action="{{ route('personas.destroy', $persona->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500 hover:underline" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
