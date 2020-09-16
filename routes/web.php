<?php
use App\Product;
use App\Category;
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

/* $prod = new Product();
$prod->nombre = 'Producto 3';
$prod->slug = 'Producto 3';
$prod->category_id = 2;
$prod->descripcion_corta = 'Producto';
$prod->descripcion_larga = 'Producto';
$prod->especificaciones = 'Producto';
$prod->datos_de_interes = 'Producto';
$prod->estado = 'Nuevo';
$prod->activo = 'Si';
$prod->sliderprincipal = 'No';
$prod->save();
return $prod; */

    //return view('welcome');

    /* obtenemos productos y categorias a partir de productos  */
    /* $prod = Product::find(1)->first(); */ /* con first obtenemos el primer producto */
    /* $prod = Product::find(2); */ /* obtenemos el producto */
    
    //$prod = Product::find(3)->category; /* obtenemos la info de la categoria del producto */
    //return $prod;

    /* obtenemos categorias y productos a partir de categorias (la forma inversa) forma facil de listar productos por categoria  */
    $cat = Category::find(1)->products; /* obtenemos la info de la categoria del producto */
    return $cat;


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
