<!DOCTYPE html>
<html>
<head>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="text-center">Laporan Data Detail Kembali</h1>
</br>
    <table  class="table table-hover">
        <thead class="table-light">
            <tr>
                <td class="text-center">ID Kembali</td>
                <td class="text-center">ID Barang</td>
                <td class="text-center">Jumlah</td>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; ?>@foreach ($tb_detailkembalis as $tb_detailkembalis)
                <tr>
                    <td class="text-center">{{$tb_detailkembalis->id_kembali}}</td>
                    <td class="text-center">{{$tb_detailkembalis->id_barang}}</td>
                    <td class="text-center">{{$tb_detailkembalis->jumlah}}</td>
                </tr>
            @endforeach
        </tbody>
        </table>    
        <script type="text/javascript">

            window.print();
        
        </script>
</body>
</html>