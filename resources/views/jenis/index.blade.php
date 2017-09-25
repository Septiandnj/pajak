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
                                <li><a href="{{route('jenis.index')}}"><font color="purple"><strong>Jenis Reklame</strong></a></font></li>
                                <li><a href="{{route('sudut.index')}}"><font color="purple">Sudut Pandang</font></a></li>
                                <li><a href="{{route('ruang.index')}}"><font color="purple">Fungsi Ruang</font></a></li>
                                <li><a href="{{route('jalan.index')}}"><font color="purple">Fungsi Jalan</font></a></li>
                              </ul>
                        </li>
                
            </ul>
@endsection
@section('title')
Data Tarif 
@endsection
@section('content')
		<center><h1>Data Tarif Reklame </h1></center>
		
		
		<div class="panel">
			<div class="panel-heading">Data Tarif Reklame Pertahun
			<div class="panel-title pull-right"><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#tambah">Tambah Data</button></div></div>
			
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
								<form action="{{route('jenis.destroy', $data->id)}}" method="post" class="delete">
									<a class="btn btn-success" data-toggle="modal" href="#edit{{ $data->id }}"><i class="fa fa-pencil-square"></i> Edit </a>
									<input type="hidden" name="_method" value="DELETE">
									<input type="hidden" name="_token">
									<button type="submit" class="btn btn-danger" id="delete-btn"><i class="fa fa-trash"></i> Delete</button>
									{{csrf_field()}}
								</form>
							</td>
						</tr>
						@include('jenis.edit')
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="col-md-6">
				{!! $reklame->render() !!}
			</div>
			</div>
		</div>
						
		
@endsection

@section('modal')
@include('jenis.create')
@endsection