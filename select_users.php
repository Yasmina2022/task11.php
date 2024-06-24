<?php

include("./db_connection.php");

$query="SELECT*  FROM `users` ";

$stmt=$conn->prepare($query);

$stmt->execute();

$data=$stmt->fetchALL();

//foreach($data as $row) {

   // echo "<br>"  . $row["user_name"]. $row["phone_number"]. " ". $row["Email"] ."<br>" ;
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>user name</th>
        <th>phone number</th>
        <th>Email</th>
        <th>update</th>
      </tr>
    </thead>
    <tbody>
        <?php
    foreach($data as $row) {
        echo "
<tr>
 <td>{$row["user_name"]}</td>
  <td>{$row["phone_number"]}</td>
  <td>{$row["Email"]}</td>
  <td>
  <a href='./update_user.php?id={$row["user_id"]}'>edit</a>
  </td>
}
</tr>
"; 
    }

?>
      
    </tbody>
  </table>
</div>

</body>
</html>






