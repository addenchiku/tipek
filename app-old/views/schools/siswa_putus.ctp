<?php echo $this->element('nav_atas');?>
<?php if($kelas == 'sd'):?>
    <div class="msgbar msg_Info">
        <b>DAFTAR SISWA SD/MI/SDLB MENGULANG, MUTASI DAN PUTUS</b>
    </div>
    <table class="rekap persist-area">
        <thead>
            <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">KETERANGAN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sekolah Dasar Negri">SDN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Sekolah Dasar Swasta">SDS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="SDLB Negeri">SLBN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="SDLB Swasta">SLBS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Madrasah Ibtidaiyah Negeri">MIN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Madrasah Ibtidaiyah Swasta">MIS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">SEKOLAH</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">MADRAS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">JUMLAH</td>
            </tr>
            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">MENGULANG</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
            </tr>
            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">MUTASI</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
            </tr>
            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">PUTUS SEKOLAH</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
            </tr>			
            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">JUMLAH</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
            </tr>
        </thead>
    </table>
    <table class="rekap persist-area">
        <thead class="kepalatable persist-header">
            <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
               <td style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NO</td>
               <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NAMA SEKOLAH</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KELAS1</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KELAS2</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KELAS3</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KELAS4</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KELAS5</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KELAS6</td>
           </tr>
           <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
           </tr>				
       </thead>			
       <tr class="textLeft contentIsi">
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
</table>
<?php elseif ($kelas == "smp"):?>
    <div class="msgbar msg_Info">
        <b>DAFTAR SISWA SMP/MTS/SMPLB MENGULANG, MUTASI DAN PUTUS</b>
    </div>
    <table class="rekap persist-area">
        <thead>
            <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">KETERANGAN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">SMPN/LB</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">SMPS/LB</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">MTSN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">MTSS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">KLS1</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">KLS2</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">KLS3</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">LAKI</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">PERM</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Jumlah">JUMLAH</td>
            </tr>
            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">MENGULANG</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
            </tr>
            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">MUTASI</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
            </tr>
            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">PUTUS SEKOLAH</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
            </tr>           
            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">JUMLAH</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
            </tr>
        </thead>
    </table>
    <table class="rekap persist-area">
        <thead class="kepalatable persist-header">
            <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                <td style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NO</td>
                <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NAMA SEKOLAH</td>
                <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NAMA KEPSEK</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KELAS1</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KELAS2</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KELAS3</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">JUMLAH</td>
            </tr>
            <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
            </tr>               
        </thead>            
        <tr class="textLeft contentIsi">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>

<?php elseif ($kelas == "sma"):?>
    <div class="msgbar msg_Info">
        <b>DAFTAR SISWA SMA/MA/SMALB MENGULANG, MUTASI DAN PUTUS</b>
    </div>
    <table class="rekap persist-area">
        <thead>
            <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">KETERANGAN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">SMA/LB</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">SMAS/LB</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">MAN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">MAS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">KLS1</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">KLS2</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">KLS3</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">LAKI</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">PERM</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Jumlah">JUMLAH</td>
            </tr>
            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">MENGULANG</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
            </tr>
            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">MUTASI</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
            </tr>
            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">PUTUS SEKOLAH</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
            </tr>           
            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">JUMLAH</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
            </tr>
        </thead>
    </table>
    <table class="rekap persist-area">
        <thead class="kepalatable persist-header">
            <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                <td style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NO</td>
                <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NAMA SEKOLAH</td>
                <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NAMA KEPSEK</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KELAS1</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KELAS2</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KELAS3</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">JUMLAH</td>
            </tr>
            <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
            </tr>               
        </thead>            
        <tr class="textLeft contentIsi">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>

<?php elseif ($kelas == "smk"):?>
    <div class="msgbar msg_Info">
        <b>DAFTAR SISWA SMK/MK MENGULANG, MUTASI DAN PUTUS</b>
    </div>
    <table class="rekap persist-area">
        <thead>
            <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">KETERANGAN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">SMK</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">MAK</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">NEGERI</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">SWASTA</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">KLS1</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">KLS2</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">KLS3</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">LAKI</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">PERM</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Jumlah">JUMLAH</td>
            </tr>
            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">MENGULANG</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
            </tr>
            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">MUTASI</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
            </tr>
            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">PUTUS SEKOLAH</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
            </tr>           
            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">JUMLAH</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
            </tr>
        </thead>
    </table>
    <table class="rekap persist-area">
        <thead class="kepalatable persist-header">
            <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                <td style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NO</td>
                <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NAMA SEKOLAH</td>
                <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NAMA KEPSEK</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KELAS1</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KELAS2</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">KELAS3</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3">JUMLAH</td>
            </tr>
            <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mengulang">U</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Mutasi">M</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Putus Sekolah">P</td>
            </tr>               
        </thead>            
        <tr class="textLeft contentIsi">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>
    <?php endif;?>