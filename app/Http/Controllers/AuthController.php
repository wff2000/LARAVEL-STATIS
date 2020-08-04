<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form(){
        return view('form');
    }

    public function sapa(Request $request){
        return view('welcome', ['namaDepan'=>$request->fname,'namaBelakang'=>$request->lname]);
    }
}
