<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Invitation;
use App\Models\User;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    //
    public function index(){
        return response()->json(Invitation::all());
    }

    public function show($id){
        return response()->json(Invitation::find($id));
    }

    public function destroy($id){
        return Invitation::find($id)->delete();
        return redirect("inv/list");
    }

    public function store(Request $request){
        $event= new Invitation();
        $event->appeared = $request->appeared;
        $event->event_id = $request->event_id;
        $event->user_id = $request->user_id;
        $event->save();
    }

    public function update(Request $request, $id){
        $event= Invitation::find($id);
        $event->appeared = $request->appeared;
        $event->event_id = $request->event_id;
        $event->user_id = $request->user_id;
        $event->save();
    }

    public function newView(){
        $events = Event::all();
        $users = User::all();
        return view("inv.new", ["events" => $events, "users" => $users]);
    }

    public function editView($id){
        $inv = Invitation::find($id);
        $events = Event::all();
        $users = User::all();
        return view("inv.edit", ["events" => $events, "users" => $users, "inv" => $inv]);
    }
    
    public function listView(){
        $invs = Invitation::all();
        return view("inv.list", ["invs" => $invs]);
    }
}
