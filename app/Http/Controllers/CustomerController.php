<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller {
    
    public function __construct() {}

    public function login() {
        $data['title'] = "Login - Tumbas";
        return view('login1_page', $data);
    }

    public function loginAction(Request $request) {
        $method = $request->method();
        if($method == "POST") {
            $result = DB::selectOne("SELECT * FROM customer WHERE email=? AND password=?", [
                $request->input('email'),
                $request->input('password')
            ]);
            // print_r($result);
            if($result != null) {
                $request->session()->put('s_id', $result->id);
                $request->session()->put('s_username', $result->username);
                $request->session()->put('s_nama', $result->nama);
                $request->session()->put('s_email', $result->email);
                $request->session()->put('s_password', $result->password);
                $request->session()->put('s_telepon', $result->telepon);
                $request->session()->put('s_alamat', $result->alamat);
                $request->session()->put('s_gender', $result->gender);

                // print_r($result);
                return redirect('/home');
            }
            else {
                // echo 'salah';
                return redirect('/login1');
            }
        }
        // echo 'login';
        else {
            return redirect('/login1');
        }
    }
}