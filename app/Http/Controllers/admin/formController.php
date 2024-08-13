<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Form;
use Illuminate\Http\Request;

class formController extends Controller
{
    public function index (){

        $form = Form::all(); 

    
        return view('admin/form', compact('form'));
    }


    public function criar ()
    {

        return view ('admin/criar');
    }


    public function guardar (Request $request){

        dd($request -> all());


    }
}
