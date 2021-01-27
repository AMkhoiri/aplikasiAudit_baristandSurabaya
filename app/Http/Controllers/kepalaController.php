<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use\App\pegawai;
use\App\auditor;
use\App\auditee;
use\App\periode;
use Auth;
use Alert;
Use Exception;

class kepalaController extends Controller
{

     protected $user;

    public function __construct()
    {

        $this->middleware('auth');
         $this->middleware(function ($request, $next) 
        {
            $this->user = Auth::user()->akses;

          if($this->user =='KEPALA') 
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

                 if($this->user =='AUDITOR') 
                {
                    return response()->view('errors.404');
               
                }

                
        });

    }
	

	public function index()
	{
		 $pegawai= pegawai::all();
		  $auditor= auditor::all();
		   $auditee= auditee::all();


		   $auditor1 = auditor::where('lokasi_audit','Top Manajemen') ->get() ;
		    $auditor2 = auditor::where('lokasi_audit','Sub Bag Tata Usaha') ->get() ;
		     $auditor3 = auditor::where('lokasi_audit','Seksi Pengembangan jasa Teknis') ->get() ;
		      $auditor4 = auditor::where('lokasi_audit','Seksi Standarisasi Dan Sertifikasi / Operasional') ->get() ;
		       $auditor5 = auditor::where('lokasi_audit','Seksi Standarisasi Dan Sertifikasi / Mutu') ->get() ;

		   $auditee1 = auditee::where('lokasi_auditee','Top Manajemen') ->get() ;
		    $auditee2 = auditee::where('lokasi_auditee','Sub Bag Tata Usaha') ->get() ;
		     $auditee3 = auditee::where('lokasi_auditee','Seksi Pengembangan jasa Teknis') ->get() ;
		      $auditee4 = auditee::where('lokasi_auditee','Seksi Standarisasi Dan Sertifikasi / Operasional') ->get() ;
		       $auditee5 = auditee::where('lokasi_auditee','Seksi Standarisasi Dan Sertifikasi / Mutu') ->get() ;

		       $periode=periode::where('status_audit','aktif')->first();
		       $tahun_audit=$periode->tahun_audit;


				 return view('kepala.indexkepala' ,
				  [
				  	'pegawai'=> $pegawai, 
				  	'auditor' => $auditor, 
				  	'auditee' => $auditee,
				 	'auditor1'=> $auditor1,
				 	'auditor2'=> $auditor2,
				 	'auditor3'=> $auditor3,
				 	'auditor4'=> $auditor4,
				 	'auditor5'=> $auditor5,
				 	'auditee1'=> $auditee1,
					'auditee2'=> $auditee2,
					'auditee3'=> $auditee3,
					'auditee4'=> $auditee4,
					'auditee5'=> $auditee5,
					'tahun_audit'=>$tahun_audit]);

	}

	public function auditor()
	{
		 $pegawai= pegawai::all();
		  $auditor= auditor::all();

		   $auditor1 = auditor::where('lokasi_audit','Top Manajemen') ->get() ;
		    $auditor2 = auditor::where('lokasi_audit','Sub Bag Tata Usaha') ->get() ;
		     $auditor3 = auditor::where('lokasi_audit','Seksi Pengembangan jasa Teknis') ->get() ;
		      $auditor4 = auditor::where('lokasi_audit','Seksi Standarisasi Dan Sertifikasi / Operasional') ->get() ;
		       $auditor5 = auditor::where('lokasi_audit','Seksi Standarisasi Dan Sertifikasi / Mutu') ->get() ;
 
 				return view('kepala.auditor' ,
				  [
				  	'pegawai'=> $pegawai, 
				  	'auditor' => $auditor, 
				 	'auditor1'=> $auditor1,
				 	'auditor2'=> $auditor2,
				 	'auditor3'=> $auditor3,
				 	'auditor4'=> $auditor4,
				 	'auditor5'=> $auditor5
				 	]);

	}


    public function storeauditor(Request $request)
    {

    	$messages = [
    		'unique' => 'Nama yang anda pilih sudah menjadi auditor di tempat lain! Silahkan pilih pegawai lain!'
	];

    	 $validatedData = $request->validate([
        			'nama' => 'unique:auditor',
        			
        			
    ],$messages);

         $auditor = new auditor;
         $auditor->nama = $request->nama;
         $auditor->lokasi_audit= $request->lokasi_audit;
         // $auditor->id_pegawai= $request->id_pegawai;
        $auditor -> save();

        return redirect ('kepala/auditor');
    }


 public function destroyauditor($id)
    {
    		$auditor = auditor::find($id);
    		$pesan= "$auditor->nama Mungkin Telah Diregistrasi Oleh Admin!";

    	try {
    		
	        $auditor->delete();
	        return redirect ('kepala/auditor');
    	}

        catch(Exception $e)
        {
        	  Alert::error($pesan, ' Gagal Menghapus Auditor ')->autoclose(3500);
        		return redirect ('kepala/auditor');
        }


      
    }

// auditee

	public function auditee()
	{
		 
		$pegawai1= pegawai::where('sie','Top Manajemen') ->get() ;
		$pegawai2= pegawai::where('sie','Sub Bag Tata Usaha') ->get() ;
		$pegawai3= pegawai::where('sie','Seksi Pengembangan jasa Teknis') ->get() ;
		$pegawai4= pegawai::where('sie','Seksi Standarisasi Dan Sertifikasi') ->get() ;
		$pegawai5= pegawai::where('sie','Seksi Standarisasi Dan Sertifikasi') ->get() ;

		  $auditee= auditee::all();

		   $auditee1 = auditee::where('lokasi_auditee','Top Manajemen') ->get() ;
		    $auditee2 = auditee::where('lokasi_auditee','Sub Bag Tata Usaha') ->get() ;
		     $auditee3 = auditee::where('lokasi_auditee','Seksi Pengembangan jasa Teknis') ->get() ;
		      $auditee4 = auditee::where('lokasi_auditee','Seksi Standarisasi Dan Sertifikasi / Operasional') ->get() ;
		       $auditee5 = auditee::where('lokasi_auditee','Seksi Standarisasi Dan Sertifikasi / Mutu') ->get() ;


		       // return $auditee2;
 
 				return view('kepala.auditee' ,
				  [
				  	'pegawai1'=> $pegawai1, 
				  	'pegawai2'=> $pegawai2, 
				  	'pegawai3'=> $pegawai3, 
				  	'pegawai4'=> $pegawai4, 
				  	'pegawai5'=> $pegawai5, 

				  	'auditee' => $auditee, 
				 	'auditee1'=> $auditee1,
				 	'auditee2'=> $auditee2,
				 	'auditee3'=> $auditee3,
				 	'auditee4'=> $auditee4,
				 	'auditee5'=> $auditee5
				 	]);

	}



	 public function storeauditee(Request $request)
    {

    	$messagess = [
    		'unique' => 'Nama yang anda pilih sudah menjadi auditee.  Silahkan pilih pegawai lain!'
	];

		 $validatedData = $request->validate([
        			'nama' => 'unique:auditee',
        			
        			
    ],$messagess);

		 // return $request->lokasi_audit;

         $auditee = new auditee;
         $auditee->nama = $request->nama;
         $auditee->lokasi_auditee= $request->lokasi_audit;
        $auditee -> save();

        return redirect ('kepala/auditee');
    }


 public function destroyauditee($id)
    {
        $auditee = auditee::find($id);

    		$pesan= "$auditee->nama Mungkin Telah Diregistrasi Oleh Admin!";

    	try {
    		
	         $auditee->delete();
        return redirect ('kepala/auditee');
    	}

        catch(Exception $e)
        {
        	  Alert::error($pesan, ' Gagal Menghapus Auditee ')->autoclose(3500);
        		return redirect ('kepala/auditee');
        }

    }
   
}

