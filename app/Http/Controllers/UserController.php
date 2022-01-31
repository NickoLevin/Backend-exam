<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __invoke(){
        $users = DB::table('users')->paginate(15);
        $things = DB::table('things')->paginate(15);
        $places = DB::table('places')->paginate(15);
        $using = DB::table('usings')->paginate(15);
        return view("userPage",["users"=>$users,"things"=>$things,"places"=>$places, "using"=>$using]);
    }
}
