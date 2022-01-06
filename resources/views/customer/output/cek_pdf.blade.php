<!DOCTYPE html>
<html>
<head>
	<title>Data Companies</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Data Customer</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Telephone</th>
				<th>Tanggal Registrasi</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($customer as $p)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{ $p->nama }}</td>
				<td>{{ $p->alamat }}</td>
				<td>{{ $p->nomor_telephone }}</td>
				<td>{{ $p->tanggal_registrasi	 }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>