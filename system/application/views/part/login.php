<?php
/** * @property CI_Loader $load
 * @property CI_Form_validation $form_validation
 * @property CI_Input $input
 * @property CI_Email $email
 * @property CI_DB_active_record $db
 * @property CI_DB_forge $dbforge
 */

?>

 <div id="form-container">
       <form action="<?php echo site_url('login');?>" method="POST">
                    <h4>login</h4>
                        <div class="field">
                            <label for="nik"> NIK: </label><input id="nik" name="nik" type="text" <?php echo set_value('nik');?>>
                        </div>
                    <div class="field"><?php echo form_error('nik');?></div>
                        <div class="field">
                            <label for="password"> password: </label><input id="password" name="password" type="password" <?php echo set_value('password');?>>
                        </div>
                    <div class="field"><?php echo form_error('password');?></div>
                    <div class="field">
                         <input name="submit" class="submit-button2" value="Login" type="submit">
                    </div>

                    <?php if(isset($error))echo "<div class=\"field\">NIK atau password salah!!!</div>";?>

                    <div class="field">
                         <?php echo anchor('registrasi','Belum punya account?'); ?>
                    </div>
                    </form>
    </div>