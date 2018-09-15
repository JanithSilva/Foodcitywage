<?php

namespace App\Http\Controllers;

use App\Centres;
use Illuminate\Http\Request;

class CentresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $centres =  Centres::orderBy('created_at', 'asc')->paginate(10);
        return view('centres.index')->with('centres', $centres);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('centres.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $centre = new Centres();
        $centre -> Name = $request -> input('name');
        $centre -> Income = $request -> input('income');
        $centre -> Target = $request -> input('target');


        //$employee -> user_id = auth()->user()->id;
        $centre -> save();

        return redirect('/centres')->with('success', 'Centre added');
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
        $centre = Centres::find($id);
        return view('Centres.edit')->with('centre', $centre);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @param $oldIncome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $centre = Centres::find($id);
        $centre -> Name = $request -> input('name');
        $centre -> Income = $request -> input('income');
        $centre -> Target = $request -> input('target');


        $centre -> save();

        return redirect('/centres')->with('success', 'Centre updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $centre = Centres::find($id);
        $centre->delete();
        return redirect('/centres')->with('success', 'Centre removed');
    }

    public function editIncome($id){

        $centre = Centres::find($id);
        return view('Centres.editIncome')->with('centre', $centre);

    }

    public function updateIncome(Request $request, $id, $oldIncome){

        $centre = Centres::find($id);
        $centre -> Name = $request -> input('name');
        $centre -> Income = $request -> input('income');
        $centre -> Target = ($oldIncome + $request -> input('target'));


        $centre -> save();

        return redirect('/centres')->with('success', 'Centre updated');

    }
}
