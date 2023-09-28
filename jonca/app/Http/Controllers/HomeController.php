<?php

namespace App\Http\Controllers;
use File;
use auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function pardefaut(Request $request){
        $user= Auth::user()->name;
        $fileNameusr = resource_path()."\js\json\UserFile\\".$user.".json";
        if (file_exists($fileNameusr)) {
            echo "Le fichier $fileNameusr existe.";
        } else {
            $createfileusr = file_put_contents($fileNameusr, "");
        }
        
        $type=$request->input('TYPE');
        // $fileName = resource_path()."\js\json\default.json";
      
        // //filtre string
         $rfiltree=$request->input('FILTRE');
      
        // //covid string
         $covid=$request->input('COVID');
         $covid=implode(" ",$covid);
  
        // //client string
         $client=$request->input('CLIENT');
       
        // //mois string
         $rmois=$request->input('MOIS');
         $moisdern=$request->input('MOISDERN');
        // //annee string
         $annee=$request->input('ANNEE');
    
        // //departement string
         $rdep =$request->input('DEPARTEMENT');
  
         $categrc = $request->input('CATEGORIERC');
        // //$categrc=Common::arrtstr($categrc);
  
        $categg = $request->input('CATEGORIEG');
        // //$categg=Common::arrtstr($categg);
        $aDatausr  = json_decode(file_get_contents($fileNameusr),true);
        if($type === 'rc'){
            $aDatausr['RC']=[
                    "type" => $type,
                    "FILTRE" => $rfiltree,
                    "COVID" => $covid,
                    "CLIENT" => $client,
                    "DEPARTEMENT" => $rdep,
                    "CATEGORIERC" => $categrc,
                    "ANNEE" =>  $annee,
                    "MOIS" => $rmois,
                    "MOISDERN" => $moisdern
                ];
        } else if ($type === 'global') {
            $aDatausr['GLOBAL']=[
                "type" => $type,
                "FILTRE" => $rfiltree,
                "COVID" => $covid,
                "CLIENT" => $client,
                "DEPARTEMENT" => $rdep,
                "CATEGORIEG" => $categg,
                "ANNEE" =>  $annee,
                "MOIS" => $rmois,
                "MOISDERN" => $moisdern
            ];
            
        }
        $resultusr=$aDatausr;
        File::put($fileNameusr, json_encode($resultusr));
        //$createfileusr = file_put_contents($fileNameusr, json_encode($resultusr));
        
        return $resultusr;
      }

     
}
