<?php
    session_start() ;
    header('location:tc.html');
    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'registration')  or die('connection failed');
    $name =$_POST['user']  ;
    $pass =$_POST['pass'] ;
    $s = "SELECT * FROM log WHERE Email ='$name'";
    $result = mysqli_query($con,$s) ;
    $num = mysqli_num_rows($result) ;

    if($num==1){
        echo"username already taken" ;
    }
    else{
        $reg= "INSERT INTO log(Email ,passwords) VALUES ('$name','$pass')" ;
        mysqli_query($con,$reg) or die('select failed');
        
    }

?>