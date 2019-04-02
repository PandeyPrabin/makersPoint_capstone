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
use App\Workorder;
use Illuminate\Http\Requests;

Route::get('/', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('makeworkorder', 'workorder_controller@makeworkorder');
//Route::get('editdetails', 'Makeworkorder_controller@edit');
Route::post('store', 'workorder_controller@store');


Route::get('/makeWorkOrder', function () {
    return view('makeWorkOrder');
});

Route::get('/workorders', 'workorder_controller@workorders');

//Route::get('/workorders', function () {
//    return view('workorders');
//});

Route::get('/workDetail', function () {
    return view('/workDetail');
});

Route::get('/earlywarnings',  'workorder_controller@earlywarnings');


Route::get('/machinetime', function () {
    return view('machinetime');
});

Route::get('/subTask', function () {
    return view('subTask');
});
Route::get('/machineReport', function () {
    return view('machineReport');
});
Route::get('/materials', function () {
    return view('materials');
});


Route::get('/control', function () {
    return view('control');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/profile-edit', function () {
    return view('profile-edit');
});




