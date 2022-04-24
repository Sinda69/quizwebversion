<?php
    session_start() ;
    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'registration')  or die('connection failed');
    $name =$_POST['user']  ;
    $pass =$_POST['pass'] ;
    $s = "SELECT * FROM log WHERE Email ='$name' && passwords='$pass' ";
    $result = mysqli_query($con,$s) ;
    $num = mysqli_num_rows($result) ;

    if($num==1){
        header('location:tc.html');
    }
    else{
        header('location:t.html');
    }

?>