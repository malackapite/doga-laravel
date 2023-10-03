<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index(){
        return response()->json(User::all());
    }

    public function show($id){
        return response()->json(User::find($id));
    }

    public function destroy($id){
        return User::find($id)->delete();
        return redirect("user/list");
    }

    public function store(Request $request){
        $user= new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->save();
    }

    public function update(Request $request, $id){
        $user= User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->save();
    }

    public function newView(){
        return view("user.new");
    }

    public function editView($id){
        $user = User::find($id);
        return view("user.edit", ["user" => $user]);
    }
    
    public function listView(){
        $users = User::all();
        return view("user.list", ["users" => $users]);
    }
}
