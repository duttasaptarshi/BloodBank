<?php

namespace App\Http\Controllers;
use App\Donate;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function create()
    {
        return view('donate');
    }

    public function store()
    {
        Donate::create(request()->validate([
            
            'name' => 'required',
            'contact_no' => 'required|numeric|min:10',
            'email' => 'required',
            'address' => 'required',
            'blood_group' => 'required',
            'comments' => 'required'

        ]));
        
        
        // $donate = new Donate();
        // $donate->name = request('name');
        // $donate->contact_no = request('contact_no');
        // $donate->email = request('email');
        // $donate->address = request('address');
        // $donate->blood_group = request('blood_group');
        // $donate->comments = request('comments');
        // $donate->save();
        return redirect('/submited');
    }

}
