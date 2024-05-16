
<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [PageController::class, 'index'])->name('index');


Route::get('/details', [PageController::class, 'details'])->name('details');


Route::post('/delete', [PageController::class, 'delete'])->name('delete');


Route::get('/modify', [PageController::class, 'modify'])->name('modify');

Route::get('/create', [PageController::class, 'create'])->name('create');





//Route get
//Route post
//Route put
//Route patch (per aggiornare)
//Route delete (per cancellare)
//Route view (se deve tornare solo una lista)



