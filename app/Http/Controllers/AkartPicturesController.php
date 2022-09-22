<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkartPicturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.akartpictures.index');
    }

    public function project()
    {
        return view('services.akartpictures.project');
    }

    public function event()
    {
        return view('services.akartpictures.project-group.event');
    }

    public function product()
    {
        return view('services.akartpictures.project-group.product');
    }

    public function models()
    {
        return view('services.akartpictures.project-group.models');
    }

    public function prewed()
    {
        return view('services.akartpictures.project-group.prewed');
    }

    public function graduation()
    {
        return view('services.akartpictures.project-group.graduation');
    }

    public function shortvid()
    {
        return view('services.akartpictures.project-group.shortvid');
    }

    public function film()
    {
        return view('services.akartpictures.project-group.film');
    }

    public function pricelist()
    {
        return view('services.akartpictures.pricelist');
    }

    public function testimonials()
    {
        return view('services.akartpictures.testimonials');
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
