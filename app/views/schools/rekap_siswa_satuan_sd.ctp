<?php if($urlController =='siswa_kelas'):?>
<table class="rekap persist-area">
        <thead>
            <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">KETERANGAN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;"class="tip_south" title="Sekolah Dasar Negeri">SDN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;"class="tip_south" title="Sekolah Dasar Swasta">SDS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;"class="tip_south" title="Sekolah Luar Biasa Negeri">SLBN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;"class="tip_south" title="Sekolah Luar Biasa Swasta">SLBS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;"class="tip_south" title="Madrasah Ibtidaiyah Negeri">MIN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;"class="tip_south" title="Madrasah Ibtidaiyah Swasta">MIS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">SEKOLAH</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Madrasah">MADRAS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">JUMLAH</td>
            </tr>

            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">LAKI-LAKI</td>
                <td ><?php echo $rekap['SiswaRekapSd']['sdn_laki'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['sds_laki'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['slb_laki'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['slbs_laki'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['min_laki'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['mis_laki'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['sekolah_laki'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['madrasah_laki'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['jumlah_total_laki'];?></td>
            </tr>
            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">PEREMPUAN</td>
                <td ><?php echo $rekap['SiswaRekapSd']['sdn_perempuan'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['sds_perempuan'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['slb_perempuan'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['slbs_perempuan'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['min_perempuan'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['mis_perempuan'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['sekolah_perempuan'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['madrasah_perempuan'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['jumlah_total_perempuan'];?></td>
            </tr>
            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">JUMLAH</td>
                <td ><?php echo $rekap['SiswaRekapSd']['jumlah_total_sdn'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['jumlah_total_sds'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['jumlah_total_slb'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['jumlah_total_slbs'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['jumlah_total_min'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['jumlah_total_mis'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['jumlah_total_sekolah'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['jumlah_total_madrasah'];?></td>
                <td >--</td>
            </tr>
        </thead>
    </table>

    <?php elseif($urlController =='siswa_agama'):?>
    <table class="rekap persist-area">
        <thead>
            <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">KETERANGAN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;"class="tip_south" title="Sekolah Dasar Negeri">SDN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;"class="tip_south" title="Sekolah Dasar Swasta">SDS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;"class="tip_south" title="Sekolah Luar Biasa Negeri">SLBN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;"class="tip_south" title="Sekolah Luar Biasa Swasta">SLBS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;"class="tip_south" title="Madrasah Ibtidaiyah Negeri">MIN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;"class="tip_south" title="Madrasah Ibtidaiyah Swasta">MIS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">SEKOLAH</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Madrasah">MADRAS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">JUMLAH</td>
            </tr>
            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">ISLAM</td>
                <td ><?php echo $rekap['SiswaRekapSd']['islam_sdn'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['islam_sds'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['islam_slbn'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['islam_slbs'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['islam_min'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['islam_mis'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['islam_sekolah'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['islam_madrasah'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['islam_total'];?></td>
            </tr>
            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KATOLIK</td>
                <td ><?php echo $rekap['SiswaRekapSd']['katolik_sdn'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['katolik_sds'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['katolik_slbn'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['katolik_slbs'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['katolik_min'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['katolik_mis'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['katolik_sekolah'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['katolik_madrasah'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['katolik_total'];?></td>
            </tr>
            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KRISTEN</td>
                <td ><?php echo $rekap['SiswaRekapSd']['kristen_sdn'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['kristen_sds'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['kristen_slbn'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['kristen_slbs'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['kristen_min'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['kristen_mis'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['kristen_sekolah'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['kristen_madrasah'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['kristen_total'];?></td>
            </tr>
            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">HINDU</td>
                <td ><?php echo $rekap['SiswaRekapSd']['hindu_sdn'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['hindu_sds'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['hindu_slbn'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['hindu_slbs'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['hindu_min'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['hindu_mis'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['hindu_sekolah'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['hindu_madrasah'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['hindu_total'];?></td>
            </tr>
            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">BUDHA</td>
                <td ><?php echo $rekap['SiswaRekapSd']['budha_sdn'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['budha_sds'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['budha_slbn'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['budha_slbs'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['budha_min'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['budha_mis'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['budha_sekolah'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['budha_madrasah'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['budha_total'];?></td>
            </tr>
            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KONGHUCU</td>
                <td ><?php echo $rekap['SiswaRekapSd']['konghucu_sdn'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['konghucu_sds'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['konghucu_slbn'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['konghucu_slbs'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['konghucu_min'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['konghucu_mis'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['konghucu_sekolah'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['konghucu_madrasah'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['konghucu_total'];?></td>
            </tr>
            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">JUMLAH</td>
                <td ><?php echo $rekap['SiswaRekapSd']['jumlah_total_sdn'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['jumlah_total_sds'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['jumlah_total_slb'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['jumlah_total_slbs'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['jumlah_total_min'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['jumlah_total_mis'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['jumlah_total_sekolah'];?></td>
                <td ><?php echo $rekap['SiswaRekapSd']['jumlah_total_madrasah'];?></td>
                <td >--</td>
            </tr>
        </thead>
    </table>
    <?php endif;?>