<?php

/* Connection to Database */
$mysqli = new mysqli('localhost', 'root', 'mysql', 'rest_db') or die (mysqli_error($mysqli));

/*ADD, DELETE, EDIT functions*/

function ADD($add)
{
    
    if($a = readline('ADD'))
    {
        $name = $add['name'];
        $email = $add['email'];
        $phone = $add['phone'];
        $dateTime = $add['dateandtime'];

        $mysqli->query("INSERT INTO rest_db (name, email, phone, dateandtime) 
        VALUES('$name', '$email', '$phone', '$datetime'") or die($mysqli->error);
    }
}

function EDIT($edit)
{
    if($a = readline('EDIT'))
    {
      $id = $edit[$id];
      $result = $mysqli->query("SELECT * FROM rest_db where id=$id") or die($mysqli->error());
      if(count($result) == 1)
      {
            $row = $result->fetch_array();
            $name = $edit['name'];
            $email = $edit['email'];
            $phone = $edit['phone'];
            $dateTime = $edit['dateandtime'];
      }
    }
}

function DELET($delete)
{
    if($a = readline('DELETE'))
    {
        $id = $delete['delete'];
        $mysqli->query("DELETE FROM data WHERE id=$id") or die($mysqli->$error());       
    }
  
}


