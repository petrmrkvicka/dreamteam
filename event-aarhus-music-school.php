<?php
  //variables set for head.html, where these are used to show difference between pages
  $title = "Name of the event - Dokk1";
  $descr = "";
  $keywords = "Music, Library, Dokk1, musician, Drum, Drummer, Drumming, Aarhus Musikskole";
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
                    <div id="event--header-image" class="event--header-image" style="background:url('images/events-aarhus-music-school.jpg')">


                        <h2 class="event--date mob">26<br><span class="month">May</span><span class="time">10:30<br>-12:30</span></h2>


                        <div class="browse--bottom">
                            <h2 class="browse--header">Aarhus Music School’s Drum Show</h2>
                            <h2 class="event--date des">26<br><span class="month">May</span><span class="time">10:30<br>-12:30</span></h2>

                            <p class="event--description">Aarhus Music School has prepared a program of megabeat bands, percussion, small ensembles, marimba, and other gems. </p>
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
                            <img src="images/event4.JPG" alt="yup">
                            <img src="images/event7.JPG" alt="yup">
                            <img src="images/event3.JPG" alt="yup">
                            <img src="images/event2.JPG" alt="yup">
                            <img src="images/event1.JPG" alt="yup">
                        </div>
                        <div>
                            <a class="rightArrow">→</a>
                        </div>
                    </div>
                    <br>



                </section>



                <div class="flexContainer">
                    <section class="flexContainerItem first">
                        <p>Everyone is welcome to come enjoy the big bang of student and teacher drummers. 
                        </p>
                        <br>
                        <p>This event is free.                     </p>
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
                            <img src="images/petr.png" alt="yup">
                            <img src="images/shereen.png" alt="yup">
                            <img src="images/flo.png" alt="yup">
                            <img src="images/petr.png" alt="yup">
                            <img src="images/melissa.png" alt="yup">
                            <img src="images/petr.png" alt="yup">
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
