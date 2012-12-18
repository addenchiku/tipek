<?php

if(!empty($options)) {
?>

	<?php
	$i = 0;
	foreach ($options as $k){?>
		<option value="<?php echo $k['Kelurahan']['id'];?>"><?php echo $k['Kelurahan']['nama'];?></option>;
	<?php } ?>

<?php }else{
	echo '<option value="">Data tidak ditemukan</option>';
} ?>