<html>
<head>
<title>eHelp - Sign Up / Log In</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
</style>
<script type="text/javascript">

function ServiceProviderFunction() 
{
        document.getElementById('ifServiceProvider').style.visibility = 'visible';
}

function UserFunction() 
{
        document.getElementById('ifServiceProvider').style.visibility = 'hidden';
}
</script>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- Save for Web Slices (eHelp-aboutusfinalsliced.psd) -->
<!--<!--?php foreach ($query as $row) {
  # code...
  echo $row->uid;
}
?>-->

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
            <td width="30%"  height="489" align="left" valign="top" bgcolor="#999999" style="background-color: #D7D6D6">
                <fieldset id="existingUser">
                    <legend><h1>Existing user</h1></legend>
                    <!--?php $attributes = array('name'=>'login'); echo form_open('main/validate_credentials',$attributes); ?-->
                    <form action="<?php echo site_url().'/main/validate_credentials'?>" method="post" accept-charset="utf-8" name="login">
                    <table cols="2">
                        <tr>
                            <td cols="2"><div class="status"><?php if(isset($error)){echo $error;}?></div></td>
                        </tr>
                      <tr>
                        <td width="30%"><label>Email</label></td>
                        <td>
                            <input type="text" name="Email" id="Email ">
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2"><?php echo form_error('Email','<span class="error">','</span>'); ?></td>
                      </tr>
                      <tr>
                        <td width="50%"><label>Password</label></td>
                        <td>
                            <input type="password" name="Password" id="Password ">
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2"><?php echo form_error('Password','<span class="error">','</span>'); ?></td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <input type="submit" name="logIn" id="logIn" value="Log In">
                        </td>
                      </tr>
                    </table>
                    </form>
                </fieldset>
	    </td>
            <td height="489" colspan="5" align="left" valign="top" style="background-color: #D7D6D6"><p>&nbsp;</p>
                <fieldset>
                    <legend><h1>New User</h1></legend>
                    <?php $signUpFormAttr = Array('name'=>'signUp'); echo form_open('signup/create',$signUpFormAttr); ?>
                   <table cols="2">
                    <tr>
                        <td cols="2"><div class="status"><?php if(isset($account)){echo $account;}?></div></td>
                    </tr>
                    <tr>
                        <td width="50%"><label>First Name</label></td>
                        <td>
                            <input type="text" name="name" value="<?php echo set_value('name');?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><?php echo form_error('name','<span class="error">','</span>'); ?></td>
                    </tr>
                    <tr>
                        <td width="50%"><label>Last Name</label></td>
                        <td>
                            <input type="text" name="name1" value="<?php echo set_value('name1');?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><?php echo form_error('name1','<span class="error">','</span>'); ?></td>
                    </tr>
                    <tr>
                        <td width="50%"><label>Address</label></td>
                        <td>
                            <input type="text" name="address" id="Address " value="<?php echo set_value('address');?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><?php echo form_error('address','<span class="error">','</span>'); ?></td>
                    </tr>
                    <tr>
                        <td width="50%"><label>City</label></td>
                        <td>
                            <input type="text" name="city" id="city " value="<?php echo set_value('city');?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><?php echo form_error('city','<span class="error">','</span>'); ?></td>
                    </tr>
                    <tr>
                        <td width="50%"><label>State</label></td>
                        <td>
                            <input type="text" name="state" id="state " value="<?php echo set_value('state');?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><?php echo form_error('state','<span class="error">','</span>'); ?></td>
                    </tr>
                    <tr>
                        <td width="50%"><label>Zip Code</label></td>
                        <td>
                            <input type="text" name="zip" id="zip " value="<?php echo set_value('zip');?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><?php echo form_error('zip','<span class="error">','</span>'); ?></td>
                    </tr>
                    <tr>
                        <td width="50%"><label>Email</label></td>
                        <td>
                            <input type="text" name="email" id="Email" value="<?php echo set_value('email');?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><?php echo form_error('email','<span class="error">','</span>'); ?></td>
                    </tr>
                    <tr>
                        <td width="50%"><label>Password</label></td>
                        <td>
                            <input type="password" name="password" id="Password" value="<?php echo set_value('password');?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><?php echo form_error('password','<span class="error">','</span>'); ?></td>
                    </tr>
                    <tr>
                        <td width="50%"><label for="Email">Confirm Password</label></td>
                        <td>
                            <input type="password" name="confirm" id="Confirm Password" value="<?php echo set_value('confirm');?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><?php echo form_error('confirm','<span class="error">','</span>'); ?></td>
                    </tr>
                    <tr>
                        <td width="30%"><label for="Contact No">Mobile No</label></td>
                        <td>
                            <input type="text" name="contact" id="Contact No" value="<?php echo set_value('contact');?>"/>
                            <br><span id="asterix">*</span><span id="formatspecifier">Format required 1-xxx-xxx-xxxx</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><?php echo form_error('contact','<span class="error">','</span>'); ?></td>
                    </tr>
                    <tr>
                        <td width="50%"><label for="Signup as">Sign Up as</label></td>
                        <td>
                            <input type="radio" name="radio" id="User" onclick="UserFunction()" value="User">
                             <label for="User">User</label>
                        </td>
                    </tr>
                    <tr>
                        <td width="50%">&nbsp;</td>
                        <td>
                            <input type="radio" name="radio" id="Service Provider" onclick="ServiceProviderFunction()" value="Service Provider">
                            <label for="Service Provider">Service Provider</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><?php echo form_error('radio','<span class="error">','</span>'); ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                         <div id="ifServiceProvider" style="visibility:hidden"> <label>Please select your profession:</label>
                            <br>
                            <input type="checkbox" name="plumber[]" id="plumber" value="100">
                            <label for="plumber">Plumber</label>
                            <input type="checkbox" name="plumber[]" id="tutor" value="101">
                            <label for="tutor">Tutor</label>
                            <input type="checkbox" name="plumber[]" id="babysitter" value="102">
                            <label for="baby sitter">Baby sitter</label>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" name="signUp" id="signUp" value="Sign Up"></td>
                    </tr>
                    
                 </table>

            </fieldset>
            </td>
	</tr>
	<tr>
		<td colspan="5">
			<img src="<?php echo base_url().'application/images/eHelp-aboutus_08.gif'?>" width="1024" height="40" alt=""></td>
	</tr>
</table></center>
<!-- End Save for Web Slices -->

<map name="Map">
  <area shape="rect" coords="1,92,82,131" href="<?php echo base_url().'index.php/main/index'?>">
</map>

<map name="Map2">
  <area shape="rect" coords="4,96,115,138" href="<?php echo base_url().'index.php/main/aboutUs'?>">
</map>

<map name="Map3">
  <area shape="rect" coords="9,91,125,148" href="<?php echo base_url().'index.php/main/aboutUs'?>">
</map>

<map name="Map4">
  <area shape="rect" coords="6,88,174,143" href="<?php echo base_url().'index.php/signup'?>">
</map>
</body>
</html>