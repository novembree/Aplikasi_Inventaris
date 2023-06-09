<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\tb_barangbaru;
use App\Models\tb_barang;

class BarangbaruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $tb_barangbarus = DB::table('tb_barangbarus') -> paginate(5) ;
        // return view('barangbaru', ['tb_barangbarus' => $tb_barangbarus]);

        $tb_barangbarus = tb_barangbaru::all();
        return view('barangbaru', compact('tb_barangbarus'));
    }

    public function cetak()
    {
        $tb_barangbarus = DB::table('tb_barangbarus') -> get() ;
        return view('cetakbarangbaru', ['tb_barangbarus' => $tb_barangbarus]);

        // $tb_barangbarus = tb_barangbaru::all();
        // return view('cetakbarangbaru', compact('tb_barangbarus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tb_barangs = tb_barang::all();
        return view('tambahbarangbaru', compact('tb_barangs'));
        // return view('tambahbarangbaru');
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
            'id_barang'=>'required',
            'tanggal_masuk' => 'required',
            'jumlah_barang' => 'required'
            ]);
            
            if (DB::table('tb_barangbarus')->insert($credentials)){

                // dd('string true');
            };
            return redirect('/barangbaru');
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
        // $tb_barangs = tb_barang::all();
        $tb_barangbarus = DB::table('tb_barangbarus')->where('id_barang', $id)->first();
        return view('barangbaruedit', compact('tb_barangbarus'));
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
            'tanggal_masuk' => 'required',
            'jumlah_barang' => 'required'
            ]);
            
            if (DB::table('tb_barangbarus')->where('id_barang', $request->id_barang)->update($credentials)){

                // dd('string true');   
            };
            return redirect('/barangbaru');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_barangbarus')->where('id_barang', $id)->delete();
        return redirect('/barangbaru');
    }
}
