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
| 新增路由时，需要先引入对应的Controller
*/
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\OneController;
use Illuminate\Support\Facades\Route;

// Demo
Route::get('/demo', function() {
    return view('demo.zbxindex');
});

Route::controller(DemoController::class)->group(function() {
    Route::get('/demo/{id}', [DemoController::class, 'show']);
    Route::get('/url/{name?}', [DemoController::class, 'url'])->name('myurl');
});

Route::get('/one', OneController::class);



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
