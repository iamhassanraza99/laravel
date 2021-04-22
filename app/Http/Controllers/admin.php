<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class admin extends Controller
{
    function login(Request $request){
        $username = $request->input('username');
        $result = DB::table('users')->where('username',$username)->get();
        if($result[0]->username == $request->input('username') && $result[0]->password == $request->input('password')){
            if($result[0]->status== '1'){
                $request->session()->put('name',$result[0]->username);
                return redirect('admin/posts');
            }
            else{
                $request->session()->flash('msg','The Account is De-activated');
                return redirect('admin/login');
            }
            
        }
        else{
            $request->session()->flash('msg','Please enter valid username and password');
            return redirect('admin/login');
        }
        
    }
    public static function user_image($username){
            $image = DB::table('users')->where('username',$username)->get('image');
            return $image;
    }
}