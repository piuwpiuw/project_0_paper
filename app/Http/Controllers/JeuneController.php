<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jeune;
use App\info_gen;

use Illuminate\Support\Facades\DB;

// class JeuneController extends Controller
// {
//     public function index(){
//     	$jeune = DB::select('select * from jeunes where id = ?',[1] );
//     	$info = DB::select('select * from info_gen where id_jeune= ?',[1]);
//     	return view('infogen')->with('info_gen', $info)->with('jeune',$jeune);
//     }

//     public function updateFiche(Request $request){
//     	// $info = Jeune::where('id_jeune')->update(['nom_jeune' => $request['nom'], 'prenom_jeune' => $request['prenom']]);
//     	$date = date('Y-m-d H:i:s');
    	
//     	$info = DB::update('UPDATE info_gen SET civilite = "'.$request['civilite'].'" ,nom_jeune = "'.$request['nom'].'", prenom_jeune = "'.$request['prenom'].'",nomjeunefille_jeune = "'.$request['nomFille'].'",created_at = "'.$date.'",datenaissance_jeune = "'.$request['date_naissance'].'",age_jeune = "'.$request['age'].'",lieunaissance_jeune = "'.$request['lieu_naissance'].'",adresse_jeune = "'.$request['adresse'].'",cp_jeune = "'.$request['cp'].'",ville_jeune = "'.$request['ville'].'",telfixe_jeune = "'.$request['fixe'].'",telportable_jeune = "'.$request['portable'].'" WHERE id_jeune = ?', [1]);
//     	return $info;


class JeuneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view ('jeune.index');
    }
    public function home (){
        $jeune = session('user');
        $info = info_gen::where('id_jeune', $jeune->id)->first();
        if($info == NULL){
            info_gen::create([
                'civilite' => NULL,
                'nom_jeune' => NULL,
                'nomjeunefille_jeune' => NULL,
                'prenom_jeune' => NULL,
                'telfixe_jeune' => NULL,
                'telportable_jeune' => NULL,
                'datenaissance_jeune' => NULL,
                'age_jeune' => NULL,
                'lieunaissance_jeune' => NULL,
                'adresse_jeune' => NULL,
                'cp_jeune' => NULL,
                'ville_jeune' => NULL,
                'nationalite_jeune' => NULL,
                'titresejour_jeune' => NULL,
                'datevaliditesejour_jeune' => NULL,
                'numero_pole_emploi' => NULL,
                'situation_actuelle_jeune' => NULL,
                'dategroupement_jeune' => NULL,
                'lien_signature_jeune' => NULL,
                'creation_entreprise' => NULL,
                'renseignement_createur' => NULL,
                'id_jeune' => $jeune->id
            ]);
            $info = info_gen::where('id_jeune', $jeune->id)->first();
        }

        return view ('jeune.home')->with('user',session('user'))->with('info',$info);
    }
    // en cas d'erreur
    public function error ($errorMessage){
        return view ('error')->with ('errorMessage', $errorMessage);
    }
    // le jeune se logue
    public function login(){
        return view ('jeune.login');
    }
    public function validLogin(Request $request){
        $jeune = Jeune::where ('mail_jeune', $request->mail_jeune)->first();
        if ($jeune == NULL)
            return $request->mail_jeune;
        else{
            $password = $jeune->password_jeune;
            if ($password != $request->password_jeune)
                return redirect()->action ('JeuneController@error', ['errorMessage' => 'Le mot de passe ne correspond pas au mail']);
            else{
                session(['user'=> $jeune]);
                return redirect()->action ('JeuneController@home');
            } 
        }
    }
    // creer un jeune
    public function create(){
        return view ('jeune.create');
    }
    public function store(Request $request){
        /*
         id_conseiller sera l'id du conseiller qui creer le compte
        ne sachant qu'en faire, je le traite comme un champ ordinaire
        */
        // verifier si l'email est deja utilise dans la bdd
        $jeuneList = Jeune::where ('mail_jeune', 'LIKE', $request->mail_jeune)->get();
        $nbYoung = count ($jeuneList);
        if ($nbYoung >0){
            return redirect()->action ('JeuneController@error', ['errorMessage' => 'Un jeune utilise deja ce mail']);
        }
        else{
           
            $jeune = Jeune::create ([
                'mail_jeune'        => $request->mail_jeune,
                'password_jeune'    => str_random(6),
                'id_conseiller'     => session('user')->id
            ]);
            return view('layouts.dashboard-conseiller.nouvel-inscrit');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function updateFiche(Request $request){
     $date = date('Y-m-d H:i:s');
    info_gen::where('id_jeune',session('user')->id)->update([
                'civilite' => $request['civilite'],
                'nom_jeune' => $request['nom'],
                'nomjeunefille_jeune' => $request['nomFille'],
                'prenom_jeune' => $request['prenom'],
                'telfixe_jeune' => $request['fixe'],
                'telportable_jeune' => $request['portable'],
                'datenaissance_jeune' => $request['date_naissance'],
                'age_jeune' => $request['age'],
                'lieunaissance_jeune' => $request['lieu_naissance'],
                'adresse_jeune' => $request['adresse'],
                'cp_jeune' => $request['cp'],
                'ville_jeune' => $request['ville']
            ]);
    return redirect()->action ('JeuneController@home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        //
    }
}
