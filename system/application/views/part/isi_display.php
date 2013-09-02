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

 <div id="display">
        <ul class="column">
            <?php foreach($barang as $row){
                $this->load->view('part/display_item', $row);
                    echo "</div></li>";
            };?>
        </ul>
	  <?php if($this->uri->segment(2,0)=="index")echo "<br/>".$this->pagination->create_links();?>
</div>