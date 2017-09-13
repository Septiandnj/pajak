@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
	<div class="col-md-12">
		<center><h1>Data Sudut Pandang</h1></center>
		<div class="panel panel-primary">
			<div class="panel-heading">Data Sudut Pandang
			<div class="panel-title pull-right"><a href="{{route('sudut.create')}}">Tambah Data</a></div></div>
			<div class="panel-body">
			<div class="table-responsive"> 
				<table class="table">
					<thead>
						<tr>
							<th>Arah</th>
							<th>Skor</th>
							<th colspan="2">Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach($sudut as $data)
						<tr>
							<td>{{$data->arah}}</td>
							<td>{{$data->skor}}</td>
							<td>
								<a class="btn btn-success" href="{{route('sudut.edit',$data->id)}}"><i class="fa fa-pencil-square"></i> Edit</a>
								<form action="{{route('sudut.destroy', $data->id)}}" method="POST">
									<input type="hidden" name="_method" value="DELETE">
									<input type="hidden" name="_token">
									<button type="submit" class="btn btn-danger"><i class="fa fa-square-o"></i> Delete</button>
									{{csrf_field()}}
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			</div>
		</div>
	</div>
</div>
@endsection