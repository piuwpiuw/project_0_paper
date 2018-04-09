<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD

class jeune extends Model
{
    protected $fillable = ['id','mail_jeune','id_connseiller'];
}
=======
use App\Conseiller;

class Jeune extends Model
{
	// les champs a modifier
	protected $fillable = array('mail_jeune', 'password_jeune', 'id_conseiller');
	// le jeune n'a qu'un conseiller
	public function advisor(){
		return $this->hasOne ('Conseiller');
	}
	/*
	// preciser la table associee au modele
	$table = 'jeune';
	*/
}
>>>>>>> 47aff716a246693742b18da5c579f0ebe9896a0d
