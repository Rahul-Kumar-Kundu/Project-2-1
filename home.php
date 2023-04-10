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
    <title>RUET Medical Center</title>




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

<?php
    //   session_start();
      if(isset($_GET['logged'])){
          echo "<h4 style='color:greenyellow;text-align: center;margin: 0;font-size: 30px;padding: 0;font-weight: bold;'>Welcome</h4>";
      }
      ?>
   
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


                    <li class="nav-item active "><a class="nav-link navbar-icon font-color" href="#home">Home</a></li>

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









    <main >



        <!-- home start  -->

        <div class="container text-white">
            <section id="home">
                <div class="section-title">
                    <h3 class="text-center text-white"></h3>
                </div>


                <div class="row">
                    <div class="col-lg 12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                    aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                                    aria-label="Slide 5"></button>
                            </div>


                            <div class="carousel-inner">
                                <div class="carousel-item active text-center">
                                    <h4 class="text-capitalize mb-2">Welcome To..</h4>
                                    <img src="image/rmc1.jpg" class="d-block w-75 m-auto rounded" alt="Rmc1">
                                    <h4 class="text-capitalize  mt-2">ruet medical center </h4>
                                </div>

                                <div class="carousel-item text-center">
                                    <h4 class="text-capitalize mb-2">Provide an exceptioanal </h4>
                                    <img src="image/doctors-group 2.jpg" class="d-block w-75 m-auto rounded"
                                        alt="Doctor">
                                    <h4 class="text-capitalize  mt-2"> patient experience here. </h4>
                                </div>


                                <div class="carousel-item text-center">
                                    <h4 class="text-capitalize mb-2">A sound mind in </h4>
                                    <img src="image/sound mind in a sound body.jpg" class="d-block w-75 m-auto rounded"
                                        alt="Sound-Mind">
                                    <h4 class="text-capitalize mt-2">a sound body</h4>
                                </div>


                                <div class="carousel-item text-center">
                                    <h4 class="text-capitalize mb-2">Daily exercise </h4>
                                    <img src="image/exercisemain.webp" class="d-block w-75 m-auto rounded"
                                        alt="Erercise">
                                    <h4 class="text-capitalize mt-2">keeps you healthy</h4>
                                </div>

                                <div class="carousel-item text-center">
                                    <h4 class="text-capitalize mb-2">a balanced diet </h4>
                                    <img src="image/balanced diet.jpg" class="d-block w-75 m-auto rounded"
                                        alt="Balenced-Diet">
                                    <h4 class="text-capitalize mt-2">will keep you fresh</h4>
                                </div>

                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                </div>

            </section>
        </div>

        <!-- home end  -->









        <!-- About  us start  -->

        <div class="mt-5 mb-5" id="about">
            <h2 class="text-center text-secondary">About Us</h2>
            <p class="ms-1 ms-md-2 ms-lg-3">An on campus medical center provides primary and basic health care
                facilities to the students (residential and non-residential) free of charges. Three MBBS doctors and
                other staffs provide these facilities to the students. For specialized consultation on complicated
                cases, the center refers the patients to specialist consultants.
            </p>

            <a class="ms-1 ms-md-2 ms-lg-3 text-decoration-none" href="#demo" data-bs-toggle="collapse"><button type="button" class="btn btn-info">LEARN MORE..</button></a>


            <div id="demo" class="collapse ms-1 ms-md-2 ms-lg-3">
                <div>
                    <h4>Service Time:</h4>
                    <p>Saturday-Thursday: 07:30AM to 10:00PM, Lunch Break: 1:30PM to 3:00PM. </p>
                    <h6>Friday: Off Day.</h6>
                    <p> <span style="font-weight:bold ;">Ambulance: </span> 24 hours Every Day.</p>
                    <p><span style="font-weight:bold ;">Note:</span>For Ambulance service please contact any of the
                        above respectable doctors.</p>
                </div>


            </div>
        </div>


                                        <!-- About us end -->










        <!--                                         Contact us start                            -->




        <div id="contact" class="contact-bg-color mt-5 mb-5 p-3">
            <h3 class="text-center font-weight-bolder  text-white">Contact Us</h3>


            <p class="text-center text-black">



                <span>
                    <a target="_blank" class="ms-1 text-white" href="tel:+8801718401558">
                        <button type="button" class="btn btn-close-white"><i class="fa-solid fa-phone icon"></i></button></a>
                </span>



                <span>
                    <a class="ms-1 text-white" href="mailto:rahulkundu18182112@gmail.com">
                        <button type="button" class="btn btn-close-white"><i
                                class="fa-solid fa-envelope icon"></i></button></a>
                </span>


                <span>
                    <a target="_blank" class="ms-1 text-white" href="https://www.facebook.com/RahulKunduUttpal">
                        <button type="button" class="btn btn-close-white"><i class="fa-brands fa-square-facebook icon"></i></button></a>
                </span>




                <span>
                    <a target="_blank" class="ms-1 text-white" href="https://goo.gl/maps/G5WAGLDJD6pkdPCPA">
                        <button type="button" class="btn btn-close-white"><i class="fa-solid fa-location-dot icon"></i></button></a>
                </span>


            </p>





        </div>


        <!-- contact us end  -->

        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-5e518e38-4e39-4eaa-aef7-8b47f33e6c1d"></div>




    </main>













    <footer class="  p-3 footer-bg-color">


            <p class="pagination justify-content-center text-warning ">Copyright © 2022 Rahul Kumar Kundu(Student at Drpartment of ECE, RUET). All right reserved</p>

    </footer>



















    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</body>


</html>