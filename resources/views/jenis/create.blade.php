
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
        <div class="panel">
			<div class="panel-heading">Tambah Data Tarif Reklame</div>
			<div class="panel-body">
				<form action="{{route('jenis.store')}}" method="post">
					{{csrf_field()}}
					<div class="form-group">
						<label class="control-lable">Nama Jenis Reklame</label>
						<input type="text" name="name" class="form-control" placeholder="example" required>
					</div>
					<div class="form-group">
						<label class="control-lable">Harga dasarUkuran 0 - 9.5 (/m<sup>2</sup>)</label>
						<input type="number" name="dasar1" class="form-control" placeholder="Rp.00,00">
					</div>
					<div class="form-group">
						<label class="control-lable">Harga dasar Ukuran 10 - 50 (/m<sup>2</sup>)</label>
						<input type="number" name="dasar2" class="form-control" placeholder="Rp.00,00">
					</div>
					<div class="form-group">
						<label class="control-lable">Harga dasar Ukuran > 50 (m<sup>2</sup>)</label>
						<input type="number" name="dasar3" class="form-control" placeholder="Rp.00,00">
					</div>
					<div class="form-group">
						<label class="control-lable">Harga dasar ketinggian (m)</label>
						<input class="form-control" type="number" name="ket" placeholder="Rp.00,00">
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

		
		
