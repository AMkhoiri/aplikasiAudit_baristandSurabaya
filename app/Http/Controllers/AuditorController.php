<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Pertanyaan;
use App\LKS;
use App\auditor;
use App\tindakan;
use App\klausul;
use App\catatan;
use App\pegawai;
use\App\periode;

use\App\arsip_catatan;
use\App\arsip_tindakan;
use\App\arsip_lks;
use\App\arsip_pertanyaan;

use Illuminate\Support\Facades\Storage;
use DB;
use Auth;
use PDF;
use Alert;
Use Exception;
use Crypt;
use Carbon\Carbon;

use App\User;

class AuditorController extends Controller
{
     protected $user;


    public function __construct()
    {


        $this->middleware('auth');

        $this->middleware(function ($request, $next) 
        {
            $this->user = Auth::user()->akses;

          if($this->user =='AUDITOR') 
                {
                    return $next($request);      
                }

                 if($this->user =='ADMIN') 
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


    // public function __construct()
    // {


    //     $lokasi = Auth::user()->lokasi;
       
    //     $tindakanlks = DB::table( 'tindakan')
    //                  ->join ('lks' , 'tindakan.id_lks', '=' , 'lks.id')
    //                  ->select('lks.nolks','lks.id','lks.acuan','lks.deskripsi','lks.iec_2012','lks.iec_2015','lks.iec_2017','lks.smm','lks.created_at','lks.updated_at', 'lks.status', 'lks.lokasi', 'tindakan.*')
    //                  ->where('tindakan.lokasi', $lokasi)
    //                   ->Where('tindakan.status_tindakan','Terkirim')
                      
    //                  ->get()->count();

    //     View::share('tindakanlks', $tindakanlks);
    // }



   
    public function index() // menampilkan daftar pertanyaan pertanyaan
    {
      
        $lokasi = Auth::user()->lokasi ;  //mengambil informasi lokasi dari user yang sedang login
         $id_auditor = Auth::user()->id_auditor ;
         $auditor = auditor::find($id_auditor); 

        $pertanyaan=pertanyaan::where( 'lokasi' , $lokasi)                
                 // ->orWhere('status','terkirim')
                 ->get();

            $okk=pertanyaan::where( 'lokasi' , $lokasi)->where('kategori','OK')   ->get();             
            $nokk=pertanyaan::where( 'lokasi' , $lokasi)->where('kategori','NOK')    ->get();             
                 
           $totaldata=count($pertanyaan); 
           $ok=count($okk); 
           $nok=count($nokk);      

        return view ('auditor/daftarpertanyaan', ['pertanyaan' => $pertanyaan, 'auditor'=> $auditor,'totaldata'=>$totaldata,'nok'=>$nok,'ok'=>$ok]);
    }

    // public function create() 
    // {

    //      $id_auditor = Auth::user()->id_auditor ;
    //      $auditor = auditor::find($id_auditor);      

    //     return view ('auditor/tambahpertanyaan', ['auditor'=> $auditor]);
    // }


     public function store(Request $request) // menyimpan file  pertanyaan
    {

        $id_auditor=Auth::user()->id_auditor;
        // $penulis=auditor::find($id_auditor);

             $pertanyaan = new pertanyaan;
                $pertanyaan ->pertanyaan = $request->pertanyaan;
                $pertanyaan ->kategori = $request->kategori;
                $pertanyaan ->catatan = $request->catatan;
                $pertanyaan ->lokasi = $request->lokasi;
                $pertanyaan ->penulis = Auth::user()->username;
                $pertanyaan -> save();

         Alert::info('Berhasil Menyimpan Pertanyaan ', ' ')->autoclose(2500);
        return redirect ('auditor/daftarpertanyaan');


    }


    public function edit($id) // tampil modal edit data pertanyaan
    {
        $pertanyaan = pertanyaan::find($id);
        // return view ('auditor/editpertanyaan', ['pertanyaan' => $pertanyaan]);
        return $pertanyaan;
    }

    public function update(Request $request, $id) // menyimpan edit pertanyaan
    {
        $pertanyaan = pertanyaan::find($id);

        $pertanyaan ->pertanyaan = $request->pertanyaan;
        $pertanyaan ->kategori = $request->kategori;
        $pertanyaan ->catatan = $request->catatan;

        $pertanyaan -> save();

         Alert::info('Berhasil Mengedit Pertanyaan ', ' ')->autoclose(2500);
        // return redirect ('auditor/daftarpertanyaan');

        return $pertanyaan;
    }

     public function destroy($id) // hapus data pertanyaan
    {
        $pertanyaan = pertanyaan::find($id);
        $pertanyaan->delete();
        Alert::info('Berhasil Menghapus Pertanyaan ', ' ')->autoclose(2500);
        return redirect ('auditor/daftarpertanyaan');
    }


     public function indexlks() // menampilkan daftar lks
    {
        $lokasi = Auth::user()->lokasi ;

        $lks=lks::where('lokasi', $lokasi)               
                 // ->orWhere($matchThese2)
                 ->get();

        //   // dd($lks);     

         $id = Auth::user()->id_auditor;  
          $auditor=auditor::find($id)  ;             

                 
           $terkirim=lks::where( 'lokasi' , $lokasi)->where('status','!=',NULL)->get();                
                         
                 
           $totaldata=count($lks); 
           $terkirimm=count($terkirim); 
           $belumterkirim=$totaldata-$terkirimm;
            

        return view ('auditor/daftarlks', ['lks' => $lks, 'auditor' => $auditor,'totaldata'=>$totaldata,'terkirimm'=>$terkirimm, 'belumterkirim'=>$belumterkirim]);
    }

    public function createlks($prid) // form buat lks
    {
        $id=Crypt::decrypt($prid);  //decrypt id

        $perta=pertanyaan::find($id);                    //menngambil data pertanyaan yang akan dibuatkan lks (untuk isi value form deskripsi)
         $klausul2012=klausul::where('dokumen', 'SNI ISO/IEC 17065:2012') ->get();
          $klausul2015=klausul::where('dokumen', 'SNI ISO/IEC 17021-1:2015') ->get();
           $klausul2017=klausul::where('dokumen', 'SNI ISO/IEC 17021-3:2017') ->get();

         // dd($klausul2012);
        return view ('auditor/buatlks',['perta'=>$perta, 'klausul2012' => $klausul2012,'klausul2015'=>$klausul2015,
         'klausul2017'=>$klausul2017 ]);
    }

    public function storelks(Request $request) // menyimpan data lks
    {
        $lks = new lks;

        $lks ->acuan =$request->acuan;
        $lks ->deskripsi = $request->deskripsi;
        $lks ->iec_2012 = $request->iec_2012;
        $lks ->iec_2015 = $request->iec_2015;
        $lks ->iec_2017 = $request->iec_2017;
        $lks ->smm = $request->smm;
        $lks ->id_pertanyaan = $request->id_pertanyaan;
        $lks ->lokasi = $request->lokasi;
        $lks ->nama_penulis = $request->nama_penulis;
        $lks -> save();

        $id = $request->id_pertanyaan;

        // mengubah status LKS (telah dibuat)
         $pertanyaan = pertanyaan::find($id);
         $pertanyaan->status = $request->status;
         $pertanyaan->save();

         Alert::info('klik Tombol kirim, untuk Mengirim ke Auditee', 'Berhasil Menyimpan LKS')->autoclose(3500);
        return redirect ('auditor/daftarlks');
    }



    public function editlks($lkid) // form edit  lks
    {
        $id=Crypt::decrypt($lkid);

        $lks = lks::find($id);

        $klausul2012=klausul::where('dokumen', 'SNI ISO/IEC 17065:2012') ->get();
          $klausul2015=klausul::where('dokumen', 'SNI ISO/IEC 17021-1:2015') ->get();
           $klausul2017=klausul::where('dokumen', 'SNI ISO/IEC 17021-3:2017') ->get();
        
        return view ('auditor/editlks', ['lks' => $lks, 'klausul2012' => $klausul2012,'klausul2015'=>$klausul2015,
         'klausul2017'=>$klausul2017 ]);
    }


    public function updatelks(Request $request, $id) // menyimpan edit lks
    {
        $lks = lks::find($id);
        $lks ->nolks = $request->nolks;
        $lks ->acuan =$request->acuan;
        $lks ->deskripsi = $request->deskripsi;
        $lks ->iec_2012 = $request->iec_2012;
        $lks ->iec_2015 = $request->iec_2015;
        $lks ->iec_2017 = $request->iec_2017;
        $lks ->smm = $request->smm;
        $lks -> save(); 

          Alert::info('Berhasil Mengedit LKS', ' ')->autoclose(2500);
        return redirect ('auditor/daftarlks');
    }


    public function destroylks($id) 
    {
        $lks = lks::find($id);
        $lks->delete();
        return redirect ('auditor/daftarlks')->with('alert' , 'LKS Berhasil Dihapus');
    }

     public function kirimlks(Request $request, $id) 
    {
        $lokasi = Auth::user()->lokasi ;
        $nolks=LKS::where('lokasi',$lokasi)->where('status','!=', null)->count(); //menghitung jumlah lks pada area audit



        $lks = lks::find($id);
        $lks ->status = $request->status; 
        $lks ->nama_pengirim = $request->nama; 
         $lks ->nolks = $nolks+1;  //simpan nomor lks (diurutkan berdasarkan waktu pengiriman)

         
        $lks -> save();

         $lks = lks::find($id);
         $lks ->tgl_terkirim = $lks ->updated_at;
          $lks -> save();
        
        Alert::info('LKS Telah Terkirim Ke Auditee', ' ')->autoclose(3000);
         return redirect ('auditor/daftarlks');
    }


//VERIFIKASI

    public function indexlksver() 
    {        
         $id_auditor = Auth::user()->id_auditor ;
         $auditor = auditor::find($id_auditor);    

         $lokasi = Auth::user()->lokasi ;
       
          $tindakanlks = DB::table( 'tindakan')
                     ->join ('lks' , 'tindakan.id_lks', '=' , 'lks.id')
                     ->select('lks.nolks','lks.id','lks.acuan','lks.deskripsi','lks.iec_2012','lks.iec_2015','lks.iec_2017','lks.smm','lks.created_at','lks.updated_at', 'lks.status', 'lks.lokasi', 'tindakan.*')
                     ->where('tindakan.lokasi', $lokasi)
                      ->WhereNotNull('tindakan.status_tindakan')
                      
                     ->get();

           return view ('auditor/daftarlksver',['tindakanlks' =>  $tindakanlks, 'auditor'=>$auditor]);     

    }

    public function createveri($id) // form catatan verifikasi
    {
        $lkid=Crypt::decrypt($id);

        $lks= LKS::find($lkid);
        $tindakan_id = $lks ->id;
        $tindakan= tindakan::where('id_lks','=',$tindakan_id)->get();

        return view ('auditor/verifikasi',['lks'=>$lks , 'tindakan'=>$tindakan]);
    }

    public function updateveri(Request $request, $id) // menyimpan catatan verifikasi
    {
        $tindakan = tindakan::find($id);
        
         
        $tindakan ->catatan_verifikasi = $request->catver;

        $id_tindakan =$tindakan->id_tindakan;
        $tindakan -> save();

        $delcat=catatan::where('id_tindakan','=',$id_tindakan)->where('status','new')->orderBy('created_at','desc')->first();
        if ($delcat) { $delcat->status=" "; $delcat->save(); }
        
            

        $catatan = new catatan;
        $catatan->id_tindakan = $id_tindakan;
        $catatan->catatan_tindakan = $request->catver;

        $catatan->status = "new";
        $catatan -> save();

        Alert::info('Berhasil Menyimpan Catatan', ' ')->autoclose(3000);
        return redirect ('auditor/lksver');
    }


     public function showfile($id_tindakan)  //Download File
    {
        // $id =$id_lks;
        
        $dl = tindakan::find ($id_tindakan);
        return Storage::download($dl->path, $dl->title);

        // return response()->download($dl->path);
    }


     public function kembalitindakan(Request $request, $id_tindakan) 
    {

        $tindakan= tindakan::find ($id_tindakan);
        $tindakan->status_tindakan = $request->status_tindakan;
        $tindakan->save(); 

        $catatan=catatan::where('id_tindakan','=',$tindakan->id_tindakan)->orderBy('created_at','desc')->first();

      $catatan->status="Terkirim";
      $catatan->save();
        
        Alert::info('Tindakan Perbaikan Dikemabalikan Ke Auditee', ' ')->autoclose(3000);
         return redirect ('auditor/lksver');
    }


     public function verifikasitindakan(Request $request, $id_tindakan) // menambahkan isi "terkirim" pada kolom status
    {
        $tindakan= tindakan::find ($id_tindakan);
        $tindakan->status_tindakan = $request->status_tindakan;
        $tindakan->nama_verifikator = $request->nama;
        $idlks=$tindakan->id_lks;
        $tindakan->save(); 


        $lks= lks::find ($idlks);
        $lks->status=$request->status_tindakan;
        $lks->save();
        
        Alert::success('Anda Dapat Mencetaknya Sekarang!', 'LKS Ter-Verifikasi')->autoclose(3500);

         return redirect ('auditor/lksver');
    }


    public function cetak_lks($id)
    {
        
               
        $idd= \Crypt::decrypt($id) ;
        
        // $idd = $id;
       
          $tindakanlks = DB::table( 'tindakan')
                     ->join ('lks' , 'tindakan.id_lks', '=' , 'lks.id')
                     ->select('lks.*', 'tindakan.*')
                     ->where('tindakan.id_tindakan', $idd)
            
                     ->get();
             $ss = pegawai::where('sie','Seksi Standarisasi Dan Sertifikasi')->where('jabatan','Kepala Seksi')->first(); 
             if ($ss) {
                $nama_ss=$ss->nama;  
             }
             else 
             {  $nama_ss="-"; }

              return view ('auditor.Lembar_Ketidaksesuaian',['tindakanlks' =>  $tindakanlks, 'nama_ss'=>$nama_ss]);
    } 


    // public function cetak_pdf($id)
    // {
    //     $idd = $id;
       
    //       $tindakanlks = DB::table( 'tindakan')
    //                  ->join ('lks' , 'tindakan.id_lks', '=' , 'lks.id')
    //                  ->select('lks.*', 'tindakan.*')
    //                  ->where('tindakan.id_tindakan', $idd)
            
    //                  ->get();

    //     $pdf = PDF::loadview('auditor.cetak_pdf',['tindakanlks' => $tindakanlks]);
    //     return $pdf->stream();
    // }


     public function cetakpertanyaan(Request $request)
    {
        $nama_auditee=$request->nama_auditee;
        $dokumen_acuan=$request->dokumen_acuan;

        $lok_pertanyaan = Auth::user()->lokasi ;
        $penulis = Auth::user()->username ;
       
          $pertanyaan = pertanyaan::where('lokasi', $lok_pertanyaan)->where('penulis', $penulis) 
                        ->get();

                        // dd($pertanyaan);
// return $nama_auditee;

        return view ('auditor.lembarpertanyaan',['pertanyaan' =>  $pertanyaan, 'auditee'  => $nama_auditee, 'acuan' => $dokumen_acuan]);


    }


    function arsip()
    {
        $periode=periode::where('status_audit' ,"selesai")->get();
       
               
        return view('auditor/arsip',['periode'=>$periode]);
    }

    function tampildataarsip(Request $request)
    {
         $lokasi = Auth::user()->lokasi;
         $periode=periode::where('status_audit',"selesai")->get();
       

         $tahun_audit=$request->tahun_audit;

         $pertanyaan=arsip_pertanyaan::where('lokasi',$lokasi)->where('tahun_audit',$tahun_audit)->get();

         return view('auditor/tampilarsip',['pertanyaan'=>$pertanyaan,'periode'=>$periode,'tahun_audit'=>$tahun_audit]);

    }


    function detailarsip($id)
    {
        $id_pertanyaan=$id;

        // dd($id);

        // $tindakanlks = DB::table( 'tindakan')
        //              ->join ('lks' , 'tindakan.id_lks', '=' , 'lks.id')
        //              ->select('lks.nolks','lks.id','lks.acuan','lks.deskripsi','lks.iec_2012','lks.iec_2015','lks.iec_2017','lks.smm','lks.created_at','lks.updated_at',' 'lks.status', 'lks.lokasi', 'tindakan.*')
        //              ->where('lks.id_pertanyaan', $id_pertanyaan)
        //              ->first();

        $tindakanlks = DB::table( 'arsip_lks')
                     ->join ('arsip_tindakan' ,'arsip_lks.id','=' , 'arsip_tindakan.id_lks'  )
                     ->select('arsip_lks.nolks','arsip_lks.id','arsip_lks.acuan','arsip_lks.deskripsi','arsip_lks.iec_2012','arsip_lks.iec_2015','arsip_lks.iec_2017','arsip_lks.smm',  'arsip_tindakan.*')
                     ->where('arsip_lks.id_pertanyaan', $id_pertanyaan)
                     ->first();


                     // dd($tindakanlks);

       return response()->json($tindakanlks);           

    }

}
