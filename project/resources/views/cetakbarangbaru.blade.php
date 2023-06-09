<html>
<head>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>
    <h1 class="text-center">Laporan Data Barang Baru</h1>
</br>
    <table class="table table-hover">
        <thead class="table-light">
            <tr>
                <td class="text-center">ID Barang</td>
                <td class="text-center">Tanggal Masuk</td>
                <td class="text-center">Jumlah</td>
            </tr>
        </thead>
        <tbody>
            <?php $i=1 ?> @foreach ($tb_barangbarus as $tb_barangbarus)
            <tr>
                <td class="text-center">{{$tb_barangbarus->id_barang}}</td>
                <td class="text-center">{{$tb_barangbarus->tanggal_masuk}}</td>
                <td class="text-center">{{$tb_barangbarus->jumlah_barang}}</td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    <script type="text/javascript">

        window.print();
    
    </script>
</body>
</html>