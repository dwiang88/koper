<?php
/** * @property CI_Loader $load
 * @property CI_Form_validation $form_validation
 * @property CI_Input $input
 * @property CI_Email $email
 * @property CI_DB_active_record $db
 * @property CI_DB_forge $dbforge
 */

?>

<?php //$this->load->view('part/login'); ?>
<!--
<div id="search">
    <div id="search-top">
        <h3>judul</h3>
        <hr>
        </div>

        <p> tes kiri waduh </p>
</div>
<div id="search-bottom">&nbsp </div>
-->

<div style="clear:both"></div>
<!--
 <div id="columns">
        <ul class="column">
            <li class="widget color-green" id="intro">
                <div class="widget-content">
                    <div id="form-container">
                    <form >
                        <div class="field">
                            <input name="your-name" id="name" type="text">
                            <input name="submit" class="submit-button" value="Cari" type="submit">
                        </div>
                    </form>
                    </div>
                    <p>ini bisa mencari</p>
                </div>
            </li>
        </ul>
		</div>
                -->
    <?php if($this->session->userdata('type')=="member") echo "<div style=\"padding-left:50px;padding-bottom:30px;font-size:small;\"><a href=\"".site_url('login/logout')."\">Logout</a></div>";?>
    <div id="form-container">
                <form action="<?php echo site_url('jualbeli/search');?>" method="POST">
                    <h4>Pencarian</h4>
                        <div class="field">
                            <input name="search" id="cari" type="text">
                            <input name="submit" class="submit-button" value="Cari" type="submit">
                        </div>
                    </form>
    </div>
<br /> <br />
	<?php echo $this->load->view('cart-id');?>
<br/><br/>
<?php
$tes=$this->session->userdata('type');
if($tes!="member")
    $this->load->view('part/login');
?>
<br/><br/>
<div id="form-container">
<!-- Begin ShoutMix - http://www.shoutmix.com -->
<iframe title="koperasi_online" src="http://www1.shoutmix.com/?koperasi_online" width="240" height="400" frameborder="0" scrolling="auto" style:"left:100px;">
<a href="http://www1.shoutmix.com/?koperasi_online">View shoutbox</a>
</iframe>
<!-- End ShoutMix -->
</div>
