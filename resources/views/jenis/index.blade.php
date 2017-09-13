@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
	<div class="col-md-12">
		<center><h1>Data Tarif Reklame</h1></center>
		<div class="panel panel-primary">
			<div class="panel-heading">Data Tarif Reklame
			<div class="panel-title pull-right"><a href="{{route('jenis.create')}}">Tambah Data</a></div></div>
			<div class="panel-body">
			<div class="table-responsive"> 
				<table class="table">
					<thead>
						<tr>
							<th>Nama Jenis Reklame</th>
							<th>Harga dasar </br> Ukuran 0 - 9.5 (m<sup>2</sup>)</th>
							<th>Harga dasar </br> Ukuran 10 - 50 (m<sup>2</sup>)</th>
							<th>Harga dasar </br> Ukuran > 50 (m<sup>2</sup>)</th>
							<th>Harga dasar </br> Ketinggian (m)</th>
							<th colspan="3">Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach($reklame as $data)
						<tr>
							<td>{{$data->name}}</td>
							<td>Rp. {{number_format($data->dasar1,2,',','.')}} /m<sup>2</sup></td>
							<td>Rp. {{number_format($data->dasar2,2,',','.')}} /m<sup>2</sup></td>
							<td>Rp. {{number_format($data->dasar3,2,',','.')}} /m<sup>2</sup></td>
							<td>Rp. {{number_format($data->ket,2,',','.')}} /m</td>
							<td>
								<a class="btn btn-success" href="{{route('jenis.edit',$data->id)}}"><i class="fa fa-pencil-square"></i> Edit</a>
							</td>
							 <td>
								<form action="{{route('jenis.destroy', $data->id)}}" method="POST">
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