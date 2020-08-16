<?php

namespace App\Http\Controllers;
use App\Requests;
use Illuminate\Http\Request;

class RequestsController extends Controller
{
    public function create()
    {
        return view('requests');
    }

    public function store()
    {
        Requests::create(request()->validate([
            'patients_name' => 'required',
            'contact_no' => 'required|numeric|min:10',
            'blood_group' => 'required',
            'required_date' => 'required',
            'doctors_name' => 'required',
            'hospital_details' => 'required',
            'comments' => 'required'

        ]));

        // $request = new Requests();
        // $request->patients_name = request('patients_name');
        // $request->contact_no = request('contact_no');
        // $request->blood_group = request('blood_group');
        // $request->required_date = request('required_date');
        // $request->doctors_name = request('doctors_name');
        // $request->hospital_details = request('hospital_details');
        // $request->comments = request('comments');
        // $request->save();
        return redirect('/submited');

    }
}