<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Post extends Controller
{
    function posts_list(){
        $result = DB::table('posts')->orderBy('id','desc')->get();
        return view('admin/post/post_list')->with('PostArr',$result);
        // $PostArr['result'] = DB::table('posts')->get();
        // return view('admin/post/post_list',$PostArr);
        // to access the data in view
        // @result->title;
    }
    function post_submit(Request $request){
        // $request->input('title');
        // $request->input('short_desc');
        // $request->input('long_desc');
        // $request->input('image');
        // $request->input('post_date');

        // $image = $request->file('image')->store('public/post');
        $image = $request->file('image');
        $ext = $image->extension();
        $file = time().".".$ext;
        $image->storeAs('/public/post',$file);

        $request->validate([
            'slug'=>'required|unique:posts'
        ]);
        $data = array(
            'title'=>$request->input('title'),
            'slug'=>$request->input('slug'),
            'short_desc'=>$request->input('short_desc'),
            'long_desc'=>$request->input('long_desc'),
            'author'=>$request->input('author'),
            'image'=>$file,
            'post_date'=>$request->input('post_date'),
            'status'=>1,
            'added_on'=>date('Y-m-d h:i:s')
        );

        DB::table('posts')->insert($data);
        $request->session()->flash('msg',"Post has been added");
        return redirect('/admin/posts');
    }
    function post_edit($id){
        $result = DB::table('posts')->where('id',$id)->get();
        return view('admin/post/post_edit')->with('PostArr',$result);
    }
    function post_update(Request $request,$id){
        // $image = $request->file('image');
        // $ext = $image->extension();
        // $file = time().".".$ext;
        // $image->storeAs('/public/post',$file);
        $request->validate([
            'slug'=>'required|unique:posts'
        ]);
        $data = array(
            'title'=>$request->input('title'),
            'slug'=>$request->input('slug'),
            'short_desc'=>$request->input('short_desc'),
            'long_desc'=>$request->input('long_desc'),
            'post_date'=>$request->input('post_date'),
            'status'=>1,
            'added_on'=>date('Y-m-d h:i:s')
        );
        DB::table('posts')->where('id',$id)->update($data);
        $request->session()->flash('msg',"Post has been updated");
        return redirect('/admin/posts');
    }
    function post_delete(Request $request, $id){
        DB::table('posts')->where('id',$id)->delete();
        $request->session()->flash('msg',"Post has been deleted");
        return redirect('/admin/posts');
    }
}
