<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UsingController extends Controller
{
    public function __invoke(){
        $using = DB::table('using')->paginate(15);
        return view("using.index",["using"=>$using]);
    }
}
