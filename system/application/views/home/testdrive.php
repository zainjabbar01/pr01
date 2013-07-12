<?
//echo $product;
?>
<div id="content">
<form name="myform" method="post">
<input type="hidden" name="product" id="product" />
	<table border="0" cellspacing="0" cellpadding="0" align="center">
      <tr>
        <td colspan="3" style="padding-top:15px; padding-bottom:15px">
        <div class="hero-unit" style="padding:30px">
        <h1>Take a Free Testdrive</h1>
        <p>
        Are you a small business owner? Do you fall under a  minority, women-owned, veteran or any other diverse supplier classification? Do  you want to procure corporate contracts?<br /><br />
		GRAB A PIECE OF THIS BILLION DOLLAR INDUSTRY, SEARCH  FOR CORPORATIONS TO DO BUSINESS WITH NOW. 
        </p>
        <p>
        </p>
        </div>        
        </td>
      </tr>
      <tr>
        <td width="380" class="page-title-bar">List of Products &amp; Services Category</td>
        <td style="width:90px" align="center">&nbsp;</td>
        <td width="380" class="page-title-bar">Selected Category List</td>
      </tr>
      <tr>
        <td>
        <select multiple="multiple" id="products" style="width:400px; height:300px">
		<?
        foreach ($products as $row) {
            $product_id 	= $row['PRODUCT_CATEG_ID'];
            $product_name 	= $row['CATEG_DESC'];
            ?>
            <option value="<?=$product_id?>"><?=$product_name?></option>
            <?	
        }
        ?>
        </select>
        </td>
        <td style="width:90px" align="center">
        <button class="btn btn-large" type="button" id="btn-add-products"><span class=" icon-chevron-right"></span></button><br /><br />
        <button class="btn btn-large" type="button" id="btn-remove-products"><span class=" icon-chevron-left"></span></button>
        </td>
        <td>
        <select multiple="multiple" id="products1" style="width:400px; height:300px">
        <?
        foreach ($productselected as $row) {
            $product_id 	= $row['PRODUCT_CATEG_ID'];
            $product_name 	= $row['CATEG_DESC'];
            ?>
            <option value="<?=$product_id?>"><?=$product_name?></option>
            <?	
        }
        ?>
        </select>
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td style="width:90px" align="center">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" align="center">
        <input type="radio" name="radio" id="radio" value="radio" style="margin:0px" /> Show all&nbsp;&nbsp;&nbsp;&nbsp; 
        <input type="radio" name="radio" id="radio2" value="radio" style="margin:0px" /> Do not show already selected&nbsp;&nbsp;&nbsp;&nbsp;
        <button class="btn" type="button" onclick="get_product_list()">Search Buyers</button>
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td style="width:90px" align="center">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
      	<td colspan="3">
        <? 
		if($product!=""){ 
		?>
			List of Buyers (as per above)
            <table class="table table-striped table-hover  table-bordered">
			<tr>
				<th class="page-title-bar">ID</th>
				<th class="page-title-bar">Name</th>
			</tr>
			<?
				foreach ($match as $row) {
					$product_id 	= $row['PRODUCT_CATEG_ID'];
					$product_name 	= $row['CATEG_DESC'];
					?>
					<tr>
						<td><?=$product_id?></td>
						<td><?=$product_name?></td>
					</tr>
					<?	
				}
		?>
			<tr>
            	<td colspan="10"><a href="#" class="btn btn-danger">View more results</a></td>
            </tr>
            </table>
		<?
		} 
		?>    
        </td>
      </tr>
      <tr>
      	<td colspan="3" style="padding-top:30px">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%" class="img-polaroid" valign="top">
            <iframe src="http://player.vimeo.com/video/53518716" width="445" height="300" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></p>
            </td>
            <td width="50%" class="img-polaroid" valign="top">
            <div style="padding:20px">
            <h2 style="margin-top:0">Key Features</h2>
            <p>
            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
            <br /><br />
            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
            </p>
            </div>
            </td>
          </tr>
        </table>
        </td>
      </tr>
    </table>          	
</form>    
</div>

<script language="javascript">
$(document).ready(function() {
 
    $('#btn-add-products').click(function(){
        $('#products option:selected').each( function() {
            $('#products1').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
			//get_product_list();
            $(this).remove();
        });
    });
    $('#btn-remove-products').click(function(){
        $('#products1 option:selected').each( function() {
            $('#products').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
			//get_product_list();
            $(this).remove();
        });
    });
 
});

function get_product_list(){
	var temp = "";
	$('#products1 option').each( function() {
		//$('#whatwebuy1').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
		if(temp==""){
			temp = $(this).val();
		 } else {
			temp = temp + ", " + $(this).val();
		 }
	});
	document.myform.product.value = temp;
	document.myform.submit();
}
</script>
