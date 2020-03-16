<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller {
    
    public function __construct() {}

    public function login() {
        $data['title'] = "Login - Inventory";
        return view('login_page', $data);
    }

    public function loginAction(Request $request) {
        $method = $request->method();
        if($method == "POST") {
            $result = DB::selectOne("SELECT u.id, u.nama, u.username, u.email, u.password, u.status, r.nama AS role FROM employee AS u
            RIGHT JOIN role AS r ON u.role_id = r.id WHERE u.email=? AND u.password=?", [
                $request->input('email'),
                $request->input('password')
            ]);
            // print_r($result);
            if($result != null) {
                $request->session()->put('s_id', $result->id);
                $request->session()->put('s_nama', $result->nama);
                $request->session()->put('s_email', $result->email);
                $request->session()->put('s_password', $result->password);
                $request->session()->put('s_username', $result->username);
                $request->session()->put('s_role', $result->role);
                $request->session()->put('s_status', $result->status);

                // print_r($result);
                return redirect('/dashboard');
            }
            else {
                // echo 'salah';
                return redirect('/login');
            }
        }
        // echo 'login';
        else {
            return redirect('/login');
        }
    }
}