	
	<form action="surat_kelulusan.php" target="_blank" method="POST" enctype="multipart/form-data">
		<div class="modal fade" id="suratK">
			<div class="modal-dialog modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">SURAT KELULUSAN</h5>
					</div>
					<div class="modal-body">
						<div class="form-group">
                            <label >Ref. No. *</label>
                            <input class="form-control" id="ref_no" rows="3" name="ref_no" required>
                        </div>
						<div class="form-group">
                            <label >Staff ID Ketua Projek *</label>
                            <input class="form-control" id="kp" rows="3" name="kp" required>
                        </div>
						<div class="form-group">
                            <label >Tajuk *</label>
                            <input class="form-control" id="tajuk" rows="3" name="tajuk" required>
                        </div>
                        <div class="form-group">
                            <label >Kod Projek </label>
                            <input class="form-control" id="kod_projek" rows="3" name="kod_projek" >
                        </div>
						<div class="form-row">
							<div class="form-group col-md-6">
                                <label for="inputDate">Tarikh Mula *</label>
                                <input type="date" class="form-control" id="tarikh_mula" name="tarikh_mula" required>
                            </div>
							<div class="form-group col-md-6">
                                <label for="inputDate">Tarikh Tamat *</label>
                                <input type="date" class="form-control" id="tarikh_tamat" name="tarikh_tamat" required>
                            </div>
						</div>
                        <div class="form-group">
                            <label >Jumlah Peruntukan* </label>
                            <input class="form-control" id="kos" rows="3" name="kos" >
                        </div>
                        <div class="form-group">
                            <label >Staff ID Ahli Projek *</label>
                            <input class="form-control" id="ap1" rows="3" name="ap1">
                        </div>
                        <div class="form-group">
                            <label >Staff ID Ahli Projek *</label>
                            <input class="form-control" id="ap2" rows="3" name="ap2">
                        </div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="generate_sk">Generate</button>
					</div>
				</div>
			</div>
		</div>
	</form>