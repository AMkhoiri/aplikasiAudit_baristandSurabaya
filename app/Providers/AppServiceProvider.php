<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


use App\LKS;
use App\tindakan;
use DB;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Carbon\Carbon::setLocale('id');


        view()->composer('landing-page', function ($view)
        {
            $pengumuman = request()->pengumuman();

            $view->with('pengumuman', $pengumuman);
        });


         view()->composer('auditor.headerauditor', function ($view)
        {

            $lokasi = Auth::user()->lokasi;
           
            $tindakanlks = DB::table( 'tindakan')
                         ->join ('lks' , 'tindakan.id_lks', '=' , 'lks.id')
                         ->select('lks.nolks','lks.id','lks.acuan','lks.deskripsi','lks.iec_2012','lks.iec_2015','lks.iec_2017','lks.smm','lks.created_at','lks.updated_at', 'lks.status', 'lks.lokasi', 'tindakan.*')
                         ->where('tindakan.lokasi', $lokasi)
                          ->Where('tindakan.status_tindakan','Terkirim')
                          
                         ->get()->count();

            $view->with('tindakanlks', $tindakanlks);
        });

          view()->composer('auditee.headerauditee', function ($view)
        {

           $lokasi = Auth::user()->lokasi;
           
           $lkstotal=LKS::where('lokasi',$lokasi)->where('status','Terkirim')->get()->count();

            $view->with('lkstotal', $lkstotal);
        });


         view()->composer('auditee.headerauditee', function ($view)
        {

           $lokasi = Auth::user()->lokasi;
           
           $tindakantotal=tindakan::where('lokasi',$lokasi)->where('status_tindakan','dikembalikan')->get()->count();

            $view->with('tindakantotal', $tindakantotal);
        });




         // arsip header


          view()->composer('auditor.headerarsip', function ($view)
        {

            $lokasi = Auth::user()->lokasi;
           
            $tindakanlks = DB::table( 'tindakan')
                         ->join ('lks' , 'tindakan.id_lks', '=' , 'lks.id')
                         ->select('lks.nolks','lks.id','lks.acuan','lks.deskripsi','lks.iec_2012','lks.iec_2015','lks.iec_2017','lks.smm','lks.created_at','lks.updated_at', 'lks.status', 'lks.lokasi', 'tindakan.*')
                         ->where('tindakan.lokasi', $lokasi)
                          ->Where('tindakan.status_tindakan','Terkirim')
                          
                         ->get()->count();

            $view->with('tindakanlks', $tindakanlks);
        });

          view()->composer('auditee.headerarsip', function ($view)
        {

           $lokasi = Auth::user()->lokasi;
           
           $lkstotal=LKS::where('lokasi',$lokasi)->where('status','Terkirim')->get()->count();

            $view->with('lkstotal', $lkstotal);
        });


         view()->composer('auditee.headerarsip', function ($view)
        {

           $lokasi = Auth::user()->lokasi;
           
           $tindakantotal=tindakan::where('lokasi',$lokasi)->where('status_tindakan','dikembalikan')->get()->count();

            $view->with('tindakantotal', $tindakantotal);
        });







    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
