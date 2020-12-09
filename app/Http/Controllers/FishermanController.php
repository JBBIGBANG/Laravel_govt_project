<?php

namespace App\Http\Controllers;

use App\Models\fisherman;
use Illuminate\Http\Request;

class FishermanController extends Controller
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
        return view('fisheris_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = new Fisherman;
        $res->name = $request-> input('name');
        $res->father_name = $request-> input('father_name');
        $res->mother_name = $request-> input('mother_name');
        $res->dob = $request-> input('dob');
        $res->nid = $request-> input('nid');
        $res->village = $request-> input('Village');
        $res->post_office = $request-> input('Post-office');
        $res->union = $request-> input('Union');
        $res->sex = $request-> input('gender');
        $res->mobile_no = $request-> input('mobile_no');
        //$ sign gula db er field name r input gula holo form er input field er nam

        $res->save();

        $request-> session()->flash('msg','data submitted');
        return redirect('fisheris_show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\fisherman  $fisherman
     * @return \Illuminate\Http\Response
     */
    public function show(fisherman $fisherman)
    {

        return view ('fisheris_show')->with('fishermanArr',Fisherman::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\fisherman  $fisherman
     * @return \Illuminate\Http\Response
     */
    public function edit(fisherman $fisherman ,$id)
    {
        return view ('fisheris_edit')->with('fisherisArr',Fisherman::find($id));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\fisherman  $fisherman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fisherman $fisherman)
    {
        $res = Fisherman::find($request->id);
        $res->name = $request-> input('name');
        $res->father_name = $request-> input('father_name');
        $res->mother_name = $request-> input('mother_name');
        $res->dob = $request-> input('dob');
        $res->nid = $request-> input('nid');
        $res->village = $request-> input('village');
        $res->post_office = $request-> input('post_office');
        $res->union = $request-> input('union');
        $res->sex = $request-> input('gender');
        $res->mobile_no = $request-> input('mobile_no');
        $res->save();

        $request-> session()->flash('msg','data updated');
        return redirect('fisheris_show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fisherman  $fisherman
     * @return \Illuminate\Http\Response
     */
    public function destroy(fisherman $fisherman,$id)
    {
        Fisherman::destroy(array('id',$id));
        return redirect ('fisheris_show');
    }
}
