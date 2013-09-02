<?php
/** * @property CI_Loader $load
 * @property CI_Form_validation $form_validation
 * @property CI_Input $input
 * @property CI_Email $email
 * @property CI_DB_active_record $db
 * @property CI_DB_forge $dbforge
 */

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>koperasi go online</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="<?php echo base_url();?>media/image/koper.gif" type="image/x-icon" />
<link rel="stylesheet" href="<?php echo base_url(); ?>media/css/master.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url(); ?>media/css/widget.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url(); ?>media/css/movingbox.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url(); ?>media/image/kategori/skins/tango/skin.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url(); ?>media/css/form.css" type="text/css" media="screen" />
<!--<link href="<?php echo base_url();?>media/css/front.css" media="screen, projection" rel="stylesheet" type="text/css" />
-->
<script src="<?php echo base_url(); ?>media/script/jquery.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo base_url(); ?>media/script/jquery.movingboxes.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo base_url(); ?>media/script/jquery.jcarousel.js" type="text/javascript" charset="utf-8"></script>

<!-- taruh" script disini -->

<script type="text/javascript">
  $(function(){
   $('#slider-one').movingBoxes({
    startPanel  : 3,   // start with this panel
    width       :  500, // overall width of movingBoxes
    imageRatio  : 16/9   // Image ration set to 1:1
   });
  });

 </script>
<!-- end -->

<script language="javascript">

jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel();
});

</script>
<!-- end -->


<!-- end -->
<!-- ending taruh-taruh -->

</head>
<body>

    <div id="hb">
        <div id="hb_kiri"></div>
        <div id="hb_kanan"></div>
    </div>

<div id="body_wrapper">

		<div id="logo">
		<br />
		</div>

		<div id="menu_bar">
			<?php $this->load->view('part/menu_bar'); ?>
		</div>


		<div id="content">
        <div id="awan_kiri">
			<div id="content-header">&nbsp</div>
			<div style="clear:both"></div>

				<div id="content-left">
                                    <!--?php $this->load->view('part/bag_kiri'); ?-->
				</div>

				<div id="content-right">
                                        <div id="form-container">
                                                <?php echo form_open_multipart('profil/edit');?>
                                                    <h4>Edit Profil</h4>
                                                    <?php foreach($info as $row){ ?>
                                                        <div class="field">
                                                            <label for="nama"> Nama: </label><input id="nama" type="text" name="nama" value="<?php echo $row->member_nama; ?>"><?php echo form_error('nama'); ?>
                                                        </div>
                                                    <div class="field">
                                                        <label for="alamat"> alamat: </label><input id="alamat" type="text" name="alamat" value="<?php echo $row->member_alamat; ?>"><?php echo form_error('alamat'); ?>
                                                    </div>
                                                    <div class="field">
                                                        <label for="deskripsi"> deskripsi: </label><input id="deskripsi" type="text" name="deskripsi" value="<?php echo $row->member_desc; ?>"><?php echo form_error('deskripsi'); ?>
                                                        </div>
                                                    <div class="field">
                                                        <label for="email"> email: </label><input id="email" type="text" name="email" value="<?php echo $row->member_email; ?>"><?php echo form_error('email'); ?>
                                                        </div>
                                                    <div class="field">
                                                        <label for="foto"> Foto: </label><input type="file" name="userfile" size="20" value="<?php echo base_url().$row->member_foto; ?>" />
                                                        </div>
                                                    <div class="field">
                                                        <img src="<?php echo base_url().$row->member_foto;?>" width="100" height="100"/>
                                                        </div>
                                                    <div class="field">
                                                         <input name="submit" class="submit-button2" value="ubah profil" type="submit">
                                                    </div>
                                                    <?php } ?>
                                                    </form>
                                    </div>
				</div></div>
                        <div style="clear:both"></div>
        </div>
    <div style="clear:both"></div>
                <div id="content-footer">&nbsp</div>
                <div style="clear:both"></div>

                <?php $this->load->view('part/iklan'); ?>
                <?php $this->load->view('part/footer'); ?>

</div>

</body>

</html>