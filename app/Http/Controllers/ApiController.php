<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index(){
        //return view('api');
        $data=Http::get('http://jsonplaceholder.typicode.com/posts')->json();
        return view('api',['data' => $data]);
    }
}
