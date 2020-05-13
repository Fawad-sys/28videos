<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class DbController extends Controller
{
    public function index(){
        return DB::table('users')->max('id');
    }

    public function database(){
        $data = DB::table('users')->paginate('1');
        return view('database',['data' => $data]);
    }

    public function model(){
        return User::count();
    }
}
