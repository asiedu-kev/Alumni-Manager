<?php

use App\Http\Controllers\MainController;

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
Route::get('/admin',DashboardAdmin::class)->name('admin.dashboard');
Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('auth.login');
    Route::get('/register', Register::class)->name('auth.register');
});
Route::get('admin/user/user:edit',[MainController::class,'displaySingle'])->name('user.display');
//Route::delete('admin/user/user:delete',[MainController::class,'destroy'])->name('user.destroy');
Route::get('admin/user/delete/{id}', [MainController::class,'destroy'])->name('user.destroy');
Route::post('admin/user/moreInfo', [MainController::class,'moreInfo']);
