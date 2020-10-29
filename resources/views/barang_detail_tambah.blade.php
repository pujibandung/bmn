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
                    <strong>TAMBAH BARANG</strong>
                </div>

               
                <div class="card-body">
                    <a href="/barang" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/barang_detail/store">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Kode barang</label>
                            <input type="text" name="kode_barang_detail" class="form-control" placeholder="">

                            @if($errors->has('kode_barang_detail'))
                                <div class="text-danger">
                                    {{ $errors->first('kode_barang_detail')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Nama barang</label>
                            <input type="text" name="nama" class="form-control" placeholder="">

                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif

                        </div>

                       
                        <input type="hidden" id="barang_id" name="barang_id" value="{{$barang_id}}">

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html>