<?php 
use App\Http\Controllers\ArticleController;
use App\Models\Article;
use App\Models\User;

use Illuminate\Support\Facades\Route;
//Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');


Route::get('/dashboard', function () {
    // ج
    $recentArticles = Article::with('user')->latest()->take(10)->get();;

    return view('dashboard', compact('recentArticles'));
})->name('dashboard');

Route::get('/', fn () => view('welcome'))->name('home');
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');


// Protected CRUD routes - only authenticated users can access
//Route::middleware(['auth'])->group(function () {
       Route::get('/articles/my-articles', [ArticleController::class, 'myArticles'])->name('articles.mine');

        Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
        Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
        Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
        Route::put('/articles/{article}', [ArticleController::class, 'update'])->name('articles.update');
        Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');
        
//});
Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');

require __DIR__ . '/auth.php';
