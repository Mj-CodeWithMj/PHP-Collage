<?php 
  
    $id=$_GET['notice'];
    $con=mysqli_connect("localhost","root","","mju_collage");
    $data=$con->query("delete from add_notice where id=$id");

    echo "<script>window.location.href='manage_notice.php';</script>";

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>

</body>
</html>