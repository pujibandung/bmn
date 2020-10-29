<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tutorial Laravel #21 : CRUD Eloquent Laravel - www.malasngoding.com</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   <strong>EDIT DATA</strong>
                </div>
                <div class="card-body">
                    <a href="/ruangan" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    

                    <form method="post" action="/ruangan/update/{{ $ruangan->id }}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>Kode Ruangan</label>
                            <input type="text" name="kode" class="form-control" placeholder="Kode ruangan .." value=" {{ $ruangan->kode }}">

                            @if($errors->has('kode'))
                                <div class="text-danger">
                                    {{ $errors->first('kode')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama ruangan .." value=" {{ $ruangan->nama }}">

                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Penanggung Jawab</label>
                            <input type="text" name="pj" class="form-control" placeholder="Penanggung Jawab .." value=" {{ $ruangan->pj }}">

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