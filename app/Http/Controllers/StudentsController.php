<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Students::all();
        return view('students/show',['data_students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Students::create([
            'nips'=>$request->nips,
            'nama'=>$request->nama_dosen,
            'email'=>$request->email,
            'kelas'=>$request->kelas,
            'jurusan'=>$request->jurusan
        ]);
        //echo "Data berhasil di simpan";
        return redirect('/students')->with('status','Data Berhasil Di Simpan!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function show(students $students)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit(students $id)
    {
        return view('/students/edit',['students'=>Students::FindOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        Lecturer::where('id',$id)
                    ->update(['nips'=>$request->nips,
                              'nama'=>$request->nama_students,
                              'email'=>$request->email,
                              'kealas'=>$request->kealas,
                              'jurusan'=>$request->jurusan]);

        return redirect('/students')->with('status','Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lecturer::destroy($id);
        return redirect('/students')->with('status','Data Berhasil Di Delete');
    }
}
