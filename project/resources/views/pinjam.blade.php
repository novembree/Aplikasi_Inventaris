@extends('layouts.main')
@section('content') 
<!doctype html>
<html>
<body>
    <h1 class="text-center font-monospace">Data Pinjam</h1>
    <a href="/tambahdatapinjam" class="btn btn-light"> <img src="assets/adddata.ico"> Add Data</a>
    <a href="/cetakpinjam" target="_blank" class="btn btn-light"> <img src="assets/pdf.ico"> Print To PDF</a>
<div class="container mt-5 rounded shadow">
</br>
        <table class="table table-hover">
    <thead class="table-dark">
        <tr>
            <td class="text-center">ID Pinjam</td>
            <td class="text-center">ID Member</td>
            <td class="text-center">Tanggal Pinjam</td>
            <td class="text-center">Tanggal Kembali</td>
            <td class="text-center">Status</td>
            <td class="text-center">Conf</td>
            <td class="text-center">Action</td>
        </tr>
    </thead>
    <?php $i=1; ?> @foreach ($tb_pinjams as $tb_pinjams)
    <tbody>
        <tr>
            <td class="text-center">{{$tb_pinjams->id_pinjam}}</td>
            <td class="text-center">{{$tb_pinjams->id_member}}</td>
            <td class="text-center">{{$tb_pinjams->tgl_pinjam}}</td>
            <td class="text-center">{{$tb_pinjams->tgl_kembali}}</td>
            <td class="text-center">{{$tb_pinjams->status}}</td>
            <td class="text-center">{{$tb_pinjams->conf}}</td>
            <td class="text-center">
                <a href="/editpinjam/{{$tb_pinjams->id_pinjam}}" class="btn btn-light"> <img src="assets/update.ico"></a>
                <a href="/pinjam/destroy/{{$tb_pinjams->id_pinjam}}" class="btn btn-light" onclick="return confirm('Yakin mau menghapus data ini?')";> <img src="assets/delete.ico"></a>
            </td>
            @endforeach
        </tr>
    </tbody>
        </table>
</br>
</div>
</body>
</html>
@endsection