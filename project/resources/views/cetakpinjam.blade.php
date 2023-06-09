<!DOCTYPE html>
<html>
<head>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="text-center">Laporan Data Pinjam</h1>
</br>
    <table class="table table-hover">
        <thead class="table-light">
            <tr>
                <td class="text-center">ID Pinjam</td>
                <td class="text-center">ID Member</td>
                <td class="text-center">Tanggal Pinjam</td>
                <td class="text-center">Tanggal Kembali</td>
                <td class="text-center">Status</td>
                <td class="text-center">Conf</td>
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
                @endforeach
            </tr>
        </tbody>
            </table>
            <script type="text/javascript">

                window.print();
            
            </script>
</body>
</html>