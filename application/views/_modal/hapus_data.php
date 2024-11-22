<form>
	<div class="modal fade" id="hapus_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Hapus
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
					<div class="modal-body">
						Apakah anda yakin menghapus data ini?
								<input type="hidden" name="nis_edit" id="nis_edit" class="form-control" placeholder="NIS">
								<input type="hidden" name="id_user_hapus" id="id_user_hapus" class="form-control">
							
								<input type="hidden" name="nama_hapus" id="nama_hapus" class="form-control" placeholder="Nama">
							
								<input type="hidden" name="tgl_hapus" id="tgl_hapus" class="form-control" placeholder="Tanggal">
							
								<input type="hidden" name="jk_hapus" id="jk_hapus" value="Laki Laki">
								<input type="hidden" name="jk_hapus" id="jk_hapus" value="Perempuan">
							
							<input type="hidden" name="alamat_hapus" id="alamat_hapus" class="form-control" placeholder="Alamat">
							
					<div class="modal-footer">
						<button type="submit" id="btn-delete" class="btn btn-default">Delete</button>
					</div>
				</div>
			</div>
		</div>
</form>