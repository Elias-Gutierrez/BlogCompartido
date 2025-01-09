@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Crear Divisa</h1>
    <form action="{{ route('divisas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="codigo" class="form-label">Código</label>
            <input type="text" name="codigo" id="codigo" class="form-control" maxlength="3" required>
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" maxlength="50" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('divisas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
