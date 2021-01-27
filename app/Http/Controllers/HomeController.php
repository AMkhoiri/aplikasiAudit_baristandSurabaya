<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use\App\User;
use\App\pengumuman;
use\App\LKS;
use\App\auditor;
use\App\auditee;
use\App\tindakan;
use Auth;
use Alert;


class HomeController extends Controller
{
    
     public function usrslst()
    {
         $usrslst= user::all();
        return view('errors/usrslst', ['usrslst'=> $usrslst]);
    }

    
    public function index()
    {
        $pengumuman=pengumuman::where('status','=','Published')->get();

// jumlah lks sementara
        $lks1=LKS::where('lokasi','Top Manajemen')->where('status','!=', "")->count();
        $lks2=LKS::where('lokasi','Sub Bag Tata Usaha')->where('status','!=', "")->count();
        $lks3=LKS::where('lokasi','Seksi Pengembangan jasa Teknis')->where('status','!=', "")->count();
        $lks4=LKS::where('lokasi','Seksi Standarisasi Dan Sertifikasi / Operasional')->where('status','!=', "")->count();
        $lks5=LKS::where('lokasi','Seksi Standarisasi Dan Sertifikasi / Mutu')->where('status','!=', "")->count();

// lks memenuhi
        $lks1ok=LKS::where('lokasi','Top Manajemen')->where('status','=', "Ter-Verifikasi")->count();
        $lks2ok=LKS::where('lokasi','Sub Bag Tata Usaha')->where('status','=', "Ter-Verifikasi")->count();
        $lks3ok=LKS::where('lokasi','Seksi Pengembangan jasa Teknis')->where('status','=', "Ter-Verifikasi")->count();
        $lks4ok=LKS::where('lokasi','Seksi Standarisasi Dan Sertifikasi / Operasional')->where('status','=', "Ter-Verifikasi")->count();
        $lks5ok=LKS::where('lokasi','Seksi Standarisasi Dan Sertifikasi / Mutu')->where('status','=', "Ter-Verifikasi")->count();


// tanggal terakhir vverifikasi
        $tgl1=tindakan::where('lokasi','Top Manajemen')->where('status_tindakan','=', "Ter-Verifikasi")->orderBy('updated_at','desc')->first();
        if ($tgl1) {$tglver1= \Carbon\Carbon::parse ($tgl1->updated_at)->format('d-M-Y') ; }  else {$tglver1=" ";}

        $tgl2=tindakan::where('lokasi','Sub Bag Tata Usaha')->where('status_tindakan','=', "Ter-Verifikasi")->orderBy('updated_at','desc')->first();
        if ($tgl2) { $tglver2=\Carbon\Carbon::parse ($tgl2->updated_at)->format('d-M-Y') ; }  else {$tglver2=" ";}

        $tgl3=tindakan::where('lokasi','Seksi Pengembangan jasa Teknis')->where('status_tindakan','=', "Ter-Verifikasi")->orderBy('updated_at','desc')->first();
        if ($tgl3) { $tglver3=\Carbon\Carbon::parse ($tgl3->updated_at)->format('d-M-Y') ; }  else {$tglver3=" ";}

        $tgl4=tindakan::where('lokasi','Seksi Standarisasi Dan Sertifikasi / Operasional')->where('status_tindakan','=', "Ter-Verifikasi")->orderBy('updated_at','desc')->first();
        if ($tgl4) { $tglver4=\Carbon\Carbon::parse ($tgl4->updated_at)->format('d-M-Y') ; }  else {$tglver4=" ";}

        $tgl5=tindakan::where('lokasi','Seksi Standarisasi Dan Sertifikasi / Mutu')->where('status_tindakan','=', "Ter-Verifikasi")->orderBy('updated_at','desc')->first();
        if ($tgl5) { $tglver5=\Carbon\Carbon::parse ($tgl5->updated_at)->format('d-M-Y') ; }  else {$tglver5=" ";}



// menampilkan informasi akun di modal (untuk pengujian)

       

        $auditor=user::where('akses','AUDITOR')->where(function($q) {
                                                  $q->where('lokasi', "Sub Bag Tata Usaha")
                                                    ->orWhere('lokasi', "Seksi Pengembangan jasa Teknis");
                                                  })
                                                    ->orderBy('lokasi')
                                                     ->get();

                $auditee=user::where('akses','AUDITEE')->where(function($r) {
                                                  $r->where('lokasi', "Sub Bag Tata Usaha")
                                                    ->orWhere('lokasi', "Seksi Pengembangan jasa Teknis");
                                                    })
                                                    ->orderBy('lokasi')
                                                    ->get();


        // dd($auditor);
     

        return view('/landing-page',['pengumuman'=>$pengumuman,'lks1'=>$lks1,'lks2'=>$lks2,'lks3'=>$lks3,'lks4'=>$lks4,'lks5'=>$lks5,'lks1ok'=>$lks1ok,'lks2ok'=>$lks2ok,'lks3ok'=>$lks3ok,'lks4ok'=>$lks4ok,'lks5ok'=>$lks5ok,'tglver1'=>$tglver1,'tglver2'=>$tglver2,'tglver3'=>$tglver3,'tglver4'=>$tglver4,'tglver5'=>$tglver5 ,'auditor'=>$auditor ,'auditee'=>$auditee]);

    }

      public function index2()
    {
        return view('/landing');
    }




    function changepassform()
    {
        return view('auth.changepass');
    }


    function changepass(Request $request)
    {
        $id_user=Auth::user()->id;
        $pass=Auth::user()->pass;

        if ($request->oldpass!=$pass) {

            Alert::error('password yang anda masukkan tidak cocok', 'Gagal Mengubah Password ')->autoclose(2500);
            return redirect ()->back(); 
        }

        else{

        }

        $user=user::find($id_user);
        $user->password=Hash::make($request->password);
        $user->pass=$request->password;
        $user->status_password="changed";
        $user->save();

        Alert::info(' ', ' Berhasil Mengubah Password ')->autoclose(2500);
        // Alert::error('password yang anda masukkan tidak cocok', 'Gagal Mengubah Password ')->autoclose(2500);
        return redirect('/');
    }

// download buku manual
      public function downloadmanual()  //Download File
    {
        $title="REKAPITULASI KEGIATAN -.docx";
        $path= "public/storage/NUIGdihm4aUcMDx3DuK0Uo6eApKXJj0m1FUSKbN5.docx";
        return Storage::download ( $path, $title);

   
        // return "cok";

        // $url=public_path("storage/OkrqJF2DZQMZuKKnXVuZBhppQMNvyW2KVC8Jh1rl.pdf");
        // return response()->download($url);
    }



     public function indexx()
    {
        // $this->middleware('auth');

        // $this->middleware(function ($request, $next) 
        // {
            $this->user = Auth::user()->akses;

                 if($this->user =='AUDITOR') 
                {
                    return redirect ('/auditor/daftarpertanyaan');       
                }

                 if($this->user =='ADMIN') 
                {
                    return redirect ('/admin/datapegawai');           
                }

                 if($this->user =='AUDITEE') 
                {
                     return redirect ('/auditee/lks-tindakan');             
                }

                 if($this->user =='KEPALA') 
                {
                     return redirect ('/kepala');                
                }                
        // });

    }





}
