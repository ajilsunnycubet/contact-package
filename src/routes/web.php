<?php

use Ajilsunnycubet\Contact\Http\Controllers\ContactController;

Route::get('contact',[ContactController::class,'index'])->name('contact');
Route::post('contact',[ContactController::class,'save'])->name('contact-post');