<?php
/** * @property CI_Loader $load
 * @property CI_Form_validation $form_validation
 * @property CI_Input $input
 * @property CI_Email $email
 * @property CI_DB_active_record $db
 * @property CI_DB_forge $dbforge
 */

?>

<!--
<div id="component">
    <div id="component-top">
        <h3>judul</h3>
        <hr>
        </div>

        <p>tes kanan</p>
    </div>
<div id="component-bottom">&nbsp</div>
-->

<div style="clear:both"></div>
 <div id="kanan">
        <ul class="kanan">
            <li class="widget color-orange" id="intro">
                <div class="widget-head">
                    <h3>Barang Terbaru</h3>
                </div>
                <div class="widget-content">
                    <?php $this->load->view('part/slider'); ?>
                </div>
            </li>
        </ul>
		</div>

<div style="clear:both"></div>
 <div id="kanan">
        <ul class="kanan">
            <li class="widget color-green" id="intro">
                <div class="widget-head">
                    <h3>Kategori</h3>
                </div>
                <div class="widget-content">
                    <?php $this->load->view('part/kategori'); ?>
                </div>
            </li>
        </ul>
		</div>
