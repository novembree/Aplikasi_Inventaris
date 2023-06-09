@extends('layouts.main')
@section('content') 
    <body>
        <h1 class="text-center font-monospace">Data Barang Kembali </h1>
        <a href="/tambahdatakembali" class="btn btn-light"><img src="assets/adddata.ico"> Add Data</a>
        <a href="/cetakkembali" target="_blank" class="btn btn-light"><img src="assets/pdf.ico"> Print To PDF</a>
        <div class="container mt-5 rounded shadow"> 
        <table class="table table-hover">
            <thead class="table-dark">
                <tr>
                    <td class="text-center">ID Kembali</td>
                    <td class="text-center">ID Member</td>
                    <td class="text-center">Tanggal Kembali</td>
                    <td class="text-center">Conf</td>
                    <td class="text-center">Action</td>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; ?>@foreach ($tb_kembalis as $tb_kembalis)
                <tr>
                    <td class="text-center">{{$tb_kembalis->id_kembali}}</td>
                    <td class="text-center">{{$tb_kembalis->id_member}}</td>
                    <td class="text-center">{{$tb_kembalis->tgl_kembali}}</td>
                    <td class="text-center">{{$tb_kembalis->conf}}</td>
                    <td class="text-center">
                        <a href="/editkembali/{{$tb_kembalis->id_kembali}}" class="btn btn-light"><img src="assets/update.ico"></a>
                        <a href="/kembali/destroy/{{$tb_kembalis->id_kembali}}" class="btn btn-light" onclick="return confirm('Yakin mau menghapus data ini?')";><img src="assets/delete.ico"></a>
                    </td>
                </tr> 
                @endforeach
            </tbody>
        </table>
        </div>
    </body>
@endsection