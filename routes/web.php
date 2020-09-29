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

use App\Http\Controllers\BranchController;
use App\Http\Controllers\EmployeeController;

Route::get('/', function ()
{
   return view('index');
});

Route::get('/branches', [ BranchController::class, 'index' ]);
Route::get('/branch/add', [ BranchController::class, 'viewAdd' ]);
Route::post('/branch/add', [ BranchController::class, 'postAdd' ]);
