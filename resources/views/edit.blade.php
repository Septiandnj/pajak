@extends('layouts.app')
@section('content')
<center><h1>ENTRY DATA</h1></center> </br>
    
        <div class="container">
        <div class="row">
            <div class="col-md-6">
             <div class="panel panel-primary">
                <div class="panel-heading">Form Pajak Reklame
                <div class="panel-title pull-right"><a data-toggle="collapse" href="#collapse1"><i class="fa fa-caret-down"></i></a></div></div>
                    <div class="panel-body">
                        <div id="collapse1" class="panel-collapse collapse">
                            <form action="{{route('pajak.store')}}" method="post">
                            {{csrf_field()}}
                                <div class="form-group">
                                    <label for="">Naskah </label>
                                    <input type="text" name="naskah" class="form-control" placeholder="example" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis </label>
                                    <select name="name" class="form-control" required="">
                                    <option value="">-</option>
                            @foreach($jenis as $data)
                            <option value="{{$data->id}}">
                                {{$data->name}}
                            </option>
                            @endforeach
                        </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Ukuran </label>
                                    <div class="form-group">
                                        <input type="float" name="panjang" class="form-control" placeholder="panjang (m)" required>
                                    
                                        <center><i class="fa fa-times"></i></center>
                                        <input type="float" name="lebar" class="form-control" placeholder="lebar (m)" required>
                                    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Ketinggian </label>
                                    <input type="float" name="tinggi" class="form-control" placeholder="tinggi (m)" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Lokasi </label>
                                    <input type="text" name="lokasi" class="form-control" placeholder="Jl.example" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Sudut Pandang </label>
                                    <select name="sudut" class="form-control" required="">
                                    <option value="">-</option>
                                    @foreach($sudut as $data)
                                         <option value="{{$data->id}}">
                                             {{$data->arah}}
                                        </option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Fungsi Jalan </label>
                                    <select name="jalan" class="form-control" required>
                                    <option value="">-</option>
                                    @foreach($jalan as $data)
                                         <option value="{{$data->id}}">
                                             {{$data->jalan}}
                                        </option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Fungsi Ruang </label>
                                    <select name="ruang" class="form-control" required>
                                    <option value="">-</option>
                                    @foreach($ruang as $data)
                                         <option value="{{$data->id}}">
                                             {{$data->kawasan}}
                                        </option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Jumlah Muka </label>
                                    <input type="number" name="muka" class="form-control" placeholder="example : 1" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Harga dasar stategis</label>
                                    <input type="number" name="strategis" class="form-control" placeholder="Rp.00,00" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Masa Izin </label>
                                    <input type="string" name="izin" class="form-control" placeholder="Pertahun" value="pertahun" readonly="" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Cara Pemasangan </label>
                                    <input type="text" name="pemasangan" class="form-control" placeholder="example" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="kirim" value="Submit" class="btn btn-primary">
                                    <input type="reset" name="reset" value="Reset" class="btn btn-info">
                                </div>
                            </form>
                        </div>
                    </div> 
                <div class="panel-footer">Design by A with Bootstrap 3</div>
             </div>       
            </div>
        </div>
        </div>
@endsection