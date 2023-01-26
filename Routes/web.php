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

/*Route::prefix('languageswitch')->group(function() {
    Route::get('/', 'LanguageswitchController@index');
    Route::get('lang/{lang}', [\Modules\Languageswitch\Http\Controllers\LanguageswitchController::class, 'switchLang']) ->name('lang.switch');
});
*/
//Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => [\Modules\Languageswitch\Http\Controllers\LanguageswitchController::class, 'switchLang']]);

//Route::get('lang/{lang}', [\Modules\Languageswitch\Http\Controllers\LanguageswitchController::class, 'switchLang']) ->name('lang.switch');



Route::group(['middleware' => ['web']], function () {
    Route::name('lang.')->group(function () {
        Route::get('lang/{lang}', [\Modules\Languageswitch\Http\Controllers\LanguageswitchController::class, 'switchLang']) ->name('switch');
    });
});

/*
Route::name('ucp.')->group(function () {
    Route::group(['middleware' => ['auth'], 'prefix' => 'acp/ucp'], function () {

        Route::get('/',                 [\Modules\UCP\Http\Controllers\UCPController::class, 'index'])                  ->name('backend.index');
        Route::get('/edit/{user}',      [\Modules\UCP\Http\Controllers\UCPController::class, 'edit' ])                  ->name('backend.edit');
        Route::get('/update_status/{user}',         [\Modules\UCP\Http\Controllers\UCPController::class, 'changeStatus'])       ->name('backend.status.update');
        Route::post('/edit/{user}/password_change', [\Modules\UCP\Http\Controllers\UCPController::class, 'updatePassword'])     ->name('backend.password.change');
        Route::post('/edit/{user}/email_change',    [\Modules\UCP\Http\Controllers\UCPController::class, 'updateEmail'])        ->name('backend.email.change');
        Route::post('/edit/{user}/profilimage_change', [\Modules\UCP\Http\Controllers\UCPController::class, 'updatePicture'])   ->name('backend.image.change');
        Route::delete('/delete/{user}',             [\Modules\UCP\Http\Controllers\UCPController::class, 'destroy'])            ->name('backend.user.delete');

    });
});
*/
