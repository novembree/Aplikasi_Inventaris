@extends('layouts.main')
@section('content') 
    <body>
        <h1 class="text-center font-monospace">Tambah Data Detail Pinjam</h1>
        <div class="container mt-5 shadow rounded w-50">
        </br>
        <form action="/detailpinjam" method="post" >
            @csrf
            <h5 class="text-center font-monospace">ID Pinjam</h5>
            <input type="text" class="form-control" name="id_pinjam"> 
            @error('id_pinjam')
                {{$message}}
            @enderror
        </br>
        </br>
            <h5 class="text-center font-monospace">ID Barang</h5>
            <input type="text" class="form-control" name="id_barang">
            @error('id_barang')
            {{$message}}
            @enderror
    </br>
        </br>
            <h5 class="text-center font-monospace">Jumlah</h5> 
            <input type="text" class="form-control" name="jumlah">
            @error('jumlah')
            {{$message}}
            @enderror
    </br>
        </br>
            <button type="submit" value="submit" class="btn btn-primary">Submit</button>
            <a href="/detailpinjam" class="btn btn-danger">Cancel</a>
        </form>
    </br>
        </div>
        {{-- <a link href="/barang" type="submit "class="btn btn-primary">Submit</a> --}}
    </body>
@endsection