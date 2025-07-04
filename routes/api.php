<?php

use App\Http\Controllers\Api\AttendanceController;
use App\Http\Controllers\EventController;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('events', EventController::class);
Route::apiResource('events.attendances', AttendanceController::class)
    ->scoped(['attendace' => 'event']);