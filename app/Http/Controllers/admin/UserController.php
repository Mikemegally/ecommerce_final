<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.userindex',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.usercreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'password'=>$request['password'],
        ]);
        return redirect()->route('users.index')->with('success','user added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $users = User::where('id',$id)->first();
        return view('admin.usershow',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        User::where('id',$id)->delete();
        return redirect()->route('users.index')->with('success','user deleted successfully');
    }
}
