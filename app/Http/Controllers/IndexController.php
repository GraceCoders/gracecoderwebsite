<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
public function index(){
return view('index2');
}
public function contact(){
    return view('contact_us');
       }

       public function about(){
        return view('About_us');
           }

           public function portfolio(){
            return view('our_portfolio');
               }


}
