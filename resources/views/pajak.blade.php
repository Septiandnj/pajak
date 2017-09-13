@extends('layouts.app')
@section('content')
<center><h1>ENTRI DATA</h1></center> </br>
    <div class="row">
        <div class="container">
            <div class="col-md-6">
             <div class="panel panel-primary">
                <div class="panel-heading">Form Pajak Reklame
                <div class="panel-title pull-right"><a data-toggle="collapse" href="#collapse1"><i class="fa fa-caret-down"></i></a></div></div>
                    <div class="panel-body">
                        <div id="collapse1" class="panel-collapse collapse">
                            <form>
                                <div class="form-group">
                                    <label for="">Naskah </label>
                                    <input type="text" name="naskah" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis </label>
                                    <select name="jenis" class="form-control" required>
                                        <option value="">-</option>
                                        <option value="">Sample 1</option>
                                        <option value="">Sample 2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Ketinggian </label>
                                    <input type="number" name="ketiggian" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Ukuran </label>
                                    <input type="number" name="naskah" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Lokasi </label>
                                    <select name="lokasi" class="form-control" required>
                                        <option value="">-</option>
                                        <option value="">Sample 1</option>
                                        <option value="">Sample 2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Sudut Pandang </label>
                                    <select name="sudut" class="form-control" required>
                                        <option value="">-</option>
                                        <option value="">Sample 1</option>
                                        <option value="">Sample 2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Jumlah Muka </label>
                                    <select name="muka" class="form-control" required>
                                        <option value="">-</option>
                                        <option value="">Sample 1</option>
                                        <option value="">Sample 2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Masa Izin </label>
                                    <input type="text" name="naskah" class="form-control" id="datepicker" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Cara Pemasangan </label>
                                    <select name="pemasangan" class="form-control" required>
                                        <option value="">-</option>
                                        <option value="">Sample 1</option>
                                        <option value="">Sample 2</option>
                                    </select>
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
            <div class="col-md-6">
             <div class="panel panel-primary">
                <div class="panel-heading">A.NSPR
                <div class="panel-title pull-right"><a data-toggle="collapse" href="#collapse2"><i class="fa fa-caret-down"></i></a></div></div>
                    <div class="panel-body">
                        <div id="collapse2" class="panel-collapse collapse">
                        </div>
                    </div> 
                <div class="panel-footer">Design by A with Bootstrap 3</div>
             </div>       
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="col-md-12">
                <div class="panel panel-primary">
                <div class="panel-heading">B.NJOR
                <div class="panel-title pull-right"><a data-toggle="collapse" href="#collapse3"><i class="fa fa-caret-down"></i></a></div></div>
                    <div class="panel-body">
                        <div id="collapse3" class="panel-collapse collapse">
                        </div>
                    </div> 
                <div class="panel-footer">Design by A with Bootstrap 3</div>
             </div>
            </div>
        </div>
    </div>
@endsection