<!DOCTYPE html>
<html>
<head>
<style>
 th, td {
     border: 1px solid black;
     font-family: Verdana, Geneva, sans-serif;
	font-size: 24px;
	color: #009DC8;
}
</style>
</head>
<body>

<?php
//echo "<table><tr><th>Date</th><th>Name</th><th>Category</th></tr>";
// foreach($query as $row)
// {
//   
//     print" <table>";
//     echo $row->date;
//     print "\t\t\t";
//     print $row->fname;
//     print "\t\t\t";
//     print $row->cname;
//     print "<br>";
//     print"</table>";
// }
// 
//    echo "<table align='center' width='743' border='1'><tr><th>Accept</th><th>Date</th><th>Name</th><th>Category</th></tr>";
//   
//     foreach($query as $row){
//        echo "<tr><td><input type='radio' name='q1' value='accept' /></td><td>".$row->date."</td><td>".$row->fname."</td><td>".$row->cname."</td></tr>";
//    }
//    echo "</table>";
    echo "<table align='center' width='743' border='1'><tr><th>Accept</th><th>Date</th><th>Time</th><th>Category</th><th>Name</th><th>Address</th></tr>";
   
     foreach($query as $row){
        echo "<tr><td><input type='radio' name='q1' value='$row->rid' /></td><td>".$row->date."</td><td>".$row->time."</td><td>".$row->cname."</td><td>".$row->fname."</td><td>".$row->address."</td></tr>";
    }
    echo "</table>";
    
    
    ?>
</body>
</html>