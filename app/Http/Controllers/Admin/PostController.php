<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use Auth;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
        $data=DB::table('posts')->get();
        return view('admin.post_index',compact('data'));
    }

    public function create()
    {   
        $data=DB::table('categories')->get();
        return view('admin.post_create',compact('data'));
    }

    public function store(Request $request)
    {    
        $request->validate([
            'post_name'=>'required|unique:posts',
            'category_id'=>'required',
            'post_image'=>'required',
            'description'=>'required',
            'tags'=>'required',
            'post_date'=>'required',
            'post_name'=>'required',
            'creator_name'=>'required',
        ]);

        $data=array();
        $data['post_name']=$request->post_name;
        $data['slug']=Str::of($request->post_name)->slug('-');
        $data['category_id']=$request->category_id;
        $data['description']=$request->description;
        $data['tags']=$request->tags;
        $data['post_date']=$request->post_date;
        $data['creator_name']=$request->creator_name;
        $data['admin_id']=Auth::id();

            $slug=Str::of($request->post_name)->slug('-');
            $img=$request->post_image;
            $imgName=$slug.'.'.$img->getClientOriginalExtension();
            $img->move('public/backend/files/',$imgName);
        $data['post_image']='public/backend/files/'.$imgName;


        DB::table('posts')->insert($data);
        return redirect()->back();
    }

    public function edit($id)
    {
        $data=DB::table('posts')->where('id',$id)->first();
        $cat=DB::table('categories')->get();
        return view('admin.post_edit',compact('data','cat'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'category_name'=>'required|unique:categories',
        ]);

        $data=array();
        $data['category_name']=$request->category_name;

        DB::table('posts')->where('id',$id)->update($data);
        return redirect()->route('category.index');
    }

    public function delete($id)
    {
        DB::table('posts')->where('id',$id)->delete();
        return redirect()->back();
    }
}
