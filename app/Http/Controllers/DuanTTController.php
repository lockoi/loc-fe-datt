<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class DuanTTController extends Controller
{
    function index(){
        return view('Layout.index');
    }
    function admin(){
        return view('admin.Home.ql_hk.them');
    }
}
?>
