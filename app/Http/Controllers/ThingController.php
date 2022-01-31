<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\thing;
use App\Models\place;
use App\Models\User;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use App\Models\using;
use Illuminate\Support\Facades\Cache;

class ThingController extends Controller
{
    // public function __invoke(){
    //     $things = DB::table('things')->paginate(15);
    //     return view("thing.index",["things"=>$things]);
    // }

    public function formThing(){

        $user=auth()->user();
        $things=$user->things()->get();
         $places = Cache::rememberForever('places1', function() {return place::all();});
        //  $places=place::all();
        $users=User::all();
        return view("thingPage",["things"=>$things,"places"=>$places,"users"=>$users]);
    }

    public function newThing(Request $request){
        if ($request['wrnt']){
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'wrnt' => 'required|date',
        ]);
        
        $user=auth()->user();
        $user->things()->create([
            'name' => $request->name,
            'description' => $request->description,
            'wrnt' => $request->wrnt,
        ]);
        $thingData=thing::where("name",$request->name);
        $thisThing=$thingData->first();
        using::create([
             'user_id' => $user->id,
            'place_id' => 1000,
            'thing_id' => $thisThing['id'],
        ]);

        return back()->with('status','created');
    }
    elseif ($request['work']){
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'repair' => 'required',
            'work' => 'required',
        ]);
        
        place::create([
            'name' => $request->name,
            'description' => $request->description,
            'repair' => $request->repair,
            'work' => $request->work,
        ]);
        return back()->with('status','created');
    }
    elseif ($request['email']){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password'=>['required',Password::min(5)],
        ]);
        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password'=>Hash::make($request->password)
        ]);
        return back()->with('status','created');
    }
    }


    

}
