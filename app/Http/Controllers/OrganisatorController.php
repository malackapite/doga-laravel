<?php

namespace App\Http\Controllers;

use App\Models\Organisator;
use Illuminate\Http\Request;

class OrganisatorController extends Controller
{
    //

    public function index(){
        return response()->json(Organisator::all());
    }

    public function show($id){
        return response()->json(Organisator::find($id));
    }

    public function destroy($id){
        return Organisator::find($id)->delete();
        return redirect("org/list");
    }

    public function store(Request $request){
        $org= new Organisator();
        $org->name = $request->name;
        $org->description = $request->description;
        $org->save();
    }

    public function update(Request $request, $id){
        $org= Organisator::find($id);
        $org->name = $request->name;
        $org->description = $request->description;
        $org->save();
    }

    public function newView(){
        return view("org.new");
    }

    public function editView($id){
        $org = Organisator::find($id);
        return view("org.edit", ["org" => $org]);
    }
    
    public function listView(){
        $orgs = Organisator::all();
        return view("org.list", ["orgs" => $orgs]);
    }
}
