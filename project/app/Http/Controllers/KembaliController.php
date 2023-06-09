<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KembaliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     // mengambil data dari table students
    $tb_kembalis = DB::table('tb_kembalis') -> get();
    // mengirim data students ke view daftar
    return view('kembali', ['tb_kembalis' => $tb_kembalis]);
    }

    public function cetak()
    {
     // mengambil data dari table students
    $tb_kembalis = DB::table('tb_kembalis') -> get();
    // mengirim data students ke view daftar
    return view('cetakkembali', ['tb_kembalis' => $tb_kembalis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahdatakembali');
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
            'id_kembali'=>'required',
            'id_member' => 'required',
            'tgl_kembali' => 'required',
            'conf' => 'required'
            ]);
            
            if (DB::table('tb_kembalis')->insert($credentials)){

                // dd('string true');
            };
            return redirect('/kembali');
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
        $tb_kembalis = DB::table('tb_kembalis')->where('id_kembali', $id)->first();
        return view('editkembali', compact('tb_kembalis'));
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
            'id_kembali'=>'required',
            'id_member' => 'required',
            'tgl_kembali' => 'required',
            'conf' => 'required',
            // 'foto_barang' => 'required',
            // 'img_qrcode' => 'required'
            ]);
            if (DB::table('tb_kembalis')->where('id_kembali', $request->id_kembali)->update($credentials)){
            };
            return redirect('/kembali');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_kembalis')->where('id_kembali', $id)->delete();
        return redirect('/kembali');
    }
}
