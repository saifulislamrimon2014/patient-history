<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Record;

class FrontendController extends Controller
{
    public function search(Request $request)
    {
    	$search = Record::where('token_no', 'like', '%'.$request->input('search').'%')->get();
    	$query = $request->input('search');
    	return view('search', compact('search', 'query'));
    }
    public function welcome_page()
    {
    	$doctor = Doctor::all();
    	return view('welcome', compact('doctor'));
    }
}
