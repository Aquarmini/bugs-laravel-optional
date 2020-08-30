<?php

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

Route::get('/', function () {
    $obj = (object)['id' => 1];
    dump(isset(optional($obj)->id));
    dump(optional($obj)->id);
    dump(isset(optional($obj)['id']));
    dump(optional($obj)['id']);

    $obj = ['id' => 1];
    dump(isset(optional($obj)->id));
    dump(optional($obj)->id);
    dump(isset(optional($obj)['id']));
    dump(optional($obj)['id']);
});
