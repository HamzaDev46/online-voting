<?php
    session_start();
    $voterdata = $_SESSION['voterdata'];
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
        .nav-item a{
            color:whitesmoke;
            
           
        }
        .nav-item a:hover{
            color:whitesmoke;
            border-radius:7px;
            background:rgb(57, 159, 103);
        }
        #main-sec{
            box-shadow:2px 2px 10px rgba(0,0,0,0.9);
        }
    </style>
</head>
<body>
    <div class="w3-sidebar w3-bar-block w3-card w3-animate-right" style="display:none;right:0; width:100%" id="rightMenu">
        <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
        <a href="#" class="w3-bar-item w3-button">Link 1</a>
        <a href="#" class="w3-bar-item w3-button">Link 2</a>
        <a href="#" class="w3-bar-item w3-button">Link 3</a>
    </div>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand"><i class="fa fa-fw fa-globe"></i>Online Voting System</a>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-fw fa-home"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-fw fa-search"></i>Search</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-fw fa-envelope"></i>Contact Us</a>
                </li>
            </ul>
            <form class="d-flex">
                <button class="btn btn-outline-success" type="button" onclick="openRightMenu()">
                    <i class="fa fa-fw fa-user"></i>Admin Login
                </button>
            </form>
        </div>
    </nav>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">  
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/img1.webp" class="d-block w-100" height="350px" alt="...">
                <div class="carousel-caption d-md-block">
                    <h5>Welcome to the Online Voting System</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div> 
        </div>
    </div>
    <br><br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <div class="w3-container">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="card-header"><marquee style="color:red">You can only vote one candidate</marquee></div>
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="../VoterImg/<?php echo $voterdata['photo'] ?>" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color:blue">Voter Detail</h5>
                                            <p class="card-text">
                                               <li>Name: <?php echo $voterdata['name'] ?></li>
                                               <li>Mobile No: <?php echo $voterdata['mobile'] ?></li>
                                               <li>Cnic No: <?php echo $voterdata['cnic'] ?></li>
                                            </p>
                                            <h5 class="card-title">Status</h5>
                                        </div>
                                    </div>
                                </div>
                        </div>
                </div>
            </div>
            <div class="col-sm-8">
                   <table class="table" id="main-sec">
                        <thead>
                            <tr>
                           
                            <th scope="col">Candidate Detail</th>
                            <th scope="col">Symbol</th>
                            <th scope="col">Photo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>@mdo</td>
                            </tr>
                           
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
    <script>
        function openRightMenu() {
            document.getElementById("rightMenu").style.display = "block";
        }

        function closeRightMenu() {
            document.getElementById("rightMenu").style.display = "none";
        }
    </script>
</body>
