


<!-- Modal -->
<div id="edit{{ $data->id }}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"></button>
        <h4 class="modal-title">Edit Data</h4>
      </div>
      <div class="modal-body">
        {{-- isi --}}
        <div class="panel">
			<div class="panel-heading">Edit Data Fungsi Ruang</div>
			<div class="panel-body">
			<form action="{{route('ruang.update',$data->id)}}" method="post">
					<input type="hidden" name="_method" value="PUT">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<div class="form-group">
						<label class="control-lable">Kawasan</label>
						<input type="text" name="kawasan" class="form-control" value="{{$data->kawasan}}" required>
					</div>
					<div class="form-group">
						<label class="control-lable">Skor</label>
						<input type="number" name="skor" class="form-control" value="{{$data->skor}}">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Simpan</button>
						<button type="reset" class="btn btn-danger">Reset</button>
					</div>
				</form>
			</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>