	
	<form action="surat_st_test.php" target="_blank" method="POST" enctype="multipart/form-data">
		<div class="modal fade" id="suratST">
			<div class="modal-dialog modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">SURAT SETUJU TERIMA</h5>
					</div>
					<div class="modal-body">
						<div class="form-group">
                            <label >Tajuk *</label>
                            <input class="form-control" id="tajuk" rows="3" name="tajuk" required>
                        </div>
						<div class="form-group">
                            <label >Kod Projek *</label>
                            <input class="form-control" id="kod" rows="3" name="kod" required>
                        </div>
						<div class="form-group">
                            <label >Kategori Penyelidikan *</label>
                            <input class="form-control" id="kategori" rows="3" name="kategori" required>
                        </div>
						<div class="form-group">
                            <label >Tempoh *</label>
                            <input class="form-control" id="tempoh" rows="3" name="tempoh" required>
                        </div>
						<div class="form-group">
                            <label >Jumlah Peruntukan *</label>
                            <input class="form-control" id="kos" rows="3" name="kos" required>
                        </div>
						<div class="form-group">
                            <label >Staff ID Ketua Projek *</label>
                            <input class="form-control" id="kp" rows="3" name="kp" required>
                        </div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="generate_sst">Generate</button>
					</div>
				</div>
			</div>
		</div>
	</form>