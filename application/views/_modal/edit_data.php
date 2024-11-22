<form name="edit">
	<div class="modal fade" id="edit_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Ubah Data
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
					<div class="modal-body">
						<div class="form-group row">
							<label class="col-md-3 col-form-label" align="right">NIS :</label>
							<div class="col-md-9">
								<input type="text" name="nis_edit" id="nis_edit" class="form-control" placeholder="NIS">
								<input type="hidden" name="id_user_edit" id="id_user_edit" class="form-control">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3 col-form-label" align="right">Nama :</label>
							<div class="col-md-9">
								<input type="text" name="nama_edit" id="nama_edit" class="form-control" placeholder="Nama">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3 col-form-label" align="right">Tanggal Lahir :</label>
							<div class="col-md-9">
								<input type="text" name="tgl_edit" id="tgl_edit" class="form-control tanggal" placeholder="Tanggal">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3 col-form-label" align="right">Jenis Kelamin :</label>
							<div class="col-md-9">
								<input type="radio" name="jk" id="jk1" value="Laki Laki">Laki Laki<br>
								<input type="radio" name="jk" id="jk2" value="Perempuan">Perempuan
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3 col-form-label" align="right">Alamat :</label>
							<div class="col-md-9">
							<input type="text" name="alamat_edit" id="alamat_edit" class="form-control" placeholder="Alamat">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3 col-form-label" align="right">Kota Asal :</label>
							<div class="col-md-9">
							<select class="form-control" name="kota_asal_edit" id="kota_asal_edit">
								<option value=1>Malang</option>
								<option value=2>Surabaya</option>
								<option value=3>Blitar</option>
								<option value=4>Kediri</option>
								<option value=5>Banyuwangi</option>
								<option value=6>Probolinggo</option>
								<option value=7>Pasuruan</option>
								<option value=8>Sidoarjo</option>
								<option value=9>Jombang</option>
								<option value=10>Tuban</option>
							</select>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" id="btn_update" class="btn btn-default">Update</button>
					</div>
				</div>
			</div>
		</div>
</form>