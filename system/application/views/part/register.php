<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<!--table>
    <form action="<?php echo site_url("/registrasi");?>" method="POST">
        <tr><td>Nama<td>:</td><td><input type="text" name="nama" value="<?php echo set_value('nama'); ?>" /><?php echo form_error('nama'); ?></td></tr>
        <tr><td>Kata sandi<td>:</td><td><input type="password" name="password" value="<?php echo set_value('password'); ?>" /><?php echo form_error('password'); ?></td></tr>
        <tr><td>Ulangi Kata sandi<td>:</td><td><input type="password" name="confirmpassword" value="<?php echo set_value('confirmpassword'); ?>" /><?php echo form_error('confirmpassword'); ?></td></tr>
        <tr><td>Alamat<td>:</td><td><input type="text" name="alamat" value="<?php echo set_value('alamat'); ?>" /><?php echo form_error('alamat'); ?></td></tr>
        <tr><td>Jenis Kelamin<td>:</td><td><input type="radio" name="sex" value="laki-laki" <?php echo set_radio('sex', 'laki-laki', TRUE); ?>/>Laki-laki<input type="radio" name="sex" value="perempuan" <?php echo set_radio('sex', 'perempuan'); ?>/>Perempuan<?php echo form_error('sex'); ?></td></tr>
        <tr><td>Email<td>:</td><td><input type="text" name="email" value="<?php echo set_value('email'); ?>" /><?php echo form_error('email'); ?></td></tr>
        <tr><td>Deskripsi<td>:</td><td><input type="text" name="deskripsi" value="<?php echo set_value('deskripsi'); ?>" /></td></tr>
        <tr><td>NIK<td>:</td><td><input type="text" name="nik" value="<?php echo set_value('nik'); ?>" /><?php echo form_error('nik'); ?></td></tr>
        <tr><td colspan="3"><input type="submit" value="Buat"/></td></tr>
    </form>
</table -->

<div id="form-container">
                <form action="<?php echo site_url("/registrasi");?>" method="POST">
                    <h4>register</h4>
                        <div class="field">
                            <label for="nama"> Nama: </label><input id="nama" type="text" name="nama" value="<?php echo set_value('nama'); ?>"><?php echo form_error('nama'); ?>
                        </div>
                        <div class="field">
                            <label for="password"> Password: </label><input id="password" type="password" name="password" value="<?php echo set_value('password'); ?>"><?php echo form_error('password'); ?>
                        </div>
                    <div class="field">
                        <label for="confirmpassword"> Ulangi Password: </label><input id="confirmpassword" type="password" name="confirmpassword" <?php echo set_value('confirmpassword'); ?>><?php echo form_error('confirmpassword'); ?>
                        </div>
                    <div class="field">
                        <label for="alamat"> alamat: </label><input id="alamat" type="text" name="alamat" value="<?php echo set_value('alamat'); ?>"><?php echo form_error('alamat'); ?>
                    </div>
                    <div class="field">
                        <label for="sex"> kelamin: </label><input id="sex" type="radio" name="sex" value="laki-laki" <?php echo set_radio('sex', 'laki-laki', TRUE); ?> />Laki-Laki<input id="sex" type="radio" name="sex" value="perempuan" <?php echo set_radio('sex', 'perempuan', TRUE); ?> />Perempuan<?php echo form_error('sex'); ?>
                        </div>
                    <div class="field">
                        <label for="deskripsi"> deskripsi: </label><textarea id="deskripsi" name="deskripsi" value="<?php echo set_value('deskripsi'); ?>"></textarea><?php echo form_error('deskripsi');?>
                        </div>
                    <div class="field">
                        <label for="nik"> nik: </label><input id="nik" type="text" name="nik" value="<?php echo set_value('nik'); ?>"><?php echo form_error('nik'); ?>
                        </div>
                    <div class="field">
                        <label for="email"> email: </label><input id="email" type="text" name="email" value="<?php echo set_value('email'); ?>"><?php echo form_error('email'); ?>
                        </div>
                    <div class="field">
                         <input name="submit" class="submit-button2" value="register" type="submit">
                    </div>
                    </form>
    </div>