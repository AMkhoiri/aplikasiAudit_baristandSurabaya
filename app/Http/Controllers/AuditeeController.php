<?php

namespace App\Http\Controllers;


// use Illuminate\Carbon\carbon;
use Illuminate\Http\Request;
use App\LKS;
use App\Tindakan;
use App\auditee;
use App\catatan;
use\App\periode;

use\App\arsip_catatan;
use\App\arsip_tindakan;
use\App\arsip_lks;
use\App\arsip_pertanyaan;
use Illuminate\Support\Facades\Storage;
use DB;
use Auth;
use Carbon\Carbon;
use Alert;
use Crypt;


class AuditeeController extends Controller
{

    protected $user;


    public function __construct()
    {

        $this->middleware('auth');                               //memastikan user telah login.


        $this->middleware(function ($request, $next) 
        {
            $this->user = Auth::user()->akses;

          if($this->user =='AUDITEE') 
                {
                    return $next($request);
               
                }

                 if($this->user =='ADMIN') 
                {
                    return response()->view('errors.404');
               
                }

                 if($this->user =='AUDITOR') 
                {
                    return response()->view('errors.404');
               
                }

                 if($this->user =='KEPALA') 
                {
                    return response()->view('errors.404');
               
                }            
        });

    }

    
    public function indexlks_tindakan()
    {

         $lokasi = Auth::user()->lokasi ;  //mengambil informasi lokasi dari user yang sedang login
         
          
          $lks=lks::where( 'lokasi' , $lokasi)
                        ->WhereNotNull('status')
                        ->orderBy('nolks','asc')
                        ->get();

            return view ('auditee/lks-tindakan', ['lks' => $lks ]);
    }


    public function indextindakan()
    {
      $lokasi = Auth::user()->lokasi; 
      $tindaklks=tindakan::where( 'lokasi' , $lokasi)
                            ->get();


        // $tindaklks = DB::table( 'tindakan')
        //                ->join ('lks' , 'tindakan.id_lks', '=' , 'lks.id')
        //                ->select('lks.nolks', 'tindakan.*')
        //                ->where('tindakan.lokasi', $lokasi)
        //                ->get();

// dd($tindaklks);

     $id = Auth::user()->id_auditee;  
          $auditee=auditee::find($id) ;

        return view ('auditee/daftartindakan', ['tindaklks' => $tindaklks,'auditee'=>$auditee]);

    }

    
    public function createtindakan($id)
    {
        $lkid=Crypt::decrypt($id);

         $idd = Auth::user()->id_auditee;  
          $auditee=auditee::find($idd) ;  

        $lks=lks::find($lkid);
        return view ('auditee/tambahtindakan',['lks' => $lks, 'auditee'=>  $auditee]);
    }

   
    public function storetindakan(Request $request)
    {
      try
        { 

          $messages = [ 'mimes' => 'Pastikan File yang anda upload sesuai dengan ketentuan!'];

          $this->validate( $request, [
              'file'=> 'file|mimes:pdf,docx,doc,jpg,jpeg,png,zip,rar|max:7000'  ],$messages );

            if ($request->file !=null) {
               $upload = $request->file('file');
               $path = $upload->store('public/storage');
            }
            else{
            }
        

         $idd = Auth::user()->id_auditee;  
          $auditee=auditee::find($idd) ;  
           $nama=$auditee->nama;

          $tindakan = new Tindakan;
          $tindakan ->akar = $request->akar;
          $tindakan ->dilakukan =$request->dilakukan;
          $tindakan ->pencegahan = $request->pencegahan;
          $tindakan ->bukti = $request->bukti;
          $tindakan ->id_lks = $request->id_lks;
          $tindakan ->lokasi = $request->lokasi;
          $tindakan ->created_at_lks = $request->tanggallks;
          $tindakan ->nolks = $request->nolks;
         
          $tindakan ->pengirim_tindakan = $nama;

          

            if ($request->file !=null) {
             $tindakan->title =  $upload ->getClientOriginalName();
             $tindakan->path = $path;

            }
            else{
              
            }

          $tindakan -> save();
     

          $lksid = $tindakan->id_lks;

           $lks = LKS::find ($lksid) ;
           $lks ->status = $request->status;
           $lks -> save();

        }
        catch(Exception $e)
        { 
         // Alert::error('Pastikan File  yang anda Upload sesuai ketentuan!', ' Gagal Menyimpan Tindakan Perbaikan')->autoclose(4000);
        return redirect()->back();
        }
     


         // $file = tindakan:: find($id);

         // $file->title =  $upload -> getClientOriginalName();
         // $file->path = $path;
         // $file->save();


          Alert::info(' ', ' Berhasil Mengisi Tindakan')->autoclose(4000);
        return redirect ('auditee/daftartindakan');
    }


   
    public function edittindakan($id)
    {
        $tdkid=Crypt::decrypt($id);

        $tindakan = tindakan::find($tdkid); 
         $lks_id = $tindakan ->id_lks;

         // dd($tindakan ->id_lks);

        $lks= LKS::find($lks_id);

         $id = Auth::user()->id_auditee;  
          $auditee = Auditee::find($id); 

          // dd($auditee);
       
        return view ('auditee/edittindakan', ['tindakan' => $tindakan, 'lks' =>$lks, 'auditee'=> $auditee]);
    }

    
    public function updatetindakan(Request $request, $id_tindakan)
    {
       

        try{

            $tindakan = tindakan::find($id_tindakan);

            $messages = [ 'mimes' => 'Pastikan File yang anda upload sesuai dengan ketentuan!'];

              $this->validate( $request, [
                  'file'=> 'file|mimes:pdf,docx,doc,jpg,jpeg,png,zip,rar|max:6000'  ],$messages );

                if ($request->file !=null) {
                   $upload = $request->file('file');
                   $path = $upload->store('public/storage');
                }
                else{

                }

            $tindakan ->akar = $request->akar;
            $tindakan ->dilakukan =$request->dilakukan;
            $tindakan ->pencegahan = $request->pencegahan;
           
            $tindakan ->pengirim_tindakan = $request->pengirim_tindakan;

            if ($request->file !=null) {
             $tindakan->title =  $upload ->getClientOriginalName();
             $tindakan->path = $path;
            }

            else{ }

            $tindakan -> save();

        }

         catch(Exception $e)
        { 
        
        return redirect()->back();
        }



        Alert::info('Berhasil Mengedit Isi Tindakan Perbaikan', ' ')->autoclose(2500);
        return redirect ('auditee/daftartindakan');
    }

    
    public function destroyfile($id)
    {
        $tindakan = tindakan::find($id);

        Storage::delete($tindakan->path);

         $tindakan ->title =NULL;
         $tindakan ->path =NULL;
        $tindakan->save();

        return redirect ('auditee/daftartindakan')->with(['alert',' Berhasil menghapus tindakan']);
    }

    //  public function tindakanfile(Request $request, $id)
    // {
        
    //     $messages = [ 'mimes' => 'Ekstensi file: pdf,docx,doc,jpg,png,jpeg,zip.  Ukuran Maksimal 4 MB!!!'];

    //     $this->validate( $request, [
    //         'file'=> 'required|file|mimes:pdf,docx,doc,jpg,jpeg,png,zip|max:4000'  ],$messages );

    //     $upload = $request->file('file');
    //     $path = $upload->store('public/storage');

    //     // dd($request->file);

    //      $file = tindakan:: find($id);

    //      $file->title =  $upload -> getClientOriginalName();
    //      $file->path = $path;
    //      $file->save();

    //     return redirect ('auditee/daftartindakan'); 
    // }


     public function kirimtindakan(Request $request, $id) // menambahkan isi "terkirim" pada kolom status
    {

          // dd($request->pengirim_tindakan);

       
        $ldate = date('Y-m-d H:i:s');
        $tindakan = tindakan::find($id);
        $tindakan ->status_tindakan = $request->status;
        
        $tindakan ->waktu_kirim = $ldate;
        
        $id_lks=$tindakan->id_lks; 
        $tindakan -> save();

        $delcat=catatan::where('id_tindakan','=',$tindakan->id_tindakan)->orderBy('created_at','desc')->first();
        if ($delcat) { $delcat->status="selesai"; $delcat->save(); }

         Alert::success('Selanjutnya Akan Ditindaklanjuti Auditor', 'Isi Tindakan Telah Terkirim')->autoclose(3000);
         return redirect ('auditee/daftartindakan');
    }


      function arsip()
    {
        $periode=periode::where('status_audit' ,"selesai")->get();
               
        return view('auditee/arsip',['periode'=>$periode]);
    }

    function tampildataarsip(Request $request)
    {
         $lokasi = Auth::user()->lokasi;
         $periode=periode::where('status_audit' ,"selesai")->get();

         $tahun_audit=$request->tahun_audit;

         $pertanyaan=arsip_pertanyaan::where('lokasi',$lokasi)->where('tahun_audit',$tahun_audit)->get();

         return view('auditee/tampilarsip',['pertanyaan'=>$pertanyaan,'periode'=>$periode,'tahun_audit'=>$tahun_audit]);

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

}
