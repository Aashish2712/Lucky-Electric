<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" href="index.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <!-- google fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet" />

    <title>Lucky Electric</title>
</head>


<body>
    <?php require 'parts\header_.php';
    ?>
    <div class="d-flex flex-row">



        <div class="d-flex flex-column flex-shrink-0 p-3 bg-light my-5 mx-3" style="width: 250px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <!-- <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg> -->
                <span class="fs-4"> User name </span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="profile.php" class="nav-link active " aria-current="page">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#home"></use>
                        </svg>
                        <img class="mx-2" src="images/profile.svg">
                        My profile
                    </a>
                </li>

                <a href="order.php" class="nav-link link-dark">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#table"></use>
                    </svg>
                    <img class="mx-2" src="images/order.svg">
                    Orders
                </a>
                </li>

                <li>
                    <a href="address.php" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#people-circle"></use>
                        </svg>
                        <img class="mx-2" src="images/address.svg">

                        Addresses
                    </a>
                </li>
                <li>
                    <a href="payment.php" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#grid"></use>
                        </svg>
                        <img class="mx-2" src="images/payment.svg">
                        Payment
                    </a>
                </li>
            </ul>
            <hr>
            <!-- <div class="dropdown">
                <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
                    id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>mdo</strong>
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div> -->
        </div>







        <div class="row col-lg-8 border rounded mx-3 my-5 p-5 shadow-lg bg-white ">
            <div class="col-md-4 text-center">
                <img src="" class="img-fluid rounded" style="width: 180px;height:180px;object-fit: cover;">
                <div>



                    <a href="profile-edit.php">
                        <button class="mx-auto  btn-sm btn btn-primary">Edit</button>
                    </a>
                    <a href="profile-delete.php">
                        <button class="mx-auto  btn-sm btn btn-warning text-white">Delete</button>
                    </a>
                    <a href="logout.php">
                        <button class="mx-auto  btn-sm btn btn-info text-white">Logout</button>
                    </a>

                </div>
            </div>
            <div class="col-md-8">
                <div class="h2">User Profile</div>
                <table class="table table-striped">
                    <tr>
                        <th colspan="2">User Details:</th>
                    </tr>
                    <tr>
                        <th><i class="bi bi-envelope"></i> Email</th>
                        <td>rw </td>
                    </tr>
                    <tr>
                        <th><i class="bi bi-person-circle"></i> First name</th>
                        <td>rw</td>
                    </tr>
                    <tr>
                        <th><i class="bi bi-person-square"></i> Last name</th>
                        <td>rw</td>
                    </tr>
                    <tr>
                        <th><i class="bi bi-gender-ambiguous"></i> Gender</th>
                        <td>rw</td>
                    </tr>
                </table>
            </div>
            <a href="index.php">
                <button class="btn btn-primary m-4">Home</button>
            </a>
        </div>

    </div>


    <!-- <div class="text-center alert alert-danger">That profile was not found</div> -->





















    <?php require 'parts/footer_.php'; ?>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>