<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venue;


class VenueController extends Controller
{
    //

public function index(){
    $venue_list= Venue::all();
   return view('homepage',compact('venue_list'));
}

public function add_venue(){
    return view("add_venue");
}

public function list(){
    $venue_list= Venue::all();
    return view('venue_list',compact('venue_list'));  
    // return view('venue_list');  
}

public function add_venue_form(){
    return view('add_venue');
}

public function save_venue(Request $request){


    Venue::create($request->all());
    $venue_list= Venue::all();
    session()->put('msg','save successfully');
    return redirect('venue_list');

    
}

// public function destroy(Venue  $id){
public function destroy($id){
 
    if(Venue::destroy($id)){
        return redirect('add_venue')->with('success', 'The image has been successfully deleted!');
    }else{
        return redirect('add_venue')->with('error', 'Please try again!');

    }


}

public function details(Venue $request, $id){

    $venue_list= Venue::find($id);
    return view('venue_details',compact('venue_list'));

}


public function update_venue(Request $request){

    $venue = Venue::find($request->id);

    $venue->surname = $request->surname;
    $venue->road = $request->road;
    $venue->house_no = $request->house_no;
    $venue->post_code = $request->post_code;
    $venue->place= $request->place;
    $venue->country = $request->country;
    $venue->phone = $request->phone;
    $venue->email = $request->email;
    $venue->website = $request->website;
    $venue->owner = $request->owner;
    $venue->bookable = $request->bookable;
    $venue->map = $request->map;
    
    $venue->update();
    return redirect('venue_list');
        
}

public function apilist(){
    return Venue::all();
}


public function edit_venue($id){
    
    $venue_list= Venue::find($id);
    return view('edit_venue',compact('venue_list'));
    
   

}




}
