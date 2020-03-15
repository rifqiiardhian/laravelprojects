<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller {
    public function __construct() {}

    public function index(Request $request){
            $data['session'] = array(
                                    'id'        => $request->session()->get('s_id'),
                                    'nama'      => $request->session()->get('s_nama'),
                                    'email'     => $request->session()->get('s_email'),
                                    'username'  => $request->session()->get('s_username'),
                                    'password'  => $request->session()->get('s_password'),
                                    'role'      => $request->session()->get('s_role') 
            );
            // print_r($data);
            $data['title']   = "Dashboard - Inventory";
                                return view('dashboard_page', $data);
            $data['nav_menu'] = $this->displayMenu($request);
                                return view('dashboard_page', $data);
    }

    public function signOut(Request $request){
        $request->session()->flush();
        return redirect('/login');
    }

    // private function displayMenu(Request $request) {
    //     $menu = "<ul class='navbar nav'>";
    //     $result = DB::select("SELECT m.id, m.nama, m.url, r.nama AS role FROM t_menu AS m LEFT JOIN t_role AS r ON m.t_role_id = r.id WHERE r.nama = ?", [$request->session()->get('s_role')]);
    //     foreach ($result as $r) {
    //         $menu .= "<li class='nav-item'><a class='nav-link' href=''>" . $r->nama . "</a></li>";
    //     }
    //     $menu .= "</ul>";
    //     return $menu;
    // }
}