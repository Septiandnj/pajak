@extends('layouts.admin')
@section('nav')
<ul class="nav">
                <li class="active">
                    <a href="/daftar">
                        <i class="pe-7s-file"></i>
                        <p>Data Pajak</p>
                    </a>
                </li>
       
       
                <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                              <i class="pe-7s-note2"></i>
                                    <p> Master
                                        <b class="caret"></b>
                                    </p>
                              </a>
                              <ul class="dropdown-menu" style="background-color: rgba(255,255,0); ">
                                <li><a href="{{route('jenis.index')}}"><font color="purple">Jenis Reklame</a></font></li>
                                <li><a href="{{route('sudut.index')}}"><font color="purple">Sudut Pandang</font></a></li>
                                <li><a href="{{route('ruang.index')}}"><font color="purple">Fungsi Ruang</font></a></li>
                                <li><a href="{{route('jalan.index')}}"><font color="purple">Fungsi Jalan</font></a></li>
                              </ul>
                        </li>
                
            </ul>
@endsection
@section('title')
Daftar Pajak
@endsection
@section('content')
        <center><h1>Data Pajak Reklame</h1></center>
        <div class="panel">
            <div class="panel-heading">List
            <div class="panel-title pull-right"><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#tambah">Tambah Data</button></div></div>
            <div class="panel-body">
            <div class="table-responsive"> 
                <table class="table">
                    <thead>
                        <tr>
                            <th>Naskah</th>
                            <th>Jenis</th>
                            <th>Ukuran</th>
                            <th>Ketinggian</th>
                            <th>Jumlah Muka</th>
                            <th>Lokasi</th>
                            <th>Pajak Reklame</th>
                            <th colspan="3"><center>Aksi</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pajak as $data)
                        <tr>
                            <td>{{ $data->naskah }}</td>
                            <td>{{ $data->jenis->name }}</td>
                            <td>{{ $data->ukuran }} m<sup>2</sup></td>
                            <td>{{ $data->ketinggian}} m</td>
                            <td>{{ $data->jumlah_muka }} muka</td>
                            <td>{{ $data->lokasi }}</td>
                            
                            <td>Rp.{{number_format($data->pr,2,',','.')}}</td>
                            <td>
                                
                            </td>
                            <td>
                                <a class="btn btn-primary" href="/pajak/{{$data->id}}"><i class="fa fa-eye"></i> Detail</a>
                            </td>
                            <td>
                                <form action="{{route('pajak.destroy', $data->id)}}" method="post" class="delete">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token">
                                    <button type="submit" class="btn btn-danger" id="delete-btn"><i class="fa fa-trash"></i> Delete</button>
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
@endsection
@section('modal')
@include('pajak')
@endsection