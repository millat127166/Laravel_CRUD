<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud_Application;
use Illuminate\Support\Facades\Session;

class CrudApplicaiton extends Controller
{


    public function getData()
    {
       $data = Crud_Application::all();
       return view('welcome',compact('data'));
    }
    public function create()
    {
        return view('create');
   
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



    // Edite page show
    public function edite( $id )
    {
        $data = Crud_Application::find($id);
        return view('edite',compact('data'));
    }
    // Delete function
    public function delete($id)
    {

        $post = Crud_Application::find($id);
        $post->delete();
        return redirect('/')->with('success','Data Delete Successfully');

    }


    public function update(Request $request, $id)
    {
        $category           = Crud_Application::find($id);

        $category->fname    = $request->get('fname');
        $category->lname    = $request->get('lname');
        $category->phoneno    = $request->get('phoneno');
        $category->address    = $request->get('address');

        $update =  $category->save();

        if($update) {

            return redirect()->to('/')->with('success','update Successfully');

        }else{
            return "Hello World Problem";
        }
        

  }






    
}
