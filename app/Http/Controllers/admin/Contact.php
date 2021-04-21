<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Contact extends Controller
{
    function all_contact(){
        $result = DB::table('contacts')->orderBy('id','desc')->get();
        return view('admin/contact/contact_list')->with('ContactArr',$result);
    }
}
