<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Organisator;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //

    public function index(){
        return response()->json(Event::all());
    }

    public function show($id){
        return response()->json(Event::find($id));
    }

    public function destroy($id){
        return Event::find($id)->delete();
        return redirect("event/list");
    }

    public function store(Request $request){
        $event= new Event();
        $event->date = $request->date;
        $event->location = $request->location;
        $event->org_id = $request->org_id;
        $event->save();
    }

    public function update(Request $request, $id){
        $event= Event::find($id);
        $event->date = $request->date;
        $event->location = $request->location;
        $event->org_id = $request->org_id;
        $event->save();
    }

    public function newView(){
        $orgs = Organisator::all();
        return view("event.new", ["orgs" => $orgs]);
    }

    public function editView($id){
        $event = Event::find($id);
        $orgs = Organisator::all();
        return view("event.edit", ["event" => $event, "orgs" => $orgs]);
    }
    
    public function listView(){
        $events = Event::all();
        return view("event.list", ["events" => $events]);
    }
}
