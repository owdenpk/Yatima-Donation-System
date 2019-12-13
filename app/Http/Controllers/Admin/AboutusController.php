<?php

namespace App\Http\Controllers\Admin;

use App\Models\Abouts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutusController extends Controller
{

    public function index()
    {
    	$abouts = Abouts::all();
    	return view('admin.about')->with('abouts',$abouts);
    }

    public function fetch(Request $request, $id)
    {
    	$abouts = Abouts::findOrFail($id);
    	return view('admin.about-us-edit')->with('abouts',$abouts);
    }

    public function store(Request $request)
    {
    	$abouts = new Abouts;
    	
    	$abouts->title = $request->input('title');
    	$abouts->subtitle = $request->input('subtitle');
    	$abouts->description = $request->input('description');
    	$abouts->save();

    	return redirect('/abouts')->with('status', 'The New "about us" has been Added');
    }

    public function aboutupdate(Request $request, $id)
    {
    	$abouts = Abouts::find($id);
    	$abouts->title = $request->input('title');
    	$abouts->subtitle = $request->input('subtitle');
    	$abouts->description = $request->input('description');
    	$abouts->update();

    	return redirect('/abouts')->with('status', 'The Data Has Been Updated');
    }

    public function aboutdelete(Request $request, $id)
    {
    	$abouts = Abouts::find($id);
    	$abouts->delete();
    	return redirect('/abouts')->with('status', 'The Data Has Been deleted');
    }
}

