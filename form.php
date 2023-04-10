<?php
// Start the session
session_start();
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appoinment Form</title>


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- CSS only -->

    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!-- font awesome cdn -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">


</head>

<body>


        <!-- Navbar starts -->

        <header class="mb-3">
        <nav class="navbar navbar-expand-md navbar-bg-color navbar-dark ">
            <a href="#" class="navbar-brand">
                <img class="rounded" src="image/ruet_logo_900x900.png" alt="logo" style="width: 125px; height: 100px; margin-left: 20px;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto ">


                    <li class="nav-item active "><a class="nav-link navbar-icon font-color" href="home.php">Home</a></li>

                    <li class="nav-item active "><a class="nav-link navbar-icon font-color" href="form.php">Appointment</a></li>


                    <li class="nav-item"><a class="nav-link navbar-icon font-color" href="Doctor_List.php">Doctors</a></li>
                    <li class="nav-item"><a class="nav-link navbar-icon font-color" href="Services.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link navbar-icon font-color" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link navbar-icon font-color" href="contact.php">Contact</a></li>



<!-- 
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle navbar-icon font-color" href="#" id="sign-in" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Sign-In
                        </a>
                        <ul class="dropdown-menu log-in-sub" aria-labelledby="sign-in">
                            <li><a class="dropdown-item navbar-icon " href="#">Admin Sign In</a></li>
                            <li><a class="dropdown-item navbar-icon" href="#">Doctor Sign In</a></li>
                            <li><a class="dropdown-item navbar-icon" href="#">Patient Sign In</a></li>
                        </ul>
                    </li> -->

                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle navbar-icon font-color " href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Log-In
                        </a>
                        <ul class="dropdown-menu log-in-sub" aria-labelledby="navbarDropdownMenuLink ">
                            <li><a class="dropdown-item navbar-icon " href="#">Admin Log In</a></li>
                            <li><a class="dropdown-item navbar-icon" href="#">Doctor Log In</a></li>
                            <li><a class="dropdown-item navbar-icon" href="#">Patient Log In</a></li>
                        </ul>
                    </li> -->


                </ul>
            </div>
        </nav>
    </header>


<!-- navbar ends -->



<main>

    <form class="row g-3 w-auto form">
        <h5 class="text-center text-capitalize pb-4 text-decoration-underline registation-form-heading">appointment Form</h5>


        <div class="col-md-4 col-lg-4 col-sm-12">
          <label for="validationDefault01" class="form-label">First name</label>
          <input type="text" class="form-control" id="validationDefault01" placeholder="Enter you First Name" required>
        </div>


        <div class="col-md-4 col-lg-4 col-sm-12">
            <label for="validationDefault01" class="form-label">Middle name</label>
            <input type="text" class="form-control" id="validationDefault02" placeholder="Enter you Middle Name if you have">
          </div>



        <div class="col-md-4 col-lg-4 col-sm-12">
          <label for="validationDefault02" class="form-label">Last name</label>
          <input type="text" class="form-control" id="validationDefault03" placeholder="Enter you Last Name" required>
        </div>


        <div class="col-md-4 col-lg-4 col-sm-12">
          <label for="validationDefaultUsername" class="form-label">Username</label>
          <div class="input-group">
            <span class="input-group-text" id="inputGroupPrepend2">@</span>
            <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
          </div>
        </div>


        <div class="col-md-4 col-lg-4 col-sm-12">
          <label for="validationDefault03" class="form-label">Phone Number</label>
          <input type="text" class="form-control" id="validationDefault04" placeholder="+880" required>
        </div>

        <div class="col-md-4 col-lg-4 col-sm-12">
            <label for="validationDefault03" class="form-label">E-Mail</label>
            <input type="text" class="form-control" id="validationDefault05" placeholder="rahulkundu@gmail.com" required>
          </div>



        <div class="col-md-4 col-sm-2 col-lg-4">
          <label for="validationDefault04" class="form-label">Department</label>
          <select class="form-select" id="validationDefault06" required>
            <option selected disabled value="">Choose...</option>
            <option>ECE</option>
            <option>EEE</option>
            <option>CSE</option>
            <option>ETE</option>
            <option>CIVIL</option>
            <option>BECM</option>
            <option>URP</option>
            <option>Arcritecture</option>
            <option>ME</option>
            <option>MTE</option>
            <option>MSE</option>
            <option>CFPE</option>
            <option>GCE</option>
            <option>IPE</option>
          </select>
        </div>


        <div class="col-md-4 col-sm-2 col-lg-4">
          <label for="validationDefault03" class="form-label">Series</label>
          <input type="text" class="form-control" id="validationDefault07" placeholder="series" required>
          </div>



        <div class="col-md-4 col-sm-2 col-lg-4">
          <label for="validationDefault05" class="form-label">Roll No.</label>
          <input type="text" class="form-control" id="validationDefault08" placeholder="Roll" required>
        </div>


        <div class="col-12">
            <label for="validationDefault04" class="form-label">Choose Doctor</label>
            <select class="form-select" id="validationDefault09" required>
              <option selected disabled value="">Choose...</option>
              <option>Dr. Md. MOksed Ali</option>
              <option>Dr. Farida Yasmin</option>
              <option>Dr. Md. Azizul Islam</option>
              <option>Dr. Md. Joynal Abedin</option>
              <option>Dr. Atikul islam rashed</option>
              <option>Dr. Sultanul abedin titash</option>
              <option>Prof. Dr. M. Muhibur Rahman</option>
              <option>Prof. Dr. Mizanur Rahman</option>
              <option>Dr. Naznin Sultana Munni</option>
              <option>Prof. Dr. Sarwar Alam</option>
              <option>Prof. Dr. M. A. Azhar</option>
              <option>Dr. Nowshad ali</option>
            </select>
          </div>

          <h5 class="text-center  pb-2 pt-4">At which date you want to take your appointment?</h5>

          <div class="col-md-4 col-sm-2 col-lg-4">
            <label for="validationDefault05" class="form-label">Day</label>
            <input type="text" class="form-control" id="validationDefault10" placeholder="Day" required>
          </div>








          <div class="col-md-4 col-sm-2 col-lg-4">
            <label for="validationDefault04" class="form-label">Month</label>
            <select class="form-select" id="validationDefault11" required>
              <option selected disabled value="">Choose...</option>
              <option>January</option>
              <option>February</option>
              <option>March</option>
              <option>april</option>
              <option>May</option>
              <option>June</option>
              <option>July</option>
              <option>August</option>
              <option>September</option>
              <option>October</option>
              <option>November</option>
              <option>December</option>
            </select>
          </div>



          <div class="col-md-4 col-sm-2 col-lg-4">
            <label for="validationDefault05" class="form-label">Year</label>
            <input type="text" class="form-control" id="validationDefault12" placeholder="year" required>
          </div>







        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
            <label class="form-check-label" for="invalidCheck2">
              Agree to terms and conditions
            </label>
          </div>
        </div>
        <div class="col-12">
          <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
      </form>


      <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-5e518e38-4e39-4eaa-aef7-8b47f33e6c1d"></div>



    </main>



    <footer class="  p-3 footer-bg-color mt-3">


        <p class="pagination justify-content-center text-warning ">Copyright © 2022 Rahul Kumar Kundu(Student at
            Drpartment of ECE, RUET). All right reserved</p>

    </footer>




    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>

    <!-- JavaScript end  -->
</body>

</html>