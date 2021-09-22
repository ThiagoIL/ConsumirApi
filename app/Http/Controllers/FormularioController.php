<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
  public function index(Request $request){
      $cep = $request->cep;

     $url = "https://viacep.com.br/ws/$cep/json/";
     $json = json_decode(file_get_contents($url));
    
     

     return view('list', ['dados'=>$json]);
  }
 
}
