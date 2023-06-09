@extends('layouts.main')
@section('content')
    <body>
        {{-- <div class="container mt-5 "> --}}
        <h1 class="text-center font-monospace">Data Detail Kembali</h1>
        <a href="/tambahdetailkembali" class="btn btn-light"><img src="assets/adddata.ico"> Add Data</a>
        <a href="/cetakdetailkembali" target="_blank" class="btn btn-light"><img src="assets/pdf.ico"> Print To PDF</a>
        {{-- </div> --}}
        <div class="container mt-5 rounded shadow">
        </br>
        <table  class="table table-hover">
        <thead class="table-dark">
            <tr>
                <td class="text-center">ID Kembali</td>
                <td class="text-center">ID Barang</td>
                <td class="text-center">Jumlah</td>
                <td class="text-center">Action</td>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; ?>@foreach ($tb_detailkembalis as $tb_detailkembalis)
                <tr>
                    <td class="text-center">{{$tb_detailkembalis->id_kembali}}</td>
                    <td class="text-center">{{$tb_detailkembalis->id_barang}}</td>
                    <td class="text-center">{{$tb_detailkembalis->jumlah}}</td>
                    <td class="text-center" >
                        <a href="/editdetailkembali/{{$tb_detailkembalis->id_kembali}}" class="btn btn-light"><img src="assets/update.ico"></a>
                        <a href="/detailkembali/destroy/{{$tb_detailkembalis->id_kembali}}" class="btn btn-light" onclick="return confirm('Yakin mau menghapus data ini?')";><img src="assets/delete.ico"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </br>
        </div>
    </body>
@endsection