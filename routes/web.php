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
use App\Employee;
use Illuminate\Http\Requests;

Route::get('/', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/addNewCustomer', function () {
    return view('addNewCustomer');
});

Route::get('makeworkorder', 'workorder_controller@makeworkorder');
//Route::get('editdetails', 'Makeworkorder_controller@edit');
Route::post('store', 'workorder_controller@store');

Route::post('put', 'workorder_controller@put');
//Route::get('profile', 'employee_controller@index');


Route::get('/makeWorkOrder', function () {
    return view('makeWorkOrder');
});

Route::get('/workorders', 'workorder_controller@workorders');

//Route::get('/workorders', function () {
//    return view('workorders');
//});

Route::get('/workDetail/{workid}', 'workorder_controller@workDetail');

Route::get('/earlywarnings',  'workorder_controller@earlywarnings');

Route::get('/create-workprocess',  'workprocess_controller@create');

Route::get('/workprocess',  'workprocess_controller@showworkprocess');


Route::get('/machinetime', function () {
    return view('machinetime');
});

Route::get('employeeProfile','employee_controller@showemployee');

Route::get('/edit-employee/{employeeid}','employee_controller@editemployee');

Route::get('delete-employee','employee_controller@deleteEmployee');



Route::get('customer','customer_controller@showCustomer');


//Route::get('/employeeProfile', function () {
//    return view('employeeProfile');
//});


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




