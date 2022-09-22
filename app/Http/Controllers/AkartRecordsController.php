<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkartRecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.akartrecords.index');
    }

    public function project()
    {
        return view('services.akartrecords.project');
    }

    public function compose()
    {
        return view('services.akartrecords.project-group.compose');
    }

    public function arrange()
    {
        return view('services.akartrecords.project-group.arrange');
    }

    public function record()
    {
        return view('services.akartrecords.project-group.record');
    }

    public function mixing()
    {
        return view('services.akartrecords.project-group.mixing');
    }

    public function mastering()
    {
        return view('services.akartrecords.project-group.mastering');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
