<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD

class Conseiller extends Model
{
     protected $fillable = [
        'mail_conseiller', 'password_conseiller','nom_conseiller','prenom_conseiller','tel_conseiller','id_sadmin'
    ];
}
=======
use App\Jeune;

class Conseiller extends Model
{
	// les champs a modifier
	protected $fillable = array('mail_conseiller', 'password_conseiller', 'nom_conseiller', 'prenom_conseiller', 'tel_conseiller', 'id_sadmin');
	// le jeune n'a qu'un conseiller
	public function jeune(){
		return $this->hasMany ('Jeune');
	}
}
>>>>>>> 47aff716a246693742b18da5c579f0ebe9896a0d
