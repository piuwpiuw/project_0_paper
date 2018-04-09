<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jeune;

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
        return view ('jeune.home');
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
        $jeuneList = Jeune::where ('mail_jeune', 'LIKE', $request->mail_jeune)->get();
        $nbYoung = count ($jeuneList);
        if ($nbYoung ==0)
            return redirect()->action ('JeuneController@error', ['errorMessage' => "Aucun jeune n'est identifie avec ce mail"]);
        else{
            $password = $jeuneList[0]->password_jeune;
            if ($password != $request->password_jeune)
                return redirect()->action ('JeuneController@error', ['errorMessage' => 'Le mot de passe ne correspond pas au mail']);
            else return redirect()->action ('JeuneController@home');
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
                'password_jeune'    => $request->password_jeune,
                'id_conseiller'     => $request->id_conseiller
            ]);
            return redirect()->action ('JeuneController@home');
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
    public function update(Request $request, $id){
        //
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
