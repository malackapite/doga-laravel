<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\OrganisatorController;
use App\Http\Controllers\UserController;
use App\Models\Invitation;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/api/orgs", [OrganisatorController::class, "index"]);
Route::get("/api/orgs/{id}", [OrganisatorController::class, "show"]);
Route::post("/api/orgs", [OrganisatorController::class, "store"]);
Route::put("/api/orgs/{id}", [OrganisatorController::class, "update"]);
Route::delete("/api/orgs/{id}", [OrganisatorController::class, "destroy"]);

Route::get("/org/new", [OrganisatorController::class, "newView"]);
Route::get("/org/list", [OrganisatorController::class, "listView"]);
Route::get("/org/edit/{id}", [OrganisatorController::class, "editView"]);

///////////////////////////////////////////////////////////////////////////

Route::get("/api/users", [UserController::class, "index"]);
Route::get("/api/users/{id}", [UserController::class, "show"]);
Route::post("/api/users", [UserController::class, "store"]);
Route::put("/api/users/{id}", [UserController::class, "update"]);
Route::delete("/api/users/{id}", [UserController::class, "destroy"]);

Route::get("/user/new", [UserController::class, "newView"]);
Route::get("/user/list", [UserController::class, "listView"]);
Route::get("/user/edit/{id}", [UserController::class, "editView"]);

///////////////////////////////////////////////////////////////////////////

Route::get("/api/events", [EventController::class, "index"]);
Route::get("/api/events/{id}", [EventController::class, "show"]);
Route::post("/api/events", [EventController::class, "store"]);
Route::put("/api/events/{id}", [EventController::class, "update"]);
Route::delete("/api/events/{id}", [EventController::class, "destroy"]);

Route::get("/event/new", [EventController::class, "newView"]);
Route::get("/event/list", [EventController::class, "listView"]);
Route::get("/event/edit/{id}", [EventController::class, "editView"]);

///////////////////////////////////////////////////////////////////////////

Route::get("/api/invs", [InvitationController::class, "index"]);
Route::get("/api/invs/{id}", [InvitationController::class, "show"]);
Route::post("/api/invs", [InvitationController::class, "store"]);
Route::put("/api/invs/{id}", [InvitationController::class, "update"]);
Route::delete("/api/invs/{id}", [InvitationController::class, "destroy"]);

Route::get("/inv/new", [InvitationController::class, "newView"]);
Route::get("/inv/list", [InvitationController::class, "listView"]);
Route::get("/inv/edit/{id}", [InvitationController::class, "editView"]);