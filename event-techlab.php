<?php
  //variables set for head.html, where these are used to show difference between pages
  $title = "TechLab: Creative Workshops - Dokk1";
  $descr = "";
  $keywords = "Technology, Art, Creation, Creativity, Creative Workshop, Library, Dokk1, 3D printer, laser cutting, laser cutter, lab, project";
  //includes everything from file below, without the file, website will show an error
  require("inc/head.html");
  // covered until </head>
 ?>

    <body>
        <div class="wrapper">
            <?php require("inc/header.html"); ?>
            <!-- take a look at the header.html file, there is a comment for you:) -->
            <main class="content">
                <section id="event-top">
                    <div id="event--header-image" class="event--header-image" style="background:url('images/event-techlab.jpg')">


                        <h2 class="event--date mob">21<br><span class="month">June</span><span class="time">15:30<br>-17:30</span></h2>


                        <div class="browse--bottom">
                            <h2 class="browse--header">TechLab: Creative Workshops</h2>
                            <h2 class="event--date des">21<br><span class="month">June</span><span class="time">15:30<br>-17:30</span></h2>

                            <p class="event--description"> Are you curious about 3D printing or laser cutting? Do you have a creative idea that you’d like to try? At TechLab you can come experiment with our 3D printer and laser cutter and get started on your own projects!
                            </p>
                        </div>

                    </div>
                </section>
                <section>
                    <h2 class="event--padding-left">Moments from past events!</h2>
                    <br>

                    <div id="flexImages">
                        <div>
                            <a class="leftArrow">←</a>
                        </div>
                        <div class="slide-pictures">
                            <img src="images/event-techlab2.jpeg" alt="Boy with 3D Printer at DOKK1">
                            <img src="images/event-techlab3.jpg" alt="3D Printing at DOKK1">
                            <img src="images/event-techlab4.jpg" alt="Laser Cutting Wood at DOKK1">                            <img src="images/event-techlab2.jpeg" alt="Boy with 3D Printer at DOKK1">
                            <img src="images/event-techlab3.jpg" alt="3D Printing at DOKK1">
                            <img src="images/event-techlab4.jpg" alt="Laser Cutting Wood at DOKK1">


                        </div>
                        <div>
                            <a class="rightArrow">→</a>
                        </div>
                    </div>
                    <br>



                </section>



                <div class="flexContainer">
                    <section class="flexContainerItem first">
                        <p>There are staff members available to give help and guidance in using our machines, but it is expected that you can work independently.
                        </p>
                        <br>
                        <p>TechLab is free, however materials are limited.
                        </p>
                        <br>
                        <p>TechLab is open for anyone ages 12 and up. Come by to inspire and be inspired!</p>
                    </section>

                    <section class="flexContainerItem second">
                        <!-- BUTTON! -->
                        <button class="button--red-yellow no-mobile" id="myBtn">I AM ATTENDING</button>
                        <a class="button--red-yellow no-desktop button" href="signup.php">I AM ATTENDING</a>

                        <!-- The Modal -->
                        <div id="myModal" class="modal">

                            <!-- Modal content -->
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <iframe src="signup-frame.php" style="width:100%;height:100%"></iframe>
                            </div>

                        </div>

                        <br>
                        <h2>Look if your friends are joining!</h2>
                        <br>
                        <div id="slideImages" class="slide-facebook slide-pictures">
                            <img src="images/melissa.png" alt="yup">
                            <img src="images/petr.png" alt="Facebook Profile Picture">
                            <img src="images/shereen.png" alt="yup">
                            <img src="images/flo.png" alt="Facebook Profile Picture">
                            <img src="images/robert.jpg" alt="Facebook Profile Picture">
                            <img src="images/elis.jpg" alt="Facebook Profile Picture">
                            <img src="images/tyson.jpg" alt="Facebook Profile Picture">
                            <img src="images/simon.jpg" alt="Facebook Profile Picture">
                            <img src="images/chris.jpg" alt="Facebook Profile Picture">
                        </div>
                    </section>
                </div>


            </main>
            <?php require("inc/footer.html"); ?>
        </div>

        <!-- javaScript -->
        <script src="js/script.js">


        </script>
        <?php require("inc/script-databases.html"); ?>
    </body>

    </html>
