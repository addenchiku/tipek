<?php echo $this->element('nav_atas');?>
<?php if($kelas == 'sd'):?>
    <div class="msgbar msg_Info">
        <b>DAFTAR SISWA SD/MI/SDLB BERDASARKAN EKONOMI</b>
    </div>
    <table class="rekap persist-area">
        <thead>
            <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">KETERANGAN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">SDN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">SDS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">SLBN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">SLBS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">MIN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">MIS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">SEKOLAH</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">MADRAS</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="tooltip">JUMLAH</td>
            </tr>
            <tr class="textLeft contentIsi">
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;" class="tip_south" title="Kelompok Ekonomi < 1 Juta">KELEKO < 1 JT</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KELEKO 1 JT</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KELEKO => 2 JT</td>
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
               <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;" rowspan="2">NAMA KEPSEK</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELEKO < 1 JT</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELEKO 1 JT</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELEKO => 2 JT</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3" >JUMLAH</td>
           </tr>
           <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">L</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;">L</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;">P</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;">L</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;">P</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;">L</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;">P</td>
               <td style="background-color:#999999; color:#fff;font-size:12px;">L+P</td>
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
    </tr>
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
    </tr>
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
    </tr>
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
    </tr>
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
    </tr>
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
    </tr>
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
    </tr>
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
    </tr>
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
    </tr>
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
    </tr>
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
    </tr>
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
    </tr>
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
    </tr>
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
    </tr>
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
    </tr>
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
    </tr>
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
    </tr>
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
    </tr>
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
    </tr>
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
    </tr>
    
</table>
<?php elseif ($kelas == "smp"):?>
    <div class="msgbar msg_Info">
        <b>DAFTAR SISWA SMP/MTS/SMPLB BERDASARKAN EKONOMI</b>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;" class="tip_south" title="Kelompok Ekonomi < 1 Juta">KELEKO < 1 JT</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KELEKO 1 JT</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KELEKO => 2 JT</td>
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
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELEKO < 1 JT</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELEKO 1 JT</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELEKO => 2 JT</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3" >JUMLAH</td>
            </tr>
            <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">L</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">L</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">L</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">L</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">L+P</td>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
        
    </table>
<?php elseif ($kelas == "sma"):?>
    <div class="msgbar msg_Info">
        <b>DAFTAR SISWA SMA/MA/SMALB BERDASARKAN EKONOMI</b>
    </div>
    <table class="rekap persist-area">
        <thead>
            <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">KETERANGAN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">SMAN/LB</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;" class="tip_south" title="Kelompok Ekonomi < 1 Juta">KELEKO < 1 JT</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KELEKO 1 JT</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KELEKO => 2 JT</td>
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
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELEKO < 1 JT</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELEKO 1 JT</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELEKO => 2 JT</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3" >JUMLAH</td>
            </tr>
            <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">L</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">L</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">L</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">L</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">L+P</td>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>               
    </table>
<?php elseif ($kelas == "smk"):?>
    <div class="msgbar msg_Info">
        <b>DAFTAR SISWA SMK/MK BERDASARKAN EKONOMI</b>
    </div>
    <table class="rekap persist-area">
        <thead>
            <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                <td class="BigColomn" style="background-color:#999999; color:#fff;font-size:12px;">KETERANGAN</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">SMK</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">MAK</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;" class="tip_south" title="Kelompok Ekonomi < 1 Juta">KELEKO < 1 JT</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KELEKO 1 JT</td>
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
                <td class="BigColomn" style="background-color:#c4dc7e; border:1px solid #999999;font-size:12px;">KELEKO => 2 JT</td>
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
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELEKO < 1 JT</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELEKO 1 JT</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="2">KELEKO => 2 JT</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" colspan="3" >JUMLAH</td>
            </tr>
            <tr valign="middle" style="background-color:#999999; border:1px solid #999999;">
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Laki-laki">L</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;" class="tip_south" title="Perempuan">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">L</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">L</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">L</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">P</td>
                <td style="background-color:#999999; color:#fff;font-size:12px;">L+P</td>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>
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
        </tr>               
    </table>
    <?php endif;?>