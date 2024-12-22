<?php
 $conn = mysqli_connect('localhost', 'root', '', 'voterdatabase');

 $query = "SELECT * FROM addcandidate";
 $result = mysqli_query($conn,$query);




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
         .nav-item a{
            font-family:sans-serif;
            color:darkcyan;
            margin-left:40px;
           
        }
        .nav-item a:hover{
            background:rgb(54, 198, 119);
            color:whitesmoke;
            border-radius:7px;
        }
        .form-container {
            margin-top: 50px; /* Space from the top */
            margin-left: 20px; /* Space from the left */
            background-color: #ffffff; /* White background for form */
            border-radius: 10px; /* Rounded corners */
            padding: 20px; /* Space inside the container */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
            border: 2px solid #28a745; /* Green border for the form */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15); /* Shadow border for depth */

        }
        .image-container {
            background-color: #d4edda; /* Light green background for the image section */
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #28a745; /* Bootstrap green for heading */
            font-weight: bold;
            text-align:center;
        }
        .btn-primary {
            background-color: #28a745; /* Match button color with heading */
            border: none;
        }
        .btn-primary:hover {
            background-color: #218838; /* Slightly darker green on hover */
        }
        #total {
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
    }
    
    h2 {
        font-family: 'Arial', sans-serif;
        font-weight: bold;
    }
    
    .table th {
        background-color: #4CAF50;
        color: white;
        text-align: center;
    }

    .table td {
        text-align: center;
        vertical-align: middle;
    }

    .table img {
        transition: transform 0.3s ease-in-out;
    }

    .table img:hover {
        transform: scale(1.1);
    }
    #AddCandidate {
        padding: 30px;
        background-color: #f8f9fa;
    }

    .form-container {
        background-color: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        font-family: 'Arial', sans-serif;
        font-weight: bold;
        color: #333;
    }

    .form-label {
        font-weight: bold;
    }

    .form-control {
        border-radius: 8px;
        padding: 12px;
        border: 1px solid #ddd;
    }

    .btn-primary {
        background-color: #4CAF50;
        border-color: #4CAF50;
        font-weight: bold;
        padding: 12px;
        font-size: 16px;
    }

    .btn-primary:hover {
        background-color: #45a049;
        border-color: #45a049;
    }

    img {
        border-radius: 10px;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
    }

    .text-center {
        text-align: center;
    }

    .col-sm-6 {
        margin-bottom: 15px;
    }
    </style>
</head>
<body>
            <ul class="nav justify-content-center bg-dark" style="padding:20px;">
                <li class="nav-item">
                   <h1 style="font-family:sans; color:rgb(54, 198, 119)"> Online Voting System </h1>
                </li>
            </ul>
            <nav class="navbar navbar-expand-lg  bg-light sticky-top">
                    <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                                <img src="images/admin.jpg" alt="Admin Panel Image" width="15%">
                                <b style="color:darkcyan">Admin Panel</b>
                    </a>
                        <button class="navbar-toggler navbar-light" type="button" data-bs-toggle="collapse"   data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"      aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#header">Home</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#Add Candidate">Add Candidate</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#total">Total Candidate</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>

                                </li>
                            </ul>
                        </div>
                    </div>
            </nav>
            <div id="header">
                <img src="images/vb2.jpg" style="width: 100%; height: auto; object-fit: contain;" alt="Description of the image">
            </div>
            <div class="container-fluid" id="AddCandidate">
    <div class="row">
        <!-- Form Section -->
        <div class="col-lg-8">
            <div class="form-container" id="Add Candidate">
                <h2 class="text-center mb-4" style="color: #333;">Add Candidate for Election</h2>
                <hr class="mb-4">
                <form action="AddCandidate.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <label for="candidateName" class="form-label">Candidate Name</label>
                            <input type="text" class="form-control" id="candidateName" name="cname" required placeholder="Enter candidate's name">
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="partyName" class="form-label">Party Name</label>
                            <input type="text" class="form-control" id="partyName" name="cparty" required placeholder="Enter party name">
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="selectSymbol" class="form-label">Select Symbol</label>
                            <input type="file" class="form-control" id="selectSymbol" name="symbol" required>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="photoUpload" class="form-label">Upload Photo</label>
                            <input type="file" class="form-control" id="photoUpload" name="photo" required>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg w-23">Submit</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Image Section -->
        <div class="col-lg-4 d-flex justify-content-center align-items-center">
            <img src="images/add.jpg" style="width: 100%; border-radius: 10px; box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);" alt="Add Candidate Image">
        </div>
    </div>
</div>
    <br><br>
                             
    <div class="container" id="total">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="text-center mb-4" style="color: #333;">Total List of Candidates</h2>
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Candidate Name</th>
                        <th scope="col">Party</th>
                        <th scope="col">Photo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><strong><?php echo $row['cname']; ?></strong></td>
                        <td><?php echo $row['cparty']; ?></td>
                        <td>
                            <img src="images/<?php echo $row['photo']; ?>" width="200" height="120" style="box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);">
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>