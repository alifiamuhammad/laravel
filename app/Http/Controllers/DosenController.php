<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Lecturer;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$dosen =DB::table('lecturers')->get();
        $dosen =Lecturer::all();
        return view('dosen/index',['data_dosen'=>$dosen]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dosen/create');
    }

   
    public function store(Request $request)
    {
        Lecturer::create([
            'nidin'=>$request->nidn,
            'nama'=>$request->nama_dosen,
            'email'=>$request->email,
            'keahlian'=>$request->keahlian
        ]);
        //echo "Data berhasil di simpan";
        return redirect('/dosen')->with('status','Data Berhasil Di Simpan!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lecturer  $dosen
     * @return \Illuminate\Http\Response
     */
    public function show(Lecturer $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('/dosen/edit',['dosen'=>Lecturer::FindOrFail($id)]);
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        // $lecturer=Lecturer::find($id);
        // $lecturer->nidin=$request->nidn;
        // $lecturer->nama=$request->nama_dosen;
        // $lecturer->email=$request->email;
        // $lecturer->keahlian=$request->keahlian;
        // $lecturer->save();

        Lecturer::where('id',$id)
                    ->update(['nidin'=>$request->nidn,
                              'nama'=>$request->nama_dosen,
                              'email'=>$request->email,
                              'keahlian'=>$request->keahlian]);

        return redirect('/dosen')->with('status','Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lecturer  $dosen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        // $lecturer = Lecturer::find($id);
        // $lecturer->delete();
        Lecturer::destroy($id);
        return redirect('/dosen')->with('status','Data Berhasil Di Delete');
        //echo "Delete";
    }
}
