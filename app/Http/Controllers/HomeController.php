<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $data=DB::table('posts')->get();
        $cat=DB::table('categories')->get();
        return view('home',compact('data','cat'));
    }

    public function blogPost($id)
    {   
        $data=DB::table('posts')->where('id',$id)->first();
        $cat=DB::table('categories')->get();
        $comment=DB::table('comments')->where('post_id',$id)->get();
        return view('frontend.blogpost',compact('data','cat','comment'));
    }

    public function commentStore(Request $request)
    {
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['comment']=$request->comment;
        $data['post_id']=$request->post_id;

        DB::table('comments')->insert($data);
        return redirect()->back();
    }

    public function adminIndex()
    {
        return view('home_admin');
    }

    public function adminLogout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
