<?php

use App\Http\Controllers\TapWaterTicketController;
use App\Http\Controllers\TableTicketsController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

// Диспетчеры: главная страница
Route::get('/', function () {
    return view('dispatchershome');
})->name('dispatchershome');

// Диспетчеры: заявка Водопровод
Route::get('/tapwaterticket', function () {
    return view('tapwaterticket');
})->name('tapwaterticket');

// Диспетчеры: редактирование заявки Водопровод
Route::get('/ticketedit', function () {
    return view('ticketedit');
})->name('ticketedit');

// Отправка формы (заявка Диспетчеров) и вывод сообщения о создании новой заявки
Route::post('/message', [TapWaterTicketController::class, 'store']);

// Вывод таблиц c заявками
Route::get('/tabletickets', [TableTicketsController::class, 'getTickets'])->name('tabletickets');
