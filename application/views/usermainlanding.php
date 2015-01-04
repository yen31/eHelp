<html>
<head>
<title>eHelp - User Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
body {
	background-color: #00CCFF;
}
body,td,th {
	font-family: Verdana, Geneva, sans-serif;
/*	font-size: 12px;*/
	color: #009DC8;
}
#buttonPlacer
{
    margin-left: 42%;
}
#welcome
{
    margin-left: 25px;
    font:12px;
}
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    width: 50%;
    border-collapse: collapse;
}

#customers td, #customers th {
    font-size: 0.75em;
    border: 1px solid 1e97a1;
    padding: 3px 7px 2px 7px;
}

#customers th {
    font-size: 1.1em;
    text-align: left;
    padding-top: 5px;
    padding-bottom: 4px;
    background-color: #4fc7ea;
    color: #ffffff;
}

#customers tr.alt td {
    color: #000000;
    background-color: #EAF2D3;
}
.wrapper {
    text-align: center;
}
</style>
</head>
<body text="#333333" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<center><table id="Table_01" width="1023" height="1002" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="565">
			<img src="<?php echo base_url().'application/images/eHelp-aboutus_01.gif'?>" width="565" height="132" alt=""></td>
		<td width="67">
			<img src="<?php echo base_url().'application/images/eHelp-aboutus_02.gif'?>" width="67" height="132" alt=""></td>
		<td width="101">
			<img src="<?php echo base_url().'application/images/eHelp-aboutus_03.gif'?>" width="101" height="132" alt=""></td>
		<td width="132">
			<img src="<?php echo base_url().'application/images/eHelp-aboutus_04.gif'?>" width="132" height="132" alt=""></td>
		<td width="159">
			<img src="<?php echo base_url().'application/images/eHelp-aboutus_05.gif'?>" width="159" height="132" alt=""></td>
	</tr>
	<tr>
		<td colspan="5">
			<img src="<?php echo base_url().'application/images/eHelp-aboutus_06.gif'?>" width="1024" height="341" alt=""></td>
	</tr>
	<tr>
		<td  colspan="5" height="489" align="left" valign="top" bgcolor="#D6D6D6" style="background-color: #D7D6D6"><p>&nbsp;</p>
                    <p><font size="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href ='<?php echo site_url('main/getresponse')?>'>Home</a> |<a href ='<?php echo site_url('main/newrequest')?>'>New Request</a> | <a href='<?php echo site_url('main/signout')?>'>Logout</a></font></p>
                    <p><span id="welcome">Welcome <?php echo $userName ?>,</span></p>
                    <p style="text-align:center;color: maroon;font-weight:bold;">Service Responses</p>
		  
    <?php

    echo "<table align='center' width='743' id='customers' border='1'><tr><th>Accept</th><th>Date</th><th>Name</th><th>Category</th></tr>";
        echo form_open('main/response');

    foreach($query as $row){
        echo "<tr><td><input type='radio' name='q1' value='$row->rid._.$row->respid' /></td><td>".$row->date."</td><td>".$row->fname."</td><td>".$row->cname."</td></tr>";
    }
    echo "</table>";
    if(sizeof($query) > 0){?><div id="buttonPlacer"><?php echo form_submit('submit', 'Submit')?></div><?php } ?>
                 
		<?php  //<!-- <p>
		 echo form_close(); 
	       ?>
      </td>
        <p>
           
	</tr>
	<tr>
		<td colspan="5">
			<img src="<?php echo base_url().'application/images/eHelp-aboutus_08.gif'?>" width="1024" height="40" alt=""></td>
	</tr>
</table></center>
<!-- End Save for Web Slices -->
</body>
</html>