<?php

use App\Http\Controllers\HolaController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\UserPruebaController;
use App\Http\Controllers\ActividadesController;
use App\Models\Task;
use App\Http\Controllers\TaskController;
/*
Route::get('/hola', [HolaController::class, 'index'])->name('hola.index');
Route::get('/hola/{nombre}', [HolaController::class, 'show'])->name('hola.show');

// Mostrar el formulario para crear un nuevo artículo
Route::get('/blog/crear', [BlogController::class, 'create'])->name('blog.create');
// Mostrar todos los artículos del blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
// Mostrar un artículo específico
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');
*/
// Ruta de inicio
Route::get('/', function () {
    return view('welcome');
});

Route::get('contactanos', function () {
    return "Sección de contactos";
})->name('contactos');

Route::redirect('contactame', 'contactanos');

Route::middleware(['first','second'])->group(function () {
    Route::get('user/', function (): string{
        // Usa los Middleware first & second
        return "Hola";
    });
    Route::get('user/profile', function (): string {
        // Usa los Middleware first & second
        return "Adiós";
    });
    
});

/*Route::prefix('admin')->group(function () {
    Route::get('users', function (): string {
        // Usa los Middleware first & second
        return "Usuarios admin";
    });
    Route::get('settings', function (): string {
        // Usa los Middleware first & second
        return "Settings admin";
    });
});*/

Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){
    Route::get('dashboard', function (){
        // Usa los Middleware first & second
        return "Dashboard admin";
    });
});
Route::get('/login', function (){
    return "Pagina login";
})->name('login');

Route::get('/quienesSomos/{nombre?}', 
[UserPruebaController::class,
'quienesSomos']);

Route::get('/actividades', [ActividadesController::class, 'actividadesVistas']);

//Route::get('/tasks', function () {
//    $tasks=task::take(10)->get();
//    dump($tasks);
//});
//Route::view('/layout','prueba-layout');
//Route::get('/pruebaVista', function () {
//    return view('prueba-layout');
//});

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('tasks', [TaskController::class, 'store'])->name('tasks.store');