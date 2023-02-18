<?php

namespace App\Mail;


use App\Mail\MensagemTesteMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;




Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

// Route::get('/home', 'App\Http\Controllers\HomeController@index')
//     ->name('home')
//     ->middleware('verified');

Route::resource('tarefa', 'App\Http\Controllers\TarefaController')
    ->middleware('verified');

Route::get('/mensagem-teste', function(){
    return new MensagemTesteMail();
    // Mail::to('israel524.is@gmail.com')->send(new MensagemTesteMail());
    // return 'E-mail enviado com secesso!';
});

