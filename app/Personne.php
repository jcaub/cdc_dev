<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    protected $table="personnes";
    protected $primaryKey = 'id_personne';
}
