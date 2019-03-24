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

//TOPページ表示
Route::get('/', 'IndexController@index');



//マイページ表示
Route::get('/myPage', 'MypageController@index');

//ユーザー情報表示
Route::get('/userEdit','UserController@index');

//ユーザー編集処理
Route::post('/userEdit/action','UserController@edit');

//銀行口座登録フォーム表示
Route::get('/bank','BankController@index');

//銀行口座登録処理
Route::post('/bank/add','BankController@add');



//受注条件登録フォーム表示
Route::get('/conditionForm','ConditionController@index');

//受注条件条件詳細
Route::get('/itemDesc/{id}', 'JobController@index');



//DoorToDoor登録処理
Route::post('/doortodoor','ConditionController@doortodoor');

//DoorToStation登録処理
Route::post('/doortostation','ConditionController@doortostation');

//StationToStation登録処理
Route::post('/stationtostation','ConditionController@stationtostation');

//StationToDoor登録処理
Route::post('/stationtodoor','ConditionController@stationtodoor');




//ジョブ一覧ページ表示
Route::get('/jobList', 'JobController@jobList');

//ジョブ詳細ページ表示
Route::get('/jobDesc/{id}', 'JobController@jobDesc');

//ジョブ承諾処理
Route::post('/jobApprove', 'JobController@jobApprove');

//ジョブ拒否処理
Route::post('/jobCancel', 'JobController@jobCancel');




//オファーフォーム表示
Route::post('/offerForm', 'OfferController@index');

//オファー入力内容確認ページ
Route::get('/offerConf', 'OfferController@conf');

//オファー登録処理
Route::post('/offerAdd', 'OfferController@offerAdd');

//オファー一覧ページ表示
Route::get('/offerList', 'OfferController@offerList');




//売上確認
Route::get('/sales', 'SaleController@index');


//SMS認証画面
Route::get('/code', 'SmsController@index');

//SMSコードを入力後に遷移するルーティング
Route::post('/code', 'IndexController@storeCodeForm');
// Route::post('/code', 'Auth\\LoginController@storeCodeForm');



//QRコード認証処理
Route::get('/qrcode/a/{url_a}', 'QrcodeController@url_a');
Route::get('/qrcode/b/{url_b}', 'QrcodeController@url_b');


//ログイン機能系処理
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//テストページ
Route::get('/test', 'TestController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
