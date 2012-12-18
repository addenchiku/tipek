<div class="one_wrap fl_left">
	<div class="widget">
		<div class="widget_title"><span class="iconsweet"></span><h5>Upload Data</h5></div>
		<div class="widget_body">
			<div class="content_pad">
				<p>Silahkan import data dari sekolah, Pilih triwulan, dan tahun ajaran terlebih dahulu, kemudian pilih sekolah</p>
			</div>
			<!--Form fields-->
			<?php echo $form->create('Kecamatan');?>
			<fieldset>
				<ul class="form_fields_container">
					<li>
						<label>Pilih Triwulan :</label>
						<div class="form_input">
							<select class="unifrom" name="">
			                	    			<option value="1">Triwulan 1</option>
						                	<option value="2">Triwulan 2</option>
						                	<option value="3">Triwulan 3</option>
						                	<option value="4">Triwulan 4</option>
			                			</select>
			                		</div>
			                	</li>

			                	<li>
						<label>Pilih Tahun :</label>
						<div class="form_input">
							<?php
							 $time = time () ;
							 $year= date("Y",$time);
							 $prevYear = $year-5;
							 $nextYear = $year+5;

							echo $form->year('tahunBerdiri', $prevYear, $nextYear, array('default'=>$year), array('class'=>'year-set unifrom'));
							?>
			                		</div>
			                	</li>
			                	<li>
						<label>Kecamatan :</label>
						<div class="form_input">
							<?php echo $form->select('MasterSekolah.kecamatan_id',$kecamatanList,null,array('id' => 'kecamatanSelect','class'=>'unifrom'),array('empty'=>'-----Pilih Kecamatan----'));  ?>
			                		</div>
			                	</li>
			                	<li>
						<label>Kelurahan :</label>
						<div class="form_input">
							<?php echo $form->select('MasterSekolah.kelurahan_id',$kelurahanList,null,array('id' => 'kelurahanSelect','class'=>'unifrom'),array('empty'=>'-----Pilih Kelurahan----'));  ?>
			                		</div>
			                	</li>

			                	<li>
						<label>Tingkat Pendidikan :</label>
						<div class="form_input">
							<select class="unifrom" name="data['MasterSekolah']['tingkat']" id="tingkatPendidikan">
			                	    			<option value="1">PAUD/TK</option>
						                	<option value="2">SD/MI/LB</option>
						                	<option value="3">SMP/MTS/LB</option>
						                	<option value="4">SMA/MA/LB</option>
			                			</select>
			                		</div>
			                	</li>

			                	<li>
						<label>Pilih Sekolah :</label>
						<div class="form_input">
							<?php echo $form->select('MasterSekolah.sekolah_id',$sekolahList,null,array('id' => 'sekolahSelect','class'=>'unifrom'),array('empty'=>'-----Pilih Sekolah----'));  ?>
			                		</div>
			                	</li>



					<li>
						<label>Nama</label>
						<div class="form_input">
							<?php
							echo $form->input('nama',array('div'=>false,'label'=>false));
							?>
						</div>
					</li>
					<li>

						<div class="button_list">
							<?php
							echo $form->submit('Oke',array('div'=>false,'label'=>false,'class'=>'button_big'));
							?>
							<a href="#" ONCLICK="history.go(-1)" class="button_big"><span class="iconsweet">w</span>Kembali</a>
						</div>
					</li>
				</ul>
			</fieldset>
			<?php echo $form->end();?>
			<?php
			//ajax find kelurahan
			echo $ajax->observeField('kecamatanSelect', array(
			    'url' => array(
			        'controller' => 'kecamatans','action' => 'findKelurahan'
			    ),
			    'update' => 'kelurahanSelect',
			    'loading'=>"Element.show('loading-block')",
			    'loaded'=>"Element.hide('loading-block')"
			    )
			);

			//ajax find sekolah
			echo $ajax->observeField('kelurahanSelect', array(
			    'url' => array(
			        'controller' => 'kecamatans','action' => 'findSekolah'
			    ),
			    'update' => 'sekolahSelect',
			    'loading'=>"Element.show('loading-block')",
			    'loaded'=>"Element.hide('loading-block')"
			    )
			);

			//ajax find sekolah
			echo $ajax->observeField('tingkatPendidikan', array(
			    'url' => array(
			        'controller' => 'kecamatans','action' => 'findSekolahTingkat'
			    ),
			    'update' => 'sekolahSelect',
			    'loading'=>"Element.show('loading-block')",
			    'loaded'=>"Element.hide('loading-block')"
			    )
			);

			?>

		</div>
	</div>
</div>