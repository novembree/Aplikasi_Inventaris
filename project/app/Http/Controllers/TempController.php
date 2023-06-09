<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TempController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
             // mengambil data dari table students
    $tb_tempppinjams = DB::table('tb_tempppinjams') -> get();
    // mengirim data students ke view daftar
    return view('temppinjam', ['tb_tempppinjams' => $tb_tempppinjams]);
    }

    public function cetak()
    {
             // mengambil data dari table students
    $tb_tempppinjams = DB::table('tb_tempppinjams') -> get();
    // mengirim data students ke view daftar
    return view('cetaktemppinjam', ['tb_tempppinjams' => $tb_tempppinjams]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahtemppinjam');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'id_member'=>'required',
            'id_barang' => 'required',
            'jumlah' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required'
            ]);
            
            if (DB::table('tb_tempppinjams')->insert($credentials)){

            };
            return redirect('/temppinjam');  
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
        $tb_tempppinjams = DB::table('tb_tempppinjams')->where('id_member', $id)->first();
        return view('edittemppinjam', compact('tb_tempppinjams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $credentials = $request->validate([
            // 'id_member'=>'required',
            'id_barang' => 'required',
            'jumlah' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required'
            ]);
            
            if (DB::table('tb_tempppinjams')->where('id_member', $request->id_member)->update($credentials)){

            };
            return redirect('/temppinjam');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_detailpinjams')->where('id_pinjam', $id)->delete();
        return redirect('/detailpinjam');
    }
}
