<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.home');
})->name('home');


Route::get('/profile','ProfileController@showProfile');
Route::get('/profile/edit','ProfileController@EditProfile');
Route::post('/profile/update','ProfileController@updateProfile')->name('updateProfile');


//Clients
Route::get('/clients/add','ClientController@AddClients');
Route::post('/clients/add','ClientController@SaveClients')->name('AddClients');
Route::get('/clients','ClientController@ViewAllClients')->name('ViewAllClients');
Route::get('/clients/{id}/edit','ClientController@ClientsEdit')->name('clientedit');
Route::post('/clients/{id}/update','ClientController@updateClient')->name('UpdateClients');
Route::delete('/clients/{id}/delete','ClientController@DeleteClient')->name('DeleteClient');


//Bill
Route::get('/bill/add','BillController@AddBill');
Route::post('/bill/add','BillController@SaveBills')->name('AddBills');
Route::get('/bills','BillController@ViewAllBills')->name('ViewAllBills');
Route::get('/bills/{id}/edit','BillController@EditBill')->name('EditBill');
Route::post('/bills/{id}/update','BillController@updateBill')->name('updateBill');
Route::delete('/bill/{id}/delete','BillController@DeleteBill')->name('DeleteBill');

Route::get('/bill/{id}/print','BillController@printBill')->name('printBill');