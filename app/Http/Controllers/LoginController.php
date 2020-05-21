<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showFormLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        try {
            if ($request->username == 'admin' && $request->password == 'admin'){
                return redirect()->route('product');
            } else {
                throw new \Exception('Wrong');
            }
        } catch (\Exception $e) {
           return $e->getMessage();
        }
    }
}
