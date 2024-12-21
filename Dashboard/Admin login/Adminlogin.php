
<?php
$conn = mysqli_connect('localhost', 'root', '', 'voterdatabase');
$name = $_POST['name'];
$password = $_POST['password'];
$check = mysqli_query($conn, "SELECT * FROM adminlogin WHERE name = '$name' AND password = '$password'");
if (mysqli_num_rows($check) > 0) {
    echo '
    <script>
        location = "AdminDasboard.php";
    </script>
    ';
} else {
    echo '
    <script>
        alert("Incorrect Information! You are not Admin");
        window.location.href = "../dashboard.php";
    </script>
    ';
}
?>
