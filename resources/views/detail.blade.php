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
Detail Pajak Reklame
@endsection
@section('content')

    
    
        <center><h1>Detail Data</h1></center>
        <div class="panel">
            <div class="panel-heading">Detail</div>
            <div class="panel-body">
            <div class="table-responsive"> 
                <table class="table">
                    <thead>
                        <tr>
                            <td>Naskah</td>
                            <td>{{ $pajak->naskah }}</td>
                        </tr>
                        <tr>
                            <td>Jenis</td>
                            <td>{{ $pajak->jenis->name }}</td>
                        </tr>
                        <tr>
                            <td>Ukuran</td>
                            <td>{{ $pajak->ukuran }} m<sup>2</sup></td>
                        </tr>
                        <tr>
                            <td>Ketinggian</td>
                            <td>{{ $pajak->ketinggian }} m</td>
                        </tr>
                        <tr>
                            <td>Lokasi</td>
                            <td>{{ $pajak->lokasi }}</td>
                        </tr>
                        <tr>
                            <td>Sudut pandang</td>
                            <td>{{ $pajak->sudut->arah }}</td>
                        </tr>
                        <tr>
                            <td>Fungsi jalan</td>
                            <td>{{ $pajak->jalan->jalan }}</td>
                        </tr>
                        <tr>
                            <td>Fungsi ruang</td>
                            <td>{{ $pajak->ruang->kawasan }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Muka</td>
                            <td>{{ $pajak->jumlah_muka }} muka</td>
                        </tr>
                        <tr>
                            <td>Harga Dasar Strategis</td>
                            <td>Rp.{{number_format($pajak->harga_dasar_strategis,2,',','.')}}</td>
                        </tr>
                        <tr>
                            <td>Masa Izin</td>
                            <td>{{ $pajak->masa_izin }}</td>
                        </tr>
                        <tr>
                            <td>Cara pemasangan</td>
                            <td>{{ $pajak->cara_pemasangan }}</td>
                        </tr>
                        <tr>
                            <td><strong>A.NJOR</strong></td>
                            <td>Rp.{{number_format($pajak->njor,2,',','.')}}</td>
                        </tr>
                        <tr>
                            <td><strong>B.NSPR</strong></td>
                            <td>Rp.{{number_format($pajak->nspr,2,',','.')}}</td>
                        </tr>
                        <tr>
                            <td><strong>C.NSR</strong></td>
                            <td>Rp.{{number_format($pajak->nsr,2,',','.')}}</td>
                        </tr>
                        <tr>
                            <td><strong>Pajak Reklame</strong></td>
                            <td>Rp.{{number_format($pajak->pr,2,',','.')}}</td>
                        </tr>

                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    

@endsection