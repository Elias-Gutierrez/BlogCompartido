@extends('layouts.app')

@section('title', 'Agregar Registro')

@section('content')
<div class="bg-white shadow rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4">Agregar Registro</h1>
    <form action="{{ route('cliente-casa-divisas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="persona_id" class="form-label">Persona</label>
            <select name="persona_id" id="persona_id" class="form-control" required>
                <option value="">Seleccione una persona</option>
                @foreach ($personas as $persona)
                    <option value="{{ $persona->id }}">{{ $persona->nombre }} {{ $persona->apellido }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="casa_id" class="form-label">Casa</label>
            <select name="casa_id" id="casa_id" class="form-control" required>
                <option value="">Seleccione una casa</option>
                @foreach ($casas as $casa)
                    <option value="{{ $casa->id }}">{{ $casa->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="divisa_id" class="form-label">Divisa</label>
            <select name="divisa_id" id="divisa_id" class="form-control" required>
                <option value="">Seleccione una divisa</option>
                @foreach ($divisas as $divisa)
                    <option value="{{ $divisa->id }}">{{ $divisa->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="fecha_asignacion" class="form-label">Fecha de Asignación</label>
            <input type="date" name="fecha_asignacion" id="fecha_asignacion" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('cliente-casa-divisas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
