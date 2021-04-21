<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Post extends Controller
{
    function post_list(){
        $Post['result']=DB::table('posts')->get();
        return view('/frontend/home',$Post);
    }
    function post_detail($id){
        $Post['result']=DB::table('posts')->where('slug',$id)->get();
        return view('/frontend/post',$Post);
    }
    public static function page_nav(){
        $result=DB::table('pages')->where('status','1')->get();
        return $result;
    }
    function page($id){
        if($id != "contact-us"){
            $Post['result'] = DB::table('pages')->where('slug',$id)->get();
            return view('/frontend/page',$Post);
        }
        else{
            return view('/frontend/contactus');
        }
    }
    function contact_add(Request $request){
        $data = array([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'mobile'=>$request->input('mobile'),
            'message'=>$request->input('message')
        ]);
        DB::table('contacts')->insert($data);
        $request->session()->flash('msg','Your message has been sent');
        return redirect('/page/contact-us');
    }
}
 