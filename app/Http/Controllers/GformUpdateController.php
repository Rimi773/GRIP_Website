<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshop;
use app\Models\Interview;

class GformUpdateController extends Controller
{
    public function show()
    {

            $workshop = workshop::all();
            return view('admin.gform_update',compact('workshop'));

    }
    public function delete($id)
    {

        $user = workshop::find($id);
        $user -> delete();

        return redirect()->back();

    }

}
