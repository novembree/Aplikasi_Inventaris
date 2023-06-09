@extends('layouts.main')
@section('content') 
    <body>
        <h1 class="text-center font-monospace">Data Barang Baru</h1>
        <a href="{{url('tambahbarangbaru')}}" class="btn btn-light"><img src="assets/adddata.ico"> Add Data </a>
        <a href="/cetakbarangbaru" target="_blank" class="btn btn-light"><img src="assets/pdf.ico"> Print To PDF </a>
        <div class="container mt-5 rounded shadow">
        </br>
        <table class="table table-hover">
            <thead class="table-dark">
                <tr>
                    <td class="text-center">ID Barang</td>
                    <td class="text-center">Tanggal Masuk</td>
                    <td class="text-center">Jumlah</td>
                    <td class="text-center">Action</td>
                </tr>
            </thead>
            <tbody>
                <?php $i=1 ?> @foreach ($tb_barangbarus as $tb_barangbarus)
                <tr>
                    <td class="text-center">{{$tb_barangbarus->id_barang}}</td>
                    <td class="text-center">{{$tb_barangbarus->tanggal_masuk}}</td>
                    <td class="text-center">{{$tb_barangbarus->jumlah_barang}}</td>
                    <td class="text-center">
                        <a href="/barangbaruedit/{{$tb_barangbarus->id_barang}}" class="btn btn-light"><img src="assets/update.ico"></a>
                        <a href="/barangbaru/destroy/{{$tb_barangbarus->id_barang}}" class="btn btn-light" onclick="return confirm('Yakin mau menghapus data ini?')";><img src="assets/delete.ico"></a>
                    </td>
                </tr>
                @endforeach 
            </tbody>
        </table>
    </br>
        </div>
        {{-- <div> --}}
            {{-- {{ $tb_barangbarus->links() }} --}}
        {{-- </div> --}}
    </body>
@endsection