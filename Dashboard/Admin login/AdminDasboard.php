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
                                <a class="nav-link active" aria-current="page" href="#">Total Candidate</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
            </nav>
            <div id="header">
                <img src="images/vb2.jpg" style="width: 100%; height: auto; object-fit: contain;" alt="Description of the image">
            </div>
            <div class="container-fluid" id="Add Candidate">
        <div class="row">
            <!-- Form Section -->
            <div class="col-sm-8">
    <div class="form-container">
        <h2>Add Candidate For Election</h2><br><hr/><br>
        <div class="row">
            <div class="col-sm-6">
                <form action="AddCandidate.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="candidateName" class="form-label">Candidate Name</label>
                        <input type="text" class="form-control" id="candidateName" name="cname" required>
                    </div>
                    <div class="mb-3">
                        <label for="partyName" class="form-label">Party Name</label>
                        <input type="text" class="form-control" id="partyName" name="cparty" required>
                    </div> 
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="selectSymbol" class="form-label">Select Symbol</label>
                    <input type="file" class="form-control" id="selectSymbol" name="symbol" required>
                </div>
                <div class="mb-3">
                    <label for="photoUpload" class="form-label">Photo</label>
                    <input type="file" class="form-control" id="photoUpload" name="photo" required>
                </div> 
                <button type="submit" class="btn btn-primary"width="100%">Submit</button>
                </form>
            </div>
        </div>                            
    </div>
</div>


            <!-- Image Section -->
            <div class="col-sm-4 image-container">
                <img src="images/add.jpg" style="width: 100%; border-radius: 10px;" alt="Description of the image">
            </div>
        </div>
    </div>
</body>
</html>