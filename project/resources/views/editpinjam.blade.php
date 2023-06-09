@extends('layouts.main')
@section('content') 
<body>
        <h1 class="text-center font-monospace">Edit Data Pinjam</h1>
        <div class="container mt-5 rounded shadow w-50">
        </br>
        <form action="/pinjam/edit" method="post" >
            @csrf
            {{-- <h5>ID Pinjam</h5> --}}
            <input type="hidden" class="form-control" value="{{$tb_pinjams->id_pinjam}}" name="id_pinjam"> 
            {{-- @error('id_pinjam') --}}
                {{-- {{$message}} --}}
            {{-- @enderror --}}
        {{-- </br>
        </br> --}}
            <h5>ID Member</h5>
            <input type="text" class="form-control" value="{{$tb_pinjams->id_member}}" name="id_member">
            @error('id_member')
            {{$message}}
            @enderror
    </br>
        </br>
            <h5>Tanggal Pinjam</h5> 
            <input type="date" class="form-control text-center" value="{{$tb_pinjams->tgl_pinjam}}" name="tgl_pinjam">
            @error('tgl_pinjam')
            {{$message}}
            @enderror
    </br>
        </br>
            <h5>Tanggal Kembali</h5>
            <input type="date" class="form-control text-center" value="{{$tb_pinjams->tgl_kembali}}" name="tgl_kembali">
            @error('tgl_kembali')
            {{$message}}
            @enderror
    </br>
        </br>
            <h5>Status</h5>
            {{-- <input type="text" class="form-control" value="{{$tb_pinjams->}}" name="status"> --}}
            <select class="form-control text-center" value="{{$tb_pinjams->status}}" name="status">
                <option selected>Pilih Status</option>
                <option>Terpinjam</option>
                <option>Sudah Kembali</option>
            @error('status')
            {{$message}}
            @enderror
            </select>
    </br>
        </br>
            <h5>Conf</h5>
            <input type="text" class="form-control" value="{{$tb_pinjams->conf}}" name="conf">
            @error('conf')
            {{$message}}
            @enderror
    </br>
    </br>
            <button type="submit" value="submit" class="btn btn-primary">Submit</button>
            <a href="/pinjam" class="btn btn-danger">Cancel</a>
        </form>
    </br>
</div>
        {{-- <a link href="/barang" type="submit "class="btn btn-primary">Submit</a> --}}
    </body>
@endsection