<?php 
    $conn = mysqli_connect('localhost', 'root', '', 'voterdatabase');
    $cnic = $_POST['cnic'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $check = mysqli_query($conn, "SELECT * FROM voterregisteration WHERE  cnic = '$cnic' AND email = '$email' AND pass = '$pass' ");
    if(mysqli_num_rows($check)>0){
        $voterdata = mysqli_fetch_array($check);
        $_SESSION['voterdata'] = $voter;
        echo'
        <script>
         location="../Dashboard/dashboard.php";
        </script>
        ';

    }
    else{
        echo'
            Some Error...
        ';

    }


?>