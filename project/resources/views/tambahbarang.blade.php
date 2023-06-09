@extends('layouts.main')
@section('content') 
    <body>
        <h1 class="text-center font-monospace">Tambah Data Barang</h1>
        <div class="container mt-5 rounded shadow w-50">
        </br>
        <form action="/barang" method="post" enctype="multipart/form-data">
            @csrf
            <h5 class="text-center font-monospace">ID</h5>
            <input type="text" class="form-control " name="id_barang"> 
            @error('id_barang')
                {{$message}}
            @enderror
        </br>
        </br>
            <h5 class="text-center font-monospace">Nama Barang</h5>
            <input type="text" class="form-control " name="nama_barang">
            @error('nama_barang')
            {{$message}}
            @enderror
    </br>
        </br>
            <h5 class="text-center font-monospace">Jumlah Barang</h5> 
            <input type="text" class="form-control " id="jumlah_barang" name="jumlah_barang">
            @error('jumlah_barang')
            {{$message}}
            @enderror
    </br>
        </br>
            <h5 class="text-center font-monospace">Deskripsi</h5>
            <input type="text" class="form-control " name="deskripsi_barang">
            @error('deskripsi_barang')
            {{$message}}
            @enderror
    </br>
        </br>
            <h5 class="text-center font-monospace">Posisi</h5>
            <input type="text" class="form-control " name="posisi_barang">
            @error('posisi_barang')
            {{$message}}
            @enderror
    </br>
        </br>
            <h5 class="text-center font-monospace">Status</h5>
            {{-- <input type="text" class="form-control " name="status_barang"> --}}
            <select class="form-control" name="status_barang">
                <option class="text-center" selected>Pilih Status</option>
                <option class="text-center">Aktif</option>
                <option class="text-center">Tidak Aktif</option>
            @error('status_barang')
            {{$message}}
            @enderror
            </select>
    </br>
        </br>
            <h5 class="text-center font-monospace">Foto</h5>
            <input type="file" class="form-control " name="foto_barang">
            @error('foto_barang')
            {{$message}}
            @enderror
    </br>
        </br>
            <h5 class="text-center font-monospace">QRCode</h5>
            <input type="file" class="form-control "  name="img_qrcode" id="img_qrcode">
            @error('img_qrcode')
            {{$message}}
            @enderror
    </br>
    </br>
            <button type="submit" value="submit" class="btn btn-primary">Submit</button>
            <a href="/barang" class="btn btn-danger">Cancel</a>
        </form>
    </br>
        {{-- <a link href="/barang" type="submit "class="btn btn-primary">Submit</a> --}}
        </div>
    </body>
    
@endsection