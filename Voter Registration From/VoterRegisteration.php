<?php
$conn = mysqli_connect('localhost', 'root', '', 'voterdatabase');

$name = $_POST['name'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$image = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$idtype = $_POST['idtype'];
$cnic = $_POST['cnic'];
$issue = $_POST['issue'];
$expire = $_POST['expire'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];

if ($pass == $cpass) {
    if (move_uploaded_file($tmp_name, "../VoterImg/$image")) {
        $insert = mysqli_query($conn, "INSERT INTO voterregisteration (name, dob, email, mobile, gender, photo, idtype, cnic, issue, expire, pass, cpass, status, votes) 
        VALUES ('$name', '$dob', '$email', '$mobile', '$gender', '$image', '$idtype', '$cnic', '$issue', '$expire', '$pass', '$cpass', 0, 0)");

        if ($insert) {
            echo '
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Success</title>
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
                    <style>
                        /* Modal Styling */
                        .modal-content {
                            border-radius: 10px;
                            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                        }
                        .modal-body {
                            text-align: center;
                        }
                        .modal .modal-dialog {
                            max-width: 400px;
                        }
                        /* Checkmark Style */
                        .checkmark {
                            width: 80px;
                            height: 80px;
                            border-radius: 50%;
                            background-color: #28a745;
                            color: white;
                            font-size: 50px;
                            line-height: 80px;
                            margin: 0 auto 20px;
                            animation: checkmark-animation 1s ease-in-out;
                        }
                        @keyframes checkmark-animation {
                            0% {
                                transform: scale(0);
                            }
                            50% {
                                transform: scale(1.2);
                            }
                            100% {
                                transform: scale(1);
                            }
                        }
                        /* Modal Fade-in Effect */
                        .modal.fade .modal-dialog {
                            opacity: 0;
                            transform: translateY(-50px);
                            transition: opacity 0.3s ease, transform 0.3s ease;
                        }
                        .modal.show .modal-dialog {
                            opacity: 1;
                            transform: translateY(0);
                        }
                    </style>
                </head>
                <body>
                    <div class="modal fade show" tabindex="-1" role="dialog" id="successModal" style="display: block;">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Form Submitted Successfully</h5>
                                </div>
                                <div class="modal-body">
                                    <!-- Green Checkmark Icon -->
                                    <div class="checkmark">
                                        ✓
                                    </div>
                                    <p>Your form has been submitted successfully!</p>
                                </div>
                                <div class="modal-footer">
                                    <a href="../Voter login Form/index.html" class="btn btn-primary">Go to Login</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
                </body>
                </html>
            ';
        } else {
            echo "Error: " . mysqli_error($conn);
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
