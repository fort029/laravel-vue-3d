<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Message;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/sendMessage', function (Request $request) {
    event(new App\Events\MyEvent($request->message));
    Message::create([
        'ip' => $request->ip(),
        'message' => $request->message
    ]);
    return response('success', 201);
});
