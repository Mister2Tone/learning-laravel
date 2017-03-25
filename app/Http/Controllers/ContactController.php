<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Cookie;
class ContactController extends Controller
{
    public function getText(Request $request){
    	$name = $request->input('name');
    	$email = $request->input('email');
    	$phone = $request->input('phone');

    	session(['name' => $name, 'email' => $email, 'phone' => $phone]);

    	$date = date('d-m-Y H:i:s');
    	$cookie = cookie('date',$date,3600);

    	return redirect('contact')->withCookie($cookie);
    }

    public function clearSession(Request $request){
    	$request->session()->forget('name');
    	$request->session()->forget('email');
    	$request->session()->forget('phone');

    	Cookie::queue(Cookie::forget('date'));

    	return redirect('contact');
    }

}
