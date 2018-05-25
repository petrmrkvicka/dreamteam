<?php
  //variables set for head.html, where these are used to show difference between pages
  $title = "Name of the event - Dokk1";
  $descr = "";
  $keywords = "Dokk1, Library, Knit, Knitting, Knit wit, Knitting club, knitting circle, creative, meetup, art ";
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
                    <div id="event--header-image" class="event--header-image" style="background:url('images/event7.jpg')">


                        <h2 class="event--date mob">2<br><span class="month">June</span><span class="time">13:00<br>-16:00</span></h2>


                        <div class="browse--bottom">
                            <h2 class="browse--header">Knitting Café </h2>
                            <h2 class="event--date des">2<br><span class="month">June</span><span class="time">13:00<br>-16:00</span></h2>

                            <p class="event--description">Have you always wanted to learn how to knit or are you looking for a knitting circle? Then the Knitting Café might be something for you.</p>
                        </div>

                    </div>
                </section>
                <section>
                    <h2>This is what it looks like!</h2>
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
                        <p>Bring your yarn with and meet other happy knitters and crocheters. There will not be an instructor present, but we help each other. Beginners are welcome to join. 
                        </p>
                        <br>
                        <p>We are looking forward to seeing you for a nice afternoon.
                        </p> 
                        <br>
                        <p>Knitting Cafe is free and open for anyone ages 12+. 
                        </p>
                        <br>
                        <p>We meet in the DOKK1 Corner (Hjørnet).</p>
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