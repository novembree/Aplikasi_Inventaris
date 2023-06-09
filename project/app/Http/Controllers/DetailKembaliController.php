<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailKembaliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    // mengambil data dari table students
    $tb_detailkembalis = DB::table('tb_detailkembalis') -> get();
    // mengirim data students ke view daftar
    return view('detailkembali', ['tb_detailkembalis' => $tb_detailkembalis]);
    }

    public function cetak()
    {
    // mengambil data dari table students
    $tb_detailkembalis = DB::table('tb_detailkembalis') -> get();
    // mengirim data students ke view daftar
    return view('cetakdetailkembali', ['tb_detailkembalis' => $tb_detailkembalis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahdetailkembali');
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
            'id_barang' => 'required',
            'jumlah' => 'required'
            ]);
            
            if (DB::table('tb_detailkembalis')->insert($credentials)){

            };
            return redirect('/detailkembali');
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
    public function edit($id){
        $tb_detailkembalis = DB::table('tb_detailkembalis')->where('id_kembali', $id)->first();
        return view('editdetailkembali', compact('tb_detailkembalis'));
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
            // 'id_barang'=>'required',
            'id_barang' => 'required',
            'jumlah' => 'required'
            ]);
            
            if (DB::table('tb_detailkembalis')->where('id_kembali', $request->id_kembali)->update($credentials)){

            };
            return redirect('/detailkembali');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_detailkembalis')->where('id_kembali', $id)->delete();
        return redirect('/detailkembali');
    }
}
