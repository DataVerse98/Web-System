	<script src="js/jquery2.min.js"></script>
		<link rel="stylesheet" href="css/jquery-ui.css">
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/chosen.jquery.min.js"></script>
		<link rel="stylesheet" href="css/chosen.min.css">
		
	<form action="surat_tawaran_test.php" method="POST" target="_blank" enctype="multipart/form-data">
		<div class="modal fade" id="suratTawaran">
			<div class="modal-dialog modal-dialog-scrollable">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">SURAT TAWARAN</h5>
					</div>
					<div class="modal-body">
						<div class="form-group">
                            <label >Jenis Geran *</label>
                            <input class="form-control" id="jgd" rows="3" name="jgd" required>
                        </div>
						<div class="form-group">
                            <label >Ref. No. *</label>
                            <input class="form-control" id="ref_no" rows="3" name="ref_no" required>
                        </div>
						<div class="form-group">
                            <label >Staff ID Ketua Projek *</label>
                            <input class="form-control" id="kp" rows="3" name="kp" required>
                        </div>
						<div class="form-group">
                            <label >Staff ID Ahli Projek</label>
                            <input class="form-control" id="ap1" rows="3" name="ap1">
                        </div>
						<div class="form-group">
                            <label >Staff ID Ahli Projek</label>
                            <input class="form-control" id="ap2" rows="3" name="ap2">
                        </div>
						<div class="form-group">
                            <label >Staff ID Ahli Projek</label>
                            <input class="form-control" id="ap3" rows="3" name="ap3">
                        </div>
						<div class="form-group">
                            <label >Staff ID Ahli Projek</label>
                            <input class="form-control" id="ap4" rows="3" name="ap4">
                        </div>
						<div class="form-group">
                            <label >Tajuk *</label>
                            <input class="form-control" id="tajuk" rows="3" name="tajuk" autocapitalize="word" required>
                        </div>
						<div class="form-group">
                            <label >Tempoh Projek</label>
                            <input class="form-control" id="tempoh" rows="3" name="tempoh" required>
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
                            <label >Kos Projek</label>
                            <input class="form-control" id="kos" rows="3" name="kos" required>
                        </div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="generate_st">Generate</button>
					</div>
				</div>
			</div>
		</div>
	</form>