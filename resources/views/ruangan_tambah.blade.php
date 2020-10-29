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
                    <strong>TAMBAH DATA</strong>
                </div>
                <div class="card-body">
                    <a href="/ruangan" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/ruangan/store">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Kode Ruangan</label>
                            <input type="text" name="kode" class="form-control" placeholder="">

                            @if($errors->has('kode'))
                                <div class="text-danger">
                                    {{ $errors->first('kode')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Nama Ruangan</label>
                            <input type="text" name="nama" class="form-control" placeholder="">

                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Penanggung Jawab</label>
                            <input type="text" name="pj" class="form-control" placeholder="">

                            @if($errors->has('pj'))
                                <div class="text-danger">
                                    {{ $errors->first('pj')}}
                                </div>
                            @endif

                        </div>
                       

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html>