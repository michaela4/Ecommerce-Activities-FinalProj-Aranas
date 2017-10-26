<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class SessionsController extends Controller
{
	use AuthenticatesUsers;
    
    public function storeSignedInUser() {
        //attempt to authenticate user then sign them in
        if (! auth()->attempt(request(['email', 'password']))) {
            return back()->withErrors([
                'message' => 'Please check your credentials then try again.'
                ]);
        }
        return redirect()->home();
    }
}
