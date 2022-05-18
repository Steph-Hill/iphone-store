<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    //
    public function index(){

            $formations = Formation::Paginate(2);

        return view("relation",compact("formations"));

    }

    public function detail($id=0){

        $formation = Formation::Find($id);

        return view("detail",compact("formation"));
    }
}
