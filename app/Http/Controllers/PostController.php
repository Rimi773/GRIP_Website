<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Internship;

class PostController extends Controller
{
    public function addview(){
        return view('admin.post');

    }
    public function upload(Request $request){

        $internships = new internship;

        $internships->name = $request->name;
        $internships->job = $request->job;
        $internships->email = $request->email;
        $internships->number = $request->number;

        $internships->save();
        return redirect()->back()->with('message','Placement Added Succesfully');
    }
    public function index(){
        $int = internship::all();
        return view('admin.body',compact('int'));

    }

}
