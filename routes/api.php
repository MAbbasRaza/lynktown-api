<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LynkController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CatalogController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/auth/register', [AuthController::class, 'register']);

Route::post('/auth/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/me', function(Request $request) {
        return auth()->user();
    });

    // Lynk Routes
    Route::post('/lynk/list', [LynkController::class, 'list']);
    Route::post('/lynk/create', [LynkController::class, 'store']);
    Route::post('/lynk/single/{id}', [LynkController::class, 'show']);
    Route::post('/lynk/update', [LynkController::class, 'update']);
    
    // Store Routes
    Route::post('/store/list', [StoreController::class, 'list']);
    Route::post('/store/create', [StoreController::class, 'store']);
    Route::post('/store/single', [StoreController::class, 'show']);
    Route::post('/store/stats', [StoreController::class, 'stats']);
    Route::post('/store/update', [StoreController::class, 'update']);
    Route::post('/section/create', [StoreController::class, 'sectionCreate']);
    Route::post('/section/list', [StoreController::class, 'sectionList']);
    Route::post('dashboard/details', [StoreController::class, 'details']);
    
    // Products
    Route::post('/product/list', [ProductController::class, 'list']);
    Route::post('/product/add_to_catalog', [ProductController::class, 'addToCatalog']);
    Route::post('/product/delete-from-catalog', [ProductController::class, 'deleteFromCatalog']);
    Route::post('/product/create', [ProductController::class, 'store']);
    Route::post('/product/update', [ProductController::class, 'update']);
    Route::post('/product/single/{id}', [ProductController::class, 'show']);


    // Store Routes
    Route::post('/catalog/list', [CatalogController::class, 'list']);
    Route::post('/catalog/create', [CatalogController::class, 'store']);
    Route::post('/catalog/single/{id}', [CatalogController::class, 'show']);
    Route::post('/catalog/update/{id}', [CatalogController::class, 'update']);
    

    Route::post('/test', [AuthController::class, 'test']);

    Route::post('/profile-edit', [UserController::class, 'profileEdit']);
    Route::post('/password-reset', [AuthController::class, 'resetPassword']);
    Route::post('/set-new-password', [AuthController::class, 'setNewPassword']);
    Route::post('/password-forget', [AuthController::class, 'forgetPassword']);

    Route::post('/auth/delete', [AuthController::class, 'deleteAccount']);
    Route::post('/auth/logout', [AuthController::class, 'logout']);
});

