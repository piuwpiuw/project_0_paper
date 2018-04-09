<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Jeune;

class JeuneController extends Controller
{
    // en cas d'erreur
    public function error ($errorMessage){
        return view ('commun.error')->with ('errorMessage', $errorMessage);
    }
    // la fiche d'acceuil
    public function reception ($idJeune){
        // find retrouve un jeune par son id
        $jeune = Jeune::find ($idJeune);
        if (! $jeune)
            return $this->error ("Le jeune n°$idJeune n'a pas ete trouve dans la bdd");
        else return view ('jeune.reception')->with ('$idJeune', $idJeune);
    }
    public function receptionFill ($idJeune){
        // pour que le jeune remplisse sa fiche
    }
    // apres le login
    // TODO extraire le nom du conseiller a partir de son id
    public function home ($idJeune){
        // find retrouve un jeune par son id
        $jeune = Jeune::find ($idJeune);
        if (! $jeune)
            return $this->error ("Le jeune n°$idJeune n'a pas ete trouve dans la bdd");
        else return view ('jeune.home')->with ('jeune', $jeune);
    }
    private function show ($jeune){
        if (! $jeune) return $this->error ("Le jeune n'a pas ete trouve");
        /* TODO
        verifier si le jeune a rempli sa fiche
            oui: l'ammenner vers la page home
            non: l'ammenner vers la page reception (fiche d'accueil)
        dans quelle table est la fiche d'accueil ?
        */
        else return redirect()->route ('jeuneHome', $jeune);
    }
    // le jeune se logue
    public function login(){
        return view ('commun.login');
    }
    public function validLogin(Request $request){
        $jeune = Jeune::where ('mail_jeune', 'LIKE', $request->mail)->first();
        if (! $jeune)
            return $this->error ("Aucun jeune n'est identifie avec ce mail");
        else{
            $password = $jeune->password_jeune;
            if ($password != $request->password)
                return $this->error ("Le mot de passe ne correspond pas au mail");
            else return $this->show ($jeune);
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
        $jeune = Jeune::where ('mail_jeune', 'LIKE', $request->mail)->first();
        if ($jeune)
            return $this->error ("Un jeune utilise deja ce mail");
        else{
            $jeune = Jeune::create ([
                'id_conseiller'     => $request->id_conseiller,
                'mail_jeune'        => $request->mail_jeune,
                'password_jeune'    => $request->password_jeune
            ]);
            return $this->show ($jeune);
        }
    }
}
