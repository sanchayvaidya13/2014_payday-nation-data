<?php

require("connect.php");

//$write=mysql_query("INSERT INTO people VALUES ('','','','','')");
//$update=mysql_query("UPDATE people SET firstname='ABC' WHERE id='3'");
$extract=mysql_query("SELECT * FROM people");

echo"
<form action='day1_1.php' method='POST'>
<select name='peoplename'>";
while($row=mysql_fetch_assoc($extract))
{
 $id=$row['id'];
 $firstname=$row['firstname'];
 $lastname=$row['lastname'];
 echo"<option value='$id'>$firstname</option><br>";
}
echo"</select>
<input type='text' name='updatename' value='Enter new first name'><br>
<input type='submit' name='button' value='Update data'>
</form>";

?>