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

// Routes d'Authentification
Route::get('/', ['as'=>'/', 'uses'=>'LoginController@getLogin']);
Route::post('/home', ['as'=>'login', 'uses'=>'LoginController@postLogin']);

Route::group(['middleware'=>['authen']], function () {

    Route::get('/logout', [
        'as'=>'logout', 'uses'=>'LoginController@getLogout'
    ]);
    Route::get('/admin/parametrage', [
        'as'=>'parametrage', 'uses'=>'ParametrageController@index'
    ]);
});


// Routes declarations de mariage
Route::get('mariages/declaration-form', [
	'as'=>'declaration.create', 'uses'=>'DeclarationController@create'
]);
Route::get('mariages/declaration-list', [
	'as'=>'declaration.list', 'uses'=>'DeclarationController@index'
]);
Route::post('mariages/declaration/save', [
	'as'=>'declaration.save', 'uses'=>'DeclarationController@save'
]);
Route::get('mariages/declaration/{id}', [
	'as'=>'declaration.show', 'uses'=>'DeclarationController@show'
]);
Route::get('mariages/declaration/edit/{id}', [
    'as'=>'declaration.edit', 'uses'=>'DeclarationController@edit'
]);
//  Mise a jour declaration de mariage
Route::put('mariages/declaration/update/{id}', [
    'as'=>'declaration.update', 'uses'=>'DeclarationController@update'
]);
//  Suppression declaration de mariage
Route::get('mariages/declaration/delete/{id}', [
    'as'=>'declaration.delete', 'uses'=>'DeclarationController@destroy'
]);
//  publication declaration de mariage
Route::get('mariages/declaration/published/{id}', [
    'as'=>'declaration.published', 'uses'=>'DeclarationController@published'
]);
//calendrier des mariages
Route::get('/mariages/calendrier', 'DeclarationController@calendar')->name('calendar');

Route::get('mariages/mariage/{id}', [
	'as'=>'declaration.showCelebrateForm','uses'=>'DeclarationController@showCelebrateForm'
]);
Route::post('mariages/acte-mariage/save', [
	'as'=>'mariage.save','uses'=>'MariageController@save'
]);

Route::get('mariages/declaration/oppositions/{id}', [
    'as'=>'declaration.oppositions', 'uses'=>'DeclarationController@getOppositionsOfDeclaration'
]);

Route::get('registres/mariage/livret-create/acte={id}',
    ['as'=>'livret-create', 'uses'=>'MariageController@showLivretForm']
);

// Routes oppositions
Route::get('mariages/opposition', [
	'as'=>'opposition.list','uses'=>'OppositionMariageController@index'
]);
Route::get('mariages/list-opposition/decl-{id}', [
    'as'=>'opp.declaration','uses'=>'OppositionMariageController@getOppDeclaration'
]);
Route::post('mariages/opposition', [
    'as'=>'opposition.store','uses'=>'OppositionMariageController@store'
]);

// Routes registres des mariages
Route::get('registres/registers-list', ['as'=>'registers.list','uses'=>'RegistreController@index']);
Route::get('registres/register/{id}', ['as'=>'register.showContent','uses'=>'RegistreController@showRegisterContent']);
Route::get('registres/register', ['as'=>'register.show','uses'=>'RegistreController@showRegisterOpenContent']);
Route::get('registres/acte/{id}', ['as'=>'acte.show','uses'=>'MariageController@show']);



// Routes administration
Route::get('admin/user/{id}', ['as'=>'user.edit', 'uses'=>'UserController@edit']);
Route::get('admin/user', ['as'=>'user.update', 'uses'=>'UserController@update']);
Route::post('admin/parametrage', ['as'=>'user.save', 'uses'=>'UserController@save']);

Route::get('admin/mariages/satats/', ['as'=>'mariages.stats', 'uses'=>'MariageController@marriageStats']);

Route::get('admin/mariages/satats/vomlume-mensuel-par-annee/{centre_id}',
    ['as'=>'mariages.volume', 'uses'=>'MariageController@getStats']
);
Route::get('admin/mariages/satats/vomlume-mensuel-par-annee/export_excel/{centre_id}',
    ['as'=>'stats.export_excel', 'uses'=>'MariageController@exportToExcel']
);


//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Routes impression
Route::get('print/generate/publication-PDF/{declaration_id}', 'PDFController@generatePublicationBansPDF')
    ->name('publication.pdf');

Route::get('print/generate/act_mariage.PDF/{acte_id}', 'PDFController@generateActeMariagePDF')
    ->name('acte-mariage.pdf');


