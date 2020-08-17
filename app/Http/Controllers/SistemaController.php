<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SistemaController extends Controller
{
   public function indexSistema(){
       
       return view('sistema.indexSistema');
       
   }
   
   //to do buscar as quantidade em uma unica busca create view
}
