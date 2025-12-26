<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\Admin\{
    HomeController as AdminHomeController,
    UsersController as AdminUsersController,
    ClientsController as AdminClientsController,
    QuestionsController as AdminQuestionsController,
    AnswersController as AdminAnswersController
};

use App\Http\Controllers\Client\{
    HomeController as ClientHomeController,
    QuestionsController as ClientQuestionsController,
    PaymentsController as ClientPaymentsController
};

Route::group(['prefix'=>'admin', 'middleware'=>['auth', 'admin']], function(){
    Route::get('/', [AdminHomeController::class, 'index'])->name('admin.dashboard');

    Route::group(['prefix'=>'users', 'middleware'=>['superadmin'], 'controller' => AdminUsersController::class, 'name' => 'admin.users.'], function(){
        Route::get('/', 'index')->name('index');
        Route::get('/{user_id}', 'show')->name('show');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{user_id}/edit', 'edit')->name('edit');
        Route::put('/{user_id}/update', 'update')->name('update');
        Route::put('/{user_id}/blocked', 'blocked')->name('blocked');
        Route::delete('/{user_id}', 'delete')->name('delete');
    });

    Route::prefix('questions')->name('admin.questions.')->group(function(){
        Route::controller(AdminQuestionsController::class)->group(function(){
            Route::get('/', 'index')->name('index');
            Route::get('/{question_id}', 'show')->name('show');
            Route::put('/{question_id}/notcorrect', 'not_correct')->name('notcorrect');
            Route::delete('/{question_id}', 'delete')->name('delete');
        });
        
        Route::controller(AdminAnswersController::class)->name('answer.')->group(function(){
            Route::get('/{question_id}/answers', 'index')->name('index');
            Route::get('/{question_id}/answers/create', 'create')->name('create');
            Route::post('/{question_id}/answers/store', 'store')->name('store');
            Route::get('/{question_id}/answers/{answer_id}/edit', 'edit')->name('edit');
            Route::put('/{question_id}/answers/{answer_id}', 'update')->name('update');
            Route::delete('/{question_id}/answers/{answer_id}', 'delete')->name('delete');
        });
    });

    Route::group(['prefix'=>'clients', 'controller' => AdminClientsController::class, 'name' => 'admin.clients.'], function(){
        Route::get('/', 'index')->name('index');
        Route::get('/{client_id}', 'show')->name('show');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::put('/{client_id}/edit', 'edit')->name('edit');
        Route::put('/{client_id}', 'update')->name('update');
        Route::delete('/{client_id}', 'delete')->name('delete');
    });
});

Route::group(['prefix'=>'cabinet', 'middleware'=>['auth', 'client']], function(){
    Route::get('/', [ClientHomeController::class, 'index'])->name('client.home');

    Route::controller(ClientQuestionsController::class)->prefix('questions')->name('client.questions.')->group(function(){
        Route::get('/', 'index')->name('index');
        Route::get('/{questuin_id}', 'show')->name('show');
        Route::post('/create', 'create')->name('create');
    });

    Route::get('/payments', [ClientPaymentsController::class, 'index'])->name('client.payments');
});

Route::get('/', function () {
    return view('welcome');
});
