<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\PasienController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\NotificationController; //notif

use App\Http\Controllers\ProductAjaxController;
use App\Http\Controllers\ImportData\DariExcelController;

use App\Http\Controllers\Pasienc\PasiencController;
use App\Http\Controllers\Pasienp\PasienpController;

use App\Http\Controllers\Dokter\DokterController;
use App\Http\Controllers\Apotik\ApotikController;
use App\Http\Controllers\Laboratorium\LabController;

use App\Http\Controllers\Manejemen\ManejemenController;
use App\Http\Controllers\Support\SupportController;
use App\Http\Controllers\Validator\ValidatorController;

use App\Http\Controllers\Admins\AdminsController;
use App\Http\Controllers\Administrator\AdministratorController;
use App\Http\Controllers\Person\PersonController;

use App\Http\Controllers\BacaAlatController;
use App\Http\Controllers\CobaInputController;

//dokter
use App\Http\Controllers\Dokter\diagnosaDokterController;

//keluhan
use App\Http\Controllers\keluhanPasienController;

// use App\Http\Controllers\registerDokter;
 use App\Http\Controllers\HalamanController;

// upload
use App\Http\Controllers\FileController;


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

// Route::get('register/dokter',[registerDokter::class, 'index'])->name('register.dokter');


Route::get('bacaIP',[BacaAlatController::class,'index']);
Route::get('kode',[BacaAlatController::class,'kode']);

Route::resource('coba', CobaInputController::class);
Route::get('pdf', [CobaInputController::class,'cetak_pdf']);
Route::get('pdf1', [CobaInputController::class,'render_pdf']);
Route::get('qr', [CobaInputController::class,'simpleQr']);
Route::get('ttd', [CobaInputController::class,'ttd']);
Route::post('qr', [CobaInputController::class,'upload'])->name('signaturepad.upload');
Route::get('pdf_dom',[CobaInputController::class,'pdf_dom']);

Route::get('kueri', [CobaInputController::class,'kueri']);
Route::get('formulir', [CobaInputController::class,'formulir']);


Route::get('halaman3d',[PasienpController::class,'visual'])->name('visual');
// Route::get('HalamanAdmin',[AdminsController::class,'adminPage'])->name('validator_admin');
// Route::get('/HalamanAdminstrator',[AdministratorController::class,'administratorPage'])->name('validator_administrator');
Route::get('changeStatusAdmin', [AdminsController::class, 'changeStatus']);
Route::get('changeStatusAdministrator', [AdministratorController::class, 'changeStatus']);




Route::resource('ajaxproducts',ProductAjaxController::class,[
        'only' => ['index', 'create', 'store', 'show', 'update','edit']
    ]);


// Route::resource('admins', AdminsController::class,[
//     'only' => ['index', 'create', 'store']
// ]);

Route::resource('person', PersonController::class);
// Route::resource('pasienp', PasienpController::class);
// Route::resource('pasienc', PasiencController::class);

// Route::resource('dokters', DokterController::class);
// Route::resource('apotiks', ApotikController::class);
// Route::resource('labs', LabController::class);

// Route::resource('manajemens', ManejemenController::class);
// Route::resource('supports', SupportController::class);
// Route::resource('validators', ValidatorController::class);

Route::controller(DariExcelController::class)->group(function(){
    Route::get('importDataFasten', 'index');
    Route::post('fasten-import', 'importFasten')->name('fasten.import');
    Route::post('obat-import', 'importObat')->name('obat.import');
});

    //  Route::get('home', [HomeController::class, 'index'])->name('home');


Route::get('/send-notification', [NotificationController::class, 'sendOrderNotification']); //notif
Route::post('/baca-notification', [NotificationController::class, 'baca']); //notif
// Route::post('/mark-as-read', 'HomeController@markNotification')->name('markNotification');



Route::get('baca', [HomeController::class,'baca']);
Route::get('pas', [PasienController::class,'index']);

Route::get('/admin', [AdminController::class,'index'])->name('admin');

// Route::get('/', function () {
//     // return view('auth.login');
    

// });


//guest
Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/tentang-kami', [HomeController::class,'tentangkami'])->name('tentang');
// Route::get('/obat', [HomeController::class,'obat'])->name('obat');


Route::get('/obat', function () {
    return view('halaman_depan.obat');
})->name('obat');

Route::get('/search-with-pagination', function () {
    return view('livewire.home');
});

Route::get('/dokter', [HomeController::class,'fasilitasMedis'])->name('dokter');
Route::get('/blank', [HomeController::class,'blank'])->name('blank');
Route::get('/chat', [HomeController::class,'chat'])->name('chat');
Route::get('/rs', [HomeController::class,'dtRS'])->name('dtRS');

Route::get('/formulir', [HomeController::class,'formulir'])->name('formulir');
Route::get('/payment', [HomeController::class,'payment'])->name('payment');
Route::get('/epay', [HomeController::class,'epay'])->name('epay');
Route::get('/selesai', [HomeController::class,'selesai'])->name('selesai');

// Route::get('/profil_depan', [HomeController::class,'profil'])->name('profil');
Route::get('/detail_profil', [HomeController::class,'detail_profil'])->name('detail_profil');


Route::get('/apichat', [HalamanController::class,'ApiChat'])->name('apichat');

//file upload localhost/file
Route::get('file',[FileController::class,'index']);
Route::post('store-file', [FileController::class,'store']);


Route::get('/rest', [HomeController::class,'rest'])->name('rest');


// Route::get('/', function () {
//     return view('auth.login');
// });




Auth::routes();

// pasienParent
Route::middleware(['auth', 'user-access:pasienParent'])->group(function () {
    Route::get('home', function () {
            Auth::logout();
        return view('auth.login');
    });
    //lengkapi profil
    // Route::get('/profil', [PersonController::class,'index'])->name('profile_user');


    Route::get('/profil',[HalamanController::class, 'index'])->name('profile_user');
    Route::get('/pasienP/home',[HalamanController::class, 'index'])->name('pasienP.home');
    Route::get('/riwayat', [HalamanController::class,'riwayat'])->name('riwayat');
    Route::get('/beranda', [HalamanController::class,'beranda'])->name('beranda');
    Route::get('/buat_keluhan', [HalamanController::class,'keluhan'])->name('buat_keluhan');
    Route::get('/visual', [HalamanController::class,'visual'])->name('visual');
    Route::get('/restitusi', [HalamanController::class,'restitusi'])->name('restitusi');

    Route::get('/profil_depan', [HalamanController::class,'profil'])->name('profil');


    // Route::get('/pasienP/home',[HomeController::class, 'pasienParentHome'])->name('pasienP.home');
    Route::get('/pasienP/home/user',[HomeController::class, 'pasienParentHomeUser'])->name('pasienP.home.user');
   
    //riwayat
    Route::get('/pasien/keluhan',[PasienpController::class,'tambahKeluhan'])->name('pasien.keluhan');
    Route::get('/riwayat/manfaat',[PasienpController::class,'tambahKeluhan'])->name('riwayat.manfaat');
    Route::get('/riwayat/diagnosa',[PasienpController::class,'tambahDiagnosa'])->name('riwayat.diagnosa');//lihat diagnosa
    Route::get('/riwayat/apotik',[PasienpController::class,'tambahApotik'])->name('riwayat.apotik');//lihat resep
    Route::get('/riwayat/tagihan',[PasienpController::class,'tambahTagihan'])->name('riwayat.tagihan');//pilih pengirman dan terima obat
    //turunan
    Route::get('/turunan/tambah',[PasienpController::class,'tambahParent'])->name('turunan.tambah');
    Route::get('/turunan/daftar',[PasienpController::class,'dataParent'])->name('turunan.daftar');
    
    Route::post('pasienp',[PasienpController::class],'store')->name('pasienp.store');
    // Route::resource('diagnosa',diagnosaDokterController::class);
    Route::post('keluhan/pasien', [keluhanPasienController::class,'store'])->name('formulir_data');
    Route::put('/update-profil/{id}', [PersonController::class,'update'])->name('person.update');
    //map
    Route::get('leaflect',[PasienpController::class,'peta']);
    //upload resep
    Route::post('image-upload',   [PasienpController::class,'uploadResep'])->name('gambar.store');
    //laporan_pdf
    Route::get('laporan/pasien',  [PasienpController::class,'lapPasien'])->name('lap.pasien');
    //billing
    Route::get('invoice/dokter',[PasienpController::class,'billObat'])->name('billing');
    // Route::get('invoice/dokter',[DokterController::class,'cetakInvoice'])->name('billing');
    //qr
    Route::get('keluhan/qrcode',  [PasienpController::class,'simpleQr'])->name('keluhan.qrcode');
});

Route::middleware(['auth', 'user-access:pasienChild'])->group(function () {
    Route::get('/pasienC/home', [HomeController::class, 'pasienChildHome'])->name('pasienC.home');
    Route::get('/turunan/manfaat', [PasiencController::class,'pasChildManfaat'])->name('turunan.riwayat.manfaat');
    Route::get('/turunan/diagnosa', [PasiencController::class,'pasChildDiagnosa'])->name('turunan.riwayat.diagnosa');
    Route::get('/turunan/apotik', [PasiencController::class,'pasChildApotik'])->name('turunan.riwayat.apotik');

    Route::resource('pasien',PasiencController::class);
    Route::resource('keluhan',keluhanPasienController::class);

});

Route::middleware(['auth_fasten', 'user-access:klinik'])->group(function () {
    Route::get('/klinik/home', [HomeController::class, 'klinikHome'])->name('klinik.home');
});

Route::middleware(['auth_fasten', 'user-access:dokter'])->group(function () {
    Route::get('/dokter/home', [HomeController::class, 'dokterHome'])->name('dokter.home');
    Route::get('/daftar', [DokterController::class,'daftarPas'])->name('dokter.daftar.pasien');

    Route::get('/daftarobt', [DokterController::class,'daftar_obt'])->name('daftar_obt');
    Route::get('/lapdok', [DokterController::class,'lap_diok'])->name('lap_diok');

    // Route::post('/diagnosa',[DokterController::class,'store'])->name('diagnosa.store');
    // Route::get('profil',[PersonController::class,'index'])->name('profile_user');
    Route::post('dokter/update_diagnosa', [DokterController::class,'update'])->name('dokter.diagnosa');
    Route::post('/dokter/home',[DokterController::class,'addMorePost'])->name('addmorePost');
});

Route::middleware(['auth_fasten', 'user-access:apotik'])->group(function () {
    // Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/apotik/home', [HomeController::class, 'apotikHome'])->name('apotik.home');
    
    Route::get('apotik/getobt',[ApotikController::class,'getObt'])->name('apotik.home.obt');

    Route::post('/apotik/home',[ApotikController::class,'tambahObat'])->name('apotikobat');
    
    
    Route::get('apt/rsp', [ApotikController::class,'resRsp'])->name('resRsp');
    Route::get('apt/krm', [ApotikController::class,'krm'])->name('krm');
    Route::get('apt/lap', [ApotikController::class,'lap'])->name('lap');
});

Route::middleware(['auth_fasten', 'user-access:lab'])->group(function () {
    Route::get('/lab/home', [HomeController::class, 'labHome'])->name('lab.home');
    Route::get('daftar_lab', [LabController::class,'daftar_lab'])->name('daflab');
});

Route::middleware(['auth_fasten', 'user-access:support'])->group(function () {
    Route::get('/support/home', [HomeController::class, 'supportHome'])->name('support.home');
    Route::get('getList', [SupportController::class,'getList'])->name('getList');
});

Route::middleware(['auth_fasten', 'user-access:manejemen'])->group(function () {
    Route::get('/manej/home', [HomeController::class, 'manejHome'])->name('manej.home');
});

Route::middleware(['auth_fasten', 'user-access:validator'])->group(function () {
    // Route::get('/validator/home', [HomeController::class, 'validatorHome'])->name('validator.home');
    Route::get('/validator/home', [HomeController::class, 'validatorHome'])->name('validator.home');
    Route::get('/validator/penguna_baru', [ValidatorController::class, 'validatorPage'])->name('validator.validatorPage');

    //restar pc 
    Route::get('changeStatus', [ValidatorController::class, 'changeStatus']);
    Route::get('changeStatusProfil', [ValidatorController::class, 'changeStatusProfil']);

    Route::get('validasi',[ValidatorController::class,'show']);
    

});



Route::middleware(['auth_fasten', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::resource('admins', AdminsController::class,[
 'only' => ['index', 'create', 'store']
    ]);
    Route::get('/HalamanAdmin',[AdminsController::class,'adminPage'])->name('validator_admin');
    Route::resource('manajemens', ManejemenController::class);

});



Route::middleware(['auth_fasten', 'user-access:administrator'])->group(function () {
    Route::get('/administrator/home', [HomeController::class, 'administratorHome'])->name('administrator.home');
    Route::get('/HalamanAdministrator',[AdministratorController::class,'administratorPage'])->name('validator_administrator');

});

