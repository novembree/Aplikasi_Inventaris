<!DOCTYPE html>
<html>
<head>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="text-center">Laporan Data Temp Pinjam</h1>
</br>
    <table  class="table table-hover">
        <thead class="table-light">
            <tr>
                <td class="text-center">ID Member</td>
                <td class="text-center">ID Barang</td>
                <td class="text-center">Jumlah</td>
                <td class="text-center">Tanggal Pinjam</td>
                <td class="text-center">Tanggal Kembali</td>
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
                </tr>
            @endforeach
        </tbody>
        </table>
        <script type="text/javascript">

            window.print();
        
        </script>
    </body>
</html>