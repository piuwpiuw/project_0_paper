<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conseiller extends Model
{
     protected $fillable = [
        'mail_conseiller', 'password_conseiller','nom_conseiller','prenom_conseiller','tel_conseiller','id_sadmin'
    ];
}
