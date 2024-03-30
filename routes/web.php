<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\thepublic\MainPageController;
use App\Http\Controllers\thepublic\ThirteenController;


// ADMIN USES
use App\Http\Controllers\admin\dashCounterController;
use App\Http\Controllers\admin\dashPagesController;
use App\Http\Controllers\admin\MoviesController;
use App\Http\Controllers\admin\BookController;
use App\Http\Controllers\admin\PodcastController;
use App\Http\Controllers\admin\NewslettersController;
use App\Http\Controllers\admin\HealthController;
//END ADMIN USES
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

require __DIR__.'/auth.php';


// Route::get('/', function () {
//     return view('welcome');
// })->name("home");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile',      [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile',    [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile',   [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::group(['prefix' => 'post', 'middleware' => ['role']], function(){
//     Route::get('/', function(){
//         echo "hi";
//     });
// });



// Route::group(['prefix' => 'mt-panel', 'middleware' => ['auth','role:role_admin']],function(){
Route::group(['prefix' => 'deljin', 'middleware' => ['role']], function(){
    Route::resource('/',dashCounterController::class);
    Route::resource('/pages',dashPagesController::class);
    Route::resource('/movies',MoviesController::class);
    Route::resource('/books',BookController::class);
    Route::resource('/podcasts',PodcastController::class);
    Route::resource('/news',NewslettersController::class);
    Route::resource('/helth',HealthController::class);
});




// Route::get('/', function () {
//         return view('welcome');
//     });
Route::get('/',[MainPageController::class,"index"])->name("home");
Route::get('/13/{uri?}',[ThirteenController::class,"index"]);
Route::get("/movies/{uri?}",[MoviesController::class,"thepublic"]);
Route::get("/books/{uri?}",[BookController::class,"thepublic"]);
Route::get("/podcasts/{uri?}",[PodcastController::class,"thepublic"]);
Route::get("/news/{uri?}",[NewslettersController::class,"thepublic"]);
Route::get("/health/{uri?}",[HealthController::class,"thepublic"]);
Route::get('/{pages}',[dashPagesController::class,"single"])->name("page");
