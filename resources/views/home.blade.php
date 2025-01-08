@extends('layouts.app')

@section('title')
    Laravel 11 - Pagina principal
@endsection

@push('css')
    <style>
        body{
            background-color: #2e2c2c
        }        
    </style>
@endpush

@push('css')
    <style>
        body{
            color: red;
        }        
    </style>
@endpush

@section('content')
    <div class="max-w-4xl mx-auto px-4">
        {{-- <h1>Bienvenido Guti0414 a la pagina principal</h1> --}}
        <x-alert2 type="danger" class="mb-4">
            <x-slot name="title">
                Titulo de la alterta
            </x-slot>
            Contenido de la alterta GOOD
        </x-alert2>
        <p>Hola causa</p>
    </div>
@endsection