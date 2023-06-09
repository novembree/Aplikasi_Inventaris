@extends('layouts.main')
@section('content') 
    <body>
        <h1 class="text-center font-monospace">Edit Data Barang Baru</h1>
        <div class="container rounded shadow mt-5 w-50">
        </br>
        <form action="/barangbaru/edit" method="POST" >
            @csrf
            {{-- <h5>ID</h5> --}}
            {{-- <select class="form-control w-50" name="id_barang" type='hidden'> --}}
                {{-- @foreach ($tb_barangs as $tb_barangs) --}}
                {{-- <option value="{{$tb_barangs->id_barang}}" > {{$tb_barangs->id_barang}}></option> --}}
                {{-- <option value="{{$tb_barangbarus->id_barang}}"></option> --}}
                <input classs="form-control" type="hidden" name="id_barang" value="{{$tb_barangbarus->id_barang}}" >
                {{-- @endforeach --}}
                {{-- @error('id_barang')
                    {{$messege}}
                @enderror --}}
            {{-- </select> --}}
        </br>
    </br>
    {{-- <div class="form-group"> --}}
            {{-- <input class="form-control" type="hidden" name="id_barang" id="id_barang" value="{{ $tb_barangbarus->id_barang}}"> --}}
            <h5 class="text-center font-monospace">Tanggal Masuk</h5>
            <input type="date" class="form-control text-center" name="tanggal_masuk" value="{{$tb_barangbarus->tanggal_masuk}}">
            @error('tanggal_masuk')
            {{$message}}
            @enderror
    </br>
        </br>
            <h5 class="text-center font-monospace">Jumlah Barang</h5>
            <input type="text" class="form-control" name="jumlah_barang" value="{{$tb_barangbarus->jumlah_barang}}">
            @error('jumlah_barang')
            {{$message}}
            @enderror
    </br>
    </br>
            <button type="submit" value="submit" class="btn btn-primary">Submit</button>
            <a href="/barangbaru" class="btn btn-danger">Cancel</a>
        </form>
    </br>
        </div>
    </body>
@endsection