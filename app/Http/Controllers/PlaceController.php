<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PlaceController extends Controller
{
    public function __invoke(){
        $place = DB::table('place')->paginate(15);
        return view("place.index",["place"=>$place]);
    }
}
