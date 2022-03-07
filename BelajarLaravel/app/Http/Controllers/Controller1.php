<?php

namespace App\Http\Controllers;

use App\Models\UnitCategory;
use Illuminate\Http\Request;

class Controller1 extends Controller
{
    public function posts2(){
        $v_navbar = ['tool1', 'tool2', 'tool3', 'tool4'];

        return view('posts.post-2')->with(['data1' => $v_navbar]);
    }

    public function posts3(){
        return view('posts.post-3');
    }

    //rquest berfungsi utk saveData
    public function saveData(Request $r){
        return $r->nama." ".$r->pass;
    }

    public function viewDB(){
        $kategori = UnitCategory::where('id', '=', 3)->get();

        return $kategori;
    }
    
}
