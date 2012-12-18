<div class="schools index">
<h2><?php __('Schools');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('master_sekolah_id');?></th>
	<th><?php echo $paginator->sort('total_ruang_kelas');?></th>
	<th><?php echo $paginator->sort('total_rombel');?></th>
	<th><?php echo $paginator->sort('total_ptk');?></th>
	<th><?php echo $paginator->sort('total_ptk_laki');?></th>
	<th><?php echo $paginator->sort('total_ptk_perempuan');?></th>
	<th><?php echo $paginator->sort('standar_mutu');?></th>
	<th><?php echo $paginator->sort('akreditasi');?></th>
	<th><?php echo $paginator->sort('sertifikasi');?></th>
	<th><?php echo $paginator->sort('gugus');?></th>
	<th><?php echo $paginator->sort('satu_atap');?></th>
	<th><?php echo $paginator->sort('kategori_wilayah');?></th>
	<th><?php echo $paginator->sort('inklusi');?></th>
	<th><?php echo $paginator->sort('daya_listrik');?></th>
	<th><?php echo $paginator->sort('total_siswa');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelas1');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelas1');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelas1');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelas2');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelas2');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelas2');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelas3');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelas3');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelas3');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelas4');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelas4');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelas4');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelas5');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelas5');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelas5');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelas6');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelas6');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelas6');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelas7');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelas7');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelas7');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelas8');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelas8');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelas8');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelas9');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelas9');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelas9');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelas10');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelas10');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelas10');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelas11_ipa');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelas11_ipa');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelas11_ipa');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelas11_ips');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelas11_ips');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelas11_ips');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelas11_bahasa');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelas11_bahasa');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelas11_bahasa');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelas11_agama');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelas11_agama');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelas11_agama');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelas12_ipa');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelas12_ipa');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelas12_ipa');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelas12_ips');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelas12_ips');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelas12_ips');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelas12_bahasa');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelas12_bahasa');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelas12_bahasa');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelas12_agama');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelas12_agama');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelas12_agama');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_islam');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_islam');?></th>
	<th><?php echo $paginator->sort('total_siswa_islam');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kristen');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kristen');?></th>
	<th><?php echo $paginator->sort('total_siswa_kristen');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_katolik');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_katolik');?></th>
	<th><?php echo $paginator->sort('total_siswa_katolik');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_hindu');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_hindu');?></th>
	<th><?php echo $paginator->sort('total_siswa_hindu');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_budha');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_budha');?></th>
	<th><?php echo $paginator->sort('total_siswa_budha');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_konghucu');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_konghucu');?></th>
	<th><?php echo $paginator->sort('total_siswa_konghucu');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok1');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok1');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok1');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok2');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok2');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok2');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok3');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok3');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok3');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok4');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok4');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok4');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok5');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok5');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok5');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok6');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok6');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok6');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok7');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok7');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok7');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok8');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok8');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok8');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok9');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok9');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok9');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok10');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok10');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok10');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok11');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok11');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok11');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok12');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok12');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok12');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok13');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok13');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok13');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok14');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok14');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok14');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok_pendapatan1');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok_pendapatan1');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok_pendapatan1');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok_pendapatan2');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok_pendapatan2');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok_pendapatan2');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok_pendapatan3');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok_pendapatan3');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok_pendapatan3');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok_kebutuhanKhusus1');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok_kebutuhanKhusus1');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok_kebutuhanKhusus1');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok_kebutuhanKhusus2');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok_kebutuhanKhusus2');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok_kebutuhanKhusus2');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok_kebutuhanKhusus3');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok_kebutuhanKhusus3');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok_kebutuhanKhusus3');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok_kebutuhanKhusus4');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok_kebutuhanKhusus4');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok_kebutuhanKhusus4');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok_kebutuhanKhusus5');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok_kebutuhanKhusus5');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok_kebutuhanKhusus5');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok_kebutuhanKhusus6');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok_kebutuhanKhusus6');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok_kebutuhanKhusus6');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok_kebutuhanKhusus7');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok_kebutuhanKhusus7');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok_kebutuhanKhusus7');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok_kebutuhanKhusus8');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok_kebutuhanKhusus8');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok_kebutuhanKhusus8');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok_kebutuhanKhusus9');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok_kebutuhanKhusus9');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok_kebutuhanKhusus9');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok_kebutuhanKhusus10');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok_kebutuhanKhusus10');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok_kebutuhanKhusus10');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok_kebutuhanKhusus11');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok_kebutuhanKhusus11');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok_kebutuhanKhusus11');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok_kebutuhanKhusus12');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok_kebutuhanKhusus12');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok_kebutuhanKhusus12');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok_kebutuhanKhusus13');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok_kebutuhanKhusus13');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok_kebutuhanKhusus13');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok_kebutuhanKhusus14');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok_kebutuhanKhusus14');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok_kebutuhanKhusus14');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok_kebutuhanKhusus15');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok_kebutuhanKhusus15');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok_kebutuhanKhusus15');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok_kebutuhanKhusus16');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok_kebutuhanKhusus16');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok_kebutuhanKhusus16');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok_kebutuhanKhusus17');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok_kebutuhanKhusus17');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok_kebutuhanKhusus17');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_kelompok_kebutuhanKhusus18');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_kelompok_kebutuhanKhusus18');?></th>
	<th><?php echo $paginator->sort('total_siswa_kelompok_kebutuhanKhusus18');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_mengulang_kelas1');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_mengulang_kelas1');?></th>
	<th><?php echo $paginator->sort('total_siswa_mengulang_kelas1');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_mengulang_kelas2');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_mengulang_kelas2');?></th>
	<th><?php echo $paginator->sort('total_siswa_mengulang_kelas2');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_mengulang_kelas3');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_mengulang_kelas3');?></th>
	<th><?php echo $paginator->sort('total_siswa_mengulang_kelas3');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_mengulang_kelas4');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_mengulang_kelas4');?></th>
	<th><?php echo $paginator->sort('total_siswa_mengulang_kelas4');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_mengulang_kelas5');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_mengulang_kelas5');?></th>
	<th><?php echo $paginator->sort('total_siswa_mengulang_kelas5');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_mengulang_kelas6');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_mengulang_kelas6');?></th>
	<th><?php echo $paginator->sort('total_siswa_mengulang_kelas6');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_mengulang_kelas7');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_mengulang_kelas7');?></th>
	<th><?php echo $paginator->sort('total_siswa_mengulang_kelas7');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_mengulang_kelas8');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_mengulang_kelas8');?></th>
	<th><?php echo $paginator->sort('total_siswa_mengulang_kelas8');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_mengulang_kelas9');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_mengulang_kelas9');?></th>
	<th><?php echo $paginator->sort('total_siswa_mengulang_kelas9');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_mengulang_kelas10');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_mengulang_kelas10');?></th>
	<th><?php echo $paginator->sort('total_siswa_mengulang_kelas10');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_mengulang_kelas11');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_mengulang_kelas11');?></th>
	<th><?php echo $paginator->sort('total_siswa_mengulang_kelas11');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_mengulang_kelas12');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_mengulang_kelas12');?></th>
	<th><?php echo $paginator->sort('total_siswa_mengulang_kelas12');?></th>
	<th><?php echo $paginator->sort('total_siswa_mengulang');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_mutasi_kelas1');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_mutasi_kelas1');?></th>
	<th><?php echo $paginator->sort('total_siswa_mutasi_kelas1');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_mutasi_kelas2');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_mutasi_kelas2');?></th>
	<th><?php echo $paginator->sort('total_siswa_mutasi_kelas2');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_mutasi_kelas3');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_mutasi_kelas3');?></th>
	<th><?php echo $paginator->sort('total_siswa_mutasi_kelas3');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_mutasi_kelas4');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_mutasi_kelas4');?></th>
	<th><?php echo $paginator->sort('total_siswa_mutasi_kelas4');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_mutasi_kelas5');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_mutasi_kelas5');?></th>
	<th><?php echo $paginator->sort('total_siswa_mutasi_kelas5');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_mutasi_kelas6');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_mutasi_kelas6');?></th>
	<th><?php echo $paginator->sort('total_siswa_mutasi_kelas6');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_mutasi_kelas7');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_mutasi_kelas7');?></th>
	<th><?php echo $paginator->sort('total_siswa_mutasi_kelas7');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_mutasi_kelas8');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_mutasi_kelas8');?></th>
	<th><?php echo $paginator->sort('total_siswa_mutasi_kelas8');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_mutasi_kelas9');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_mutasi_kelas9');?></th>
	<th><?php echo $paginator->sort('total_siswa_mutasi_kelas9');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_mutasi_kelas10');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_mutasi_kelas10');?></th>
	<th><?php echo $paginator->sort('total_siswa_mutasi_kelas10');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_mutasi_kelas11');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_mutasi_kelas11');?></th>
	<th><?php echo $paginator->sort('total_siswa_mutasi_kelas11');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_mutasi_kelas12');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_mutasi_kelas12');?></th>
	<th><?php echo $paginator->sort('total_siswa_mutasi_kelas12');?></th>
	<th><?php echo $paginator->sort('total_siswa_mutasi');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_putus_kelas1');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_putus_kelas1');?></th>
	<th><?php echo $paginator->sort('total_siswa_putus_kelas1');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_putus_kelas2');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_putus_kelas2');?></th>
	<th><?php echo $paginator->sort('total_siswa_putus_kelas2');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_putus_kelas3');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_putus_kelas3');?></th>
	<th><?php echo $paginator->sort('total_siswa_putus_kelas3');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_putus_kelas4');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_putus_kelas4');?></th>
	<th><?php echo $paginator->sort('total_siswa_putus_kelas4');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_putus_kelas5');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_putus_kelas5');?></th>
	<th><?php echo $paginator->sort('total_siswa_putus_kelas5');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_putus_kelas6');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_putus_kelas6');?></th>
	<th><?php echo $paginator->sort('total_siswa_putus_kelas6');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_putus_kelas7');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_putus_kelas7');?></th>
	<th><?php echo $paginator->sort('total_siswa_putus_kelas7');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_putus_kelas8');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_putus_kelas8');?></th>
	<th><?php echo $paginator->sort('total_siswa_putus_kelas8');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_putus_kelas9');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_putus_kelas9');?></th>
	<th><?php echo $paginator->sort('total_siswa_putus_kelas9');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_putus_kelas10');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_putus_kelas10');?></th>
	<th><?php echo $paginator->sort('total_siswa_putus_kelas10');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_putus_kelas11');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_putus_kelas11');?></th>
	<th><?php echo $paginator->sort('total_siswa_putus_kelas11');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_putus_kelas12');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_putus_kelas12');?></th>
	<th><?php echo $paginator->sort('total_siswa_putus_kelas12');?></th>
	<th><?php echo $paginator->sort('total_siswa_putus');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_prestasi_seni_kabupaten');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_seni_kabupaten');?></th>
	<th><?php echo $paginator->sort('total_siswa_prestasi_seni_kabupaten');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_prestasi_sains_kabupaten');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_sains_kabupaten');?></th>
	<th><?php echo $paginator->sort('total_siswa_prestasi_sains_kabupaten');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_prestasi_olahraga_kabupaten');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_olahraga_kabupaten');?></th>
	<th><?php echo $paginator->sort('total_siswa_prestasi_olahraga_kabupaten');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_beasiswa_prestasi');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_beasiswa_prestasi');?></th>
	<th><?php echo $paginator->sort('total_siswa_beasiswa_prestasi');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_beasiswa_miskin');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_beasiswa_miskin');?></th>
	<th><?php echo $paginator->sort('total_siswa_beasiswa_miskin');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_beasiswa_lain');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_beasiswa_lain');?></th>
	<th><?php echo $paginator->sort('total_siswa_beasiswa_lain');?></th>
	<th><?php echo $paginator->sort('total_siswa_laki_beasiswa');?></th>
	<th><?php echo $paginator->sort('total_siswa_perempuan_beasiswa');?></th>
	<th><?php echo $paginator->sort('total_siswa_beasiswa');?></th>
	<th><?php echo $paginator->sort('ptk_status_kepegawaian_pns');?></th>
	<th><?php echo $paginator->sort('ptk_status_kepegawaian_pns_laki');?></th>
	<th><?php echo $paginator->sort('ptk_status_kepegawaian_pns_perempuan');?></th>
	<th><?php echo $paginator->sort('ptk_status_kepegawaian_pns_diperbantukan');?></th>
	<th><?php echo $paginator->sort('ptk_status_kepegawaian_pns_diperbantukan_laki');?></th>
	<th><?php echo $paginator->sort('ptk_status_kepegawaian_pns_diperbantukan_perempuan');?></th>
	<th><?php echo $paginator->sort('ptk_status_kepegawaian_pns_depag');?></th>
	<th><?php echo $paginator->sort('ptk_status_kepegawaian_pns_depag_laki');?></th>
	<th><?php echo $paginator->sort('ptk_status_kepegawaian_pns_depag_perempuan');?></th>
	<th><?php echo $paginator->sort('ptk_status_kepegawaian_gty');?></th>
	<th><?php echo $paginator->sort('ptk_status_kepegawaian_gty_laki');?></th>
	<th><?php echo $paginator->sort('ptk_status_kepegawaian_gty_perempuan');?></th>
	<th><?php echo $paginator->sort('ptk_status_kepegawaian_pty');?></th>
	<th><?php echo $paginator->sort('ptk_status_kepegawaian_pty_laki');?></th>
	<th><?php echo $paginator->sort('ptk_status_kepegawaian_pty_perempuan');?></th>
	<th><?php echo $paginator->sort('ptk_status_kepegawaian_gttp');?></th>
	<th><?php echo $paginator->sort('ptk_status_kepegawaian_gttp_laki');?></th>
	<th><?php echo $paginator->sort('ptk_status_kepegawaian_gttp_perempuan');?></th>
	<th><?php echo $paginator->sort('ptk_status_kepegawaian_gttk');?></th>
	<th><?php echo $paginator->sort('ptk_status_kepegawaian_gttk_laki');?></th>
	<th><?php echo $paginator->sort('ptk_status_kepegawaian_gttk_perempuan');?></th>
	<th><?php echo $paginator->sort('ptk_status_kepegawaian_gbp');?></th>
	<th><?php echo $paginator->sort('ptk_status_kepegawaian_gbp_laki');?></th>
	<th><?php echo $paginator->sort('ptk_status_kepegawaian_gbp_perempuan');?></th>
	<th><?php echo $paginator->sort('ptk_status_kepegawaian_pttk');?></th>
	<th><?php echo $paginator->sort('ptk_status_kepegawaian_pttk_laki');?></th>
	<th><?php echo $paginator->sort('ptk_status_kepegawaian_pttk_perempuan');?></th>
	<th><?php echo $paginator->sort('ptk_status_kepegawaian_ghs');?></th>
	<th><?php echo $paginator->sort('ptk_status_kepegawaian_ghs_laki');?></th>
	<th><?php echo $paginator->sort('ptk_status_kepegawaian_ghs_perempuan');?></th>
	<th><?php echo $paginator->sort('ptk_sertifikasi');?></th>
	<th><?php echo $paginator->sort('ptk_sertifikasi_laki');?></th>
	<th><?php echo $paginator->sort('ptk_sertifikasi_perempuan');?></th>
	<th><?php echo $paginator->sort('ptk_sertifikasi_pns');?></th>
	<th><?php echo $paginator->sort('ptk_sertifikasi_pnsdip');?></th>
	<th><?php echo $paginator->sort('ptk_sertifikasi_pnsdep');?></th>
	<th><?php echo $paginator->sort('ptk_sertifikasi_gty');?></th>
	<th><?php echo $paginator->sort('ptk_sertifikasi_pty');?></th>
	<th><?php echo $paginator->sort('ptk_sertifikasi_gttp');?></th>
	<th><?php echo $paginator->sort('ptk_sertifikasi_gttk');?></th>
	<th><?php echo $paginator->sort('ptk_sertifikasi_gbp');?></th>
	<th><?php echo $paginator->sort('ptk_sertifikasi_pttk');?></th>
	<th><?php echo $paginator->sort('ptk_sertifikasi_ghs');?></th>
	<th><?php echo $paginator->sort('ptk_belum_sertifikasi');?></th>
	<th><?php echo $paginator->sort('ptk_belum_sertifikasi_laki');?></th>
	<th><?php echo $paginator->sort('ptk_belum_sertifikasi_perempuan');?></th>
	<th><?php echo $paginator->sort('ptk_belum_sertifikasi_pns');?></th>
	<th><?php echo $paginator->sort('ptk_belum_sertifikasi_pnsdip');?></th>
	<th><?php echo $paginator->sort('ptk_belum_sertifikasi_pnsdep');?></th>
	<th><?php echo $paginator->sort('ptk_belum_sertifikasi_gty');?></th>
	<th><?php echo $paginator->sort('ptk_belum_sertifikasi_pty');?></th>
	<th><?php echo $paginator->sort('ptk_belum_sertifikasi_gttp');?></th>
	<th><?php echo $paginator->sort('ptk_belum_sertifikasi_gttk');?></th>
	<th><?php echo $paginator->sort('ptk_belum_sertifikasi_gbp');?></th>
	<th><?php echo $paginator->sort('ptk_belum_sertifikasi_pttk');?></th>
	<th><?php echo $paginator->sort('ptk_belum_sertifikasi_ghs');?></th>
	<th><?php echo $paginator->sort('ptk_jabatan_guru');?></th>
	<th><?php echo $paginator->sort('ptk_jabatan_guru_laki');?></th>
	<th><?php echo $paginator->sort('ptk_jabatan_guru_perempuan');?></th>
	<th><?php echo $paginator->sort('ptk_jabatan_ksk');?></th>
	<th><?php echo $paginator->sort('ptk_jabatan_ksk_laki');?></th>
	<th><?php echo $paginator->sort('ptk_jabatan_ksk_perempuan');?></th>
	<th><?php echo $paginator->sort('ptk_jabatan_kps');?></th>
	<th><?php echo $paginator->sort('ptk_jabatan_kps_laki');?></th>
	<th><?php echo $paginator->sort('ptk_jabatan_kps_perempuan');?></th>
	<th><?php echo $paginator->sort('ptk_jabatan_tpp');?></th>
	<th><?php echo $paginator->sort('ptk_jabatan_tpp_laki');?></th>
	<th><?php echo $paginator->sort('ptk_jabatan_tpp_perempuan');?></th>
	<th><?php echo $paginator->sort('ptk_jabatan_kta');?></th>
	<th><?php echo $paginator->sort('ptk_jabatan_kta_laki');?></th>
	<th><?php echo $paginator->sort('ptk_jabatan_kta_perempuan');?></th>
	<th><?php echo $paginator->sort('ptk_jabatan_ta');?></th>
	<th><?php echo $paginator->sort('ptk_jabatan_ta_laki');?></th>
	<th><?php echo $paginator->sort('ptk_jabatan_ta_perempuan');?></th>
	<th><?php echo $paginator->sort('ptk_jabatan_klb');?></th>
	<th><?php echo $paginator->sort('ptk_jabatan_klb_laki');?></th>
	<th><?php echo $paginator->sort('ptk_jabatan_klb_perempuan');?></th>
	<th><?php echo $paginator->sort('ptk_jabatan_tlb');?></th>
	<th><?php echo $paginator->sort('ptk_jabatan_tlb_laki');?></th>
	<th><?php echo $paginator->sort('ptk_jabatan_tlb_perempuan');?></th>
	<th><?php echo $paginator->sort('ptk_jabatan_lab');?></th>
	<th><?php echo $paginator->sort('ptk_jabatan_lab_laki');?></th>
	<th><?php echo $paginator->sort('ptk_jabatan_lab_perempuan');?></th>
	<th><?php echo $paginator->sort('ptk_jabatan_pgs');?></th>
	<th><?php echo $paginator->sort('ptk_jabatan_pgs_laki');?></th>
	<th><?php echo $paginator->sort('ptk_jabatan_pgs_perempuan');?></th>
	<th><?php echo $paginator->sort('ptk_pendidikan_ts');?></th>
	<th><?php echo $paginator->sort('ptk_pendidikan_ts_laki');?></th>
	<th><?php echo $paginator->sort('ptk_pendidikan_ts_perempuan');?></th>
	<th><?php echo $paginator->sort('ptk_pendidikan_ps');?></th>
	<th><?php echo $paginator->sort('ptk_pendidikan_ps_laki');?></th>
	<th><?php echo $paginator->sort('ptk_pendidikan_ps_perempuan');?></th>
	<th><?php echo $paginator->sort('ptk_pendidikan_sd');?></th>
	<th><?php echo $paginator->sort('ptk_pendidikan_sd_laki');?></th>
	<th><?php echo $paginator->sort('ptk_pendidikan_sd_perempuan');?></th>
	<th><?php echo $paginator->sort('ptk_pendidikan_smp');?></th>
	<th><?php echo $paginator->sort('ptk_pendidikan_smp_laki');?></th>
	<th><?php echo $paginator->sort('ptk_pendidikan_smp_perempuan');?></th>
	<th><?php echo $paginator->sort('ptk_pendidikan_sma');?></th>
	<th><?php echo $paginator->sort('ptk_pendidikan_sma_laki');?></th>
	<th><?php echo $paginator->sort('ptk_pendidikan_sma_perempuan');?></th>
	<th><?php echo $paginator->sort('ptk_pendidikan_d1');?></th>
	<th><?php echo $paginator->sort('ptk_pendidikan_d1_laki');?></th>
	<th><?php echo $paginator->sort('ptk_pendidikan_d1_perempuan');?></th>
	<th><?php echo $paginator->sort('ptk_pendidikan_d2');?></th>
	<th><?php echo $paginator->sort('ptk_pendidikan_d2_laki');?></th>
	<th><?php echo $paginator->sort('ptk_pendidikan_d2_perempuan');?></th>
	<th><?php echo $paginator->sort('ptk_pendidikan_d3');?></th>
	<th><?php echo $paginator->sort('ptk_pendidikan_d3_laki');?></th>
	<th><?php echo $paginator->sort('ptk_pendidikan_d3_perempuan');?></th>
	<th><?php echo $paginator->sort('ptk_pendidikan_s1');?></th>
	<th><?php echo $paginator->sort('ptk_pendidikan_s1_laki');?></th>
	<th><?php echo $paginator->sort('ptk_pendidikan_s1_perempuan');?></th>
	<th><?php echo $paginator->sort('ptk_pendidikan_s2');?></th>
	<th><?php echo $paginator->sort('ptk_pendidikan_s2_laki');?></th>
	<th><?php echo $paginator->sort('ptk_pendidikan_s2_perempuan');?></th>
	<th><?php echo $paginator->sort('ptk_pendidikan_s3');?></th>
	<th><?php echo $paginator->sort('ptk_pendidikan_s3_laki');?></th>
	<th><?php echo $paginator->sort('ptk_pendidikan_s3_perempuan');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_gpai');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_gpkk');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_gpal');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_gpsd');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_gplb');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_gksd');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_gklb');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_sertifikasi_gpai');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_sertifikasi_gpkk');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_sertifikasi_gpal');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_sertifikasi_gpsd');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_sertifikasi_gplb');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_sertifikasi_gksd');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_sertifikasi_gklb');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_belum_sertifikasi_gpai');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_belum_sertifikasi_gpkk');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_belum_sertifikasi_gpal');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_belum_sertifikasi_gsbu');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_belum_sertifikasi_gpsd');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_belum_sertifikasi_gplb');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_belum_sertifikasi_gksd');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_belum_sertifikasi_gklb');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_gpag');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_gpkn');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_gmmt');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_gbin');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_gtik');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_gket');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_gfis');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_gbio');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_gkim');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_gipa');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_gips');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_gsbu');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_gpjo');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_gsej');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_gsos');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_geko');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_ggeo');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_gant');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_gbig');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_gbla');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_gpbp');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_gpgs');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_sertifikasi_gpag');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_sertifikasi_gpkn');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_sertifikasi_gmmt');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_sertifikasi_gbin');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_sertifikasi_gtik');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_sertifikasi_gket');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_sertifikasi_gfis');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_sertifikasi_gbio');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_sertifikasi_gkim');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_sertifikasi_gipa');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_sertifikasi_gips');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_sertifikasi_gsbu');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_sertifikasi_gpjo');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_sertifikasi_gsej');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_sertifikasi_gsos');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_sertifikasi_geko');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_sertifikasi_ggeo');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_sertifikasi_gant');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_sertifikasi_gbig');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_sertifikasi_gbla');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_sertifikasi_gpbp');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_sertifikasi_gpgs');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_belum_sertifikasi_gpag');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_belum_sertifikasi_gpkn');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_belum_sertifikasi_gmmt');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_belum_sertifikasi_gbin');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_belum_sertifikasi_gtik');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_belum_sertifikasi_gket');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_belum_sertifikasi_gfis');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_belum_sertifikasi_gbio');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_belum_sertifikasi_gkim');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_belum_sertifikasi_gipa');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_belum_sertifikasi_gips');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_belum_sertifikasi_gpjo');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_belum_sertifikasi_gsej');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_belum_sertifikasi_gsos');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_belum_sertifikasi_geko');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_belum_sertifikasi_ggeo');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_belum_sertifikasi_gant');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_belum_sertifikasi_gbig');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_belum_sertifikasi_gbla');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_belum_sertifikasi_gpbp');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_belum_sertifikasi_gpgs');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_1');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_2');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_3');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_4');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_5');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_6');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_7');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_8');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_9');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_10');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_11');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_12');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_13');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_14');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_15');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_16');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_17');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_18');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_19');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_20');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_21');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_22');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_23');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_24');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_25');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_26');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_27');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_28');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_29');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_30');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_31');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_32');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_33');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_34');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_35');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_36');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_37');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_38');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_39');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_40');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_41');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_42');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_43');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_44');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_45');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_46');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_47');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_48');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_49');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_50');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_51');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_52');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_53');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_54');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_55');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_56');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_57');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_58');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_59');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_60');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_61');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_62');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_63');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_64');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_65');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_66');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_67');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_68');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_69');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_70');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_71');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_72');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_73');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_74');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_75');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_76');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_77');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_78');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_79');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_80');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_81');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_82');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_83');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_84');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_85');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_86');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_87');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_88');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_89');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_90');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_91');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_92');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_93');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_94');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_95');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_96');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_97');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_98');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_99');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_100');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_101');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_102');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_103');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_104');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_105');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_106');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_107');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_108');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_109');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_110');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_111');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_112');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_113');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_114');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_115');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_116');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_117');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_118');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_119');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_120');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_121');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_122');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_123');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_124');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_125');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_126');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_127');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_128');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_129');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_130');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_131');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_132');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_133');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_134');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_135');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_136');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_137');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_138');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_139');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_140');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_1_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_2_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_3_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_4_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_5_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_6_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_7_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_8_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_9_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_10_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_11_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_12_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_13_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_14_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_15_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_16_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_17_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_18_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_19_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_20_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_21_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_22_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_23_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_24_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_25_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_26_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_27_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_28_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_29_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_30_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_31_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_32_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_33_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_34_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_35_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_36_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_37_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_38_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_39_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_40_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_41_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_42_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_43_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_44_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_45_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_46_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_47_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_48_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_49_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_50_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_51_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_52_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_53_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_54_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_55_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_56_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_57_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_58_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_59_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_60_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_61_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_62_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_63_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_64_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_65_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_66_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_67_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_68_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_69_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_70_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_71_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_72_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_73_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_74_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_75_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_76_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_77_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_78_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_79_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_80_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_81_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_82_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_83_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_84_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_85_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_86_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_87_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_88_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_89_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_90_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_91_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_92_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_93_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_94_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_95_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_96_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_97_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_98_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_99_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_100_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_101_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_102_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_103_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_104_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_105_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_106_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_107_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_108_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_109_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_110_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_111_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_112_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_113_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_114_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_115_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_116_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_117_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_118_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_119_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_120_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_121_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_122_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_123_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_124_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_125_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_126_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_127_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_128_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_129_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_130_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_131_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_132_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_133_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_134_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_135_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_136_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_137_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_138_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_139_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_140_st');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_1_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_2_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_3_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_4_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_5_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_6_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_7_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_8_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_9_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_10_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_11_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_12_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_13_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_14_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_15_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_16_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_17_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_18_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_19_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_20_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_21_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_22_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_23_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_24_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_25_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_26_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_27_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_28_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_29_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_30_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_31_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_32_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_33_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_34_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_35_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_36_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_37_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_38_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_39_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_40_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_41_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_42_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_43_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_44_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_45_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_46_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_47_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_48_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_49_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_50_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_51_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_52_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_53_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_54_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_55_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_56_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_57_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_58_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_59_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_60_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_61_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_62_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_63_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_64_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_65_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_66_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_67_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_68_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_69_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_70_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_71_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_72_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_73_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_74_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_75_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_76_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_77_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_78_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_79_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_80_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_81_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_82_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_83_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_84_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_85_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_86_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_87_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_88_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_89_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_90_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_91_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_92_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_93_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_94_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_95_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_96_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_97_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_98_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_99_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_100_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_101_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_102_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_103_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_104_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_105_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_106_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_107_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_108_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_109_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_110_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_111_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_112_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_113_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_114_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_115_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_116_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_117_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_118_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_119_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_120_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_121_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_122_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_123_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_124_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_125_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_126_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_127_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_128_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_129_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_130_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_131_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_132_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_133_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_134_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_135_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_136_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_137_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_138_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_139_ns');?></th>
	<th><?php echo $paginator->sort('ptk_bidang_studi_140_ns');?></th>
	<th><?php echo $paginator->sort('month_entry');?></th>
	<th><?php echo $paginator->sort('year_entry');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($schools as $school):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $school['School']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($school['MasterSekolah']['id'], array('controller' => 'master_sekolahs', 'action' => 'view', $school['MasterSekolah']['id'])); ?>
		</td>
		<td>
			<?php echo $school['School']['total_ruang_kelas']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_rombel']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_ptk']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_ptk_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_ptk_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['standar_mutu']; ?>
		</td>
		<td>
			<?php echo $school['School']['akreditasi']; ?>
		</td>
		<td>
			<?php echo $school['School']['sertifikasi']; ?>
		</td>
		<td>
			<?php echo $school['School']['gugus']; ?>
		</td>
		<td>
			<?php echo $school['School']['satu_atap']; ?>
		</td>
		<td>
			<?php echo $school['School']['kategori_wilayah']; ?>
		</td>
		<td>
			<?php echo $school['School']['inklusi']; ?>
		</td>
		<td>
			<?php echo $school['School']['daya_listrik']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelas1']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelas1']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelas1']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelas2']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelas2']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelas2']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelas3']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelas3']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelas3']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelas4']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelas4']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelas4']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelas5']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelas5']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelas5']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelas6']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelas6']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelas6']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelas7']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelas7']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelas7']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelas8']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelas8']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelas8']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelas9']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelas9']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelas9']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelas10']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelas10']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelas10']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelas11_ipa']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelas11_ipa']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelas11_ipa']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelas11_ips']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelas11_ips']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelas11_ips']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelas11_bahasa']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelas11_bahasa']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelas11_bahasa']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelas11_agama']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelas11_agama']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelas11_agama']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelas12_ipa']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelas12_ipa']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelas12_ipa']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelas12_ips']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelas12_ips']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelas12_ips']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelas12_bahasa']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelas12_bahasa']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelas12_bahasa']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelas12_agama']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelas12_agama']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelas12_agama']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_islam']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_islam']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_islam']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kristen']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kristen']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kristen']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_katolik']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_katolik']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_katolik']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_hindu']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_hindu']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_hindu']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_budha']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_budha']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_budha']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_konghucu']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_konghucu']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_konghucu']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok1']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok1']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok1']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok2']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok2']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok2']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok3']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok3']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok3']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok4']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok4']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok4']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok5']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok5']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok5']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok6']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok6']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok6']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok7']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok7']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok7']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok8']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok8']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok8']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok9']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok9']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok9']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok10']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok10']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok10']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok11']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok11']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok11']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok12']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok12']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok12']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok13']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok13']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok13']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok14']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok14']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok14']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok_pendapatan1']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok_pendapatan1']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok_pendapatan1']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok_pendapatan2']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok_pendapatan2']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok_pendapatan2']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok_pendapatan3']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok_pendapatan3']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok_pendapatan3']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok_kebutuhanKhusus1']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok_kebutuhanKhusus1']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok_kebutuhanKhusus1']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok_kebutuhanKhusus2']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok_kebutuhanKhusus2']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok_kebutuhanKhusus2']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok_kebutuhanKhusus3']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok_kebutuhanKhusus3']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok_kebutuhanKhusus3']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok_kebutuhanKhusus4']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok_kebutuhanKhusus4']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok_kebutuhanKhusus4']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok_kebutuhanKhusus5']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok_kebutuhanKhusus5']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok_kebutuhanKhusus5']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok_kebutuhanKhusus6']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok_kebutuhanKhusus6']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok_kebutuhanKhusus6']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok_kebutuhanKhusus7']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok_kebutuhanKhusus7']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok_kebutuhanKhusus7']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok_kebutuhanKhusus8']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok_kebutuhanKhusus8']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok_kebutuhanKhusus8']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok_kebutuhanKhusus9']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok_kebutuhanKhusus9']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok_kebutuhanKhusus9']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok_kebutuhanKhusus10']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok_kebutuhanKhusus10']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok_kebutuhanKhusus10']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok_kebutuhanKhusus11']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok_kebutuhanKhusus11']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok_kebutuhanKhusus11']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok_kebutuhanKhusus12']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok_kebutuhanKhusus12']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok_kebutuhanKhusus12']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok_kebutuhanKhusus13']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok_kebutuhanKhusus13']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok_kebutuhanKhusus13']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok_kebutuhanKhusus14']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok_kebutuhanKhusus14']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok_kebutuhanKhusus14']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok_kebutuhanKhusus15']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok_kebutuhanKhusus15']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok_kebutuhanKhusus15']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok_kebutuhanKhusus16']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok_kebutuhanKhusus16']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok_kebutuhanKhusus16']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok_kebutuhanKhusus17']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok_kebutuhanKhusus17']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok_kebutuhanKhusus17']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_kelompok_kebutuhanKhusus18']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_kelompok_kebutuhanKhusus18']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_kelompok_kebutuhanKhusus18']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_mengulang_kelas1']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_mengulang_kelas1']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_mengulang_kelas1']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_mengulang_kelas2']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_mengulang_kelas2']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_mengulang_kelas2']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_mengulang_kelas3']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_mengulang_kelas3']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_mengulang_kelas3']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_mengulang_kelas4']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_mengulang_kelas4']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_mengulang_kelas4']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_mengulang_kelas5']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_mengulang_kelas5']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_mengulang_kelas5']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_mengulang_kelas6']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_mengulang_kelas6']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_mengulang_kelas6']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_mengulang_kelas7']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_mengulang_kelas7']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_mengulang_kelas7']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_mengulang_kelas8']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_mengulang_kelas8']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_mengulang_kelas8']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_mengulang_kelas9']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_mengulang_kelas9']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_mengulang_kelas9']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_mengulang_kelas10']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_mengulang_kelas10']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_mengulang_kelas10']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_mengulang_kelas11']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_mengulang_kelas11']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_mengulang_kelas11']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_mengulang_kelas12']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_mengulang_kelas12']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_mengulang_kelas12']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_mengulang']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_mutasi_kelas1']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_mutasi_kelas1']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_mutasi_kelas1']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_mutasi_kelas2']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_mutasi_kelas2']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_mutasi_kelas2']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_mutasi_kelas3']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_mutasi_kelas3']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_mutasi_kelas3']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_mutasi_kelas4']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_mutasi_kelas4']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_mutasi_kelas4']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_mutasi_kelas5']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_mutasi_kelas5']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_mutasi_kelas5']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_mutasi_kelas6']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_mutasi_kelas6']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_mutasi_kelas6']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_mutasi_kelas7']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_mutasi_kelas7']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_mutasi_kelas7']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_mutasi_kelas8']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_mutasi_kelas8']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_mutasi_kelas8']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_mutasi_kelas9']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_mutasi_kelas9']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_mutasi_kelas9']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_mutasi_kelas10']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_mutasi_kelas10']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_mutasi_kelas10']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_mutasi_kelas11']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_mutasi_kelas11']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_mutasi_kelas11']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_mutasi_kelas12']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_mutasi_kelas12']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_mutasi_kelas12']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_mutasi']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_putus_kelas1']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_putus_kelas1']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_putus_kelas1']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_putus_kelas2']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_putus_kelas2']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_putus_kelas2']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_putus_kelas3']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_putus_kelas3']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_putus_kelas3']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_putus_kelas4']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_putus_kelas4']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_putus_kelas4']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_putus_kelas5']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_putus_kelas5']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_putus_kelas5']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_putus_kelas6']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_putus_kelas6']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_putus_kelas6']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_putus_kelas7']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_putus_kelas7']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_putus_kelas7']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_putus_kelas8']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_putus_kelas8']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_putus_kelas8']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_putus_kelas9']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_putus_kelas9']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_putus_kelas9']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_putus_kelas10']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_putus_kelas10']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_putus_kelas10']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_putus_kelas11']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_putus_kelas11']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_putus_kelas11']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_putus_kelas12']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_putus_kelas12']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_putus_kelas12']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_putus']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_prestasi_seni_kabupaten']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_seni_kabupaten']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_prestasi_seni_kabupaten']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_prestasi_sains_kabupaten']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_sains_kabupaten']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_prestasi_sains_kabupaten']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_prestasi_olahraga_kabupaten']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_olahraga_kabupaten']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_prestasi_olahraga_kabupaten']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_beasiswa_prestasi']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_beasiswa_prestasi']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_beasiswa_prestasi']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_beasiswa_miskin']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_beasiswa_miskin']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_beasiswa_miskin']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_beasiswa_lain']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_beasiswa_lain']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_beasiswa_lain']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_laki_beasiswa']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_perempuan_beasiswa']; ?>
		</td>
		<td>
			<?php echo $school['School']['total_siswa_beasiswa']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_status_kepegawaian_pns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_status_kepegawaian_pns_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_status_kepegawaian_pns_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_status_kepegawaian_pns_diperbantukan']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_status_kepegawaian_pns_diperbantukan_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_status_kepegawaian_pns_diperbantukan_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_status_kepegawaian_pns_depag']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_status_kepegawaian_pns_depag_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_status_kepegawaian_pns_depag_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_status_kepegawaian_gty']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_status_kepegawaian_gty_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_status_kepegawaian_gty_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_status_kepegawaian_pty']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_status_kepegawaian_pty_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_status_kepegawaian_pty_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_status_kepegawaian_gttp']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_status_kepegawaian_gttp_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_status_kepegawaian_gttp_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_status_kepegawaian_gttk']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_status_kepegawaian_gttk_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_status_kepegawaian_gttk_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_status_kepegawaian_gbp']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_status_kepegawaian_gbp_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_status_kepegawaian_gbp_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_status_kepegawaian_pttk']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_status_kepegawaian_pttk_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_status_kepegawaian_pttk_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_status_kepegawaian_ghs']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_status_kepegawaian_ghs_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_status_kepegawaian_ghs_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_sertifikasi']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_sertifikasi_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_sertifikasi_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_sertifikasi_pns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_sertifikasi_pnsdip']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_sertifikasi_pnsdep']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_sertifikasi_gty']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_sertifikasi_pty']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_sertifikasi_gttp']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_sertifikasi_gttk']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_sertifikasi_gbp']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_sertifikasi_pttk']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_sertifikasi_ghs']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_belum_sertifikasi']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_belum_sertifikasi_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_belum_sertifikasi_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_belum_sertifikasi_pns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_belum_sertifikasi_pnsdip']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_belum_sertifikasi_pnsdep']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_belum_sertifikasi_gty']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_belum_sertifikasi_pty']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_belum_sertifikasi_gttp']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_belum_sertifikasi_gttk']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_belum_sertifikasi_gbp']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_belum_sertifikasi_pttk']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_belum_sertifikasi_ghs']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_jabatan_guru']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_jabatan_guru_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_jabatan_guru_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_jabatan_ksk']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_jabatan_ksk_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_jabatan_ksk_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_jabatan_kps']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_jabatan_kps_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_jabatan_kps_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_jabatan_tpp']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_jabatan_tpp_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_jabatan_tpp_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_jabatan_kta']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_jabatan_kta_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_jabatan_kta_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_jabatan_ta']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_jabatan_ta_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_jabatan_ta_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_jabatan_klb']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_jabatan_klb_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_jabatan_klb_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_jabatan_tlb']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_jabatan_tlb_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_jabatan_tlb_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_jabatan_lab']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_jabatan_lab_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_jabatan_lab_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_jabatan_pgs']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_jabatan_pgs_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_jabatan_pgs_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_pendidikan_ts']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_pendidikan_ts_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_pendidikan_ts_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_pendidikan_ps']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_pendidikan_ps_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_pendidikan_ps_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_pendidikan_sd']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_pendidikan_sd_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_pendidikan_sd_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_pendidikan_smp']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_pendidikan_smp_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_pendidikan_smp_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_pendidikan_sma']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_pendidikan_sma_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_pendidikan_sma_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_pendidikan_d1']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_pendidikan_d1_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_pendidikan_d1_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_pendidikan_d2']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_pendidikan_d2_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_pendidikan_d2_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_pendidikan_d3']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_pendidikan_d3_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_pendidikan_d3_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_pendidikan_s1']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_pendidikan_s1_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_pendidikan_s1_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_pendidikan_s2']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_pendidikan_s2_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_pendidikan_s2_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_pendidikan_s3']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_pendidikan_s3_laki']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_pendidikan_s3_perempuan']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_gpai']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_gpkk']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_gpal']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_gpsd']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_gplb']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_gksd']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_gklb']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_sertifikasi_gpai']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_sertifikasi_gpkk']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_sertifikasi_gpal']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_sertifikasi_gpsd']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_sertifikasi_gplb']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_sertifikasi_gksd']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_sertifikasi_gklb']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_belum_sertifikasi_gpai']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_belum_sertifikasi_gpkk']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_belum_sertifikasi_gpal']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_belum_sertifikasi_gsbu']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_belum_sertifikasi_gpsd']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_belum_sertifikasi_gplb']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_belum_sertifikasi_gksd']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_belum_sertifikasi_gklb']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_gpag']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_gpkn']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_gmmt']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_gbin']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_gtik']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_gket']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_gfis']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_gbio']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_gkim']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_gipa']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_gips']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_gsbu']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_gpjo']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_gsej']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_gsos']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_geko']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_ggeo']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_gant']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_gbig']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_gbla']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_gpbp']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_gpgs']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_sertifikasi_gpag']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_sertifikasi_gpkn']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_sertifikasi_gmmt']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_sertifikasi_gbin']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_sertifikasi_gtik']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_sertifikasi_gket']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_sertifikasi_gfis']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_sertifikasi_gbio']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_sertifikasi_gkim']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_sertifikasi_gipa']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_sertifikasi_gips']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_sertifikasi_gsbu']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_sertifikasi_gpjo']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_sertifikasi_gsej']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_sertifikasi_gsos']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_sertifikasi_geko']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_sertifikasi_ggeo']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_sertifikasi_gant']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_sertifikasi_gbig']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_sertifikasi_gbla']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_sertifikasi_gpbp']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_sertifikasi_gpgs']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_belum_sertifikasi_gpag']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_belum_sertifikasi_gpkn']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_belum_sertifikasi_gmmt']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_belum_sertifikasi_gbin']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_belum_sertifikasi_gtik']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_belum_sertifikasi_gket']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_belum_sertifikasi_gfis']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_belum_sertifikasi_gbio']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_belum_sertifikasi_gkim']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_belum_sertifikasi_gipa']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_belum_sertifikasi_gips']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_belum_sertifikasi_gpjo']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_belum_sertifikasi_gsej']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_belum_sertifikasi_gsos']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_belum_sertifikasi_geko']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_belum_sertifikasi_ggeo']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_belum_sertifikasi_gant']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_belum_sertifikasi_gbig']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_belum_sertifikasi_gbla']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_belum_sertifikasi_gpbp']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_belum_sertifikasi_gpgs']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_1']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_2']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_3']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_4']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_5']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_6']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_7']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_8']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_9']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_10']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_11']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_12']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_13']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_14']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_15']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_16']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_17']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_18']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_19']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_20']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_21']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_22']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_23']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_24']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_25']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_26']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_27']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_28']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_29']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_30']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_31']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_32']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_33']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_34']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_35']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_36']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_37']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_38']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_39']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_40']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_41']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_42']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_43']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_44']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_45']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_46']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_47']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_48']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_49']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_50']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_51']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_52']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_53']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_54']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_55']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_56']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_57']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_58']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_59']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_60']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_61']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_62']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_63']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_64']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_65']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_66']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_67']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_68']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_69']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_70']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_71']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_72']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_73']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_74']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_75']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_76']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_77']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_78']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_79']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_80']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_81']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_82']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_83']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_84']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_85']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_86']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_87']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_88']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_89']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_90']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_91']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_92']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_93']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_94']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_95']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_96']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_97']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_98']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_99']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_100']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_101']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_102']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_103']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_104']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_105']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_106']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_107']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_108']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_109']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_110']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_111']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_112']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_113']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_114']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_115']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_116']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_117']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_118']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_119']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_120']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_121']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_122']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_123']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_124']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_125']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_126']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_127']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_128']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_129']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_130']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_131']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_132']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_133']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_134']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_135']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_136']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_137']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_138']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_139']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_140']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_1_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_2_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_3_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_4_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_5_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_6_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_7_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_8_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_9_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_10_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_11_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_12_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_13_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_14_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_15_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_16_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_17_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_18_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_19_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_20_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_21_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_22_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_23_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_24_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_25_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_26_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_27_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_28_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_29_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_30_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_31_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_32_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_33_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_34_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_35_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_36_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_37_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_38_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_39_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_40_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_41_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_42_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_43_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_44_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_45_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_46_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_47_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_48_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_49_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_50_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_51_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_52_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_53_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_54_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_55_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_56_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_57_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_58_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_59_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_60_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_61_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_62_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_63_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_64_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_65_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_66_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_67_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_68_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_69_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_70_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_71_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_72_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_73_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_74_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_75_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_76_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_77_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_78_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_79_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_80_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_81_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_82_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_83_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_84_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_85_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_86_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_87_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_88_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_89_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_90_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_91_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_92_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_93_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_94_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_95_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_96_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_97_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_98_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_99_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_100_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_101_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_102_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_103_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_104_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_105_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_106_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_107_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_108_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_109_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_110_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_111_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_112_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_113_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_114_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_115_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_116_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_117_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_118_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_119_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_120_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_121_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_122_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_123_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_124_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_125_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_126_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_127_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_128_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_129_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_130_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_131_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_132_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_133_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_134_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_135_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_136_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_137_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_138_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_139_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_140_st']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_1_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_2_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_3_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_4_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_5_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_6_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_7_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_8_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_9_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_10_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_11_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_12_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_13_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_14_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_15_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_16_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_17_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_18_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_19_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_20_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_21_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_22_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_23_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_24_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_25_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_26_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_27_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_28_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_29_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_30_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_31_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_32_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_33_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_34_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_35_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_36_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_37_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_38_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_39_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_40_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_41_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_42_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_43_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_44_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_45_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_46_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_47_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_48_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_49_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_50_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_51_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_52_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_53_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_54_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_55_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_56_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_57_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_58_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_59_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_60_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_61_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_62_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_63_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_64_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_65_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_66_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_67_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_68_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_69_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_70_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_71_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_72_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_73_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_74_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_75_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_76_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_77_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_78_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_79_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_80_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_81_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_82_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_83_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_84_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_85_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_86_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_87_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_88_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_89_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_90_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_91_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_92_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_93_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_94_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_95_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_96_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_97_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_98_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_99_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_100_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_101_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_102_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_103_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_104_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_105_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_106_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_107_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_108_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_109_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_110_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_111_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_112_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_113_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_114_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_115_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_116_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_117_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_118_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_119_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_120_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_121_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_122_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_123_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_124_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_125_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_126_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_127_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_128_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_129_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_130_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_131_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_132_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_133_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_134_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_135_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_136_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_137_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_138_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_139_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['ptk_bidang_studi_140_ns']; ?>
		</td>
		<td>
			<?php echo $school['School']['month_entry']; ?>
		</td>
		<td>
			<?php echo $school['School']['year_entry']; ?>
		</td>
		<td>
			<?php echo $school['School']['created']; ?>
		</td>
		<td>
			<?php echo $school['School']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $school['School']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $school['School']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $school['School']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $school['School']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New School', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Master Sekolahs', true), array('controller' => 'master_sekolahs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Master Sekolah', true), array('controller' => 'master_sekolahs', 'action' => 'add')); ?> </li>
	</ul>
</div>
