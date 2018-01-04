<?php

namespace App\Http\Controllers;

use App\Personne;
use App\Http\Controllers\Controller;

class PersonneController extends Controller
{
  
  public function getIndex(){
    return view('personne.profile');
  }
  
}
