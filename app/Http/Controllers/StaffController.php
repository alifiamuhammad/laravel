<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $staff =staff::all();
        return view('staff/show',['data_staff'=>$staff]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        staff::create([
            'Nis'=>$request->Nis,
            'Nama'=>$request->Nama_staff,
            'Bidang'=>$request->Bidang
        ]);
        //echo "Data berhasil di simpan";
        return redirect('/staff')->with('status','Data Berhasil Di Simpan!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('/staff/edit',['staff'=>Staff::FindOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        staff::where('id',$id)
                    ->update(['Nis'=>$request->Nis,
                            'Nama'=>$request->Nama_staff,
                             'Bidang'=>$request->Bidang]);

        return redirect('/staff')->with('status','Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        staff::destroy($id);
        return redirect('/staff')->with('status','Data Berhasil Di Delete');
    }
}
