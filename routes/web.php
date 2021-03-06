<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\Admin\RoomController as AdminRoomController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TestimonialController;

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/',[HomeController::class, 'index'])->name('index');

Auth::routes(['register' => false]);

Route::middleware(['auth'])->group(function () {
  Route::resource('/dashboard', DashboardController::class);

  Route::resource('/usuario', UserController::class);
  Route::get('/profile',[UserController::class, 'profile'])->name('profile');
  Route::post('/profile-update',[UserController::class, 'profileUpdate'])->name('profile.update');

  Route::resource('about', AboutController::class);
  Route::resource('/testimonial', TestimonialController::class);
  Route::resource('/admin/room', AdminRoomController::class);

  Route::resource('/room', RoomController::class);

  Route::post('usuario/update-is-active/{usuario}', [UserController::class, 'updateIsActive'])->name('usuario.updateIsActive');
  Route::post('testimonial/update-is-active/{testimonial}', [TestimonialController::class, 'updateIsActive'])->name('testimonial.updateIsActive');
  Route::post('about/show-section-testimonial/{testimonial}', [TestimonialController::class, 'ShowSectionTestimonial'])->name('testimonial.ShowSectionTestimonial');

});

// frontend
Route::get('/nosotros', [AboutUsController::class, 'index'])->name('nosotros');
Route::get('/habitacion-detalle', [RoomController::class,  'roomDetail'])->name('habitacion-detalle');
// Route::get('/habitacion', [RoomController::class,  'room'])->name('habitacion');

Route::resource('/habitacion', RoomController::class);



// Route::get('/detalle-blog', 'BlogController@blogDetail')->name('detalle-blog');
// Route::get('/grande-blog', 'BlogController@blogLarge')->name('grande-blog');
// Route::get('/lista-blog', 'BlogController@blogList')->name('lista-blog');
// Route::get('/mediano-blog', 'BlogController@blogmedium')->name('mediano-blog');
// Route::get('/peque??o-blog', 'BlogController@blogsmall')->name('peque??o-blog');
// Route::get('/lateral-blog', 'BlogController@blogSiderbar')->name('lateral-blog');

// Route::get('/comingsoon-paginas', 'PaginasController@paginasComingsoon')->name('comingsoon-paginas');
// Route::get('/404', 'PaginasController@paginas404')->name('404');
// Route::get('/inscribase-pagina', 'PaginasController@paginasSignup')->name('inscribase-pagina');
// Route::get('/personal-pagina', 'PaginasController@paginasStaff')->name('personal-pagina');
// Route::get('/acceso-pagina', 'PaginasController@paginasLogin')->name('acceso-pagina');


// Route::get('/contacto', 'ContactoController@contact')->name('contacto');

// Route::get('/evento-detalle', 'EventosController@eventDetail')->name('evento-detalle');
// Route::get('/evento-grande', 'EventosController@eventLarge')->name('evento-grande');
// Route::get('/evento-lista', 'EventosController@eventList')->name('evento-lista');
// Route::get('/evento-mediano', 'EventosController@eventMedium')->name('evento-mediano');
// Route::get('/evento-peque??o', 'EventosController@eventSmall')->name('evento-peque??o');

// Route::get('galeria-maposteria', 'GaleriaController@galeriaMaposteria')->name('galeria-maposteria');
// Route::get('galeria-simple', 'GaleriaController@galeriaSimple')->name('galeria-simple');


Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/inicio','IndexController@indexBackend')->name('inicio');

// Route::get('/pagina-inicio','PageController@pagesStarter')->name('pagina-inicio');




