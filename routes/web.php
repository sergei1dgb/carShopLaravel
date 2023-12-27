<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Cache;
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


Route::get('/', [ProductController::class, 'index'])->name('index');
Route::get('/contacts', [ProductController::class, 'contacts'])->name('contacts');
Route::get('/about', [ProductController::class, 'about'])->name('about');
Route::get('/reviews', [ProductController::class, 'show_reviews'])->name('show_reviews');


Route::get('/dashboard', function () {
    return view('/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/product/add', [ProductController::class, 'store'])->name('store_add');
    Route::get('/product/add', [ProductController::class, 'store_view'])->name('store_view');
    Route::get('/order_basket', [ProductController::class, 'order_basket'])->name('order_basket');
    Route::post('/reviews/submit', [ProductController::class, 'review_submit'])->name('review_submit');

});

require __DIR__.'/auth.php';


//     //dump ("hello");
//     //dd ("hello");
//    // dump (config('app.url', 'test'));
// //    $cache = app()->make('cache');
// //    $cache->put('test1', 234);
// //    $cache->put('test2', 345);
// //    //$cache = Cache::get('test1', 222);
// //    $cache1 = cache();
// //    $cache1->put('morning', 'good');
// //     //dd();
// //     dd(cache('test2'));
// //    dd($cache1->get('morning1', 'bad'));
//     return view('hi', ['title' => 'Main Page', 'a' => 'Life is greate!']);

// });

// Route::get('/posts/{id}/comments/{comment}', function($id, $comment_id){
//     return "Page № $id Comment: $comment_id";
// });

// Route::get('/posts/{id?}', function($id=1){
//     return "Page № $id";
// });

// Route::get('/posts/{about}', function($about){
//     return "Comment: $about";
// });


// Route::redirect('/status', '/posts');

// Route::fallback(function(){
//     //return "404 - Page not found";
//     //return response('404', '404');
//     abort(404, '404 - Page not found!!!');
// });
// // Route::get('/posts/{id}', function($id){
// //     return "Page № $id";
// // })->where(['id' => '[0-9]+']);
