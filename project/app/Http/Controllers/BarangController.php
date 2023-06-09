<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\tb_barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // if($request->has('search')){
        //     $tb_barangs = tb_barang:: where('id_barang', 'LIKE', '%' . $request->search.'%') 
        //     ->orWhere('nama_barang', 'LIKE', '%' . $request->search. '%') 
        //     // ->orWhere('id_barang', 'LIKE','%' .$request->search. '%')
        //     ->get();
        

        // }else{
        //     $tb_barangs = DB::table('tb_barangs') ->get();
        // }
     // mengambil data dari table students
    // mengirim data students ke view daftar
    $tb_barangs = DB::table('tb_barangs') -> get();
    return view('barang',  ['tb_barangs' => $tb_barangs]);
    }

    public function cetak()
    {
     // mengambil data dari table students
    $tb_barangs = DB::table('tb_barangs') -> get();
    // mengirim data students ke view daftar
    return view('cetakbarang', ['tb_barangs' => $tb_barangs]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd('true');
        return view('tambahbarang');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $foto_barang = $request->file('foto_barang')->store('fotobarang');
        // $img_qrcode = $request->file('img_qrcode')->store('imgqr');
        
        // tb_barang::create([
        //     'id_barang'=> $request->id_barang,
        //     'nama_barang' => $request->nama_barang,
        //     'jumlah_barang' => $request->jumlah_barang,
        //     'deskripsi_barang' => $request->deskripsi_barang,
        //     'posisi_barang' => $request->posisi_barang,
        //     'status_barang' => $request->status_barang,
        //     'foto_barang'=> $foto_barang,
        //     'img_qrcode'=> $img_qrcode
        // ]);

        // $credentials = $request->validate([
        //     'id_barang'=>'required',
        //     'nama_barang' => 'required',
        //     'jumlah_barang' => 'required',
        //     'deskripsi_barang' => 'required',
        //     'posisi_barang' => 'required',
        //     'status_barang' => 'required',
        //     'foto_barang' => 'required',
        //     'img_qrcode' => 'required'
        //     ]);
            
        //         if ($request->hasFile('foto_barang')){
                
        //         $request->file('foto_barang')->move('fotobarang/', $request->file('foto_barang')->getClientOriginalName());
        //         $credentials->foto_barang = file('foto_barang')->getClientOriginalName();
        //         $credentials->save();
                
        //     };
            //     if ($request->hasFile('img_qrcode')){
                
            //     $request->file('img_qrcode')->move('imgqr/', $request->file('img_qrcode')->getClientOriginalName());
            //     $credentials->img_qrcode = file('img_qrcode')->getClientOriginalName();
            //     $credentials->save();
                
            // };

            // if (DB::table('tb_barangs')->insert($credentials)){
                
                // $request->file('foto_barang')->move('foto/', $request->file('foto_barang')->getClientOriginalName());
                // $credentials->foto_barang = $request->file('foto_barang')->getClientOriginalName();
                // $credentials->save();
                
            // };

            // if($request->hashFile('foto_barang')){
            // $request->file('foto_barang')->move('foto/', $request->file('foto_barang')->getClientOriginalName());
            // $credentials->foto_barang = $request->file('foto_barang')->getClientOriginalName();
            // $credentials->save();
            // }

            // $request = DB::table('tb_barangs')->insert($credentials)

            $tb_barangs = tb_barang::create($request->all());
            if($request->hasFile('foto_barang')){
                $request->file('foto_barang')->move('fotobarang/', $request->file('foto_barang')->getClientOriginalName()); 
                $tb_barangs->foto_barang = $request->file('foto_barang')->getClientOriginalName(); 
                $tb_barangs->save();
            }

            if($request->hasFile('img_qrcode')){
                $request->file('img_qrcode')->move('imgqr/', $request->file('img_qrcode')->getClientOriginalName()); 
                $tb_barangs->img_qrcode = $request->file('img_qrcode')->getClientOriginalName(); 
                $tb_barangs->save();
            }
             return redirect('/barang');
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
        $tb_barangs = DB::table('tb_barangs')->where('id_barang', $id)->first();
        return view('editbarang', compact('tb_barangs'));
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
            'id_barang'=>'required',
            'nama_barang' => 'required',
            'jumlah_barang' => 'required',
            'deskripsi_barang' => 'required',
            'posisi_barang' => 'required',
            'status_barang' => 'required'
            // 'foto_barang' => 'required',
            // 'img_qrcode' => 'required'
            ]);

        // $this->validate($request, [
        //     'id_barang'=>'required',
        //     'nama_barang' => 'required',
        //     'jumlah_barang' => 'required',
        //     'deskripsi_barang' => 'required',
        //     'posisi_barang' => 'required',
        //     'status_barang' => 'required',
        //     'foto_barang' => 'required',
        //     'img_qrcode' => 'required'
        // ]);
        
        // if($request->foto_barang_lama){
        //     Storage::delete($request->foto_barang_lama);
        //     $foto_barang = $request->file('foto_barang')->store('fotobarang');
        // }

        // if($request->img_qrcode_lama){
        //     Storage::delete($request->img_qrcode_lama);
        //     $img_qrcode = $request->file('img_$img_qrcode')->store('imgqr');
        // }

        // DB::table('tb_barangs')->where('id_barang', $request->id)->update([
            // 'id_barang'=> $request->id_barang,
            // 'nama_barang' => $request->nama_barang,
            // 'jumlah_barang' => $request->jumlah_barang,
            // 'deskripsi_barang' => $request->deskripsi_barang,
            // 'posisi_barang' => $request->posisi_barang,
            // 'status_barang' => $request->status_barang,
            // 'foto_barang'=> $foto_barang,
            // 'img_qrcode'=> $img_qrcode 
        // ]);

            
            if (DB::table('tb_barangs')->where('id_barang', $request->id_barang)->update($credentials)){

                // dd('string true');
                // $request->file('foto_barang')->move('foto/', $request->file('foto_barang')->getClientOriginalName());
                // $credentials->foto_barang = $request->file('foto_barang')->getClientOriginalName();
                // $credentials->save();
                
            };
            // $tb_barangs = tb_barang::findorfail($id);
            // $tb_barangs -> update($request->all());
            return redirect('/barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if($request->foto_barang_lama){
            Storage::delete($request->foto_barang_lama);
        }

        if($request->img_qrcode_lama){
            Storage::delete($request->img_qrcode_lama);
        }

        DB::table('tb_barangs')->where('id_barang', $id)->delete();
        return redirect('/barang');
    }
}
