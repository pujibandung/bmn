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
                <strong> DAFTAR BARANG </strong>
                </div>
                <div class="card-body">
                 
                @foreach($barang_detail as $index => $item)
                    @if($index == 0)
                          <a href="/barang_detail/tambah/{{ $item->barang_id }}" class="btn btn-primary">Input Daftar Barang</a>
                    @endif
                 @endforeach
                 <a href="/barang/" class="btn btn-primary">Kembali</a>

                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>KODE BARANG</th>
                                <th>NAMA</th>                             
                                
                                <th>OPERASI</th>
                             
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($barang_detail as $p)
                            <tr>
                                <td>{{ $p->kode_barang_detail }}</td>
                                <td>{{ $p->nama }}</td>
                             
                                <td>
                                    <a href="/barang_detail/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/barang_detail/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
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