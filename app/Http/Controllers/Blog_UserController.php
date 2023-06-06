<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogUser;

class Blog_UserController extends Controller
{
    public function index()
    {
        $blog_users = BlogUser::all();
        return view('users.index', compact('blog_users'));
    }
    

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'username'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);
        $blog_user =BlogUser::create([
            'email'=>$request->email,
            'password'=>$request->password,
            'username'=>$request->username,
            'first_name'=>$request->first_name,
            'second_name'=>$request->second_name, 
        ]);
        return \Redirect::route('userhome')->with("success", 'User saved');
    }

    public function show($id)

    {
        $blog_user=BlogUser::query()->where('id', $id)->first();
        return view('users.show', compact('blog_user'));
    }
    public function edit($id){
        $blog_user=BlogUser::query()->where('id', $id)->first();
                return view('users.edit', compact('blog_user'));
    }
    public function update( Request $request){
        // dd($request);
        // $request->validate([
        //     'username'=>'required',
        //     'email'=>'required',
        //     'password'=>'required',
        // ]);
        
        $blog_user =BlogUser::query()->where ('id', $request->id)->update([
            'email'=>$request->email,
            'password'=>$request->password,
            'username'=>$request->username,
            'first_name'=>$request->first_name,
            'second_name'=>$request->second_name, 
        ]);
        return \Redirect::route('userhome')->with("success", 'User saved');
    }
    public function destroy($id){
        $blog_user=BlogUser::query() ->where ('id', $id)->delete();
        return \Redirect::route('userhome')->with('success', 'Post deleted successfully');
    }
}
