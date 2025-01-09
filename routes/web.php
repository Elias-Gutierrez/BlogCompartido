<?php

use App\Http\Controllers\CasasDeApuestasController;
use App\Http\Controllers\ClienteCasaDivisaController;
use App\Http\Controllers\DivisasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\PostController;
use App\Models\CasasDeApuestas;
use App\Models\ClienteCasaDivisa;
use App\Models\Divisas;
use App\Models\Persona;
use App\Models\Post;

use function Laravel\Prompts\select;
use function Pest\Laravel\post;

Route::get('/', [MainController::class, 'index']);

Route::resource('posts', PostController::class);

//-------------------------------------------------------------------------------------------//
Route::resource('divisas', DivisasController::class);

Route::resource('personas', PersonaController::class);

Route::resource('casas-de-apuestas', CasasDeApuestasController::class);

Route::get('/cliente-casa-divisas', [ClienteCasaDivisaController::class, 'index'])->name('cliente-casa-divisas.index');
//-------------------------------------------------------------------------------------------//


Route::get('/prueba', function(){
    
    
/*     //CREAR NUEVO POST    

    $post = new Post;

    $post->name = 'TITULO DE PRUEBA 4';
    $post->content = 'Titulo de contenido 4';
    $post->categoria = 'Titulo de categoria 4';

    $post->save();
    
    return $post; */


    $post = Post::find(1);
    dd($post->is_active);
    //return $post->is_active;

    /* 
    ACTUALIZAR REGISTRO

    $post = Post::where('name','Titulo de prueba 1')->first();
    $post->categoria = 'Desarrollo de software';
    $post->save();
    */

    /*     
    LISTAR TODOS LOS REGISTROS

    $post = Post::orderBy('id','asc')
            ->select('id','name','categoria')
            ->take(2)
            ->get();
    */

    /* 
    ELIMIAR UN REGISTRO

    $post = Post::find(1);
    $post -> delete();
    return "Eliminado correctamente";
    */

});