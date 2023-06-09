@extends('layouts.main')
@section('content') 
    <body>
        <h1 class="text-center font-monospace">Tambah Data Barang Baru</h1>
        <div class="container mt-5 rounded shadow w-50">
        </br>
        <form action="/barangbaru" method="POST" >
            @csrf
            {{-- <div class="mb-3"> --}}
            <h5 class="text-center font-monospace">ID</h5>
            {{-- <input type="text" class="form-control w-50" name="id_barang"> --}}
            <select class="form-control" name="id_barang">
                @foreach ($tb_barangs as $tb_barangs)
                <option value="{{$tb_barangs->id_barang}}"->{{$tb_barangs->id_barang}}></option>
                @endforeach
            @error('id_barang')
                {{$messege}}
            @enderror
            </select>
            {{-- </div> --}}
        </br>
        </br>
            <h5 class="text-center font-monospace">Tanggal Masuk</h5>
            <input type="date" class="form-control text-center" name="tanggal_masuk">
            @error('tanggal_masuk')
            {{$messege}}
            @enderror
    </br>
        </br>
            <h5 class="text-center font-monospace">Jumlah Barang</h5>
            <input type="text" class="form-control" name="jumlah_barang">
            @error('jumlah_barang')
            {{$messege}}
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