<html>
<head>
<title>eHelp- Complete Payment</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
body {
	background-color: #00CCFF;
}
body,td,th {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
	color: #009DC8;
}
h1   {
	color: #009DC8;
	font-size: 32px;
}
.error
      {
          font:11px Verdana, Geneva, sans-serif;
          color:red;
          font-weight: bold;
      }
fieldset
{
    width:50%;
    height:auto;
    font:11px Verdana, Geneva, sans-serif;
    margin-left: 23px;
}
fieldset table tr td
{
   font:11px Verdana, Geneva, sans-serif;
}
fieldset h1
{
    color: maroon;
    margin-left:5px;
    font:14px Verdana, Geneva, sans-serif;
}
#welcome
{
    margin-left: 25px;
    font:12px;
}
</style>

</head>
<body text="#333333" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- Save for Web Slices (eHelp-aboutusfinalsliced.psd) -->
<center><table id="Table_01" width="1023" height="1002" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="565">
			<img src="<?php echo base_url().'application/images/eHelp-aboutus_01.gif'?>" width="565" height="132" alt=""></td>
		<td width="67">
			<img src="<?php echo base_url().'application/images/eHelp-aboutus_02.gif'?>" alt="" width="67" height="132" usemap="#Map" border="0"></td>
		<td width="101">
			<img src="<?php echo base_url().'application/images/eHelp-aboutus_03.gif'?>" alt="" width="101" height="132" usemap="#Map2" border="0"></td>
		<td width="132">
			<img src="<?php echo base_url().'application/images/eHelp-aboutus_04.gif'?>" alt="" width="132" height="132" usemap="#Map3" border="0"></td>
		<td width="159">
			<img src="<?php echo base_url().'application/images/eHelp-aboutus_05.gif'?>" alt="" width="159" height="132" usemap="#Map4" border="0"></td>
	</tr>
	<tr>
		<td colspan="5">
			<img src="<?php echo base_url().'application/images/eHelp-aboutus_06.gif'?>" width="1024" height="341" alt=""></td>
	</tr>
        <tr>
            <td  colspan="5" align="left" valign="top" bgcolor="#D6D6D6" style="background-color: #D7D6D6"><p>&nbsp;</p>
                    <p><font size="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href ='<?php echo site_url('main/getresponse')?>'>Home</a> |<a href ='<?php echo site_url('main/newrequest')?>'>New Request</a> | <a href='<?php echo site_url('main/signout')?>'>Logout</a></font></p>
		  <p><span id="welcome">Welcome <?php echo $fname.' '.$lname ?>,</span></p>
            </td>
        </tr>
	<tr>
            <td  colspan="5" height="489" align="left" valign="top" bgcolor="#D6D6D6" style="background-color: #D7D6D6">
               <div>
        <?php echo validation_errors(); ?>
        <?php echo form_open('/payment/paymentcontroller/completePayment'); ?>
        <fieldset>
	 <legend><h1>Payment Details</h1></legend>
	  <table cols ="2">
              <tr style="height:30px;">
	    <td>First Name</td>
	    <td><input type="text" name="firstName" value="<?php echo $fname?>" readOnly/></td>
	   </tr>
           <tr style="height:30px;">
	    <td>Last Name</td>
	    <td><input type="text" name="lastName" value="<?php echo $lname?>" readOnly/></td>
	   </tr>
           <input type="hidden" name="requestId" value="<?php echo $requestId;?>" />
           <input type="hidden" name="service" value="<?php echo $service;?>">
	   <tr style="height:30px;">
	    <td>Card Type</td>
	    <td>
	     <input type="radio" name="cardType" value="CREDIT" checked>Credit
	     <input type="radio" name="cardType" value="DEBIT" checked>Debit
	    </td>
	   </tr>
	   <tr style="height:30px;">
	   <td>Card Name</td>
	    <td>
	     <select name="card">
	      <option value="Discovery">Discovery</option>
	      <option value="Master Card">Master Card</option>
	      <option value="Visa">Visa</option>
	      <option value="American Express">American Express</option>
	     </select>
	    </td>
	    </tr>
	    <tr>
	     <td>Card Number</td>
	     <td><input type="text" name="creditCardNum"/></td>
	    </tr>
	    <tr style="height:30px;">
	     <td>Expiration month
	      <select name="expirationMonth">
	       <option value="01">01</option>
	       <option value="02">02</option>
	       <option value="03">03</option>
	       <option value="04">04</option>
	       <option value="05">05</option>
	       <option value="06">06</option>
	       <option value="07">07</option>
	       <option value="08">08</option>
	       <option value="09">09</option>
	       <option value="10">10</option>
	       <option value="11">11</option>
	       <option value="12">12</option>
	      </select>
	     </td>
	     <td>Expiration Year
	      <select name="expirationYear">
	       <option value="2015">2015</option>
	       <option value="2016">2016</option>
	       <option value="2017">2017</option>
	       <option value="2018">2018</option>
	       <option value="2019">2019</option>
	       <option value="2020">2020</option>
	       <option value="2021">2021</option>
	       <option value="2022">2022</option>
	       <option value="2023">2023</option>
	       <option value="2024">2024</option>
	       <option value="2025">2025</option>
	      </select>
	     </td>
	    </tr>
	    <tr style="height:30px;">
             <td>CVV</td>
	     <td><input type="text" name="cardCvc"/></td>
	    </tr>
	    <tr style="height:30px;">
	     <td>Total Amount</td>
	     <td><input type="text" name="totalAmount" value="<?php echo $cost?>" readOnly/></td>
	    </tr>
           <tr style="height:30px;">
                <td align="center" colspan ="2">
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </td>
	    </tr>
	 </table>
  </fieldset>
	</div>
            </td>
	</tr>
	<tr>
		<td colspan="5">
			<img src="<?php echo base_url().'application/images/eHelp-aboutus_08.gif'?>" width="1024" height="40" alt=""></td>
	</tr>
</table></center>
<!-- End Save for Web Slices -->

<map name="Map">
  <area shape="rect" coords="1,85,71,134" href="eHelp-home.html">
</map>

<map name="Map2">
  <area shape="rect" coords="6,87,118,128" href="eHelp-aboutus.html">
</map>

<map name="Map3">
  <area shape="rect" coords="4,86,149,148" href="eHelp-contactus.html">
</map>

<map name="Map4">
  <area shape="rect" coords="2,92,163,137" href="eHelp-contactus.html">
</map>
</body>
</html>