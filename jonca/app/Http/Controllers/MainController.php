<?php

namespace App\Http\Controllers;
use File;
use stdClass;
use App\Classes\Common;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Artisan;
use Symfony\Component\Console\Output\ConsoleOutput;

class MainController extends Controller
{
    
    public function caAnnee(Request $request){
        
        $filePath = resource_path()."\js\json";

        $rannee=$request->input('anneE');
        $annee=implode(" ",$rannee);
        //print_r($rannee);

        //diff boolean
        $rdiff=$request->all('difF');
        $diff=implode(" ",$rdiff);
      
        //filtre string
        $rfiltree=$request->input('filtrE');
        $filtre=Common::arrtstr($rfiltree);
       
        //categorie string
        $rcatege=$request->input('cateG');
        $categ =Common::arrtstr($rcatege);
       
        //select table string
        $table=$request->input('tablE');
        $table =implode(" ",$table);

        //covid string
        $covid=$request->input('coviD');
        //$covid=implode(" ",$covid);

        //client string
        $client=$request->input('clienT');
        $client=implode(" ",$client);

        //mois string
        $rmois=$request->input('moiS');
        $mois=Common::arrtstr($rmois);
       
        //departement string
        $rdep =$request->input('deparT');
        $depart=Common::arrtstr($rdep);

       //detect if variable $annee is empty
       if (empty($annee)) {
        $query2 = "ANNEE";
        $query3 = " ";
        switch ($table) {
          case "FAMILLE":
            $m = " ";
              $fileName = $filePath.'\depfile2.json';
            break;
          case "REPRESENTANT":
            $m = " ";
              $fileName = $filePath.'\repfile.json';
            break;
          case "AXE":
            $m = " ";
              $fileName = $filePath.'\regfile.json';
            break;
            case "SSFAMILLE":
              $m = " ";
              $fileName = $filePath.'\catfile.json';
            break;
            case "MOIS":
              $m = "LEMOIS,";
              $fileName = $filePath.'\moisfile.json';
            break;
        }
      } else{
        $query2 = "SEMAINE";
        $query3 = " ANNEE = ".$annee." and ";
        switch ($table) {
          case "FAMILLE":
              $m = " ";
              $fileName = $filePath.'\depfilem.json';
            break;
          case "REPRESENTANT":
              $m = " ";
              $fileName = $filePath.'\repfilemois.json';
            break;
          case "AXE":
              $m = " ";
              $fileName = $filePath.'\regfilem.json';
            break;
            case "SSFAMILLE":
              $m = " ";
              $fileName = $filePath.'\catfilem.json';
            break;
            case "MOIS":
              $m = "LEMOIS,";
              $fileName = $filePath.'\moisfilem.json';
            break;
        }
      }

        //Requete SQL
        //$query = "SELECT ".$table.", FLOOR(sum(MONTANT)) Montant,ANNEE Annee from dba.RBPlvXXXACView where  FILTRE in (".$filtre.") and FAMILLE in (".$depart.") and SSFAMILLE in (".$categ.") and CLIENT not in ('".$client."') and COVID = '".$covid."' and MOIS in (".$mois.")group by ".$table.", ANNEE order by ".$table.", ANNEE ";
        $query = "SELECT ".$table.", ";
        $query .= "FLOOR(sum(MONTANT)) Montant, ";
        $query .= $query2;
        $query .= " from ";
        $query .= "dba.RBPlvXXXACView ";
        $query .= "where  ";
        $query .=  $query3;
        $query .= "FILTRE in (".$filtre.") ";
        $query .= "and FAMILLE in (".$depart.") ";
        $query .= "and SSFAMILLE in (".$categ.") ";
        $query .= "and CLIENT not in ('".$client."') ";
        $query .= "and COVID = '".$covid."' ";
        $query .= "and MOIS in (".$mois.")";
        $query .= "group by ";
        $query .= $table.", ";
        $query .= $m;
        $query .= $query2;
        $query .= " order by ";
        $query .= $m;
        $query .= $query2.", ";
        $query .= $table;


        $RC = DB::connection('sqlanywhere')->select($query);
        $RC = json_encode($RC);

        //read content file
        $aData  = json_decode(file_get_contents($fileName),true);
          
          if(filter_var($diff,FILTER_VALIDATE_BOOLEAN)){
             $aData['RC'] = $RC;
             
          } else{
           $aData['GLOBAL'] = $RC;
           
          }
          //$fileName = $filePath.'\moisfilem.json';
          //put request SQL on the JSON data 
          File::put($fileName, json_encode($aData));
         return response()->json($RC);
    }

    public function cronCa(){
      $filePath = resource_path()."\js\json";
      $students = json_decode(file_get_contents( resource_path().'\js\json\default.json'), true);
     
        $filtre = Common::arrtstr($students['FILTRE']);
        $covid = $students['COVID'];
        $client = Common::arrtstr($students['CLIENT']);
        $depart = Common::arrtstr($students['DEPARTEMENT']);
        $categRC = Common::arrtstr($students['CATEGORIERC']);
        $categG = Common::arrtstr($students['CATEGORIEG']);
        
        $moisencours= $students['MOIS'][date("n")-1];
        $typecategorie = array('RC', 'GLOBAL');
        $table = array('FAMILLE','REPRESENTANT','AXE','SSFAMILLE', 'MOIS');
        $tabledate = array('ANNEE','SEMAINE');
        for ($i = 0; $i < count($table); $i++) {
          //echo $table[$i]."</br>";
          for($j=0; $j < count($tabledate); $j++){
            //$table[$i] === 'MOIS' ? $m = "LEMOIS ," : $m =" ";
            if($tabledate[$j] === 'ANNEE'){
              $query3 = " ";
              $mois = Common::arrtstr($students['MOIS']);
              switch ($table[$i]) {
                case "FAMILLE":
                  $m = " ";
                    $fileName = $filePath.'\depfile2.json';
                  break;
                case "REPRESENTANT":
                  $m = " ";
                    $fileName = $filePath.'\repfile.json';
                  break;
                case "AXE":
                  $m = " ";
                    $fileName = $filePath.'\regfile.json';
                  break;
                  case "SSFAMILLE":
                    $m = " ";
                    $fileName = $filePath.'\catfile.json';
                  break;
                  case "MOIS":
                    $m = "LEMOIS,";
                    $fileName = $filePath.'\moisfile.json';
                  break;
              }
            } else{
              $query3 = " ANNEE = 2023 and ";
              $mois = "'".$moisencours."'";
              switch ($table[$i]) {
                case "FAMILLE":
                    $m = " ";
                    $fileName = $filePath.'\depfilem.json';
                  break;
                case "REPRESENTANT":
                    $m = " ";
                    $fileName = $filePath.'\repfilemois.json';
                  break;
                case "AXE":
                    $m = " ";
                    $fileName = $filePath.'\regfilem.json';
                  break;
                  case "SSFAMILLE":
                    $m = " ";
                    $fileName = $filePath.'\catfilem.json';
                  break;
                  case "MOIS":
                    $m = "LEMOIS,";
                    $fileName = $filePath.'\moisfilem.json';
                  break;
              }
            }
            //echo $tabledate[$j]."</br>";
            for($e=0;$e<count($typecategorie);$e++){
              //echo $typecategorie[$e]. "</br>";
              if($typecategorie[$e]=== 'RC'){
                $categorie = $categRC;
              } else{
                $categorie = $categG;
              }
                $queryt = "SELECT ".$table[$i].", ";
                $queryt .= "FLOOR(sum(MONTANT)) Montant, ";
                $queryt .= $tabledate[$j];
                $queryt .= " from ";
                $queryt .= "dba.RBPlvXXXACView ";
                $queryt .= "where  ";
                $queryt .=  $query3;
                $queryt .= "FILTRE in (".$filtre.") ";
                $queryt .= "and FAMILLE in (".$depart.") ";
                $queryt .= "and SSFAMILLE in (".$categorie.") ";
                $queryt .= "and CLIENT not in (".$client.") ";
                $queryt .= "and COVID = '".$covid."' ";
                $queryt .= "and MOIS in (".$mois.")";
                $queryt .= " group by ".$table[$i].", ";
                $queryt .= $m;
                $queryt .= $tabledate[$j];
                $queryt .= " order by ";
                $queryt .= $m;
                $queryt .= $table[$i].", ";
                $queryt .= $tabledate[$j];
                //echo $queryt."</br>";
                $result = DB::connection("sqlanywhere")->select($queryt);
                $result = json_encode($result); 

                $aData  = json_decode(file_get_contents($fileName),true);
               // print_r($aData);
                  if($typecategorie[$e] === 'RC'){
                   $aData["RC"] = $result;
                  } else{
                    $aData["GLOBAL"] = $result;
                  }
                $resarray = $aData;
                
                File::put($fileName, json_encode($resarray));
            }
          }
        }
        echo 'CA mise à jour reussi';
        Log::info('CA mise à jour reussi');
      return response()->json( $resarray);
    }


    public function topten(Request $request){
      $filtre = $request->all('filtretopteN');
      $filtre=implode(" ",$filtre);

      $Year = date("Y");
      if($filtre === "11" || $filtre === "21"){
        $nom = "ARTICLE";
        $fileName = resource_path().'\js\json\toptenart.json';
      } else if($filtre === "12"|| $filtre === "22"){
        $nom = "CLIENT";
        $fileName = resource_path().'\js\json\toptencli.json';
      } else if($filtre === "13" || $filtre === "23"){
        $nom = "FOURNISSEUR";
        $fileName = resource_path().'\js\json\toptenfou.json';
      }
      
      //$query = "select distinct COL1 as ".$nom.",floor(N8) as '".($Year-8)."',floor(N7) as '".($Year-7)."',floor(N6) as '".($Year-6)."',floor(N5) as '".($Year-5)."',floor(N4) as '".($Year-4)."',floor(N3) as '".($Year-3)."',floor(N2) as '".($Year-2)."',floor(N1) as '".($Year-1)."',floor(N0) as '".($Year)."',floor(EN_AR) as 'AR',floor(POUR*100) as 'percent'  from dba.RBPlvXXXAAView where FILTRE='".$filtre."' order by floor(N0) DESC";
      $query = "select distinct COL1 as ";
      $query .= $nom.", ";
      for ($i = 0; $i <= ($Year-2015); $i++) {
        $query .= " floor(N".$i.") as '".($Year-$i)."', ";
      }
      $query .="floor(EN_AR) as 'AR', ";
      $query .="floor(POUR*100) as 'percent'";
      $query .="  from dba.RBPlvXXXAAView ";
      $query .="where ";
      $query .="FILTRE='".$filtre."' ";
      $query .="order by ";
      $query .="floor(N0) DESC";

      $pivot = DB::connection("sqlanywhere")->select($query);
      $pivot = json_encode($pivot);
      
      $aData  = json_decode(file_get_contents($fileName),true);
       if($filtre == "11" || $filtre == "12" || $filtre == "13" ){
            $aData['RC'] = $pivot;
       } else if($filtre == "21" || $filtre == "22" || $filtre == "23" ){
            $aData['GLOBAL'] = $pivot;
       }
      File::put($fileName, json_encode($aData));
      return response()->json($pivot);
    }

    public function toptenCron(){
      $filtre = array("11","12","13","21","22","23");
      //print_r($filtre[0]);
      $Year = date("Y");
      for($i=0;$i<count($filtre); $i++){
        echo $filtre[$i]."</br>";
        if($filtre[$i] === "11" || $filtre[$i] === "21"){
          $nom = "ARTICLE";
          $fileName = resource_path().'\js\json\toptenart.json';
        } else if($filtre[$i] === "12"|| $filtre[$i] === "22"){
          $nom = "CLIENT";
          $fileName = resource_path().'\js\json\toptencli.json';
        } else if($filtre[$i] === "13" ||$filtre[$i] === "23"){
          $nom = "FOURNISSEUR";
          $fileName = resource_path().'\js\json\toptenfou.json';
        }
        echo $nom."</br>";
        //$query = "select distinct COL1 as ".$nom.",floor(N8) as '".($Year-8)."',floor(N7) as '".($Year-7)."',floor(N6) as '".($Year-6)."',floor(N5) as '".($Year-5)."',floor(N4) as '".($Year-4)."',floor(N3) as '".($Year-3)."',floor(N2) as '".($Year-2)."',floor(N1) as '".($Year-1)."',floor(N0) as '".($Year)."',floor(EN_AR) as 'AR',floor(POUR*100) as 'percent'  from dba.RBPlvXXXAAView where FILTRE='".$filtre."' order by floor(N0) DESC";
        $query = "select distinct COL1 as ";
        $query .= $nom.", ";
        for ($j = 0; $j <= ($Year-2015); $j++) {
          $query .= " floor(N".$j.") as '".($Year-$j)."', ";
        }
        $query .="floor(EN_AR) as 'AR', ";
        $query .="floor(POUR*100) as 'percent'";
        $query .="  from dba.RBPlvXXXAAView ";
        $query .="where ";
        $query .="FILTRE='".$filtre[$i]."' ";
        $query .="order by ";
        $query .="floor(N0) DESC";
        echo $query."</br>";
        $pivot = DB::connection("sqlanywhere")->select($query);
        $pivot = json_encode($pivot);
        print_r($pivot);
        $aData  = json_decode(file_get_contents($fileName),true);
         if($filtre[$i] == "11" || $filtre[$i] == "12" || $filtre[$i] == "13" ){
              $aData['RC'] = $pivot;
         } else if($filtre[$i] == "21" || $filtre[$i] == "22" || $filtre[$i] == "23" ){
              $aData['GLOBAL'] = $pivot;
         }
         $array = $aData;
        File::put($fileName, json_encode($array));
        
      }
      echo 'CA TopTen mise à jour reussi';
      Log::info('CA TopTen mise à jour reussi');
      return response()->json($pivot);
    }

    public function DefaultList(){
      $filePath = resource_path()."\js\json\defaultList.json";
      $client = DB::connection("sqlanywhere")->select("select distinct CliLib as Client from dba.CLI where isnull(CliLib,'')<>'' order by left(CliLib,2) ASC");
      $client = json_encode($client); 

      $filtre = DB::connection("sqlanywhere")->select("select distinct FILTRE as Filtre from dba.RBPlvXXXACView where isnull(FILTRE,'')<>'' order by left(FILTRE,2) ASC");
      $filtre = json_encode($filtre); 

      $depart = DB::connection("sqlanywhere")->select("select distinct FAMILLE as Departement from dba.RBPlvXXXACView where isnull(FAMILLE,'')<>'' order by left(FAMILLE,2) ASC");
      $depart = json_encode($depart); 

      $categories = DB::connection("sqlanywhere")->select("select distinct ArtCollectEnu as Categorie from dba.ART where isnull(ArtCollectEnu,'')<>'' order by left(ArtCollectEnu,2) ASC");
      $categories = json_encode($categories);

      $result = [
        "CLIENT" => $client,
        "FILTRE" => $filtre,
        "DEPARTEMENT" => $depart,
        "CATEGORIE" => $categories,
      ];

      File::put($filePath, json_encode($result));
        
      
      return response()->json($result);
    }

    public function pardefaut(Request $request){
      $fileName = resource_path()."\js\json\default.json";
    
      //filtre string
      $rfiltree=$request->input('FILTRE');
    
      //covid string
      $covid=$request->input('COVID');
      $covid=implode(" ",$covid);

      //client string
      $client=$request->input('CLIENT');
     
      //mois string
      $rmois=$request->input('MOIS');
    
      //annee string
      $annee=$request->input('ANNEE');
  
      //departement string
      $rdep =$request->input('DEPARTEMENT');

      $categrc = $request->input('CATEGORIERC');
      //$categrc=Common::arrtstr($categrc);

      $categg = $request->input('CATEGORIEG');
      //$categg=Common::arrtstr($categg);
      $aData  = json_decode(file_get_contents($fileName),true);
      if($type === 'rc'){
          $aData['RC']=[
                  "type" => $type,
                  "FILTRE" => $rfiltree,
                  "COVID" => $covid,
                  "CLIENT" => $client,
                  "DEPARTEMENT" => $rdep,
                  "CATEGORIERC" => $categrc,
                  "ANNEE" =>  $annee,
                  "MOIS" => $rmois
              ];
      } else if ($type === 'global') {
          $aData['GLOBAL']=[
              "type" => $type,
              "FILTRE" => $rfiltree,
              "COVID" => $covid,
              "CLIENT" => $client,
              "DEPARTEMENT" => $rdep,
              "CATEGORIEG" => $categg,
              "ANNEE" =>  $annee,
              "MOIS" => $rmois
          ];
      }      
      $result=$aData;
      File::put($fileName, json_encode($result));
         return response()->json($result);
    }

    public function test(){
      //$client = DB::connection("mysql")->select("select * from users");
      //$client = auth()->guest();
      $fileName = resource_path();
      //dd($client);
      //echo HomeController::pardefaut();
    }

  }
