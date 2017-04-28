<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Redirect;
use Validator;
use App\Contact;
use App\Tag;

class ContactsController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(Request $request)
    {
        $PAGE_CAPACITY = 4;
        $contacts = Contact::orderBy('updated_at','desc')->paginate($PAGE_CAPACITY);
        $page = $request->input('page');
        $page = ($page != null) ? $page:1;

        return view('contact.index')->with('contacts', $contacts)
                                    ->with('page',$page)
                                    ->with('PAGE_CAPACITY',$PAGE_CAPACITY);
    }

    public function create()
    {
        $tags = Tag::all();
        return view('contact.create', compact('tags'));
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
            $tags = $request->input('tags');
            $contact = Contact::all()->last();
            $contact->tags()->attach($tags);
            return redirect('contacts');   
        }
        else{

            return redirect('contacts/create'.'#alertValidate')->withErrors( $validator->messages() );
        }
    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contact.show')->with('contact',$contact);
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        $tags = Tag::all();
        return view('contact.edit')->with('contact',$contact)
                                    ->with('id',$id)
                                    ->with('tags',$tags);
    }

    public function update(Request $request, $id)
    {
        $request->flash();

        $rules = [
            'name' => 'required|alpha|min:2|max:20|filled',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits_between:9,11'
        ];

        $validator = Validator::make($request->all(), $rules);

        if( $validator->passes() ){

            $contact = Contact::findOrFail($id);
            $tags = $request->input('tags');
            if($tags == null)
                $contact->tags()->detach(Tag::all());
            else
                $contact->tags()->sync($tags);

            $contact->update($request->all());
            return redirect('contacts');  
        }
        else{

            return redirect('contacts/$id/edit'.'#alertValidate')->withErrors( $validator->messages() );
        }
    }

    public function destroy($id)
    {
        Contact::destroy($id);
        return redirect('contacts');
    }
}
