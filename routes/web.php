<?php

    use App\Http\Livewire\Auth\Login;
    use App\Http\Livewire\Auth\Register;
    use App\Http\Livewire\User\Dashboard;
    use App\Http\Livewire\Admin\DashboardAdmin;
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

Route::get('/',Dashboard::class);
Route::get('/admin',DashboardAdmin::class);
Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('auth.login');
    Route::get('/register', Register::class)->name('auth.register');
});