<?php
/** * @property CI_Loader $load
 * @property CI_Form_validation $form_validation
 * @property CI_Input $input
 * @property CI_Email $email
 * @property CI_DB_active_record $db
 * @property CI_DB_forge $dbforge
 */

/*
<ul>
    <li><?php echo anchor('welcome/index','index'); ?></li>
    <li><?php echo anchor('welcome/profil','profil'); ?></li><!-- tes --!>
    <li><?php echo anchor('welcome/jual_beli','Jual-Beli'); ?></li>
</ul>
*/

?>


<div id="top_menu">
        <div id="lt_menu">&nbsp;</div>
        <div id="rt_menu">&nbsp;</div>
    <div id="menu">
        <!--menu utama disini-->
        <li><a href="<?php echo base_url(); ?>">index</a></li>
        <li><a href="<?php echo site_url('profil');?>">profil</a></li>
        <li><a href="<?php echo site_url('jualbeli'); ?>">Jual-Beli</a></li>
        <!--menu cart disini-->
        <div id="menu2"><img src="<?php echo  base_url();?>/media/image/cart_icon.png" width="45" height="45" style="vertical-align: middle"/>&nbsp;&nbsp;Keranjang Anda Kosong</div>
    </div>
    </div>
    <div id="bot_menu">
        <div id="lb_menu"></div>
        <div id="rb_menu"></div>
    </div>
