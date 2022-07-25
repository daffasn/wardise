<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonis = DB::table('testimonis')->get();
        return view('testimoni/data', ['testimonis'=>$testimonis]);
    }

    public function indexTambah()
    {
        return view('testimoni/tambah');
    }

    public function indexEdit($id){
        $edit = DB::table('testimonis')->where('id', $id)->first();
        return view('testimoni/edit', ['edit'=>$edit]);
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
    public function Tambahstore(Request $request)
    {
        $filename = $request->gambar->getClientOriginalName();
        $request->gambar->storeAs('images', $filename, 'public');
        DB::table('testimonis')->insert([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'peran' => $request->peran,
            'gambar' => $filename
        ]);

        return redirect('testimoni');
    }

    public function Editstore(Request $request, $id)
    {
        $filename = $request->gambar->getClientOriginalName();
        $request->gambar->storeAs('images', $filename, 'public');
        DB::table('testimonis')->where('id', $id)->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'peran' => $request->peran,
            'gambar' => $filename
            ]);

        return redirect('testimoni');
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
        DB::table('testimonis')->where('id', $id)->delete();

        return redirect('testimoni');
    }
    public function testimoni(){
        $testimonis = DB::table('testimonis')->get();
        
        return view('beranda', ['testimonis' => $testimonis]);
    }
}
