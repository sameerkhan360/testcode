<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profile_registration;

class profileController extends Controller
{
    
    public function store(Request $request){
    
     $data = profile_registration::create($request->all());  
    return response()->json($data, 200);

    }
}
