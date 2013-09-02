<?php
/** * @property CI_Loader $load
 * @property CI_Form_validation $form_validation
 * @property CI_Input $input
 * @property CI_Email $email
 * @property CI_DB_active_record $db
 * @property CI_DB_forge $dbforge
 */

?>

<!-- div id="biodata">
    <h3>Info</h3>
        <table>
      <tr>
        <td>Nama</td>
        <td align="center">:</td>
        <td>Rendi Budiman</td>
      </tr>
      <tr>
        <td>Tanggal Lahir</td>
        <td align="center">:</td>
        <td>26 April 1989</td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td align="center">:</td>
        <td>Jl. Mulyosari</td>
      </tr>
      <tr>
        <td>Jurusan</td>
        <td align="center">:</td>
        <td>Informatika</td>
      </tr>
      <tr>
        <td>No. Anggota Koperasi</td>
        <td align="center">:</td>
        <td>123456</td>
      </tr>
      <tr>
        <td>No. HP</td>
        <td align="center">:</td>
        <td>085641112211</td>
      </tr>
      <tr>
        <td>E-Mail</td>
        <td align="center">:</td>
        <td>rendi.doang@doang.com</td>
      </tr>
    </table>

    <br /> <br />

    <table>
        <tr>
            <td>
                <h3>Barang-barang saya</h3>
            </td>
            <td>
                <a href="<?php //echo site_url('tambahbarang');?>">
                    <h3>
                    <input name="upload" class="submit-button" value="upload" type="button">
                    </h3>
                </a>
            </td>
        </tr>
    </table>

    <div style="clear:both"></div>

    <ul style="display: inline; width: 100%; float: none">
        <li>
            <div id="barang">
                 <ul class="barang">
                        <li class="widget color-blue" id="intro">

                            <div class="widget-content">
                                <img src="<?php //echo base_url() ?>media/image/barang/rendi_kacamata.jpg" alt="" width="120px" height="120px">
                            </div>

                            <div class="widget-head" align="center">
                                <small>barang1</small>
                            </div>
                        </li>
                    </ul>
		</div>
        </li>

        <li>
            <div id="barang">
                 <ul class="barang">
                        <li class="widget color-blue" id="intro">

                            <div class="widget-content">
                                <img src="<?php //echo base_url() ?>media/image/barang/rendi_flashdisk.jpg" alt="" width="120px" height="120px">
                            </div>

                            <div class="widget-head" align="center">
                                <a href="detail"><small>kacamata</small></a>
                            </div>
                        </li>
                    </ul>
		</div>
        </li>

        <li>
            <div id="barang">
                 <ul class="barang">
                        <li class="widget color-blue" id="intro">

                            <div class="widget-content">
                                <img src="<?php //echo base_url() ?>media/image/barang/rendi_kacamata.jpg" alt="" width="120px" height="120px">
                            </div>

                            <div class="widget-head" align="center">
                                <small>barang1</small>
                            </div>
                        </li>
                    </ul>
		</div>
        </li>

         <li>
            <div id="barang">
                 <ul class="barang">
                        <li class="widget color-blue" id="intro">

                            <div class="widget-content">
                                <img src="<?php //echo base_url() ?>media/image/barang/rendi_kacamata.jpg" alt="" width="120px" height="120px">
                            </div>

                            <div class="widget-head" align="center">
                                <small>barang1</small>
                            </div>
                        </li>
                    </ul>
		</div>
        </li>

         <li>
            <div id="barang">
                 <ul class="barang">
                        <li class="widget color-blue" id="intro" >

                            <div class="widget-content" =>
                                <img src="<?php //echo base_url() ?>media/image/barang/rendi_kacamata.jpg" alt="" width="120px" height="120px">
                            </div>

                            <div class="widget-head" align="center">
                                <small>barang1</small>
                            </div>
                        </li>
                    </ul>
		</div>
        </li>

         <li>
            <div id="barang">
                 <ul class="barang">
                        <li class="widget color-blue" id="intro">

                            <div class="widget-content">
                                <img src="<?php //echo base_url() ?>media/image/barang/rendi_kacamata.jpg" alt="" width="120px" height="120px">
                            </div>

                            <div class="widget-head" align="center">
                                <small>barang1</small>
                            </div>
                        </li>
                    </ul>
		</div>
        </li>

    </ul>

</div -->


<div id="biodata">
    <h3><img src="<?php echo base_url()."media/image/info.png";?>" width="80" height="45"/></h3>
        <table>
            <?php foreach($info as $row){
                $nama = $row->member_nama;
                $alamat = $row->member_alamat;
                $id = $this->session->userdata('id');
                $phone = $row->member_phone;
                $email = $row->member_email;
		    $desc  = $row->member_desc;
            };?>
      <tr>
        <td>Nama</td>
        <td align="center">:</td>
        <td><?php echo $nama;?></td>
      </tr>
      <tr>
        <td>No. Anggota Koperasi</td>
        <td align="center">:</td>
        <td><?php echo $id;?></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td align="center">:</td>
        <td><?php echo $alamat;?></td>
      </tr>
      <tr>
        <td>No. HP</td>
        <td align="center">:</td>
        <td><?php echo $phone;?></td>
      </tr>
      <tr>
        <td>E-Mail</td>
        <td align="center">:</td>
        <td><?php echo $email;?></td>
      </tr>
      <tr>
        <td>Bio</td>
        <td align="center">:</td>
        <td><?php echo $desc;?></td>
      </tr>
    </table>

    <table>
        <tr>
            <td>
                <h3><img src="<?php echo base_url()."media/image/barang_saya.png";?>" width="186" height="47"/></h3>
            </td>
            <td>
                <a href="<?php echo site_url('tambahbarang');?>">
                    <h3>
                    <input name="upload" class="submit-button" value="upload" type="button">
                    </h3>
                </a>
            </td>
        </tr>
    </table>
    <div style="clear:both"></div>

    <ul style="display: inline; width: 100%; float: none">
        <?php
        foreach($barang as $row){
        echo "
        <li>
            <div id=\"barang\">
                 <ul class=\"barang\"><a href=\"".site_url('detailItem/index')."/$row->barang_id\">
                        <li class=\"widget color-blue\" id=\"intro\">
                            <div class=\"widget-content\">
                                <img src=\"".base_url().$row->bf_alamat."\" alt=\"\" width=\"120px\" height=\"120px\">
                            </div>
                            <div class=\"widget-head\" align=\"center\">
                                <small>".$row->barang_nama."</small>
                            </div>
                        </li></a>
                    </ul>
		</div>
        </li>
        ";};?>
    </ul>
    <?php echo $this->pagination->create_links();?>
</div>
