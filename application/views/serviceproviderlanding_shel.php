<html>
<head>
<title>eHelp-aboutusfinalsliced</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
body {
	background-color: #00CCFF;
}
body,td,th {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 24px;
	color: #009DC8;
}
</style>
</head>
<body text="#333333" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- Save for Web Slices (eHelp-aboutusfinalsliced.psd) -->
<center><table id="Table_01" width="1023" height="1002" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="565">
			<img src="images/eHelp-aboutus_01.gif" width="565" height="132" alt=""></td>
		<td width="67">
			<img src="images/eHelp-aboutus_02.gif" width="67" height="132" alt=""></td>
		<td width="101">
			<img src="images/eHelp-aboutus_03.gif" width="101" height="132" alt=""></td>
		<td width="132">
			<img src="images/eHelp-aboutus_04.gif" width="132" height="132" alt=""></td>
		<td width="159">
			<img src="images/eHelp-aboutus_05.gif" width="159" height="132" alt=""></td>
	</tr>
	<tr>
		<td colspan="5">
			<img src="images/eHelp-aboutus_06.gif" width="1024" height="341" alt=""></td>
	</tr>
	<tr>
		<td  colspan="5" height="489"" align="left" valign="top" bgcolor="#D6D6D6" style="background-color: #D7D6D6"><p>&nbsp;</p>
                    <p><font size="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Update Profile <a href='<?php echo site_url('main/signout')?>'>Logout</a></font></p>
		  <p>&nbsp;&nbsp;<strong>WELCOME  </strong></p>
		  <p>&nbsp;</p>
		 <?php
                  echo "<table align='center' width='743' border='1'><tr><th>Accept</th><th>Date</th><th>Time</th><th>Category</th><th>Name</th><th>Address</th></tr>";
                  foreach($query as $row)
                   {
                   echo "<tr><td><input type='radio' name='q1' value='$row->rid' /></td><td>".$row->date."</td><td>".$row->time."</td><td>".$row->cname."</td><td>".$row->fname."</td><td>".$row->address."</td></tr>";
                   }
                  echo "</table>";
    
    
    ?>
		  <p>
	      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" name="ddd" id="ddd" value="Submit">
	      </p>
      </td>
        <p>
           
	</tr>
	<tr>
		<td colspan="5">
			<img src="images/eHelp-aboutus_08.gif" width="1024" height="40" alt=""></td>
	</tr>
</table></center>
<!-- End Save for Web Slices -->
</body>
</html>