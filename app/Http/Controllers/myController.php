<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    
use Illuminate\Support\Facades\View;  
     

class myController extends Controller
{    
    public function __construct()  
    {  
        $this->middleware('do')->only('show');  
    }    

    public function index(){
        echo "index";
    }

    public function show($id){
        echo "ID:".$id;
    }

    public function display($i)  
    {  
       return view('student', ['i' => $i]);  
    }     
    public function show_post($id,$password,$name)  
    {  
     return view('test',compact('id','password','name'));  
    }
}
