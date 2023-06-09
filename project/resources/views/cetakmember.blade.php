<head>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="text-center font-monospace">Data Member</h1>
    {{-- <a href="/tambahmember" class="btn btn-light"> <img src="assets/adddata.ico"> <span>Add Data</span> </a>
    <a href="#" class="btn btn-light"><img src="assets/pdf.ico">Print To PDF</a>
    <div class="container mt-5 rounded shadow"> --}}
    </br>
    <table class="table table-hover">
        <thead class="table-lightp">
            <tr>
            <td class="text-center">ID</td>
            <td class="text-center">Username</td>
            <td class="text-center">Password</td>
            <td class="text-center">Pendidikan</td>
            <td class="text-center">Email</td>
            <td class="text-center">Foto</td>
            <td class="text-center">NO HP</td>
            <td class="text-center">Jabatan</td>
            <td class="text-center">Alamat</td>
            <td class="text-center">Status</td>
            {{-- <td class="text-center">Action</td> --}}
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>@foreach ($tb_members as $tb_members)
                <tr>
                    <td class="text-center">{{$tb_members->id_member}}</td>
                    <td class="text-center">{{$tb_members->username}}</td>
                    <td class="text-center">{{$tb_members->password}}</td>
                    <td class="text-center">{{$tb_members->pendidikan_member}}</td>
                    <td class="text-center">{{$tb_members->email_member}}</td>
                    <td class="text-center">
                        <img src="{{ asset('foto/'. $tb_members->foto) }}" style="width: 50px;">
                    </td>
                    <td class="text-center">{{$tb_members->no_hp}}</td>
                    <td class="text-center">{{$tb_members->jabatan_member}}</td>
                    <td class="text-center">{{$tb_members->alamat_member}}</td>
                    <td class="text-center">{{$tb_members->status}}</td>
                    {{-- <td>
                        <a href="/editmember/{{$tb_members->id_member}}" class="btn btn-light"><img src="assets/update.ico"></a>
                        <a href="/member/destroy/{{$tb_members->id_member}}" class="btn btn-light" onclick="return confirm('Yakin mau menghapus data ini?')";><img src="assets/delete.ico"></a>
                    </td> --}}
                </tr>
            @endforeach 
        </tbody>
    </table>
    <script type="text/javascript">

        window.print();
    
    </script>
    {{-- </br>
    </div> --}}
    </body>