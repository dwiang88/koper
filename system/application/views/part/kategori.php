<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<ul id="mycarousel" class="jcarousel-skin-tango">
	<?php foreach($kategori as $row){
    		echo "<li><a href=\"".site_url('jualbeli/index/0/'.$row->kategori_nama)."\"><img src=\"".base_url().$row->kategori_alamat."\" alt=\"\" width=\"75\" height=\"75\"/><span>tes span</span></a></li>";
		//echo $row->kategori_alamat."<br/>";
	};?>
  </ul>