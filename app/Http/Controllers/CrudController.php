<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Excel;
use App\Imports\crudImport;
use App\Models\crud;


class CrudController extends Controller
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
    public function welcome()
    {
        return view('welcome');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud_add_record');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = new Crud;
        $res->name = $request-> input('name');
        $res->father_name = $request-> input('father_name');
        $res->mother_name = $request-> input('mother_name');
        $res->dob = $request-> input('dob');
        $res->nid = $request-> input('nid');
        $res->address = $request-> input('address');
        $res->sex = $request-> input('gender');
        $res->mobile_no = $request-> input('mobile_no');
        //$ sign gula db er field name r input gula holo form er input field er nam

        $res->save();

        $request-> session()->flash('msg','data submitted');
        return redirect('crud_show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function show(crud $crud)
    {


        return view ('crud_show')->with('crudsArr',Crud::all());//with er 1st ta holo database table r 2nd ta holo controller name

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function edit(crud $crud,$id)
    {
        return view ('crud_edit')->with('crudsArr',Crud::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, crud $crud)
    {
        $res = Crud::find($request->id);
        $res->name = $request-> input('name');
        $res->father_name = $request-> input('father_name');
        $res->mother_name = $request-> input('mother_name');
        $res->dob = $request-> input('dob');
        $res->nid = $request-> input('nid');
        $res->address = $request-> input('address');
        $res->sex = $request-> input('gender');
        $res->mobile_no = $request-> input('mobile_no');
        $res->save();

        $request-> session()->flash('msg','data updated');
        return redirect('crud_show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function destroy(crud $crud,$id)
    {

        Crud::destroy(array('id',$id));
        return redirect('crud_show');
    }
    public function demo()
    {
        return view('demo');
    }

    public function bootstrap()
    {
        return view('bootstrap');
    }

    public function page()
    {
        return view('paginatetablecheck');
    }



}
/*
  $path = $res->file->getRealPath();
        $data = Excel::load($path)->get();

        foreach ($data as $value) {
            $arr[] = [
                'name' => $value->name,
                'father_name' => $value->father_name,
                'mother_name' => $value->mother_name,
                'dob' => $value->dob,
                'nid' => $value->nid,
                'address' => $value->address,
                'sex' => $value->sex,
                'mobile_no' => $value->mobile_no
            ];
        }

        if(!empty($arr)){
            DB::table('cruds')->insert($arr);
            echo "data inserted";
        }*/
