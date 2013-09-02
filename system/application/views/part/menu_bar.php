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
        <div id="lt_menu"></div>
        <div id="rt_menu"></div>
    <div id="menu">
        <!--menu utama disini-->
        <li><a href="<?php echo base_url(); ?>">Home</a></li>
		<?php
		$tes=$this->session->userdata('type');
		if($tes=="member")
        	echo "<li><a href=\"". site_url('profil') ."\">Profil</a></li>";
		?>
        <li><a href="<?php echo site_url('jualbeli'); ?>">Jual-Beli</a</li>
        <!--menu cart disini-->
        <a href="<?php if($this->cart->total_items()>0)echo site_url('cart');else echo "#";?>"><div id="menu2"><img src="<?php echo  base_url();?>/media/image/cart_icon.png" width="45" height="45" style="vertical-align: middle"/>&nbsp;&nbsp;Keranjang Anda <?php if($this->cart->total_items()>0)echo $this->cart->total_items()." item";else echo "kosong";?></div></a>
    </div>
    </div>
    <div id="bot_menu">
        <div id="lb_menu"></div>
        <div id="rb_menu"></div>
    </div>
