$(document).ready(function(){
	var _autosave;
	$('#save').on('click', function(){
		clearInterval(_autosave);
		var staff_no = $('#staff_no').val();
		var no_audit = $('#no_audit').val();
		var tarikh_audit = $('#tarikh_audit').val();
		var no_ncr = $('#no_ncr').val();
		var iso = $('#iso').val();
		var jabatan_unit = $('#jabatan_unit').val();
		var dokumen = $('#dokumen').val();
		var keperluan = $('#keperluan').val();
		var penemuan = $('#penemuan').val();
		var bukti_objektif = $('#bukti_objektif').val();
		var no_id = $('#no_id').val();
 
			if( staff_no != "" && no_audit != "" && tarikh_audit != "" && no_ncr != "" && iso != "" && jabatan_unit != "" && dokumen != "" && keperluan != "" && penemuan != "" && bukti_objektif != ""){
				$.ajax({
				url: 'save_ncr.php',
				type: 'POST',
				data: {staff_no: staff_no, no_audit: no_audit, tarikh_audit: tarikh_audit, no_ncr: no_ncr, iso: iso, jabatan_unit: jabatan_unit, dokumen: dokumen, keperluan: keperluan, penemuan: penemuan, bukti_objektif: bukti_objektif, no_id: no_id},
				success: function(){
					$('#staff_no').val('');
					$('#no_audit').val('');
					$('#tarikh_audit').val('');
					$('#no_ncr').val('');
					$('#iso').val('');
					$('#jabatan_unit').val('');
					$('#dokumen').val('');
					$('#keperluan').val('');
					$('#penemuan').val('');
					$('#bukti_objektif').val('');
					$('#no_id').val('');
					$('#result').html("<center>Post Submitted!</center>")
					AutoSave();
				}
			});
		}
	});
 
	function AutoSave(){
		_autosave = setInterval(function(){
		var staff_no = $('#staff_no').val();
		var no_audit = $('#no_audit').val();
		var tarikh_audit = $('#tarikh_audit').val();
		var no_ncr = $('#no_ncr').val();
		var iso = $('#iso').val();
		var jabatan_unit = $('#jabatan_unit').val();
		var dokumen = $('#dokumen').val();
		var keperluan = $('#keperluan').val();
		var penemuan = $('#penemuan').val();
		var bukti_objektif = $('#bukti_objektif').val();
		var no_id = $('#no_id').val();
	 
			if( staff_no != "" && no_audit != "" && tarikh_audit != "" && no_ncr != "" && iso != "" && jabatan_unit != "" && dokumen != "" && keperluan != "" && penemuan != "" && bukti_objektif != ""){
				$.ajax({
				url: 'update_ncr.php',
				type: 'POST',
				data: {staff_no: staff_no, no_audit: no_audit, tarikh_audit: tarikh_audit, no_ncr: no_ncr, iso: iso, jabatan_unit: jabatan_unit, dokumen: dokumen, keperluan: keperluan, penemuan: penemuan, bukti_objektif: bukti_objektif, no_id: no_id},
					success: function(data){
						if(data != ""){
							$('#no_id').val(data);
						}
					}
				});
			}
		}, 2000);
	}
	AutoSave();
 
});

/*$(document).ready(function(){
	var _autosave;
	$('#save').on('click', function(){
		clearInterval(_autosave);
		
		var staff_no = $('#staff_no').val();
		var no_audit = $('#no_audit').val();
		var no_ncr = $('#no_ncr').val();
		var tarikh_audit = $('#tarikh_audit').val();
		var iso = $('#iso').val();
		var jabatan_unit = $('#jabatan_unit').val();
		var dokumen = $('#dokumen').val();
		var keperluan = $('#keperluan').val();
		var penemuan = $('#penemuan').val();
		var bukti_objektif = $('#bukti_objektif').val();
		var no_id = $('#no_id').val();
 
			if(no_audit != "" && staff_no != "" && no_ncr != "" && tarikh_audit != "" && iso != "" && jabatan_unit != "" && dokumen != "" && keperluan != "" && penemuan != "" && bukti_objektif != ""){
				$.ajax({
				url: 'save_ncr.php',
				type: 'POST',
				data: {no_audit: no_audit, staff_no: staff_no, no_ncr: no_ncr, tarikh_audit: tarikh_audit, iso: iso, jabatan_unit: jabatan_unit, dokumen: dokumen, keperluan: keperluan, penemuan: penemuan, bukti_objektif: bukti_objektif, no_id: no_id},
				success: function(){
					$('#staff_no').val('');
					$('#no_audit').val('');
					$('#no_ncr').val('');
					$('#tarikh_audit').val('');
					$('#iso').val('');
					$('#jabatan_unit').val('');
					$('#dokumen').val('');
					$('#keperluan').val('');
					$('#penemuan').val('');
					$('#bukti_objektif').val('');
					$('#no_id').val('');
					$('#result').html("<center>Post Submitted!</center>")
					AutoSave();
				}
			});
		}
	});
 
	function AutoSave(){
		_autosave = setInterval(function(){
		var no_audit = $('#no_audit').val();
		var no_ncr = $('#no_ncr').val();
		var staff_no = $('#staff_no').val();
		var tarikh_audit = $('#tarikh_audit').val();
		var iso = $('#iso').val();
		var jabatan_unit = $('#jabatan_unit').val();
		var dokumen = $('#dokumen').val();
		var keperluan = $('#keperluan').val();
		var penemuan = $('#penemuan').val();
		var bukti_objektif = $('#bukti_objektif').val();
		var no_id = $('#no_id').val();
	 
				if(no_audit != "" && staff_no != "" && no_ncr != "" && tarikh_audit != "" && iso != "" && jabatan_unit != "" && dokumen != "" && keperluan != "" && penemuan != "" && bukti_objektif != ""){
					$.ajax({
					url: 'update_ncr.php',
					type: 'POST',
					data: {no_audit: no_audit, staff_no: staff_no, no_ncr: no_ncr, tarikh_audit: tarikh_audit, iso: iso, jabatan_unit: jabatan_unit, dokumen: dokumen, keperluan: keperluan, penemuan: penemuan, bukti_objektif: bukti_objektif, no_id: no_id},
					success: function(data){
						if(data != ""){
							$('#no_id').val(data);
						}
					}
				});
			}
		}, 2000);
	}
	AutoSave();
 
}); */