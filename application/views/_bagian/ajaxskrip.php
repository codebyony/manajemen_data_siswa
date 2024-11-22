<script>
	$(document).ready(function(){
		tampil1();
		tampil2();
		tampil();
		laki();
		pr();
		semua();


//pengaturan datatable
		$('#datauser').DataTable({
			'paging':true,
			'lengthChange':true,
			'searching':true,
			'ordering':true,
			'info':true,
			'autoWidth':true,
			"scrollX": "100%",
	      "scrollXInner": "101%"
		});


//tampil pada data
// 1. Semua 
function tampil(){
		$.ajax({
			type:'ajax',
			url:'<?php echo site_url('login/tampil_data')?>',
			async:false,
			dataType:'json',
			success:function(data){
				var html='';
				var i;


				for(i=0; i<data.length; i++){
					if(data[i].kota_asal==1){
						data[i].kotanya = "Malang";
					}else if(data[i].kota_asal==2){
						data[i].kotanya = "Surabaya";
					}else if(data[i].kota_asal==3){
						data[i].kotanya = "Blitar";
					}else if(data[i].kota_asal==4){
						data[i].kotanya = "Kediri";
					}else if(data[i].kota_asal==5){
						data[i].kotanya = "Banyuwangi";
					}else if(data[i].kota_asal==6){
						data[i].kotanya = "Probolinggo";
					}else if(data[i].kota_asal==7){
						data[i].kotanya = "Pasuruan";
					}else if(data[i].kota_asal==8){
						data[i].kotanya = "Sidoarjo";
					}else if(data[i].kota_asal==9){
						data[i].kotanya = "Jombang";
					}else if(data[i].kota_asal==10){
						data[i].kotanya = "Tuban";
					}
					html += '<tr>' +
						'<td>'+data[i].nis+'</td>'+
						'<td>'+data[i].nama+'</td>'+
						'<td>'+data[i].tgl+'</td>'+
						'<td>'+data[i].jk+'</td>'+
						'<td>'+data[i].alamat+'</td>'+
						'<td>'+data[i].kotanya+'</td>'+
						'<td>'+
						'<a href="javascript:void(0);" class="btn btn-primary item_edit" data-id_user="'+data[i].id_user+'" data-nis="'+data[i].nis+'" data-nama="'+data[i].nama+'" data-tgl="'+data[i].tgl+'" data-jk="'+data[i].jk+'" data-alamat="'+data[i].alamat+'" data-kota_asal="'+data[i].kota_asal+'"><span class="fa fa-pencil"></a>'+' '+
					'<a href="javascript:void(0);" class="btn btn-danger item_delete" data-id_user="'+data[i].id_user+'" data-nis="'+data[i].nis+'" data-nama="'+data[i].nama+'" data-tgl="'+data[i].tgl+'" data-jk="'+data[i].jk+'" data-alamat="'+data[i].alamat+'" data-kota_asal="'+data[i].kota_asal+'"><span class="fa fa-times"></a>'+'</td>'+'</tr>';}
					$('#show_data').html(html);}});}
// 2. Untuk data berjenis kelamin laki laki
function tampil1(){
		$.ajax({
			type:'ajax',
			url:'<?php echo site_url('login/tampil_datalaki')?>',
			async:false,
			dataType:'json',
			success:function(data){
				var html='';
				var i;


				for(i=0; i<data.length; i++){
					if(data[i].kota_asal==1){
						data[i].kotanya = "Malang";
					}else if(data[i].kota_asal==2){
						data[i].kotanya = "Surabaya";
					}else if(data[i].kota_asal==3){
						data[i].kotanya = "Blitar";
					}else if(data[i].kota_asal==4){
						data[i].kotanya = "Kediri";
					}else if(data[i].kota_asal==5){
						data[i].kotanya = "Banyuwangi";
					}else if(data[i].kota_asal==6){
						data[i].kotanya = "Probolinggo";
					}else if(data[i].kota_asal==7){
						data[i].kotanya = "Pasuruan";
					}else if(data[i].kota_asal==8){
						data[i].kotanya = "Sidoarjo";
					}else if(data[i].kota_asal==9){
						data[i].kotanya = "Jombang";
					}else if(data[i].kota_asal==10){
						data[i].kotanya = "Tuban";
					}
					html += '<tr>' +
						'<td>'+data[i].nis+'</td>'+
						'<td>'+data[i].nama+'</td>'+
						'<td>'+data[i].tgl+'</td>'+
						'<td>'+data[i].jk+'</td>'+
						'<td>'+data[i].alamat+'</td>'+
						'<td>'+data[i].kotanya+'</td>'+
						'<td>'+
						'<a href="javascript:void(0);" class="btn btn-primary item_edit" data-id_user="'+data[i].id_user+'" data-nis="'+data[i].nis+'" data-nama="'+data[i].nama+'" data-tgl="'+data[i].tgl+'" data-jk="'+data[i].jk+'" data-alamat="'+data[i].alamat+'" data-kota_asal="'+data[i].kota_asal+'"><span class="fa fa-pencil"></a>'+' '+
					'<a href="javascript:void(0);" class="btn btn-danger item_delete" data-id_user="'+data[i].id_user+'" data-nis="'+data[i].nis+'" data-nama="'+data[i].nama+'" data-tgl="'+data[i].tgl+'" data-jk="'+data[i].jk+'" data-alamat="'+data[i].alamat+'" data-kota_asal="'+data[i].kota_asal+'"><span class="fa fa-times"></a>'+'</td>'+'</tr>';}
					$('#show_datalaki').html(html);}});}
// 3. untuk data berjenis kelamin perempuan
function tampil2(){
		$.ajax({
			type:'ajax',
			url:'<?php echo site_url('login/tampil_dataperempuan')?>',
			async:false,
			dataType:'json',
			success:function(data){
				var html='';
				var i;


				for(i=0; i<data.length; i++){
					if(data[i].kota_asal==1){
						data[i].kotanya = "Malang";
					}else if(data[i].kota_asal==2){
						data[i].kotanya = "Surabaya";
					}else if(data[i].kota_asal==3){
						data[i].kotanya = "Blitar";
					}else if(data[i].kota_asal==4){
						data[i].kotanya = "Kediri";
					}else if(data[i].kota_asal==5){
						data[i].kotanya = "Banyuwangi";
					}else if(data[i].kota_asal==6){
						data[i].kotanya = "Probolinggo";
					}else if(data[i].kota_asal==7){
						data[i].kotanya = "Pasuruan";
					}else if(data[i].kota_asal==8){
						data[i].kotanya = "Sidoarjo";
					}else if(data[i].kota_asal==9){
						data[i].kotanya = "Jombang";
					}else if(data[i].kota_asal==10){
						data[i].kotanya = "Tuban";
					}
					html += '<tr>' +
						'<td>'+data[i].nis+'</td>'+
						'<td>'+data[i].nama+'</td>'+
						'<td>'+data[i].tgl+'</td>'+
						'<td>'+data[i].jk+'</td>'+
						'<td>'+data[i].alamat+'</td>'+
						'<td>'+data[i].kotanya+'</td>'+
						'<td>'+
						'<a href="javascript:void(0);" class="btn btn-primary item_edit" data-id_user="'+data[i].id_user+'" data-nis="'+data[i].nis+'" data-nama="'+data[i].nama+'" data-tgl="'+data[i].tgl+'" data-jk="'+data[i].jk+'" data-alamat="'+data[i].alamat+'" data-kota_asal="'+data[i].kota_asal+'"><span class="fa fa-pencil"></a>'+' '+
					'<a href="javascript:void(0);" class="btn btn-danger item_delete" data-id_user="'+data[i].id_user+'" data-nis="'+data[i].nis+'" data-nama="'+data[i].nama+'" data-tgl="'+data[i].tgl+'" data-jk="'+data[i].jk+'" data-alamat="'+data[i].alamat+'" data-kota_asal="'+data[i].kota_asal+'"><span class="fa fa-times"></a>'+'</td>'+'</tr>';}
					$('#show_dataperempuan').html(html);}});}

	
//Tampilan hitungan jumlah siswa berdasar jenis kelamin
// 1. Laki laki
	function laki(){
		$.ajax({
			type:'ajax',
			url:'<?php echo site_url('login/tampil_laki')?>',
			async:false,
			dataType:'json',
			success:function(data){
				var html='';

					html += '<?php echo $laki; ?>'
					$('#show_laki').html(html);}
				})
	}
// 2. Perempuan
	function pr(){
		$.ajax({
			type:'ajax',
			url:'<?php echo site_url('login/tampil_pr')?>',
			async:false,
			dataType:'json',
			success:function(data){
				var html='';

					html += '<?php echo $perempuan; ?>'
					$('#show_pr').html(html);}
				})
	}
// 3. semua
	function semua(){
		$.ajax({
			type:'ajax',
			url:'<?php echo site_url('login/tampil_semua')?>',
			async:false,
			dataType:'json',
			success:function(data){
				var html='';

					html += '<?php echo $hasil; ?>'
					$('#show_semua').html(html);}
				})
	}

//simpan data
$('#btn_save').on('click',function(){
	var nis=$('#nis').val();
	var nama=$('#nama').val();
	var tgl=$('#tgl').val();
	var jk=$('input[name=jk]:checked').val();
	var alamat=$('#alamat').val();
	var kota_asal=$('#kota_asal').val();
	$.ajax({
		type:"POST",
		url:"<?php echo site_url('login/simpan')?>",
		dataType:"JSON",
		data:{nis:nis, nama:nama, tgl:tgl, jk:jk, alamat:alamat, kota_asal: kota_asal},
		beforeSend : function(){
			swal({
				title : 'Menunggu',
				html : 'Menambah data',
				onOpen :() =>{swal.showLoading()}
			})
		},
		success:function(data){
		$('[name="nis"]').val("");
		$('[name="nama"]').val("");
		$('[name="tgl"]').val("");
		$('[name="jk"]').val("");
		$('[name="alamat"]').val("");
		$('[name="kota_asal"]').val("");
		$('#tambah_user').modal('hide');
		tampil();
		tampil1();
		tampil2();
		laki();
		pr();
		semua();
		location.reload();
	}
	});
	return false;
});

//ambil data untuk diedit
// 1. dari tampilan berdasarkan semua
$('#show_data').on('click','.item_edit',function(){
	var id_user = $(this).data('id_user');
	var nis = $(this).data('nis');
	var nama = $(this).data('nama');
	var tgl = $(this).data('tgl');
	var jk = $(this).data('jk');
	var alamat = $(this).data('alamat');
	var kota_asal = $(this).data('kota_asal');

	$('#edit_user').modal('show');
	$('[name="id_user_edit"]').val(id_user);
	$('[name="nis_edit"]').val(nis);
	$('[name="nama_edit"]').val(nama);
	$('[name="tgl_edit"]').val(tgl);
	document.edit.jk.value = jk;
	$('[name="alamat_edit"]').val(alamat);
	$('[name="kota_asal_edit"]').val(kota_asal);
});
// 2. dari tampilan berdasarkan jenis kelamin laki laki
$('#show_datalaki').on('click','.item_edit',function(){
	var id_user = $(this).data('id_user');
	var nis = $(this).data('nis');
	var nama = $(this).data('nama');
	var tgl = $(this).data('tgl');
	var jk = $(this).data('jk');
	var alamat = $(this).data('alamat');
	var kota_asal = $(this).data('kota_asal');

	$('#edit_user').modal('show');
	$('[name="id_user_edit"]').val(id_user);
	$('[name="nis_edit"]').val(nis);
	$('[name="nama_edit"]').val(nama);
	$('[name="tgl_edit"]').val(tgl);
	document.edit.jk.value = jk;
	$('[name="alamat_edit"]').val(alamat);
	$('[name="kota_asal_edit"]').val(kota_asal);
});
//dari tampilan berdasarkan jenis kelamin perempuan
$('#show_dataperempuan').on('click','.item_edit',function(){
	var id_user = $(this).data('id_user');
	var nis = $(this).data('nis');
	var nama = $(this).data('nama');
	var tgl = $(this).data('tgl');
	var jk = $(this).data('jk');
	var alamat = $(this).data('alamat');
	var kota_asal = $(this).data('kota_asal');

	$('#edit_user').modal('show');
	$('[name="id_user_edit"]').val(id_user);
	$('[name="nis_edit"]').val(nis);
	$('[name="nama_edit"]').val(nama);
	$('[name="tgl_edit"]').val(tgl);
	document.edit.jk.value = jk;
	$('[name="alamat_edit"]').val(alamat);
	$('[name="kota_asal_edit"]').val(kota_asal);
});

//update data yang sudah diedit
$('#btn_update').on('click',function(){
	var id_user = $('#id_user_edit').val();
	var nis = $('#nis_edit').val();
	var nama = $('#nama_edit').val();
	var tgl = $('#tgl_edit').val();
	var jk = $('input[name=jk]:checked').val();
	var alamat = $('#alamat_edit').val();
	var kota_asal = $('#kota_asal_edit').val();

	$.ajax({
		type:"POST",
		url:"<?php echo site_url('login/update');?>",
		dataType:"JSON",
		data : {id_user:id_user, nis:nis, nama:nama, tgl:tgl, jk:jk, alamat:alamat, kota_asal: kota_asal},
		beforeSend : function(){
			swal({
				title : 'Menunggu',
				html : 'Update data',
				onOpen :() =>{swal.showLoading()}
			})
		},
		success:function(data){
			$('[name="id_user_edit"]').val("");
			$('[name="nis_edit"]').val("");
			$('[name="nama_edit"]').val("");
			$('[name="tgl_edit"]').val("");
			$('[name="jk_edit"]').val("");
			$('[name="alamat_edit"]').val("");
			$('[name="kota_asal_edit"]').val("");
			$('#edit_user').modal('hide');
			tampil();
			tampil1();
			tampil2();
			laki();
			pr();
			semua();
			location.reload();
		}
	});
	return false;
});

//ambil data untuk dihapus
// 1. dari tampilan berdasarkan semua jenis kelamin
$('#show_data').on('click','.item_delete',function(){
	var id_user = $(this).data('id_user');
	var nis = $(this).data('nis');
	var nama = $(this).data('nama');
	var tgl = $(this).data('tgl');
	var jk = $(this).data('jk');
	var alamat = $(this).data('alamat');

	$('#hapus_user').modal('show');
	$('[name="id_user_hapus"]').val(id_user);
	$('[name="nis_hapus"]').val(nis);
	$('[name="nama_hapus"]').val(nama);
	$('[name="tgl_hapus"]').val(tgl);
	$('[name="jk_hapus"]').val(jk);
	$('[name="alamat_hapus"]').val(alamat);
});
// 2. dari tampilan berdasarkan jenis kelamin laki laki
$('#show_datalaki').on('click','.item_delete',function(){
	var id_user = $(this).data('id_user');
	var nis = $(this).data('nis');
	var nama = $(this).data('nama');
	var tgl = $(this).data('tgl');
	var jk = $(this).data('jk');
	var alamat = $(this).data('alamat');

	$('#hapus_user').modal('show');
	$('[name="id_user_hapus"]').val(id_user);
	$('[name="nis_hapus"]').val(nis);
	$('[name="nama_hapus"]').val(nama);
	$('[name="tgl_hapus"]').val(tgl);
	$('[name="jk_hapus"]').val(jk);
	$('[name="alamat_hapus"]').val(alamat);
});
// 3. dari tampilan berdasarkan jenis kelamin perempuan
$('#show_dataperempuan').on('click','.item_delete',function(){
	var id_user = $(this).data('id_user');
	var nis = $(this).data('nis');
	var nama = $(this).data('nama');
	var tgl = $(this).data('tgl');
	var jk = $(this).data('jk');
	var alamat = $(this).data('alamat');

	$('#hapus_user').modal('show');
	$('[name="id_user_hapus"]').val(id_user);
	$('[name="nis_hapus"]').val(nis);
	$('[name="nama_hapus"]').val(nama);
	$('[name="tgl_hapus"]').val(tgl);
	$('[name="jk_hapus"]').val(jk);
	$('[name="alamat_hapus"]').val(alamat);
});

//hapus data yang sudah diedit
$('#btn-delete').on('click',function(){
	var id_user = $('#id_user_hapus').val();
	var nis = $('#nis_hapus').val();
	var nama = $('#nama_hapus').val();
	var tgl = $('#tgl_hapus').val();
	var jk = $('#jk_hapus').val();
	var alamat = $('#alamat_hapus').val();

	$.ajax({
		type:"POST",
		url:"<?php echo site_url('login/hapus');?>",
		dataType:"JSON",
		data : {id_user:id_user, nis:nis, nama:nama, tgl:tgl, jk:jk, alamat:alamat},
		beforeSend : function(){
			swal({
				title : 'Menunggu',
				html : 'Menghapus data',
				onOpen :() =>{swal.showLoading()}
			})
		},
		success:function(data){
			$('[name="id_user_hapus"]').val("");
			$('[name="nis_hapus"]').val("");
			$('[name="nama_hapus"]').val("");
			$('[name="tgl_hapus"]').val("");
			$('[name="jk_hapus"]').val("");
			$('[name="alamat_hapus"]').val("");
			$('#hapus_user').modal('hide');
			tampil();		
			tampil1();
			tampil2();
			laki();
			pr();
			semua();
			location.reload();
		}
	});
	return false;
});
})

  $(function () {


    $('.tanggal').datepicker({
      dateFormat:'yy/mm/dd',
      changeMonth:true,
      changeYear:true,
      yearRange:"c-28:c-20",
      monthNames: [ "January","February","March","April","May","June",
			"July","August","September","October","November","December" ],
    });
  })
</script>
</script>