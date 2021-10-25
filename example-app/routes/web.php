<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/',[IndexController::class,'index'])->name('/');

Route::middleware(['auth:sanctum', 'web'])->get('/dashboard', function () {
    $email=Auth::user()->email;
    $total_order=DB::table('product_details')->latest()->paginate(2);
    return view('users.dashboard_view',compact('total_order'));
})->name('dashboard');
