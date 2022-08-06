<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TaskController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);
// Route::group(function () {
// })->middleware('auth');

Route::get('/task/create', [TaskController::class, 'create']);
route::get('/task', [TaskController::class, 'index'])->middleware('auth');
route::get('/task/{id}', [TaskController::class, 'show']);
route::post('/task', [TaskController::class, 'store']);
Route::get('/task/{id}/edit', [TaskController::class, 'edit']);
route::patch('/task/{id}', [TaskController::class, 'update']);
route::delete('/task/{id}', [TaskController::class, 'destroy']);
route::get('/product', [ProductController::class, 'index']);
route::get('/product/create', [ProductController::class, 'create']);
route::post('/product', [ProductController::class, 'store']);

    // return request()->all();




// Route::get('about', function () {
//     return view('about');
// });

// Route::get('/hello', function () {
//     $dataarray = [
//         'key' => 'value'
//     ];
//     return $dataarray;
//     // return response()->json($dataarray); bisa untuk menambahkan kode sttp code
// });
// Route::get('/debug', function () {
//     $dataarray = [
//         'key' => 'value'
//     ];
//     dd(request()); //buat debug
//     ddd($dataarray); //buat debug lebih jelas menunjukan tersimpan dimana
//     dd($dataarray);
// });



// route::get('/task/{param}', function ($param) use ($tasklist) {
//     return $tasklist[$param];
// });
