<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function view(){
        $d = ['name' => 'Waqar',
               'email' => 'email.test',
               'address' => 'shaheen colony' 
    ];
        return view('conview',['data' => $d]);
    }
}
