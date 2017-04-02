<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Cookie;
use Validator;

class ContactController extends Controller
{
    public function getText(Request $request){

    	$rules = [
            'name' => 'required|alpha|min:2|max:20|filled',
            'email' => 'required|email',
            'phone' => 'required|numeric|digits_between:9,11'
        ];

        $validator = Validator::make($request->all(), $rules);

        if( $validator->passes() ){

            $name = $request->input('name');
            $email = $request->input('email');
            $phone = $request->input('phone');

            session(['name' => $name, 'email' => $email, 'phone' => $phone]);

            $date = date('d-m-Y H:i:s');
            $cookie = cookie('date',$date,3600);

            return redirect('contact')->withCookie($cookie);    
        }
        else{

            return redirect('contact'.'#alertValidate')->withErrors( $validator->messages() );
        }
        
    }

    public function clearSession(Request $request){
    	$request->session()->forget('name');
    	$request->session()->forget('email');
    	$request->session()->forget('phone');

    	Cookie::queue(Cookie::forget('date'));

    	return redirect('contact');
    }

}
