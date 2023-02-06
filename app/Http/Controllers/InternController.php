<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Internship;
class InternController extends Controller
{
    public function show(){
        $data = user::all();
        return view('admin.users',compact('data'));
    }

}
