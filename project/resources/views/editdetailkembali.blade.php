@extends('layouts.main')
@section('content') 
    <body>
        <h1 class="text-center font-monospace">Edit Data Detail Kembali</h1>
        <div class="container mt-5 rounded shadow w-50">
        </br>
        <form action="/detailkembali/edit" method="POST" >
            @csrf
            {{-- <h5 class="text-center font-monospace">ID Kembali</h5> --}}
            <input type="hidden" class="form-control" value="{{$tb_detailkembalis->id_kembali}}" name="id_kembali">
            {{-- @error('id_kembali')
                {{$messege}}
            @enderror --}}
        </br>
        </br>
            <h5 class="text-center font-monospace">ID Barang</h5>
            <input type="text" class="form-control" value="{{$tb_detailkembalis->id_barang}}" name="id_barang">
            @error('id_barang')
            {{$messege}}
            @enderror
    </br>
        </br>
            <h5 class="text-center font-monospace">Jumlah Barang</h5>
            <input type="text" class="form-control" value="{{$tb_detailkembalis->jumlah}}" name="jumlah">
            @error('jumlah')
            {{$messege}}
            @enderror
    </br>
        </br>
        <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
        <a href="/detailkembali" class="btn btn-danger">Cancel</a>
        </form>
    </br>
        </div>
    </body>
@endsection