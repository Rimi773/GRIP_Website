<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;

class NoticeController extends Controller
{
    public function addview(){
        return view('admin.post_notice');

    }
    public function upload(Request $request){

        $notice = new notice;




        $notice->name = $request->name;
        $notice->date = $request->date;
        $notice->event = $request->event;


        $notice->save();
        return redirect()->back()->with('message','Notice Added Succesfully');
    }
    public function updatenotice($id)
    {
        $data = notice::find($id);
        return view('admin.update_notice',compact('data'));
    }

}
