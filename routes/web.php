<?php


namespace  App\Http\Controllers; // namespace because there are only requests to that folder, instead of declaring use for every value.
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class, 'view'])->name('main'); // main page
Route::get('/profile', [ProfileController::class, 'view'])->name('profile'); // profile page
Route::get('/dashboard', [DashboardController::class, 'view'])->name('dashboard'); // my Dashboard page
Route::get('/my-motivation', [MotivationController::class, 'view']); // motivation page
Route::resource('/profession', ProfessionController::class); // my Profession page
Route::resource('/faq', FaqController::class); // faq page
Route::resource('/grades', GradeController::class);
Route::resource('/courses', CourseController::class)->middleware(['auth']); // clicking on a course now requires authentication to edit


//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
