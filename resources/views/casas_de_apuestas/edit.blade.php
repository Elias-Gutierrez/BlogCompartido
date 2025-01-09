@extends('layouts.app')

@section('title', 'Editar Casa de Apuestas')

@section('content')
<div class="bg-white shadow rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4">Editar Casa de Apuestas</h1>
    <form action="{{ route('casas-de-apuestas.update', $casasDeApuesta->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $casasDeApuesta->nombre }}" maxlength="100" required>
        </div>
        <div class="mb-3">
            <label for="provCuotas" class="form-label">Proveedor de Cuotas</label>
            <input type="text" name="provCuotas" id="provCuotas" class="form-control" value="{{ $casasDeApuesta->provCuotas }}" maxlength="100" required>
        </div>
        <div class="mb-3">
            <label for="pais" class="form-label">País</label>
            <input type="text" name="pais" id="pais" class="form-control" value="{{ $casasDeApuesta->pais }}" maxlength="50" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('casas-de-apuestas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
