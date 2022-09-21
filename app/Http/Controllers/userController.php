<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class userController extends Controller
{
    function them(){
        return view('admin.Home.ql_user.them');
    }
    function sua(){
        return view('admin.Home.ql_user.sua');
    }
    function ds(){
        return view('admin.Home.ql_user.danhsach');
    }
    function thongtin(){
        return view('admin.Home.ql_user.thongtin');
    }
    function capnhat(){
        return view('admin.Home.ql_user.capnhat');
    }
}
?>
