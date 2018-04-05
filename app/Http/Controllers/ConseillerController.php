<?phpnamespace App\Http\Controllers;use Illuminate\Http\Request;
use App\conseiller;class conseillerController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       //
   }    /**
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
   }    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
       //
   }    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
       //
   }    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, $id)
   {
       //
   }    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       //
   }
}