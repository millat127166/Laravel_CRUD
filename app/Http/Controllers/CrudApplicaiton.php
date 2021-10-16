<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud_Application;

class CrudApplicaiton extends Controller
{


    public function getData()
    {
       $data = Crud_Application::all();
       return view('welcome',compact('data'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'phoneno'=>'required|max:15',
            'address'=>'required'
        ]);
       $data = $request->all();

      $value = Crud_Application::create($data);

      if ($value== true) {

        return redirect('/')->with('success','Data Inserted Successfully');


      }else{
          return "some Problem";
      }




      
    }






    
}
