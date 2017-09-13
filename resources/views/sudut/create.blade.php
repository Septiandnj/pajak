@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<center><h1>Data Sudut Pandang</h1></center>
		<div class="panel panel-primary">
			<div class="panel-heading">Tambah Data Sudut Pandang
			<div class="panel-title pull-right">
			<a href="{{ URL::previous() }}">Kembali</a></div></div>
			<div class="panel-body">
				<form action="{{route('sudut.store')}}" method="post">
					{{csrf_field()}}
					<div class="form-group">
						<label class="control-lable">Arah</label>
						<input type="text" name="arah" class="form-control" required>
					</div>
					<div class="form-group">
						<label class="control-lable">Skor</label>
						<input type="number" name="skor" class="form-control" required>
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