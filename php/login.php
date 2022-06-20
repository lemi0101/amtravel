<?php 
    require_once(init.php);
    $e=$_POST['name'];
    $p=$_POST['pass'];
    $sql="select * from users where email='$e' and password='$p' ";
    $rs=mysqli_query($db,$sql);

    if (mysql_num_rows($rs)>0){
        header("Location:product.html")
    } else{
        header("Location:index.html")
    }
?>