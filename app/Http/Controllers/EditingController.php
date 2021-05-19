<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EditingController extends Controller
{
    public function create(Request $request, $modelName){
        $adminUser = Auth::guard('admin')->user();
        $model='\App\Models\\'.ucfirst($modelName);
        $model = new $model;
        return view('admin.editing', [
            'user'=>$adminUser,
            'modelName'=> $modelName,
            ]);
    }
}
