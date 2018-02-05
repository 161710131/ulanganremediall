<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Soal4</title>
		<!-- CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<style type="text/css"> body { padding-top:50px; } </style>
	</head>
	<body class="container">
		<div class="col-sm-8 col-sm-offset-2">
			<center>Soal 4 Bonus(Tampilkan semua)</center>
			@foreach ($mahasiswa as $a)
				<hr>
				<h3>Nama mahasiswa : {{ $a->nama }}</h3>
				<h3>Nama Wali : {{$a->wali->nama}}</h3>
				<h3>Nama Dosen : {{$a->dosen->nama}}</h3>
				<h3>Nama jurusan  : {{$a->jurusan->nama_jurusan}}</h3>
				<h4>Mata Pelajaran : 
					@foreach($a->Mata_Kuliah as $b)
					<li><small>{{$b->nama_matkul}}</small></li>
					@endforeach
				</h4>
			</hr>
			@endforeach
		</div>
	</body>
</html>