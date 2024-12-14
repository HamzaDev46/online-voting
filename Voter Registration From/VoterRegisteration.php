<?php
$conn = mysqli_connect('localhost', 'root', '', 'voterdatabase');

$name = $_POST['name'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$mobile = $_POST['mobile']; // Correct variable name
$gender = $_POST['gender'];
$image = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$idtype = $_POST['idtype'];
$cnic = $_POST['cnic'];
$issue = $_POST['issue']; // Add this variable
$expire = $_POST['expire'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];

if ($pass == $cpass) {
    // Check if image upload is successful
    if (move_uploaded_file($tmp_name, "../VoterImg/$image")) {
        $insert = mysqli_query($conn, "INSERT INTO voterregisteration (name, dob, email, mobile, gender, photo, idtype, cnic, issue, expire, pass, cpass, status, votes) 
        VALUES ('$name', '$dob', '$email', '$mobile', '$gender', '$image', '$idtype', '$cnic', '$issue', '$expire', '$pass', '$cpass', 0, 0)");
        
        if ($insert) {
            echo '
                <script>
                     alert("Form Submitted Successfully");
                     location = "../Voter login Form/index.html";
                </script>
            ';
        } else {
            echo "Error: " . mysqli_error($conn); // Debugging error
        }
    } else {
        echo '
            <script>
                 alert("Failed to upload image");
                 location = "index.php";
            </script>
        ';
    }
} else {
    echo '
        <script>
             alert("Password and Confirm Password do not match!!");
             location = "index.php";
        </script>
    ';
}
?>
