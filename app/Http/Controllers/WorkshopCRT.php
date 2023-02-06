<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshop;

class WorkshopCRT extends Controller
{
    public function show()
    {

        $data = workshop::all();
        return view('admin.gform_update',compact('data'));

}
    public function del($id)
    {

        $user = workshop::find($id);
        $user -> delete();

        return redirect()->back();

    }
}
