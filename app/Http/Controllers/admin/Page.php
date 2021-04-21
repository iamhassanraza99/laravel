<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Page extends Controller
{
    function pages_list(){
        $PageArr['result'] = DB::table('pages')->orderBy('id','asc')->get();
        return view('admin/page/page_list',$PageArr);
    }
    function page_submit(Request $request){
        $request->validate([
            'slug' => 'required|unique:pages',
            'description' => 'required' 
            ]);
        $data = array(
            'name'=>$request->input('name'),
            'slug'=>$request->input('slug'),
            'description'=>$request->input('description'),
            'post_date'=>$request->input('post_date'),
            'status'=>1,
            'added_on'=>date('Y-m-d h:i:s')
        );

        DB::table('pages')->insert($data);
        $request->session()->flash('msg',"Page has been added");
        return redirect('/admin/pages');
    }
    function page_edit($id){
        $result = DB::table('pages')->where('id',$id)->get();
        return view('admin/page/page_edit')->with('PageArr',$result);
    }
    function page_update(Request $request,$id){
        $data = array(
            'name'=>$request->input('name'),
            'slug'=>$request->input('slug'),
            'description'=>$request->input('description'),
            'post_date'=>$request->input('post_date'),
            'status'=>1,
            'added_on'=>date('Y-m-d h:i:s')
        );
        DB::table('pages')->where('id',$id)->update($data);
        $request->session()->flash('msg',"Page has been updated");
        return redirect('/admin/pages');
    }
    function page_delete(Request $request, $id){
        DB::table('pages')->where('id',$id)->delete();
        $request->session()->flash('msg',"Page has been deleted");
        return redirect('/admin/pages');
    }
}
