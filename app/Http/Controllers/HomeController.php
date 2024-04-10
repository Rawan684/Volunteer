<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\donations;
use App\Models\recipients;
class HomeController extends Controller
{
   


    

    public function index() 
    {
        return view('home.index');
    }
    public function About() 
    {
        return view('home.About');
    }
    public function contact() 
    {
        return view('home.contact');
    }
    
   
    public function show() 
    {
        $data = donations::latest()->paginate(5);

        return view('home.show', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);


       
    }
    public function showReq() 
    {
        $data = recipients::latest()->paginate(5);

        return view('home.showReq', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
       

       
    }
    public function Admin() 
    {

        return view('home.Admin');
        
    }

    
    public function AdminReq(Request $request) 
    {
        if($request->email=='Admin@Admin.com' && $request->password=='Admin' )
        {
          
          
       
        return redirect()->route('home.Dash');
        }
        else
        {

           
            return view('home.Admin');
        }
        
    }
    
    public function dashdon() 
    {  
        $data = donations::latest()->paginate(5);

        return view('home.dashdon', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    
     
       
    }
    
    public function Dash() 
    {  
        
        
        $data = recipients::latest()->paginate(5);

        return view('home.Dash', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
        

       
    }
    public function type() 
    {
        return view('home.type');
    

    }

    public function AddRec() 
    {
        return view('home.AddRec');
    

    }
    public function AddDon() 
    {
        return view('home.AddDon');
    

    }

    public function storeRec(Request $request)
    {

        $request->validate([
           
            'image_1'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
            'image_2'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);

        $file_name1 = time() . '.' .substr(request()->image_1, strpos(request()->image_1, ".") );

        request()->image_1->move(public_path('images'), $file_name1);

        $file_name2 = time() . '.' . substr(request()->image_1, strpos(request()->image_1, ".") );;

        request()->image_2->move(public_path('images'), $file_name2);

        $x = new recipients;

        $x->email = $request->email;
        $x->type = $request->donationstype;
        $x->phone = $request->phone;
        $x->posttitle = $request->posttitle;
        $x->posttext = $request->posttext;
        $x->confirm = $request->confirm;
        $x->image_2 =  $file_name2;
        $x->image_1 =  $file_name1;
        $x->save();

        return redirect()->route('home.index');
    }
    



   
    public function storeDon(Request $request)
    {
        $x = new donations;

        $x->email = $request->email;
        $x->donationstype = $request->donationstype;
        $x->phone = $request->phone;
        $x->posttitle = $request->posttitle;
        $x->posttext = $request->posttext;
        $x->confirm = $request->confirm;


        $x->save();

        return redirect()->route('home.index');
    }

    public function destroyr(donations $s)
    {
        $s->confirm=true;

        return redirect()->route('home.Dash');
    }
    public function conf2(donations $s)
    {
        $s->delete();

        return redirect()->route('home.Dash');
    }
    public function destroy(recipients $s)
    {
        $s->delete();

        return redirect()->route('home.dashdon');
    }
    public function conf1(recipients $s)
    {
        $s->confirm=true;

        return redirect()->route('home.dashdon');
    }

  
    
}