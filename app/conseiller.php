<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class conseiller extends Model
{
	// les champs a modifier
    protected $fillable = array('mail_conseiller', 'password_conseiller', 'nom_conseiller', 'prenom_conseiller', 'tel_conseiller', 'id_sadmin');
    
}
