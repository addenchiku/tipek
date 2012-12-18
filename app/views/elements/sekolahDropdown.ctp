<?php
if(!empty($options)){
?>
<option value="">---Pilih Sekolah----</option>
	<?php foreach($options as $key => $val) { ?>
<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
<?php }
}else{
?>
<option value="">Data tidak ditemukan</option>
<?php } ?>