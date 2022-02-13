<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class Formcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forminfo =Form::all();
        return view('crud', compact('forminfo')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'address'=>'required',
            'contact'=>'required'
        ]);
        $form= new Form;
        $form->first_name=$request->post('first_name');
        $form->last_name=$request->post('last_name');
        $form->address=$request->post('address');
        $form->contact=$request->post('contact');
        $form->save();
        return redirect('contactus');
    }
   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formedit= Form::find($id);
        return view('edit',compact('formedit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'address'=>'required',
            'contact'=>'required',
        ]);
        $formupdate=Form::find($id);
        $formupdate->first_name=$request->post('first_name');
        $formupdate->last_name=$request->post('last_name');
        $formupdate->address=$request->post('address');
        $formupdate->contact=$request->post('contact');
        $formupdate->save();
        return redirect('crud');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fromdelete=Form::find($id);  
        $fromdelete->delete(); 
        return redirect('crud');
    }
}
