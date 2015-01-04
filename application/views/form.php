<!DOCTYPE html>
<html>

<head>
<style>
 
#userinfo {
    line-height:30px;
    background-color:white;
    height:300px;
    width:100px;
    float:right;
    padding:5px;	      
}
#oldreq {
    width:350px;
    float:left;
    padding:10px;	 	 
}
#newreq{
    background-color:white;
    text-align:left;
   padding:50px;	 	 
}
</style>
</head>

<body>

<div id="userinfo">
<a href>Signout</a>
</div>

<div id="response">
</div>
<div id="oldreq">
<a href>Old Requests</a>
</div>

<div id="newreq">
<form>
<h4>New Request Form:</h4>
<table>
<tr>
<td><label for="category">Category:</label></td>
<td><select name="categorylist">
  <option value="Select">Select a Request</option>
  <option value="plumber">Plumber</option>
  <option value="babysitter">Baby Sitter</option>
  <option value="tutor">Tutor</option>
</select><br></td>
</tr>
<tr>
<td><label for="date">Date:</label></td>
<td><input type="date" name="date"></td>
</tr>
<tr>
<td><label for="time">Time:</label></td>
<td><input type="time"  id="time" placeholder="Enter Suitable Time"></td>
</tr>
<tr> <td><button type="submit">Submit</button></td></tr>
</table>  

</form>
</div>


</body>
</html>
