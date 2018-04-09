<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Conseiller extends Model
{
     protected $fillable = [
        'mail_conseiller', 'password_conseiller','nom_conseiller','prenom_conseiller','tel_conseiller','id_sadmin'
    ];
}

// use App\Jeune;

// class Conseiller extends Model
// {
// 	// les champs a modifier
// 	protected $fillable = array('mail_conseiller', 'password_conseiller', 'nom_conseiller', 'prenom_conseiller', 'tel_conseiller', 'id_sadmin');
// 	// le jeune n'a qu'un conseiller
// 	public function jeune(){
// 		return $this->hasMany ('Jeune');
// 	}
// }

