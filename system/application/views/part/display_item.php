<?php
/** * @property CI_Loader $load
 * @property CI_Form_validation $form_validation
 * @property CI_Input $input
 * @property CI_Email $email
 * @property CI_DB_active_record $db
 * @property CI_DB_forge $dbforge
 */
?>

<!--table width="100%" border="0">
  <tr>
    <td rowspan="3">
        <img alt=""  src="<?php// echo base_url(); ?>media/image/barang/rendi_kacamata.jpg" width="150px" height="150px">
    </td>
    <td>
        <h3>kacamata cantik</h3>
        <h3>5000an</h3>
        <h3>stock:3</h3>
        <hr width="100%">
    </td>
  </tr>
  <tr>
    <td>
        <p>inilah kacamata bagus.inilah kacamata bagus.inilah kacamata bagus.</p>
    </td>
  </tr>
  <tr>
    <td>
        <a href="detail">selengkapnya</a>
    </td>
  </tr>
  <tr>
      <td colspan="2">
        <div id="bawah">
                                <ul>
                                    <li><a href="#">
                                            <div class="like">
                                            <p class="angka"><?php// echo $barang_like;?></p>
                                            </div>
                                    </a></li>
                                    <li><a href="#">
                                            <div class="dislike">
                                            <p class="angka"><?php// echo $barang_unlike;?></p>
                                            </div>
                                    </a></li>
                                </ul>
        </div>
    </td>
  </tr>
</table-->

<li class="widget color-blue" id="intro">
  <div class="widget-content">
<table width="100%" border="0">
  <tr>
      <td rowspan="3" width="150px" height="150px">
        <img alt=""  src="<?php echo base_url().$bf_alamat;?>" width="150px" height="150px" style="margin-right: 0px;">
    </td>
    <td>
        <h3><?php echo $barang_nama;?></h3>
        <h3>IDR <?php echo $barang_harga;?></h3>
        <h3>stock:<?php echo $barang_stock;?></h3>
        <hr width="100%">
    </td>
  </tr>
  <tr>
    <td>
        <p><?php echo $barang_desc;?>...</p>
    </td>
  </tr>
  <tr>
    <td>
        <a href="<?php echo site_url('detailItem/index/'.$barang_id);?>">selengkapnya</a>
    </td>
  </tr>
  <tr>
      <td colspan="2">
        <div id="bawah" style="padding-top:10px;">
                                <ul>
                                    <li><a href="#">
                                            <div class="like">
                                            <p class="angka"><?php echo $barang_like;?></p>
                                            </div>
                                    </a></li>
                                    <li><a href="#">
                                            <div class="dislike">
                                            <p class="angka"><?php echo $barang_unlike;?></p>
                                            </div>
                                    </a></li>
                                </ul>
        </div>
    </td>
  </tr>
</table>