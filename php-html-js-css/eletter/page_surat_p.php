	
	<form action="surat_pelantikan_test.php" target="_blank" method="POST" enctype="multipart/form-data">
		<div class="modal fade" id="suratP">
			<div class="modal-dialog modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">SURAT PELANTIKAN</h5>
					</div>
					<div class="modal-body">
						<div class="form-group">
                            <label >Ref. No. *</label>
                            <input class="form-control" id="ref_no" rows="3" name="ref_no" required>
                        </div>
						<div class="form-group">
                            <label >Staff ID *</label>
                            <input class="form-control" id="kp" rows="3" name="kp" required>
                        </div>
						<div class="form-group">
                            <label >Posisi *</label>
                            <input class="form-control" id="pelantikan" rows="3" name="pelantikan" required>
                        </div>
						<div class="form-group">
                            <label >Tajuk *</label>
                            <input class="form-control" id="tajuk" rows="3" name="tajuk" required>
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
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="generat_sp">Generate</button>
					</div>
				</div>
			</div>
		</div>
	</form>