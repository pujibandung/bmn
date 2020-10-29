<!DOCTYPE html>
<html>
<head>
	<title>BBLM</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

	<div class="container">
		<div class="card mt-5">
			<div class="card-body">
				
				<h5 class="text-center my-4">KODE BARANG</h5>
				<table class="table table-bordered table-striped">
					
						<tr>
							<th>Kode Kategori </th>
                                                   
							<th>Kode Detail</th>
                            <th>Nama Barang</th>
                            <th>Operasi</th>
						</tr>
									

						@foreach($barang as $b)
                       
                        @foreach($b->barang_details as $bd)
                        <tr>
								<td>	{{$b->kode}} </td>
                               
                                
								<td>	{{$bd->kode_barang_detail}}</td>
                                <td>	{{$bd->nama}}</td>
                                <td>
                                    <a href="/ruangan/edit/{{ $bd->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/ruangan/hapus/{{ $bd->id }}" class="btn btn-danger">Hapus</a>
                                </td>

     						
                                </tr>
						@endforeach

						
							                       
                       
						@endforeach
					
				</table>
			</div>
		</div>
	</div>

</body>
</html>