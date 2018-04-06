<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jeune;
use Illuminate\Support\Facades\DB;

class JeuneController extends Controller
{
    public function index(){
    	$jeune = DB::select('select * from jeunes where id = ?',[1] );
    	$info = DB::select('select * from info_gen where id_jeune= ?',[1]);
    	return view('infogen')->with('info_gen', $info)->with('jeune',$jeune);
    }

    public function updateFiche(Request $request){
    	// $info = Jeune::where('id_jeune')->update(['nom_jeune' => $request['nom'], 'prenom_jeune' => $request['prenom']]);
    	$date = date('Y-m-d H:i:s');
    	
    	$info = DB::update('UPDATE info_gen SET civilite = "'.$request['civilite'].'" ,nom_jeune = "'.$request['nom'].'", prenom_jeune = "'.$request['prenom'].'",nomjeunefille_jeune = "'.$request['nomFille'].'",created_at = "'.$date.'",datenaissance_jeune = "'.$request['date_naissance'].'",age_jeune = "'.$request['age'].'",lieunaissance_jeune = "'.$request['lieu_naissance'].'",adresse_jeune = "'.$request['adresse'].'",cp_jeune = "'.$request['cp'].'",ville_jeune = "'.$request['ville'].'",telfixe_jeune = "'.$request['fixe'].'",telportable_jeune = "'.$request['portable'].'" WHERE id_jeune = ?', [1]);
    	return $info;
    }
}
