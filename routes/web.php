<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $helloWorld = 'Hello World!!';

    return view('welcome', compact('helloWorld'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/model', function(){

    /*$user = App\User::find(1); //estancia da classe
    $user->name = 'Usuário Teste Editado';
    $user->email = 'email@teste.com';
    $user->password = bcrypt('12345678'); //para encriptar a senha
    $user->save();*/

//MASS ASSIGMENT - ATRIBUIÇÃO EM MASSA
   /* $user = App\User::create([
        'name'     => 'Denise Lopes',
        'email'    => 'denise@mail.com',
        'password' => bcrypt('123456789')
    ]);*/
//MASS UPDATE
    $user = App\User::find(42);
    $user->update([
        'name' => 'Denise Lopes mass update'
    ]);//true ou false

    return \App\User::all();
});
    