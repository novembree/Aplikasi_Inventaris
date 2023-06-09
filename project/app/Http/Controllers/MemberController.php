<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\tb_member;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $tb_members = DB::table('tb_members') -> get();
    return view('member', ['tb_members' => $tb_members]);
    }

    public function cetak()
    {
    $tb_members = DB::table('tb_members') -> get();
    return view('cetakmember', ['tb_members' => $tb_members]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahmember');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $credentials = $request->validate([
            // 'id_member'=>'required',
            // 'username' => 'required',
            // 'password' => 'required',
            // 'pendidikan_member' => 'required',
            // 'email_member' => 'required',
            // 'foto' => 'required',
            // 'no_hp' => 'required',
            // 'jabaran_member' => 'required',
            // 'status' => 'required'
            // ]);
            // if (DB::table('tb_members')->insert($credentials)){
                $tb_members = tb_member::create($request->all());
                if($request->hasFile('foto')){
                    $request->file('foto')->move('fotofoto/', $request->file('foto')->getClientOriginalName()); 
                    $tb_members->foto = $request->file('foto')->getClientOriginalName(); 
                    $tb_members->save();
                }
            // };
            return redirect('/member');
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
        $tb_members = DB::table('tb_members')->where('id_member', $id)->first();
        return view('editmember', compact('tb_members'));
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
            'id_member'=>'required',
            'username' => 'required',
            'password' => 'required',
            'pendidikan_member' => 'required',
            'email_member' => 'required',
            // 'foto' => 'required',
            'no_hp' => 'required',
            'jabaran_member' => 'required',
            'status' => 'required'
            ]);
            if (DB::table('tb_members')->where('id_member', $request->id_member)->update($credentials)){

                
            };
            return redirect('/member');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_members')->where('id_member', $id)->delete();
        return redirect('/member');
    }
}
