<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\thing;
use App\Models\place;
use App\Models\using;

class GiveController extends Controller
{
    public function __invoke(){
        $user=auth()->user();
        $things=$user->things()->get();
        $users=User::all();
        $places=place::all();
        $usings=using::all();
    return view("givePage",["things"=>$things,"users"=>$users,"places"=>$places,"usings"=>$usings]);
}

public function give(Request $request){
    $newrequest=$request->all();
    $userData=User::where("name",$newrequest['user'])->first();
    $thingData=thing::where("name",$newrequest['thing'])->first();
    $placeData=place::where("name",$newrequest['place'])->first();
    $usingsData=using::All();
    foreach($usingsData as $usingData){
        if($thingData['id'] == $usingData['thing_id']){
        $usingT = using::where('thing_id',$thingData['id'])->first();
        $usingT->user_id= $userData['id'];
        $usingT->place_id = $placeData['id'];
        $usingT->save();
        return back()->with('status','created');
        }
    }
    using::create([
        'user_id' => $userData['id'],
        'place_id' => $placeData['id'],
        'thing_id' => $thingData['id'],
    ]);
    return back()->with('status','created');
}

}
