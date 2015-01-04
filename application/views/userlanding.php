<html>
<head>
<title>eHelp- Create Request</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="<?php echo base_url().'application/jquery-ui-1.11.2.custom/jquery-ui.theme.min.css'?>">
<link rel="stylesheet" href="<?php echo base_url().'application/jquery-ui-1.11.2.custom/jquery-ui.css'?>">
<link rel="stylesheet" href="<?php echo base_url().'application/jquery-ui-1.11.2.custom/jquery-ui.structure.css'?>">
<script src="<?php echo base_url().'application/jquery-ui-1.11.2.custom/jquery.js '?>"></script>
<script src="<?php echo base_url().'application/jquery-ui-1.11.2.custom/jquery-ui.js'?>"></script>
<script src="<?php echo base_url().'application/jquery-ui-1.11.2.custom/jquery-ui-sliderAccess.js'?>"></script>
<script src="<?php echo base_url().'application/jquery-ui-1.11.2.custom/jquery-ui-timepicker-addon.css'?>"></script>
<script src="<?php echo base_url().'application/jquery-ui-1.11.2.custom/jquery-ui-timepicker-addon.min.js'?>"></script>
<script>
$(function() {
$( "#date" ).datepicker({ dateFormat:'yy-mm-dd',minDate:0});
$("#time").timepicker();
});

</script>
<style type="text/css">
body {
	background-color: #00CCFF;
}
.error,.status{
    color:red;
    font:11px Verdana, Geneva, sans-serif;
}
fieldset
{
    width:90%;
    height:auto;
    font:11px Verdana, Geneva, sans-serif;
}
h1 {
    color: maroon;
    margin-left:5px;
    font:14px Verdana, Geneva, sans-serif;
}
select option
{
    font:11px Verdana, Geneva, sans-serif;
}
label
{
   font:11px Verdana, Geneva, sans-serif;
    }
#existingUser
{
    margin-left: 20px;
    margin-top: 40px;
    width: 60%;
}
#formatspecifier,#asterix
{
    font:9px Verdana, Geneva, sans-serif;
}
#asterix
{
    color:red;
}
table #paymentTbl tr td
{
    height:30px;
}
div.ui-datepicker{
 font-size:10px;
}
#welcome
{
    margin-left: 25px;
    font:12px;
}
body,td,th {
	font-family: Verdana, Geneva, sans-serif;
/*	font-size: 12px;*/
	color: #009DC8;
}
</style>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- Save for Web Slices (eHelp-aboutusfinalsliced.psd) -->
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
<?php echo validation_errors(); ?>
<fieldset id="existingUser">
  <legend><h1>Create Service Request</h1></legend>
<form name="form3" method="post" action="<?php echo site_url().'/request/create'?>" accept-charset="utf-8">
    <table id="paymentTbl" cols="2">
        <tr>
            <td><label for="category">Category:</label></td>
            <td>
                <select name="categorylist">
                    <option value="100">Plumber</option>
                    <option value="101">Baby Sitter</option>
                    <option value="102">Tutor</option>
                </select>
            </td>
         </tr>
         <tr>
            <td> <label for="date">Date:</label></td>
            <td><input type="text" name="date" id="date" readonly></td>
         </tr>
         <tr>
            <td><label for="time">Time:</label></td>
            <td><input type="text" name="time" id="time"></td>
         </tr>
         <tr>
             <td colspan="2"><input type="submit" name="Submit" id="Submit" value="Create Request"></td>
         </tr>
    </table>

</form>
</fieldset>
      </td>
        <tr>
		<td colspan="5">
			<img src="<?php echo base_url().'application/images/eHelp-aboutus_08.gif'?>" width="1024" height="40" alt=""></td>
	</tr>
</table></center>
<!-- End Save for Web Slices -->
</body>
</html>
