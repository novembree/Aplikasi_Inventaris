<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DetailPinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tb_detailpinjams = DB::table('tb_detailpinjams') -> get();
        // mengirim data students ke view daftar
        return view('detailpinjam', ['tb_detailpinjams' => $tb_detailpinjams]);
    }

    public function cetak()
    {
        $tb_detailpinjams = DB::table('tb_detailpinjams') -> get();
        // mengirim data students ke view daftar
        return view('cetakdetailpinjam', ['tb_detailpinjams' => $tb_detailpinjams]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahdetailpinjam');
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
            'id_barang' => 'required',
            'jumlah' => 'required'
            ]);
            
            if (DB::table('tb_detailpinjams')->insert($credentials)){

            };
            return redirect('/detailpinjam');  
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
        $tb_detailpinjams = DB::table('tb_detailpinjams')->where('id_pinjam', $id)->first();
        return view('editdetailpinjam', compact('tb_detailpinjams'));
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
            'id_barang' => 'required',
            'jumlah' => 'required'
            ]);
            
            if (DB::table('tb_detailpinjams')->where('id_pinjam', $request->id_pinjam)->update($credentials)){

            };
            return redirect('/detailpinjam');  
        
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
