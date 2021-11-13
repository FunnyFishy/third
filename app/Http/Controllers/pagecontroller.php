<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class pagecontroller extends Controller
{

    public function home()  
    {
    return view('Pages.home');
    }

    public function product()
    {
        return view('Pages.product');
    }

    public function service()
    {
        return view('Pages.service');
    }

    public function about()
    {
        return view('Pages.about');
    }

    public function contact()
    {
        return view('Pages.contact');
    }

    public function exam()
    {
        $values = ['sam','pam','tam','kam','lam'];
        
        
        return view('Pages.example')->with('values',$values);
    }



    public function qwer()
    {   
        return view('Pages.qwerty');
    }
}





    