@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<center><h1>Data Sudut Pandang</h1></center>
		<div class="panel panel-primary">
			<div class="panel-heading">Tambah Data Sudut Sudut
			<div class="panel-title pull-right">
			<a href="{{ URL::previous() }}">Kembali</a></div></div>
			<div class="panel-body">
				<form action="{{route('sudut.update',$sudut->id)}}" method="post">
					<input type="hidden" name="_method" value="PUT">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-group">
						<label class="control-lable">Arah</label>
						<input type="text" name="arah" class="form-control" value="{{$sudut->arah}}" required>
					</div>
					<div class="form-group">
						<label class="control-lable">Skor</label>
						<input type="number" name="skor" class="form-control" value="{{$sudut->skor}}">
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