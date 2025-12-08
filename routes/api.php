<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

use App\Http\Controllers\Client\{
    HomeController as ClientHomeController,
    QuestionsController,
    AnswersController
};

Route::middleware('auth:sanctum', 'client')->name('api.questions.')->prefix('questions')->group(function(){
    Route::controller(QuestionsController::class)->group(function(){
        Route::post('/store', 'store')->name('store');
        Route::delete('/{questuin_id}/delete', 'delete')->name('delete');
    });
    
    Route::controller(AnswersController::class)->name('answers.')->group(function(){
        Route::get('/{questuin_id}/answers')->name('index');
        Route::get('/{questuin_id}/answers/{answer_id}')->name('show');
        Route::post('/{questuin_id}/answers/store')->name('store');
        Route::put('/{questuin_id}/answers/{answer_id}')->name('update');
        Route::delete('/{questuin_id}/answers/{answer_id}')->name('delete');
    });
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
