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
                <strong> RUANGAN </strong>
                </div>
                <div class="card-body">
                    <a href="/ruangan/tambah" class="btn btn-primary">Input Ruangan Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>KODE RUANGAN</th>
                                <th>NAMA RUANGAN</th>
                                <th>PENANGGUNG JAWAB</th>
                                
                                <th>OPERASI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ruangan as $p)
                            <tr>
                                <td>{{ $p->kode }}</td>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->pj }}</td>
                                <td>
                                    <a href="/ruangan/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/ruangan/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
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