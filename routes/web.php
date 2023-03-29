<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfController;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\BorController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;


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

// Route::get('/', function () {
//     return view('welcome');
// });


    Route::controller(SampleController::class)->group(function(){
        Route::get('login', 'index')->name('login');
        Route::get('registration', 'registration')->name('registration');
        Route::get('logout', 'logout')->name('logout');  
        Route::post('validate_registration', 'validate_registration')->name('sample.validate_registration');
        Route::post('validate_login', 'validate_login')->name('sample.validate_login');
        Route::get('welcome', 'welcome')->name('welcome');
    Route::prefix('/home')->group(function(){
        Route::get('/welcome', [HomeController::class, 'Home'])->name('Home');
        Route::get('/getHome' ,[HomeController::class, 'getList']);
        Route::get('/getNhanVien',[HomeController::class, 'getListNhanVien']);
     
    });
    Route::prefix('/thongtin')->group(function () {
        Route::get('/', [InfController::class, 'Infindex'])->name('Infindex');
        Route::get('/getAdd', [InfController::class, 'getAdd'])->name('getAdd');
        Route::get('/getList',[InfController::class, 'getList'])->name('getList');
        Route::post('/postadd', [InfController::class, 'postInf'])->name('postInf');
        Route::get('/getEdit/{id}', [InfController::class, 'editThongTin'])->name('editThongTin');
        Route::post('/getEdit/{id}', [InfController::class, 'postThongTin'])->name('postThongTin');
        Route::get('/getDel/{id}', [InfController::class, 'DelThongTin'])->name('DelThongTin');
    });
    
    Route::prefix('/nhanvien')->group(function () {
        Route::get('/', [EmpController::class, 'Empindex'])->name('Empindex');
        Route::get('/getAddNhanVien', [EmpController::class, 'getAddNhanVien'])->name('getAddNhanVien');
        Route::get('/getListNhanVien', [EmpController::class, 'getListNhanVien'])->name('getListNhanVien');
        Route::post('/postAddNhanVien', [EmpController::class, 'postAddNhanVien'])->name('postAddNhanVien');
        Route::post('/postUpload', [EmpController::class, 'postUpload'])->name('postUpload');
        Route::get('/getEditNhanVien/{id}', [EmpController::class, 'editNhanVien'])->name('editNhanVien');
        Route::post('/getEditNhanVien/{id}', [EmpController::class, 'postNhanVien'])->name('postNhanVien');
        Route::get('/getDelNhanVien/{id}', [EmpController::class, 'DelNhanVien'])->name('DelNhanVien');
    });

    Route::prefix('/muon')->group(function () {
        Route::get('/getListMuon', [BorController::class, 'getListMuon'])->name('getListMuon');
        Route::get('/getListMuonThietBi', [BorController::class, 'getListMuonThietBi'])->name('getListMuonThietBi');
        Route::get('/getAddMuon', [BorController::class, 'getAddMuon'])->name('getAddMuon');
        Route::post('/postAddMuon', [BorController::class, 'postAddMuon'])->name('postAddMuon');
        Route::get('/getEditMuon/{id}', [BorController::class, 'editMuon'])->name('editMuon');
        Route::post('/getEditMuon/{id}', [BorController::class, 'postMuon'])->name('postMuon');
        Route::get('/getDelMuon/{id}', [BorController::class, 'delMuon'])->name('delMuon');
    });

    //Upload

    Route::get('/upload', function(){
        return view('form');
    });
    
    Route::post('/upload', function(Request $request){
        // Kiểm tra xem người dùng có upload file nên không
    if (!$request->hasFile('image')) {
        // Nếu không thì in ra thông báo
        return "Mời chọn file cần upload";
    }
    // Nếu có thì thục hiện lưu trữ file vào public/images
    $image = $request->file('image');
    $storedPath = $image->move('images', $image->getClientOriginalName());

    return "Lưu trữ thành công";
    })->name('upload.handle');
   
});