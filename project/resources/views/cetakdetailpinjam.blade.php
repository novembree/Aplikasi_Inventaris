<!DOCTYPE html>
<html>
<head>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="text-center">Laporan Data Detail Pinjam</h1>
</br>
    <table  class="table table-hover">
        <thead class="table-light">
            <tr>
                <td class="text-center">ID Pinjam</td>
                <td class="text-center">ID Barang</td>
                <td class="text-center">Jumlah</td>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; ?>@foreach ($tb_detailpinjams as $tb_detailpinjams)
                <tr>
                    <td class="text-center">{{$tb_detailpinjams->id_pinjam}}</td>
                    <td class="text-center">{{$tb_detailpinjams->id_barang}}</td>
                    <td class="text-center">{{$tb_detailpinjams->jumlah}}</td>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
        <script type="text/javascript">

            window.print();
        
        </script>
</body>
</html>