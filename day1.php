<?php

require("connect.php");

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

<?php

class PostsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('posts', $this->Post->find('all'));
    }
}
?>

?>