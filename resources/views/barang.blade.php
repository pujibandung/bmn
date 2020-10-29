<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>BBLM</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                <strong> KATEGORI BARANG </strong>
                </div>
                <div class="card-body">
                    <a href="/barang/tambah" class="btn btn-primary">Input Kategori Barang</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>KODE BARANG</th>
                                <th>NAMA</th>                             
                                
                                <th>OPERASI</th>
                                <th>DAFTAR BARANG</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($barang as $p)
                            <tr>
                                <td>{{ $p->kode }}</td>
                                <td>{{ $p->nama }}</td>
                             
                                <td>
                                    <a href="/barang/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/barang/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                </td>

                                <td>
                                    <a href="/barang_detail/{{ $p->id }}" class="btn btn-danger">LIHAT</a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>