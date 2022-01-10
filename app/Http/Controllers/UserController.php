<?php

namespace App\Http\Controllers;
use App\Addjob;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $datas=Addjob::get();
        return view('User.index',compact('datas'));
    }

    public function jobdetails($id){
        $data=Addjob::find($id);
        return view('User.layout.jobdetails',compact('data'));

    }
}
