<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Redirect;
use App\Contact;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts = DB::table('contacts')->get();
        return view('contact-list')->with('contacts', $contacts);
    }

    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        Contact::create($request->all());
        return redirect('contacts');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
