<?php
/** * @property CI_Loader $load
 * @property CI_Form_validation $form_validation
 * @property CI_Input $input
 * @property CI_Email $email
 * @property CI_DB_active_record $db
 * @property CI_DB_forge $dbforge
 */
?>

<div style="clear:both"></div>
 <div id="columns">
        <ul class="column">
            <li class="widget color-green" id="intro">
                <div class="widget-head">
                    <h3>Personal</h3>
                </div>
                <div class="widget-content">
                    <div id="biodata">
                    <?php
                        foreach($info as $row){
                            $nama = $row->member_nama;
                            $id = $this->session->userdata('id');
                            $foto = $row->member_foto;
                        }
                    ?>
                    <p>Selamat datang <?php echo $nama;?></p>
                    <img alt=""  src="<?php echo base_url().$foto?>" class="foto_profil" width="100px" height="100px">
			  <p><a href="<?php echo site_url('profil/edit') ?>"><input type="button" value="Edit Profil" class="submit-button"></a></p>
                    </div>
                </div>
            </li>
        </ul>
		</div>