<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Doctor;
use Storage;
use Carbon\Carbon;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctor = Doctor::all();
        return view('admin.profile.index', compact('doctor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'specialist' => 'required|string',
            'degree' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
            // 'image' => 'required',
        ]);
        $doctor = new Doctor();
        $doctor->name = $request->name;
        $doctor->specialist = $request->specialist;
        $doctor->degree = $request->degree;
        $doctor->phone = $request->phone;
        $doctor->email = $request->email;
        $doctor->status = false;
        if (request()->hasFile('image')) {
            $slug = Str::slug(request()->name);
            $currentDate = Carbon::now()->toDateString();
            $image = request()->file('image');
            $imageName = $slug.'-'.$currentDate.'.'.$image->getClientOriginalExtension();
            request()->file('image')->storeAs('public/uploads/', 'ProfilePicture/' . $imageName, '');
            $doctor->update(['image' => $imageName]);
        }
        $doctor->image = $imageName;
        $doctor->save();
        return redirect()->back()->with('success', 'Successfully inserted!');
        // return $doctor;
        // exit();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctor::find($id);
        return view('admin.profile.edit', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'specialist' => 'required|string',
            'degree' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
            // 'image' => 'required',
        ]);
        $doctor = Doctor::find($id);
        $doctor->name = $request->name;
        $doctor->specialist = $request->specialist;
        $doctor->degree = $request->degree;
        $doctor->phone = $request->phone;
        $doctor->email = $request->email;
        $doctor->status = false;
        if (request()->hasFile('image')) {
            $old_image = $doctor->image;
            Storage::disk('public')->delete('uploads/'. 'ProfilePicture/' . $old_image);

            $slug = Str::slug(request()->name);
            $currentDate = Carbon::now()->toDateString();
            $image = request()->file('image');
            $imageName = $slug.'-'.$currentDate.'.'.$image->getClientOriginalExtension();
            request()->file('image')->storeAs('public/uploads/', 'ProfilePicture/' . $imageName, '');
            $doctor->update(['image' => $imageName]);
        }
        $doctor->image = $imageName;
        $doctor->save();
        return redirect()->route('profile.index')->with('success', 'Profile Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
