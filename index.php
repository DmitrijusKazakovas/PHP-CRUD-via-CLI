<?php
    require_once 'process.php';
?>


<?php
/* options */

$options = getopt("f:ADD", "f:EDIT", "f:DELETE", "f:DISPLAY");

/* Input section */

function displayActions()
{
    echo "Type ADD, EDIT, DELETE followed by a person's name to update the database";
    echo "Type DISPLAY to show all entries in the database";

    if($a == 'DISPLAY')
    {
        $mysqli = new mysqli('localhost', 'root', 'mysql', 'rest_db') or die (mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * from rest_db") or die($mysqli->error);
        while($row = $result->fetch_assoc())
        {
            echo $row['id'];
            echo $row['name'];
            echo $row['email'];
            echo $row['phone'];
            echo $row['dateandtime'];
        }
    }
    else if ($a == 'ADD')
    {
       $a = readline('Enter the name: ');
       echo $a;
       $a = readline('Enter the email: ');
       echo $a;
       $a = readline('Enter the phone number: ');
       echo $a;
       $a = readline('Enter date and time: ');
       echo $a;
    }
    else if ($a == 'EDIT')
    {

    }
    else if ($a == 'DELETE')
    {
        $a = readline ('Enter the id to delete: ');
        echo $a . "deleted";
        
    }
    else 
    {
        echo "displayActions";
    }
}




    