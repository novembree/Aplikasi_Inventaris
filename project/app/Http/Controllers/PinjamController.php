<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    // mengambil data dari table students
    $tb_pinjams = DB::table('tb_pinjams') -> get();
    // mengirim data students ke view daftar
    return view('pinjam', ['tb_pinjams' => $tb_pinjams]);
    }

    public function cetak()
    {
    // mengambil data dari table students
    $tb_pinjams = DB::table('tb_pinjams') -> get();
    // mengirim data students ke view daftar
    return view('cetakpinjam', ['tb_pinjams' => $tb_pinjams]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahdatapinjam');
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
            'id_pinjam'=>'required',
            'id_member' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
            'status' => 'required',
            'conf' => 'required'
            ]);
            
            if (DB::table('tb_pinjams')->insert($credentials)){

            };
            return redirect('/pinjam');
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
        $tb_pinjams = DB::table('tb_pinjams')->where('id_pinjam', $id)->first();
        return view('editpinjam', compact('tb_pinjams'));
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
            // 'id_pinjam'=>'required',
            'id_member' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
            'status' => 'required',
            'conf' => 'required'
            ]);
            
            if (DB::table('tb_pinjams')->where('id_pinjam', $request->id_pinjam)->update($credentials)){

            };
            return redirect('/pinjam');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_pinjams')->where('id_pinjam', $id)->delete();
        return redirect('/pinjam');
    }
}
