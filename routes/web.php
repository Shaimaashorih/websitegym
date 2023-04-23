<?php

use App\Http\Controllers\Dashboardadmin\ArticleController;
use App\Http\Controllers\Dashboardadmin\CourseAController;
use App\Http\Controllers\Dashboardadmin\DashboardAdminController;
use App\Http\Controllers\Dashboardadmin\Diet_menuController;
use App\Http\Controllers\Dashboardadmin\General_settingsController;
use App\Http\Controllers\Dashboarduser\DashboardController;
use App\Http\Controllers\Dashboardadmin\RoleController;
use App\Http\Controllers\Dashboardadmin\TimetableController;
use App\Http\Controllers\Dashboardadmin\TrainerController;
use App\Http\Controllers\Dashboardadmin\User_timetableController;
use App\Http\Controllers\Dashboardadmin\UserController;
use App\Http\Controllers\Dashboardadmin\UserWorkoutController;
use App\Http\Controllers\Dashboardadmin\VideoController;
use App\Http\Controllers\Dashboardadmin\WorkoutController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


// Route::get('/', function () {
//     return view('Auth.login');
// });

Auth::routes();


// ******************Admin-dashboard****************//
// Route::prefix('admin')->middleware(['auth'])->group(function() {
    Route::get('/dashboardadmin' ,[DashboardAdminController::class , 'index']);
    Route::resource('general_settings' , General_settingsController::class);
    Route::resource('video_shows' , VideoController::class);
    Route::resource('trainers' , TrainerController::class);
    Route::resource('coursesa' , CourseAController::class);
    Route::resource('workouts' ,WorkoutController::class );
    Route::resource('articles' , ArticleController::class );
    Route::resource('timetables' , TimetableController::class );
    Route::resource('user_workouts' , UserWorkoutController::class );
    Route::resource('diet_menus' , Diet_menuController::class);
    Route::resource('user_dietmenus' , User_timetableController::class);
// });


// ******************user-dashboard****************//
Route::get('/dashboard' ,[DashboardController::class , 'index'])->name('name');
Route::get('/distance-map' ,[DashboardController::class , 'distance']);
Route::get('/food-menu' ,[DashboardController::class , 'food']);
Route::get('/personal-record' ,[DashboardController::class , 'personal']);
Route::get('/workout-plan' ,[DashboardController::class , 'workoutplan']);
Route::get('/workout-statistic' ,[DashboardController::class , 'workoutstatic']);


// ******************home****************//

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/home', [HomeController::class, 'storemessage'])->name('message.store');
Route::get('about', [HomeController::class, 'about']);
Route::get('blog' , [HomeController::class , 'blog']);
Route::get('contact' ,[ HomeController::class , 'contact']);
Route::get('courses' , [HomeController::class , 'courses']);
Route::get('schedule' , [HomeController::class , 'schedule']);




// ******************auth****************//

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});