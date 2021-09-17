<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Country;
use App\Models\Role;
use App\Models\EmployeeRole;
class Admincontroller extends Controller
{



       public function store(request $req)
       {

            //dd($req->all());
          $validatedData=$req->validate([
           'email' =>'required|email',
           'name'=>'required',
           'position' =>'required',
           'city'=>'required'
          ]);
          $Employee = new Employee;
          $Employee->name = $req->input('name');
          $Employee->email = $req->input('email');
          $Employee->country_id = $req->input('position');
          $Employee->city = $req->input('city');

          $Employee->save();
          $roleids=$req->role;
          $Employee->roles()->attach($roleids);
       return redirect()->route('list');
       }

       public function index()
       {
          
        $data =  Employee::with(['country','roles'])->simplepaginate(10);
        //dd($data->toArray());
              
        return view('employee.index',['data'=>$data]);

       }
      

       public function delete($id)
       {
          
          $data=Employee::find($id);
          $data->delete();
          $data->roles()->detach();
         
          return back()->with('message', 'Profile has been deleted!');

       }

       public function edit($id)
       {
          
   

       $data=$this->masterdata($id);
    //dd($data);
        return view('employee.update',['data'=>$data]);

       }
       public function masterdata($id)
       {
        $data['employee']=Employee::find($id);       
        $data['country']= Country::where('status', 1)->pluck('name','id');
        $data  ['role']=Role::pluck('name','id');  
        return $data;

       }
    
    public function update(request $req)
    {

      //dd($req->all());
        $validatedData=$req->validate([
            'email' =>'required|email',
            'name'=>'required',
            'position' =>'required',
            'city'=>'required',    
 
            ]);
        
        $data=Employee::find($req->id);

        $data->name=$req->name;
        $data->email=$req->email;
        $data->country_id=$req->position;
        $data->city=$req->city;
     
      $data->save();
      $roleids=$req->role;
      //$data->roles()->detach();
      $data->roles()->sync($roleids);
      return redirect()->route('list')->with('status', 'Profile  has been updated!');

        }
  
     
        public function create()
        {
                  //$data = currency::where('status', 1)->get();
                  $data  ['country'] = Country::where('status', 1)->pluck('name','id');
                  $data  ['role']=Role::pluck('name','id');             
                 return  view('employee.create',['data'=>$data]);        
        }    
      
      
  function search(request $req)
  {
    $data=Employee::where('name' ,'like','%'.$req->input('name').'%') -> simplepaginate(10);
  
     return view('employee.index',['data'=>$data]);
     
  }         
          }
        
  