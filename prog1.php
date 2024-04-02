<?php 
include 'connection.php';


if(isset($_POST['save_btn'])){
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $age = $_POST['age'];


  $query = "INSERT INTO student (firstname , lastname , age ) VALUES ('$fname', '$lname','$age')";


  $data = mysqli_query($conn,$query);

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
   <form action="" method="POST">
     <input type="text" name="firstname" placeholder="firstname"> <br>

     <input type="text" name="lastname" placeholder="lastname"> <br>

     <input type="number" name="age" placeholder="age"> <br>


     <input type="submit" name="save_btn" value="Submit">

   </form>


   <table border="1" cellspacing="0px" cellpadding="8px">


   <?php

$select_query = "SELECT * from student";
$result = mysqli_query($conn ,$select_query);



while($row = mysqli_fetch_assoc($result)){
  ?>
   <tr>
  <td><?php echo $row['id'] ?> </td>
  <td><?php echo $row['firstname'] ?> </td>
  <td><?php echo $row['lastname'] ?> </td>

  <td><?php echo $row['age'] ?> </td>


  <td> <a href="update.php?id=<?php echo $row['id'] ?>">Update</a>   </td>

  <?php
}



?>


   </table>


</body>
</html>