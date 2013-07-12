<?php

	include_once('includes/path_settings.inc.php');
	include_once('includes/config.inc.php');
	include_once('includes/dbfunction.inc.php');

	if (!$db=dbConnect())
	{
		echo "<center><font color=red size=2><b>Error : Cannot Connect to the Database</b></font></center>";
		exit;
	}	
	
	
	$hid_action = $_REQUEST['hid_action'];
	$opt_plan	= $_REQUEST['opt_plan'];
	
	if($hid_action == 'choose_plan')
	{
		if($opt_plan > 0 and $opt_plan != '')
		{
			session_start();
			$_SESSION['user_plan_id'] 		= $opt_plan;
			$_SESSION['user_session_id'] 	= session_id();
			
	?>
    
    		<script language="javascript">
				location.href = "register.php";
			</script>
    
    <?
			
		}
		else
		{
			$message = 'Please choose your plan';
		}
	}
	
	
 
 
?>

<form name="myform" id="myform" method="post" action="<?=$_SERVER['PHP_SELF']?>">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="50" class="form_step_heading">    	
        &nbsp;&nbsp;&nbsp;&nbsp;Choose Plan
    </td>
  </tr>
  <tr>
    <td>
    
    	<?
        	$sql = "select * from payment_plans where nvl(active,0) = 1 order by display_order ";
			$rs  = dbGetResult($db,$sql);
			if($rs)
			{
				$sr = 0;
				while($rs && $rec = dbGetObject($rs))
				{
					$sr++;
		?>
        			
					<table width="90%" border="0" cellspacing="0" cellpadding="6" id="tbl_plan_<?=$sr?>" align="center" bgcolor="#F4F4F4">
                      <tr>
                        <td style="border-style:solid; border-width:1px; border-color:#CCC;"> 
							<input type="radio" name="opt_plan" id="opt_plan" value="<?=$rec[0]->plan_id?>" />
                            &nbsp;&nbsp;
                            <span style="font-family:Verdana, Geneva, sans-serif; font-size:16px; color:#069">
							<? echo $rec[0]->plan_name; ?>
                            </span>
                        </td>
                      </tr>
                      <tr>
                        <td style="border-style:solid; border-width:1px; border-color:#CCC; border-top:none; padding-left:40px;"><? echo $rec[0]->plan_desc; ?>&nbsp;</td>
                      </tr>
                    </table>
					<br /><br />
        
        <?
				}
			}
			else
			{
				echo 'There is no active plan available';
			}
		
		?>
    
    </td>
  </tr>
  <tr>
    <td height="30" align="center">
    <span style="font-size:14px; color:#F00;"><?=$message?></span> &nbsp;&nbsp;
    <input type="submit" name="cmd_continue" id="cmd_continue" value="Continue" onclick="func_submit()" /></td>
  </tr>
</table>
<input type="hidden" name="hid_action" />
</form>
<script language="javascript">
	
	function func_submit()
	{
		document.myform.hid_action.value = 'choose_plan';
		document.myform.submit();
	}
	
	
	function func_selected_plan()
	{
		
	}
	
	
</script>