@extends('layouts.app')

@section('title', 'Lista de Divisas')

@section('content')
<div class="bg-white shadow rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4">Lista de Divisas</h1>
    <a href="{{ route('divisas.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Agregar Divisa</a>
    <table class="table-auto w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-blue-200">
                <th class="border border-gray-300 px-4 py-2">ID</th>
                <th class="border border-gray-300 px-4 py-2">Código</th>
                <th class="border border-gray-300 px-4 py-2">Nombre</th>
                <th class="border border-gray-300 px-4 py-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($divisas as $divisa)
                <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">{{ $divisa->id }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $divisa->codigo }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $divisa->nombre }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                        <a href="{{ route('divisas.edit', $divisa->id) }}" class="text-yellow-500 hover:underline">Editar</a>
                        <form action="{{ route('divisas.destroy', $divisa->id) }}" method="POST" style="display:inline;">
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
