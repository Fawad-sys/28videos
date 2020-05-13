<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form(Request $request){
        $request->validate([
            "name" => "required"
        ]);
        //return $request->input();

        $request->session()->flash('msg','Submit Successful');
        return redirect('/');

    }

    public function file(Request $req){
        $path = $req->file('name');
        return['path'=>$path, 'upload'=>'Success'];
    }
}
