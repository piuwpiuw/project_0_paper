<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jeune;

class JeuneController extends Controller
{
    // en cas d'erreur
    public function error ($errorMessage){
        return view ('commun.error')->with ('errorMessage', $errorMessage);
    }
    // le jeune se logue
    public function login(){
        return view ('commun.login');
    }
    public function validLogin(Request $request){
        $jeuneList = Jeune::where ('mail_jeune', 'LIKE', $request->mail)->get();
        $nbYoung = count ($jeuneList);
        if ($nbYoung ==0)
            return redirect()->action ('JeuneController@error', ['errorMessage' => "Aucun jeune n'est identifie avec ce mail"]);
        else{
            $password = $jeuneList[0]->password_jeune;
            if ($password != $request->password)
                return redirect()->action ('JeuneController@error', ['errorMessage' => 'Le mot de passe ne correspond pas au mail']);
            // seul l'id du jeune est passe
            else return redirect()->action ('JeuneController@show', ['jeune' => $jeuneList[0]]);
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
                'id_conseiller'     => $request->id_conseiller,
                'mail_jeune'        => $request->mail_jeune,
                'password_jeune'    => $request->password_jeune
            ]);
            // seul l'id du jeune est passe
            return redirect()->action ('JeuneController@show', ['jeune' => $jeune]);
        }
    }
    // afficher le profil du jeune
    // TODO extraire le nom du conseiller a partir de son id
    public function show ($idJeune){
        $jeuneList = Jeune::where ('id', 'LIKE', $idJeune)->get();
        $nbYoung = count ($jeuneList);
        if ($nbYoung ==0)
            return redirect()->action ('JeuneController@error', ['errorMessage' => "Le jeune n° $idJeune n'a pas ete trouve dans la bdd"]);
        else{
            $jeune = $jeuneList[0];
            return view ('jeune.home')->with ('jeune', $jeune);
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        return view ('jeune.edit');
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
