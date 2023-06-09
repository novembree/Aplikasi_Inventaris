@extends('layouts.main')
@section('content') 
    <body>
        <h1 class="text-center font-monospace">Edit Temp Pinjam</h1>
        <div class="container mt-5 rounded shadow w-50">
        </br>
        <form action="/temppinjam/edit" method="post" >
            @csrf
            {{-- <h5 class="text-center font-monospace">ID Member</h5> --}}
            <input type="hidden" class="form-control" value="{{$tb_tempppinjams->id_member}}" name="id_member"> 
            {{-- @error('id_member')
                {{$message}}
            @enderror --}}
            <h5 class="text-center font-monospace">ID Barang</h5>
            <input type="text" class="form-control" value="{{$tb_tempppinjams->id_barang}}" name="id_barang">
            @error('id_barang')
            {{$message}}
            @enderror
    </br>
        </br>
            <h5 class="text-center font-monospace">Jumlah</h5> 
            <input type="text" class="form-control" value="{{$tb_tempppinjams->jumlah}}" name="jumlah">
            @error('jumlah')
            {{$message}}
            @enderror
        </br>
    </br>
        <h5 class="text-center font-monospace">Tanggal Pinjam</h5> 
        <input type="date" class="form-control text-center" value="{{$tb_tempppinjams->tgl_pinjam}}" name="tgl_pinjam">
        @error('tgl_pinjam')
        {{$message}}
        @enderror
    </br>
</br>
    <h5 class="text-center font-monospace">Tanggal Kembali</h5> 
    <input type="date" class="form-control text-center" value="{{$tb_tempppinjams->tgl_kembali}}" name="tgl_kembali">
    @error('tgl_kembali')
    {{$message}}
    @enderror
</br>
</br>
            <button type="submit" value="submit" class="btn btn-primary">Submit</button>
            <a href="/temppinjam" class="btn btn-danger">Cancel</a>
        </form>
    </br>
        </div>
        {{-- <a link href="/barang" type="submit "class="btn btn-primary">Submit</a> --}}
    </body>
@endsection