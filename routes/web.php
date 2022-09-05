<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
    $html = '<h1>Hoc lap trinh tai Unicode</h1>';
    return $html;
});

//Route::get('unicode', function () {
//    return 'Phuong thuc Get cua Path /unicode';
//});
//
//Route::get('unicode', function () {
//    return view('form');
//});
//
//
//Route::post('unicode', function () {
//    return 'Phuong thuc Post cua Path /unicode';
//});
//
//Route::put('unicode', function () {
//    return 'Phương thức PUT của path / unicode';
//});
//
//Route::delete('unicode', function () {
//    return 'Phương thức DELETE của path / unicode';
//});
//
//Route::patch('unicode', function () {
//    return 'Phương thức Patch của path / unicode';
//});

//Route::match(['get', 'post'], 'unicode', function () {
//    return $_SERVER['REQUEST_METHOD'];
//});

//Route::any('unicode', function (Request $request) {
//    return $request->method();
//});

//Route::get('show-form', function () {
//     return view('form');
//});
//
//Route::redirect('unicode', 'show-form');

//Route::view('show-form', 'form');

Route::prefix('admin')->group(function () {

    Route::get('unicode/{id}', function ($id) {
        $content = 'Phuong thuc Get cua Path /unicode voi tham so: ';
        $content.='id = '.$id;
        return $content;
    });

    Route::get('show-form', function () {
        return view('form');
    });

    Route::prefix('products')->group(function() {
        Route::get('/', function () {
            return 'Danh sach san pham';
        });

        Route::get('add', function () {
            return 'Them sam pham';
        });

        Route::get('edit', function () {
            return 'sua san pham';
        });

        Route::get('delete', function () {
            return 'xoa san pham';
        });
    });
});


