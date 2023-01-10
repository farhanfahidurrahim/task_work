<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
        $data=DB::table('comments')
            ->leftJoin('posts','comments.post_id','posts.id')
            ->select('comments.*','posts.post_name')
            ->get();
        return view('admin.comment_index',compact('data'));
    }

    public function delete($id)
    {
        DB::table('comments')->where('id',$id)->delete();
        return redirect()->back();
    }
}
