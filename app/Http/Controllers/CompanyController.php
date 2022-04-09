<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public  function store( Request $request){
        $rules=array('email' => 'required|email|unique:users',
        'name' => 'required|string');

        $validate=Validator::make($request->all(),$rules);
        if($validate->fails()){

         return 'please fill the required fields';


     }else{
$companies=new Company();

$companies->name = $request->name;
$companies->email = $request->email;
$companies->phone_no = $request->phone_no;
$companies->message = $request->message;
dd($companies);
$companies->save();


     }



    }
}
