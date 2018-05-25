<?php
  //variables set for head.html, where these are used to show difference between pages
  $title = "Chess for Fun - Dokk1";
  $descr = "";
  $keywords = "Chess, Fun, Game, Teen, Competition, Board Game, Dokk1, Library, Play";
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
                    <div id="event--header-image" class="event--header-image" style="background:url('images/event-chess.jpg')">


                        <h2 class="event--date mob">2<br><span class="month">June</span><span class="time">12:00<br>-15:00</span></h2>


                        <div class="browse--bottom">
                            <h2 class="browse--header">Chess for Fun </h2>
                            <h2 class="event--date des">2<br><span class="month">June</span><span class="time">12:00<br>-15:00</span></h2>

                            <p class="event--description">Chess for Fun is for all ages! Come play chess at DOKK1 whether you’re a chess lover, a grandmaster, or just want to learn how to play.</p>
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
                            <img src="images/event-chess1.JPG" alt="Boy playing chess at DOKK1.">
                            <img src="images/event-chess2.JPG" alt="Chess event at DOKK1.">
                            <img src="images/event-chess3.JPG" alt="Giant chess pieces at DOKK1.">
                        </div>
                        <div>
                            <a class="rightArrow">→</a>
                        </div>
                    </div>
                    <br>



                </section>



                <div class="flexContainer">
                    <section class="flexContainerItem first">
                        <p>Of course we all care about that checkmate, but the atmosphere is much more social than competitive. 
                        </p>
                        <br>
                        <p>We meet on the ramp every Saturday from 12-15. 
                        </p>
                        <br>
                        <p>If you have any questions, please contact Ole Ewald Thiesen at oet@aarhus.dk.
                        </p>
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