<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitas = DB::table('fasilitas')->get();
        return view('fasilitas/data', ['fasilitas'=>$fasilitas]);
    }

    public function indexTambah()
    {
        return view('fasilitas/tambah');
    }

    public function indexEdit($id){
        $edit = DB::table('fasilitas')->where('id', $id)->first();
        return view('fasilitas/edit', ['edit'=>$edit]);
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
        DB::table('fasilitas')->insert([
            'nama' => $request->nama,
            'gambar' => $filename
        ]);

        return redirect('fasilitas');
    }

    public function Editstore(Request $request, $id)
    {
        $filename = $request->gambar->getClientOriginalName();
        $request->gambar->storeAs('images', $filename, 'public');
        DB::table('fasilitas')->where('id', $id)->update([
            'nama' => $request->nama, 
            'gambar' => $filename
            ]);

        return redirect('fasilitas');
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
        DB::table('fasilitas')->where('id', $id)->delete();

        return redirect('fasilitas');
    }
}
