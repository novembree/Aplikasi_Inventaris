@extends('layouts.main')
@section('content') 
    <body>
        <h1 class="text-center font-monospace">Data Barang</h1>
        {{-- <a href="{{url('barangbaru')}}" class="btn btn-primary text-right text-black"> <img src="assets/filetype-html.svg"> Barang Baru </a> --}}
        {{-- <div class="container mt-5 w-50 ">
            <form action="/barang" method="POST">
                @csrf
            <input type="search" name="search" class="form-control" placeholder="Tekan Enter">
            </form>
        </div>
         --}}
        <a href="{{url('tambahbarang')}}" class="btn btn-light"> <img src="assets/adddata.ico"> <span>Add Data</span> </a>
        <a href="/cetakbarang" target="_blank" class="btn btn-light text-right"> <img src="assets/pdf.ico"> <span>Print To PDF</span></a>
        <div class="container mt-5 rounded shadow ">
        </br>
            <table class="table table-hover">
            <thead class="table-dark">
                <tr>
                <td class="text-center">ID Barang</td>
                <td class="text-center">Nama Barang</td>
                <td class="text-center">Jumlah</td>
                <td class="text-center">Deskripsi</td>
                <td class="text-center">Posisi Barang</td>
                <td class="text-center">Status</td>
                <td class="text-center">Foto</td>
                <td class="text-center">QR Code</td>
                <td class="text-center">Action</td>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>@foreach ($tb_barangs as $tb_barangs)
                    <tr>
                        {{-- <th>{{$index + $tb_barangs->firstItem() }}</th> --}}
                        <td class="text-center">{{$tb_barangs->id_barang}}</td>
                        <td class="text-center">{{$tb_barangs->nama_barang}}</td>
                        <td class="text-center">{{$tb_barangs->jumlah_barang}}</td>
                        <td class="text-center">{{$tb_barangs->deskripsi_barang}}</td>
                        <td class="text-center">{{$tb_barangs->posisi_barang}}</td>
                        <td class="text-center">{{$tb_barangs->status_barang}}</td>
                        <td class="text-center">
                            <img src="{{ asset('fotobarang/'. $tb_barangs->foto_barang) }}" style="width: 30px;">
                            {{-- <img src="{{ Storage::url($tb_barangs->foto_barang) }}" style="width: 50px;"> --}}
                            {{-- <img src="assets/Storage/fotobarang/{{$tb_barangs->foto_barang}}" style="width: 50px;"> --}}
                        </td>
                        <td class="text-center">
                            <img src="{{ asset('imgqr/'. $tb_barangs->img_qrcode) }}" style="width: 30px;">
                        </td>
                        <td class="text-center">
                            <a href="/editbarang/{{$tb_barangs->id_barang}}" class="btn btn-light"><img src="assets/update.ico"></a>
                            <a href="/barang/destroy/{{$tb_barangs->id_barang}}" class="btn btn-light" onclick="return confirm('Yakin mau menghapus data ini?')";><img src="assets/delete.ico"></a>
                        </td>
                    </tr>
                @endforeach 
            </tbody>
        </table>
        {{-- </div> --}}
        {{-- {{ $tb_barangs->links() }} --}}
        {{-- </div> --}}
    {{-- </br> --}}
</div>
    </body>
</html>
@endsection