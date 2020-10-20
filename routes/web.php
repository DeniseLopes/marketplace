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
//Store Routes
Route::get('/admin/stores', 'Admin\\StoreController@index');
Route::get('/admin/stores/create', 'Admin\\StoreController@create');
Route::post('/admin/stores/store', 'Admin\\StoreController@store');
//-------------------------------------------------------------

Route::get('/', function () {
    $helloWorld = 'Denise Rei!!';

    return view('welcome', compact('helloWorld'));
});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/model', function(){

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
   /* $user = App\User::find(42);
    $user->update([
        'name' => 'Denise Lopes mass update'
    ]);//true ou false*/

    //Como eu faria para pegar a loja de um usuario
    //$user = App\User::find(4);
   // return $user->store;

   //Como pegar os produtos de uma loja?
   //$loja = App\Store::find(1);
        //return $loja->products()->where('id', 1)->get();

    //Pegar as categorias de uma loja
   // $categoria = App\Category::find(1);
   // $categoria->products;

   //Criar uma loja para um usuario
       /* $user = App\User::find(10);
        $store = $user->store()->create([
            'name'=>'loja teste',
            'description'=>'loja teste de informatica',
            'mobile_phone'=> '12-997133032',
            'phone'=> '12 33333333',
            'slug'=> 'loja-teste'
        ]);

        dd($store);*/
   //Criar produto para uma loja
        /*$store = App\Store::find(41);
        $product = $store->products()->create([
            'name'=> 'notebook dell',
            'description'=> 'CORE I5 10gb',
            'body'=> 'Qualquer coisa linda',
            'price'=> 2999,90,
            'slug' => 'notebook-dell',
        ]);
        dd($product);*/
   //Criar uma categoria
          /*  \App\Category::create([
                'name'=> 'Games',
                'description' => 'De mara',
                'slug'=> 'games'
            ]);

            \App\Category::create([
                'name'=> 'Games',
                'description' => 'De mara',
                'slug'=> 'games'
            ]);

            return \App\Category::all();*/
   //Adicionar um produto para uma categoria ou vice-versa

               /* $product = \App\Product::find(1);
               dd($product->categories()->sync([2]));*/

                

      //  $product= \App\Product::find(1);
       // return $product->categories;
//});
    