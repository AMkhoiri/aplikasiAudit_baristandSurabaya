<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

Use Exception;
use DB;
// use Route;
use\App\pegawai;
use\App\auditor;
use\App\auditee;
use\App\User;
use\App\pengumuman;
use App\Pertanyaan;
use App\LKS;
use App\tindakan;

use\App\catatan;
use\App\arsip_catatan;
use\App\arsip_tindakan;
use\App\arsip_lks;
use\App\arsip_pertanyaan;
use\App\periode;

 
use Auth;
use Alert;

class admincontroller extends Controller
{
   
    protected $user;
    public function __construct()
    {

        $this->middleware('auth');

        $this->middleware(function ($request, $next) 
        {
            $this->user = Auth::user()->akses;

          if($this->user =='ADMIN') 
                {
                    return $next($request);
                }

          else   {
                     return response()->view('errors.404');
                 }    

                 if($this->user =='AUDITOR') 
                {
                    return response()->view('errors.404');
                }

                 if($this->user =='AUDITEE') 
                {
                    return response()->view('errors.404');
               
                }

                 if($this->user =='KEPALA') 
                {
                    return response()->view('errors.404');         
                }
                
        });

    }

    public function home()
    {
        return view('beranda');
    }

    // Pegawai

    public function indexpegawai()
    {
         $pegawai= pegawai::all();
         $totalDataPegawai = count($pegawai);

         // $routename=Route::currentRouteName();

         // dd ($routename);
      
        // dd($kontens);
        return view ('admin/datapegawai' , ['pegawai'=> $pegawai, 'totaldata'=> $totalDataPegawai]);
    }

    public function createpegawai()
    {
        return view ('/admin/tambahpegawai');
    }

   
    public function storepegawai(Request $request)
    {
        $messages = [
            'unique' => 'NIP yang anda masukkan telah terdata!'
    ];

         $validatedData = $request->validate([
                    'nip' => 'unique:pegawai,nip',
                                      
    ],$messages);

         if ($request->jabatan =="Kepala Seksi") 
         {  
           $sie=$request->sie;
           $kepala=pegawai::where("sie",$sie)->where('jabatan','Kepala Seksi') ->first();

           if ($kepala != null) {
             Alert::info('Kepala Seksi Sudah Tersedia', 'Gagal Menyimpan Data')->autoclose(2800);
            return redirect ('admin/datapegawai');
           }
           
              $pegawai = new pegawai;
              $pegawai->nama = $request->nama;
              // $pegawai->jenis_kelamin = $request->jk;
              $pegawai->nip = $request->nip;
              $pegawai->jabatan = $request->jabatan;
              // $pegawai->email = $request->email;
              $pegawai->sie = $request->sie;    
              $pegawai -> save();
         }
         else {

        
              $pegawai = new pegawai;
              $pegawai->nama = $request->nama;
              // $pegawai->jenis_kelamin = $request->jk;
              $pegawai->nip = $request->nip;
              $pegawai->jabatan = $request->jabatan;
              // $pegawai->email = $request->email;
              $pegawai->sie = $request->sie;    
              $pegawai -> save();

         }

         Alert::info('Berhasil Menyimpan Data ', ' ')->autoclose(2500);
        return redirect ('admin/datapegawai');
    }

   
    public function editpegawai($id)
    {
       $pegawai = pegawai::find($id);
       return $pegawai;
        // return view ('admin/editpegawai', ['pegawai' => $pegawai]);
    }

   
    public function updatepegawai(Request $request, $id)
    {

         if ($request->jabatan =="Kepala Seksi") 
         {  
           $sie=$request->sie;
           $kepala=pegawai::where("sie",$sie)->where('jabatan','Kepala Seksi') ->first();

           if ($kepala != null) {
             Alert::info('Kepala Seksi Sudah Tersedia', 'Gagal Mengubah Data')->autoclose(2800);
            return redirect ('admin/datapegawai');
           }
           
             $pegawai=pegawai::find($id);
              $pegawai->nama = $request->nama;
              $pegawai->nip = $request->nip;
              $pegawai->jabatan = $request->jabatan;
              $pegawai->sie = $request->sie;    
              $pegawai -> save();
         }
         else {

        
             $pegawai=pegawai::find($id);
              $pegawai->nama = $request->nama;
              $pegawai->nip = $request->nip;
              $pegawai->jabatan = $request->jabatan;
              $pegawai->sie = $request->sie;    
              $pegawai -> save();

         }

         Alert::info('Berhasil Mengubah Data ', ' ')->autoclose(2500);
        // return redirect ('admin/datapegawai');
         return $pegawai;
    }

   
    public function destroypegawai($id)
    {
        $pegawai = pegawai::find($id);
        $pegawai->delete();

         Alert::info('Berhasil Menghapus Data ', ' ')->autoclose(2500);
        return redirect ('admin/datapegawai');
    }


    // Auditor
     public function indexauditor()
    {        

          $auditor = DB::table( 'users')
                    ->rightjoin ('auditor' , 'users.id_auditor', '=' , 'auditor.id')
                    ->select('users.*', 'auditor.nama','auditor.lokasi_audit','auditor.id AS id_auditor')->orderBy('lokasi_audit')
                    ->get();

          return view ('admin/dataauditor' , ['auditor'=> $auditor]);      
    }


// Auditee
     public function indexauditee()
    {

          $auditee = DB::table( 'users')
                    ->rightjoin ('auditee' , 'users.id_auditee', '=' , 'auditee.id')
                    ->select('users.*', 'auditee.nama','auditee.lokasi_auditee','auditee.id AS id_auditee')->orderBy('lokasi_auditee')
                    ->get();

          return view ('admin/dataauditee' , ['auditee'=> $auditee]);
    }


     public function indexkepala()     
    {
        
         $kepala=user::where('akses','KEPALA')->orWhere('akses','ADMIN') ->get() ;
        
        return view ('admin/datakepala' , ['kepala'=> $kepala]);
    }





     public function syncauditor(Request $request, $id)
    {        
             $user=user::find($id);
                $user->lokasi = $request->lokasi;
             $user -> save();
         
              Alert::info('Data User Berhasil Disinkronkan', 'Akun Telah Aktif ')->autoclose(3500);
          return redirect ('admin/dataauditor');      
    }

     public function asyncauditor($id)
    {        
             $user=user::find($id);
                $user->lokasi =NULL;
             $user -> save();
         
              Alert::info('User Tidak Bisa Melakukan Aksi', ' Akun Di-Nonaktifkan')->autoclose(3500);
          return redirect ('admin/dataauditor');      
    }


     public function syncauditee(Request $request, $id)
    {
             $user=user::find($id);
                $user->lokasi = $request->lokasi;
             $user -> save();
          
             Alert::info('Data User Berhasil Disinkronkan', 'Akun Telah Aktif ')->autoclose(3500);
          return redirect ('admin/dataauditee');
    }

    public function asyncauditee($id)
    {        
             $user=user::find($id);
                $user->lokasi =NULL;
             $user -> save();
         
              Alert::info('User Tidak Bisa Melakukan Aksi', ' Akun Di-Nonaktifkan')->autoclose(3500);
          return redirect ('admin/dataauditee');      
    }

     public function destroyuserauditor($id)
    {
        $user = user::find($id);
        $user->delete();

         Alert::info('Anda Bisa Me-Registrasi Ulang', ' User Berhasil Dihapus ')->autoclose(2500);
        return redirect ('admin/dataauditor');
    }

     public function destroyuserauditee($id)
    {
        $user = user::find($id);
        $user->delete();

        Alert::info('Anda Bisa Me-Registrasi Ulang', ' User Berhasil Dihapus ')->autoclose(2500);
        return redirect ('admin/dataauditee');
    }

      public function destroyuserkepala($id)
    {
        $user = user::find($id);
        $user->delete();

        Alert::info('  User Berhasil Dihapus ', ' ')->autoclose(2500);
        return redirect ('admin/datakepala');
    }


// pengumuman

 public function indexpengumuman()     
    {
        
         $pengumuman= pengumuman::all();
        
        return view ('admin/pengumuman' , ['pengumuman'=> $pengumuman]);
    }

     public function storepengumuman(Request $request)
    {
             
          $pengumuman = new pengumuman;
        $pengumuman->pengumuman = $request->pengumuman;  
        $pengumuman -> save();

        Alert::info('Berhasil Menyimpan Isi pengumuman', ' ')->autoclose(2500);
        return redirect ('admin/pengumuman');
    }

     public function destroypengumuman($id)
    {
        $pengumuman = pengumuman::find($id);
        $pengumuman->delete();

        Alert::info('Berhasil Menghapus  Pengumuman', ' ')->autoclose(2500);
        return redirect ('admin/pengumuman');
    }


     public function publishpengumuman(Request $request, $id)
    {
             $pengumuman=pengumuman::find($id);
                $pengumuman->status = $request->pengumuman;
             $pengumuman -> save();
          
          Alert::success('Pengumuman Sekarang Tampil Di Halaman Awal', 'Berhasil Di-Publish')->autoclose(3000);
          return redirect ('admin/pengumuman');
    }



    public function formregistrasiauditor(Request $request)
    {
      $id_auditor=$request->id_auditor;
      $id_auditee="";
      $nama_auditor=$request->nama;
      $akses=$request->akses;
      return view ('admin/registrasiauditor', ['id_auditor'=> $id_auditor, 'nama_auditor'=> $nama_auditor, 'akses'=> $akses,'id_auditee'=> $id_auditee]);
    }

    public function registrasiauditor(Request $request)
    {

      $cek_username=user::where('username',$request->username)->first();
      // return $cek_username;
      if (empty($cek_username))
      {

      $user = new user;
      $user->name=$request->name;
      $user->email=$request->email;
      $user->password=Hash::make($request->password);
      $user->username=$request->username;
      $user->akses=$request->akses;
      $user->id_auditor=$request->id_auditor;
      $user->id_auditee=$request->id_auditee;
      $user->pass=$request->password_confirmation; 
      $user->save();

      Alert::success('Anda Bisa Mengaktifkannya Sekarang', 'Berhasil Registrasi User')->autoclose(3000);
      return redirect('admin/dataauditor');

      }
      else
      {
         Alert::error('Masukkan Username Yang Berbeda', 'Username Telah Tersedia' )->autoclose(3000);
      return redirect('admin/dataauditor');

        // return "eroor";

      }

    }


    public function formregistrasiauditee(Request $request)
    {
      $id_auditee=$request->id_auditee;
      $id_auditor="";
      $nama_auditee=$request->nama;
      $akses=$request->akses;
      return view ('admin/registrasiauditee', ['id_auditor'=> $id_auditor, 'nama_auditee'=> $nama_auditee, 'akses'=> $akses,'id_auditee'=> $id_auditee]);
    }

    

    public function registrasiauditee(Request $request)
    {

      $cek_username=user::where('username',$request->username)->first();
      // return $cek_username;
      if (empty($cek_username))
      {

         $user = new user;
      $user->name=$request->name;
      $user->email=$request->email;
      $user->password=Hash::make($request->password);
      $user->username=$request->username;
      $user->akses=$request->akses;
      $user->id_auditor=$request->id_auditor;
      $user->id_auditee=$request->id_auditee;
      $user->pass=$request->password_confirmation; 
      $user->save();

      Alert::success('Anda Bisa Mengaktifkannya Sekarang', 'Berhasil Registrasi User')->autoclose(3000);
      return redirect('admin/dataauditee');

      }
      else
      {
         Alert::error('Masukkan Username Yang Berbeda', 'Username Telah Tersedia' )->autoclose(3000);
      return redirect('admin/dataauditee');

        // return "eroor";

      }
      

    }
    
    public function adduser(Request $request)
    {

// return $request;
      $user = new user;
      $user->name=$request->name;
      $user->email=$request->email;
      $user->password=Hash::make($request->password);
      $user->username=$request->username;
      $user->akses=$request->akses;
      $user->pass=$request->password_confirmation; 
      $user->save();

      Alert::success('Berhasil Menambahkan User Baru', '')->autoclose(3000);
      return redirect('admin/datakepala');

    }


    public function pengaturanaudit()
    {

      // cek apakah masih ada lks yang belum diverifikasi
      $lks=LKS::where('status',"!=","Ter-Verifikasi")->first();
        if ($lks) {
          $status_lks=" Sepertinya masih ada LKS yang belum di-Verifikasi.";
        }
        else{
          $status_lks="aman";
        }

        // mencari periode audit yang aktif
      $periode=periode::all();
      $aktif=periode::where('status_audit','aktif')->first();

      // cek apakah ada periode audit yang aktif
        try
        { $tahunaktif= $aktif->tahun_audit; }
        catch(Exception $e)
        { $tahunaktif=null; }


        // cek apakah data audit tahun ini sudah diarsipkan?
        $catatan=catatan::all();
        $tindakan=tindakan::all();
        $lks=LKS::all();
        $pertanyaan=pertanyaan::all();

         if ($catatan->isEmpty() && $tindakan->isEmpty() && $lks->isEmpty() && $pertanyaan->isEmpty()) {
           $status_data="kosong";
         }
         else{
          $status_data="ada";
         }


         // cek apakah users sudah dihapus
         $users=user::where('akses','AUDITOR')->orWhere('akses','AUDITEE')->get();

         if ($users->isEmpty()) {
           $status_users = "kosong";
         }
         else{ $status_users = "ada";}


         // cek apakah pelaksana sudah dihapus
        $auditor=auditor::all();
        $auditee=auditee::all();

         if ($auditor->isEmpty() && $auditee->isEmpty()) {
           $status_pelaksana = "kosong";
         }
         else{ $status_pelaksana = "ada";}

         
          // return $status_users;
     
      return view('admin/pengaturanaudit',['periode'=>$periode,'tahunaktif'=>$tahunaktif,'status_data'=>$status_data,'status_lks'=>$status_lks,'status_users'=>$status_users,'status_pelaksana'=>$status_pelaksana]);
    }


    function hapusarsip($id)
    {
      $periode=periode::find($id);
      $tahun_audit=$periode->tahun_audit;

      $arsip_tindakan=arsip_tindakan::where('tahun_audit',$tahun_audit);
      $arsip_lks=arsip_lks::where('tahun_audit',$tahun_audit);
      $arsip_pertanyaan=arsip_pertanyaan::where('tahun_audit',$tahun_audit);

      $arsip_tindakan->delete();
      $arsip_lks->delete();
      $arsip_pertanyaan->delete();
      $periode->delete();

       Alert::info('Arsip Data Audit Tahun '.$tahun_audit.' Telah Dihapus', 'Berhasil Menghapus Arsip')->autoclose(3600);
      return redirect('admin/pengaturan-audit');
    }



    function arsipconfirm()
    {
      return view ('admin/arsip-confirm');
    }





    function arsipkan_data()
    {

      $aktif=periode::where('status_audit','aktif')->first();

      // return $aktif;  

      // $catatan = catatan::all();
      // $finalCatatan = array();
      // foreach($catatan as $keyc=>$valuec){
      //    array_push($finalCatatan, array(
      //                 'id'=>$valuec['id'],
      //                 'id_tindakan'=>$valuec['id_tindakan'],
      //                 'catatan_tindakan'=>$valuec['catatan_tindakan'],
      //                 'tahun_audit'=> $aktif->tahun_audit
      //                  )
      //    );
      // };


      $tindakan = tindakan::all();
      $finaltindakan = array();
      foreach($tindakan as $keyt=>$valuet){
         array_push($finaltindakan, array(
                      'id'=>$aktif->tahun_audit.$valuet['id_tindakan'],
                      'id_lks'=>$aktif->tahun_audit.$valuet['id_lks'],
                      'akar'=>$valuet['akar'],
                      'dilakukan'=>$valuet['dilakukan'],
                      'pencegahan'=>$valuet['pencegahan'],
                      'title'=>$valuet['title'],
                      'path'=>$valuet['path'],
                      'status_tindakan'=>$valuet['status_tindakan'],
                      'lokasi'=>$valuet['lokasi'],
                      'pengirim_tindakan'=>$valuet['pengirim_tindakan'],
                      'catatan_verifikasi'=>$valuet['catatan_verifikasi'],
                      'nama_verifikator'=>$valuet['nama_verifikator'],
                      'tahun_audit'=> $aktif->tahun_audit
                       )
         );
      };


      $lks = LKS::all();
      $finallks = array();
      foreach($lks as $keyl=>$valuel){
         array_push($finallks, array(
                      'id'=>$aktif->tahun_audit.$valuel['id'],
                      'nolks'=>$valuel['nolks'],
                      'id_pertanyaan'=>$aktif->tahun_audit.$valuel['id_pertanyaan'],
                      'acuan'=>$valuel['acuan'],
                      'deskripsi'=>$valuel['deskripsi'],
                      'iec_2012'=>$valuel['iec_2012'],
                      'iec_2015'=>$valuel['iec_2015'],
                      'iec_2017'=>$valuel['iec_2017'],
                      'smm'=>$valuel['smm'],
                      'status'=>$valuel['status'],
                      'lokasi'=>$valuel['lokasi'],
                      'nama_pengirim'=>$valuel['nama_pengirim'],
                      'tahun_audit'=> $aktif->tahun_audit
                       )
         );
      };


      $pertanyaan = pertanyaan::all();
      $finalpertanyaan = array();
      foreach($pertanyaan as $keyp=>$valuep){
         array_push($finalpertanyaan, array(
                      'id'=>  $aktif->tahun_audit.$valuep['id'],
                      'pertanyaan'=>$valuep['pertanyaan'],
                      'catatan'=>$valuep['catatan'],
                      'kategori'=>$valuep['kategori'],
                      'status'=>$valuep['status'],
                      'lokasi'=>$valuep['lokasi'],
                      'penulis'=>$valuep['penulis'],
                      'tahun_audit'=> $aktif->tahun_audit
                       )
         );
      };
      

        // try
        // {
            arsip_pertanyaan::insert($finalpertanyaan);
            arsip_lks::insert($finallks);
            arsip_tindakan::insert($finaltindakan);

            // arsip_catatan::insert($finalCatatan);

              catatan::getQuery()->delete();
              tindakan::getQuery()->delete();
              LKS::getQuery()->delete();
              pertanyaan::getQuery()->delete();

              $aktif->status_audit="selesai";
              $aktif->status_data="diarsipkan";
              $aktif->save();

                  Alert::success('Anda dapat melanjutkan ke step selanjutnya', 'Berhasil Mengarsipkan Data')->autoclose(3000);
                return redirect('admin/pengaturan-audit');

        //  }
        // catch(Exception $e)
        // {
           Alert::error(' ', 'Gagal Mengarsipkan Data')->autoclose(3000);
          return redirect('admin/pengaturan-audit');
          
        // }

        // return arsip_pertanyaan::all();
    }

    function hapususers()
    {

        $catatan=catatan::all();
        $tindakan=tindakan::all();
        $lks=LKS::all();
        $pertanyaan=pertanyaan::all();

         if ($catatan->isEmpty() && $tindakan->isEmpty() && $lks->isEmpty() && $pertanyaan->isEmpty()) 
         {
             $users=user::where('akses','AUDITOR')->orWhere('akses','AUDITEE');
              $users->delete();

              Alert::info(' ', 'Berhasil Menghapus Data User')->autoclose(3000);
              return redirect('admin/pengaturan-audit');
         }
         else{
           Alert::error('Pastikan Langkah Sebelumnya Telah Dijalankan!', 'Gagal Menghapus User')->autoclose(3000);
              return redirect('admin/pengaturan-audit');
         }
    } 


    function hapuspelaksana()
    {
         $users=user::where('akses','AUDITOR')->orWhere('akses','AUDITEE')->get();

         if ($users->isEmpty()) {
          
          auditor::getQuery()->delete();
              auditee::getQuery()->delete();

              Alert::info('Anda Dapat Melanjutkan Ke Tahap Selanjutnya ', 'Berhasil Menghapus Data Pelaksana')->autoclose(3000);
              return redirect('admin/pengaturan-audit');

         }
         else{ 
          Alert::error('Pastikan Langkah Sebelumnya Telah Dijalankan!', 'Gagal Menghapus Data Pelaksana')->autoclose(3000);
              return redirect('admin/pengaturan-audit');
         }
    } 


    function mulaiaudit(Request $request)
    {
       $auditor=auditor::all();
        $auditee=auditee::all();

        $angka=is_numeric($request->tahun_audit);

        // dd ($angka);

        // cek apakah data pelaksana sudah kosong
         if ($auditor->isEmpty() && $auditee->isEmpty()) 
         {
            // $ubahstatus=periode::where('status_audit','aktif')->first();
            // $ubahstatus->status_audit=' ';
            // $ubahstatus->save();

            $tahun =periode::where('tahun_audit',$request->tahun_audit)->first();

            if ($tahun) 
            {
             Alert::error('Tahun audit yang anda masukkan telah tersedia ', 'Gagal Memulai Audit Baru')->autoclose(3000);
              return redirect('admin/pengaturan-audit');
            }
            elseif ($angka==false) {
              Alert::error('Inputan tahun harus berupa angka', 'Gagal Memulai Audit Baru')->autoclose(3000);
              return redirect('admin/pengaturan-audit');
            }
            else
            {
              $periode = new periode;
              $periode->tahun_audit=$request->tahun_audit;
              $periode->status_audit="aktif";
              $periode->save();

              Alert::success('Status Audit Tahun '.$request->tahun_audit.' Telah Aktif ', 'Berhasil Memulai Audit Baru')->autoclose(3000);
                return redirect('admin/pengaturan-audit');
            }
            
         }
         else{ 
          Alert::error('Pastikan Langkah Sebelumnya Telah Dijalankan! ', 'Gagal Memulai Audit Baru')->autoclose(3000);
              return redirect('admin/pengaturan-audit');
         }
    }




    function lihatarsip()
    {
      $periode=periode::all();
      return view ('admin/arsip',['periode'=>$periode]);
    }

    function dataarsip(Request $request)
    {
      $lokasi=$request->lokasi;
      $tahun_audit=$request->tahun_audit;
      $periode=periode::all();
      $pertanyaan=arsip_pertanyaan::where('lokasi',$request->lokasi)->where('tahun_audit',$request->tahun_audit)->get();

      return view ('admin/arsipdata',['pertanyaan'=>$pertanyaan,'periode'=>$periode,'lokasi'=>$lokasi,'tahun_audit'=>$tahun_audit]);
    }



        function detailarsip($id)
    {
        $id_pertanyaan=$id;

        $tindakanlks = DB::table( 'arsip_lks')
                     ->join ('arsip_tindakan' ,'arsip_lks.id','=' , 'arsip_tindakan.id_lks'  )
                     ->select('arsip_lks.nolks','arsip_lks.id','arsip_lks.acuan','arsip_lks.deskripsi','arsip_lks.iec_2012','arsip_lks.iec_2015','arsip_lks.iec_2017','arsip_lks.smm',  'arsip_tindakan.*')
                     ->where('arsip_lks.id_pertanyaan', $id_pertanyaan)
                     ->first();


                     // dd($tindakanlks);

       return response()->json($tindakanlks);           

    }


    function dataaudit($id)
    {

      // return$id;
      if ($id==1) {
        $lokasi_audit="Top Manajemen";
      }

      elseif ($id==2) {
        $lokasi_audit="Sub Bag Tata Usaha";
      }

      elseif ($id==3) {
        $lokasi_audit="Seksi Pengembangan jasa Teknis";
      }

      elseif ($id==4) {
        $lokasi_audit="Seksi Standarisasi Dan Sertifikasi / Operasional";
      }
      elseif ($id==5) {
        $lokasi_audit="Seksi Standarisasi Dan Sertifikasi / Mutu";
      }
      else
      {

      }

      // return $lokasi_audit;

      // $pertanyaan=pertanyaan::where('lokasi',$lokasi_audit)->get();


       $pertanyaan = DB::table( 'pertanyaan')
                     ->leftjoin ('lks' ,'pertanyaan.id','=' , 'lks.id_pertanyaan'  )
                     ->select('pertanyaan.*',  'lks.status AS statuslks')
                     ->where('pertanyaan.lokasi',$lokasi_audit)
                     ->get();


            // $pertanyaan=pertanyaan::where( 'lokasi' , $lokasi)   ->get();

            $okk=pertanyaan::where( 'lokasi' , $lokasi_audit)->where('kategori','OK')   ->get();             
            $nokk=pertanyaan::where( 'lokasi' , $lokasi_audit)->where('kategori','NOK')    ->get();             
                 
           $totaldata=count($pertanyaan); 
           $ok=count($okk); 
           $nok=count($nokk); 

      return view('admin/daaudit',['lokasi'=>$lokasi_audit,'pertanyaan'=>$pertanyaan,'ok'=>$ok,'nok'=>$nok,'totaldata'=>$totaldata]);
    }



    function detaildata($id)
    {
        $id_pertanyaan=$id;

        // dd($id);

        // $tindakanlks = DB::table( 'tindakan')
        //              ->join ('lks' , 'tindakan.id_lks', '=' , 'lks.id')
        //              ->select('lks.nolks','lks.id','lks.acuan','lks.deskripsi','lks.iec_2012','lks.iec_2015','lks.iec_2017','lks.smm','lks.created_at','lks.updated_at','lks.id_user', 'lks.status', 'lks.lokasi', 'tindakan.*')
        //              ->where('lks.id_pertanyaan', $id_pertanyaan)
        //              ->first();

        $tindakanlks = DB::table( 'lks')
                     ->join ('tindakan' ,'lks.id','=' , 'tindakan.id_lks'  )
                     ->select('lks.nolks','lks.id','lks.acuan','lks.deskripsi','lks.iec_2012','lks.iec_2015','lks.iec_2017','lks.smm',  'tindakan.*')
                     ->where('lks.id_pertanyaan', $id_pertanyaan)
                     ->first();


                     // dd($tindakanlks);

       return response()->json($tindakanlks);           

    }


     public function cetak_lks($id)
    {
        try
        {

          $pr=pertanyaan::find($id);
          $lks=LKS::where('id_pertanyaan',$pr->id)->first();
          $tindakan=tindakan::where('id_lks',$lks->id)->first();

       
          $tindakanlks = DB::table( 'tindakan')
                     ->join ('lks' , 'tindakan.id_lks', '=' , 'lks.id')
                     ->select('lks.*', 'tindakan.*')
                     ->where('tindakan.id_tindakan', $tindakan->id_tindakan)
            
                     ->get();

                     $ss = pegawai::where('sie','Seksi Standarisasi Dan Sertifikasi')->where('jabatan','Kepala Seksi')->first();    

        return view ('admin.Lembar_Ketidaksesuaian',['tindakanlks' =>  $tindakanlks, 'ss'=>$ss]);

        }

        catch(Exception $e)
        {
          Alert::error('LKS Mungkin Belum Di-Verifikasi Auditor ', 'Gagal Mencetak LKS')->autoclose(3000);
          return redirect()->back();
        }
      
    }


}
