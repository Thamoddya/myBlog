<?php
session_start();
if (empty($_SESSION['adminEmail'])) {
    header('Location: ./adminLogin.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN - KNOWLADGE ADDICYT</title>
    <?php
    include_once "./includes/adminHead.include.php";
    ?>
</head>

<body class="bg-dark">

    <div class="container-fluid ">
        <div class="row">
            <div class="col-12 position-relative">
                <div id="mainNavigation">
                    <nav role="navigation">
                        <div class="py-3 text-center border-bottom">
                            <img src="./assets/images/Knowladge Addict new Logo 1.png" alt="" class="invert">
                        </div>
                    </nav>
                    <div class="navbar-expand-md">
                        <div class="navbar-dark text-center my-2">
                            <button class="navbar-toggler w-75" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span> <span class="align-middle">Menu</span>
                            </button>
                        </div>
                        <div class="text-center mt-3 collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav mx-auto ">
                                <li class="nav-item">
                                    <a class="nav-link active " aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#">Analytics</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Client</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Manage</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        More
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">Portfolio</a></li>
                                        <li><a class="dropdown-item" href="#">About Us</a></li>
                                        <li><a class="dropdown-item" href="#">Header</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-4 ">
                <table class="table table-bordered border-primary">
                    <tbody>
                        <tr>
                            <td class="table-active text-white text-center "><i class="bi bi-eye-fill"></i> 50</td>
                            <td class="table-active text-white text-center "><i class="bi bi-file-earmark-font"></i> 30</td>
                        </tr>
                        <tr>
                            <td class="table-active text-white text-center "><i class="bi bi-file-person-fill"></i> 12</td>
                            <td class="table-active text-white text-center "><i class="bi bi-person-circle"></i> 15 </td>
                        </tr>
                    </tbody>
                </table>

                <div class="row mt-2">

                    <div class="col-12">
                        <div>
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <?php
    include_once "./includes/adminBody.include.php";
    ?>
</body>

</html>