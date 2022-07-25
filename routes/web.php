<?php

use Illuminate\Support\Facades\Route;
/////////// ADMIN /////////////
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UiController;
use App\Http\Controllers\PengelolaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TolakController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ValidasiController;
use App\Http\Controllers\MerekController;
use App\Http\Controllers\AdminHakCipta\PengalihanController;
use App\Http\Controllers\AdminHakCipta\PermohonanController;
use App\Http\Controllers\AdminHakCipta\PernyataanController;
use App\Http\Controllers\AdminPaten\PenyerahanController;
use App\Http\Controllers\AdminPaten\KepemilikanController;
use App\Http\Controllers\AdminController\AdminProfilController;
use App\Http\Controllers\AdminController\AdminSertifikatController;
use App\Http\Controllers\AdminController\AdminPegawaiController;
use App\Http\Controllers\AdminController\AdminBerandaController;
use App\Http\Controllers\AdminController\AdminPengajuanController;
use App\Http\Controllers\AdminController\AdminMerekController;



/////////// DOSEN /////////////
use App\Http\Controllers\DosenController;
use App\Http\Controllers\HakciptaController;
use App\Http\Controllers\HakCipta\PengalihanHakciptaController;
use App\Http\Controllers\HakCipta\PermohonanHakCiptaController;
use App\Http\Controllers\HakCipta\PernyataanHakciptaController;
use App\Http\Controllers\HakPaten\PenyerahanHakController;
use App\Http\Controllers\HakPaten\PernyataanKepemilikanController;
use App\Http\Controllers\PegawaiController\PegawaipengajuanController;
use App\Http\Controllers\PegawaiController\PegawaiMerekController;

/////////// DIREKTUR /////////////
use App\Http\Controllers\DirekturController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DirekturController\DirekturpegawaiController;
use App\Http\Controllers\DirekturController\DirekturmerekController;
use App\Http\Controllers\DirekturhakCipta\DirekturpermohonanController;
use App\Http\Controllers\DirekturhakCipta\DirekturpernyataanController;
use App\Http\Controllers\DirekturhakCipta\DirekturpengalihanController;
use App\Http\Controllers\DirekturPaten\DirekturkepemilikanController;
use App\Http\Controllers\DirekturPaten\DirekturpenyerahanController;


use Illuminate\Routing\RouteGroup;



			///////////  BERANDA /////////////
Route::get('/', [UiController::class, 'index'])->name('/');
Route::resource('beranda', UiController::class);


			///////////  AUTH /////////////
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('postlogin', [AuthController::class, 'postlogin'])->name('postlogin');
Route::post('postuser', [AuthController::class, 'postuser'])->name('postuser');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::get('register_admin', [AuthController::class, 'register_admin'])->name('register_admin');

            ///////////// FORGET /////////////
Route::get('forgot', [AuthController::class, 'forgot']);
Route::post('forgot', [AuthController::class, 'forgotAct']);
Route::get('updatePassword', [AuthController::class, 'updatePassword']);
Route::post('updatePassword/{user}', [AuthController::class, 'updatePasswordAct']);


/////////////  MIDDLEWARE /////////////
			///////////// ADMIN /////////////
Route::group(['middleware' => ['auth','checkRole:admin']],function(){
	Route::get('/home', [AdminBerandaController::class, 'index'])->name('home');


///  DATA CATEGORY ///
Route::resource('/category', CategoryController::class);
Route::post('category.store', [CategoryController::class, 'store'])->name('category.store');

///  DATA PENGAJUAN ADMIN  ///
Route::get('admin/pengajuan', [AdminPengajuanController::class, 'index']);
Route::get('pengajuan/add', [AdminPengajuanController::class, 'add']);
Route::post('pengajuan/add', [AdminPengajuanController::class, 'addAct']);
Route::post('pengajuan/verfikasi', [AdminPengajuanController::class, 'verfikasi']);
Route::get('pengajuan/{pengajuan}', [AdminPengajuanController::class, 'show']);
Route::post('pengajuan/perifikasi/{pengajuan}', [AdminPengajuanController::class, 'verifikasi']);
Route::post('pengajuan/delete/{pengajuan}', [AdminPengajuanController::class, 'delete']);
Route::post('pengajuan/sertifikat', [AdminPengajuanController::class, 'upload']);


///  DATA PENGELOLA ADMIN///
Route::resource('pengelola', PengelolaController::class);
Route::resource('user', UserController::class);

///  SERTIFIKAT DAN PROFILE ADMIN ///
Route::get('sertifikat', [AdminSertifikatController::class, 'index']);
Route::get('admin/profil', [AdminProfilController::class, 'index']);
Route::post('admin/profil', [AdminProfilController::class, 'update']);

///  DATA PEGAWAI ADMIN ///
Route::get('admin/pegawai', [AdminPegawaiController::class, 'index']);
Route::get('pegawai/create', [AdminPegawaiController::class, 'create']);
Route::post('pegawai/create', [AdminPegawaiController::class, 'add']);
Route::get('pegawai-detail/{SimaduPegawai}', [AdminPegawaiController::class, 'show']);
Route::get('pegawai-update/{SimaduPegawai}', [AdminPegawaiController::class, 'update']);
Route::post('pegawai-update/{SimaduPegawai}', [AdminPegawaiController::class, 'updateAct']);
Route::post('pegawai/delete/{SimaduPegawai}', [AdminPegawaiController::class, 'delete']);


/// DATA MEREK ADMIN ///
Route::get('admin/merek', [AdminMerekController::class, 'index']);
Route::get('admin-merek/add', [AdminMerekController::class, 'add']);
Route::post('admin-merek/add', [AdminMerekController::class, 'addAct']);
Route::get('admin-merek-detail/{merek}', [AdminMerekController::class, 'show']);
Route::post('admin-merek/{merek}', [AdminMerekController::class, 'delete']);

/// PENDAFTARAN CIPTAAN ADMIN ///
Route::get('admin-cipta/pendaftaran-ciptaan',[PermohonanController::class, 'index']);
Route::get('pendaftaran-ciptaan/create',[PermohonanController::class, 'create']);
Route::post('admin-cipta/pendaftaran-ciptaan',[PermohonanController::class, 'store']);
Route::get('pendaftaran-ciptaan/{hakcipta}',[PermohonanController::class, 'show']);

Route::get('admin-cipta/pengalihan-hak-cipta',[PengalihanController::class, 'index']);
Route::get('pengalihan-hak-cipta/create',[PengalihanController::class, 'create']);
Route::post('admin-cipta/pengalihan-hak-cipta',[PengalihanController::class, 'store']);
Route::get('pengalihan-hak-cipta/{pengalihan}',[PengalihanController::class, 'show']);

Route::get('admin-cipta/pernyataan-hak-cipta',[PernyataanController::class, 'index']);
Route::get('pernyataan-hak-cipta/create',[PernyataanController::class, 'create']);
Route::post('admin-cipta/pernyataan-hak-cipta',[PernyataanController::class, 'store']);
Route::get('pernyataan-hak-cipta/{pernyataan}',[PernyataanController::class, 'show']);

/// PENDAFTARAN PATEN ADMIN ///
Route::get('admin-paten/penyerahan-hak', [PenyerahanController::class, 'index']);
Route::get('penyerahan-hak/create', [PenyerahanController::class, 'create']);
Route::post('admin-paten/penyerahan-hak', [PenyerahanController::class, 'store']);
Route::get('penyerahan-hak/{paten}', [PenyerahanController::class, 'show']);

Route::get('admin-paten/pernyataan-kepemilikan', [KepemilikanController::class, 'index']);
Route::get('pernyataan-kepemilikan/create', [KepemilikanController::class, 'create']);
Route::post('admin-paten/pernyataan-kepemilikan', [KepemilikanController::class, 'store']);
Route::get('pernyataan-kepemilikan/{pemilik}', [KepemilikanController::class, 'show']);


});




			//////////// DOSEN ////////////
Route::group(['middleware' => ['auth','checkRole:admin,user']],function(){
	Route::get('dosen', [UiController::class, 'homedosen'])->name('homedosen');


///  HAK CIPTA ///
Route::resource('dosen/hakcipta', HakciptaController::class);
Route::get('anggota/{anggota}', [HakciptaController::class, 'anggota'])->name('anggota');
Route::get('detail_anggota/{detail_anggota}', [HakciptaController::class, 'detail_anggota'])->name('detail_anggota');
Route::post('anggota_save', [HakciptaController::class, 'anggota_save'])->name('anggota_save');

///  DATA PENGELOLA ///
Route::resource('dosen/kepengurusan', DosenController::class);

///  DATA PENGAJUAN ///
Route::get('pengajuan/pegawai', [PegawaipengajuanController::class, 'index']);
Route::get('pengajuan-pegawai/add', [PegawaipengajuanController::class, 'add']);
Route::post('pengajuan-pegawai/add', [PegawaipengajuanController::class, 'addAct']);
Route::get('pengajuan-detail-pengajuan/{SimaduPegawai}', [PegawaipengajuanController::class, 'show']);

///  DATA MEREK ///
Route::get('pegawai/merek', [PegawaiMerekController::class, 'index']);
Route::get('pegawai-merek/add', [PegawaiMerekController::class, 'add']);
Route::post('pegawai-merek/add', [PegawaiMerekController::class, 'addAct']);
Route::get('pegawai-merek-detail/{merek}', [PegawaiMerekController::class, 'show']);

///  PROFIL DAN SERTFIKAT ///
Route::get('profil', [PegawaiProfilController::class, 'index']);
Route::post('profil/{SimaduPegawai}', [PegawaiProfilController::class, 'updateAct']);
Route::get('pegawai/sertifikat', [PegawaiSertifikatController::class, 'index']);

///  DATA HAK CIPTA ///
Route::get('hak-cipta/pendaftaran-ciptaan',[PermohonanHakCiptaController::class, 'index']);
Route::get('pendaftaran-ciptaan/create',[PermohonanHakCiptaController::class, 'create']);
Route::post('hak-cipta/pendaftaran-ciptaan',[PermohonanHakCiptaController::class, 'store']);
Route::get('pendaftaran-ciptaan/{hakcipta}',[PermohonanHakCiptaController::class, 'show']);

Route::get('hak-cipta/pengalihan-hak-cipta',[PengalihanHakciptaController::class, 'index']);
Route::get('pengalihan-hak-cipta/create',[PengalihanHakciptaController::class, 'create']);
Route::post('hak-cipta/pengalihan-hak-cipta',[PengalihanHakciptaController::class, 'store']);
Route::get('pengalihan-hak-cipta/{pengalihan}',[PengalihanHakciptaController::class, 'show']);

Route::get('hak-cipta/pernyataan-hak-cipta',[PernyataanHakciptaController::class, 'index']);
Route::get('pernyataan-hak-cipta/create',[PernyataanHakciptaController::class, 'create']);
Route::post('hak-cipta/pernyataan-hak-cipta',[PernyataanHakciptaController::class, 'store']);
Route::get('pernyataan-hak-cipta/{pernyataan}',[PernyataanHakciptaController::class, 'show']);

///  DATA HAK PATEN ///
Route::get('hak-paten/penyerahan-hak', [PenyerahanHakController::class, 'index']);
Route::get('penyerahan-hak/create', [PenyerahanHakController::class, 'create']);
Route::post('hak-paten/penyerahan-hak', [PenyerahanHakController::class, 'store']);
Route::get('penyerahan-hak/{paten}', [PenyerahanHakController::class, 'show']);

Route::get('hak-paten/pernyataan-kepemilikan', [PernyataanKepemilikanController::class, 'index']);
Route::get('pernyataan-kepemilikan/create', [PernyataanKepemilikanController::class, 'create']);
Route::post('hak-paten/pernyataan-kepemilikan', [PernyataanKepemilikanController::class, 'store']);
Route::get('pernyataan-kepemilikan/{pemilik}', [PernyataanKepemilikanController::class, 'show']);



});




			/////////// DIREKTUR /////////////
Route::group(['middleware' => ['auth','checkRole:admin,direktur']],function(){
	Route::get('direktur', [UiController::class, 'direktur'])->name('direktur');

///  DATA PENGELOLA DIREKTUR///
Route::resource('direktur/pengurus', DirekturController::class);

///  DATA PEGAWAI DIREKTUR ///
Route::get('direktur/pegawai', [DirekturpegawaiController::class, 'index']);
Route::get('direktur-pegawai-detail/{SimaduPegawai}', [DirekturpegawaiController::class, 'show']);
Route::resource('direktur/pengurus', DirekturController::class);

/// PENDAFTARAN CIPTAAN DIREKTUR ///
Route::get('direktur-permohonan',[DirekturpermohonanController::class, 'index']);
Route::get('direktur-permohonan/{hakcipta}',[DirekturpermohonanController::class, 'show']);

Route::get('direktur-pengalihan/hak-cipta',[DirekturpengalihanController::class, 'index']);
Route::get('direktur-pengalihan-hak/{pengalihan}',[DirekturpengalihanController::class, 'show']);

Route::get('direktur-pernyataan/hak-cipta',[DirekturpernyataanController::class, 'index']);
Route::get('direktur-pernyataan-hak/{pernyataan}',[DirekturpernyataanController::class, 'show']);

/// PENDAFTARAN PATEN DIREKTUR ///
Route::get('direktur-paten/penyerahan-hak', [DirekturpenyerahanController::class, 'index']);
Route::get('direktur-penyerahan-hak/{paten}', [DirekturpenyerahanController::class, 'show']);

Route::get('direktur-paten/pernyataan-kepemilikan', [DirekturkepemilikanController::class, 'index']);
Route::get('direktur-pernyataan-kepemilikan/{pemilik}', [DirekturkepemilikanController::class, 'show']);

///  DATA MEREK DIREKTUR///
Route::get('direktur/merek', [DirekturmerekController::class, 'index']);
Route::get('direktur-merek/add', [DirekturmerekController::class, 'add']);
Route::post('direktur-merek/add', [DirekturmerekController::class, 'addAct']);
Route::get('direktur-merek-detail/{merek}', [DirekturmerekController::class, 'show']);


});

