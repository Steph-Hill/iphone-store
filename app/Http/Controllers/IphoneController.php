<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class IphoneController extends Controller
{
    //
    public function index(){

        $phones=Produit::all();

        return view('accueil',compact('phones'));
    }
}
