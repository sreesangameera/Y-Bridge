<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function spps(){
        return view('searchpps');      }

    public function sppi(){
        return view('searchppi');      }

    public function sppa(){
        return view('searchppa');      }

}
