<?php

namespace App\Http\Controllers;

use App\Models\socialService;
use Illuminate\Http\Request;

class SocialServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('socialServiceAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = new SocialService;
        $res->name = $request-> input('name');
        $res->father_name = $request-> input('father_name');
        $res->mother_name = $request-> input('mother_name');
        $res->dob = $request-> input('dob');
        $res->nid = $request-> input('nid');
        $res->district = $request-> input('district');
        $res->upozilla = $request-> input('upozilla');
        $res->village = $request-> input('Village');
        $res->post_office = $request-> input('Post-office');
        $res->union = $request-> input('Union');
        $res->activities = $request-> input('activities');
        $res->sex = $request-> input('gender');
        $res->mobile_no = $request-> input('mobile_no');
        //$ sign gula db er field name r input gula holo form er input field er nam

        $res->save();

        $request-> session()->flash('msg','data submitted');
        return redirect('socialServiceShow');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\socialService  $socialService
     * @return \Illuminate\Http\Response
     */
    public function show(socialService $socialService)
    {
        return view('socialServiceShow')->with('socialServiceArr',SocialService::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\socialService  $socialService
     * @return \Illuminate\Http\Response
     */
    public function edit(socialService $socialService,$id)
    {
        return view ('socialServiceEdit')->with('socialServiceArr',SocialService::find($id));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\socialService  $socialService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, socialService $socialService)
    {
        $res = socialService::find($request->id);
        $res->name = $request-> input('name');
        $res->father_name = $request-> input('father_name');
        $res->mother_name = $request-> input('mother_name');
        $res->dob = $request-> input('dob');
        $res->nid = $request-> input('nid');
        $res->district = $request-> input('district');
        $res->village = $request-> input('upozilla');
        $res->village = $request-> input('village');
        $res->post_office = $request-> input('post_office');
        $res->union = $request-> input('union');
        $res->sex = $request-> input('gender');
        $res->mobile_no = $request-> input('mobile_no');
        $res->save();

        $request-> session()->flash('msg','data updated');
        return redirect('socialServiceShow');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\socialService  $socialService
     * @return \Illuminate\Http\Response
     */
    public function destroy(socialService $socialService,$id)

    {

        socialService::destroy(array('id',$id));
        return redirect ('socialServiceShow');
    }
}
