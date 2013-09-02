<?php
/** * @property CI_Loader $load
 * @property CI_Form_validation $form_validation
 * @property CI_Input $input
 * @property CI_Email $email
 * @property CI_DB_active_record $db
 * @property CI_DB_forge $dbforge
 */
?>
<!-- div id="display">
        <ul class="column">

            <li class="widget color-blue" id="intro">
                <div class="widget-content">
                    <table width="100%" border="0">
  <tr>
    <td>&nbsp;</td>
    <td align="right">
        <img width="50px" height="50px" alt=""  src="<?//php echo base_url(); ?>media/image/barang/rendi_kacamata.jpg">
    </td>
  </tr>
  <tr>
      <td>
        <img alt=""  src="<?//php echo base_url(); ?>media/image/barang/rendi_kacamata.jpg" width="200px" height="200px">
    </td>
    <td>
    	<h3>kacamatakeren</h3>
        <p>ini kacamata keren banget.ini kacamata keren banget.ini kacamata keren banget.
        ini kacamata keren banget.ini kacamata keren banget.ini kacamata keren banget.
        ini kacamata keren banget.ini kacamata keren banget.ini kacamata keren banget.
        ini kacamata keren banget.ini kacamata keren banget.ini kacamata keren banget.</p>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
        [beli]          [tambah_keranjang]
    </td>
  </tr>
</table>
                </div>
            </li>
        </ul>
</div>

<br /><br /><br /><br />

<div style="margin-top: 20px; position: relative">
<?php //$this->load->view('part/nilai'); ?>
</div -->

<script>
    function yakinBeli(){
        return window.confirm("Apakah Anda yakin?");
    }

    function addToLike(jumlah){
	var ajaxRequest;
	try
	{
		// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
	} catch (e)
	{
		// Internet Explorer Browsers
		try
		{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e)
		{
			try
			{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e)
			{
				alert("Browser Anda rusak!");
				return false;
			}
		}
	}
	// Create a function that will receive data sent from the server
	ajaxRequest.onreadystatechange = function()
	{
		if(ajaxRequest.readyState == 4)
		{
                    document.getElementById('divlike').innerHTML = "<p class=\"angka\">"+ajaxRequest.responseText+"</p>";
		}
	}
	ajaxRequest.open("POST", "/web/koper/index.php/like/index/"+jumlah, true);
	ajaxRequest.send(null);
    }

    function addToUnlike(jumlah){
	var ajaxRequest;
	try
	{
		// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
	} catch (e)
	{
		// Internet Explorer Browsers
		try
		{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e)
		{
			try
			{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e)
			{
				alert("Browser Anda rusak!");
				return false;
			}
		}
	}
	// Create a function that will receive data sent from the server
	ajaxRequest.onreadystatechange = function()
	{
		if(ajaxRequest.readyState == 4)
		{
                    document.getElementById('divunlike').innerHTML = "<p class=\"angka\">"+ajaxRequest.responseText+"</p>";
		}
	}
	ajaxRequest.open("POST", "/web/koper/index.php/like/index/"+jumlah, true);
	ajaxRequest.send(null);
    }
</script>

        <div id="display">
        <ul class="column">

            <li class="widget color-blue" id="intro">
                <div class="widget-content">
                    <table width="100%" border="0">
  <tr>
    <td></td>
    <td align="right">
        <img width="50px" height="50px" alt=""  src="<?php echo base_url().$bf_alamat;?>"/>
    </td>
  </tr>
  <tr>
    <td style="vertical-align: top;">
        <img alt=""  src="<?php echo base_url().$bf_alamat;?>" width="200px" height="200px">
    </td>
    <td align="justify" style="vertical-align: top;">
    	<h3><?php echo $barang_nama;?></h3>
        <p><?php echo $barang_desc;?></p>
    </td>
  </tr>
  <tr><td></td><td><h5>Stock : <?php echo $barang_stock;?></h5></td></tr>
  <tr><td></td><td><h5>Harga : IDR<?php echo $barang_harga;?></h5></td></tr>
  <tr><td colspan="2">&nbsp;</td></tr>
  <tr>
    <td>&nbsp;</td>
    <td style="vertical-align: bottom;">
            <form action="<?php echo site_url('detailItem/addToCart');?>" method="POST" onsubmit=" return yakinBeli()">
            <input type="hidden" name="barang_id" value="<?php echo $this->uri->segment(3,0);?>"/>
            <input type="hidden" name="barang_harga" value="<?php echo $barang_harga;?>"/>
            <input type="hidden" name="barang_nama" value="<?php echo $barang_nama;?>"/>
            <input type="text" name="barang_jumlah" value="0" style="width:30px;float:none;vertical-align:bottom;"/>&nbsp;
            <input type="submit" id="tambah_keranjang" value=""/>
            </form>
    </td>
  </tr>
</table>
                </div>
            </li>
        </ul>
</div>

<div style="margin-left: 0px; margin-right: 40px; margin-top: 20px; margin-bottom: 20px">
    
    <div id="bawah">
                            <ul>
                                <li><a href="#display" onclick="addToLike(<?php echo $this->uri->segment(3,0);?>)">
                                        <div class="like" id="divlike">
                                        <p class="angka"><?php echo $barang_like;?></p>
                                        </div>
                                </a></li>
                                <li><a href="#display" onclick="addToUnlike(<?php echo $this->uri->segment(3,0);?>)">
                                        <div class="dislike" id="divunlike">
                                        <p class="angka"><?php echo $barang_unlike;?></p>
                                        </div>
                                </a></li>
                            </ul>
    </div>
</div>

<div id="disqus_thread" style="display: block; margin-left: 50px; width: 500px;"></div>
<script type="text/javascript">
  /**
    * var disqus_identifier; [Optional but recommended: Define a unique identifier (e.g. post id or slug) for this thread]
    */

   var disqus_developer =1;

  (function() {
   var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
   dsq.src = 'http://koper.disqus.com/embed.js';
   (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
  })();
</script>
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript=koper">comments powered by Disqus.</a></noscript>
<a href="http://disqus.com" class="dsq-brlink">blog comments powered by <span class="logo-disqus">Disqus</span></a>

