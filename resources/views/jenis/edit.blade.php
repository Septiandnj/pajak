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
				<form action="{{route('jenis.update',$reklame->id)}}" method="post">
					<input type="hidden" name="_method" value="PUT">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-group">
						<label class="control-lable">Nama Jenis Reklame</label>
						<input type="text" name="name" class="form-control" value="{{$reklame->name}}" required>
					</div>
					<div class="form-group">
						<label class="control-lable">Harga dasar Ukuran 0 - 9.5 (/m<sup>2</sup>)</label>
						<input type="number" name="dasar1" class="form-control" value="{{$reklame->dasar1}}">
					</div>
					<div class="form-group">
						<label class="control-lable">Harga dasar Ukuran 10 - 50 (/m<sup>2</sup>)</label>
						<input type="number" name="dasar2" class="form-control" value="{{$reklame->dasar2}}">
					</div>
					<div class="form-group">
						<label class="control-lable">Harga dasar Ukuran > 50 (m<sup>2</sup>)</label>
						<input type="number" name="dasar3" class="form-control" value="{{$reklame->dasar3}}">
					</div>
					<div class="form-group">
						<label class="control-lable">Harga dasar ketinggian (m)</label>
						<input class="form-control" type="number" name="ket" value="{{$reklame->ket}}">
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