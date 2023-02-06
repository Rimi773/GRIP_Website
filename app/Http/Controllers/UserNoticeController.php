<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;

class UserNoticeController extends Controller
{
    public function user_notice(){
        $data = notice::all();
        return view('user.notice',compact('data'));

    }
}
