<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class FormController extends Controller
{
    public function index()
    {
    	return view("Form");
    }

    public function store(Request $request)
    {
    	$request -> validate([
    		'name' => 'required',
    		'email' => 'required|email',
    		'mobile_number' => 'required'
    	]);
    	$form = new Form();
    	$form->name = $request->name;
    	$form->email = $request->email;
    	$form->mobile_number = $request->mobile_number;
    	$form->save();
    	return redirect()->back()->with('message', 'Submitted Succefully!');
    }

    public function show()
    {
    	$forms = Form::all();
    	return view("view",compact("forms"));
    }

    public function edit($id)
    {
    	$form = Form::findOrfail($id);
    	return view("edit",compact("form"));
    }

    public function update(Request $request, $id)
    {
    	$request -> validate([
    		'name' => 'required',
    		'email' => 'required|email',
    		'mobile_number' => 'required'
    	]);
    	$form = Form::findOrfail($id);
    	$form->name = $request->name;
    	$form->email = $request->email;
    	$form->mobile_number = $request->mobile_number;
    	$form->save();
    	return redirect("view");
    }

    public function destroy($id)
    {
    	$form = Form::findOrfail($id);
    	$form->delete();
    	return back();
    }

}
