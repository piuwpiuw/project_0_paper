<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\conseiller;
use App\Jeune;
use App\info_gen;
use Illuminate\Support\Facades\DB;

class conseillerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $value = session('user');
        
        return view('add_conseiller')->with('session', $value);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
   {
            conseiller::create([
            'mail_conseiller' => $request['mail_conseiller'],
            'password_conseiller' => bcrypt($request['password_conseiller']),
            'nom_conseiller' => $request['nom_conseiller'],
            'prenom_conseiller' => $request['prenom_conseiller'],
            'tel_conseiller' => $request['tel_conseiller'],
            'id_sadmin' => $request['id_sadmin'],
        ]);
        return view ('contact')->with('info',$request);
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function connect(){
        return view('login');
    }

    public function login(Request $request){
        $typeMail = stripos($request['mail'],"mdef-senart");
        echo $typeMail;
        if($typeMail != NULL){
            $user = conseiller::where('mail_conseiller',$request['mail'])->first();
            if($user != NULL){
                if(password_verify($request['password'],$user->password_conseiller)){
                    session(["user" => $user]);
                    return redirect('/conseiller/dashboard_jeunes');
                }
                else{
                    return 'bad mdp';
                } 
            }
            else{
                return 'utilisateur pas trouvé';
            }
        }
        else{
            $jeune = Jeune::where ('mail_jeune', $request['mail'])->first();
            if ($jeune == NULL)
                return $request['mail'];
            else{
                $password = $jeune->password_jeune;
                if ($password != $request['password'])
                    return redirect()->action ('JeuneController@error', ['errorMessage' => 'Le mot de passe ne correspond pas au mail']);
                else{
                    session(['user'=> $jeune]);
                    return redirect()->action ('JeuneController@home');
                } 
            }
        }      
    }

    public function dashboard(){
        $session = session('user');
        $jeunes = DB::table('jeunes')
                ->join('info_gens', 'jeunes.id', '=', 'info_gens.id_jeune')
                ->join('conseillers', 'jeunes.id_conseiller', '=', 'conseillers.id')
                ->select('jeunes.*','info_gens.*', 'conseillers.nom_conseiller')
                ->get();
        return view('pages.dashboard-conseiller')->with('zbla',$session)->with('jeunes',$jeunes);
        // $zeropaper = DB::table('jeunes') ->leftJoin('mail_jeune', '=', 'jeunes.mail_jeune') ->get();
    }

}
