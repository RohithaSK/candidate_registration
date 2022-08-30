<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CandidateController extends Controller
{
    public function display_form(){

        return view('candidate_registration.create_form');
    }

    public function save_form(Request $request){

        $validatedData = $request->validate([
            'job_title' => 'required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'fname' => 'required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'lname' => 'required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'dob' => 'required',
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'contact_no' => 'required|numeric|min:10',
          
           
        ]);

            $save_data = new Candidate();
            $save_data->job_title = $request->input('job_title');
            $save_data->fname = $request->input('fname');
            $save_data->lname = $request->input('lname');
            $save_data->dob = $request->input('dob');
            $save_data->email = $request->input('email');
            $save_data->contact_no = $request->input('contact_no');
            $save_data->save();
            return redirect('/list_of_candidates')->with('status','Your data saved successfully!');
    }

    public function show_candidates(){

        $display_data = Candidate::all();
        return view('candidate_registration.list',compact('display_data'));
    }

    public function show_edit_page($id){
        $get_data = Candidate::find($id);

        return view('candidate_registration.edit_page',compact('get_data'));
    }

    public function update_data(Request $request,$id){
        $update_data =  DB::table('candidates')
        ->where('id', $id)
        ->update(['job_title' => $request->input('job_title'),
        'fname' => $request->input('fname'),
        'lname' => $request->input('lname'),
        'dob' => $request->input('dob'),
        'email' => $request->input('email'),
        'contact_no' => $request->input('contact_no')
     ]);

     return redirect('/list_of_candidates')->with('status','Candidate details updated!');
    }

    public function delete_data($id){

        $delete_data = Candidate::find($id);
        $delete_data->delete();
        return redirect('/list_of_candidates')->with('status','Record deleted successfully!');
    }
}
