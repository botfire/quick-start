<?php
use botfire\botfire\Route;


Route::call('alert','botController->alert');
Route::call('message','botController->message');
Route::text('/start','botController->mainMessage');


Route::notFound('botController->mainMessage');
