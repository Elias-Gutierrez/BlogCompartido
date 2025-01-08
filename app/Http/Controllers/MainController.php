<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class MainController extends Controller
{
    public function index()
    {
        // Consumir API de Usuarios (JSONPlaceholder)
        $usuarios = Http::withOptions([
            'verify' => false, // Desactiva la verificación SSL en entorno local
        ])->get('https://jsonplaceholder.typicode.com/users')->json();

        // Consumir API de Imágenes de Perros (Dog CEO API)
        $perro = Http::withOptions([
            'verify' => false,
        ])->get('https://dog.ceo/api/breeds/image/random')->json();

        // Consumir API de Datos curiosos sobre gatos (Cat Facts)
        $gatos = Http::withOptions([
            'verify' => false,
        ])->get('https://catfact.ninja/fact')->json();

        // Consumir API de Precios de Bitcoin (Coindesk)
        $bitcoin = Http::withOptions([
            'verify' => false,
        ])->get('https://api.coindesk.com/v1/bpi/currentprice.json')->json();

        // Pasar los datos a la vista}
        return view('home');
        //return view('welcome', compact('usuarios', 'perro', 'gatos', 'bitcoin'));
    }
}
