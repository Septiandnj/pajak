@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<center><h1>Data Tarif Reklame</h1></center>
		<div class="panel panel-primary">
			<div class="panel-heading">Tambah Data Tarif Reklame
			<div class="panel-title pull-right">
			<a href="{{ URL::previous() }}">Kembali</a></div></div>
			<div class="panel-body">
				<form action="{{route('jenis.store')}}" method="post">
					{{csrf_field()}}
					<div class="form-group">
						<label class="control-lable">Nama Jenis Reklame</label>
						<input type="text" name="name" class="form-control" required>
					</div>
					<div class="form-group">
						<label class="control-lable">Harga dasarUkuran 0 - 9.5 (/m<sup>2</sup>)</label>
						<input type="number" name="dasar1" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-lable">Harga dasar Ukuran 10 - 50 (/m<sup>2</sup>)</label>
						<input type="number" name="dasar2" class="form-control" >
					</div>
					<div class="form-group">
						<label class="control-lable">Harga dasar Ukuran > 50 (m<sup>2</sup>)</label>
						<input type="number" name="dasar3" class="form-control" >
					</div>
					<div class="form-group">
						<label class="control-lable">Harga dasar ketinggian (m)</label>
						<input class="form-control" type="number" name="ket">
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-success">Simpan</button>
						<button type="reset" class="btn btn-danger">Reset</button>
					</div>
				</form>
				
			</div>
		</div>
	</div>
</div>
@endsection