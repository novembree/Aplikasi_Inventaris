@extends('layouts.main')
@section('content')
    <body>
        <h1 class="text-center font-monospace">Data Detail Pinjam</h1>
        <a href="/tambahdetailpinjam" class="btn btn-light"><img src="assets/adddata.ico"> Add Data</a>
        <a href="/cetakdetailpinjam" target="_blank" class="btn btn-light"><img src="assets/pdf.ico"> Print To PDF</a>
<div class="container mt-5 rounded shadow">
        <table  class="table table-hover">
        <thead class="table-dark">
            <tr>
                <td class="text-center">ID Pinjam</td>
                <td class="text-center">ID Barang</td>
                <td class="text-center">Jumlah</td>
                <td class="text-center">Action</td>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; ?>@foreach ($tb_detailpinjams as $tb_detailpinjams)
                <tr>
                    <td class="text-center">{{$tb_detailpinjams->id_pinjam}}</td>
                    <td class="text-center">{{$tb_detailpinjams->id_barang}}</td>
                    <td class="text-center">{{$tb_detailpinjams->jumlah}}</td>
                    <td class="text-center" >
                        <a href="/editdetailpinjam/{{$tb_detailpinjams->id_pinjam}}" class="btn btn-light"><img src="assets/update.ico"></a>
                        <a href="/detailpinjam/destroy/{{$tb_detailpinjams->id_pinjam}}" class="btn btn-light" onclick="return confirm('Yakin mau menghapus data ini?')";><img src="assets/delete.ico"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
</div>
    </body>
@endsection