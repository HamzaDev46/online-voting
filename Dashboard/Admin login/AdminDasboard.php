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
            
           
        }
        .nav-item a:hover{
            background:rgb(54, 198, 119);
            color:whitesmoke;
            border-radius:7px;
        }
    </style>
</head>
<body>
            <ul class="nav justify-content-center bg-dark" style="padding:20px;">
                <li class="nav-item">
                   <h1 style="font-family:sans; color:rgb(54, 198, 119)"> Online Voting System </h1>
                </li>
            </ul>
            <nav class="navbar navbar-expand-lg  bg-light">
                    <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                                <img src="images/admin.jpg" alt="Admin Panel Image" width="15%">
                                <b style="color:darkcyan">Admin Panel</b>
                    </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"   data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"      aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Add Candidate</a>
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
</body>
</html>