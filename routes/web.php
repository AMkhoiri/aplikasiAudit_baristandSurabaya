<?php


Route::get('/usrslst', 'fileController@usrslst');

Route::get('/homepage', function () {
    return view('layout.homepage');
});

Route::get('/', 'HomeController@index');

Route::get('/downloadmanual', 'HomeController@downloadmanual')->name('downloadmanual'); 







Auth::routes(); 
//  /registeruser untuk ke form registrasi


// Auth::routes(['register' => false]);
// Illuminate/Routing/Router      mematikan route register >> cari fungsi auth


// Route::get('/', function () {
//     return view('Auth.login');
// });


// Route::get('/', 'HomeController@indexx'); 

Route::get('/back', 'HomeController@indexx')->name('back'); 

Route::get('/changepass', 'HomeController@changepassform')->name('changepassform');
Route::post('/changepass/update', 'HomeController@changepass')->name('changepass');

//  Route::get('/landing-page', function () {
//     return view('landing-page');
//     }
// );

// admin


Route::get('/admin/datapegawai', 'admincontroller@indexpegawai')->name('datapegawai');
Route::get('/admin/datapegawai/create', 'admincontroller@createpegawai')->name('tambahpegawai');
Route::post('admin/datapegawai','adminController@storepegawai')->name('simpanpegawai');
Route::get('admin/datapegawai/{id}/edit','adminController@editpegawai')->name('editpegawai');
Route::put('admin/datapegawai/{id}','adminController@updatepegawai')->name('updatepegawai');
Route::delete('admin/datapegawai/{id}','adminController@destroypegawai')->name('hapuspegawai');


Route::get('/admin/dataauditor', 'admincontroller@indexauditor')->name('dataauditor');
Route::get('/admin/dataauditee', 'admincontroller@indexauditee')->name('dataauditee');
Route::get('/admin/datakepala', 'admincontroller@indexkepala')->name('datakepala');

Route::put('/admin/syncauditor/{id}','adminController@syncauditor')->name('syncauditor') ;
Route::put('/admin/asyncauditor/{id}','adminController@asyncauditor')->name('asyncauditor') ;

Route::put('/admin/syncauditee/{id}','adminController@syncauditee')->name('syncauditee') ;
Route::put('/admin/asyncauditee/{id}','adminController@asyncauditee')->name('asyncauditee') ;

Route::post('/admin/registrasi/form/auditor', 'admincontroller@formregistrasiauditor')->name('formregistrasiauditor');
Route::post('/admin/registrasi/form/auditee', 'admincontroller@formregistrasiauditee')->name('formregistrasiauditee');
Route::post('/admin/registrasi/auditor/add', 'admincontroller@registrasiauditor')->name('registrasiauditor');
Route::post('/admin/registrasi/auditee/add', 'admincontroller@registrasiauditee')->name('registrasiauditee');
Route::post('/admin/datausers/add', 'admincontroller@adduser')->name('adduser');


Route::delete('admin/user1/{id}','adminController@destroyuserauditor')->name('hapususer1');
Route::delete('admin/user2/{id}','adminController@destroyuserauditee')->name('hapususer2');
Route::delete('admin/user3/{id}','adminController@destroyuserkepala')->name('hapususer3');

Route::get('/admin/pengumuman', 'admincontroller@indexpengumuman')->name('pengumuman');
Route::post('admin/pengumuman/store','adminController@storepengumuman')->name('storepengumuman');
Route::put('/admin/pengumuman/{id}','adminController@publishpengumuman')->name('publishpengumuman');
Route::delete('admin/pengumuman/{id}','adminController@destroypengumuman')->name('hapuspengumuman');


Route::get('/admin/pengaturan-audit', 'admincontroller@pengaturanaudit')->name('pengaturanaudit');


Route::get('/admin/konfirmasi-arsip', 'admincontroller@arsipconfirm')->name('arsip-confirm');
Route::get('/admin/arsipkandata', 'admincontroller@arsipkan_data')->name('arsipkandata');
Route::get('/admin/hapususers', 'admincontroller@hapususers')->name('hapususers');
Route::get('/admin/hapuspelaksana', 'admincontroller@hapuspelaksana')->name('hapuspelaksana');
Route::post('/admin/mulaiaudit', 'admincontroller@mulaiaudit')->name('mulaiaudit');
Route::get('/admin/hapusarsip/{id}', 'admincontroller@hapusarsip')->name('hapusarsip');

Route::get('/admin/arsip', 'admincontroller@lihatarsip')->name('arsip');
Route::post('/admin/arsip/data', 'admincontroller@dataarsip')->name('admindataarsip');
Route::get('/admin/arsip/{id}/detail','adminController@detailarsip')->name('admindetailarsip');


Route::get('/admin/dataaudit{id} ', 'admincontroller@dataaudit')->name('dataaudit');
Route::get('/admin/data/{id}/detail','adminController@detaildata')->name('admindetaildata');
Route::get('admin/data/{id}/cetak','adminController@cetak_lks')->name('admincetaklks');


// Route::get('/admin/data/{id}/detail','adminController@detaildata')->name('admindetaildata');



// kepala Balai 


Route::get('/kepala', 'kepalaController@index')->name('kepala');
Route::get('/kepala/auditor', 'kepalaController@auditor')->name('kepalaauditor');
Route::get('/kepala/auditee', 'kepalaController@auditee')->name('kepalaauditee');

Route::post('kepala/auditor/create','kepalaController@storeauditor')->name('storeauditor');
Route::delete('kepala/auditor/{id}','kepalaController@destroyauditor')->name('destroyauditor');

Route::post('kepala/auditee/create','kepalaController@storeauditee')->name('storeauditee');
Route::delete('kepala/auditee/{id}','kepalaController@destroyauditee')->name('destroyauditee');



// auditor

Route::get('/auditor/daftarpertanyaan','AuditorController@index')->name('daftarpertanyaan');
Route::get('/auditor/daftarpertanyaan/tambah','AuditorController@create')->name('tambahpertanyaan');
Route::post('/auditor/daftarpertanyaan','AuditorController@store');
Route::get('/auditor/daftarpertanyaan/{id}/edit','AuditorController@edit')->name('editpertanyaan');
Route::put('/auditor/daftarpertanyaan/{id}','AuditorController@update')->name('updatepertanyaan');
Route::delete('/auditor/daftarpertanyaan/{id}','AuditorController@destroy')->name('hapuspertanyaan');


Route::get('/auditor/daftarlks','AuditorController@indexlks');
Route::get('/auditor/{id}/buatlks','AuditorController@createlks')->name('buatlks');
Route::post('/auditor/daftarlks','AuditorController@storelks');
Route::get('/auditor/daftarlks/{id}/edit','AuditorController@editlks') ->name('editlks') ;
Route::put('/auditor/daftarlks/{id}','AuditorController@updatelks');
Route::delete('/auditor/daftarlks/{id}','AuditorController@destroylks')->name('hapuslks');

Route::put('/auditor/kirimlks/{id}','AuditorController@kirimlks')->name('kirimlks') ;


// Route::get('/auditor/lokasi','AuditorController@indexlokasi');
Route::get('/auditor/lksver','AuditorController@indexlksver')->name('daftartindakan') ;
Route::get('/auditor/verifikasi/{id}','AuditorController@createveri')->name('tindakan') ;
Route::put('/auditor/lksver/{id}','AuditorController@updateveri')->name('updateverifikasi') ;
Route::get('/auditor/file/download/{id}','AuditorController@showfile')->name('downloadfile');

Route::put('/auditor/kembalikantindakan/{id}','AuditorController@kembalitindakan')->name('kembalikantindakan') ;
Route::put('/auditor/verifikasitindakan/{id}','AuditorController@verifikasitindakan')->name('verifikasitindakan') ;

Route::get('/lihat_pdf/{id}','AuditorController@cetak_lks')->name('lihat');
// Route::get('/cetak_pdf/{id}','AuditorController@cetak_pdf')->name('cetak');
Route::post('/auditor/cetakpertanyaan','AuditorController@cetakpertanyaan')->name('cetakpertanyaan');

Route::get('/auditor/arsip','AuditorController@arsip')->name('auditorarsip');
Route::post('/auditor/arsip/data','AuditorController@tampildataarsip')->name('auditordataarsip');
Route::get('/auditor/arsip/{id}/detail','AuditorController@detailarsip')->name('auditordetailarsip');



// Auditee 

Route::get('/auditee/lks-tindakan','AuditeeController@indexlks_tindakan')->name('lksauditee');

Route::get('/auditee/daftartindakan','AuditeeController@indextindakan')->name("tindakanauditee");
Route::get('/auditee/tambahtindakan/{id}/buattindak','AuditeeController@createtindakan')->name('buattindakan');
Route::post('/auditee/daftartindakan','AuditeeController@storetindakan');
Route::get('/auditee/daftartindakan/{id_tindakan}/edit','AuditeeController@edittindakan')->name('edittindakan');
Route::put('/auditee/daftartindakan/{id_tindakan}','AuditeeController@updatetindakan')->name('updatetindakan');
Route::delete('auditee/daftartindakan/{id}','AuditeeController@destroytindakan')->name('hapustindakan');

Route::put('/auditee/tindakan/file/{id}','AuditeeController@tindakanfile')->name('uploadbukti');
Route::delete('/auditee/file/{id}','AuditeeController@destroyfile')->name('deletefile');

Route::put('/auditee/kirimtindakan/{id}','AuditeeController@kirimtindakan')->name('kirimtindakan');

Route::get('/auditee/arsip','AuditeeController@arsip')->name('auditeearsip');
Route::post('/auditee/arsip/data','AuditeeController@tampildataarsip')->name('auditeedataarsip');
Route::get('/auditee/arsip/{id}/detail','AuditeeController@detailarsip')->name('auditeedetailarsip');




Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home2', 'HomeController@index2')->name('home2');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
