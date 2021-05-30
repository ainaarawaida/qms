<table width="650" height="381" border="0">
      <tr>
        <td>
  <form id="form1" name="form1" method="post" action="KemaskiniProfilStaf_controller.php">
      <?PHP
$sql ="SELECT * FROM staf where no_staf='".$_SESSION['noId']."'";
$result1=mysql_query($sql);
while($row=mysql_fetch_assoc($result1))
{
?>
      <br  />
      <table width="428" border="0">
        <tr>
          <td width="70"><img src="icon/form.jpg" width="60" height="50" /></td>
          <td width="348"><span class="style64">Sila kemaskini maklumat peribadi anda</span></td>
        </tr>
      </table>
      <table width="680" border="0" align="center" cellpadding="4" cellspacing="4">
        <tr>
          <td colspan="3"></td>
        </tr><br>
        <tr>
          <td width="225"><span class="style50">No. Kad Pengenalan</span></td>
          <td width="7"><span class="style50">:</span></td>
          <td width="408"><span class="style56"><?php echo $row['no_kpstaf'];?></span></td>
        </tr>
        <tr>
          <td><span class="style50">Nama Staf</span></td>
          <td><span class="style50">:</span></td>
          <td><span class="style56"><?php echo $row['nama_staf'];?></span></td>
        </tr>
        <tr>
          <td><span class="style50">No. Staf</span></td>
          <td><span class="style50">:</span></td>
          <td><span class="style56"><?php echo $row['no_staf'];?></span></td>
        </tr>
        <tr>
          <td><span class="style50">Jabatan/Unit</span></td>
          <td><span class="style50">:</span></td>
          <td><span class="style22">
           <select name="jabatan_unit" id="jabatan_unit">
           			<option> <?php echo $row["jabatan_unit"]; ?></option>
                    <option value="">---- PILIH JABATAN/UNIT ----</option>
                    <option>JABATAN MEDIA INTERAKTIF</option>
                    <option>JABATAN KEJURUTERAAN PERISIAN</option>
                    <option>JABATAN SISTEM KOMPUTER DAN KOMUNIKASI</option>
                    <option>JABATAN PENGKOMPUTERAN PINTAR DAN ANALITIS</option>
                  </select>
          </span></td>
        </tr>
        <tr>
          <td><span class="style50">Jawatan</span></td>
          <td><span class="style50">:</span></td>
          <td><span class="style22">
            <input name="jawatan" type="text" id="jawatan" style="text-transform:uppercase" value="<?php echo $row["jawatan"];?>" size="30" maxlength="30" />
          </span></td>
        </tr>
        <tr>
          <td><span class="style50">No. Telefon</span></td>
          <td><span class="style50">:</span></td>
          <td><input name="no_telefon" type="text" id="no_telefon" value="<?php echo $row['no_telefon'];?>" size="10" maxlength="10" />
              <span class="style53">( cth : 01234567891 )</span></td>
        </tr>
        <tr>
          <td><span class="style50">Emel</span></td>
          <td><span class="style50">:</span></td>
          <td><input name="emel" type="text" id="emel" value="<?php echo $row["emel"];?>" size="30" maxlength="30" />
              <span class="style53">( cth : emel@utem.edu.my )</span></td>
        </tr>
        <tr>
          <td><span class="style50">Kata Laluan</span></td>
          <td><span class="style50">:</span></td>
          <td><input name="kata_laluanstaf" type="password" id="kata_laluanstaf" value="<?php echo $row["kata_laluanstaf"];?>" maxlength="10" />
              
              <input type="hidden" name="form_validation_rules" value="
jabatan_unit jawatan no_telefon emel kata_laluanstaf pengesahan_kata_laluanstaf : empty;
jabatan_unit : ;
jawatan : ;
no_telefon : ;
emel : ;
kata_laluanstaf :;
pengesahan_kata_laluanstaf : ;
" />
                <span class="style53">( maksimum 15 karakter )</span></td>
        </tr>
        <tr>
          <td><span class="style50">Pengesahan Kata Laluan</span></td>
          <td><span class="style50">:</span></td>
          <td>
            <input name="pengesahan_kata_laluanstaf" type="password" id="pengesahan_kata_laluanstaf" value="<?php echo $row["pengesahan_kata_laluanstaf"];?>"  maxlength="10" />
          <span class="style53">( maksimum 15 karakter )</span></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <script src="form-validation.js"></script>
        <tr>
          <td colspan="3"><div align="right">
            <input name="no_staf" type="hidden" value="<?PHP echo $row['no_staf'];?>" />
            <input type="submit" class="button" onclick="confirmation()" name="Submit" value="Kemaskini" />
            <input type="reset" class="button" id="reset" name="reset" value="Batal" />              
            </p>        
          </div></td>
          </tr>
      </table>