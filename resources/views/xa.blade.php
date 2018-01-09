<!DOCTYPE html>
<html>
<head>
	<title>ee</title>
</head>
<body>
data <br>
@foreach ($a as $b)
{{$b->kode_barang}} +
{{$b->nama_barang}} +
{{$b->harga}} <hr>
@endforeach
</body>
</html>