<html>
<head>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="text-center">Laporan Data Kembali</h1>
</br>
    <table class="table table-hover">
        <thead class="table-light">
            <tr>
                <td class="text-center">ID Kembali</td>
                <td class="text-center">ID Member</td>
                <td class="text-center">Tanggal Kembali</td>
                <td class="text-center">Conf</td>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; ?>@foreach ($tb_kembalis as $tb_kembalis)
            <tr>
                <td class="text-center">{{$tb_kembalis->id_kembali}}</td>
                <td class="text-center">{{$tb_kembalis->id_member}}</td>
                <td class="text-center">{{$tb_kembalis->tgl_kembali}}</td>
                <td class="text-center">{{$tb_kembalis->conf}}</td>
            </tr> 
            @endforeach
        </tbody>
    </table>
    <script type="text/javascript">

        window.print();
    
    </script>
</body>
</html>