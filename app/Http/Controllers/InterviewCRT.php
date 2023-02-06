<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Interview;

class InterviewCRT extends Controller
{
    public function interview()
    {

            $data = interview::all();
            return view('admin.interview_gform_update',compact('data'));

    }
    public function delete($id)
    {

        $user = interview::find($id);
        $user -> delete();

        return redirect()->back();

    }
}
