<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<div id="form-container">
    <?php echo form_open_multipart('tambahbarang');?>
    <div class="field">
        <label for="nama"> Nama Barang: </label><input id="nama" name="nama" type="text" <?php echo set_value('nama');?>>
    </div>
    <div class="field"><?php echo form_error('nama');?></div>
    <div class="field">
        <label for="nama"> kategori: </label>
         <select name="kategori" style="min-width: 145px;">
                <?php foreach($kategori as $row){
                    echo "<option value='$row->kategori_id'>$row->kategori_nama</option>";
                };?>
        </select>
    </div>
    <div class="field">
        <label for="deskripsi"> Deskripsi: </label><input id="deskripsi" name="deskripsi" type="text" <?php echo set_value('deskripsi');?>>
    </div>
    <div class="field"><?php echo form_error('deskripsi');?></div>
    <div class="field">
        <label for="jumlah"> Jumlah: </label><input id="jumlah" name="jumlah" type="text" <?php echo set_value('jumlah');?>>
    </div>
    <div class="field"><?php echo form_error('jumlah');?></div>
    <div class="field">
        <label for="harga"> Harga: </label><input id="harga" name="harga" type="text" <?php echo set_value('harga');?>>
    </div>
    <div class="field"><?php echo form_error('harga');?></div>
    <div class="field">
        <label for="userfile"> Foto: </label><input id="userfile" name="userfile" type="file" <?php echo set_value('userfile');?>>
    </div>
    <div class="field"><?php echo form_error('userfile');?></div>
    <div class="field">
        <input name="submit" class="submit-button" value="upload" type="submit">
    </div
</form>
</div>