@extends('layouts.main')
@section('content')
    <body>
        <h1 class="text-center font-monospace">Data Temp Pinjam</h1>
        <a href="/tambahtemppinjam" class="btn btn-light"><img src="assets/adddata.ico"> Add Data</a>
        <a href="/cetaktemppinjam" target="_blank" class="btn btn-light"><img src="assets/pdf.ico"> Print To PDF</a>
<div class="container mt-5 rounded shadow">
        <table  class="table table-hover">
        <thead class="table-dark">
            <tr>
                <td class="text-center">ID Member</td>
                <td class="text-center">ID Barang</td>
                <td class="text-center">Jumlah</td>
                <td class="text-center">Tanggal Pinjam</td>
                <td class="text-center">Tanggal Kembali</td>
                <td class="text-center">Action</td>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; ?>@foreach ($tb_tempppinjams as $tb_tempppinjams)
                <tr>
                    <td class="text-center">{{$tb_tempppinjams->id_member}}</td>
                    <td class="text-center">{{$tb_tempppinjams->id_barang}}</td>
                    <td class="text-center">{{$tb_tempppinjams->jumlah}}</td>
                    <td class="text-center">{{$tb_tempppinjams->tgl_pinjam}}</td>
                    <td class="text-center">{{$tb_tempppinjams->tgl_kembali}}</td>
                    <td class="text-center" >
                        <a href="/edittemppinjam/{{$tb_tempppinjams->id_member}}" class="btn btn-light"><img src="assets/update.ico"></a>
                        <a href="/temppinjam/destroy/{{$tb_tempppinjams->id_member}}" class="btn btn-light" onclick="return confirm('Yakin mau menghapus data ini?')";><img src="assets/delete.ico"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
</div>
    </body>
@endsection