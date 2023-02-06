<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;

class ShowNoticeController extends Controller
{
    public function notice(){
        $data = notice::all();
        return view('admin.notice',compact('data'));

    }
    public function deletenotice($id)
    {

        $user = notice::find($id);
        $user -> delete();

        return redirect()->back();

    }


}
