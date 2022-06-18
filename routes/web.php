<?php

use App\Exports\PersonExport;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PendaftaranController;
use App\Models\Pendaftaran;
use App\Models\SettingTime;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

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

Route::controller(PendaftaranController::class)->group(function () {
    route::get('/', 'index')->name('login');
    route::post('/', 'store');
    route::post('/kabupaten', 'GetRegency');
    route::post('/kecamatan', 'GetDistrict');
    route::post('/kelurahan', 'GetVillage');
    route::post('/kabupaten/byId', 'GetRegencyById');
    route::post('/kecamatan/byId', 'GetDistrictById');
    route::post('/kelurahan/byId', 'GetVillageById');
});

Route::controller(AuthController::class)->group(function () {
    route::get('/administrator', 'login');
    route::post('/administrator', 'authenticate');
    route::post('/logout', 'logout');
});

Route::get('/administrator', function () {
    return view('auth.index');
});

Route::get('/admin/dashboard', function () {
    $total = count(Pendaftaran::all());
    $ma = count(Pendaftaran::where('jenjang', '1')->get());
    $mts = count(Pendaftaran::where('jenjang', '2')->get());
    $santri = count(Pendaftaran::where('is_pesantren', '1')->get());
    return view('admin.dashboard.index', compact('total', 'ma', 'mts', 'santri'));
})->middleware('auth');

Route::controller(StudentController::class)->middleware('auth')->group(function () {
    route::get('/admin/student', 'index');
    route::post('/admin/student/status', 'status');
    route::get('/admin/student/{id}', 'show');
    route::get('/admin/student/{id}/edit', 'edit');
    route::put('/admin/student/{id}', 'update');
    route::delete('/admin/student/{id}', 'destroy');
});

Route::get('/admin/document', function () {
    $datas = Pendaftaran::select('id', 'reg_number', 'fullname', 'kk', 'akte', 'foto')->get();
    return view('admin.document.index', compact('datas'));
});

Route::get('/admin/contact', function () {
    $contacts = Pendaftaran::select('id', 'reg_number', 'fullname', 'wa_number', 'email')->get();
    return view('admin.contact.index', compact('contacts'));
});

Route::controller(SettingController::class)->middleware('auth')->group(function () {
    route::get('/admin/setting', 'index');
    route::get('/admin/setting/time', 'ChangeTime');
    route::post('/admin/setting/account', 'CreateAccount');
    route::post('/admin/setting/password', 'ChangePassword');
    route::delete('/admin/setting/account/{id}', 'DeleteAccount');
});

Route::get('/admin/excel', function () {
    return Excel::download(new PersonExport, 'students.xlsx');
});

Route::get('/Chart', function () {
    $gender = Pendaftaran::select('gender')->get();
    $hobi = Pendaftaran::select('hobi')->get();
    $cita = Pendaftaran::select('cita_cita')->get();
    $fatherJob = Pendaftaran::select('pekerjaan_ayah')->get();
    $fatherSalary = Pendaftaran::select('penghasilan_ayah')->get();
    $yearly = Pendaftaran::select('jenjang', 'tahun_ppdb')->get();
    return response()->json([
        'gender' => $gender,
        'hobi' => $hobi,
        'cita' => $cita,
        'fatherJob' => $fatherJob,
        'fatherSalary' => $fatherSalary,
        'yearly' => $yearly,
    ]);
});
