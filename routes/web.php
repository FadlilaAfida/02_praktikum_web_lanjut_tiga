<?php
namespace App\Http\Controllers;
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
//Halaman Home
Route::get('/', function () {
    return 'Menampilkan halaman awal website';
});

//Halaman Products
Route::prefix('products')->group(function(){
    Route::get('/category/marbel-edu-games',function(){
        return '<a href="https://www.educastudio.com/category/marbel-edu-games">Menampilkan Marbel Edu Game</a>';
    }); 
    Route::get('/category/marbel-and-friends-kids-games',function(){
        return '<a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">Menampilkan Marbel And Friends Kids games</a>)';
    });
    Route::get('/category/riri-story-books',function(){
        return '<a href="https://www.educastudio.com/category/riri-story-books">Menampilkan Riri Story Books</a>';
    });
    Route::get('/category/kolak-kids-songs',function(){
        return '<a href="https://www.educastudio.com/category/kolak-kids-songs">MenampilkanKolak Kids Songs</a>';
    });
});

//Halaman News
Route::get('/halaman-news/{news?}/{name?}', function (string $news='menampilkan news', string $name = 'Menampilkan educastudio') {
    return  ($news . '<br>'. $name);
});

//Halaman Program
Route::prefix('program')->group(function(){
    Route::get('/program/karir',function(){
        return '<a href="https://www.educastudio.com/category/marbel-edu-games">Menampilkan Program Karir</a>';
    }); 
    Route::get('/program/magang',function(){
        return '<a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">Menampilkan Program Magang</a>';
    });
    Route::get('/program/kunjungan-industri',function(){
        return '<a href="https://www.educastudio.com/category/riri-story-books">Menampilkan Kunjungan Industri</a>';
    });
});

//Halaman About Us
Route::get('/aboutUs', function () {
    return ('<a href="https://www.educastudio.com/about-us ">Menampilkan About Us</a>');
});

//Halaman Contact Us
Route::resource('/contactUs', ContactUsController::class)->only([
    'index'
]);
 