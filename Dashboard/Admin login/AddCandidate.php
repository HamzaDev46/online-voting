<?php
$conn = mysqli_connect('localhost', 'root', '', 'voterdatabase');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cname = $_POST['cname'];
    $cparty = $_POST['cparty'];

    $symbol = $_FILES['symbol']['name'];
    $tmp_name = $_FILES['symbol']['tmp_name'];

    $photo = $_FILES['photo']['name'];
    $tmp_name1 = $_FILES['photo']['tmp_name'];

    // SQL correction: removed extra comma in column list
    $insert = mysqli_query($conn, "INSERT INTO addcandidate (cname, cparty, symbol, photo) 
    VALUES ('$cname', '$cparty', '$symbol', '$photo')");
    
    if ($insert) {
        // Corrected variable names for file movement
        move_uploaded_file($tmp_name, "images/$symbol");
        move_uploaded_file($tmp_name1, "images/$photo");

        echo '
        <script>
        alert("Candidate Added Successfully");
        location="AdminDasboard.php";    
        </script>';
    } else {
        echo '
        <script>
        alert("Some Error occurred.");
        </script>';
    }
}

?>