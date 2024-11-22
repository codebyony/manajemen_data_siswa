<form>
	<div class="modal fade" id="tambah_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Tambah Data Siswa
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
					<div class="modal-body">
						<div class="form-group row">
							<label class="col-md-3 col-form-label" align="right">NIS :</label>
							<div class="col-md-9">
								<input type="text" name="nis" id="nis" class="form-control">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3 col-form-label" align="right">Nama :</label>
							<div class="col-md-9">
								<input type="text" name="nama" id="nama" class="form-control">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3 col-form-label" align="right">Tanggal Lahir :</label>
							<div class="col-md-9">
								<input type="text" name="tgl" id="tgl" class="form-control tanggal">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3 col-form-label" align="right">Jenis Kelamin :</label>
							<div class="col-md-9">
								<input type="radio" name="jk" id="jk" value="Laki Laki">Laki Laki<br>
								<input type="radio" name="jk" id="jk" value="Perempuan">Perempuan
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3 col-form-label" align="right">Alamat :</label>
							<div class="col-md-9">
							<input type="text" name="alamat" id="alamat" class="form-control">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-3 col-form-label" align="right">Kota Asal :</label>
							<div class="col-md-9">
							<select class="form-control" name="kota_asal" id="kota_asal">
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
						<button type="submit" id="btn_save" class="btn btn-default">Simpan</button>
					</div>
				</div>
			</div>
		</div>
</form>