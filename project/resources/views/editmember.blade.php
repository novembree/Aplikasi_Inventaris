@extends('layouts.main')
@section('content') 
    <body>
        <h1 class="text-center font-monospace">Tambah Data Member</h1>
        <div class="container mt-5 rounded shadow w-50">
        </br>
        <form action="/member/edit" method="post" enctype="multipart/form-data">
            @csrf
            {{-- <h5 class="text-center font-monospace">ID Member</h5> --}}
            <input type="hidden" class="form-control " name="id_member" value="{{$tb_members->id_member}}"> 
            {{-- @error('id_member')
                {{$message}}
            @enderror
        </br>
        </br> --}}
            <h5 class="text-center font-monospace">Username</h5>
            <input type="text" class="form-control " name="username" value="{{$tb_members->username}}">
            @error('username')
            {{$message}}
            @enderror
    </br>
        </br>
            <h5 class="text-center font-monospace">Password</h5> 
            <input type="text" class="form-control " name="password" value="{{$tb_members->password}}">
            @error('password')
            {{$message}}
            @enderror
    </br>
        </br>
        <select class="form-control" name="pendidikan_member">
            <option class="text-center" selected>Pilih Pendidikan</option>
            <option class="text-center">S1</option>
            <option class="text-center">SMA</option>
            <option class="text-center">SMP</option>
            <option class="text-center">SD</option>
        @error('status')
        {{$message}}
        @enderror
        </select>
    </br>
        </br>
            <h5 class="text-center font-monospace">Email</h5>
            <input type="text" class="form-control " name="email_member" value="{{$tb_members->email_member}}">
            @error('email_member')
            {{$message}}
            @enderror
        </br>
            </br>
                <h5 class="text-center font-monospace">Foto</h5>
                <input type="hidden" class="form-control " name="foto" value="{{$tb_members->foto}}">
                @error('foto')
                {{$message}}
                @enderror
        </br>
            </br>
                <h5 class="text-center font-monospace">NO HP</h5>
                <input type="text" class="form-control "  name="no_hp" value="{{$tb_members->no_hp}}">
                @error('no_hp')
                {{$message}}
                @enderror
    </br>
        </br>
                <h5 class="text-center font-monospace">Jabatan</h5>
                <select class="form-control" name="jabatan_member">
                    <option class="text-center" selected>Pilih Jabatan</option>
                    <option class="text-center">Admin</option>
                    <option class="text-center" disabled>Member</option>
                @error('jabatan_member')
                {{$message}}
                @enderror
                </select>
    </br>
        </br>
                <h5 class="text-center font-monospace">Alamat</h5>
                <input type="text" class="form-control "  name="alamat_member" value="{{$tb_members->alamat_member}}">
                @error('alamat_member')
                {{$message}}
                @enderror
    </br>
        </br>
            <h5 class="text-center font-monospace">Status</h5>
            {{-- <input type="text" class="form-control " name="status_barang"> --}}
            <select class="form-control" name="status">
                <option class="text-center" selected>Pilih Status</option>
                <option class="text-center">Menikah</option>
                <option class="text-center">Belum Menikah</option>
            @error('status')
            {{$message}}
            @enderror
            </select>
    </br>
    </br>
            <button type="submit" value="submit" class="btn btn-primary">Submit</button>
            <a href="/member" class="btn btn-danger">Cancel</a>
        </form>
    </br>
        {{-- <a link href="/barang" type="submit "class="btn btn-primary">Submit</a> --}}
        </div>
    </body>
    
@endsection