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



Auth::routes(['verify'=>true]);

Route::get('profile',function(){
    return '<h1> This is profile page</h1>';
})->middleware('verified');
Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', function () {
    return view('layouts/master');
});
Route::get('/',function(){
    return view('auth/login');

});
Route::get('/companies',function(){
    return view('need/companies');

});

Route::get('/new-deposit',function(){
    return view('need/new-deposit');

});
Route::get('/newExpense',function(){
    return view('need/new-expense');

});

Route::get('/transfer',function(){
    return view('need/transfer');

});

Route::get('/viewTransactions',function(){
    return view('need/view-transactions');

});

Route::get('/balanceSheet',function(){
    return view('need/balance-sheet');

});
Route::get('/invoices',function(){
    return view('need/invoices');

});
Route::get('/newInvoice',function(){
    return view('need/new-invoice');

});

Route::get('/recurringInvoices',function(){
    return view('need/recurring-invoices');

});

Route::get('/newRecurringInvoices',function(){
    return view('need/new-recurring-invoice');

});
Route::get('/quotes',function(){
    return view('need/quotes');

});

Route::get('/createNewQuote',function(){
    return view('need/create-new-quote');

});
Route::get('/payments',function(){
    return view('need/payments');

});

Route::get('/calendar',function(){
    return view('need/calendar');

});













