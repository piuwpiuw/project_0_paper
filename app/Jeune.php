<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
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

