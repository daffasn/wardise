<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = DB::table('menus')->get();
        return view('menu.data', ['menus'=>$menus]);
    }

    public function indexTambah()
    {
        return view('menu.tambah');
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
        $filename = $request->gambar->getClientOriginalName();
        $request->gambar->storeAs('images', $filename, 'public');
        DB::table('menus')->insert([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'jenis' => $request->jenis,
            'gambar' => $filename
        ]);

        return redirect('menus')->with('success', 'Data Berhasil Ditambahkan!');;
    }

    public function menu(){
        $menus = DB::table('menus')->get();
        $makanan = DB::table('menus')->where('jenis','=','makanan')->get();
        $minuman = DB::table('menus')->where('jenis','=','minuman')->get();
        return view('menu', ['menus'=>$menus,'makanan'=>$makanan,'minuman'=>$minuman]);
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
        $edit = DB::table('menus')->where('id', $id)->first();
        return view('menu/edit', ['edit'=>$edit]);
    }

    public function update(Request $request, $id){
        $filename = $request->gambar->getClientOriginalName();
        $request->gambar->storeAs('images', $filename, 'public');
        DB::table('menus')->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'jenis' => $request->jenis,
            'gambar' => $filename
        ]);

        return redirect('menus')->with('toast_success', 'Data Berhasil Dirubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('menus')->where('id', $id)->delete();

        return redirect('menus');
    }

    public function counts()
    {
        $menus = DB::table('menus')->get();
        $testimonis = DB::table('testimonis')->get();
        
        return view('admin_page.dashboardadmin', ['menus'=>$menus,'testimonis'=>$testimonis]);
    }
}
