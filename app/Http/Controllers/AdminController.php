<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Addjob;

class AdminController extends Controller
{
    public function index(){
        return view('Admin.index');
    }

    public function addjob(){
        return view('Admin.layout.addjob');
    }

    public function save(Request $request){
        $Add_job=new Addjob();

           $Add_job->Cname=$request->Cname;
           $Add_job->JPname=$request->JPname;
           $Add_job->Vacancy=$request->vacancy;
           $Add_job->Jdescription=$request->Jdescription;
           $Add_job->Estatus=$request->Estatus;
           $Add_job->workplace=$request->workplace;
           $Add_job->Erequirements=$request->Erequirements;
           $Add_job->Experience=$request->Experience;
           $Add_job->Jlocation=$request->Jlocation;
           $Add_job->Salary=$request->Salary;
           $Add_job->Obenefits=$request->Obenefits;
           $Add_job->Pdate=$request->Pdate;
           $Add_job->Ldate=$request->Ldate;
           

           $Add_job->save();
           return redirect()->route('showjob');

          
    }
    public function show(){
        $datas=Addjob::get();
        
        return view('Admin.layout.showjob',compact('datas'));
    }
    public function jobslist(){
        $datas=Addjob::get();
        
        return view('Admin.layout.jobslist',compact('datas'));
    }

    public function jobdetails($id)
    {
        $data = Addjob::find($id);
        
       return view('Admin.layout.jobdetails',compact('data'));
    }

    public function jobdelete($id){
        $datas=Addjob::find($id);
        $datas->delete();
        //return view('dashbords.view');

       return redirect()->back();

    }

    public function editjobdetails($id){
        $data=Addjob::find($id);
        return view('Admin.layout.editjobdetails',compact('data'));


    }

    public function updatejobdetails(Request $request,$id ){

        $data=Addjob::find($id);
        $data['Cname']=$request->Cname;
        $data['JPname']=$request->JPname;
        $data['vacancy']=$request->vacancy;
        $data['Jdescription']=$request->Jdescription;
        $data['Estatus']=$request->Estatus;
        $data['workplace']=$request->workplace;
        $data['Erequirements']=$request->Erequirements;
        $data['Experience']=$request->Experience;
        $data['Jlocation']=$request->Jlocation;
        $data['Salary']=$request->Salary;
        $data['Obenefits']=$request->Obenefits;
        $data['Pdate']=$request->Pdate;
        $data['Ldate']=$request->Ldate;
        $datas=$data->save();
        return redirect()->back();
//        $data->save();
//        $data=DB::table('job_forms')->where('id',$id)->update();
        //return view('Admin.layout.jobslist',compact('datas'));


    }



        

}
