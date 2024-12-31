<?php

use App\Http\Controllers\TapWaterTicketController;
use App\Http\Controllers\TableTicketsController;
use App\Http\Controllers\TicketEditController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('entry');
})->name('entry');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Диспетчеры: главная страница
Route::get('/dispatcher', function () {
    return view('dispatchershome');
})->name('dispatchershome');

// Диспетчеры: заявка Водопровод
Route::get('/tapwaterticket', function () {
    $service = "водопроводу";
    return view('tapwaterticket', compact('service'));
})->name('tapwaterticket');

// Диспетчеры: редактирование заявки Водопровод, передача id заявки
Route::get('/ticketedit/{ticket_id}', [TicketEditController::class, 'getTicketId'])->name('ticketedit');
// Обновить данные в заявке 
Route::post('/ticketupdate/{ticket_id}', [TicketEditController::class, 'updateTicket'])
  ->name('ticketupdate');

// Отправка формы (заявка Диспетчеров) и вывод сообщения о создании новой заявки
Route::post('/message', [TapWaterTicketController::class, 'store']);

// Вывод таблиц c заявками
Route::get('/tabletickets', [TableTicketsController::class, 'getTickets'])->name('tabletickets');


// регистрация и аутентификация
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('loginForm');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('registerForm');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
// частично обновить данные методом patch
Route::patch('/profile', [AuthController::class, 'updateProfile'])->name('updateProfile');

Route::get('/change-password', [AuthController::class, 'showChangePasswordForm'])->name('changePasswordForm');
Route::post('/change-password', [AuthController::class, 'changePassword'])->name('changePassword');
