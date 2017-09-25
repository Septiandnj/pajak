@extends('layouts.admin')
@section('nav')
<ul class="nav">
                <li>
                    <a href="/daftar">
                        <i class="pe-7s-file"></i>
                        <p>Data Pajak</p>
                    </a>
                </li>
       
       
                <li class="dropdown active">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                              <i class="pe-7s-note2"></i>
                                    <p> Master
                                        <b class="caret"></b>
                                    </p>
                              </a>
                              <ul class="dropdown-menu" style="background-color: rgba(255,255,0); ">
                                <li><a href="{{route('jenis.index')}}"><font color="purple">Jenis Reklame</a></font></li>
                                <li><a href="{{route('sudut.index')}}"><font color="purple">Sudut Pandang</font></a></li>
                                <li><a href="{{route('ruang.index')}}"><font color="purple"><strong>Fungsi Ruang</strong></font></a></li>
                                <li><a href="{{route('jalan.index')}}"><font color="purple">Fungsi Jalan</font></a></li>
                              </ul>
                </li>
                
            </ul>
@endsection
@section('title')
Data Fungsi Ruang
@endsection
@section('content')
		<center><h1>Data Fungsi Ruang</h1></center>
		<div class="panel">
			<div class="panel-heading">Data Fungsi Ruang
			<div class="panel-title pull-right"><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#tambah">Tambah Data</button></div></div>
			<div class="panel-body">
			<div class="table-responsive"> 
				<table class="table">
					<thead>
						<tr>
							<th>Kawasan</th>
							<th>Skor</th>
							<th colspan="2">Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach($ruang as $data)
						
						<tr>
							<td>{{$data->kawasan}}</td>
							<td>{{$data->skor}}</td>
							<td>
								<form action="{{route('ruang.destroy', $data->id)}}" method="post" class="delete">
									<a class="btn btn-success" data-toggle="modal" href="#edit{{ $data->id }}"><i class="fa fa-pencil-square"></i> Edit </a>
									<input type="hidden" name="_method" value="DELETE">
									<input type="hidden" name="_token">
									<button type="submit" class="btn btn-danger" id="delete-btn"><i class="fa fa-trash"></i> Delete</button>
									{{csrf_field()}}
								</form>
							</td>
						</tr>
						@include('ruang.edit')
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="col-md-6">
				{!! $ruang->render() !!}
			</div>
			</div>
		</div>
@endsection
@section('modal')
@include('ruang.create')
@endsection