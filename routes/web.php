<?php

use App\Http\Controllers\DoctorController;
use App\Models\User;
use App\Models\FranchiseApplication;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PLoginController;
use App\Http\Controllers\FranchiseApplicationController;
use App\Http\Controllers\DiagnosticServiceController;


// Route::get('/create-user', function () {

//     if (!User::where('email', 'admin@gmail.com')->exists()) {
//         $user = new User();
//         $user->name = 'Admin';
//         $user->email = 'admin@gmail.com';
//         $user->password = Hash::make('12345678');
//         $user->save();

//         return 'User created successfully';
//     }

//     return 'User already exists';
// });

Route::get('/leaflet', function () {

    $path = public_path('leaflet.pdf');

    return Response::file($path, [
        'Content-Type' => 'application/pdf',
    ]);

});


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home-collection', function () {
    return view('home-collection');
})->name('home-collection');

Route::get('/find-test', function () {
    return view('find-test');
})->name('find-test');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/find-doctor', function () {
    return view('find-doctor');
})->name('find-doctor');

Route::get('/find-doctor', function () {
    return view('find-doctor');
})->name('find-doctor');

Route::get('/center', function () {
    return view('center');
})->name('center');

Route::get('/health-package', function () {
    return view('health-package');
})->name('health.package');

Route::get('/company-profile', function () {
    return view('about-us.company-profile');
})->name('company.profile');

Route::get('/csr', function () {
    return view('about-us.csr');
})->name('csr');

Route::get('/customer-care', function () {
    return view('about-us.customer-care');
})->name('customer.care');

Route::get('/team-of-experts', function () {
    return view('about-us.team-of-experts');
})->name('experts.team');

Route::get('/int-health-card', function () {
    return view('int-health-card');
})->name('int.health.card');

Route::get('/franchise-registration', function () {
    return view('franchise-registration');
})->name('franchise.registration');

Route::get('/diagnostics', function () {
    return view('diagnostics');
})->name('diagnostics');

Route::get('/latest-products', function () {
    return view('latest_products');
})->name('latest.products');
// Route::get('/diagnostic-service', function () {
//     return view('diagnostic_service');
// })->name('diagnostic.service');
// Route::get('/consult-doctor', function () {
//     return view('consult_doctor');
// })->name('consult.doctor');
Route::get('/book-test', function () {
    return view('book_test');
})->name('book.test');




Route::get('/create-user', function () {

    if (!User::where('email', 'admin@gmail.com')->exists()) {
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();

        return 'User created successfully';
    }

    return 'User already exists';
});


Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');

Route::post('login', [AuthController::class, 'handleWebLogin']);

Route::get('franchise-form', [PLoginController::class, 'franchiseFormGet'])->name('franchise.form.get');
Route::post('franchise-form', [FranchiseApplicationController::class, 'franchiseFormPost'])->name('franchise.form.post');


Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    Route::post('logout', [AuthController::class, 'handleLogout'])->name('logout');

    Route::get('franchise-list', [FranchiseApplicationController::class, 'index'])->name('franchise.list');

    Route::get('franchises/data', [FranchiseApplicationController::class, 'getFranchisesData'])->name('franchises.data');
});




Route::get('/diagnostic-service', [DiagnosticServiceController::class, 'index'])->name('diagnostic.service');
Route::get('/pathology-tests', [DiagnosticServiceController::class, 'getPathologyTests']);
Route::get('/pathology-test/{id}', [DiagnosticServiceController::class, 'show'])->name('pathology-test.show');
Route::get('/pathology-appointment', [DiagnosticServiceController::class, 'pathologyAppointment'])->name('pathology.appointment');
Route::get('/book-doctor-appointment', [DoctorController::class, 'bookDoctorAppointment'])->name('book.doctor.appointment');
Route::get('/consult-doctor', [DoctorController::class, 'bookDoctorAppointment'])->name('consult.doctor');

Route::get('/consult-doctor-details/{id}', [DoctorController::class, 'show'])->name('consult.doctor.details');

// Route::get('/consult-doctor/{id}', [DoctorController::class, 'show'])->name('doctor.show');
