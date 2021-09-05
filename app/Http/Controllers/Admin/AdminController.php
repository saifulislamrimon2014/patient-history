<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Contact;
use App\Models\Record;
use App\Models\History;
use App\Models\Doctor;
use Carbon\Carbon;
class AdminController extends Controller
{
    public function index()
    {
    	return view('admin.dashboard');
    }
    public function appointment()
    {
    	$appointments = Appointment::all();
    	return view('admin.appointment.index', compact('appointments'));
    }

    // -----------------------------------------------------------
    public function records()
    {
    	$records = Record::all();
    	return view('admin.records.index', compact('records'));
    }
    // -----------------------------------------------------------

    // appointment------------------------------------------------
    public function approve($id)
    {
    	$appointment = Appointment::find($id);
    	$appointment->status = true;
    	$appointment->save();
    	return redirect()->back()->with('warning', 'An appointment successfully approved!');
    }

    public function cancel($id)
    {
    	$appointment = Appointment::find($id);
    	$appointment->delete();
    	return redirect()->back()->with('warning', 'An appointment successfully canceled!');
    }
    // appointment------------------------------------------------

    // contact----------------------------------------------------
    public function contact()
    {
    	$contacts = Contact::all();
    	return view('admin.contact.index', compact('contacts'));
    }
    public function delete($id)
    {
    	$contact = Contact::find($id);
    	$contact->delete();
    	return redirect()->back()->with('warning', 'An contact message successfully deleted!');
    }
    // contact----------------------------------------------------

    // fetching user history by id
    public function history($id)
    {
        $find = Record::find($id);
        $histories = History::all();
        return view('admin.records.history-view', compact('histories', 'find'));
    }
    public function historyView($id)
    {
        $history = History::find($id);
        return view('admin.records.view-details', compact('history'));
    }
    // fetching user history by id
    public function available($id)
    {
        $profile = Doctor::find($id);
        $profile->status = true;
        $profile->save();
        return redirect()->back()->with('success', 'Status changed successfully!');
    }
    public function unavailable($id)
    {
        $profile = Doctor::find($id);
        $profile->status = false;
        $profile->save();
        return redirect()->back()->with('success', 'Status changed successfully!');
    }
}
