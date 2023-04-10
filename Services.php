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










        <!-- Services start  -->
        <!-- tab start -->
        <div id="service" class="othersection tab-content mb-5">
            <h2 class="text-center text-secondary font-weight-bold pt-3 pt-lg-5 pb-1 pb-lg-2">Our Services</h2>
            <h4 class="font-weight-bold mb-1 mb-lg-2 text-capitalize ms-3 text-decoration-underline">Stay healthy - stay
                safe</h4>
            <p class="ms-1 ms-md-2 ms-lg-3">When you visit RUET Medical Center, you'll gain access to advanced
                technology, treatments, research and types of healthcare services that may not be available elsewhere.
                You can feel confident that you're being treated by our world-renowned experts, who deliver
                compassionate, comprehensive and individualized care.</p>

            <ul class="nav nav-tabs justify-content-center">
                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#xray">X-ray</a></li>
                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#mri">MRI</a></li>
                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#ct-scan">CT Scan</a></li>
                <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#eye-test">Eye Test</a></li>
            </ul>


            <div class="tab-content">





                <div id="xray" class="tab-pane fade">
                    <div class="media p-3">
                        <img style="width: 150px;" class="align-self-center mb-3" src="image/xray.jpg" alt="X-ray">


                        <div class="media-body">
                            <h2 class="ms-1 ms-lg-3">X-ray</h2>
                            <p class="ms-1 ms-lg-3"> We do
                                Abdominal x-ray, Aortic angiography, Barium enema, Bone x-ray, Cerebral angiography,
                                Chest x-ray, Dental x-rays, Enteroclysis, Extremity x-ray, Hand x-ray,Intravenous
                                pyelogram,Joint x-ray, Lumbosacral spine x-ray, Lymphangiogram, Mesenteric angiography,
                                Neck x-ray, Pelvis x-ray, Percutaneous transhepatic cholangiogram,Pulmonary angiography,
                                Renal arteriography, Renal venogram, Retrograde cystography, Sialogram, Sinus x-ray,
                                Skull x-ray, Thoracic spine x-ray, Upper GI and small bowel series, Venogram, Voiding
                                cystourethrogram, X-ray - skeleton.</p>

                        </div>
                    </div>
                </div>




                <div id="mri" class="tab-pane fade">
                    <div class="media p-3">
                        <img style="width: 150px;" class="align-self-center mb-3" src="image/mri.avif" alt="MRI">


                        <div class="media-body">
                            <h2 class="ms-1 ms-lg-3">Magnetic resonance imaging(MRI)</h2>
                            <p class="ms-1 ms-lg-3">Our radiologists will interpret your MRI study and issue a detailed,
                                informative and definitive (when possible) written MRI second opinion report of our
                                findings.
                                If requested, compare your MRI radiology second opinion test to previous radiology exams
                                you've had.
                                Comment on the quality of MRI exam and recommend a repeat study if the quality is not
                                adequate.
                                Make a specific recommendation for further course of action or follow up examination.
                            </p>

                        </div>
                    </div>
                </div>



                <div id="ct-scan" class="tab-pane fade">
                    <div class="media p-3">
                        <img style="width: 150px;" class="align-self-center mb-3" src="image/cityscan.jpg"
                            alt="ct-scan">


                        <div class="media-body">
                            <h2 class="ms-1 ms-lg-3">CT-Scan</h2>
                            <p class="pb-3 ms-1 ms-lg-3">A CT scan can be used to examine many parts of the body. The
                                specifics of your procedure at Atlantic Medical Imaging may vary depending on what the
                                doctor is looking for and your current medical condition. <br>
                                Here we do:

                            <h4 class="ms-1 ms-lg-3">1. CT Scan Abdomen:</h4>
                            <p class="pb-3 ms-1 ms-lg-3">CT imaging of the abdomen is an examination that uses x-rays to
                                visualize several types of tissue, including organs such as the liver, spleen, pancreas,
                                and kidneys. Using specialized equipment and expertise to create and interpret CT scans
                                of the lower gastrointestinal (GI) tract, colon, and rectum, an experienced radiologist
                                can accurately diagnose many causes of abdominal pain.</p>

                            <h4 class="ms-1 ms-lg-3">2. CT Angiography (CT Angiogram):</h4>
                            <p class="pb-3 ms-1 ms-lg-3">CT scans can be used to assess a patient's risk for heart
                                disease in a procedure known as CT Angiography (CTA). Atlantic Medical Imaging was the
                                first imaging practice in the area to offer the highly esteemed Coronary CTA procedure.
                                In this imaging test, a contrast dye is injected into the arteries. The CT scanner then
                                takes x-rays to create an image of blood flow in the body, which should be highlighted
                                thanks to the contrast dye.CT Angiography can detect signs of heart disease in the
                                earliest stages.</p>

                            <h4 class="ms-1 ms-lg-3">3. CT Scan Chest:</h4>
                            <p class="pb-3 ms-1 ms-lg-3">CT scanning of the chest uses special equipment to obtain
                                multiple cross-sectional images of the organs and tissues of the chest. CT produces
                                images that are far more detailed than a conventional chest x-ray and is especially
                                useful because it can simultaneously show many different types of tissue including the
                                lungs, heart, bones, soft tissues, muscle, and blood vessels.Chest CT also can be used
                                to diagnose various lung disorders </p>

                            <h4 class="ms-1 ms-lg-3">4. CT Scan Head (CT Scan Brain):</h4>
                            <p class="pb-3 ms-1 ms-lg-3">CT scanning of the head is an examination that provides
                                detailed information on head injuries, brain tumors, and other brain diseases. It also
                                can show bone, soft tissues, and blood vessels in the same images.</p>

                            <h4 class="ms-1 ms-lg-3">4. CT Scan Head (CT Scan Brain):</h4>
                            <p class="pb-3 ms-1 ms-lg-3">CT scanning of the head is an examination that provides
                                detailed information on head injuries, brain tumors, and other brain diseases. It also
                                can show bone, soft tissues, and blood vessels in the same images.</p>

                            <h4 class="ms-1 ms-lg-3">4. CT Scan Spine:</h4>
                            <p class="pb-3 ms-1 ms-md-3">CT scanning of the spine is a type of x-ray examination that
                                uses a scanner to obtain multiple images of the spinal column, as well as
                                three-dimensional images if needed. CT images are far more detailed than those obtained
                                by a conventional x-ray unit. In addition, CT is a very useful diagnostic method because
                                it can display and distinguish many different types of tissue in the same region,
                                including bone, muscle, soft tissue and blood vessels. The bony structure of the spinal
                                vertebrae is clearly and accurately shown by CT scanning, as are the intervertebral
                                disks and, to some degree, the spinal cord.</p>






                            </p>

                        </div>
                    </div>
                </div>






                <div id="eye-test" class="tab-pane fade">
                    <div class="media p-3">
                        <img style="width: 150px;" class="align-self-center mb-3" src="image/eye test.JPG"
                            alt="ct-scan">


                        <div class="media-body">
                            <h2 class="ms-1 ms-lg-3">Eye Test</h2>
                            <p class="pb-3 ms-1 ms-lg-3">An eye examination is a series of tests performed to assess vision and ability to focus on and discern objects. It also includes other tests and examinations pertaining to the eyes. Eye examinations are primarily performed by an optometrist, ophthalmologist, or an orthoptist. Health care professionals often recommend that all people should have periodic and thorough eye examinations as part of routine primary care, especially since many eye diseases are asymptomatic. <br>
                                Here we do:

                            <h4 class="ms-1 ms-lg-3">1.Visual Acuity Test:</h4>
                            <p class="pb-3 ms-1 ms-lg-3">Visual acuity is the eyes ability to detect fine details and is the quantitative measure of the eye's ability to see an in-focus image at a certain distance. The standard definition of normal visual acuity (20/20 or 6/6 vision) is the ability to resolve a spatial pattern separated by a visual angle of one minute of arc. The terms 20/20 and 6/6 are derived from standardized sized objects that can be seen by a "person of normal vision" at the specified distance. For example, if one can see at a distance of 20 ft an object that normally can be seen at 20 ft, then one has 20/20 vision. If one can see at 20 ft what a normal person can see at 40 ft, then one has 20/40 vision. Put another way, suppose you have trouble seeing objects at a distance and you can only see out to 20 ft what a person with normal vision can see out to 200 feet, then you have 20/200 vision. The 6/6 terminology is used in countries using the metric system, and that represents the distance in metres.</p>

                            <h4 class="ms-1 ms-lg-3">2. Refraction:</h4>
                            <p class="pb-3 ms-1 ms-lg-3">In physics, "refraction" is the mechanism that bends the path of light as it passes from one medium to another, as when it passes from the air through the parts of the eye. In an eye exam, the term refraction is the determination of the ideal correction of refractive error. Refractive error is an optical abnormality in which the shape of the eye fails to bring light into sharp focus on the retina, resulting in blurred or distorted vision. Examples of refractive error are myopia, hyperopia, presbyopia and astigmatism. The errors are specified in diopters, in a similar format to an eyeglass prescription. A refraction procedure consists of two parts: objective and subjective.</p>

                            <h4 class="ms-1 ms-lg-3">3.Objective refraction:</h4>
                            <p class="pb-3 ms-1 ms-lg-3">An objective refraction is a refraction obtained without receiving any feedback from the patient, using a retinoscope or auto-refractor.

                                To perform a retinoscopy, the doctor projects a streak of light into a pupil. A series of lenses are flashed in front of the eye. By looking through the retinoscope, the doctor can study the light reflex of the pupil. Based on the movement and orientation of this retinal reflection, the refractive state of the eye is measured.
                                
                                An auto-refractor is a computerized instrument that shines light into an eye. The light travels through the front of the eye, to the back and then forward through the front again. The information bounced back to the instrument gives an objective measurement of refractive error without asking the patients any questions.</p>

                            <h4 class="ms-1 ms-lg-3">4.Subjective refraction:</h4>
                            <p class="pb-3 ms-1 ms-lg-3">A subjective refraction requires responses from the patient. Typically, the patient will sit behind a phoropter or wear a trial frame and look at an eye chart. The eye care professional will change lenses and other settings while asking the patient for feedback on which set of lenses give the best vision.</p>

                            <h4 class="ms-1 ms-lg-3">5.Cycloplegic refraction:</h4>
                            <p class="pb-3 ms-1 ms-lg-3">Sometimes, eye care professionals prefer to obtain a cycloplegic refraction, especially when trying to obtain an accurate refraction in young children who may skew refraction measurements by adjusting their eyes with accommodation. Cycloplegic eye drops are applied to the eye to temporarily paralyze the ciliary muscle of the eye.</p>

                            <h4 class="ms-1 ms-lg-3">6. Pupil function:</h4>
                            <p class="pb-3 ms-1 ms-md-3">An examination of pupilary function includes inspecting the pupils for equal size (1 mm or less of difference may be normal), regular shape, reactivity to light, and direct and consensual accommodation. These steps can be easily remembered with the mnemonic PERRLA (D+C): Pupils Equal and Round; Reactive to Light and Accommodation (Direct and Consensual).

                                A swinging-flashlight test may also be desirable if neurologic damage is suspected. The swinging-flashlight test is the most useful clinical test available to a general physician for the assessment of optic nerve anomalies. This test detects the afferent pupil defect, also referred to as the Marcus Gunn pupil. It is conducted in a semidarkened room. In a normal reaction to the swinging-flashlight test, both pupils constrict when one is exposed to light. As the light is being moved from one eye to another, both eyes begin to dilate, but constrict again when light has reached the other eye.
                                
                                If there is an efferent defect in the left eye, the left pupil will remain dilated regardless of where the light is shining, while the right pupil will respond normally. If there is an afferent defect in the left eye, both pupils will dilate when the light is shining on the left eye, but both will constrict when it is shining on the right eye. This is because the left eye will not respond to external stimulus (afferent pathway), but can still receive neural signals from the brain (efferent pathway) to constrict.
                                
                                If there is a unilateral small pupil with normal reactivity to light, it is unlikely that a neuropathy is present. However, if accompanied by ptosis of the upper eyelid, this may indicate Horner's syndrome.
                                
                                If there is a small, irregular pupil that constricts poorly to light, but normally to accommodation, this is an Argyll Robertson pupil.</p>



                                <h4 class="ms-1 ms-lg-3">7.Ocular motility:</h4>
                                <p class="pb-3 ms-1 ms-lg-3">Ocular motility should always be tested, especially when patients complain of double vision or physicians suspect neurologic disease. First, the doctor should visually assess the eyes for deviations that could result from strabismus, extraocular muscle dysfunction, or palsy of the cranial nerves innervating the extraocular muscles. Saccades are assessed by having the patient move his or her eye quickly to a target at the far right, left, top and bottom. This tests for saccadic dysfunction whereupon poor ability of the eyes to "jump" from one place to another may impinge on reading ability and other skills, whereby the eyes are required to fixate and follow a desired object.

                                    The patient is asked to follow a target with both eyes as it is moved in each of the nine cardinal directions of gaze. The examiner notes the speed, smoothness, range and symmetry of movements and observes for unsteadiness of fixation. These nine fields of gaze test the extraocular muscles: inferior, superior, lateral and medial rectus muscles, as well as the superior and inferior oblique muscles.</p>





                                <h4 class="ms-1 ms-lg-3">8.Slit-lamp:</h4>
                                <p class="pb-3 ms-1 ms-lg-3">Close inspection of the anterior eye structures and ocular adnexa are often done with a slit lamp which is a table mounted microscope with a special adjustable illumination source attached. A small beam of light that can be varied in width, height, incident angle, orientation and colour, is passed over the eye. Often, this light beam is narrowed into a vertical "slit", during slit-lamp examination. The examiner views the illuminated ocular structures, through an optical system that magnifies the image of the eye and the patient is seated while being examined, and the head stabilized by an adjustable chin rest.

                                    This allows inspection of all the ocular media, from cornea to vitreous, plus magnified view of eyelids, and other external ocular related structures. Fluorescein staining before slit lamp examination may reveal corneal abrasions or herpes simplex infection.
                                    
                                    The binocular slit-lamp examination provides stereoscopic magnified view of the eye structures in striking detail, enabling exact anatomical diagnoses to be made for a variety of eye conditions.
                                    
                                    Also ophthalmoscopy and gonioscopy examinations can also be performed through the slit lamp when combined with special lenses. These lenses include the Goldmann 3-mirror lens, gonioscopy single-mirror/Zeiss 4-mirror lens for (ocular) anterior chamber angle structures and +90D lens, +78D lens, +66D lens & Hruby (-56D) lens, the examination of retinal structures is accomplished.
                                    
                                    Intraocular pressure
                                    Intraocular pressure (IOP) can be measured by tonometry devices. The eye can be thought of as an enclosed compartment through which there is a constant circulation of fluid that maintains its shape and internal pressure. Tonometry is a method of measuring this pressure using various instruments. The normal range is 10-21 mmHg.</p>






                                <h4 class="ms-1 ms-lg-3">9.Retinal examination:</h4>
                                <p class="pb-3 ms-1 ms-lg-3">Examination of retina (fundus examination) is an important part of the general eye examination. Dilating the pupil using special eye drops greatly enhances the view and permits an extensive examination of peripheral retina. A limited view can be obtained through an undilated pupil, in which case best results are obtained with the room darkened and the patient looking towards the far corner. The appearance of the optic disc and retinal vasculature are also recorded during fundus examination.

                                    A red reflex can be seen when looking at a patient's pupil through a direct ophthalmoscope. This part of the examination is done from a distance of about 50 cm and is usually symmetrical between the two eyes. An opacity may indicate a cataract.
                                    
                                    
                                    Using a phoropter to determine a prescription for eyeglasses
                                    Retinal vessel analysis is a non-invasive method to examine the small arteries and veins in the retina which allows to draw conclusions about the morphology and the function of small vessels elsewhere in the human body and is used in particular by cardiologists as well as ophthalmologists.</p>
                           





                            </p>

                        </div>
                    </div>
                </div>








            </div>

        </div>

        <!-- tab end  -->
        <!-- Services end -->



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