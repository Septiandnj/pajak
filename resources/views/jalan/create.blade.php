
<!-- Modal -->
<div id="tambah" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"></button>
        <h4 class="modal-title">Tambah Data</h4>
      </div>
      <div class="modal-body">
        {{-- isi --}}
        <div class="panel panel">
			<div class="panel-heading">Tambah Data Fungsi Jalan
			<div class="panel-title pull-right">
			</div></div>
			<div class="panel-body">
				<form action="{{route('jalan.store')}}" method="post">
					{{csrf_field()}}
					<div class="form-group">
						<label class="control-lable">Jalan</label>
						<input type="text" name="jalan" class="form-control" required>
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
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

		
		
