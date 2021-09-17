<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
class Countrycontroller extends Controller
{
    public function create(request $req)
    {
        $validatedData=$req->validate([
            'currency' =>'required|',
            'name'=>'required'    
 
            ]);
        
        $Country=new country;
        $Country->name=$req->name;
        $Country->currency=$req->currency;
        $Country->status=$req->status;
      
      $Country->save();
     
      return redirect()->route('country_list');
        }

        public function index()
        {
          
          
         $data   =  Country::simplepaginate(10);
    
      
         return view('country.index',['data'=>$data]);
    
        }
        public function change_status($id)
        {
    
          $data = Country::find($id);
          $status =0;
          if ($data->status == 0) {
              $status =1;
           } 
    
          $data->status=$status;
          $data->save();
          return back()->with('message', 'status changed!');
        } 
}
