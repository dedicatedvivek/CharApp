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
Route::middleware(['auth'])->group(function () 
{
	Route::get('/', function () {
    return view('test');

});
	Route::get("newapplicant",function(){

	return view ('new_applicant');
});
	Route::get("user_new_applicant",function(){

	return view ('user_new_applicant');
});

Route::get("index",function(){

	return view ('laraconfig');
});
Route::get("overview",function(){

	return view ('overview');
});
Route::get("user_index",function(){

	return view ('user_laraconfig');
});

Route::get("listapplicant",function(){

	return view ('list_applicant');
});
Route::get("bank",function(){

	return view ('bank');
});
Route::get("new_bank",function(){

	return view ('new_bank');
});
Route::get("saving",function(){

	return view ('saving');
});
Route::get("new_saving",function(){

	return view ('new_saving');
});

Route::get("transaction",function(){

	return view ('transaction');
});
Route::get("new_fd",function(){

	return view ('new_fd');
});
Route::get("new_expense",function(){

	return view ('new_expense');
});

});

Route::get("finance",function(){

	return view ('finance');
});

Route::get("education",function(){

	return view ('education');
});

Route::get("medical",function(){

	return view ('medical');
});


Route::get("home",function(){

	return view ('home');
});



Route::get("user_new_applicant",function(){

	return view ('user_new_applicant');
});

Route::get("index",function(){

	return view ('laraconfig');
});
Route::get("user_index",function(){

	return view ('user_laraconfig');
});

Route::get("listapplicant",function(){

	return view ('list_applicant');
});
Route::get("bank",function(){

	return view ('bank');
});
Route::get("new_bank",function(){

	return view ('new_bank');
});
Route::get("saving",function(){

	return view ('saving');
});
Route::get("new_saving",function(){

	return view ('new_saving');
});

Route::get("transaction",function(){

	return view ('transaction');
});
Route::get("new_fd",function(){

	return view ('new_fd');
});
Route::get("new_expense",function(){

	return view ('new_expense');
});

Route::get("calci",function(){

	return view ('calci');
});
Route::get("list_disbursements",function(){

	return view ('list_disbursements');
});

Route::get("fd_list",function(){

	return view ('fd_list');
});
Route::get("aboutus",function(){

	return view ('aboutus');
});

Route::get("user_login",function(){

	return view ('user_login');
});

Route::get("user_welcome",function(){

	return view ('user_welcome');
});

Route::get("user_about_us",function(){

	return view ('user_about_us');
});

Route::get("image",function(){

	return view ('imagetest');
});
Route::get("abc",function(){

	return view ('dummy');
});


Route::post("store",'application@store');

Route::post("/insert","Controller@insert");

Route::post("/userlogin_check","UserLoginController@userlogin_check");

Route::post("/update","UpdateController@update");

Route::post("/delete","UpdateController@delete");
Route::post("/doc1","UpdateController@doc1");
Route::post("/doc2","UpdateController@doc2");

Route::post("/insertbank","BanksController@insertbank");

Route::post("/insertsaving","SavingsController@insertsaving");

Route::post("/calculatorfunction","calcical@calculatorfunction");

Route::post("/insertfd","FDController@insertfd");
Route::post("/sanction_amount","DisbursementController@sanction_amount");

Route::get("list_bank",function(){

	return view ('list_bank');
});

Route::get("list_savings",function(){

	 return view ('list_savings');
 });


Route::get("ajax",function(){

	 return view ('ajax');
 });

Route::get("api",function(){

	 return view ('api');
 });



Route::post("/insertexpense","ExpenseController@insertexpense");


Auth::routes();

#Route::get('/home', 'HomeController@index')->name('home');
