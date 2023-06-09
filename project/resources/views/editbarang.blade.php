@extends('layouts.main')
@section('content') 
    <body>
        <h1 class="text-center font-monospace">Edit Data Barang</h1>
        <div class="container mt-5 rounded shadow w-50">
        </br>
        <form action="/barang/edit" method="POST" >
            @csrf
            {{-- <h5 class="text-center font-monospace">ID</h5> --}}
            <input class="form-control" name="id_barang" type="hidden" value="{{$tb_barangs->id_barang}}"> 
            {{-- @error('id_barang')
                {{$message}}
            @enderror --}}
        {{-- </br> --}}
        {{-- </br> --}}
            <h5 class="text-center font-monospace">Nama Barang</h5>
            <input type="text" class="form-control" name="nama_barang" value="{{$tb_barangs->nama_barang}}">
            @error('nama_barang')
            {{$message}}
            @enderror
    </br>
        </br>
            <h5 class="text-center font-monospace">Jumlah Barang</h5>
            <input type="text" class="form-control" name="jumlah_barang" value="{{$tb_barangs->jumlah_barang}}">
            @error('jumlah_barang')
            {{$message}}
            @enderror
    </br>
        </br>
            <h5 class="text-center font-monospace">Deskripsi</h5>
            <input type="text" class="form-control" name="deskripsi_barang" value="{{$tb_barangs->deskripsi_barang}}">
            @error('deskripsi_barang')
            {{$message}}
            @enderror
    </br>
        </br>
            <h5 class="text-center font-monospace">Posisi</h5>
            <input type="text" class="form-control" name="posisi_barang" value="{{$tb_barangs->posisi_barang}}">
            @error('posisi_barang')
            {{$message}}
            @enderror
    </br>
        </br>
        <h5 class="text-center font-monospace">Status</h5>
        {{-- <input type="text" class="form-control " name="status_barang"> --}}
        <select class="form-control" name="status_barang">
            {{-- @foreach($tb_barangs as $tb_barangs) --}}
            <option class="text-center" selected>Pilih Status</option>
            {{-- @endforeach --}}
            <option class="text-center">Aktif</option>
            <option class="text-center">Tidak Aktif</option>
        @error('status_barang')
        {{$message}}
        @enderror
        </select>
    </br>
        </br>
            <h5 class="text-center font-monospace">Foto</h5>
            {{-- <input type="hidden" class="form-control" name="foto_barang_lama" value="{{$tb_barangs->foto_barang}}"> --}}
            <input type="hidden" class="form-control" name="foto_barang">
            {{-- @error('foto_barang')
            {{$message}}
            @enderror --}}
    </br>
        </br>
            <h5 class="text-center font-monospace">QRCode</h5>
            {{-- <input type="hidden" class="form-control"  name="img_qrcode_lama" value="{{$tb_barangs->img_qrcode}}"> --}}
            <input type="hidden" class="form-control"  name="img_qrcode">
            {{-- @error('img_qrcode')
            {{$message}}
            @enderror --}}
    </br>
    </br>
            <button type="submit" value="submit" class="btn btn-primary">Submit</button>
            <a href="/barang" class="btn btn-danger">Cancel</a>
        </form>
    </br>
        </div>
    </body>
@endsection