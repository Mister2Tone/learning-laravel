<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Redirect;
use Validator;
use App\Contact;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts = DB::table('contacts')->get();
        return view('contacts')->with('contacts', $contacts);
    }

    public function create()
    {
        return view('create-contact');
    }

    public function store(Request $request)
    {
        

        $request->flash();

        $rules = [
            'name' => 'required|alpha|min:2|max:20|filled',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits_between:9,11'
        ];

        $validator = Validator::make($request->all(), $rules);

        if( $validator->passes() ){

            Contact::create($request->all());
            return redirect('contacts');   
        }
        else{

            return redirect('contacts/create'.'#alertValidate')->withErrors( $validator->messages() );
        }
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
