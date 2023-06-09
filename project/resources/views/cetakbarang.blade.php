<html>
    <head>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
    </head>
<body>
    <h1 class="text-center">Laporan Data Barang</h1>
</br>
        <table class="table table-hover">
            <thead class="table-light">
                <tr>
                <td class="text-center">ID Barang</td>
                <td class="text-center">Nama Barang</td>
                <td class="text-center">Jumlah</td>
                <td class="text-center">Deskripsi</td>
                <td class="text-center">Posisi Barang</td>
                <td class="text-center">Status</td>
                <td class="text-center">Foto</td>
                <td class="text-center">QR Code</td>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>@foreach ($tb_barangs as $tb_barangs)
                    <tr>
                        <td class="text-center">{{$tb_barangs->id_barang}}</td>
                        <td class="text-center">{{$tb_barangs->nama_barang}}</td>
                        <td class="text-center">{{$tb_barangs->jumlah_barang}}</td>
                        <td class="text-center">{{$tb_barangs->deskripsi_barang}}</td>
                        <td class="text-center">{{$tb_barangs->posisi_barang}}</td>
                        <td class="text-center">{{$tb_barangs->status_barang}}</td>
                        <td class="text-center">
                            <img src="{{ asset('fotobarang/'. $tb_barangs->foto_barang) }}" style="width: 50px;">
                        </td>
                        <td class="text-center">
                            <img src="{{ asset('imgqr/'. $tb_barangs->img_qrcode) }}" style="width: 50px;">
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