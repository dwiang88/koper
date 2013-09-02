<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<!--
        <div id="slider">
            <img class="scrollButtons left" src="<?php //echo base_url(); ?>media/image/move/leftarrow.png" alt="">
			<div style="overflow: hidden;" class="scroll">
				<div class="scrollContainer">
	                <div class="panel" id="panel_1">
						<div class="inside">
							<img src="<?php //echo base_url(); ?>media/image/move/1.jpg" alt="picture" />
							<h2>News Heading</h2>
							<p>A very shot exerpt goes here... <a href="http://flickr.com/photos/justbcuz/112479862/">more link</a></p>
						</div>
					</div>

	                <div class="panel" id="panel_2">
						<div class="inside">
							<img src="<?php //echo base_url(); ?>media/image/move/2.jpg" alt="picture" />
							<h2>News Heading</h2>
							<p>A very shot exerpt goes here... <a href="http://flickr.com/photos/joshuacraig/2698975899/">more link</a></p>
						</div>
					</div>

	                <div class="panel" id="panel_3">
						<div class="inside">
							<img src="<?php //echo base_url(); ?>media/image/move/3.jpg" alt="picture" />
							<h2>News Heading</h2>
							<p>A very shot exerpt goes here... <a href="http://flickr.com/photos/ruudvanleeuwen/468309897/">more link</a></p>
						</div>
					</div>

					<div class="panel" id="panel_4">
						<div class="inside">
							<img src="<?php //echo base_url(); ?>media/image/move/4.jpg" alt="picture" />
							<h2>News Heading</h2>
							<p>A very shot exerpt goes here... <a href="http://flickr.com/photos/emikohime/294092478/">more link</a></p>
						</div>
					</div>

					<div class="panel" id="panel_5">
						<div class="inside">
							<img src="<?php //echo base_url(); ?>media/image/move/5.jpg" alt="picture" />
							<h2>News Heading</h2>
							<p>A very shot exerpt goes here... <a href="http://flickr.com/photos/fensterbme/499006584/">more link</a></p>
						</div>
					</div>

                </div>

				<div id="left-shadow"></div>
				<div id="right-shadow"></div>

            </div>

            <img class="scrollButtons right" src="<?php //echo base_url(); ?>media/image/move/rightarrow.png" alt="">
        </div>
-->

<!-- Slider #1 -->
  <div class="slider" id="slider-one">

      <?php
          foreach($new as $row){
      ?>
           <div class="panel">
               <img src="<?php echo base_url().$row->bf_alamat; ?>" alt="picture" />
            <h2><?php echo $row->barang_nama; ?></h2>
            <p>Rp. <?php echo $row->barang_harga; ?><br /><a href="<?php echo site_url('detailItem/index/'.$row->barang_id); ?>">Lihat Barang</a></p>
           </div>

        <?php } ?>
  </div> <!-- end Slider #1 -->