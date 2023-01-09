<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
        $data=DB::table('categories')->get();
        return view('admin.category_index',compact('data'));
    }

    public function create()
    {
        return view('admin.category_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name'=>'required|unique:categories',
        ]);

        $data=array();
        $data['category_name']=$request->category_name;

        DB::table('categories')->insert($data);
        return redirect()->back();
    }

    public function edit($id)
    {
        $data=DB::table('categories')->where('id',$id)->first();
        return view('admin.category_edit',compact('data'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'category_name'=>'required|unique:categories',
        ]);

        $data=array();
        $data['category_name']=$request->category_name;

        DB::table('categories')->where('id',$id)->update($data);
        return redirect()->route('category.index');
    }

    public function delete($id)
    {
        DB::table('categories')->where('id',$id)->delete();
        return redirect()->back();
    }
}
