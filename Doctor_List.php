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











        <!-- doctor list start -->

        <div class="doctor-list mb-2 mb-lg-5 mt-2 mt-lg-5 p-2 " id="doctor">

            <div class="title text-center mb-3">
                <h2 class="font-weight-bolder mb-5 text-capitalize text-secondary">Doctors list:
                </h2>
            </div>




            <div class="row">
                <div class="col-lg-3 col-md-6 pb-5">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="image/male_doctor_400x300.jpg" alt="Doctor 1">
                        <div class="card-body">
                            <h4 class="card-title">Dr. Md. Moksed Ali</h4>
                            <h6>Chief Medical Officer<br>Medical Center, RUET</h6>
                            <p class="card-text">MBBS at </p>
                            <a class="card-link  stretched-link" target="_blank" href="form.php">
                                <a class="ms-1 ms-md-1 ms-lg-1 text-decoration-none text-center" href="form.php" data-bs-toggle="collapse"><button type="button" class="btn btn-info m-auto">Book Appoinment</button></a></a>
                        </div>
                       
                        <div class="card-footer">Email: dr.moksedali1111@gmail.com</div>

                    </div>
                </div>


                <div class="col-lg-3 col-md-6 pb-5">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="image/FEMALE_DOCTOR_1_400x300.png" alt="Doctor 2">
                        <div class="card-body">
                            <h4 class="card-title">Dr. Farida Yasmin</h4>
                            <h6>Deputy Chief Medical Officer<br>Medical Center, RUET</h6>
                            <p class="card-text"> MBBS at </p>
                            <a class="card-link  stretched-link" target="_blank" href="form.php">
                                <a class="ms-1 ms-md-1 ms-lg-1 text-decoration-none text-center" href="form.php" data-bs-toggle="collapse"><button type="button" class="btn btn-info m-auto">Book Appoinment</button></a></a>
                        </div>
                        <div class="card-footer">Contact No. : +8801914254004</div>

                    </div>
                </div>



                <div class="col-lg-3 col-md-6 pb-5">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="image/male_doctor_400x300.jpg" alt="Doctor 3">
                        <div class="card-body">
                            <h4 class="card-title">Dr. Md. Azizul Islam</h4>
                            <h6>Senior Medical Officer<br>Medical Center, RUET</h6>
                            <p class="card-text">MBBS at </p>
                            <a class="card-link  stretched-link" target="_blank" href="form.php">
                                <a class="ms-1 ms-md-1 ms-lg-1 text-decoration-none text-center" href="form.php" data-bs-toggle="collapse"><button type="button" class="btn btn-info m-auto">Book Appoinment</button></a></a>
                        </div>
                        <div class="card-footer">Contact No. : +8801712637265</div>

                    </div>
                </div>



                <div class="col-lg-3 col-md-6 pb-5">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="image/male_doctor_400x300.jpg" alt="Doctor 4">
                        <div class="card-body">
                            <h4 class="card-title">Md. Joynal Abedin</h4>
                            <h6>Assistant Principal Medical Technologist <br>Medical Center, RUET</h6>
                            <p class="card-text"> MBBS at Barisal Medical COlege(BMC)</p>
                            <a class="card-link  stretched-link" target="_blank" href="form.php">
                                <a class="ms-1 ms-md-1 ms-lg-1 text-decoration-none text-center" href="form.php" data-bs-toggle="collapse"><button type="button" class="btn btn-info m-auto">Book Appoinment</button></a></a>
                        </div>
                        <div class="card-footer">Contact No. : 01717627322</div>
                    </div>
                </div>



                <div class="col-lg-3 col-md-6 pb-5">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="image/Atikul_islam_rashed__4_400x300.jpg" alt="Doctor 5">
                        <div class="card-body">
                            <h4 class="card-title">Atikul islam rashed</h4>
                            <h6>Intern Doctor at Rajshahi Medical college hospital <br> 
                            Junior  laparoscopic surgeon.</h6>
                            <p class="card-text">MBBS at Rajshahi Medical College(RMC)</p>
                            <a class="card-link  stretched-link" target="_blank" href="form.php">
                                <a class="ms-1 ms-md-1 ms-lg-1 text-decoration-none text-center" href="form.php" data-bs-toggle="collapse"><button type="button" class="btn btn-info m-auto">Book Appoinment</button></a></a>
                        </div>
                        <div class="card-footer">Contact No. : 01717627388</div>
                    </div>
                </div>




                <div class="col-lg-3 col-md-6 pb-5">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="image/Sultanul_abedin_titash_886x498_1_600x498_1_400x300.jpg" alt="Doctor 6">
                        <div class="card-body">
                            <h4 class="card-title">Sultanul abedin titash</h4>
                            <h6>FCPS SURGERY.<br>General and laparoscopic surgeon. <br>Assistant Professor at Rajshahi Medical College, Rajshahi, Bangladesh </h6>
                            <p class="card-text">MBBS at Rajshahi Medical COlege(RMC)</p>
                            <a class="card-link  stretched-link" target="_blank" href="form.php">
                                <a class="ms-1 ms-md-1 ms-lg-1 text-decoration-none text-center" href="form.php" data-bs-toggle="collapse"><button type="button" class="btn btn-info m-auto">Book Appoinment</button></a></a>
                        </div>
                        <div class="card-footer">Contact No. : 01717627399</div>
                    </div>
                </div>

          







 
                <div class="col-lg-3 col-md-6 pb-5">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="image/Prof.-Dr.-M.-Muhibur-Rahman_1_400x300.jpg" alt="Doctor 7">
                        <div class="card-body">
                            <h4 class="card-title">Prof. Dr. M. Muhibur Rahman</h4>
                            <h6>Kidney Diseases & Medicine Specialist<br> </h6>
                            <p class="card-text">MBBS, FCPS (Medicine), MRCP (UK), PhD (Nephrology-UK), FISN (UK). <br>Sir Salimullah Medical College & Mitford Hospital</p>
                            <a class="card-link  stretched-link" target="_blank" href="form.php">
                                <a class="ms-1 ms-md-1 ms-lg-1 text-decoration-none text-center" href="form.php" data-bs-toggle="collapse"><button type="button" class="btn btn-info m-auto">Book Appoinment</button></a></a>
                            <div class="card-footer">Contact No. : 01717627300</div>
                        </div>
                      
                    </div>
                </div>






                <div class="col-lg-3 col-md-6 pb-5">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="image/Prof-Dr-Mizanur-Rahman_400x300.webp" alt="Doctor 8">
                        <div class="card-body">
                            <h4 class="card-title">Prof. Dr. Mizanur Rahman</h4>
                            <h6>Kidneys, Bladder, Ureters, Prostate, Male Sex Specialist & Surgeon<br> </h6>
                            <p class="card-text">MBBS, FCPS (Surgery), MS (Urology) <br> Dhaka Medical College & Hospital</p>
                            <a class="card-link  stretched-link" target="_blank" href="form.php">
                                <a class="ms-1 ms-md-1 ms-lg-1 text-decoration-none text-center" href="form.php" data-bs-toggle="collapse"><button type="button" class="btn btn-info m-auto">Book Appoinment</button></a></a>
                        </div>
                        <div class="card-footer">Contact No. : 01717625300</div>
                    </div>
                </div>
            </div>
            <a class="p-3  text-decoration-none" href="#dem" data-bs-toggle="collapse"><button type="button" class="btn btn-info">SEE MORE..</button></a>


                <div id="dem" class="collapse">

                    <div class="row">
                    <div class="col-lg-3 col-md-6 pb-5">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="image/Dr.-Naznin-Sultana-Munni_2_400x300.jpg" alt="Doctor 9">
                            <div class="card-body">
                                <h4 class="card-title">Dr. Naznin Sultana Munni</h4>
                                <h6>Oral & Dental Surgeon<br> </h6>
                                <p class="card-text">BDS, BCS (Health), FCPS (Orthodontics) <br>Rajshahi Medical College & Hospital </p>
                                <a class="card-link  stretched-link" target="_blank" href="form.php">
                                    <a class="ms-1 ms-md-1 ms-lg-1 text-decoration-none text-center" href="form.php" data-bs-toggle="collapse"><button type="button" class="btn btn-info m-auto">Book Appoinment</button></a></a>
                            </div>
                            <div class="card-footer">Contact No. : 01717925300</div>
                        </div>
                    </div>



                    <div class="col-lg-3 col-md-6 pb-5">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="image/male_doctor_400x300.jpg" alt="Doctor 10">
                            <div class="card-body">
                                <h4 class="card-title">Prof. Dr. Sarwar Alam</h4>
                                <h6>Eye Specialist, Cornea & Cataract Surgeon<br> </h6>
                                <p class="card-text">MBBS, DO, FCPS (EYE) <br>Ispahani Islamia Eye Institute & Hospital</p>
                                <a class="card-link  stretched-link" target="_blank" href="form.php">
                                    <a class="ms-1 ms-md-1 ms-lg-1 text-decoration-none text-center" href="form.php" data-bs-toggle="collapse"><button type="button" class="btn btn-info m-auto">Book Appoinment</button></a></a>
                            </div>
                            <div class="card-footer">Contact No. : 01719925300</div>
                        </div>
                    </div>





                    <div class="col-lg-3 col-md-6 pb-5">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="image/Prof.-Dr.-M.-A.-Azhar_1_1_400x300.jpg" alt="Doctor 11">
                            <div class="card-body">
                                <h4 class="card-title">Prof.-Dr.-M.-A.-Azhar</h4>
                                <h6>hematologist<br> </h6>
                                <p class="card-text">MBBS at Rajshahi Medical COlege(BMC)</p>
                                <a class="card-link  stretched-link" target="_blank" href="form.php">
                                    <a class="ms-1 ms-md-1 ms-lg-1 text-decoration-none text-center" href="form.php" data-bs-toggle="collapse"><button type="button" class="btn btn-info m-auto">Book Appoinment</button></a></a>
                            </div>
                            <div class="card-footer">Contact No. : 01719925300</div>
                        </div>
                    </div>





                    <div class="col-lg-3 col-md-6 pb-5">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="image/Nowshad_ali_1_400x300.jpg" alt="Doctor 12">
                            <div class="card-body">
                                <h4 class="card-title">Nowshad ali</h4>
                                <h6>Pediatric surgeon<br> </h6>
                                <p class="card-text">MBBS at Rajshahi Medical COlege(BMC)</p>
                                <a class="card-link  stretched-link" target="_blank" href="form.php">
                                    <a class="ms-1 ms-md-1 ms-lg-1 text-decoration-none text-center" href="form.php" data-bs-toggle="collapse"><button type="button" class="btn btn-info m-auto">Book Appoinment</button></a></a>
                            </div>
                            <div class="card-footer">Contact No. : 01769925300</div>
                        </div>
                    </div>







                </div>





            </div>

        </div>




        <!-- doctor list ends -->

        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-5e518e38-4e39-4eaa-aef7-8b47f33e6c1d"></div>

</main>

        <footer class="  p-3 footer-bg-color">


            <p class="pagination justify-content-center text-warning ">Copyright © 2022 Rahul Kumar Kundu(Student at
                Drpartment of ECE, RUET). All right reserved</p>

        </footer>













        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>



</body>

</html>