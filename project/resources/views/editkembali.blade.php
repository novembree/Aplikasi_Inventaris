@extends('layouts.main')
@section('content') 
    <body>
        <h1>Tambah Data Barang Kembali </h1>
    </br>
</br>
        <form action="/kembali/edit" method="POST" >         
            @csrf
            {{-- <h5>ID Kembali</h5> --}}
            <input type="hidden" class="form-control w-50"  name="id_kembali" value="{{$tb_kembalis->id_kembali}}"> 
            {{-- @error('id_kembali')
                {{$messege}}
            @enderror --}}
        </br>
        </br>
            <h5>ID Member</h5>
            <input type="text" class="form-control w-50" type="text" name="id_member" value="{{$tb_kembalis->id_member}}"">
            @error('id_member')
            {{$messege}}
            @enderror
    </br>
        </br>
            <h5>Tanggal Kembali</h5>
            <input type="date" class="form-control w-50" type="text" name="tgl_kembali" value="{{$tb_kembalis->tgl_kembali}}">
            @error('tgl_kembali')
            {{$messege}}
            @enderror
    </br>
        </br>
            <h5>Conf</h5>
            <input type="text" class="form-control w-50" type="text" name="conf" value="{{$tb_kembalis->conf}}">
            @error('conf')
            {{$messege}}
            @enderror
        </br>
    </br>
            <input type="submit" class="btn btn-primary">
            <a href="/kembali" class="btn btn-danger">Cancel</a>
        </form>
    </body>
@endsection